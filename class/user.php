<?php


require_once('database.php');


class user{

    public $db;
 
    public function __construct()
    {
        $this->db = database::connection();
    }


    public function login(string $email, string $password): bool
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM users WHERE  email=:email LIMIT 1");
          $stmt->execute(array(':email'=>$email));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['password']))
             {
                session_start();
                $_SESSION['user_session'] = $userRow['id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
 
    }




    public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }


   public function redirect($url)
   {
       header("Location: $url",true, 301);
   }

   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}