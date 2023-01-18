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
                $this->sessionGenerator();
                $_SESSION['user'] = $username;
                header("location:../index.php");
                echo "location to index.php page";
            } else {
                $this->sessionGenerator("issue" , "No recorde register , check your password or username");
                echo "No recorde register , check your password or username";
                header("location:login.php");die();
            }
        }else{
            $this->sessionGenerator("issue" , "Please check your information");
            header("location:../login.php");die();
        }
    }
        public function register(){
            // 
        }
        public function logOut(){
            // 
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