<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fruits</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 20px;
    padding: 0;
  }
  .Fruits {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 1200px;
    margin: auto;
  }
  h1 {
    text-align: center;
    margin-bottom:20px;
    color: #333;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    margin-bottom: 10px;
    padding: 10px;
    background-color: #f9f9f9;
    border-radius: 4px;
  }
  .products .container{
    margin-left: 0%;
    margin-right: 0%;
}
.products {
    position: relative;
    left: 32px;
    margin-top: 50px;
    text-align: center;
    background-image: url('');
    background-size: cover;

}

.products h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.product {
    display: inline-block;
    vertical-align: top;
    /* margin: 0 15px; */
    text-align: middle;
    background-color: #c872862e;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.1);
    width: 240px;
    
}

.product img {
    max-width: 100%;
    border-radius: 5px;
    width: 200px;
    height: 150px;
}

.product h3 {
    margin-top: 10px;
    font-size: 20px;
}

.product .price {
    font-size: 18px;
    color: #203521;
    margin-bottom: 10px;
}

.container h2 {
    color: rgba(50, 2, 16, 0.863);
    FONT-FAMILY: SANS-SERIF;
    FONT-SIZE: xx-large;
    font-style: italic;
    font-weight: bold;
   
}
.products .container{
    margin-left: 0%;
    margin-right: 0%;
}
.row {
    row-gap: 50px;
    column-gap: 30px;
    /* align: center; */
    margin-left: 26px;
    align-content: center;
}
.container ul>span{
    position: relative;
    left: 30rem;
    bottom: 5px;
}
</style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <div class="Fruits">
    <h1>Fruits</h1>
    <!-- <ul>
      <?php

      // $vegetables = array(
      //   'Potatoes',
      //   'Onions',
      //   'Ginger & Garlic',
      //   'Carrots',
      //   'Tomatoes',
      //   'Spinach',
      //   'Broccoli',
      //   'Bell Peppers',
      //   'Cucumbers',
      //   'Mashrooms'
      // );
      // foreach ($vegetables as $vegetable) {
      //   echo '<li>' . $vegetable . '</li>';
      // }
      // ?>
    </ul>
  </div> -->

  <div class="row">
                <div class="product col-4">
                    <img src="https://chiefrivernursery.com/media/catalog/product/cache/9820170e8aaf17063e79ec8448f2da6f/g/a/gala-apple-fruit_1.jpg" alt="Product 1">
                    <h3>Apple<br>Available!</h3>
                    <a href="Fruits.php" class="btn" style="font-style:bold;">2kg - 80rs</a><br>
                    <a href="#" class="btn">Add to Cart</a>
                </div>


                <div class="product col-4">
                    <img src="https://tse4.mm.bing.net/th?id=OIP.5YaYijK1aY6CJYOeiLitHwHaFB&pid=Api&P=0&h=220" alt="Product 3">
                    <h3>Watermelon<br>Available!</h3>
                    <a href="Fruits.php" class="btn">1kg - 60rs</a><br>
                    <a href="#" class="btn">Add to Cart</a>
                </div>


                <div class="product col-4">
                    <img src="https://icdonline.com.au/wp-content/uploads/2019/11/shutterstock_1090910984-1200x1200.jpg" alt="Product 4">
                    <h3>Mango<br>Available!</h3>
                    <a href="Fruits.php" class="btn">6kg - 100rs</a><br> 
                    <a href="#" class="btn">Add to Cart</a>
                </div>


                <div class="product col-4">
                    <img src="https://tse4.explicit.bing.net/th?id=OIP.WI8o_x9BfjLF_1_bN2S_1gHaFj&pid=Api&P=0&h=220" alt="Product 5">
                    <h3>Orange<br>Available!</h3>
                    <a href="Fruits.php" class="btn">5kg - 190rs</a><br> 
                    <a href="#" class="btn">Add to Cart</a>
                </div>


            <div class="product col-4">
                <img src="https://www.gardenersdream.co.uk/images/6-x-mixed-strawberries-fragaria-growing-fruit-hardy-p444-28778_image.jpg" alt="Product 2">
                <h3>Strawberry<br>Available!</h3>
                <a href="Fruits.php" class="btn">4kg - 250rs</a><br>
                <a href="#" class="btn">Add to Cart</a>
            </div>


            <div class="product col-4">
                <img src="https://tse2.mm.bing.net/th?id=OIP.UjJWFFyvjaTVscGftWC8hgHaFt&pid=Api&P=0&h=220" alt="Product 2">
                <h3>Grape<br>Available!</h3>
                <a href="Fruits.php" class="btn">2.5kg - 90rs</a><br>
                <a href="#" class="btn">Add to Cart</a>
            </div>


            <div class="product col-4">
                <img src="https://blog.liebherr.com/appliances/us/wp-content/uploads/sites/3/2016/03/panthermedia_B12802788_1748x1226.jpg" alt="Product 2">
                <h3>Avocado<br>Available!</h3>
                <a href="Fruits.php" class="btn">3kg - 300rs</a><br>
                <a href="#" class="btn">Add to Cart</a>
              </div>


            <div class="product col-4">
                <img src="https://lemonconcentrate.com/wp-content/uploads/2018/04/Pineapple-Fruits-Products-WEB.jpg" alt="Product 2">
                <h3>Pineapple<br>Available!</h3>
                <a href="Fruits.php" class="btn">2kg - 70rs</a><br>
                <a href="#" class="btn">Add to Cart</a>
            </div>

            <!-- <div class="product col-4">
                <img src="https://odishabytes.com/wp-content/uploads/2021/09/Non-Veg-e1631190551674.jpg" alt="Product 2">
                <h3>Meat and Poultry</h3>
                <a href="Meat&Poultry.php" class="btn">View</a><br>
                <a href="#" class="btn">Add to Cart</a>
            </div> -->

</div>
</body>
</html>
