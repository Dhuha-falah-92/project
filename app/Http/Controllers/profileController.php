<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;



class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        return view('control.profile.index',array('user'=>Auth::user()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            $path = 'uploade/avatars/'.$filename;

            Image::make($avatar)->resize(300,300)->save($path);

            $user=Auth::user();
            $user->avatar=  $path;
            $user->save();

            return view('control.profile.index',array('user'=>Auth::user()));

        }
        else {
            echo "error";
        }


    //     $request->validate([
    //         'title' => ['required', 'string', 'max:255'],
    //         'content' => ['required', 'image'],
    //         // 'content' => ['required', 'string', 'max:255'],
    //         'category_id' => ['required', 'string',  'max:255'],
    //     ]);
    //     $path=$request->content;
    //     $new_path=time().$path->getClientOriginalName();
    //     $path->move('uploade/imges',$new_path);
    //    Posts::create([
    //         'title' => $request->title,
    //         'content' =>'uploade/imges/'.$new_path,
    //         'category_id' =>$request->category_id,
    //         'slug'=>str_slug($request->title),
    //     ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
