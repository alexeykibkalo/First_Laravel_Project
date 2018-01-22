<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>CreateBlog</title>
 </head>
 <body>
 <div>
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
 </div>
  <form action="/newBlog" method="post">
  {{ csrf_field() }}
  <p><select name="id">
    <?php
        foreach($users as $user)
        {
            echo('<option value="'.$user->id.'">'.$user->second_name.'</option>');
        }       
    ?>
  </p>


  
  <p>Blog name:<br /><input type="text" name="blog_name" /></p>
  <p><textarea name="content"></textarea></p>
  <p><input type="submit" value="Send"></p>
  </form>
    
 </body>
</html>