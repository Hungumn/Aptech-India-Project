<?php

class AccountModel extends DB{

    public function checkAdminToken($token){
        $sql = "select *
                from account join role on account.role_id = role.id
                where account.token = '$token' and role.name = 'admin'";

        $data = $this->executeResult($sql, false);

        return $data;
    }

    public function adminLogin($email, $pwd){
        $sql = "select account.id, account.fullname, account.email, account.password, account.phoneNo, account.address, account.updated_at 
                from account join role on account.role_id = role.id
                where account.email = '$email' and account.password = '$pwd' and role.name = 'admin'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function userLogin($email, $pwd){
        $sql = "select account.id, account.fullname, account.email, account.password, account.phoneNo, account.address, account.updated_at 
                from account join role on account.role_id = role.id
                where account.email = '$email' and account.password = '$pwd' and role.name = 'user'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function createToken($token, $id){
        $sql = "update account set token = '$token' where id = '$id'";

        $this->execute($sql);
    }

    public function checkAccount($email){
        $sql = "select email from account where email = '$email'";

        $data = $this->executeResult($sql, true);

        if($data == null || count($data) == 0){
            return true;
        }else{
            return false;
        }
    }

    public function checkUpdateAccount($id, $email){
        $sql = "select email from account where email = '$email' and id != '$id'";

        $data = $this->executeResult($sql, true);

        if($data == null || count($data) == 0){
            return true;
        }else{
            return false;
        }
    }

    public function showRole(){
        $sql = "select * from role";
        $data = $this->executeResult($sql);
        return $data;
    }

    public function createAccount($role_id, $pwd, $fullname, $address, $email, $phoneNo, $created_at){
        $sql = "insert into account(email, password, fullname, address,  phoneNo, role_id, created_at)
                values
                ('$email', '$pwd', '$fullname', '$address',  '$phoneNo','$role_id', '$created_at')";

        $this->execute($sql);
    }

    public function showAdminAccount(){
        $sql = "select role.name, account.id, account.email, account.fullname, account.phoneNo, account.address, account.updated_at
                from account join role on account.role_id = role.id where role.name = 'admin'";

        $data = $this->executeResult($sql, false);

        return $data;
    }

    public function showUserAccount(){
        $sql = "select role.name, account.id, account.email, account.fullname, account.phoneNo, account.address, account.updated_at
                from account join role on account.role_id = role.id where role.name = 'user'";

        $data = $this->executeResult($sql, false);

        return $data;
    }

    public function showAccountDetail($id){
        $sql = "select role.name, account.fullname, account.email, account.password, account.phoneNo, account.address
                from account join role on account.role_id = role.id
                where account.id = '$id'";

        $data = $this->executeResult($sql, true);

        return $data;
    }

    public function editAccount($id, $email, $fullname, $phoneNo, $address, $updated_at){
        $sql = "update account
                set email = '$email',
                fullname = '$fullname',
                phoneNo = '$phoneNo',
                address = '$address',
                updated_at = '$updated_at'
                where id = '$id'";
        
        $this->execute($sql);
    }

    public function changePwd($id, $pwd){
        $sql = "update account set password = '$pwd' where id = '$id'";

        $this->execute($sql);
    }

    public function deleteAccount($id){
        $sql = "delete from account where id = '$id'";

        $this->execute($sql);
    }
}