<?php

if (!isset($_SESSION['username']) and !isset($_SESSION['level'])) {

	header("location: ../index.php");
}
?>