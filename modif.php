<?php
require 'db.php';
session_start();
if (isset($_POST["modifmat"]))
{$id=$_POST["id"];

$nom=$_POST["nom"];
$enseignant=$_POST["enseignant"];
$class=$_POST["class"];
$groupe=$_POST["groupe"];
$r=mysqli_query($mysqli,"update matiere set  enseignant='$enseignant' , class='$class', groupe='$groupe' where nom='$nom' ");
if ($r == 1)
header('location: matiere.php');
else	header('location: error.php');}

if(isset($_POST["supp"]))
{$nom=$_POST["nom"];
$r=mysqli_query($mysqli,"delete from matiere where nom='$nom'");
if ($r == 1)
	header('location: matiere.php');
else	header('location: error.php');}?>