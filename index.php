<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Product</title>
    <style media="screen">
      .div1{
        border: 2px solid black;
        width: 700px;
        margin-left: 350px;
        padding: 30px;
      }
      label{
       font-size: 23px;
       font-weight: bold;
      }
      #product_name,#product_price{
        width: 300px;
        padding: 7px;
        margin-top: 10px;
        font-size: 18px;
      }
      #product_details{
        width: 500px;
        height: 200px;
        margin-top: 10px;
      }
      #product_image{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
      }
      #insert{
        font-size: 20px;
        font-weight: bold;
        padding: 6px;
        width: 150px;
        color: white;
        background-color: blue;
        border: 1px solid blue;
        margin-left: 250px;
        border-radius: 5px;

      }
    </style>
  </head>
  <body>
    <div class="div1">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Insert Product Name</label><br>
        <input id="product_name" type="text" name="product_name" value="" placeholder="Insert Product Name" required>
        <br><br>
        <label for="">Insert Product Price</label><br>
        <input id="product_price" type="text" name="product_price" value="" placeholder="Insert Product Price" required><br><br>
        <label for="">Insert Product Details</label><br>
        <textarea id="product_details" name="product_details" rows="20" cols="80" placeholder="Insert Product Deatils" required>
        </textarea><br><br>
        <label for="">Insert Product Image</label><br>
        <input id="product_image" type="file" name="product_image" value="" required><br><br>
        <input id="insert" type="submit" name="insert" value="Insert">

      </form>
      <?php
          include 'db.php';

          if (isset($_POST['insert'])) {
            $product_name=$_POST['product_name'];
            $product_price=$_POST['product_price'];
            $product_details=$_POST['product_details'];
            $image_name=$_FILES['product_image']['name'];
            $image_size=$_FILES['product_image']['size'];
            $image_type=$_FILES['product_image']['type'];
            $image_tem_loc=$_FILES['product_image']['tmp_name'];
            $image_store="image/".$image_name;
            move_uploaded_file($image_tem_loc,$image_store);

            $sql="INSERT INTO products(product_name,product_price,product_details,product_image)
            values('$product_name','$product_price','$product_details','$image_name')";
            $query=mysqli_query($conn,$sql);



          }
      ?>

    </div>

  </body>
</html>
