
<!DOCTYPE html>
<html lang="en">

<!-- header and links -->
<?php include 'sections/header.php'; ?>

<body>

  <!-- Top navigation bar -->
  <?php include 'sections/top-navigation-bar.php'; ?>

  <div class="hero-wrap hero-bread" style="background-image: url('images/bg/bg-1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-0 bread">Order Summary</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="index.php">Home</a></span> 
            <span>Order Summary</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-cart">
    <div class="container">
      <div class="row">
        <div class="col col-lg-12 col-md-6 mt-5 cart-wrap ftco-animate">
          <div class="cart-total">
            <h3>Order Summary</h3>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <div class="info mb-5">
                  <p style="color: #4f4f4f;"><b>Billing Details</b></p>
                  <p><span>Name </span><b>Abdul Salsalani</b></p>
                  <p><span>Contact </span><b>+639123789168</b></p>
                  <p><span>Email Address </span><b>salsalani@gmail.com</b></p>
                  <p><span>Address </span><b>Block 12 Lot 3 Brgy. Talomo Proper, Davao City</b></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <p style="color: #4f4f4f;"><b>Order Info</b></p>
                  <div class="row">
                   <div class="col-md-6">
                    <p><span>Order ID </span><b>901277</b></p>
                    <p><span>Payment Method </span><b>Cash on Delivery</b></p>
                    <p><span>Date Ordered </span><b>March 21, 2000</b></p>
                  </div>
                  <div class="col-md-6">
                   <p><span>Subotal </span><b>PHP 1,223.44</b></p>
                   <p><span>Delivery </span><b>PHP 500.00</b></p>
                   <p><span>Total </span><b>PHP 1,723.44</b></p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="row">
    <div class="col-md-12 mt-5 ftco-animate">
      <div class="cart-list">
        <table class="table">
          <thead class="thead-primary">
            <tr class="text-center">
              <th>&nbsp;</th>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center">
              <td class="image-prod">
                <a class="img" style="background-image:url(images/products/product-1.jpg);"></a>
              </td>
              <td class="product-name">
                <h3>RED REV SUPER LIMITER CUT</h3>
              </td>
              <td class="price">PHP 1,233.22</td>
              <td class="quantity">
                <div class="input-group">
                  <input type="text" class="form-control" value="3" disabled>
                </div>
              </td>
              <td class="total">PHP 12,222.12</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</section>

<!-- footer -->
<?php include 'sections/footer.php'; ?>
<!-- loader -->
<?php include 'sections/loader.php'; ?>
<!-- scripts -->
<?php include 'sections/scripts.php'; ?>

</body>
</html>