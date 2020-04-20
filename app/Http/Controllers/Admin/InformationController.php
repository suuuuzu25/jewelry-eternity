<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Information;



class InformationController extends Controller
{
  public function add()
  {
      return view('admin.information.create');
  }

  public function create(Request $request)
  {

      // Varidationを行う
      $this->validate($request, Information::$rules);

      $information = new Information;
      $form = $request->all();

      

      unset($form['_token']);
      // データベースに保存する
      
      $information->fill($form);
      $information->save();

      return redirect('admin/information');
  }

  public function index(Request $request)
  {
      $cond_body = $request->cond_body;
      if ($cond_body != '') {
          $posts = Information::where('body', 'like', "%$cond_body%")->get();
      } else {
          $posts = Information::all();
      }
      return view('admin.information.index', ['posts' => $posts, 'cond_body' => $cond_body]);
  }


  public function edit(Request $request)
  {
      // Information Modelからデータを取得する
      $information = Information::find($request->id);

      return view('admin.information.edit', ['information_form' => $information]);
  }

    public function update(Request $request)
    {
        $this->validate($request, Information::$rules);
        $information = Information::find($request->id);
        $information_form = $request->all();
        unset($information_form['_token']);
        unset($information_form['remove']);
        $information->fill($information_form)->save();
        return redirect('admin/information/');
        
    }
  

  public function delete(Request $request)
  {
      // 該当するInformation Modelを取得
      $information = Information::find($request->id);
      // 削除する
      $information->delete();
      
      return redirect('admin/information/');
  }  


}
