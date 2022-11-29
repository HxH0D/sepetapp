<?php
    require "../admin/logich.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="app-title">
                <a href="../index.php"><h1>SepetApp</h1></a>
            </div>
        </div>
        <div class="body">
            <div class="spt-content">
                <h2>Sepetim (<?php echo  $ürün_sayısı ?>) Ürün</h2>
                <?php if( $ürün_sayısı==0){ ?>
                    <h2>Sepetinizde Ürün Yok</h2>
                <?php }?>
                <?php foreach($veri2 as $c){ ?>
                    <div class="spt-product">
                        <div class="spt-product-img">
                            <img src="../productimg/<?php echo $c["product_img"] ?>" alt="">
                        </div>
                        <div class="spt-product-text">
                            <p><?php echo $c["product_name"] ?></p>
                        </div>
                        <div class="spt-product-piece">
                            <form action="../admin/logich.php" method="post">
                                <input type="hidden" value="<?php echo $c["item_no"] ?>" name="item-no">
                                <input type="hidden" value="<?php echo $c["product_piece"] ?>" name="item-piece">
                                <button type="submit" name="-">-</button>
                                    <p><?php echo $c["product_piece"] ?></p>
                                <button type="submit" name="+">+</button>
                            </form>
                            
                        </div>
                        <div class="spt-product-price">
                            <p><?php echo $c["product_price"] ?> TL</p>
                        </div>
                        <div class="spt-product-delete">
                            <form action="../admin/logich.php" method="post">
                                <input type="hidden" value="<?php echo $c["id"] ?>" name="item-id">
                                <button type="submit" name="rm-item">Sepetten Kaldır</button>
                            </form>
                        </div>   
                    
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
</body>
</html>