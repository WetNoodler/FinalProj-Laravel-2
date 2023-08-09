<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class ViewController extends Controller
{
    public function index(Request $request){ //act14.main
        $users = User::all();
        $email = $request->email;
        $password = $request->password;

        if( isset($request->uid) ){
            return view('act14.main')->with([
                'uid' => $request->uid,
                'you' => User::all()->find($request->uid),
                'products' => Product::all()
            ]);
        }
        
        $you = null;
        $uid = null;
        
        foreach ($users as $user){
            if($user->email == $email && $user->password == $password){
                $uid = $user->id;
                $you = User::all()->find($uid);
                break;
            }
        }

        return view('act14.main', compact('uid'))->with([
            'you' => User::all()->find($uid),
            'products' => Product::all()
        ]);
    }
    public function login(Request $request){ //act14.login
        $error = $request->error;
        return view('act14.login', compact('error'));
    }
    public function register(){ //act14.register
        return view('act14.register'); 
    }
    public function cart(Request $request){ //act14.cart
        return view('act14.cart')->with([
            'cart' => Cart::find($request->uid)->products,
            'uid' => $request->uid,
            'you' => User::all()->find($request->uid),
        ]);
    }
    public function details(Request $request){ //act14.details
        return "details";
    }
    public function profile(Request $request){ //act14.profile
        return "profile";
    }
    public function addProduct(Request $request){ //act14.addProduct
        return view('act14.makeProduct')->with([
            'products' => Product::all(),
            'uid' => $request->uid,
            'you' => User::all()->find($request->uid),
        ]);
    }
}
