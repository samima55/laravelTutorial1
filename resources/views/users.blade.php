<h1> User log in </h1>



<form action="users" method="post">
  @csrf
  <input type="text" name="username" placeholder=" enter ur id "> <br>

  <span  style="color : red">
      @error('username'){{$message}} @enderror
  </span>
    <br>
  <input type="password" name="userpassword" placeholder=" enter password"> <br>
  <span  style="color : red">
      @error('userpassword'){{$message}} @enderror
  </span>
    <br>

    <button type="submit" name="button">log in</button>
</form>
