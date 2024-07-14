<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flowers & Indoor Plants</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 20px;
    padding: 0;
  }
  .flowers-plants {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 600px;
    margin: auto;
  }
  h1 {
    text-align: center;
    color: #333;
  }
  .flowers {
    margin-bottom: 20px;
  }
  .indoor-plants {
    margin-top: 20px;
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
</style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <div class="flowers-plants">
    <h1>Flowers and Indoor Plants</h1>
    <div class="flowers">
      <h2>Flowers</h2>
      <ul>
        <?php
        // Array of flowers
        $flowers = array(
          'Rose',
          'Lily',
          'Marygold',
          'Sunflower',
          'Daisy'
        );

        // Loop through the array to display each flower as a list item
        foreach ($flowers as $flower) {
          echo '<li>' . $flower . '</li>';
        }
        ?>
      </ul>
    </div>
    <div class="indoor-plants">
      <h2>Indoor Plants</h2>
      <ul>
        <?php
        // Array of indoor plants
        $indoor_plants = array(
          'Spider Plant',
          'Snake Plant',
          'Money plant',
          'Peace Lily',
          'Aloe Vera'
        );

        // Loop through the array to display each indoor plant as a list item
        foreach ($indoor_plants as $plant) {
          echo '<li>' . $plant . '</li>';
        }
        ?>
      </ul>
    </div>
  </div>
</body>
</html> -->
