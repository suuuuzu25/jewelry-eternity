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
        $cond_body = $request->cond_body;
        if ($cond_body != '') {
            $posts = Information::where('body', 'like', "%$cond_body%")->get();
        } else {
            $posts = Information::all();
        }
        return view('jewelry.information', ['posts' => $posts, 'cond_body' => $cond_body]);
    }

    public function work(Request $request)
    {
        $posts = Work::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        return view('jewelry.work', ['headline' => $headline, 'posts' => $posts]);
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

        Mail::send(['text' => 'emails.contact'], $data, function ($message) use ($contact) {
            $message->to($contact->email, $contact->name)
                ->subject('お問合せありがとうございます。');
        });
        Mail::send(['text' => 'emails.contact_receive'], $data, function ($message) use ($contact) {
            $message->to('jeweleternity.info@gmail.com', '管理者様へ')
                ->subject('お問い合わせがありました。');
        });

        return redirect('contact');
    }
}
