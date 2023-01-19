<?php 
    include 'database.php';
    class User extends database{
    function login($username , $password){
        
        $username = htmlspecialchars(strip_tags($username));
        $password = htmlspecialchars(strip_tags($password));

        // Patterns ...
        $passPattern = '/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/';
        $usernamePattern = '/^[a-z\d_]{5,20}$/i';
        
        if(preg_match($usernamePattern, $username) && preg_match($passPattern, $password)){
            $password = md5($password);

            $b = new database();
            $b->select("users","*","user_name='$username' AND password='$password'");
            $sql = $b->sql;
            $result = mysqli_fetch_assoc($sql);

            if (isset($result)) {
                $_SESSION['userInfo'] = $username;
                $this->sessionGenerator();
                header("location:home.php");
            } else {
                $this->sessionGenerator("issue" , "No recorde register , check your password or username");
            }
        }else{
            $this->sessionGenerator("issue" , "Please check your information");
        }
    }
        public function register($firstName , $lastName , $userName , $password , $confirmPassword){
            $firstName = htmlspecialchars(strip_tags($firstName));
            $lastName = htmlspecialchars(strip_tags($lastName));
            $userName = htmlspecialchars(strip_tags($userName));
            $password = htmlspecialchars(strip_tags($password));
            $confirmPassword = htmlspecialchars(strip_tags($confirmPassword));
            
            // echo "you in the register method | ";
            // Patterns ...
            $passPattern = '/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/';
            $usernamePattern = '/^[a-z\d_]{5,20}$/i';
            
            if($password == $confirmPassword){
                if(preg_match($usernamePattern, $firstName)  && preg_match($usernamePattern, $lastName) && preg_match($usernamePattern, $userName) && preg_match($passPattern, $password) && preg_match($passPattern, $confirmPassword)){
                    $readyRegister = $this->readyRegisterChecker($userName , $password);
                    // echo $readyRegister;
                    if($readyRegister){ 
                        $this->sessionGenerator("issue" , "This Account Ready register it");
                    }
                    else{
                        $password = md5($password);
                        
                        $a = new database();
                        $a->insert('users',['first_name'=>$firstName,'last_name'=>$lastName,'user_name'=>$userName,'password'=>$password]);
                        if ($a == true) {
                            header('location:login.php');
                            $this->sessionGenerator("success" , "Account created successfully");
                        }
                    }
                }else { 
                    $this->sessionGenerator("issue" , "Please , Check your informations");
                }
            }else { 
                $this->sessionGenerator("issue" , "Please , Check your pasword"); 
            }

        }
        public function logOut(){
            // 
        }

        public function readyRegisterChecker($username , $password){
                $password = md5($password);

                $b = new database();
                $b->select("users","*","user_name='$username' and password='$password'");
                $sql = $b->sql;
                $result = mysqli_fetch_assoc($sql);

                if (isset($result)){
                    return true;
                }else {
                    return false;
                }
        }
        
        public function sessionGenerator($status = "success" , $message = "WELCOME BACK ! Login Success ... "){
            if ($status == "success") {
                $_SESSION['action'] = [
                    'status' => "Success !",
                    'class' => "alert alert-success alert-dismissible fade show",
                    'message' => $message,
                ];
            }elseif($status == "issue"){
                $_SESSION['action'] = [
                    'status' => "Problem !",
                    'class' => "alert alert-danger alert-dismissible fade show",
                    'message' => $message,
                ];
            }
        }
    }
?>