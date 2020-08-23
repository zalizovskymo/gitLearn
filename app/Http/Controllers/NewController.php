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

    public function allMessages() {
        // $newModel = NewModel::all();
        // dd($newModel);
        $newModel = new NewModel();
        //$newModel->all()
        //$newModel->orderBy('id','asc')->skip(1)->take(1)->get()
        //$newModel->where('id', '=', '2')->get()
        return view('messagesView', ['data' => $newModel->all()]);
    }
}
