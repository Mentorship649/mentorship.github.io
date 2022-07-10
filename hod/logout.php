<?php

session_start();

session_destroy();

echo "<script>alert('Logout Successfully');</script>";
echo "<script>location.href='../';</script>";
       
?>