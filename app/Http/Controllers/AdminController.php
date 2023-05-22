<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\About;
use App\Models\Service;
use App\Models\Service1;
use App\Models\Portfolio1;
use App\Models\Portfolio;
use App\Models\Testmonial1;
use App\Models\Testmonial;

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

     public function servicesect(){
      $service = service::all();
        return view('admin.services', compact('service'));
     }

     public function service_sect(Request $request){
        $service = new service;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('serviceimage', $imagename);
        $service->image = $imagename;

        $service->title = $request->title;
        $service->paragraph = $request->paragraph;

        $service->save();
        return redirect()->back();

     }

     public function service_sect1(Request $request){
        $service1 = new service1;
        $service1->head = $request->head;
        $service1->description = $request->description;
        $service1->save();
        return redirect()->back();
     }

     public function portfoliosect(){
      return view('admin.portfolio');
     }

     public function portfolio_sect1(Request $request){
      $portfolio1 = new Portfolio1;
      $portfolio1->head = $request->head;
      $portfolio1->description = $request->description;
      $portfolio1->save();
      return redirect()->back();
   }


   public function portfolio_sect(Request $request){
      $portfolio = new Portfolio;

      $image = $request->image;
      $imagename = time().'.'.$image->getClientOriginalExtension();
      $request->image->move('portfolioimage', $imagename);
      $portfolio->image = $imagename;

      $portfolio->title = $request->title;
      $portfolio->save();
      return redirect()->back();
   }

   public function testmonialsect(){
      $testmonial = testmonial::all();
      return view('admin.testmonial', compact('testmonial'));
   }

   public function testmonial_sect1(Request $request){
       
      $testmonial1 = new testmonial1;
      $testmonial1->head = $request->head;
      $testmonial1->description = $request->description;
      $testmonial1->save();
      return redirect()->back();
   }

   public function testmonial_sect(Request $request){
       
      $testmonial = new testmonial;
      $testmonial->paragraph = $request->paragraph;

      $image = $request->image;
      $imagename = time().'.'.$image->getClientOriginalExtension();
      $request->image->move('testmonialimg', $imagename);
      $testmonial->image = $imagename;

      $testmonial->name = $request->name;
      $testmonial->professional = $request->professional;
      $testmonial->save();
      return redirect()->back();
   }

   public function update_service($id){
      $service = service::find($id);
        return view('admin.update_service', compact('service'));
   }

   public function updateservice(Request $request, $id){

      $service = service::find($id);
      $image = $request->image;
      if($image)
      {
         $imagename = time().'.'.$image->getClientOriginalExtension();
         $request->image->move('serviceimage', $imagename);
         $service->image = $imagename;
      }
      
      $service->title = $request->title;
      $service->paragraph = $request->paragraph;

      $service->save();
      return redirect()->back();
   }

   public function delete_service($id){
      $service = service::find($id);
      $service->delete();
      return redirect()->back();
  }


  public function update_testmonial($id){
   $testmonial = testmonial::find($id);
     return view('admin.update_testmonial', compact('testmonial'));
}

public function updatestmonial(Request $request, $id){

   $testmonial = testmonial::find($id);
   $testmonial->paragraph = $request->paragraph;
   $image = $request->image;
   if($image)
   {
      $imagename = time().'.'.$image->getClientOriginalExtension();
      $request->image->move('testmonialimg', $imagename);
      $testmonial->image = $imagename;
   }
   
   $testmonial->name = $request->name;
   $testmonial->professional = $request->professional;
   
   $testmonial->save();
   return redirect()->back();
}

public function delete_testmonial($id){
   $testmonial = testmonial::find($id);
   $testmonial->delete();
   return redirect()->back();
}

}
