<?php

namespace App\Http\Controllers\Ipfs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cloutier\PhpIpfsApi\IPFS;

class IpfsController extends Controller
{
    //
  public function __construct()
  {
    $this->middleware('guest');
  }


  public function ipfs()
  {
    $ipfs = new IPFS("localhost", "8080", "5001");
    $hash = $ipfs->add("Hello world");
   
    var_dump($ipfs->cat($hash));
    
  
  }

}
