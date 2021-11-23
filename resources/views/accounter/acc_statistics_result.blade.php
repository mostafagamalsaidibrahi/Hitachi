@include('accounter.acc_header')
@yield('content')
<br>


<div class="retrived-data">

      <div class="att-div">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Username</th>
                <th scope="col">day</th>
                <th scope="col">Month</th>
                <th scope="col">Year</th>
                <th scope="col">Attendance</th>
            </tr>
            </thead>
            <tbody>

              <?php
              $read_month = file('months.txt');
              foreach ($read_month as $read_Month) {}
              ?>

                @foreach($attend as $obj)
                  <tr>
                      <td>{{ $obj->username }}</td> <!--Fullname-->
                      <td>{{ $obj->day }}</td>
                      <td>{{ $read_Month }}</td> <!--Months-->
                      <td>20{{ $obj->year }}</td>
                      <td> {{ $obj->status }} </td>
                  </tr>
                @endforeach

            </tbody>
        </table>

      </div>


      <br><br><br>
      <a href="/accounter/statistics" class="btn-back">Back</a>
</div>
