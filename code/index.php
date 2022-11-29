<?php 
    require "admin/logich.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepet App</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="app-title">
                <h1>SepetApp</h1>
            </div>
            <div class="app-butons">
               <a href="php/admin.php"><button>Admin Panel</button></a> 
                <a href="php/sepet.php"><button>Sepetim<p><?php echo $ürün_sayısı ?></p></button></a>
            </div>
        </div>
        <div class="body">
            <div class="product-content">
                <?php  foreach($veri1 as $b) { ?>
                <div class="product">
                    <div class="product-up">
                        <img src="productimg/<?php echo $b["product_img"] ?>" alt="">
                    </div>
                    <div class="product-down">
                        <div class="product-down-text">
                            <p><a href="#"><?php echo $b["seller_name"] ?></a><?php echo $b["product_name"] ?></p>
                        </div>
                        <div class="product-down-ratings">
                            <img src="rating.png" alt="">
                        </div>
                        <div class="product-down-button">
                            <p><?php echo $b["product_price"] ?> TL</p> 
                            <form action="admin/logich.php" method="post">
                                <input type="hidden" value="<?php echo $b["item_no"] ?>" name="item-no">
                                <button type="submit" name="add-sepet">SEPETE EKLE</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="footer">
            <p>@ 2022 <a href="http://yusufemrealtun.software/">Yusuf Emre Altun</a> </p>
        </div>
    </div>
</body>
</html>