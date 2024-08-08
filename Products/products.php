<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ecommerce Website</title>
    <style media="screen">
      .div2{
        width: 250px;
        border: 1px solid white;
        float: left;
        margin-left: 15px;
        background-color: #D8BFD8;
        margin-top: 15px;
        padding-bottom: 20px;
      }
      img{
        width: 180px;
        height: 180px;
        margin-left: 30px;
      }
      p{
        background-color: #17A2B8;
        margin-top: 0px;
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        color: white;
        padding: 7px;
      }
      .div1{
        margin-left: 10px;
      }
      h3{
        margin-left: 35px;
        margin-top: -5px;
        font-size: 25px;
      }
      #quantity{
        width: 160px;
        margin-left: 30px;
        padding: 7px;
        font-size: 20px;
        border-radius: 10px;
        border: 1px solid black;
      }
      #button{
        width: 170px;
        background-color: #0799fa;
        border: 1px solid #0799fa;
        color: white;
        font-size: 20px;
        font-weight: bold;
        margin-top: 15px;
        padding: 7px;
        margin-left: 30px;
        border-radius: 7px;
      }
      #button:hover{
        background-color: #FF6347;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
          include 'db.php';

          $sql="SELECT * from products";
          $query=mysqli_query($conn,$sql);
          while ($info=mysqli_fetch_array($query)) {
            ?>
            <div class="div2">
              <p><?php echo $info['product_name']; ?> </p>
              <img src="image/<?php echo $info['product_image'] ; ?>" alt="">
              <h3>Price: <?php echo $info['product_price']; ?></h3>
              <form class="" action="products.php" method="post">
                <input id="quantity" type="number" name="quantity" value="" placeholder="Enter Quantity" required>
                <input id="button" type="submit" name="buy_now" value="Buy Now">

              </form>

            </div>

        <?php
          }
       ?>

    </div>

  </body>
</html>
