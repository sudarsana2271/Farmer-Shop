<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Cart</title>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f7f9fc;
    margin: 0;
    padding: 0;
  }
  .container {
    margin-top: 150px;
    padding: 20px;
    max-width: 1200px;
  }
  .cart {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 30px;
  }
  h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #4a4a4a;
    font-size: 2.5em;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }
  table, th, td {
    border: 1px solid #e0e0e0;
  }
  th, td {
    padding: 15px;
    text-align: center;
    vertical-align: middle;
  }
  th {
    background-color: #f2f2f2;
  }
  .btn-danger {
    background-color: #ff4d4d;
    border-color: #ff4d4d;
  }
  .btn-primary {
    background-color: #a3606cb3;
    border-color: #a3606cb3;
  }
  .btn-danger:hover, .btn-primary:hover {
    opacity: 0.9;
  }
  .quantity-input {
    width: 70px;
  }
</style>
</head>
<body>
<div class="container">
  <div class="cart">
    <h1>Your Shopping Cart</h1>
<a href="index.html"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAAXNSR0IArs4c6QAAAeJJREFUaEPt2e1NxDAMBuDcJMAkwCYwCTAJ3CSwCTAJ9JVqFPkc24mdKyc1En9oPp64buPqDuUC2+ECzWVHs7t2XUr5mnEnZ0Qa2PdSCqHvs/HZaEA/WXQR7VR4JloCkz8VnoXWwOnwDHQL/Lbk8sOMVImiW2Dk8MeKfs2GR9AWmKyIdip8FO0FT4GPoHvB6fBe9Cg4Fd6DjoLT4F50FjgF7kFng8NwCz0LHIJr6NngYXgL3QI/LiUnjufs1nUASWit+KHjmaMxBu1O2BSu0XUc7VLDONTgvInVoYRGPUyL8EkktBSll2Xg8/r3VE0CxHH9fz13C40+GHNTd+Zoq8TkaG0xLYV65wH679NNQqO4AUZqfDHc0lZfDY00wVzUQpHGJIg2QW5ZTczRP5pMucZvOUdjU0gjtJMH33pPIy/rnMyKtIWmZ0LcdxTNN+UNPEfxSE9FI5W0Z0DaBM9n9Dkrmp4BL1wCb4L2wlvgzdAWXANvim7BLfDmaA73gP8FmuCoSfBK9LSzvz08KKvPjraOcSuC3utTI43i5dsr6eh3xQqz0DE+Wi93eMWu6medVTCN1BZRsPmatNDWSRcF8vEAI8rqD0weNE1cf6BmYzFf66P3ZK0e9Azo0Jw7eihsA4N+AerkuC50jCPDAAAAAElFTkSuQmCC"/></a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $cart = json_decode(file_get_contents('cart.json'), true) ?? [];
        $total = 0;
        foreach ($cart as $item) {
          $itemTotal = $item['price'] * $item['quantity'];
          $total += $itemTotal;
          echo '<tr>';
          echo '<td>' . htmlspecialchars($item['product']) . '</td>';
          echo '<td>' . htmlspecialchars($item['price']) . '</td>';
          echo '<td>';
          echo '<input type="number" value="' . htmlspecialchars($item['quantity']) . '" min="1" class="quantity-input form-control" data-product="' . htmlspecialchars($item['product']) . '">';
          echo '</td>';
          echo '<td>' . number_format($itemTotal, 2) . '</td>';
          echo '<td>';
          echo '<button class="btn btn-danger delete-btn" data-product="' . htmlspecialchars($item['product']) . '">Delete</button>';
          echo '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3"><strong>Total</strong></td>
          <td colspan="2"><strong><?php echo number_format($total, 2); ?></strong></td>
        </tr>
      </tfoot>
    </table>
    <div class="text-center">
      <a href="index.html" class="btn btn-primary" style="color: black;">Continue Shopping</a>
    </div>
  </div>
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
