@if(Session::has('success'))
    <p style="color:green;">{{ Session::get('success') }}</p>
@endif

@if(Session::has('error'))
 <p style="color:red;">{{ Session::get('error') }}</p>
@endif

@if($errors -> any()) 
    <p style="color:red;"  >{{ $errors -> first() }}</p>
@endif