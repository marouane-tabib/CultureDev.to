<?php 
    include 'database.php';
    class User extends database{
    function login($username , $password){
        // *** Change username to login 
        $username = htmlspecialchars(strip_tags($username));
        $password = htmlspecialchars(strip_tags($password));

        // Patterns ...
        $passPattern = '/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/';
        $usernamePattern = '/^[a-z\d_]{5,20}$/i';
        
        // include 'database.php';

        // $id = $_GET['id'];
        // $b = new database();
        // $b->select("users","*","username='$username' AND password='$password'");
        // $result = $b->sql;

        // $row = mysqli_fetch_assoc($result);
        
        if(preg_match($usernamePattern, $username) && preg_match($passPattern, $password)){
            $password = md5($password);

            $b = new database();
            $b->select("users","*","user_name='$username' AND password='$password'");
            $sql = $b->sql;
            $result = mysqli_fetch_assoc($sql);
            
            if (isset($result)) {
                $this->sessionGenerator();
                $_SESSION['user'] = $username;
                // header("location:../index.php");
                echo "location to index.php page";
            } else {
                $this->sessionGenerator("issue" , "No recorde register , check your password or username");
                echo "No recorde register , check your password or username";
                // header("location:../login.php");die();
            } 
            // $conn->close();
        }else{
            $this->sessionGenerator("issue" , "Please check your information");
            header("location:../login.php");die();
        }
    }
        // public function OldLogin(){
        //     if (isset($_POST['submit'])) {
        //         $name = $_POST['name'];
        //         $email = $_POST['email'];
        //         $phone = $_POST['phone'];
        //         $subject = $_POST['subject'];
        //         $message = $_POST['message'];
        
        //         $date = date("Y-m-d h:i:s A");
        
        //         $a = new database();
        //         $a->insert('data',['name'=>$name,'email'=>$email,'phone'=>$phone,'subject'=>$subject,'message'=>$message,'created'=>$date,'updated'=>$not]);
        //         if ($a == true) {
        //             header('location:index.php');
        //         }
        //     }
        // }
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