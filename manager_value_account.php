<?php
include "header.php";
include "slider.php";
include "class/account-one_class.php";
?>
<style>
    .admin-content-right-cartegory_list table {
        width: 100%;
        text-align: center;
        margin-top: 20px;
    }
    
    .admin-content-right-cartegory_list table tr th,
    td {
        border: 1px solid #dddddd;
    }
    
    table {
        border-collapse: collapse;
    }
</style>
<?php
$account = new account ;
$show_account = $account ->show_account();
?>
<div class="admin-content-right">
<div class="admin-content-right-cartegory_list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>
                            Stt
                        </th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Tuỳ Biến</th>
                    </tr>
                    <?php
                    if ($show_account){$i=0;
                        while($result=$show_account->fetch_assoc()) {$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['account_id'] ?></td>
                        <td><?php echo $result['account_name'] ?></td>
                        <td>
                            <a href="valueedit.php?account_id=<?php echo $result['account_id']?>">Fix</a>|<a href="valuedel.php?account_id=<?php echo $result['account_id']?>">Delete</a>
                        </td>
                    </tr>
                    <?php
}
}
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>

</html>