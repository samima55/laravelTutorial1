
@include('headnav')

<h1>Hello {{$emp}}</h1>

@if($emp=='LALALA')
  <h1>Hi {{$emp}}</h1>
@else
  <h1>Hi uknown </h1>
@endif

<!--
    this is for including another view inside this view
  -->

@include('inner')
