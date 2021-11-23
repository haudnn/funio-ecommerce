<?php
session_start();
// include('./config/db.php');
// $product = mysqli_query($conn,"SELECT * FROM product  WHERE prd_id IN (5,1,7)");
$total_price = 0;
$item_details = '';
$order_details = '                                    <table class="content__cart-table">
<thead>
    <tr>
        <th class="product-thumbnail">PRODUCT</th>
        <th class="product-price">PRICE</th>
        <th class="product-quantity">QUANTITY</th>
        <th class="product-subtotal">SUBTOTAL</th>
        <th class="product-remove">&nbsp;</th>
    </tr>
</thead>                                    
';
if(!empty($_SESSION["shopping_cart"]))
{
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
  $order_details .= '
  <tr class="content__cart-items">                                               
      <td class="product-thumbnail">
          <a href="" class="content__cart-link-img">
            <img src="./admin/upload/'.$values["item_img"].'" alt="" class="content__cart-img" alt="">
          </a>
          <div class="content__cart-name">
            <a href="" class="content cart-name-link">'.$values["item_name"].'</a>
          </div>
      </td>
      <td class="product-price">
        <span class="product-price__value">$ '.$values["item_price"].'</span>
      </td>
      <td class="product-quantity">
        <div class="quantity">
          <button type="button" class="plus">+</button>
          <input type="number" class="input-number" value="1">
          <button type="button" class="minus">-</button>
        </div>
      </td>
      <td class="product-subtotal">
          <span class="product-subtotal__value">$ '.number_format(1 * $values["item_price"], 2).'</span>
      </td>
      <td class="product-remove">
          <a href="" class="product-remove__item">x</a>
      </td>
  </tr>
  <tr class="content__cart-actions">
  <td colspan="6" class="actions">
      <div class="content__cart-bottom">
          <div class="coupon">
              <input type="text" class="coupon-input" placeholder="Coupon code">
              <button type="submit" class="btn-submit__coupon" name="apply-coupon" value="Apply coupon">APPLY COUPON</button>
          </div>
          <div class="content__continue">
             <a href="" class="content__continue-link">Continue Shopping</a>
          </div>
          <button type="submit" class="btn-submit__update" name="update-cart" value="Update cart">UPDATE CART</button>
      </div>
  </td>
</tr>
  ';
  $total_price = $total_price + (1 * $values["item_price"]);

  $item_details .= $values["item_name"] . ', ';
 }
 $item_details = substr($item_details, 0, -2);
//  $order_details .= '
//  <tr>  
//         <td colspan="3" align="right">Total</td>  
//         <td align="right">$ '.number_format($total_price, 2).'</td>
//     </tr>
//  ';
}
$order_details .= '</table>';
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <!-- header -->
        <?php include('includes/nav.php'); ?>
        <!-- content -->
        <div class="content">
            <div class="container">
              <!-- Nav -->
                <div class="content__navigation">
                    <ul class="content__navigation-item">
                        <li class="content__navigation-list">
                            <a href="cart.php" class="content__navigation-link active">SHOPPING CART</a>
                        </li>
                        <li class="content__navigation-list">
                            <a href="checkout.php" class="content__navigation-link">CHECKOUT</a>
                        </li>
                        <li class="content__navigation-list">
                            <a href="" class="content__navigation-link">ORDER TRACKING</a>
                        </li>
                    </ul>
                </div>
                <!-- Cart -->
                <div class="content_cart">
                    <div class="grid">
                        <div class="row">
                            <div class="col l-8">
                              <!-- Form Cart -->
                                <form class="content_cart-products">
                                <?php
                                    echo $order_details;
                                    ?>
                                </form>
                            </div>
                            <div class="col l-4">
                              <!-- Total -->
                              <div class="cart-total">
                                <div class="cart-wrapper">
                                <h3 class="cart-total__heading">CART TOTALS</h3>
                                <div class="cart-total__content-wrapper">
                                  <div class="cart-total__sub">
                                    <p class="cart-total__title">Subtotal</p>
                                    <!-- <p class="cart-total__sub-value">$<?php echo number_format($total, 2); ?></p> -->
                                  </div>
                                  <div class="cart-total__ship">
                                    <p class="cart-total__title">Shipping</p>
                                    <div class="cart-total__ship-wrapper">
                                      <ul class="cart-total__ship-options">
                                        <li class="cart-total__ship-list">
                                          <input type="radio" name="freeShipping" value="" id="btnFreeShipping" class="btnFreeShipping">
                                          <label for="freeShipping" class="cart-total__ship-label">Free shipping</label>
                                        </li>
                                        <li class="cart-total__ship-rate">
                                          <input type="radio" name="flatRate" value="" id="flatRate" class="btnFlatRate">
                                          <label for="flatRate" class="cart-total__ship-label">Flat rate</label>
                                        </li>
                                      </ul>
                                      <p class="cart-total__ship-description">Shipping options will be updated during checkout.</p>
                                      <a href="" class="cart-total__ship-calculator">Calculate shipping</a>
                                    </div>
                                  </div>
                                  <div class="total">
                                    <p class="cart-total__title">Total</p>
                                    <!-- <p class="total__value">$<?php echo number_format($total, 2); ?></p> -->
                                  </div>
                                  <div class="checkout">
                                    <a href="" class="checkout-link">PROCEED TO CHECKOUT</a>
                                  </div>                          
                                </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/cart.js"></script> 
</body>
</html>