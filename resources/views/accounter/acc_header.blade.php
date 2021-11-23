<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_add_new_employee.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_header.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_attendance.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_show_all_actors.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_statistics.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_statistics_result.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_show_actors_for_update.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_update_salary.css') ?>">
        <link rel="stylesheet" href="<?php echo asset('css/accounter/acc_footer.css')?>">
        <link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>">
    </head>

    <body>

      <?php
        $read_username = file('username.txt');
        foreach ($read_username as $read_userName) {}
      ?>
      <div class="cover-one1">
        <div class="cover-two2">
          <div class="navbar-div">
            <div class="container-fluid">
              <div class="row">
                <div class="logo col-lg-3 col-md-12  col-sm-12 text-center">
                  <h1>Hitachi</h1>
                </div>
                <div class="links col-lg-7 col-md-12  col-sm-12 text-center">
                    <a href="/accounter/newEmp" class="active">Add_New_Employee</a>
                    <a href="/accounter/showActors">Show_Actors</a>
                    <a href="/accounter/attendance">Attendance</a>
                    <a href="/accounter/statistics">Statistics</a>
                    <a href="/accounter/update_salaries">Update_Salaries</a>
                    <a href="/">Logout</a>

                </div>
                <div class="phone col-lg-2 col-md-12  col-sm-12 text-center">
                    <p>Hello {{ $read_userName }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="adding text-center">
