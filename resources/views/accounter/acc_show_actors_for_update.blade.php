@include('accounter.acc_header')
@yield('content')


<div class="retrived-data">

  <table class="table">
      <thead class="thead-dark">
      <tr>
          <th scope="col">Username</th>
          <th scope="col">Type</th>
          <th scope="col">Salary</th>
          <th scope="col">Action</th>
      </tr>
      </thead>
      <tbody>

          @foreach($newUser as $obj)
              <tr>
                  <td>{{ $obj->username }}</td> <!--Fullname-->
                  <td>{{ $obj->type }}</td> <!--Username-->
                  <td>{{ $obj->salary }}</td> <!--Password-->
                  <td><button type="submit" class="btn btn-primary"><a href="/accounter/updating/{{ $obj->uId }}"> Update </a></button></td>
              </tr>
          @endforeach




      </tbody>
  </table>
