<?php

include 'db.php';
$id=  $_GET['id'];
$del= mysqli_query($conn,"DELETE FROM farmers WHERE id= '$id'");

echo '<script>window.location="view-farmers.php"</script>';