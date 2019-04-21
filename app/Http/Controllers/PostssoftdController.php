<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;

class PostssoftdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $d=Posts::onlyTrashed()->get();
// dd($d);
        // return redirect()->route('softdelete.index');


    //     $d=Posts::whereNotNull('deleted_at' )->get();
  
        // return redirect()->route('posts.trashed');
        return view('control.softdelete.index',compact('d'));
        // $orders = App\Order::withTrashed()->search('Star Trek')->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Posts::withTrashed()->where('id',$id)->first();
        $post->restore();
       
        return redirect()->route('posts.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Posts::withTrashed()->where('id',$id)->first();
        $post->forceDelete();
        return  redirect()->back();
    }

    public function trashed()
    {
        // $d=Posts::OnlyTrashed()->get();
  
        // // return redirect()->route('posts.trashed');
        // return view('control.softdelete.index')->with('d',$d);
        // //  return view('control.posts.trashed');
    }
}
