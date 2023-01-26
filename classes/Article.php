<?php 
    include 'database.php';
    class Article extends database{

        public function add($title , $category_id , $description){
            $title = htmlspecialchars(strip_tags($title));
            $category = htmlspecialchars(strip_tags($category_id));

            $a = new database();
            $a->insert('articles',['title'=>$title,'category_id'=>$category,'description'=>$description , 'user_id'=> $_SESSION['user_info']['user_id'] , 'date' => date('d-m-y h:i:s')]);
            if ($a == true) {
                $this->sessionGenerator('success' , "Article Add Successfully");
            }
        }

        public function show(){
            $b = new database();
            // $b->select("articles","*");
            $b->select("articles INNER JOIN categories ON articles.category_id = categories.id","* , articles.id article_id , categories.name category ");
            $result = $b->sql;
            return $result;
        }

        public function destroy($id){
            $id = htmlspecialchars(strip_tags($id));
            $a = new database();
            $a->delete('articles',"id='$id'");
            $this->sessionGenerator('success' , "Article Delete Successfully");
        }

        public function edit($id){
            $id = htmlspecialchars(strip_tags($id));
            $b = new database();
            $b->select("articles","*" , "id = '$id'");
            $sql = $b->sql;
            $result = mysqli_fetch_assoc($sql);
            return $result;
        }

        public function updateArticle($id , $title , $category , $description){
            $id = htmlspecialchars(strip_tags($id));
            $title = htmlspecialchars(strip_tags($title));
            $category = htmlspecialchars(strip_tags($category));
            $description = htmlspecialchars(strip_tags($description));
            
            $a = new database();
            $a->update('articles',['title'=>$title,'category_id'=>$category,'description'=>$description],"id='$id'");
            if ($a == true) {
                $this->sessionGenerator('success' , "Article Updated Successfully");
                header('location:home.php');
            }
        }

        public function showCategories(){
            $b = new database();
            $b->select("categories","*");
            $result = $b->sql;
            return $result;
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