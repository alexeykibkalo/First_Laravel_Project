<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>CreateBlog</title>
 </head>
 <body>
  <form action="/newBlog" method="post">
  {{ csrf_field() }}
    <p>Author:<br /><input type="text" name="author" /></p>
    <p>Blog name:<br /><input type="text" name="blog_name" /></p>
    <p><textarea name="content"></textarea></p>
    <p><input type="submit" value="Send"></p>
  </form>
    
 </body>
</html>