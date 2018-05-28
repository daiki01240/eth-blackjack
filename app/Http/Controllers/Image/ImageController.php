<?php

namespace App\Http\Controllers\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Ipfs\IpfsController;
use Config;
use App\Libs\Eth\Ethereum;
use Illuminate\Support\Facades\Storage;

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
      $ipfs = new IpfsController;

      if($request->hasfile('image')){
   
        $file = $request->file('image');

        if($file->isValid()){

          $filename = $file->getClientOriginalName();
          $path =  $file->storeAs('images',$filename);  
          $contents = Storage::get($path);

          $result = $ipfs->ipfsGenerate($contents);
          var_dump($result);

        }  
      }
      //return redirect('/');
  }

  public function ethereum()
  {
      $eth = new Ethereum(Config::get('eth.node_host'),Config::get('eth.node_port'));

      $base = $eth->eth_coinbase();
      dd($eth->eth_accounts());
  }
    
}
