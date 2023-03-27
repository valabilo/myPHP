<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Code</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">KodeGo-WD42P</a>
    </div>
    <ul class="nav navbar-nav">
    <li ><a href="/myPHP">Home</a></li>
      <li class="active"><a href="/myPHP/contacts.php">Contacts</a></li>
      <li><a href="/myPHP/about.php">About</a></li>>
    </ul>
  </div>
</nav>
<div class="container text-center">
<form method="post" action="" class="justify-content-center w-100">
    <input type="text" name="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" />
    <input type="submit" name="submit" />
  </form>
  
<?php
if(isset($_POST['submit'])) {
  echo 'You entered: ', htmlspecialchars($_POST['something']);
}
?>
</div>
</body>
</html>