<!DOCTYPE html>
<html lang="en">


<!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>	MUHAMMAD SUGIANTO </title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>template/olshop/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="<?= base_url() ?>template/olshop/image/png" sizes="32x32" href="<?= base_url() ?>template/olshop/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="<?= base_url() ?>template/olshop/image/png" sizes="16x16" href="<?= base_url() ?>template/olshop/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>template/olshop/assets/images/icons/site.html">
    <link rel="mask-icon" href="<?= base_url() ?>template/olshop/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?= base_url() ?>template/olshop/assets/images/icons/favicon.ico">
	<link rel="shortcut icon" href="<?= base_url() ?>template/olshop/assets/images/icons/fav.png">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?= base_url() ?>template/olshop/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/skins/skin-demo-2.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/demos/demo-2.css">
     <!-- Tambahkan ini di dalam bagian <head> dokumen HTML Anda -->
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	

</head>




<div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                    <div>
                        <!-- <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li> -->
                    </div>

                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    
                                    <li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist</li>
                                    <!-- <li><a href="about.html">About Us</a></li> -->
                                    <!-- <li><a href="contact.html">Contact Us</a></li> -->
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
                                <img src="<?= base_url() ?>template/olshop/assets/images/demos/demo-2/logoss.png" alt="Logo" width="110" height="100">
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
        	<div class="page-header text-center" style="background-image: url('<?= base_url() ?>template/olshop/assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Grid 4 Columns<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active"  <?php if ($this->uri->segment(1) == 'kategori') {echo "active";} ?> aria-current="page"</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">
                			<div class="toolbox">
                				<div class="toolbox-left">
                					<div class="toolbox-info">
                						Showing <span>9 of 56</span> Products
                					</div><!-- End .toolbox-info -->
                				</div><!-- End .toolbox-left -->

                				<div class="toolbox-right">
                					<div class="toolbox-sort">
                						<label for="sortby">Sort by:</label>
                						<div class="select-custom">
											<select name="sortby" id="sortby" class="form-control">
												<option value="popularity" selected="selected">Most Popular</option>
												<option value="rating">Most Rated</option>
												<option value="date">Date</option>
											</select>
										</div>
                					</div><!-- End .toolbox-sort -->
                					<div class="toolbox-layout">
                						<a href="category-list.html" class="btn-layout">
                							<svg width="16" height="10">
                								<rect x="0" y="0" width="4" height="4" />
                								<rect x="6" y="0" width="10" height="4" />
                								<rect x="0" y="6" width="4" height="4" />
                								<rect x="6" y="6" width="10" height="4" />
                							</svg>
                						</a>

                						<a href="category-2cols.html" class="btn-layout">
                							<svg width="10" height="10">
                								<rect x="0" y="0" width="4" height="4" />
                								<rect x="6" y="0" width="4" height="4" />
                								<rect x="0" y="6" width="4" height="4" />
                								<rect x="6" y="6" width="4" height="4" />
                							</svg>
                						</a>

                						<a href="category.html" class="btn-layout">
                							<svg width="16" height="10">
                								<rect x="0" y="0" width="4" height="4" />
                								<rect x="6" y="0" width="4" height="4" />
                								<rect x="12" y="0" width="4" height="4" />
                								<rect x="0" y="6" width="4" height="4" />
                								<rect x="6" y="6" width="4" height="4" />
                								<rect x="12" y="6" width="4" height="4" />
                							</svg>
                						</a>

                						<a href="category-4cols.html" class="btn-layout active">
                							<svg width="22" height="10">
                								<rect x="0" y="0" width="4" height="4" />
                								<rect x="6" y="0" width="4" height="4" />
                								<rect x="12" y="0" width="4" height="4" />
                								<rect x="18" y="0" width="4" height="4" />
                								<rect x="0" y="6" width="4" height="4" />
                								<rect x="6" y="6" width="4" height="4" />
                								<rect x="12" y="6" width="4" height="4" />
                								<rect x="18" y="6" width="4" height="4" />
                							</svg>
                						</a>
                					</div><!-- End .toolbox-layout -->
                				</div><!-- End .toolbox-right -->
                			</div><!-- End .toolbox -->

                                    
                            <div class="row">
                                <?php foreach ($produk as $key => $value) { ?>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>">
                                                    <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="Product image" class="product-image"  style="width: 0 255px; height: 210px; overlow: hideen; object-fit: cover; animation: all 0.5s" >
                                                    <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="Product image" class="product-image-hover" style="width: 0 255px; height: 210px; overlow: hideen; object-fit: cover; animation: all 0.5s">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    <a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>" class="btn-product-icon " title="Detail Produk"><i class="fas fa-eye"></i><span>Detail Produk</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->     

                                            <div class="product-body">
                                                <h3 class="product-title"><a href="#"><b><?= $value->nama_produk ?></b></a></h3><!-- End .product-title -->


                                            <div class="product-cat">
                                                <a href="<?= base_url('kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a>
                                            </div><!-- End .product-cat -->
                                            <div class="product-price">
                                                <b><p><span>Rp. <?= number_format($value->harga, 0) ?></span></p></b>
                                            </div><!-- End .product-price -->

                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">(2 Reviews)</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div>
                                <?php } ?>
                            </div><!-- End .row -->

                            <nav aria-label="Page navigation">
							    <ul class="pagination justify-content-center">
							        <li class="page-item disabled">
							            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
							                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
							            </a>
							        </li>
							        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
							        <li class="page-item"><a class="page-link" href="#">2</a></li>
							        <li class="page-item"><a class="page-link" href="#">3</a></li>
							        <li class="page-item-total">of 6</li>
							        <li class="page-item">
							            <a class="page-link page-link-next" href="#" aria-label="Next">
							                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
							            </a>
							        </li>
							    </ul>
							</nav>
                		</div><!-- End .col-lg-9 -->
                		<aside class="col-lg-3 order-lg-first">
                			<div class="sidebar sidebar-shop">
                				<div class="widget widget-clean">
                					<label>Filters:</label>
                					<a href="#" class="sidebar-filter-clear">Clean All</a>
                				</div><!-- End .widget widget-clean -->

                				<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
									        Category
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-1">
										<div class="widget-body">
											<div class="filter-items filter-items-count">
												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-1">
														<label class="custom-control-label" for="cat-1">Dresses</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">3</span>
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-2">
														<label class="custom-control-label" for="cat-2">T-shirts</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">0</span>
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-3">
														<label class="custom-control-label" for="cat-3">Bags</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">4</span>
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-4">
														<label class="custom-control-label" for="cat-4">Jackets</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">2</span>
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-5">
														<label class="custom-control-label" for="cat-5">Shoes</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">2</span>
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-6">
														<label class="custom-control-label" for="cat-6">Jumpers</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">1</span>
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-7">
														<label class="custom-control-label" for="cat-7">Jeans</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">1</span>
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-8">
														<label class="custom-control-label" for="cat-8">Sportwear</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">0</span>
												</div><!-- End .filter-item -->
											</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->

        						<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
									        Size
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-2">
										<div class="widget-body">
											<div class="filter-items">
												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="size-1">
														<label class="custom-control-label" for="size-1">XS</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="size-2">
														<label class="custom-control-label" for="size-2">S</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" checked id="size-3">
														<label class="custom-control-label" for="size-3">M</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" checked id="size-4">
														<label class="custom-control-label" for="size-4">L</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="size-5">
														<label class="custom-control-label" for="size-5">XL</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="size-6">
														<label class="custom-control-label" for="size-6">XXL</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->
											</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->

        						<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
									        Colour
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-3">
										<div class="widget-body">
											<div class="filter-colors">
												<a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
												<a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
												<a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
												<a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
												<a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
												<a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
												<a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
												<a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
											</div><!-- End .filter-colors -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->

        						<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
									        Brand
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-4">
										<div class="widget-body">
											<div class="filter-items">
												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="brand-1">
														<label class="custom-control-label" for="brand-1">Next</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="brand-2">
														<label class="custom-control-label" for="brand-2">River Island</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="brand-3">
														<label class="custom-control-label" for="brand-3">Geox</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="brand-4">
														<label class="custom-control-label" for="brand-4">New Balance</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="brand-5">
														<label class="custom-control-label" for="brand-5">UGG</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="brand-6">
														<label class="custom-control-label" for="brand-6">F&F</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="brand-7">
														<label class="custom-control-label" for="brand-7">Nike</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

											</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->

        						<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
									        Price
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-5">
										<div class="widget-body">
                                            <div class="filter-price">
                                                <div class="filter-price-text">
                                                    Price Range:
                                                    <span id="filter-price-range"></span>
                                                </div><!-- End .filter-price-text -->

                                                <div id="price-slider"></div><!-- End #price-slider -->
                                            </div><!-- End .filter-price -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->
                			</div><!-- End .sidebar sidebar-shop -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->


        <footer class="footer">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<!-- <img src="<?= base_url() ?>template/olshop/assets/images/logo.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p> -->

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
	            					<!-- <li><a href="about.html">About Molla</a></li>
	            					<li><a href="#">How to shop on Molla</a></li>
	            					<li><a href="#">FAQ</a></li>
	            					<li><a href="contact.html">Contact us</a></li> -->
	            					<li><a href="login.html">Log in</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Payment Methods</a></li>
	            					<!-- <li><a href="#">Money-back guarantee!</a></li>
	            					<li><a href="#">Returns</a></li>
	            					<li><a href="#">Shipping</a></li>
	            					<li><a href="#">Terms and conditions</a></li> -->
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
	            					<!-- <li><a href="#">My Wishlist</a></li>
	            					<li><a href="#">Track My Order</a></li>
	            					<li><a href="#">Help</a></li> -->
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2023 ShoeShop. All Rights Reserved.</p><!-- End .footer-copyright -->
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
                                    <li>
                                        <a href="#">Kategori</a>
                                       
                                    </li>
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
    <script src="<?= base_url() ?>template/olshop/assets/js/jquery.plugin.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="<?= base_url() ?>template/olshop/assets/js/main.js"></script>
    <script src="<?= base_url() ?>template/olshop/assets/js/demos/demo-2.js"></script>


	 <!-- Tambahkan CSS untuk mobile menu -->
	 <link rel="stylesheet" href="<?= base_url() ?>template/olshop/assets/css/mobile-menu.css">

		<script src="<?= base_url() ?>template/olshop/assets/js/jquery-3.6.0.min.js"></script>
					<script>
			// Saat dokumen selesai dimuat
			document.addEventListener("DOMContentLoaded", function () {
				// Temukan tombol toggle menu
				var toggleButton = document.querySelector(".mobile-menu-toggler");

				// Temukan kontainer menu mobile
				var mobileMenuContainer = document.querySelector(".mobile-menu-container");

				// Tambahkan event listener untuk mengelola klik tombol toggle menu
				toggleButton.addEventListener("click", function () {
				// Toggling kelas 'active' pada kontainer menu mobile
				mobileMenuContainer.classList.toggle("active");
				});
			});
			</script>


		<!-- Tambahkan script untuk mobile menu -->
		<script src="<?= base_url() ?>template/olshop/assets/js/mobile-menu.js"></script>
