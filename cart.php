<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Cart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 20px;
    padding: 0;
  }
  .cart {
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
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }
  table, th, td {
    border: 1px solid #ddd;
  }
  th, td {
    padding: 10px;
    text-align: center;
  }
</style>
</head>
<body>
<div class="cart">
  <h1>Your Shopping Cart</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $cart = json_decode(file_get_contents('cart.json'), true) ?? [];
      foreach ($cart as $item) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($item['product']) . '</td>';
        echo '<td>' . htmlspecialchars($item['price']) . '</td>';
        echo '<td>';
        echo '<input type="number" value="' . htmlspecialchars($item['quantity']) . '" min="1" class="quantity-input" data-product="' . htmlspecialchars($item['product']) . '">';
        echo '</td>';
        echo '<td>';
        echo '<button class="btn btn-danger delete-btn" data-product="' . htmlspecialchars($item['product']) . '">Delete</button>';
        echo '</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
  <a href="Daily Product.php" class="btn btn-primary">Continue Shopping</a>
</div>

<script>
  document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function() {
      const product = this.getAttribute('data-product');
      fetch('update_cart.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ action: 'delete', product })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          location.reload();
        } else {
          alert('Failed to delete item.');
        }
      });
    });
  });

  document.querySelectorAll('.quantity-input').forEach(input => {
    input.addEventListener('change', function() {
      const product = this.getAttribute('data-product');
      const quantity = this.value;
      fetch('update_cart.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ action: 'update', product, quantity })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          location.reload();
        } else {
          alert('Failed to update quantity.');
        }
      });
    });
  });
</script>
</body>
</html>
