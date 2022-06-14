<?php

class SizeModel extends DB{
    public function checkSize($size, $category_id){
        $sql = "select * from size where size = '$size' and category_id = '$category_id'";

        $data = $this->executeResult($sql);

        if($data == null || count($data) == 0){
            return true;
        }else{
            return false;
        }
    }

    public function showSize(){
        $sql = "select size.id, size.size, size.category_id, category.category_name
                from size join category on size.category_id = category.id";
        
        $data = $this->executeResult($sql);

        return $data;
    }

    public function showSizeDetail($id){
        $sql = "select size.id, size.size, size.category_id, category.category_name
                from size join category on size.category_id = category.id
                where size.id = '$id'";
        
        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function addSize($size, $category_id){
        $sql = "insert into size(size, category_id) values ('$size', '$category_id')";

        $this->execute($sql);
    }

    public function editSize($id, $size, $category_id){
        $sql = "update size
                set size = '$size', category_id = '$category_id'
                where id = '$id'";
        
        $this->execute($sql);
    }

    public function deleteSize($id){
        $sql = "START TRANSACTION;
                    delete from product_size where size_id = '$id';
                    delete from size where id = '$id';
                COMMIT;";

        mysqli_multi_query($this->con, $sql);
    }
}