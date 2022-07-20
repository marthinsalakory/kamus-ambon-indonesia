<?php

session_start();

function conn()
{
    return mysqli_connect('localhost', 'root', '', 'kamus');
}

function findAll($table)
{
    return mysqli_query(conn(), "SELECT * FROM $table");
}

function first($table, $key, $value)
{
    return mysqli_query(conn(), "SELECT * FROM $table WHERE $key = '$value'")->fetch_object();
}

function nav_on($name)
{
    $script_name = explode('/', $_SERVER["SCRIPT_NAME"]);
    $phpname = end($script_name);
    if ($phpname == $name) {
        return 'active';
    }
    return null;
}

if (isset($_POST['login'])) {
    if ($username == 'admin' && $passwword == 'admin') {
        // $_SESSION['login'] = true;
        $script_name = explode('/', $_SERVER["SCRIPT_NAME"]);
        $phpname = end($script_name);
        echo "<script>alert('Login Success');window.location = '<?= $phpname; ?>';</script>";
    } else {
        $script_name = explode('/', $_SERVER["SCRIPT_NAME"]);
        $phpname = end($script_name);
        echo "<script>alert('Login Failed');window.location = '<?= $phpname; ?>';</script>";
    }
}

function is_login()
{
    if (isset($_SESSION['login'])) {
        return true;
    }
    return false;
}
