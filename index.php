<?php
    $title = "Introduction to PHP";
    $author = "By: John Doe";
    $pageTitle = "Brad's PHP Blog";

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo "{$title}" . ' | ' . "{$pageTitle}" ?></title>
  </head>
  <body>
    <main>
      <h1><?php echo "{$title}" ?></h1>
      <p><?php echo "$author" ?></p>
      <p>
        PHP (Hypertext Preprocessor) is a widely used server-side scripting
        language that has revolutionized web development. With its simplicity,
        flexibility, and vast community support, PHP has become the backbone of
        countless dynamic websites and web applications.
      </p>
    </main>
  </body>
</html>