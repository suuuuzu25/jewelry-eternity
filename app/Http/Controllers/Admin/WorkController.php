<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Work;



class WorkController extends Controller
{
  public function add()
  {
      return view('admin.work.create');
  }

  public function create(Request $request)
  {

      // Varidationを行う
      $this->validate($request, Work::$rules);
      $work = new Work;
      $form = $request->all();

      // formに画像があれば、保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $work->image_path = basename($path);
      } else {
          $work->image_path = null;
      }

      unset($form['_token']);
      unset($form['image']);
      // データベースに保存する
      $work->fill($form);
      $work->save();

      return redirect('admin/work/');
  }

  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Work::where('title', $cond_title)->get();
      } else {
          $posts = Work::all();
      }
      return view('admin.work.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }


  public function edit(Request $request)
  {
      // Work Modelからデータを取得する
      $work = Work::find($request->id);

      return view('admin.work.edit', ['work_form' => $work]);
  }

      public function update(Request $request)
    {
        $this->validate($request, Work::$rules);
        $work = Work::find($request->id);
        $work_form = $request->all();
        if ($request->remove == 'true') {
            $work_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $work_form['image_path'] = basename($path);
        } else {
            $work_form['image_path'] = $work->image_path;
        }

        unset($work_form['_token']);
        unset($work_form['image']);
        unset($work_form['remove']);
        $work->fill($work_form)->save();

       

        return redirect('admin/work/');
    }
  

  public function delete(Request $request)
  {
      // 該当するWork Modelを取得
      $work = Work::find($request->id);
      // 削除する
      $work->delete();
      
      
      
      return redirect('admin/work/');
  }  


}