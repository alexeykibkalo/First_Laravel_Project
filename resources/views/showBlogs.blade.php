<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Blogs</title>
 </head>
 <body>
 <p><input type="button" value="Create blog" onClick='location.href="/createBlog"'></p>
  <form action="/showBlog" method="get">
   <p><strong>Select blog</strong></p>
   <p><select name="id" multiple>
    <?php
        foreach($users as $user)
        {
            echo('<option value="'.$user->id.'">'.$user->second_name.'</option>');
        }
       
         ?>
   
   </select></p> 
   <p><input type="submit" value="Show"></p>
   
  </form> 
 </body>
</html>