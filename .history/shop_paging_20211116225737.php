<?php include('./config/db.php'); 
$navigation = mysqli_query($conn,"SELECT * FROM category  WHERE cat_status='1' ORDER BY cat_id");
$brand = mysqli_query($conn,"SELECT * FROM brand ORDER BY brand_id");
$product = mysqli_query($conn,"SELECT * FROM product ORDER BY prd_id");
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
      <!-- Header shop -->
        <header class="header">
            <div class="header__container">
              <div class="header__topbar">
                  <div class="header__topbar-left">
                      <a href="" class="header__location">
                          <i class="header__icon ti-location-pin"></i>
                          <span class="header__text">Store Location</span>
                      </a>
                      <a href="" class="header__mail">
                          <i class="header__icon-mail ti-email"></i>
                          <span class="header__text">support@funio.com</span>
                      </a>
                  </div>
                <div class="header__topbar-right">
                      <a href="" class="header__text_gift">Gift Cards</a>
                      <a href="" class="header__text">FAQs</a>
                </div>
              </div>
              <div class="header__navigation">
                <div class="header__menu">
                  <div class="header__logo">
                    <a href="" class="header__logo-link">
                      <img src="./assets/img/logo__shop.png" alt="" class="header__logo-img">
                    </a>
                  </div>
                  <div class="header__nav">
                    <ul class="header__nav-items">
                      <li class="header__nav-lists">
                          <a href="./index.html" class="header__nav-link active">HOME</a>                 
                      </li>
                      <li class="header__nav-lists">
                          <a href="./shop_paging.html" class="header__nav-link">SHOP</a>
                      </li>             
                      <li class="header__nav-lists">
                          <a href="" class="header__nav-link">PRODUCT</a>
                      </li>
                      <li class="header__nav-lists">
                          <a href="" class="header__nav-link">BLOG</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="headerr__active">
                  <ul class="headerr__active-item">
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class="header__active-icon fas fa-search"></i>
                      </a>
                    </li>
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class=" header__active-icon user-login far fa-user"></i>
                      </a>
                    </li>
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class="header__active-icon far fa-star"></i>
                      </a>
                    </li>
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class="header__active-icon fas fa-shopping-cart"></i>
                      </a>
                    </li>
                  </ul>                 
                </div>
              </div>
            </div>
        </header>
      <!-- Nav -->
        <div class="navigation">
          <h4 class="navigation__heading">Shop</h4>
          <div class="navigation__path">
            <a href="./index.html" class="navigation__path-home">Home</a>
            <a class="icon__next">&#10095;</a>
            <span class="navigation__path-current">Shop</span>
          </div>         
          <div class="slick-container">
              <div class="slider variable-width">
              <?php foreach ($navigation as $key => $value): ?>             
                  <div class="normal">
                    <div class="inside navigation__product">
                      <a href="" class="navigation__product-link">
                        <img src="./admin/upload/<?php echo $value['cat_image']; ?>" alt="" class="navigation__product-img" alt="">     
                      </a>
                      <a href="" class="navigation__product-name"><?php echo $value['cat_name']; ?></a>
                    </div>
                  </div>
              <?php  endforeach ?>
                </div>
            </div>
        </div>
        </div>
      <!-- Category -->
        <div class="container">
          <div class="app__content">
            <div class="grid">
              <div class="row">
                <div class="col l-3">
                  <div class="category">
                    <nav class="category-nav">
                      <h3 class="category__heading">
                        CATEGORIES
                      </h3>
                      <ul class="category-list">
                      <?php foreach ($navigation as $key => $value): ?>     
                        <li class="category-item">
                          <a href="" class="category-item__link category-<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></a>
                          <span  class="category-item__quantity"><?php echo $value['cat_quantity']; ?></span>
                        </li>
                        <?php  endforeach ?>
                    </ul>
                    </nav>
                    <div class="category-price">
                      <h3 class="category__heading">
                        PRICE
                      </h3>
                      <div class="category-price__filtter">
                        <div class="category-price__slider">
                          <div class="category-price__range">                         
                          </div>
                          <span class="category-price__pull" style="left: 0%;"></span>
                          <span class="category-price__pull" style="left: 100%;"></span>
                        </div>
                        <div class="category-price__value">
                          <span class="category-price__value-text">Range : <span>$30 - $350</span></span>
                        </div>
                      </div>
                    </div>
                    <div class="category-color">
                      <h3 class="category__heading">
                        COLOR
                      </h3>
                      <div class="category-color-filter">
                        <ul class="category-color__item">
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral blue"></span>
                              <label for="" class="category-color__text">Blue</label>
                            </div>
                            <span class="category-color__count">1</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral brown"></span>
                              <label for="" class="category-color__text">Brown</label>
                            </div>
                            <span class="category-color__count">5</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral green"></span>
                              <label for="" class="category-color__text">Green</label>
                            </div>
                            <span class="category-color__count">4</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral grey"></span>
                              <label for="" class="category-color__text">Grey</label>
                            </div>
                            <span class="category-color__count">4</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral nude"></span>
                              <label for="" class="category-color__text">Nude</label>
                            </div>
                            <span class="category-color__count">4</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral pink"></span>
                              <label for="" class="category-color__text">Pink</label>
                            </div>
                            <span class="category-color__count">1</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral red"></span>
                              <label for="" class="category-color__text">Red</label>
                            </div>
                            <span class="category-color__count">1</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral yellow"></span>
                              <label for="" class="category-color__text">Yellow</label>
                            </div>
                            <span class="category-color__count">2</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="category-size">
                      <h3 class="category__heading">
                        SIZE
                      </h3>
                      <ul class="category-size__items">
                        <li class="category-size__list">
                          <span class="category-size__details">L</span>
                        </li>
                        <li class="category-size__list">
                          <span class="category-size__details">M</span>
                        </li>
                        <li class="category-size__list">
                          <span class="category-size__details">S</span>
                        </li>
                        <li class="category-size__list">
                          <span class="category-size__details">XL</span>
                        </li>
                        <li class="category-size__list">
                          <span class="category-size__details">XS</span>
                        </li>
                      </ul>
                    </div>
                    <div class="category-brand">
                      <h3 class="category__heading">
                        BRANDS
                      </h3>
                      <ul class="category-brand__items">
                      <?php foreach ($brand as $key => $value): ?>    
                        <li class="category-brand_list">
                          <img src="./admin/upload/<?php echo $value['brand_img']; ?>" alt="" class="category-brand-img" alt="">  
                        </li>
                        <?php  endforeach ?>
                      </ul>
                    </div>
                    <div class="category-featured">
                      <h3 class="category__heading">
                        FEATURE PRODUCT
                      </h3>
                      <div class="category-featured__content">
                        <ul class="category-featured__item">
                          <li class="category-featured__list">
                            <div class="category-featured__img">
                              <a href="" class="category-featured__link-img">
                                <img src="./assets/img/cate3.jpg" alt="">
                              </a>
                            </div>
                            <div class="category-featured__description">
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <span class="category-featured__description-name">Cole Lounge Chair</span>
                              <span class="quantity old">$130.00</span>
                              <span class="quantity new">$125.00</span>
                            </div>
                          </li>
                          <li class="category-featured__list">
                            <div class="category-featured__img">
                              <a href="" class="category-featured__link-img">
                                <img src="./assets/img/cate3.jpg" alt="">
                              </a>
                            </div>
                            <div class="category-featured__description">
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <span class="category-featured__description-name">Cole Lounge Chair</span>
                              <span class="quantity old">$130.00</span>
                              <span class="quantity new">$125.00</span>
                            </div>
                          </li>
                          <li class="category-featured__list">
                            <div class="category-featured__img">
                              <a href="" class="category-featured__link-img">
                                <img src="./assets/img/cate3.jpg" alt="">
                              </a>
                            </div>
                            <div class="category-featured__description">
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <span class="category-featured__description-name">Cole Lounge Chair</span>
                              <span class="quantity old">$130.00</span>
                              <span class="quantity new">$125.00</span>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col l-9">
                  <div class="products">
                    <div class="products-heading">
                      <span class="products-heading_show">Showing all 29 results</span>
                      <div class="products-display">
                        <ul class="products-display__item">
                          <li class="products-display__list">
                            <span class="layer-first">
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-middle">
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-last">
                              <span></span>
                              <span></span>
                            </span>
                          </li>
                          <li class="products-display__list">
                            <span class="layer-first active">
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-middle active">
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-last active">
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                          </li>
                          <li class="products-display__list ">
                            <span class="layer-first">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-middle">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-last">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                          </li>
                          <li class="products-display__list">
                            <span class="layer-first">
                              <span></span>
                              <span class="layer-long"></span>
                            </span>
                            <span class="layer-middle">
                              <span></span>
                              <span class="layer-long"></span>
                            </span>
                            <span class="layer-last">
                              <span></span>
                              <span class="layer-long"></span>
                            </span>
                          </li>
                        </ul>
                        <div class="products-display-sort">
                          <input type="checkbox" hidden class="display__check" id="display__check">
                          <label for="display__check">
                              <span class="display__sort">Default Sorting
                              <i class="fas fa-sort-down"></i> 
                              </span>                             
                          </label>
                          <label for="display__check" class="display__overlay">
                          </label>     
                          <div class="display__sort-sub">
                            <ul class="display__sort-menu">
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Default Sorting</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Popularity</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Average Rating</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Latest</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Price : Low to Hight</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Price : Hight to Low</a>
                              </li>
                            </ul>                            
                          </div>                 
                        </div>
                      </div>
                    </div>                  
                    <div class="grid">
                      <div class="row no-gutters products__rows">
                      <?php foreach ($product as $key => $value): ?>   
                        <div class="col l-4">
                          <div class="products-details ">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale"><?php echo $value['prd_sale']; ?></div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./admin/upload/<?php echo $value['prd_image']; ?>" alt="" class="products-img" alt="">
                                  <img src="./admin/upload/<?php echo $value['prd_image_2']; ?>" alt="" class="products-img hidden" alt="">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name"><?php echo $value['prd_name']; ?></a>
                              <span class="quantity old"><?php echo $value['prd_price_old']; ?></span>
                              <span class="quantity new"><?php echo $value['prd_price']; ?></span>
                            </div>
                          </div>
                        </div>
                        <?php  endforeach ?>
                        <!-- <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div> -->
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
     <!-- Form Login / Register -->
    <div class="modal js-modal">
      <div class="modal__container js-modal-container">
        <div class="modal-content">
            <div class="modal-close js-modal-close">
              <i class=" modal-close-icon fas fa-times"></i>
            </div>
         <div class="box-content">
            <div class="form-login active" >
              <form action="" class="login">
                <div class="modal-heading">
                  <h2 class="modal-heading__text">SIGN IN</h2>
                </div>
                <div class="form-content">
                  <div class="username">
                    <input type="text" class="form__input" required placeholder="Your name">
                  </div>
                  <div class="password">
                    <input type="password" class="form__input" required placeholder="Password">
                  </div>
                  <div class="remember-lost">
                    <div class="remember">
                      <input type="checkbox" value="" checked="checked" id="rememberme" name="rememberme">
                      <label for="rememberme" class="remember__text">Remember me</label>
                    </div>
                    <div class="lost-password">
                      <a href="" class="lost-password__link">Lost your password?</a>
                    </div>
                  </div>
                  <div class="button-login">
                    <input type="submit" name="btnLogin" class="btn-login" value="LOGIN">
                  </div>
                  <div class="button-create">
                    <h3 class="button-create__text">CREATE AN ACCOUNT</h3>
                  </div>
                </div>
              </form>
            </div>
            <div class="form-register">
              <form action="" class="register">
                <div class="modal-heading">
                  <h2 class="modal-heading__text">REGISTER</h2>
                </div>
                <div class="form-content">
                  <div class="email">
                    <input type="email" class="form__input" required placeholder="Email">
                  </div>
                  <div class="password">
                    <input type="password" class="form__input" required placeholder="Password">
                  </div>
                  <div class="button-resgister">
                    <input type="submit" name="btnResgister" class="btn-resgister__click" value="RESGISTER">
                  </div>
                  <div class="button-back">
                    <h3 class="button-back__login">ALREADY HAS AN ACCOUNT</h3>
                  </div>
                </div>
              </form>
            </div>
         </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/slick.js"></script>
</body>
</html>