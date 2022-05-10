<?php
include "class/account-one_class.php";
$account = new account ;
if (!isset($_GET['account_id']) || $_GET['account_id']== NULL ){
    echo "<script>window.location='account-one.php'</script";
} 
else{ 
    $account_id =$_GET['account_id'];
}
$delete_account= $account->delete_account($account_id);
?>
