<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Mail\ContactMail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
  public function contact()
  {

    return view('frontend.pages.contact_us');

  }
  public function storeContact(Request $request)
   {
      $data=Contactus::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'message'=>$request->message,
      ]);
      return response()->json($data);
   }
   public function contactRead()
   {
     $data=Contactus::all();
     return view('backend.pages.contact.index',compact('data'));
   }
   public function delete($contactus_id){
    Contactus::findOrFail($contactus_id)->delete();
        $notification=array(
        'message'=>'Delete Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    }
}
