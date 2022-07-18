<?php

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
