<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use Intervention\Image\Facades\Image;

class scontrolController extends Controller
{
    public function index()
    {
     
$id=1;
        $data=Site::find($id);
        // return view('control.site.index',compact('data'));
        return view('control.site.index',compact('data'));
    }



    public function store(Request $request)
    { 
        $id=1;
        $request->validate([
            'sitename' => 'required',
            'logo' => 'required', 
            'slogo' => 'required',
            'phone' => 'required',
            'email' => 'required', 
            
        ]);
    
        $mlogo=$request->file('logo');
        $filename=time().'.'.$mlogo->getClientOriginalExtension();
        $path = 'uploade/logo/'.$filename;
        Image::make($mlogo)->resize(300,300)->save($path);
        
        
        // Site::create([
        //     'sitename' => $request-> sitename, 
        //     'logo' => 'uploade/logo/'.$filename, 
        //     'slogo' => $request-> slogo,   
        // ]);

        
        $data=Site::find($id);
        $data->update([
                'sitename' => $request-> sitename, 
                'logo' => 'uploade/logo/'.$filename, 
                'slogo' => $request-> slogo, 
                'phone' => $request->phone,
                'email' => $request->email,   
            ]);
        return redirect()->back();
    

 



}

}
