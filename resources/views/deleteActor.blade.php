
<h1>Delete Actor </h1>

 <table border=" 1px">
   <tr>
     <td>name</td>
     <td>email</td>
      <td>Address</td>
        <td>operation</td>
   </tr>

@foreach($actors as $acc)
     <tr>
       <td>{{$acc['name']}}</td>
       <td>{{$acc['email']}}</td>
        <td>{{$acc['address']}}</td>
          <td>
            <a href ={{"delete/".$acc['ID']}}>Delete</a>
            <a href ={{"edit/".$acc['ID']}}>Edit</a>
          </td>
     </tr>
  @endforeach
 </table>
