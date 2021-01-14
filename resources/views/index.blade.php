@extends('layout.laytemp')
  @section('content')
      <x-header  data=' index component header'/>
    <h1>{{$index}}</h1>
    <p> welcome to index page </p>
@endsection


<!--both laytepmp and header.blade.php is inherited in this file
   header.blade.php is inherited in laytemp and then layemp is extended
   to this file -->
