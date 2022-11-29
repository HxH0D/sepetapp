<?php
    require "../admin/logich.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
</head>
<style>
    .adm-header{
        padding: 25px;
    }
        .adm-header a button{
            padding: 10px 20px;
            transition: all 0.7s;
        }
            .adm-header a button:hover{
                scale: 1.1;
            }
    .adm-content{
        text-align: center;
        display: flex;
        flex-direction: column;
    }
        .adm-content h1{
            font-family: 'Courier New', Courier, monospace;
            margin: 10px;
        }
        .adm-table{
            border: solid black 1px;
            font-size: 20px;

        }
            .adm-table td{
                padding: 10px 25px 10px 25px;
            }
            
           
</style>
<body>
    <div class="container">
        <div class="adm-header">
                <a href="adminadd.php"><button>Sayfaya Ürün ekle</button></a>
        </div>
        <div class="adm-content">
            <h1>Sayfada Bulunan Ürünler</h1>
            <table class="adm-table">
                <tr class="adm-table_head">
                    <td>Ürün No</td>
                    <td>Ürün Ad</td>
                    <td>Ürün Fiatı</td>
                </tr>
                <?php foreach($veri1 as $a) { ?>
                <tr>
                    <form action="../admin/logich.php" method="post">
                        <input type="hidden" value="<?php echo $a["id"] ?>" name="product-id"> 
                        <input type="hidden" value="<?php echo $a["product_img"] ?>" name="product-img"> 

                        <td><?php echo $a["item_no"] ?></td>
                        <td><?php echo $a["product_name"] ?></td>
                        <td><?php echo $a["product_price"] ?></td>

                        <td><button type="submit" name="delete-product">Sayfadan Kaldır</button></td>
                    </form>
                     
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>