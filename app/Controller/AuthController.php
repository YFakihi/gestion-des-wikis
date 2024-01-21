<?php 
namespace App\Controller;
use App\Model\SignupModel;
use App\Model\SigninModel;
use App\Model\LogoutModel;

class AuthController {
    public function index() {
        include("../app/View/signup.php");
    }
public function signin() {
        include("../app/View/signin.php");
    } 
    public function signup() {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $reg = new SignupModel();
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $reg->registerUser($nom, $email, $password);
            header("Location:".URL_DIR."home");
        }
    }

 
    public function log()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
          
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            $signinModel = new SigninModel();

            $user = $signinModel->login($email, $password);
        
            if($user)
            {
              
               if($user['role'] == 0)
               {
                  header("Location:".URL_DIR."dashboard");
               }
               else{    
                header("Location:".URL_DIR."home");
               }
            }
            else{
                header("Location:".URL_DIR."signup");
            }
        }
    }

    public function logout(){
        $lo = new LogoutModel;
        $lo->logout();
        header('Location: '. $_SERVER['HTTP_REFERER']); 
    }    
    
}

