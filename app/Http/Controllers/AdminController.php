<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Getting Main View ( Statistics )
    public function statistics (){
      $emps=  DB::table('users')->where(['type' => 'employee'])->count();
      $arr_emps = Array('emps'=>$emps);

      $acc=  DB::table('users')->where(['type' => 'accounter'])->count();
      $arr_acc = Array('acc'=>$acc);
      return view('admin.show_statistics')
       ->with(['emps'=>$emps])
        ->with(['acc'=>$acc]);
    }

    // Show All Actors In Our system
    public function show_Actors (){
      $newUser=  DB::table('users')->where(['type' => 'employee'])->orWhere(['type' => 'accounter'])->get();
      $arr = Array('newUser'=>$newUser);
      return view('admin.show_all_actors' ,$arr);
    }

    // Show All Feedbacks
    public function showFeedbacks (){
      $newFeedback=  DB::table('feedback')->get();
      $arr = Array('newFeedback'=>$newFeedback);
      return view('admin.feedbacks' ,$arr);
    }
}
