<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="CSS/index.css" type="text/css" rel="stylesheet">
    <link href="CSS/footer.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <title></title>
  </head>
  <body>

  <div class="container">
     <?php include 'DB.php';?>
    <div class="nav-bar">

          <ul class="left-list">
              <li class="left-list-logo"><a href="index.html"> <img src="img/logo.png" alt="Logo"></a></li>
              <li class="left-list-items">HOME</li>
              <li class="left-list-items">MEN</li>
              <li class="left-list-items">LADIES</li>
          </ul>
          <div class="s">      </div>
          <ul class="right-list">
              <li class="right-list-items cart-button"><a href="index.html">//hanb2a n7ot soras Cart</a></li>
              <li class="right-list-items"><input type="text" name="search" id="search" placeholder="search"></li>
          </ul>

     </div>
      <div class="home-product">
      <?php $result = get_query_result("SELECT * FROM Produduct");
        foreach ($result as $key) {
       ?>
          <div class="img-product">
              <img src="img/Selection_025.bmp" alt="">
          </div>
          <div class="center-text home-product-descriptgion" >
              <p><?php echo $key["productDescription"]; ?></p>
              <p class="price-mergin"><?php echo $key["productPrice"]; } ?></p>
          </div>
      </div>
      <div class="product-details">
      <h1 class="center-text description-padding"> product description jdjhfjhdjhfj</h1>
      <a  class="details-padding" href="#"> scroll to details </a>
      <p class="center-text price-padding"> 3565</p>
      <button class="cart-details" > add to cart </button>
      </div>
      <?php include ("inc/footer.php") ?>
  </div>
  </body>
</html>
