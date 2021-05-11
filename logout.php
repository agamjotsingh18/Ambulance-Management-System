<?php

session_abort();
session_destroy();
header("location:index.php");
?>
