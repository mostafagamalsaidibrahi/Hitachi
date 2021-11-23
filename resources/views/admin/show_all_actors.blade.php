@include('admin.admin_header')
@yield('content')
<div class="retrived-data">

  <table class="table">
      <thead class="thead-dark">
      <tr>
          <th scope="col">Username</th>
          <th scope="col">Type</th>
          <th scope="col">Salary</th>
      </tr>
      </thead>
      <tbody>

          @foreach($newUser as $obj)
              <tr>
                  <td>{{ $obj->username }}</td> <!--Fullname-->
                  <td>{{ $obj->type }}</td> <!--Username-->
                  <td>{{ $obj->salary }}</td> <!--Password-->
              </tr>
          @endforeach




      </tbody>
  </table>
