<div class="page-wrapper">
        <header class="header header-2 header-intro-clearance">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
					<!-- <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a> -->
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
									<div class="header-right">
                        <div class="social-icons social-icons-color">
                            <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <!-- <a href="#" class="social-icon social-pinterest" title="Instagram" target="_blank"><i class="icon-pinterest-p"></i></a> -->
                            <a href="#" class="social-icon social-instagram" title="Pinterest" target="_blank"><i class="icon-instagram"></i></a>
                        </div><!-- End .soial-icons -->
                                    </li>
                                   
									<li><a href="<?= base_url('auth/login_user') ?>" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                </ul>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

                <div class="header-middle">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>
                            
                            <a href="<?= base_url() ?>" class="logo">
                                <img src="<?= base_url() ?>template/olshop/assets/images/demos/demo-2/logoss.png" alt="Logo" width="100 " height="auto">
                            </a>

                        </a>
                        </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="account">
                            <a href="<?= base_url('auth/login_user') ?>" title="My account">
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                                <p>Account</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="wishlist.html" title="Wishlist">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>

                                </div>
                                <p>Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <!-- <span class="cart-count"></span> -->
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price"></span>
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
                        </div><!-- End .header-center -->

                    <!-- <div class="header-right">
                        <i class="la la-lightbulb-o"></i><p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
                    </div> -->
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

                  

        <main class="main">
		<div class="intro-slider-container">
    <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false, "autoplay": true, "autoplayTimeout": 6000}'>
        <div class="intro-slide" style="background-image: url(<?= base_url() ?>template/olshop/assets/images/demos/demo-2/slider/slider-1.jpg);">
            <div class="container intro-content">
                <!-- <h3 class="intro-subtitle">Bedroom Furniture</h3>
                <h1 class="intro-title">Find Comfort <br>That Suits You.</h1>

                <a href="category.html" class="btn btn-primary">
                    <span>Shop Now</span>
                    <i class="icon-long-arrow-right"></i>
                </a> -->
            </div><!-- End .container intro-content -->
        </div><!-- End .intro-slide -->

        <div class="intro-slide" style="background-image: url(<?= base_url() ?>template/olshop/assets/images/demos/demo-2/slider/slider-2.jpg);">
            <div class="container intro-content">
                <!-- <h3 class="intro-subtitle">Deals and Promotions</h3>
                <h1 class="intro-title">Ypperlig <br>Coffee Table <br><span class="text-primary"><sup>$</sup>49,99</span></h1>

                <a href="category.html" class="btn btn-primary">
                    <span>Shop Now</span>
                    <i class="icon-long-arrow-right"></i>
                </a> -->
            </div><!-- End .container intro-content -->
        </div><!-- End .intro-slide -->

		<div class="intro-slide" style="background-image: url(<?= base_url() ?>template/olshop/assets/images/demos/demo-2/slider/slider-3.jpg);">
            <div class="container intro-content">
                <!-- <h3 class="intro-subtitle">Deals and Promotions</h3>
                <h1 class="intro-title">Ypperlig <br>Coffee Table <br><span class="text-primary"><sup>$</sup>49,99</span></h1>

                <a href="category.html" class="btn btn-primary">
                    <span>Shop Now</span>
                    <i class="icon-long-arrow-right"></i>
                </a> -->
            </div><!-- End .container intro-content -->
        </div><!-- End .intro-slide -->

		<div class="intro-slide" style="background-image: url(<?= base_url() ?>template/olshop/assets/images/demos/demo-2/slider/slider-4.jpg);">
            <div class="container intro-content">
                <!-- <h3 class="intro-subtitle">Living Room</h3>
                <h1 class="intro-title">
                    Make Your Living Room <br>Work For You.<br>
                    <span class="text-primary">
                        <sup class="text-white font-weight-light">from</sup><sup>$</sup>9,99
                    </span>
                </h1>

                <a href="category.html" class="btn btn-primary">
                    <span>Shop Now</span>
                    <i class="icon-long-arrow-right"></i>
                </a> -->
            </div><!-- End .container intro-content -->
        </div><!-- End .intro-slide -->

        <div class="intro-slide" style="background-image: url(<?= base_url() ?>template/olshop/assets/images/demos/demo-2/slider/slider-5.jpg);">
            <div class="container intro-content">
                <!-- <h3 class="intro-subtitle">Living Room</h3>
                <h1 class="intro-title">
                    Make Your Living Room <br>Work For You.<br>
                    <span class="text-primary">
                        <sup class="text-white font-weight-light">from</sup><sup>$</sup>9,99
                    </span>
                </h1>

                <a href="category.html" class="btn btn-primary">
                    <span>Shop Now</span>
                    <i class="icon-long-arrow-right"></i>
                </a> -->
            </div><!-- End .container intro-content -->
        </div><!-- End .intro-slide -->
    </div><!-- End .owl-carousel owl-simple -->

    <span class="slider-loader text-white"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->

            <div class="brands-border owl-carousel owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'>
                <!-- <a href="#" class="brand">
                    <img src="<?= base_url() ?>template/olshop/assets/images/brands/1.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="<?= base_url() ?>template/olshop/assets/images/brands/2.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="<?= base_url() ?>template/olshop/assets/images/brands/3.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="<?= base_url() ?>template/olshop/assets/images/brands/4.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="<?= base_url() ?>template/olshop/assets/images/brands/5.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="<?= base_url() ?>template/olshop/assets/images/brands/6.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="<?= base_url() ?>template/olshop/assets/images/brands/7.png" alt="Brand Name">
                </a> -->
            </div><!-- End .owl-carousel -->

            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

            <!--  -->

                        <div class="mb-3"></div><!-- End .mb-6 -->

                      
                        <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Products</h2><!-- End .title -->

                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab" aria-controls="top-fur-tab" aria-selected="false">Mean's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab" aria-controls="top-decor-tab" aria-selected="false">Women's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab" aria-controls="top-light-tab" aria-selected="false">Kid's</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->
                    

                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel" aria-labelledby="featured-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
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
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
            </div>
                            
<style>
    .product-image {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        padding-top: 100%; /* Menjaga aspek rasio gambar */
    }
</style>

<div class="row">
    <?php foreach ($produk as $key => $value) { ?>
        <div class="col-6 col-md-4 col-lg-3">
        <?php 
            echo form_open('belanja/add');
            echo form_hidden('id', $value->id_produk);
            echo form_hidden('qty', 1);
            echo form_hidden('price', $value->harga);
            echo form_hidden('name', $value->nama_produk);
            echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
            ?>
            <div class="product product-7 text-center">
                <!-- Konten Produk -->
                <figure class="product-media">
                    <!-- Gambar Produk -->
                    <a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>">
                        <div class="product-image" style="background-image: url('<?= base_url('assets/gambar/' . $value->gambar) ?>');"></div>
                    </a>

                    <!-- Aksi Produk Vertical -->
                    <div class="product-action-vertical">
                        <a href="<?= base_url('belanja/add_to_wishlist/' . $value->id_produk) ?>" class="btn-product-icon btn-wishlist btn-expandable">
                            <span>Add to Wishlist</span>
                        </a>
                        <a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>" class="btn-product-icon btn-eye btn-expandable" title="">
                            <i class="fas fa-eye"></i>
                            <span>Detail Produk</span>
                        </a>
                    </div><!-- End .product-action-vertical -->

                    <!-- Aksi Produk -->
                    <div class="product-action">
                        <!-- Ganti dari input type="submit" ke button -->
                        <button type="submit" class="btn-product btn-cart swalDefaultSuccess" value="add to cart">Add to Cart</button>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <!-- Body Produk -->
                <div class="product-body">
                    <h3 class="product-title"><a href="#"><b><?= $value->nama_produk ?></b></a></h3><!-- End .product-title -->

                    <!-- Kategori Produk -->
                    <div class="product-cat">
                        <a href="#"><b>Kategori : </b><?= $value->nama_kategori ?></a>
                    </div><!-- End .product-cat -->

                    <!-- Harga Produk -->
                    <div class="product-price">
                        <b><p><span>Rp. <?= number_format($value->harga, 0) ?></span></p></b>
                    </div><!-- End .product-price -->

                
                </div><!-- End .product-body -->
            </div><!-- End .product -->
            <?php echo form_close(); ?>
        </div>
    <?php } ?>
</div>

        
                </div><!-- End .container -->
    </div><!-- End .container -->
    <!-- Isi konten slider di sini -->
</div><!-- End .bg-light-2 pt-6 pb-6 featured -->




            <div class="mb-5"></div><!-- End .mb-5 -->

            

            <div class="mb-6"></div><!-- End .mb-6 -->

           

            <div class="container">
                <hr class="mt-1 mb-6">
            </div><!-- End .container -->
            
            
        </main><!-- End .main -->

       

        	
        	
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
                <a class="nav-link active mobile-menu-link" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
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
                        </li>

                        <li>
                            <a href="blog.html">Contact us</a>
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
        title: 'Barang berhasil di tambahkan ke keranjang.'
      })
      
  });
});
</script>



     

