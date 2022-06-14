<?php

class Product_gemstoneModel extends DB{
    public function checkProduct_gemstone($product_id, $gemstone_id){
        $sql = "select * from product_gemstone where product_id = '$product_id' and gemstone_id = '$gemstone_id'";

        $data = $this->executeResult($sql);
        if($data == null || count($data) == 0){
            return true;
        }
        
        return false;
    }

    public function createProduct_gemstone($product_id, $gemstone_id){
        $sql = "insert into product_gemstone(product_id, gemstone_id)
                values
                ('$product_id','$gemstone_id')";

        $this->execute($sql);
    }

    public function showProduct_gemstone($product_id){
        $sql = "select gemstone_id, gemstone_name from product_gemstone join gemstone on product_gemstone.gemstone_id = gemstone.id
        where product_gemstone.product_id = '$product_id'";

        $data = $this->executeResult($sql);

        return $data;
    }

    public function deleteProductGemstone($product_id){
        $sql = "delete from product_gemstone where product_id = '$product_id'";

        $this->execute($sql);
    }
}

