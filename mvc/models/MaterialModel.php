<?php

class MaterialModel extends DB{
    // Material
    public function checkMaterial($material_name){
        $sql = "select * from material where material_name = '$material_name'";

        $data = $this->executeResult($sql);

        if($data == null || count($data) == 0){
            return true;
        }else{
            return false;
        }
    } 

    public function addMaterial($material_name){
        $sql = "insert into material(material_name)
                values
                ('$material_name')";

        $this->execute($sql);
    }

    public function showMaterial(){
        $sql = "select * from material";

        $data = $this->executeResult($sql, false);

        return $data;
    }

    public function showDetailMaterial($id){
        $sql = "select * from material where id = '$id'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function editMaterial($id, $material_name){
        $sql = "update material 
                set material_name = '$material_name'
                where id = '$id'";

        $this->execute($sql);
    }

    public function deleteMaterial($id){
        $sql = "delete from material
                where id = '$id'";
        
        $this->execute($sql);
    }

    // Material Detail
    public function checkMaterialDetail($material_id, $color, $age){
        $sql = "select * from material_detail where material_id = '$material_id' and color = '$color' and age = '$age'";

        $data = $this->executeResult($sql);

        if($data == null || count($data) == 0){
            return true;
        }else{
            return false;
        }
    }

    public function addMaterialDetail($material_id, $color, $age){
        $sql = "insert into material_detail(material_id, color, age)
                values
                ('$material_id','$color','$age')";

        $this->execute($sql);
    }

    public function showMaterialDetail(){
        $sql = "select material.material_name, material_detail.id, material_detail.material_id, material_detail.color, material_detail.age from material left join material_detail on material.id = material_detail.material_id";

        $data = $this->executeResult($sql);

        return $data;
    }

    public function showDetailMaterialDetail($id){
        $sql = "select * from material_detail where id = '$id'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function updateMaterialDetail($id, $material_id, $color, $age){
        $sql = "update material_detail
                set material_id = '$material_id', color = '$color', age = '$age'
                where id = '$id'";

        $this->execute($sql);
    }
}