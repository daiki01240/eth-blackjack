<?php

namespace App\Http\Controllers\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');  
  }

  public function index()
  {
      return view('image.index');
  }

  public function contract(Request $request)
  {
      if($request->hasfile('image')){
        $file = $request->file('image');
        if($file->isValid()){
          $file->store('images');  
        }  
      }
      return redirect('/');
  }

    
}
