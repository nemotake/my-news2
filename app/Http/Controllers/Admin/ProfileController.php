<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
   {
       $this->validate($request, Profile::$rules);
       
       $news = new Profile;
       $form = $request->all();
      unset($form['_token']);
      unset($form['image']);
      $news->fill($form);
      $news->save();
      
      return redirect('admin/news/create');
    }
}