<?php 
    include 'database.php';
    class Category extends database{

        public function show(){
            $b = new database();
            $b->select("categories","*");
            $result = $b->sql;
            return $result;
        }

        public function add($name){
            $name = htmlspecialchars(strip_tags($name));

            $a = new database();
            $a->insert('categories',['name'=>$name]);
            if ($a == true) {
                $this->sessionGenerator('success' , "Category Add Successfully");
            }
        }
        
        public function destroy($id){
            $id = htmlspecialchars(strip_tags($id));
            $a = new database();
            $a->delete('categories',"id='$id'");
            $this->sessionGenerator('success' , "Article Delete Successfully");
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