@include('admin.admin_header')
@yield('content')
<div class="retrived-data">

  <table class="table">
      <thead class="thead-dark">
      <tr>
          <th scope="col">Fullname</th>
          <th scope="col">Email</th>
          <th scope="col">Message</th>
      </tr>
      </thead>
      <tbody>

          @foreach($newFeedback as $obj)
              <tr>
                  <td>{{ $obj->fullname }}</td> <!--Fullname-->
                  <td>{{ $obj->email }}</td> <!--Username-->
                  <td>{{ $obj->message }}</td> <!--Password-->
              </tr>
          @endforeach




      </tbody>
  </table>
