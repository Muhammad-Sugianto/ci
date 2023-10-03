<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Muhammad Sugianto | </title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>template/olshop/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>template/olshop/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>template/olshop/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>template/olshop/assets/images/icons/site.html">
    <link rel="mask-icon" href="<?= base_url() ?>template/olshop/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?= base_url() ?>template/olshop/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?= base_url() ?>template/olshop/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/plugins/nouislider/nouislider.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>


<div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                    <div>
                        <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                    </div>

                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    
                                    <li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="<?= base_url() ?>" class="logo">
                                <img src="<?= base_url() ?>template/olshop/assets/images/demos/demo-2/logoss.png" alt="Logo" width="100" height="auto">
                            </a>

                       
                        <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="megamenu-container active">
                            <b><a href="#" class="toggle" role="button" data-toggle="active" aria-haspopup="true" aria-expanded="false" data-display="static" title="BEST QUALITY.">
                                BEST QUALITY.
                            </a></b>

                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                                                
                        <div class="header-center">
                            <nav class="main-nav">
                                <ul class="menu">
                                    <li class="megamenu-container active">
                                        <a href="<?= base_url() ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="category.html">Shop</a>
                                    </li>
                                    <li>
                                        <a href="product.html">Product</a>
                                    </li>

                                <?php $kategori = $this->m_home->get_all_data_kategori();  ?>
                                    <li>
                                    <a href="#" class="sf-with-ul">Kategori</a>
                                            <ul>

                                <?php foreach ($kategori as $key => $value) { ?>

                                    <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a></li>

                               <?php } ?>
                                           
                                            </ul>
                                        </li>
                                    <li>
                                        <a href="blog.html">Contact</a>
                                    <!-- </li>
                                    <li>
                                        <a href="elements-list.html">Elements</a>
                                    </li> -->
                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                <i class="icon-random"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                    </li>
                                </ul>

                                <div class="compare-actions">
                                    <a href="#" class="action-link">Clear All</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="<?= base_url() ?>template/olshop/assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="<?= base_url() ?>template/olshop/assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
                    </ol>

                    <nav class="product-pager ml-auto" aria-label="Product">
                        <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                            <i class="icon-angle-left"></i>
                            <span>Prev</span>
                        </a>

                        <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                            <span>Next</span>
                            <i class="icon-angle-right"></i>
                        </a>
                    </nav><!-- End .pager-nav -->
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                        <div class="col-md-6">
    <div class="product-gallery product-gallery-vertical">
        <div class="row">
            <figure class="product-main-image">
                <img id="product-zoom" src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" data-zoom-image="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt="product image">
                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                    <i class="icon-arrows"></i>
                </a>
            </figure><!-- End .product-main-image -->

            <div id="product-zoom-gallery" class="product-image-gallery">
                <!-- Gambar kecil untuk galeri -->
                <a class="product-gallery-item active" href="#" data-image="<?= base_url('assets/gambar/' . $produk->gambar) ?>" data-zoom-image="<?= base_url('assets/gambar/' . $produk->gambar) ?>">
                    <img src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt="product image">
                </a>

                <?php foreach ($gambar as $key => $value) { ?>
                    <a class="product-gallery-item" href="#" data-image="<?= base_url('assets/gambarproduk/' . $value->gambar) ?>" data-zoom-image="<?= base_url('assets/gambarproduk/' . $value->gambar) ?>">
                        <img src="<?= base_url('assets/gambarproduk/' . $value->gambar) ?>" alt="product image">
                    </a>
                <?php } ?>
            </div><!-- End .product-image-gallery -->
        </div><!-- End .row -->
    </div><!-- End .product-gallery -->
</div><!-- End .col-md-6 -->

<div class="col-md-6">
    <div class="product-details">
        <h1 class="product-title"><?= $produk->nama_produk ?></h1><!-- End .product-title -->
        <hr>

        <div class="ratings-container">
            <div class="ratings">
                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
            </div><!-- End .ratings -->
            <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
        </div><!-- End .rating-container -->

        <hr>
        <div class="product-price">
            Rp. <?= number_format($produk->harga, 0) ?>.00
        </div><!-- End .product-price -->

        <hr>
        <div class="details-filter-row details-row-size">
            <label for="size">Size:</label>
            <div class="select-custom">
                <select name="size" id="size" class="form-control">
                    <option value="#" selected="selected">Select a size</option>
                    <option value="s">Small</option>
                    <option value="m">Medium</option>
                    <option value="l">Large</option>
                    <option value="xl">Extra Large</option>
                </select>
            </div><!-- End .select-custom -->

            <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
        </div><!-- End .details-filter-row -->

        <hr>
        <div class="details-filter-row details-row-size">
            <label for="qty">Qty:</label>
            <div class="product-details-quantity">
                <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
            </div><!-- End .product-details-quantity -->
        </div><!-- End .details-filter-row -->

        <hr>
        <div class="product-details-action">
            <?php echo form_open('belanja/add'); ?>
            <?php echo form_hidden('id', $produk->id_produk); ?>
            <?php echo form_hidden('qty', 1); ?>
            <?php echo form_hidden('price', $produk->harga); ?>
            <?php echo form_hidden('name', $produk->nama_produk); ?>
            <?php echo form_hidden('redirect_page', str_replace('index.php/', '', current_url())); ?>

            <button type="submit" class="btn-product btn-cart swalDefaultSuccess" value="add to cart"><span>Add to Cart</span></button>
            <?php echo form_close(); ?>

            <div class="details-action-wrapper">
                <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
            </div><!-- End .details-action-wrapper -->
        </div>
    </div><!-- End .product-details -->
</div><!-- End .col-md-6 -->

                                    </div><!-- End .product-details-action -->


                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <?= $produk->nama_kategori ?>
                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <!-- <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a> -->
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Informasi</h3>
                                    <p><?= $produk->deskripsi ?>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
  
                                </div><!-- End .reviews -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->

                    <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="<?= base_url() ?>template/olshop/assets/images/products/product-4.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Women</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Brown paperbag waist <br>pencil skirt</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-thumbs">
                                    <a href="#" class="active">
                                        <img src="<?= base_url() ?>template/olshop/assets/images/products/product-4-thumb.jpg" alt="product desc">
                                    </a>
                                    <a href="#">
                                        <img src="<?= base_url() ?>template/olshop/assets/images/products/product-4-2-thumb.jpg" alt="product desc">
                                    </a>

                                    <a href="#">
                                        <img src="<?= base_url() ?>template/olshop/assets/images/products/product-4-3-thumb.jpg" alt="product desc">
                                    </a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-out">Out of Stock</span>
                                <a href="product.html">
                                    <img src="<?= base_url() ?>template/olshop/assets/images/products/product-6.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Jackets</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="out-price">$120.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <a href="product.html">
                                    <img src="<?= base_url() ?>template/olshop/assets/images/products/product-11.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $110.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 1 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-thumbs">
                                    <a href="#" class="active">
                                        <img src="<?= base_url() ?>template/olshop/assets/images/products/product-11-thumb.jpg" alt="product desc">
                                    </a>
                                    <a href="#">
                                        <img src="<?= base_url() ?>template/olshop/assets/images/products/product-11-2-thumb.jpg" alt="product desc">
                                    </a>

                                    <a href="#">
                                        <img src="<?= base_url() ?>template/olshop/assets/images/products/product-11-3-thumb.jpg" alt="product desc">
                                    </a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="<?= base_url() ?>template/olshop/assets/images/products/product-10.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Jumpers</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Yellow button front tea top</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $56.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 0 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="<?= base_url() ?>template/olshop/assets/images/products/product-7.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Jeans</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Blue utility pinafore denim dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $76.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<img src="<?= base_url() ?>template/olshop/assets/images/logo.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

	            				<div class="social-icons">
	            					<a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
	            					<a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
	            					<!-- <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a> -->
	            				</div><!-- End .soial-icons -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="about.html">About Molla</a></li>
	            					<li><a href="#">How to shop on Molla</a></li>
	            					<li><a href="#">FAQ</a></li>
	            					<li><a href="contact.html">Contact us</a></li>
	            					<li><a href="login.html">Log in</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Payment Methods</a></li>
	            					<li><a href="#">Money-back guarantee!</a></li>
	            					<li><a href="#">Returns</a></li>
	            					<li><a href="#">Shipping</a></li>
	            					<li><a href="#">Terms and conditions</a></li>
	            					<li><a href="#">Privacy Policy</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">My Account</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Sign In</a></li>
	            					<li><a href="cart.html">View Cart</a></li>
	            					<li><a href="#">My Wishlist</a></li>
	            					<li><a href="#">Track My Order</a></li>
	            					<li><a href="#">Help</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2023 ShoeHeaven. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<figure class="footer-payments">
	        			<img src="<?= base_url() ?>template/olshop/assets/images/payments.png" alt="Payment methods" width="272" height="20">
	        		</figure><!-- End .footer-payments -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

  
    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

                <div class="mobile-menu-container mobile-menu-light">
                <div class="mobile-menu-wrapper">
                    <span class="mobile-menu-close"><i class="icon-close"></i></span>
                    
                    <form action="#" method="get" class="mobile-search">
                        <label for="mobile-search" class="sr-only">Search</label>
                        <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search product ..." required>
                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                    </form>

                    <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                            <nav class="mobile-nav">
                                <ul class="mobile-menu">
                                    <li class="megamenu-container active">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="category.html">Shop</a>
                                    </li>
                                    <li>
                                        <a href="product.html">Product</a>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                    </li>
                                   
                                    <?php $kategori = $this->m_home->get_all_data_kategori();  ?>
                                    <li>
                                    <a href="#" class="sf-with-ul">Kategori</a>
                                            <ul>

                                <?php foreach ($kategori as $key => $value) { ?>

                                    <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a></li>

                               <?php } ?>
                                           
                                            </ul>



                                    <li>
                                        <a href="blog.html">About</a>
                                    </li>
                                    <li>
                                        <a href="elements-list.html">Elements</a>
                                    </li>
                                </ul>
                            </nav><!-- End .mobile-nav -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->

                    <div class="social-icons">
                        <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                        <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                        <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                    </div><!-- End .social-icons -->
                </div><!-- End .mobile-menu-wrapper -->
            </div><!-- End .mobile-menu-container -->

    




    
<!-- Plugins JS File -->
<script src="<?= base_url() ?>template/olshop/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/superfish.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/bootstrap-input-spinner.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/jquery.elevateZoom.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/bootstrap-input-spinner.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="<?= base_url() ?>template/olshop/assets/js/main.js"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>template/olshop/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript">
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Barang berhasil ditambahkan ke Keranjang.'
            });
        });
    });
        </script>
</body>


<!-- molla/product.html  22 Nov 2019 09:55:05 GMT -->
</html>