<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vegetables</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 20px;
    padding: 0;
  }
  .vegetables {
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
/* .col-4 a + a{
    width: 30px;
    height: 20px;
    color: red;
} */
</style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <div class="vegetables">
    <h1>Vegetables</h1>
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
                    <img src="https://masseysofsaintfield.co.uk/wp-content/uploads/2020/09/Potatoes.jpg" alt="Product 1">
                    <h3>Potatoes<br>Available!</h3>
                    <a href="Vegetables.php" class="btn" style="font-style:bold;">5kg - 50rs</a><br>
                    <a href="add.html" class="btn">Add to Cart</a>
                </div>


                <div class="product col-4">
                    <img src="http://img.bizator.com/a/2004082153/wmb/2-sell-onion-egypt.jpg" alt="Product 3">
                    <h3>Onions<br>Available!</h3>
                    <a href="Vegetables.php" class="btn">2kg - 30rs</a><br>
                    <a href="#" class="btn">Add to Cart</a>
                </div>


                <div class="product col-4">
                    <img src="https://www.onegreenplanet.org/wp-content/uploads/2017/05/shutterstock_179778518-1200x797.jpg" alt="Product 4">
                    <h3>Ginger & Garlic<br>Available!</h3>
                    <a href="Vegetables.php" class="btn">2kg - 100rs</a><br> 
                    <a href="#" class="btn">Add to Cart</a>
                </div>


                <div class="product col-4">
                    <img src="https://image.ec21.com/image/breyson500/OF0024299298_1/Sell-Carrots-For-Sale.jpg" alt="Product 5">
                    <h3>Carrots<br>Available!</h3>
                    <a href="Vegetables.php" class="btn">2kg - 120rs</a><br> 
                    <a href="#" class="btn">Add to Cart</a>
                </div>


            <div class="product col-4">
                <img src="https://dev.mos.cms.futurecdn.net/xitwmACLihFxPFBLYh2JJH-1536-80.jpg" alt="Product 2">
                <h3>Tomatoes<br>Available!</h3>
                <a href="Vegetables.php" class="btn">1.5kg - 100rs</a><br>
                <a href="add.html" class="btn">Add to Cart</a>
            </div>


            <div class="product col-4">
                <img src="https://www.tasteofhome.com/wp-content/uploads/2019/09/bell-pepper_GettyImages-114474263.jpg?w=1200" alt="Product 2">
                <h3>Bell Peppers<br>Available!</h3>
                <a href="Vegetables.php" class="btn">3kg - 130rs</a><br>
                <a href="#" class="btn">Add to Cart</a>
            </div>


            <div class="product col-4">
                <img src="https://image.freepik.com/free-photo/fresh-mushrooms-sale-market_23-2148263736.jpg" alt="Product 2">
                <h3>Mashrooms<br>Available!</h3>
                <a href="Vegetables.php" class="btn">5kg - 250rs</a><br>
                <a href="#" class="btn">Add to Cart</a>
              </div>


            <div class="product col-4">
                <img src="https://media.prod.bunnings.com.au/api/public/content/68c5f1547f714d30b4494b25f85668e2?v=db0e0844" alt="Product 2">
                <h3>Spinach<br>Available!</h3>
                <a href="Vegetables.php" class="btn">1.5kg - 70rs</a><br>
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
