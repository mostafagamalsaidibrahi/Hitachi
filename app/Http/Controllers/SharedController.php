<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SharedController extends Controller
{
    public function login (Request $request){
      if($request->isMethod('post')){
        // take data from inputs
        $username = $request->input('username');
        $password = $request->input('password');
        if($username == "" || $password == "" || $username == " " || $password == " "){
          echo "<script>window.alert(\"Please Complete Your Data\");</script>";
          return view('main.login');
        }else{



                  // Admin Login Action
                  $checkLoginAccounter = DB::table('users')
                      ->where(['username'=>$username ,'password'=>$password , 'type'=> "accounter"])->get();

                  if(count($checkLoginAccounter) > 0 ){

                    $arr = Array('checkLoginAdmin'=>$checkLoginAccounter);



                      foreach($checkLoginAccounter as $obj)

                        $data = $request->input('username');
                        $file = fopen('username.txt' , 'w');
                        fwrite($file , $data);
                        fclose($file);

                        $data = $obj->uId;
                        $file = fopen('user_id.txt' , 'w');
                        fwrite($file , $data);
                        fclose($file);

                      return redirect("/accounter/newEmp");
                  }else{
                    $checkLoginAdmin = DB::table('users')
                        ->where(['username'=>$username ,'password'=>$password , 'type'=> "admin"])->get();
                        if(count($checkLoginAdmin) > 0 ){

                          foreach($checkLoginAdmin as $obj)

                            $data = $request->input('username');
                            $file = fopen('username.txt' , 'w');
                            fwrite($file , $data);
                            fclose($file);

                            $data = $obj->uId;
                            $file = fopen('user_id.txt' , 'w');
                            fwrite($file , $data);
                            fclose($file);

                          return redirect("/admin/statistics");
                        }else{
                          echo "<script>window.alert(\"Username Or Password Is Wrong\");</script>";
                          return view('main.login');
                        }
                }

        }
    }
    return view('main.login');
    }

    public function makeFeedback (Request $request){
      if($request->isMethod('post')){
        $fullnameValue = $request->input('fullname');
        $emailValue = $request->input('email');
        $messageValue = $request->input('msg');

        if($fullnameValue == "" || $emailValue == "" || $messageValue == "" ||
           $fullnameValue == " " || $emailValue == " " || $messageValue == " "){
             $result = "Done Ya Ba4a";
             session()->flash('result' , $result);
             return redirect ('/');
           }else{
             DB::table('feedback')->insert(
                ['fullname' => $fullnameValue, 'email' => $emailValue , 'message' => $messageValue]
            );
             return redirect ('/');
           }
      }else {
        return View('main.home');
      }
    }

}
