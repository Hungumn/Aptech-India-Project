<?php

class BrandModel extends DB{
    public function checkBrand($brand_name){
        $sql = "select * from brand where brand_name = '$brand_name'";

        $data = $this->executeResult($sql);

        if($data == null || count($data) == 0){
            return true;
        }else{
            return false;
        }
    }

    public function addBrand($brand_name){
        $sql = "insert into brand(brand_name) values ('$brand_name')";

        $this->execute($sql);
    }

    public function showBrand(){
        $sql = "select * from brand";

        $data = $this->executeResult($sql, false);

        return $data;
    }

    public function showBrandDetail($id){
        $sql = "select * from brand where id = '$id'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function editBrand($id, $brand_name){
        $sql = "update brand set brand_name = '$brand_name' where id = '$id'";

        $this->execute($sql);
    }

    public function deleteBrand($id){
        $sql = "delete from brand where id = '$id'";

        $this->execute($sql);
    }
}