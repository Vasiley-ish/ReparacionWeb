<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRequest;
use Illuminate\Http\Request;
use App\Models\SubmitModel;
use Illuminate\Support\Facades\Storage;

class SubmitController extends Controller
{
    public  function submit(SubmitRequest $req){
     
        $form = new Submit();
        $form->name = $req->user()->name;
        $form->adress = $req->input('adress');
        $form->category = $req->input('category');
        $form->price = $req->input('price');
        $form->diskription = $req->input('diskription');
       
        if($req->file('photo') != null) {
            $form->image = substr($req->file('beforeImage')->store('public/img/submits') , 13);
        }

        $form->save();

        return redirect()->route('dashboard');
    }

    public  function show(){
        return view('user');
    }
}
