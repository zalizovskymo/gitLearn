<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewRequest;
use App\Models\NewModel;

class NewController extends Controller{
    
    public function submit(NewRequest $req){
        //dd($req->input('message'));
        // $validation = $req->validate([
        //     'message'=>'required|min:15|max:500'
        // ]);
        $newModel = new NewModel();

            $newModel->name = $req->input('name');
            $newModel->email = $req->input('email');
            $newModel->message = $req->input('message');

        $newModel->save();

        return redirect()->route('home')->with('success', 'Message sended.');
    }
}
