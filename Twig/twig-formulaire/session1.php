<?php

session_start();

$_SESSION['userId'] = 123;

echo $_SESSION['userId'];
