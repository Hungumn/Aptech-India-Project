<?php

class CategoryModel extends DB{
    public function checkCategory($category_name){
        $sql = "select * from category where category_name = '$category_name'";

        $data = $this->executeResult($sql);

        if($data == null || count($data) == 0){
            return true;
        }else{
            return false;
        }
    }

    public function addCategory($category_name){
        $sql = "insert into category(category_name) values ('$category_name')";

        $this->execute($sql);
    }

    public function showCategory(){
        $sql = "select * from category";

        $data = $this->executeResult($sql, false);

        return $data;
    }

    public function showCategoryDetail($id){
        $sql = "select * from category where id = '$id'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function editCategory($id, $category_name){
        $sql = "update category set category_name = '$category_name' where id = '$id'";

        $this->execute($sql);
    }

    public function deleteCategory($id){
        $sql = "START TRANSACTION;
                    delete from product_size where product_id = '$id';
                    delete from product_gemstone where product_id = '$id';
                    delete from product where id = '$id';
                COMMIT;";

        $this->execute($sql);
    }
}