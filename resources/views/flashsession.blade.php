<h1> add member  via flash</h1>
@if(session('user'))
<h2 style="color :green" >{{session('user')}} has been added</h2>
@endif
<form  action="flashaddmember" method="POST">
  @csrf
  <input type="text" name="user" placeholder="write user name"> <br> <br>
  <input type="password" name="password" placeholder="write password"> <br> <br>
  <input type="email" name="email" placeholder="write your email"> <br> <br>
  <button>Add member</button>
</form>


 <!-- now we need a controller for this form or this view
i will make a controller with nam of flashsessionController -->
