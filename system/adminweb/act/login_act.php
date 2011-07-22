<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include "config/database.php";
if ($_POST['username'] != "" && $_POST['password'] != "") {
    //query select user
    $pass = md5($_POST["password"]);
    $perintah = mysql_query("SELECT * FROM `user` WHERE `username`='$_POST[username]' and `passwordEn`='$pass'");
    $data = mysql_fetch_array($perintah);
    $jml = mysql_num_rows($perintah);
    if ($jml > 0) {

    }

    }
?>
