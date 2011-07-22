<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//-------menentukan basepath website ini
$url = $_SERVER['SCRIPT_NAME'];
$url = explode("/", $url);
define('BASE_URL', "http://" . $_SERVER["SERVER_NAME"] . "/" . $url[1] . "/");
//-=----agar file ini tidak bisa di akses langsung lewat url
if ($_SERVER['REQUEST_URI'] == $_SERVER["PHP_SELF"]
    )exit(header("location:/".$url[1]));

$db['hostname'] = "localhost";
$db['database'] = "ksc_is";
$db['username'] = "root";
$db['password'] = "";

//untuk menangani error yang di tampilkan oleh kesalah pada password atau userame
function customError($errorLevel, $errorMsg) {
    @session_start();
    $_SESSION['error_msg'] = $errorMsg;
    header("Location: error_db.html");
    exit;
}

set_error_handler("customError");
error_reporting(E_ALL);
//--------------------------------------------------------------------------------
$koneksi = mysql_connect($db['hostname'], $db['username'], $db['password'])
        or die("Koneksi dengan database gagal dibuat, refresh(F5) halaman ini");
mysql_select_db($db['database'])
        or die("ERROR: Database tidak ada!");

?>
