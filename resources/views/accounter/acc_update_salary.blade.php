@include('accounter.acc_header')
@yield('content')

@if(session('result'))
    <script>
        window.alert("Please Insert Salary Value");
    </script>
@endif
<form method="post" action="/accounter/makingUpdating">
  {{ csrf_field() }}
  @foreach($newUser as $obj)
  <input type="number" name="newSal" value="{{ $obj->salary }}" />
  @endforeach
  <button type="submit">Update</button>
</form>
