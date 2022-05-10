<?php
include "header.php";
include "slider.php";
include "class/create_account.php";
?>
<?php  
$caccount = new caccount ;
if ($_SERVER['REQUEST_METHOD']==='POST'){
$insert_caccount = $caccount  ->insert_caccount($_POST,$_FILES); 
}
?>
<style> .admin-content-right-product_add input,
    select {
        width: 200px;
        height: 30px;
        display: block;
        margin: 6px 0 12px;
        padding-left: 12px;
    }
    
    .admin-content-right-product_add textarea {
        display: block;
        height: 200px;
        width: 500px;
        margin-bottom: 12px;
        padding: 12px;
    }
    
    .admin-content-right-product_add button {
        display: block;
        margin-top: 10px;
        height: 30px;
        width: 100px;
        cursor: pointer;
        background-color: brown;
        border: none;
        color: white;
    }
    
    .admin-content-right-product_add button:hover {
        background-color: transparent;
        border: 1px solid brown;
        color: black;
    }
    
    .admin-content-right-product_add h1 {
        margin-bottom: 20px;
    }
</style>
<div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Create Account</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập Họ Và Tên <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text">
                    <label for="">Phân Quyền <span style="color: red;">*</span></label>
                    <select name="account_id" id="account_id" required>
                    <option value="#" >----Chọn------</option>
                        <?php 
                        $show_account =$caccount ->show_account();
                        if ($show_account){while($result=$show_account-> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['account_id'] ?>"><?php echo $result['account_name'] ?></option>
                        <?php 
                        }}   
                        ?>
                    </select>
                    <!-- <label for="">chọn loại sản phẩm <span style="color: red;">*</span></label>
                    <select name="brand_id" id="brand_id">
                        <option value="#">----Chọn------</option>
                    </select> -->
                    <label for="">Tài Khoảng <span style="color: red;">*</span></label>
                    <input name="product_price" required type="text">
                    <label for="">Mật Khẩu <span style="color: red;">*</span></label>
                    <input name="product_price_new"  required type="text">
                    <label for="">Miêu tả Bản Thân <span style="color: red;">*</span></label>
                    <textarea name="product_desc" id="editor1" cols="30" rows="10"></textarea>
                    <label for="">Ảnh sản bản thân - Avatar <span style="color: red;">*</span></label>
                    <span style="color:red;"><?php if (isset($insert_product))
                        {
                            echo ($insert_product);
                        }
                        ?> </span>
                    <input name="product_img"  required type="file">
                    <label for="">Ảnh mô tả bản thân <span style="color: red;">*</span></label>
                    <input name="product_img_desc[]"  required multiple type="file">
                    <button type="submit">Add</button>
                </form>
            </div>
        </div>
                        </section>
                        </body>
                        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', {
	filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );
            </script>
<script>
$(document).ready(function() {
$("#cartegory_id").change(function() {
      //alert($(this)val())
    var x=$(this).val()
    $.get("productadd_ajax.php",{cartegory_id:x},function (data) {
        $("#brand_id").html(data);
    })
})
})
</script>
</html>