<h1>
  log in through session and saving data
</h1>

   <form  action="sessiondata" method="post">
     @csrf
     <input type="text" name="user" placeholder="user name"> <br> <br>
     <input type="password" name="passwprd " placeholder="password"> <br> <br>
     <button type="submit" name="button">login </button>
   </form>
