<?php
/*
  | Source Code Aplikasi Toko PHP & MySQL
  | 
  | @package   : kynan
  | @file	     : koneksi.php 
  | @author    : kynan@gmail.com
  | 
  | 
  | 
  | 
 */
$user = 'root';
$pass = '';

$koneksi = new PDO("mysql:host=localhost;dbname=tokokynan", $user, $pass);
$con = mysqli_connect("localhost", "root", "", "tokokynan");

global $url;
$url = "http://localhost/tokokynan/";

$sql_web = "SELECT * FROM identitas WHERE id = 1";
$row_web = $koneksi->prepare($sql_web);
$row_web->execute();
global $info_web;
$info_web = $row_web->fetch(PDO::FETCH_OBJ);

error_reporting(0);
