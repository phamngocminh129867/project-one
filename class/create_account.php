<?php
include "database.php";
?>

<?php
class caccount{
    private $db;

    public function __construct()
    {
        $this-> db = new database();
    }
    public function  show_account(){
        $query ="SELECT * FROM tbl_account ORDER BY account_id DESC";
        $result = $this->db ->select($query);
            return $result;
        } 
    public function  show_brand(){
            $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name
            FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id=tbl_cartegory.cartegory_id
            ORDER BY tbl_brand.brand_id DESC";
            $result = $this->db ->select($query);
                return $result;
            } 
                public function show_brand_ajax($cartegory_id) {
                    $query ="SELECT * FROM tbl_brand WHERE cartegory_id='$cartegory_id'";
                    $result = $this->db ->select($query);
                        return $result;
                }
            
            public function insert_caccount() {
                $product_name=$_POST['product_name'];
                $account_id=$_POST['account_id'];
                $product_price=$_POST['product_price'];
                $product_price_new=$_POST['product_price_new'];
                $product_desc=$_POST['product_desc'];
                $product_img=$_FILES['product_img']['name'];
                $filetarget = basename($_FILES['product_img']['name']);
                $filestyle= strtolower(pathinfo($product_img,PATHINFO_EXTENSION));
                if (file_exists("uploads/ $filetarget")){
                    $alert ="file đã tồn tại";
                    return  $alert;
                } else {
                    if ($filestyle != "jpg" && $filestyle != "png" && $filestyle != "jpeg"){
                        $alert ="Chỉ chọn file jpg-png-jpeg";
                                    return $alert;
                    } else {
                        move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
                        $query = "INSERT INTO tbl_caccount (
                            product_name,
                            account_id,
                            product_price,
                            product_price_new,
                            product_desc,
                            product_img)
                            VALUES (
                                '$product_name',
                                '$account_id',
                                '$product_price',
                                '$product_price_new',
                                '$product_desc',
                                '$product_img')";
                        $result = $this->db ->insert($query);
                        if ($result){
            $query ="SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
            $result = $this->db->select($query)-> fetch_assoc();
            $product_id=$result['product_id'];
            $filename=$_FILES['product_img_desc']['name'];
            $filttmp =$_FILES['product_img_desc']['tmp_name'];
            
            foreach($filename as $key => $value) 
            {  
            move_uploaded_file($filttmp[$key],"uploads/".$value); 
            $query="INSERT INTO tbl_product_img_desc (product_id,product_img_desc) VALUES ('$product_id','$value')";
            $result = $this->db ->insert($query);
        }
        }   
                                        }
                }
        return $result;
}
}
