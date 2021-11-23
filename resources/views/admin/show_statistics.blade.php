@include('admin.admin_header')
@yield('content')
<!-- <h1>Employees : {{ $emps }}</h1>
<h1>Accounters : {{ $acc }}</h1> -->

<div class="result_statistics">
  <div class="container">
    <div class="row">
      <div class="emps col-lg-6 col-md-6 col-sm-12">
        <h1>Number Of Accounters</h1>
        <h1 class="num1 badge badge-secondary"> {{ $acc }} </h1>
        <h1> Accounter </h1>
      </div>
      <div class="acc col-lg-6 col-md-6 col-sm-12">
        <h1>Number Of Employees</h1>
        <h1 class="num2 badge badge-secondary"> {{ $emps }} </h1>
        <h1> Employees </h1>
      </div>
    </div>
  </div>
</div>
