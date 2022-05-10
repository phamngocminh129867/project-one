<?php
include "header.php";
include "slider.php";
include "class/account-one_class.php";
?>
<?php
$account = new account ;
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $account_name= $_POST['account_name'];
    $insert_account = $account ->insert_account($account_name); 
}
?>

<div class="admin-cartegory-right">
            <div class="admin-content-right-cartegory_add">
                <h1>ADD Value</h1>
                <form action="" method="POST">
                    <input required name="account_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">ADD</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>