<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class postController extends Controller
{

    public function view(){
		return view('index');
	}
	public function store(Request $request){
		$name = $request->input('name');
		$Author = $request->input('Author');
		$Created = $request->input('Created');
		$Description = $request->input('Description');
		$data=array('name'=>$name,"Author"=>$Author,"Created"=>$Created,"Description"=>$Description);
		DB::table('posts')->insert($data);
		echo "Record inserted successfully....";
		
	}
}
		
		?>