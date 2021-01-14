

<h1>update member</h1>

<form  action="/edit" method="post">
       @csrf
       <input type="hidden" name="ID" value="{{$data['ID']}}" > <br> <br>
      <input type="text" name="name" value="{{$data['name']}}" > <br> <br>
      <input type="text" name="email" value="{{$data['email']}}"> <br> <br>
      <input type="text" name="Address" value="{{$data['address']}}"> <br> <br>
       <button type="submit">update</button>
</form>
