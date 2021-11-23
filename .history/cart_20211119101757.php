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
                            <a href="" class="content__navigation-link active">SHOPPING CART</a>
                        </li>
                        <li class="content__navigation-list">
                            <a href="" class="content__navigation-link">CHECKOUT</a>
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
                                    <table class="content__cart-table">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">PRODUCT</th>
                                                <th class="product-price">PRICE</th>
                                                <th class="product-quantity">QUANTITY</th>
                                                <th class="product-subtotal">SUBTOTAL</th>
                                                <th class="product-remove">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="content__cart-items">
                                                <td class="product-thumbnail">
                                                    <a href="" class="content__cart-link-img">
                                                        <img src="./assets/img/cate1.png" alt="" class="content__cart-img">
                                                    </a>
                                                    <div class="content__cart-name">
                                                        <a href="" class="content cart-name-link">Artemis Lounge Chair</a>
                                                    </div>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price__value">$90.00</span>
                                                </td>
                                                <td class="product-quantity">
                                                 <div class="quantity">
                                                  <button type="button" class="plus">+</button>
                                                  <input type="number" class="input-number">
                                                  <button type="button" class="minus">-</button>
                                                 </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="product-subtotal__value">$90.00</span>
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
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="col l-4">
                              <!-- Total -->
                              <div class="cart-total">
                                <h3 class="cart-total__heading">CART TOTALS</h3>
                                <div class="cart-total__content">
                                  <div class="cart-total__sub">
                                    <p class="cart-total__title">Subtotal</p>
                                    <p class="cart-total__sub-value">$90.00</p>
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
                                    <p class="total__value">$90.00</p>
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
        <!-- Footer -->
        <div class="footer__wrapper">
            <div class="social">
              <div class="social__container">
                <div class="social__img">
                  <img src="./assets/img/logo_social.png" alt="">
                </div>
                <div class="social__btn">
                  <ul class="social__btn-item">
                    <li class="social__btn-list">
                      <a href="" class="social_btn-link">
                        <i class="social__btn-icon ti-twitter-alt"></i>
                      </a>
                    </li>
                    <li class="social__btn-list">
                      <a href="" class="social_btn-link">
                        <i class="social__btn-icon ti-instagram"></i>
                      </a>
                    </li>
                    <li class="social__btn-list">
                      <a href="" class="social_btn-link">
                        <i class="social__btn-icon ti-facebook"></i>
                      </a>
                    </li>
                    <li class="social__btn-list">
                      <a href="" class="social_btn-link">
                        <i class="social__btn-icon ti-youtube"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <footer class="footer">
              <div class="footer__container">
                <div class="grid">
                  <div class="row">
                    <div class="col l-3">
                      <span class="footer__heading">GET HELP</span>
                      <ul class="footer__container-item">
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Contact & FAQ
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Track Your Order
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Shipping & Delivery
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Visit Brisbane Studio
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Interest Free Finance
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col l-3">
                      <span class="footer__heading">SERVICES</span>
                      <ul class="footer__container-item">
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Assembly Guides
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Furniture Packages & Fitouts
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Trade Programmer
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Sale
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            New Designs
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col l-3">
                      <span class="footer__heading">CONNECT</span>
                      <ul class="footer__container-item">
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Twiter
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Facebook
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Instagram
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Pinterest
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Jobs
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col l-3">
                      <span class="footer__heading">CATEGORIES</span>
                      <ul class="footer__container-item">
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Armchairs
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Bath Room
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Dining Chairs
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Dining Tables
                          </a>
                        </li>
                        <li class="footer__container-list">
                          <a href="" class="footer__container-link">
                            Living Room
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>         
              </div>
            </footer>
            <!-- copyright -->
            <div class="copyright">
              <div class="copyright__container">
                <div class="grid">
                  <div class="row copyright__justify">
                    <div class="col l-6">
                      <div class="copyright__security">
                        <div class="grid">
                          <div class="row">
                            <div class="col l-5">
                              <p class="copyright__copyright">© 2021 Funio Furniture Store</p>
                            </div>
                            <div class="col l-7">
                              <ul class="copyright__item">
                                <li class="copyright__list">
                                  <a href="" class="copyright__link">PRIVACY</a>
                                </li>
                                <li class="copyright__list">
                                  <a href="" class="copyright__link">TERMS</a>
                                </li>
                                <li class="copyright__list">
                                  <a href="" class="copyright__link">*PROMO T&CS APPLY (VIEW HERE)</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col l-6">
                      <div class="copyright_pay">
                        <img src="./assets/img/pay.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>  
    </div>
</body>
</html>