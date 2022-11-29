<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Ekle</title>
</head>
<style>
    .adm-add-container{
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(1,18,88,1) 0%, rgba(0,13,74,1) 45%, rgba(0,31,174,1) 77%, rgba(0,47,255,1) 100%);
        display: flex;
        justify-content: center;
        align-items: center;
    }
        .adm-add-content{
            height: 80%;
            width: 40%;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px 2px blue;
            display: grid;
            align-items: center;
            justify-content: center;
            
        }
            .adm-add-content-title{
                text-align: center;
            }
            .seller-name{
                text-align: center;
            }
            .add-img{
                display: flex;
            }
            .add-no{
                display: flex;

            }
            .add-name{
                display: flex;

            }
            .add-price{
                display: flex;

            }
</style>
<body>
    <div class="adm-add-container">
        <form action="../admin/logich.php" method="post" enctype="multipart/form-data" class="adm-add-content">
            <div class="adm-add-content-title">
                <h2>Sayfaya Ürün Ekle</h2>
            </div>
            <div class="seller-name">
                <p>Satıcı Adı: </p> <input type="text" name="seller-name">
            </div>
            <div class="add-img">
                <input type="file" name="product-img">
            </div>
            <div class="add-no">
                <p>Ürün No:</p> <input type="text" name="product-no">
            </div>
            <div class="add-name">
                <p>Ürün Adı:</p> <input type="text" name="product-name">
            </div>
            <div class="add-price">
                <p>Ürün Fiat:</p> <input type="number" name="product-price"> <p>TL</p>
            </div>
            <div class="add-button">
                <button type="submit" name="product-add">Ürünü Ekle</button>
            </div>
        </form>
    </div>
</body>
</html>