<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\About;

class HomeController extends Controller
{
    public function index(){

        $hero = hero::all();
        $about = about::all();
        return view('home', compact('hero','about'));
    }

    public function redirects(){

        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.adminhome');
        }

        else{
            return view('home');
        }
    }

    public function contact()
    {
        return view('layouts.contact');
    }

    public function contactupload(Request $request)
    {
        $contact = new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('message', 'Message sent successfuly');
    }

    public function about()
    {
        $about = about::all();
        return view('layouts.about', compact('about'));
    }

    public function services()
    {
        return view('layouts.services');
    }

    public function portfolio()
    {
        return view('layouts.portfolio');
    }
    
}
