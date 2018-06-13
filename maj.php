<?php
require 'db.php';
session_start();
if (isset($_POST["modifmat"]))
{$id=$_POST["id"];
$nom=$_POST["nom"];
$l=$_POST["nomens"];
$p=$_POST["classe"];
$p2=$_POST["groupe"];
$r=mysqli_query($con,"update matiere set nomM='$n', nomens='$l' , classe='$p',groupe='$p2' where nom='$nom' ");
if ($r == 1)
header('location: hichem.html');
else	header('location: firas.php');}

if(isset($_POST["supp"]))
{$id=$_POST["id"];
$r=mysqli_query($con,"delete from matiere where id='$id'");
if ($r == 1)
	header('location: hichem.html');
else	header('location: firas.php.php');}?>