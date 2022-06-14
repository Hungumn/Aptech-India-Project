<?php
class ThumbnailModel extends DB{
    public function getImg($product_id){
        $sql = "select * from thumbnail where product_id = '$product_id'";

        $data = $this->executeResult($sql, false);

        return $data;
    }

    public function getThumbnail($id){
        $sql = "select * from thumbnail where id = '$id'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function addThumbnail($product_id, $thumbnail){
        $sql = "insert into thumbnail(product_id, thumbnail)
                values
                ('$product_id', '$thumbnail')";

        $this->execute($sql);
    }

    public function deleteThumbnail($id){
        $sql = "delete from thumbnail where id = '$id'";

        $this->execute($sql);
    }
}