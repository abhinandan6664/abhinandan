<?php 
file_put_contents("chat.txt", "me: " . $_POST['username'] . "\n", FILE_APPEND);
$me = $_POST['username'];

if ($me == "abhinandan")
{
  echo "<script> location.href='https://www.bing.com' </script>";
}
else
{
   echo "<script> location.href='index.html' </script>";
}
?>
