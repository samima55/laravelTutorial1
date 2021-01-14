
<!-- instead of all  code  in about page , we can simple extend the
   template balde laytemp and add extra what we want -->
   @extends('layout.laytemp')
     @section('content')
       <h1>services</h1>
       <ul class="list-group">
            <li  class="list-group-item">java</li>
            <li class="list-group-item">python</li>
            <li class="list-item">php</li>
       </ul>
   @endsection
