<?php 
    include 'database.php';
    class Article extends database{

        public function add($title , $category_id , $description){
            $title = htmlspecialchars(strip_tags($title));
            $category = htmlspecialchars(strip_tags($category_id));
            $description = htmlspecialchars(strip_tags($description));

            $a = new database();
            $a->insert('articles',['title'=>$category,'category_id'=>$category_id,'description'=>$description , 'date' => date('d-m-y h:i:s')]);
            if ($a == true) {
                echo "article added";
            }
        }

    }
?>