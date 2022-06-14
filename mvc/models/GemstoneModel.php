<?php

class GemstoneModel extends DB{
    public function checkGemstone($gemstone_name){
        $sql = "select * from gemstone where gemstone_name = '$gemstone_name'";

        $data = $this->executeResult($sql);

        if($data == null || count($data) == 0){
            return true;
        }else{
            return false;
        }
    }

    public function addGemstone($gemstone_name){
        $sql = "insert into gemstone(gemstone_name) values ('$gemstone_name')";

        $this->execute($sql);
    }

    public function showGemstone(){
        $sql = "select * from gemstone";

        $data = $this->executeResult($sql, false);

        return $data;
    }

    public function showGemstoneDetail($id){
        $sql = "select * from gemstone where id = '$id'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function editGemstone($id, $gemstone_name){
        $sql = "update gemstone set gemstone_name = '$gemstone_name' where id = '$id'";

        $this->execute($sql);
    }

    public function deleteGemstone($id){
        $sql = "START TRANSACTION;
                    delete from product_gemstone where gemstone_id = '$id';
                    delete from gemstone where id = '$id';
                COMMIT;";

        mysqli_multi_query($this->con, $sql);
    }
}