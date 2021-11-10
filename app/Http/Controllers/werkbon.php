<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\werkboninfo;

class werkbon extends Controller
{
    //pakt alle names van de inputs en plaatst in de database
    function save(Request $req)
    {
        //print_r($req->input());
        $user = new werkboninfo;
        $user->name = $req->name;
        $user->description = $req->description;
        $user->finishDate = $req->finishDate;
        $user->image = $req->image;
        $user->material1 = $req->material1;
        $user->material2 = $req->material2;
        $user->material3 = $req->material3;
        $user->material4 = $req->material4;
        $user->status = 'Niet Afgerond';
        $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$user->image=$filename;
        $user->save();
        return redirect()->route('home');
    }

    
}
