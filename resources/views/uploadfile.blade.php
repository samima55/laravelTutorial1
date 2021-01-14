<h1>upload file </h1>


<form action="uploadfile" method="post" enctype="multipart/form-data">
  @csrf
  <input type="file" name="file"> <br> <br>
  <button type="submit">upload file </button>
</form>
