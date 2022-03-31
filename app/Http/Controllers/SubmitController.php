<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRequest;
use Illuminate\Http\Request;
use App\Models\SubmitModel;
use Illuminate\Support\Facades\Storage;

class SubmitController extends Controller
{
    public  function submit(SubmitRequest $req){
     
        $form = new SubmitModel();
        $form->name = $req->user()->name;
        $form->adress = $req->input('adress');
        $form->category = $req->input('category');
        $form->price = $req->input('price');
        $form->diskription = $req->input('diskription');
       
        if($req->file('photo') != null) {
            $form->photo = substr($req->file('photo')->store('public/img/submits') , 13);
        }

        $form->save();

        return redirect()->route('dashboard');
    }

    public  function delete($id){
     
        SubmitModel::find($id)->delete();
        return redirect()->route('dashboard');
     }

    public  function show(SubmitRequest $req){
        $form = new SubmitModel();
        return view('user', ['data' => $form->orderBy('updated_at', 'desc')->get()]);
    }

    public  function showAdmin(){
        $form = new SubmitModel();
        return view('admin', ['data' => $form->orderBy('created_at', 'desc')->get()]);
    }

    public  function adminDelete($id){
     
        SubmitModel::find($id)->delete();
        return redirect()->route('admin');
     }

    public function showLanding() {
        $form = new SubmitModel();
        return view('landing',  ['data' => $form->orderBy('updated_at', 'desc')->get()]);
    }
}
