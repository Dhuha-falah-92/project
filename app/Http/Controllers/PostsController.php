<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Posts::latest()->paginate(10);
        return view('control.posts.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        // $d=Posts::OnlyTrashed()->get();
        // return view('control.posts.trashed',compact('data'));

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('control.posts.create',compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'image'],
            // 'content' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string',  'max:255'],
        ]);
        $path=$request->content;
        $new_path=time().$path->getClientOriginalName();
        $path->move('uploade/imges',$new_path);
       Posts::create([
            'title' => $request->title,
            'content' =>'uploade/imges/'.$new_path,
            'category_id' =>$request->category_id,
            'slug'=>str_slug($request->title),
        ]);

       
            // dd($a->all());
//    Posts::create($request->all());
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        $data=Posts::find($id);
        return view('control.posts.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // $data=Posts::find($id);
        // return view('control.posts.edit',compact('data'));

        $cate=Category::all();
        $data=Posts::find($id);
        return view('control.posts.edit',compact('cate','data'));
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
        $request->validate([
          
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);
        $data=Posts::find($id);
        $data->update($request->all());
  
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Posts::find($id);
        $data->delete();
  
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }

    public function trashed()
    {
        $d=Posts::OnlyTrashed()->get();
  
        // return redirect()->route('posts.trashed');
        return view('control.softdeleted.index')->with('d',$d);
        //  return view('control.posts.trashed');
    }

  
}
