<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function main()
    {
        return view('pages.main');
    }
    public function index()
    {
      
        return redirect('/home');
    }
    public function reload()
    {
        $ads= DB::table('ads')->join('users','users.id','=','ads.user_id')->select('ads.*','users.name')->orderBy('created_at','desc')->get();
        return view('pages.Main_reload')->with('ads',$ads);
    }
  
}
