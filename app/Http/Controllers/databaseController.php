<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class databaseController extends Controller
{
    public function insertIntoCategory(Request $request)
    {
      $data = array();
      $data['name'] = $request->name;
      $data['address'] = $request->adrress;
      $category=DB::table('CATEGORIES')->insert($data);
      //return response()->json($data);
      //echo "<pre>";
      //print_r($data);
      if($category)
      {
        $notification = array('message' => 'Successfully inserted', 'alert-type' => 'success');
        return Redirect()->back()->with($notification);
      }
      else
      {
        $notification = array('message' => 'Try again Please', 'alert-type' => 'error');
        return Redirect()->back()->with($notification);
      }
    }
}
