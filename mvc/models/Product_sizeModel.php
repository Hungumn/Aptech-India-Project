<?php

class Product_sizeModel extends DB{
    public function checkProduct_size($product_id, $size_id){
        $sql = "select * from product_size where product_id = '$product_id' and size_id = '$size_id'";

        $data = $this->executeResult($sql);

        if($data == null || count($data) == 0){
            return true;
        }

        return false;
    }

    public function createProduct_size($product_id, $size_id){
        $sql = "insert into product_size(product_id, size_id)
                values
                ('$product_id', '$size_id')";

        $this->execute($sql);
    }

    public function showProductSize($product_id){
        $sql = "select size.id, product_size.product_id, product_size.size_id, size.size
                from product_size left join size on product_size.size_id = size.id
                where product_size.product_id = '$product_id'";

        $data = $this->executeResult($sql);

        return $data;
    }

    public function deleteProductSize($product_id){
        $sql = "delete from product_size where product_id = '$product_id'";

        $this->execute($sql);
    }
}