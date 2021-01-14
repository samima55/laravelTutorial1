
<h1> htpp method chechking " user login form " </h1>


<form  action="userdata" method="post">
  {{method_field('PUT')}}
  @csrf
   <input type="text" name="user" placeholder="user name"> <br> <br>
   <input type="password" name="password" placeholder="password"> <br> <br>
   <button type="submit" name="submit"> log in</button>
</form>



     <!--
    so submit this form to somewhere we need to make a contorller for
    that    so i will make controller with the name of
    methodController so submit data there

     w cannot write the put method directly for put we have
     to write post and then make it to put
        delete method written same as put
        

  -->
