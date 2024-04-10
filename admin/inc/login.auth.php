<?php

session_start();
if (!isset($_SESSION['login_user']))
    die('404 Not Found');
