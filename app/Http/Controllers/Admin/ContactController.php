<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;



class ContactController extends Controller
{
  

  public function index(Request $request)
  {
      $cond_body = $request->cond_body;
      if ($cond_body != '') {
          $posts = Contact::where('body', 'like', "%$cond_body%")->get();
      } else {
          $posts = Contact::all();
      }
      return view('admin.contact.index', ['posts' => $posts, 'cond_body' => $cond_body]);
  }

  public function delete(Request $request)
  {
      // 該当するContact Modelを取得
      $contact = Contact::find($request->id);
      // 削除する
      $contact->delete();
      
      return redirect('admin/contact/');
  }  


}
