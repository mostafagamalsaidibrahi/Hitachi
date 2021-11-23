<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AccounterController extends Controller
{
    // Create New Actor
    public function createNewActor (Request $request){

      if($request->isMethod('post')){

          // validation
          $usernameValue = $request->input('username');
          $passwordValue = $request->input('password');
          $repasswordValue = $request->input('repassword');
          $salaryValue = $request->input('salary');

          if($usernameValue == "" || $passwordValue == "" || $repasswordValue == "" || $salaryValue == ""){
              echo "<script>window.alert(\"Please Complete Your Data\");</script>";
          }else if($passwordValue == $repasswordValue){
          $newUser = new User();
          $newUser->username = $request->input('username');
          $newUser->password = $request->input('password');
          $newUser->salary = $request->input('salary');
          $newUser->type = "employee";
          $newUser->save();
          echo "<script>window.alert(\"Account is Maked Please Wait For Accepting Your Account By Admin\");</script>";
          return redirect('/accounter/newEmp');
          }else{
              echo "<script>window.alert(\"Password Not Match\");</script>";
          }
          return view('accounter.acc_add_new_employee');
      }else{
          return view('accounter.acc_add_new_employee');
      }
    }

    // Show All Actors
    public function showActors (){
      $newUser=  DB::table('users')->where(['type' => 'employee'])->get();
      $arr = Array('newUser'=>$newUser);
      return view('accounter.acc_show_all_actors' ,$arr);
    }

    // Show All Actors For Attendance
    public function showActorsForAttendance (){
        // start to show actors to take attendance
        $newUser=  DB::table('users')->where(['type' => 'employee'])->get();
        $arr = Array('newUser'=>$newUser);
        return view('accounter.acc_attendance' ,$arr);
    }

    // Yes Actor Is Attended
    public function attend ($id){
      // Take Current Day and Month and Year
       $transdate = date('m-d-Y', time());
       $day = date('d');
       $month = date('m');
       $year = date('y');

      // check if data is inserted or not
      $newUser=  DB::table('attendance')->where(['uId' => $id , 'day' => $day , 'month' => $month , 'year' => $year])->get();
      if(count($newUser) > 0 ){
        // if found Alert and Redirect
            $result = "Done Ya Ba4a";
            session()->flash('result' , $result);
        return redirect('/accounter/attendance');
      }else{
        // Take Username Of this Actor
        $newUser=  DB::table('users')->where(['uId' => $id])->get();
        $arr = Array('newUser'=>$newUser);
        foreach($newUser as $obj)
        // Not Found Insert And Redirect
        DB::table('attendance')->insert([
            ['uId' => $id, 'username' => $obj->username , 'day' => $day , 'month' => $month , 'year' => $year , 'status' => "yes"]
        ]);
         return redirect('/accounter/attendance');
      }

    }

    // No Actor Is Not Attended
    public function notAttend ($id){
      // Take Current Day and Month and Year
       $transdate =date('m-d-Y', time());
       $day = date('d');
       $month = date('m');
       $year = date('y');
       // check if data is inserted or not
      $newUser=  DB::table('attendance')->where(['uId' => $id , 'day' => $day , 'month' => $month , 'year' => $year])->get();
      if(count($newUser) > 0 ){
        // if found Alert and Redirect
            $result = "Done Ya Ba4a";
            session()->flash('result' , $result);
        return redirect('/accounter/attendance');
      }else{
        // Take Username Of this Actor
        $newUser=  DB::table('users')->where(['uId' => $id])->get();
        $arr = Array('newUser'=>$newUser);
        foreach($newUser as $obj)
        // Not Found Insert And Redirect
        DB::table('attendance')->insert([
            ['uId' => $id, 'username' => $obj->username , 'day' => $day , 'month' => $month , 'year' => $year , 'status' => "no"]
        ]);
         return redirect('/accounter/attendance');
      }
    }


    public function getStatistics(Request $request){
      if($request->isMethod('post')){


        $data = $_POST["months"];
        $file = fopen('months.txt' , 'w');
        fwrite($file , $data);
        fclose($file);

        return view ("Accounter.acc_statistics");
      }
return view ("Accounter.acc_statistics");
    }

public function getResult(){

  $read_month = file('months.txt');
  foreach ($read_month as $read_Month) {}


      $attend=  DB::table('attendance')->where(['month' => $read_Month])->get();


      if(count($attend) > 0 ){

        $arr = Array('attend'=>$attend);
        return view('accounter.acc_statistics_result' , $arr);
      }else {
        $result = "Done Ya Ba4a";
        session()->flash('result' , $result);
          return redirect('/accounter/statistics');
      }
    }

    // Getting Update Salary View
    public function getUpdateSalariesView (){
      $newUser=  DB::table('users')->where(['type' => 'employee'])->get();
      $arr = Array('newUser'=>$newUser);
      return view ('accounter.acc_show_actors_for_update' , $arr);
    }

    // Send Id And Salary To Text Field
    public function getIdForUpdating ($id){
        $newUser=  DB::table('users')->where(['uId' => $id])->get();
        $arr = Array('newUser'=>$newUser);
        // Save Seleted Actor id
        $data = $id;
        $file = fopen('salary.txt' , 'w');
        fwrite($file , $data);
        fclose($file);

        return view('accounter.acc_update_salary' , $arr);
    }

    // Making Update Action At The end
    public function makeUpdating(Request $request){

      $read_salary = file('salary.txt');
      foreach ($read_salary as $readSalary) {}

        $newSalary = $request->input('newSal');

            $affected = DB::table('users')
                  ->where('uId', $readSalary)
                  ->update(['salary' => $newSalary]);

      return redirect ('/accounter/update_salaries');
    }


}
