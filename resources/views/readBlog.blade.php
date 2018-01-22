<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Blog</title>
 </head>
 <body>
 <?php
    foreach($blogs as $blog)
    {
        echo'<p><strong>'.$blog->title.'</strong></p>';
        echo'<p>'.$blog->content.'</p>';
        
    }
    ?>
 </body>
</html>