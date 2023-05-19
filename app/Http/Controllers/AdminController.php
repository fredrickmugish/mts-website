<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\About;


class AdminController extends Controller
{
    

    public function customers(){

        $contact = contact::all();
        return view('admin.customers', compact('contact'));
    }

    public function hero(){
         $hero = hero::all();
        return view('admin.hero', compact('hero'));
    }
    
    public function hero_section(Request $request)
    {
         $hero = new hero;
         
         $hero->title = $request->title;
         $hero->paragraph = $request->paragraph;

         $image = $request->image;
         $imagename =time().'.'.$image->getClientOriginalExtension();
         $request->image->move('heroimage', $imagename);
         $hero->image = $imagename;

         $hero->save();
         return redirect()->back();
    } 

    public function delete_hero($id){
        $hero = hero::find($id);
        $hero->delete();
        return redirect()->back();
    }

    public function update_hero($id){
        $hero = hero::find($id);
        return view('admin.updatehero' , compact('hero'));
    }

     public function updatehero(Request $request, $id){
          $hero = hero::find($id);
          $hero->title = $request->title;
          $hero->paragraph = $request->paragraph;
 
          
          $image = $request->image;
          $imagename = time().'.'.$image->getClientOriginalExtension();
          $request->image->move('heroimage', $imagename);
          $hero->image = $imagename;
        
          $hero->save();
          return redirect()->back();
     }

     public function aboutsect(){
        $about = about::all();
        return view('admin.about', compact('about'));
     }

     public function about_sect(Request $request){
        $about = new about;
        $about->head = $request->head;
        $about->title = $request->title;
        $about->paragraph = $request->paragraph;

        $image = $request->image;
        $imagename = time().'.'.$image->getCLientOriginalExtension();
        $request->image->move('aboutimage', $imagename);
        $about->image = $imagename;

        $about->save();
        return redirect()->back();
     }

     public function delete_about($id){
         $about = about::find($id);
         $about->delete();
         return redirect()->back();
     }

     public function update_about($id){
        $about = about::find($id);
        return view('admin.updateabout', compact('about'));
     }

     public function updateabout(Request $request, $id){
        $about = about::find($id);
        $about->head = $request->head;
        $about->title = $request->title;
        $about->paragraph = $request->paragraph;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getCLientOriginalExtension();
            $request->image->move('aboutimage', $imagename);
            $about->image = $imagename;
        }
        $about->save();
        return redirect()->back();
     }
}
