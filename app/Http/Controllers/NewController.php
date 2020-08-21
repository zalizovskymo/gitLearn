<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewRequest;

class NewController extends Controller{
    
    public function submit(NewRequest $req){
        //dd($req->input('message'));
        // $validation = $req->validate([
        //     'message'=>'required|min:15|max:500'
        // ]);

    }
}
