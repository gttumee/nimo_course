<?php

namespace App\Http\Controllers;

use App\Models\course_request;
use App\Models\research;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function research(Request $request){
    $research = new research();
    $research->name = $request->input('name');
    $research->email = $request->input('emailandphone');
    $research->type = $request->input('type');
    $research->text = $request->input('message');
    $research->save();
   return view('pages.index');

   }

   public function course(Request $request){
    $courseRequest = new course_request();
    $courseRequest->type = $request->input('option');
    $courseRequest->firstname = $request->input('firstname');
    $courseRequest->lastname = $request->input('lastname');
    $courseRequest->email = $request->input('email');
    $courseRequest->phone = $request->input('phone');
    $courseRequest->job = $request->input('job_option');
    $courseRequest->save();
    return view('pages.index');
   }
    
}