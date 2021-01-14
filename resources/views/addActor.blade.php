

<h1>
   add actor (saving data in database)
</h1>

<form  action="addactor" method="POST">
  @csrf
  <input type="text" name="name"  placeholder="Enter name"> <br><br>
   <input type="email" name="email" placeholder=" eneter email"> <br> <br>
   <input type="text" name="address" placeholder="enter address"> <br><br>
     <!-- <button type="submit"  class="btn btn-primary">Add Actor</button> -->
     <button type="button" class="btn btn-success">Dark</button>
</form>
