@include('main.header')

@yield('content')


  <form action="/login" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    </div>
  </div>
</div>


@include('main.footer')
