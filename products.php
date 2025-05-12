<?php include_once 'header.php'; ?>
<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "tbl_product");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="products.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="products.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Product Page</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body> 
          <div class="productBG">
           <br /> 
           <div class="productsContainer">  
                <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="productCards">  
                     <form method="post" action="products.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="imgCard" /><br />  
                               <h4 class="nameCard"><?php echo $row["name"]; ?></h4>  
                               <h4 class="priceCard">£ <?php echo $row["price"]; ?></h4>  
                               <h4>Amount:</h4>
                               <input type="text" name="quantity" class="quantityCard" value="1" /> 
                               <div class="product-card-info">
                                   <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                                   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                                   <input type="submit" name="add_to_cart" style="margin-top:5px;" class="ATCbutton" value="Add to Cart" />  
                               </div> 
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
          </div>
          </div>
          <h2 class="video-description">You might ask why should I collect Vinyls & CD's in the year 2025?<br>Well... Check out these video's giving 5 reasons to collect physical!</h2>
          
          <div class="product-page-vid">
          <div class="video-container">
          <iframe src="https://www.youtube.com/embed/lQ1feKfJ-C8?si=WLI4AhLuUCIjl0pB" 
               title="YouTube video player"
               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
               referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
          </iframe>
          </div>
          <div class="video-container">
          <iframe src="https://www.youtube.com/embed/jctBkF1_NYc?si=oTXgH4l7LAcFVZ5d" 
               title="YouTube video player"
               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
               referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
          </iframe>
          </div>
          </div>
     </body>  
 </html>
<?php include_once 'footer.php'; ?>