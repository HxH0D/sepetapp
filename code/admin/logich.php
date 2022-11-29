<?php
   
    require "connection.php";
    /* Veri Tabanından Veri Alma */
        $sql = "SELECT * FROM products";
        $veri1 = mysqli_query($conn,$sql);

        $sql = "SELECT * FROM basket_products";
        $veri2 = mysqli_query($conn,$sql);

    /* Sepetteki Ürün Sayısı */
        $sql = "SELECT product_piece FROM basket_products";
        $ürünadetveri = mysqli_query($conn,$sql);
        $ürün_sayısı=0;
        foreach($ürünadetveri as $ürünsayı ){
            $ürün_sayısı+=$ürünsayı["product_piece"];
        }
    /* Veri Tabanına Ürün Bilgilerini Kayıt Etme */
    if(isset($_POST["product-add"])){

        $seller_name = $_POST["seller-name"];
        $product_no = $_POST["product-no"];
        $product_name = $_POST["product-name"];
        move_uploaded_file($_FILES["product-img"]["tmp_name"],"../productimg/" . $_FILES["product-img"]["name"]);			
        $product_img = $_FILES["product-img"]["name"];
        $product_price = $_POST["product-price"];

        $sql = "INSERT INTO products(seller_name, item_no, product_name, product_img, product_price) VALUES ('$seller_name','$product_no','$product_name','$product_img','$product_price')";
        mysqli_query($conn,$sql);
        header("Location:../php/admin.php");
        exit();
    }
    /* Sepet Tablosuna Veri Ekleme */
    if(isset($_POST["add-sepet"])){
        $item_no = $_POST["item-no"];
        
        $sorgu = mysqli_query($conn,"SELECT * FROM basket_products WHERE item_no='$item_no' LIMIT 1");
        $sonuc = mysqli_num_rows($sorgu);

        if($sonuc>0){
            $sql = "SELECT * FROM basket_products where item_no=$item_no";
            $ürünadetveri2 = mysqli_query($conn,$sql);
            foreach($ürünadetveri2 as $ürünsayı2 ){
                $sonuc2=$ürünsayı2["product_piece"] ;
            }
            $sonuc2+=1;
            $sql = "UPDATE basket_products SET product_piece=$sonuc2 WHERE item_no=$item_no ";
        }
        else{
            $sql = "INSERT INTO basket_products(seller_name, item_no, product_name, product_img, product_price) SELECT seller_name, item_no, product_name, product_img, product_price FROM products WHERE item_no=$item_no";
        }


        mysqli_query($conn,$sql);
        header("Location:../index.php");
        exit();

    }
    /* Veri Tabanından Ürün Silme */
    if(isset($_POST["delete-product"])){
        $id = $_POST["product-id"];
        $img = $_POST["product-img"];
        
        $sql = "DELETE FROM products WHERE id=$id";

        unlink("../productimg/" .$img); /* Dosyadaki resimi Silme Komutu */
       
        mysqli_query($conn,$sql);
        header("Location:../php/admin.php");
        exit();

    }
    /* Sepeteki Ürün Sayısını Artırma Azaltma */
    if(isset($_POST["+"])){
        $item_no = $_POST["item-no"];
        $item_piece= $_POST["item-piece"];
        $veri = intval($item_piece+1);

        $sql ="UPDATE basket_products SET product_piece=$veri WHERE item_no=$item_no ";
        
        mysqli_query($conn,$sql);
        header("Location:../php/sepet.php");
        exit();

    }
    if(isset($_POST["-"])){
        $item_no = $_POST["item-no"];
        $item_piece= $_POST["item-piece"];
        $veri = intval($item_piece-1);

       
        $sql ="UPDATE basket_products SET product_piece=$veri WHERE item_no=$item_no ";
        if($veri==0){
            $sql = "DELETE FROM basket_products WHERE item_no=$item_no";
        }
        mysqli_query($conn,$sql);
        header("Location:../php/sepet.php");
        exit();

    }
    if(isset($_POST["rm-item"])){
        $id=$_POST["item-id"];
        $sql = "DELETE FROM basket_products WHERE id=$id";
        mysqli_query($conn,$sql);
        header("Location:../php/sepet.php");
        exit();
    }
?>
