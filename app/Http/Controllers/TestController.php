<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request){
        return $request->uid;
    }
}
