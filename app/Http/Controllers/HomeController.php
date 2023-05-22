<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\About;
use App\Models\Service;
use App\Models\Service1;
use App\Models\Portfolio1;
use App\Models\Portfolio;
use App\Models\Testmonial1;
use App\Models\Testmonial;

class HomeController extends Controller
{
    public function index(){

        $hero = hero::all();
        $about = about::all();
        $service = service::all();
        $service1 = Service1::all();
        $portfolio1 = portfolio1::all();
        $portfolio = portfolio::all();
        $testmonial1 = testmonial1::all();
        $testmonial = testmonial::all();
        return view('home', compact('hero','about','service','service1',
        'portfolio1','portfolio','testmonial1','testmonial'));
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
        $service = service::all();
        $service1 = Service1::all();
        return view('layouts.services', compact('service','service1'));
    }

    public function portfolio()
    {
        $portfolio1 = portfolio1::all();
        $portfolio = portfolio::all();
        return view('layouts.portfolio', compact('portfolio1','portfolio'));
    }
    
}
