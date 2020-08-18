<?php

namespace Parth\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Parth\Contact\Models\Contact;

class ContactUsController extends Controller
{
    public function index(){
        return view('contact::conatc-us')->with('name',config('contact.name'));
    }

    public function store(Request $request){
        $data=Contact::create($request->all());
        return $data;
    }
}
