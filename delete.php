<?php

include "inc/connection.php";
$artId=$_GET['ID'];
$sql="DELETE FROM books WHERE id='$artId'";
mysqli_query($con,$sql);

header("Location:manageBooks.php");

?>