<?php
$darkMode = isset($_GET['dark']) ? true : false;
$darkClass = $darkMode ? 'bg-dark text-light' : '';
include('constants.php');
include('schedule.php');
include('template.php');
