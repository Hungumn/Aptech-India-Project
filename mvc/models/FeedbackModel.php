<?php

class FeedbackModel extends DB{
    public function addFeedback($fullname, $email, $phoneNo, $subject_name, $note, $created_at){
        $sql = "insert into feedback(fullname, email, phoneNo, subject_name, note, created_at, status)
                values
                ('$fullname', '$email', '$phoneNo', '$subject_name', '$note', '$created_at', 'unread')";

        $this->execute($sql);
    }

    public function showFeedback(){
        $sql = "select * from feedback";

        $data = $this->executeResult($sql);

        return $data;
    }

    public function showFeedbackDetail($id){
        $sql = "select * from feedback where id = '$id'";
        
        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function readFeedback($id){
        $sql = "update feedback set status = 'read' where id = '$id'";

        $this->execute($sql);
    }
}