<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charity;
use DB;
class searchController extends Controller
{
    public function index(){


    }
    public function action(Request $request){


          $query = $request->input('query');
          if($query != "")
          {
            $data = DB::table('charities')->where('name','LIKE','%'.$query.'%')->orWhere('address','LIKE','%'.$query.'%')->orderBy('id','DESC')->get();
          }else{
            $data = DB::table('charities')->orderBy('id','DESC')->get();
          }
          $total_row = $data->count();

          return view("search",compact('data'));
    }
}
