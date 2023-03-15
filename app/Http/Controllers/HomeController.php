<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    public function index()
    {
       return view('index');
    }
    public function tableBlog()
    {
        $Post= Post::all();
        return view('table', compact('Post'));
    }
    public function save_blog(Request $request){

        $validatedData = $request->validate([
            'post_name'=>'required',
            'post_description'=>'required',
            'post_author'=>'required',
            'post_created'=>'required'
            ], [
                'post_name.required' => 'Please Enter Post Name',
                'post_description.required' => 'Please Enter Post Description',
                'post_author.required' => 'Please Enter Post Author',
                'post_created.required' => 'Please Enter Post Preated'
        
            ]);
   
        try{
        $posts =Post::Create([
            'post_name'=>$validatedData['post_name'],
            'post_description'=>$validatedData['post_description'],
            'post_author'=>$validatedData['post_author'],
            'post_created'=>$validatedData['post_created'],
        ]);
        return redirect('table')->with('message', 'Success' );            
            } catch(\Illuminate\Database\QueryException $ex){ 
                return redirect()->back()->with('error', 'Something went wrong');
         }  
    }
}
