
<h1>pegination list </h1>
  <table border=" 1px solid">
     <tr>
       <td>ID</td>
       <td>Name</td>
       <td>lname</td>
       <td>addres</td>
     </tr>
     @foreach($members as $person)
     <tr>
       <td>{{$person['ID']}}</td>
       <td>{{$person['name']}}</td>
       <td>{{$person['lastName']}}</td>
       <td>{{$person['address']}}</td>
     </tr>
     @endforeach
  </table>


  <!-- this part of the code will make pages for other data -->
<span>
    {{$members->links()}}

</span>

 <style >
   .w-5{
     display: none;

   }
 </style>
