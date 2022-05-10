<?php
include "header.php";
include "slider.php";
include "class/account-one_class.php";
?>
<?php  
$account = new account ;
if (!isset($_GET['account_id']) || $_GET['account_id']== NULL ){
    echo "<script>window.location='account-one.php'</script";
} 
else{ 
    $account_id =$_GET['account_id'];
}
$get_account= $account->get_account($account_id);
    if($get_account){ 
    $result=$get_account-> fetch_assoc();
}

?>
<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $account_name= $_POST['account_name'];
    $update_account = $account ->update_account($account_name,$account_id); 
}
?>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm danh mục</h1>
                <form action="" method="POST">
                    <input required name="account_name" type="text" placeholder="Nhập tên danh mục" 
                    value="<?php echo $result['account_name'] ?>">
                    <button type="submit">Fix</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>