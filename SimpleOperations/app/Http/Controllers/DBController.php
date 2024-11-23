<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DBController extends Controller
{
    //
    function qry()
    {
        $res=User::get();
        
        
        return view('welcome',['data'=>$res]);

    }
    
}
