@include('accounter.acc_header')
@yield('content')

<form style="auto;" action="/accounter/newEmp" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
    <label>Re-Password</label>
    <input type="password" class="form-control" name="repassword">
  </div>
  <div class="form-group">
    <label>Salary</label>
    <input type="number" class="form-control" name="salary">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
