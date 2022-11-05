<?php
$page='kontakt';
require 'db.php';

$error=[];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (($_POST['sub'] == "yes")) {
 
  
    $name = $_POST['name'];
    if (empty($name) || (strlen($name) < 2)) {
      $error["name"] = "Please enter name. Name must have more then 2 characters";
    }
    $email = $_POST['email'];
    if (empty($email) || (!str_contains($email, "@"))) {
      $error["email"] = "Please enter email.Email must include @";
    }
    $phone = $_POST['phone'];
    if (empty($phone) || (!is_numeric($phone)) || (strlen($phone) < 9 or strlen($phone) > 11)) {
      $error["phone"] = "Please enter a phone.Only numeric value is allowed, between 9 and 11 characters";
    }
    $title = $_POST['title'];
    if (empty($title)) {
      $error["title"] = "Please enter title";
    }
    $message = $_POST['message'];
    if (empty($message) || (strlen($message) < 12)) {
      $error["message"] = "Please enter message,not less then 12 character";
    }
    if (count($error) === 0) {
      $contacts = new Contacts;
      $contacts->insert($name, $email, $phone, $title, $message);
      header("location:thanks.php");
    }
  }
}


require "contact-page.php";
?>























































