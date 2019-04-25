<?php
/**
 * Created by IntelliJ IDEA.
 * User: Amila Harshana
 * Date: 12/3/2017
 * Time: 8:39 PM
 */
session_start();
session_unset();
session_destroy();
header("Location: index.php");