<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  </head>
  <body>
    <header>
      <div class="content-wrapper">
        <h1>The Ghost Rail</h1>
        <nav>
          <a href="index.html">Home</a>
          <a href="about.html">About</a>
          <a href="members/members.html">Members</a>
          <a href="products/products.html">Products</a>

        </nav>
        <div class="link-icons">
          <a href="index.php?page=cart">
            <i class="fas fa-shopping-cart"></i>
            <span>0</span>
          </a>
        </div>
      </div>
    </header>
    <main>
      <div class="featured">
                <style>
          main .featured {
            background-image: url(imgs/featured-image.jpg);
          }
        </style>
        <h2>Aesthetics</h2>
        <p>Beautiful art for any space</p>
      </div>
      <div class="recentlyadded content-wrapper">
        <h2>Recently Added Products</h2>
        <div class="products">
          
          <!--Product 1 -->
          <a href="products/product_0.html" class="product">
            <img src="imgs/apollo.jpg" width="200" height="200" alt="apollo">
            <span class="name">Apollo</span>
            <span class="price">
              &dollar;99.99
              <span class="rrp">&dollar;89.99</span>
            </span>
          </a>
          
          <!--Product 2 -->
           <a href="products/product_1.html" class="product">
            <img src="imgs/diana.jpg" width="200" height="200" alt="apollo">
            <span class="name">Dianna</span>
            <span class="price">
              &dollar;149.99
              <span class="rrp">&dollar;89.99</span>
            </span>
          </a>
          
          <!--Product 3 -->
           <a href="products/product_2.html" class="product">
            <img src="imgs/hermes.jpg" width="200" height="200" alt="apollo">
            <span class="name">Hermes</span>
            <span class="price">
              &dollar;95.99
              <span class="rrp">&dollar;85.99</span>
            </span>
          </a>
          
          <!--Product 4 -->
           <a href="products/product_3.html" class="product">
            <img src="imgs/zeus.jpg" width="200" height="200" alt="apollo">
            <span class="name">Zeus</span>
            <span class="price">
              &dollar;299.99
<!--              <span class="rrp">&dollar;89.99</span>-->
            </span>
          </a>
          
        </div>
      </div>

    </main>

    <footer>
      <div class="content-wrapper">
        <p>&copy; 2021, The Ghost Rail</p>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>

</html>
