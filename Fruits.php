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
    margin-bottom: 20px;
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
  .products .container {
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
    font-family: sans-serif;
    font-size: xx-large;
    font-style: italic;
    font-weight: bold;
  }
  .products .container {
    margin-left: 0%;
    margin-right: 0%;
  }
  .row {
    row-gap: 50px;
    column-gap: 30px;
    margin-left: 26px;
    align-content: center;
  }
  .container ul>span {
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
  <div class="row">
    <div class="product col-4">
      <img src="https://chiefrivernursery.com/media/catalog/product/cache/9820170e8aaf17063e79ec8448f2da6f/g/a/gala-apple-fruit_1.jpg" alt="Apple">
      <h3>Apple<br>Available!</h3>
      <p class="price">2kg - 80rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Apple" data-price="80" data-quantity="2">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://tse4.mm.bing.net/th?id=OIP.5YaYijK1aY6CJYOeiLitHwHaFB&pid=Api&P=0&h=220" alt="Watermelon">
      <h3>Watermelon<br>Available!</h3>
      <p class="price">1kg - 60rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Watermelon" data-price="60" data-quantity="1">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://icdonline.com.au/wp-content/uploads/2019/11/shutterstock_1090910984-1200x1200.jpg" alt="Mango">
      <h3>Mango<br>Available!</h3>
      <p class="price">6kg - 100rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Mango" data-price="100" data-quantity="6">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://tse4.explicit.bing.net/th?id=OIP.WI8o_x9BfjLF_1_bN2S_1gHaFj&pid=Api&P=0&h=220" alt="Orange">
      <h3>Orange<br>Available!</h3>
      <p class="price">5kg - 190rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Orange" data-price="190" data-quantity="5">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://www.gardenersdream.co.uk/images/6-x-mixed-strawberries-fragaria-growing-fruit-hardy-p444-28778_image.jpg" alt="Strawberry">
      <h3>Strawberry<br>Available!</h3>
      <p class="price">4kg - 250rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Strawberry" data-price="250" data-quantity="4">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://tse2.mm.bing.net/th?id=OIP.UjJWFFyvjaTVscGftWC8hgHaFt&pid=Api&P=0&h=220" alt="Grape">
      <h3>Grape<br>Available!</h3>
      <p class="price">2.5kg - 90rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Grape" data-price="90" data-quantity="2.5">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://blog.liebherr.com/appliances/us/wp-content/uploads/sites/3/2016/03/panthermedia_B12802788_1748x1226.jpg" alt="Avocado">
      <h3>Avocado<br>Available!</h3>
      <p class="price">3kg - 300rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Avocado" data-price="300" data-quantity="3">Add to Cart</button>
    </div>
    <div class="product col-4">
      <img src="https://lemonconcentrate.com/wp-content/uploads/2018/04/Pineapple-Fruits-Products-WEB.jpg" alt="Pineapple">
      <h3>Pineapple<br>Available!</h3>
      <p class="price">2kg - 70rs</p>
      <button class="btn btn-primary add-to-cart" data-product="Pineapple" data-price="70" data-quantity="2">Add to Cart</button>
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
          alert('Item added to cart. Thanks ;)');
        } else {
          alert('Failed to add item to cart.');
        }
      });
    });
  });
</script>
</body>
</html>
