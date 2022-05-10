<?php
include "database.php";
?>

<?php
class account{
    private $db;
    public function __construct()
    {
        $this-> db = new database();
    }
    public function insert_account($account_name){
        $query = "INSERT INTO tbl_account (account_name) VALUES ('$account_name')";
        $result = $this->db ->insert($query);
        header('location:manager_value_account.php');
        return $result;
    }
public function  show_account(){
$query ="SELECT * FROM tbl_account ORDER BY account_id DESC";
$result = $this->db ->select($query);
    return $result;
} 
public function get_account($account_id) {
    $query ="SELECT * FROM tbl_account WHERE account_id='$account_id'";
    $result = $this->db ->select($query);
        return $result;
}
public function update_account($account_name,$account_id) {
    $query ="UPDATE tbl_account SET account_name='$account_name' WHERE account_id='$account_id'";
    $result = $this->db ->update($query);
    header('location:manager_value_account.php');
        return $result;
}
public function delete_account($account_id) {
    $query ="DELETE FROM tbl_account WHERE account_id='$account_id'";
    $result = $this->db ->delete($query);
    header('location:manager_value_account.php');
        return $result;
}
}
?>