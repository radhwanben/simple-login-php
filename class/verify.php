<?php

require_once 'class/database.php';
require_once 'class/user.php';


$user =new User();




if(isset($_POST['btn-login']))
{
   $umail = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
   $upass = htmlspecialchars(trim($_POST['password']), ENT_QUOTES, 'UTF-8'); 
  
 if($user->login($umail,$upass))
 {
  $user->is_loggedin();
  $user->redirect('/dashbord');
 }
 else
   {
   $user->redirect('/login');
   } 
}