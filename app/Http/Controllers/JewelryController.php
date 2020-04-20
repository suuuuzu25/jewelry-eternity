<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;


use App\Information;
use App\Work;
use App\Contact;
use Mail;


class JewelryController extends Controller
{
    public function index(Request $request)
    {
        return view('jewelry.index');
    }
    
    public function information(Request $request)
    {
        // ここにお知らせ一覧を取得する処理を書く
        $posts = Information::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        
        return view('jewelry.information');
    }
    public function work(Request $request)
    {
        $posts = Work::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        return view('jewelry.work');
    
    }
    public function profile(Request $request)
    {
        return view('jewelry.profile');
    }
    public function contact(Request $request)
    {
        
        return view('jewelry.contact');
    }
    
    public function complete(Request $request)
  {

      // Varidationを行う
      $this->validate($request, Contact::$rules);

      $contact = new Contact;
      $form = $request->all();

      

      unset($form['_token']);
      // データベースに保存する
      
      $contact->fill($form);
      $contact->save();
      $data = ['contact' => $contact];
      
      Mail::send(['text' => 'emails.contact'], $data, function($message) use ($contact){
        $message->to($contact->email, $contact->name)
          ->subject('お問合せありがとうございます。');
      });
      
      return redirect('contact');
      
      
  }
    
}