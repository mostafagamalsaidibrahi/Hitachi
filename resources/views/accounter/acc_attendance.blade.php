@include('accounter.acc_header')
@yield('content')

@if(session('result'))
    <script>
        window.alert("You Are Taked Attendance For This Actor Today");
    </script>
@endif

<div class="retrived-data">

  <table class="table">
      <thead class="thead-dark">
      <tr>
          <th scope="col">Username</th>
          <th scope="col">Type</th>
          <th scope="col">Salary</th>
          <th scope="col">Attendance</th>
      </tr>
      </thead>
      <tbody>

          @foreach($newUser as $obj)
              <tr>
                  <td>{{ $obj->username }}</td> <!--Fullname-->
                  <td>{{ $obj->type }}</td> <!--Username-->
                  <td>{{ $obj->salary }}</td> <!--Password-->
                  <td class="text-center">
                     <a href="/accounter/attendance_yes/{{ $obj->uId }}">Yes</a>
                     <a href="/accounter/attendance_no/{{ $obj->uId }}">No</a>
                  </td>

              </tr>
          @endforeach
      </tbody>
  </table>
