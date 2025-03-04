<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daily Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 20px;
    padding: 0;
  }
  .DailyProduct {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 1200px;
    margin: auto;
  }
  h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
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
    text-align: center;
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
    font-family: sans-serif;
    font-size: xx-large;
    font-style: italic;
    font-weight: bold;
  }
  .row {
    row-gap: 50px;
    column-gap: 30px;
    margin-left: 26px;
    align-content: center;
  }
</style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="DailyProduct">
  <h1>Daily Product</h1>

  <div class="row">
    <div class="product col-4">
      <img src="https://img.choice.com.au/-/media/ac6606a5f8e24a3582ba1ea6a3584599.ashx" alt="Product 1">
      <h3>Milk<br>Available!</h3>
      <p class="price">1.5kg - 60rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Milk" data-price="60" data-quantity="1">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://s3.amazonaws.com/spoonuniversi-wpengine/spoonuniversi/wp-content/uploads/2015/07/Dollarphotoclub_53674521-670x446.jpg" alt="Product 2">
      <h3>Cheese<br>Available!</h3>
      <p class="price">2kg - 200rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Cheese" data-price="200" data-quantity="1">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://www.ilgiornalebg.it/wp-content/uploads/2022/02/yogurt-flora-696x392.jpg" alt="Product 3">
      <h3>Yogurt<br>Available!</h3>
      <p class="price">1.5kg - 80rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Yogurt" data-price="80" data-quantity="1">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://www.coffeecompany.co.za/pub/media/catalog/product/cache/1583e2c6bd2ebbdd02756c1fcdc56280/b/u/butter_00.jpg" alt="Product 4">
      <h3>Butter<br>Available!</h3>
      <p class="price">1kg - 90rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Butter" data-price="90" data-quantity="1">Add to Cart</button>
    </div>
  </div>
</div>

<script>
  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
      const product = this.getAttribute('data-product');
      const price = this.getAttribute('data-price');
      const quantity = this.getAttribute('data-quantity');
      
      // Add to cart logic
      fetch('update_cart.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ action: 'add', product, price, quantity })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert(product + ' has been added to your cart.');
        } else {
          alert('Failed to add to cart.');
        }
      });
    });
  });
</script>
</body>
</html>
