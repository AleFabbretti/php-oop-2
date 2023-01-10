<?php 
    require_once __DIR__ . "/classes/product.php";
    require_once __DIR__ . "/classes/category.php";
    require_once __DIR__ . "/classes/toy.php";
    require_once __DIR__ . "/classes/food.php";
    require_once __DIR__ . "/data/db.php";
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amici a 4 zampe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <?php foreach($products as $product) { ?>
          <div class="card m-3" style="width: 400px;">
            <img class="my-3" src="<?php echo $product->image ?>" alt="">
            <div>
              <h3 class="card-title"><?php echo $product->name ?></h3>
              <h5><?php echo $product->category ?></h5>
              <h5><?php echo $product->type ?></h5>
              <h5><?php echo $product->price ?>€</h5>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </body>
</html>