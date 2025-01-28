<?php
include 'header.php';
?>

<!-- start of hero -->
<section class="hero-slider hero-style-1">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="CP-8-Gifts.html">
                    <div class="slide-inner slide-bg-image"
                        data-background="../images/slider/3eaca5d6c3e11413127def3595a30b0c.png">
                        <div class="container-1410">
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Gold Craft Jewellery</p>
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>a Gift For Every Occasion</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="CP-8-Gifts.html" class="theme-btn-s4">Shop now</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </a>
            </div> <!-- end swiper-slide -->

            <div class="swiper-slide">
                <a href="CP-7-Diamond.html">
                    <div class="slide-inner slide-bg-image"
                        data-background="../images/slider/169a5f9236cfb4370729b3771b41c7d9.png">
                        <div class="container-1410">
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Gold Craft Jewellery</p>
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Diamond is Forever</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="CP-7-Diamond.html" class="theme-btn-s4">Shop now</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </a>
            </div> <!-- end swiper-slide -->

            <div class="swiper-slide">
                <a href="CP-4-Gold-21-K.html">
                    <div class="slide-inner slide-bg-image"
                        data-background="../images/slider/bb5b1bf284b68481173036ae48074942.png">
                        <div class="container-1410">
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Gold Craft Jewellery</p>
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>BEST OF GOLD 21K</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="CP-4-Gold-21-K.html" class="theme-btn-s4">Shop now</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </a>
            </div> <!-- end swiper-slide -->

        </div>
        <!-- end swiper-wrapper -->

        <!-- Control -->
        <div class="control-slider swiper-control">
            <div></div>
            <div class="swiper-pagination"></div>
            <div>
                <div class="swiper-button-next">
                    <svg class="slider-nav slider-nav-progress" viewBox="0 0 46 46">
                        <g class="slider-nav-path-progress-color">
                            <path d="M0.5,23a22.5,22.5 0 1,0 45,0a22.5,22.5 0 1,0 -45,0" />
                        </g>
                    </svg>
                    <svg class="slider-nav slider-nav-transparent sw-ar-rt" viewBox="0 0 46 46">
                        <circle class="slider-nav-path" cx="23" cy="23" r="22.5" />
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg class="slider-nav slider-nav-transparent sw-ar-lf" viewBox="0 0 46 46">
                        <circle class="slider-nav-path" cx="23" cy="23" r="22.5" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- /Control -->
    </div>
</section>
<!-- end of hero slider -->





<!-- start trendy-product-section -->
<section class="trendy-product-section section-padding" style=" padding-top: 70px; ">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-s2">
                    <h2>Most Popular</h2>
                </div>
                <a href="CP-4-Gold-21-K.html" class="more-products">Show more</a>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">

                <div class="products-wrapper">
                    <ul class="products product-row-slider">

                        <?php
                        // Load and decode the JSON file
                        $jsonData = file_get_contents('./assets/data/data.json');
                        $productData = json_decode($jsonData, true);

                        $data = [];

                        // Recursive function to collect product arrays
                        function extractProducts(array $data, array &$products)
                        {
                            foreach ($data as $key => $value) {
                                if (is_array($value)) {
                                    extractProducts($value, $products);
                                } elseif (isset($data['SKU'])) {
                                    $products[] = $data;
                                    break;
                                }
                            }
                        }

                        // Extract products from the entire dataset
                        extractProducts($productData, $data);

                        // Define target SKU for demonstration
                        $targetSKU = "00211843";
                        // Render product from data
                        
                        foreach ($data as $product) {
                            if (isset($product['SKU']) && $product['SKU']) {
                                ?>
                                <li class="product">
                                    <form method="post" id="form-item" class="productForm form-item">
                                        <input id="id_produit" name="id_produit" type="hidden" value="<?= $product['SKU']; ?>">
                                        <div class="product-holder">
                                            <!-- <div class="product-badge discount"><?= ucfirst(string: $productType); ?></div> -->
                                            <div class="product-badge discount">sc</div>
                                            <a href="#"><img loading="lazy" src="<?= $product['Img'] ?? 'default.jpg'; ?>"
                                                    alt></a>
                                            <div class="shop-action-wrap">
                                                <ul class="shop-action">
                                                    <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>
                                                    <li><button title="Request for price" type="submit"><i
                                                                class="fi flaticon-shopping-cart"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4><a href="#"><?= $product['DesignStyle']; ?></a></h4>
                                        </div>
                                    </form>

                                    <div class="quick-view-single-product">
                                        <div class="view-single-product-inner clearfix">
                                            <button class="btn quick-view-single-product-close-btn">
                                                <i class="pe-7s-close-circle"></i>
                                            </button>
                                            <div class="img-holder">
                                                <img src="<?= $product['Img'] ?? 'default.jpg'; ?>"
                                                    alt="<?= $product['DesignStyle']; ?>">
                                            </div>
                                            <div class="product-details">
                                                <h4><?= $product['DesignStyle']; ?></h4>
                                                <div class="thb-product-meta-before">
                                                    <div class="product_meta">
                                                        <span class="sku_wrapper">SKU: <span
                                                                class="sku"><?= $product['SKU']; ?></span></span>
                                                        <span class="sku_wrapper">Brand: <?= $product['Brand']; ?></span>
                                                        <span class="posted_in">Metal Color:
                                                            <?= $product['MetalColor']; ?></span>
                                                        <span class="tagged_as">Metal Purity:
                                                            <?= $product['MetalPurity']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end quick-view-single-product -->
                                </li>
                                <?php
                            }
                        }

                        ?>
                    </ul>



                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end trendy-product-section -->

<!-- start jewelry-cta-section -->
<section class="jewelry-cta-section">
    <div class="container-1410">
        <div class="row">
            <div class="col col-lg-5 col-lg-offset-1 col-md-6">
                <div class="img-holder">
                    <img src="../assets/images/jewelry-cta-pic.jpg" alt>
                </div>
            </div>
            <div class="col col-lg-6 col-md-6">
                <div class="cta-inner">
                    <h2>Committed to making the sweetest memories</h2>
                    <p>Our mission is to provide luxury for the modern woman through exceptional jewelry designs
                        and unparalleled customer experience, and to be her favorite jewelry house of choice for
                        the most important occasions in her life</p>
                    <a href="CP-4-Gold-21-K.html" class="theme-btn-s5">Discover the jewelry</a>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end jewelry-cta-section -->
<!-- start category-section-area -->
<section class="category-section-area section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-s3">
                    <h2>Discover the jewels</h2>
                    <p>Diamonds are the gift that lakes and oceans gave us in the form of a precious stone that
                        captured hearts for centuries </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-xs-12">
                <div class="all-cat">
                    <ul class="clearfix">
                        <li><a href="C-13-Ring.html"><img src="../images/ring.png" /> <span>Ring</span></a>
                        </li>
                        <li><a href="C-12-Bracelet.html"><img src="../images/bracelet.png" />
                                <span>Bracelet</span></a></li>
                        <li><a href="C-9-set.html"><img src="../images/jewelry.png" /> <span>Set</span></a></li>
                        <li><a href="C-14-Earring.html"><img src="../images/earrings.png" />
                                <span>Earring</span></a></li>
                        <li><a href="C-15-Pendant.html"><img src="../images/pendant.png" />
                                <span>Pendant</span></a>
                        </li>
                        <li><a href="C-16-chain.html"><img src="../images/set.png" /> <span>Chain</span></a>
                        </li>
                        <li><a href="C-17-choker.html"><img src="../images/accessories.png" />
                                <span>Choker</span></a>
                        </li>
                        <li><a href="C-18-Necklece.html"><img src="../images/pearl-necklace.png" />
                                <span>Necklece</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end category-section-area -->


<!-- start cta-section -->
<section class="cta-section">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="content-area">
                    <span>Gold Craft Jewellery:</span>
                    <h3>Jewelry that has meaning</h3>
                    <p>Each Gold Craft Jewellery collection is designed, designed and developed to harness a
                        meaning and message, each jewel begins with a drawing that captures the innovative
                        inspiration of our designers' creative ideas. Made to make every woman feel special,
                        unique and powerful.</p>
                    <a href="CP-7-Diamond.html" class="theme-btn-s2">Show more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end cta-section -->



<!-- start best-seller-section -->
<section class="best-seller-section section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-s2">
                    <h2>Best Sellers</h2>
                </div>
                <a href="CP-4-Gold-21-K.html" class="more-products">More products</a>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="products-wrapper">



                    <ul class="products product-row-slider">
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="277">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-277-RNG-00222923.html"><img loading=lazy
                                            src="../images/produit/009ae0d3ca90a1033c495f8d9123e01c.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-277-RNG-00222923.html">RNG 00222923</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/009ae0d3ca90a1033c495f8d9123e01c.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00222923</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222923</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="221">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-221-1013032711.html"><img loading=lazy
                                            src="../images/produit/6eaadfa0a4c2d6b75eb34e7a84ef0b2a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-221-1013032711.html">1013032711</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6eaadfa0a4c2d6b75eb34e7a84ef0b2a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>1013032711</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span
                                                        class="sku">1013032711</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="269">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-269-BNG-00167483.html"><img loading=lazy
                                            src="../images/produit/5b0bc499037c2773285f19dd4baf8522.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-269-BNG-00167483.html">BNG 00167483</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/5b0bc499037c2773285f19dd4baf8522.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00167483</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167483</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="25">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-25-00211837.html"><img loading=lazy
                                            src="../images/produit/6ec302479653c1d33ebdc59b0f55aead.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-25-00211837.html">00211837</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6ec302479653c1d33ebdc59b0f55aead.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>00211837</h4>


                                        <p>

                                        </p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00211837</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="217">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-217-CHK-00013186.html"><img loading=lazy
                                            src="../images/produit/5adb8ed748b66064477c6bb9cc05c088.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-217-CHK-00013186.html">NCL 00013186</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/5adb8ed748b66064477c6bb9cc05c088.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00013186</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00013186</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="89">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-89-NCL-00206370.html"><img loading=lazy
                                            src="../images/produit/10c5fd9658566e09d38edd3332ead6b1.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-89-NCL-00206370.html">CHN 00206370</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/10c5fd9658566e09d38edd3332ead6b1.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00206370</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00206370</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : White</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="27">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-27-RNG-00050727.html"><img loading=lazy
                                            src="../images/produit/aad3c7a1ba054f25863cec226710dcb3.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-27-RNG-00050727.html">RNG 00050727</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/aad3c7a1ba054f25863cec226710dcb3.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00050727</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00050727</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="41">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-41-BRC-00258364.html"><img loading=lazy
                                            src="../images/produit/c344879903fd0ace97e3121011a4f42c.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-41-BRC-00258364.html">BNG 00258364</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c344879903fd0ace97e3121011a4f42c.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00258364</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00258364</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="275">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-275-RNG-00154086.html"><img loading=lazy
                                            src="../images/produit/ae33d25dc55d8dbeee27a201c74598e9.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-275-RNG-00154086.html">RNG 00154086</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ae33d25dc55d8dbeee27a201c74598e9.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00154086</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00154086</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="197">
                                <div class="product-holder">
                                    <div class="product-badge discount">Amayel</div>
                                    <a href="P-197-HAM-00179175.html"><img loading=lazy
                                            src="../images/produit/42bd937cd3e1c3483a2f37d5602ab78b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-197-HAM-00179175.html">AMA 00179175</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/42bd937cd3e1c3483a2f37d5602ab78b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>AMA 00179175</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00179175</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="142">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-142-PND-00214265.html"><img loading=lazy
                                            src="../images/produit/972aa5663ce0ff9306048a581b997555.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-142-PND-00214265.html">PND 00214265</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/972aa5663ce0ff9306048a581b997555.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214265</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214265</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="42">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-42-BRC-00205538.html"><img loading=lazy
                                            src="../images/produit/ea3d4aa4015e6c4ef23401c7c8eb45ec.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-42-BRC-00205538.html">BNG 00205538</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ea3d4aa4015e6c4ef23401c7c8eb45ec.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00205538</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205538</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="101">
                                <div class="product-holder">
                                    <div class="product-badge discount">Belt</div>
                                    <a href="P-101-BLT-00120480.html"><img loading=lazy
                                            src="../images/produit/768670a582b79038b8aff640eae9c079.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-101-BLT-00120480.html">BLT 00120480</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/768670a582b79038b8aff640eae9c079.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BLT 00120480</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00120480</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="149">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-149-EAR-00230610.html"><img loading=lazy
                                            src="../images/produit/bdb14cf622a41f7b260f1d9ef762af63.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-149-EAR-00230610.html">EAR 00230610</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/bdb14cf622a41f7b260f1d9ef762af63.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00230610</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00230610</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="272">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-272-SET-00031309.html"><img loading=lazy
                                            src="../images/produit/ddb1da1a6723c4de0e39c5c3b26a141a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-272-SET-00031309.html">SET 00031309</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ddb1da1a6723c4de0e39c5c3b26a141a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00031309</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00031309</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="96">
                                <div class="product-holder">
                                    <div class="product-badge discount">Mortaesha</div>
                                    <a href="P-96-MRTSH-00152985.html"><img loading=lazy
                                            src="../images/produit/1a9d514209c86c5c845e259cac74314f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-96-MRTSH-00152985.html">MRTSH 00152985</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/1a9d514209c86c5c845e259cac74314f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MRTSH 00152985</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00152985</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="118">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-118-SET-00257700.html"><img loading=lazy
                                            src="../images/produit/15dadbb6ddea5cbdd86c776837aacc7e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-118-SET-00257700.html">SET 00257700</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/15dadbb6ddea5cbdd86c776837aacc7e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00257700</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00257700</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="154">
                                <div class="product-holder">
                                    <div class="product-badge discount">Maznat</div>
                                    <a href="P-154-MZN-00232898.html"><img loading=lazy
                                            src="../images/produit/308ac4e983f0d840f81c4a6bb5f2f7de.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-154-MZN-00232898.html">MZN 00232898</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/308ac4e983f0d840f81c4a6bb5f2f7de.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MZN 00232898</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00232898</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="109">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-109-BRC-00094406.html"><img loading=lazy
                                            src="../images/produit/2bb4149a880f2b523f9b8a80f8701a9b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-109-BRC-00094406.html">BRC 00094406</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/2bb4149a880f2b523f9b8a80f8701a9b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00094406</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00094406</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="243">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-243-CHN-00268116.html"><img loading=lazy
                                            src="../images/produit/703996cfece1c01c25135eb34169c4cc.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-243-CHN-00268116.html">CHN 00268116</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/703996cfece1c01c25135eb34169c4cc.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00268116</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00268116</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="204">
                                <div class="product-holder">
                                    <div class="product-badge discount">Hamat</div>
                                    <a href="P-204-HAM-00222777.html"><img loading=lazy
                                            src="../images/produit/3d80b22279f34a6d634e3fc104d0f904.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-204-HAM-00222777.html">HAM 00222777</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3d80b22279f34a6d634e3fc104d0f904.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>HAM 00222777</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222777</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="133">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-133-CHN-00248807.html"><img loading=lazy
                                            src="../images/produit/79167c520c12687faee793901852577c.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-133-CHN-00248807.html">CHN 00248807</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/79167c520c12687faee793901852577c.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00248807</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00248807</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="83">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-83-PND-00214134.html"><img loading=lazy
                                            src="../images/produit/071eba4b5a58c221ee50c41b1b32bf74.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-83-PND-00214134.html">PND 00214134</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/071eba4b5a58c221ee50c41b1b32bf74.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214134</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214134</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : White</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="155">
                                <div class="product-holder">
                                    <div class="product-badge discount">Maznat</div>
                                    <a href="P-155-MZN-00225288.html"><img loading=lazy
                                            src="../images/produit/bf6b2db25c67f60489693e383e75e2fb.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-155-MZN-00225288.html">MZN 00225288</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/bf6b2db25c67f60489693e383e75e2fb.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MZN 00225288</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00225288</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="242">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-242-NCL-00207412.html"><img loading=lazy
                                            src="../images/produit/de81bc28c565f74bcbf0935787e7c088.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-242-NCL-00207412.html">NCL 00207412</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/de81bc28c565f74bcbf0935787e7c088.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00207412</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00207412</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="159">
                                <div class="product-holder">
                                    <div class="product-badge discount">Maznat</div>
                                    <a href="P-159-MZN-00271046.html"><img loading=lazy
                                            src="../images/produit/85e6093113e8801a56c42d1eb5ad6386.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-159-MZN-00271046.html">MZN 00271046</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/85e6093113e8801a56c42d1eb5ad6386.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MZN 00271046</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00271046</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="244">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-244-CHK-00223062.html"><img loading=lazy
                                            src="../images/produit/232eaec05357da6ef0fe62ea44e3a0f9.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-244-CHK-00223062.html">CHK 00223062</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/232eaec05357da6ef0fe62ea44e3a0f9.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00223062</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00223062</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="201">
                                <div class="product-holder">
                                    <div class="product-badge discount">Hairclip</div>
                                    <a href="P-201-HCL-00214385.html"><img loading=lazy
                                            src="../images/produit/1a4f165323edaa6126b9748e007da49e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-201-HCL-00214385.html">HCL 00214385</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/1a4f165323edaa6126b9748e007da49e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>HCL 00214385</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214385</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="172">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-172-SET-00267832.html"><img loading=lazy
                                            src="../images/produit/0afd99680642c40d57213dd637a538e6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-172-SET-00267832.html">SET 00267832</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0afd99680642c40d57213dd637a538e6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00267832</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00267832</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="54">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-54-BNG-00147713.html"><img loading=lazy
                                            src="../images/produit/52bba6129d4905b8420aaedfe695c24a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-54-BNG-00147713.html">BNG 00147713</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/52bba6129d4905b8420aaedfe695c24a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00147713</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00147713</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="193">
                                <div class="product-holder">
                                    <div class="product-badge discount">Crown</div>
                                    <a href="P-193-CRW-01.html"><img loading=lazy
                                            src="../images/produit/3d45081890069cec704f679a49628884.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-193-CRW-01.html">CRW 01</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3d45081890069cec704f679a49628884.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CRW 01</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">CRW
                                                        01</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="252">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-252-SET-00222437.html"><img loading=lazy
                                            src="../images/produit/2bcddfe6ba47228f30b14c6791ad163e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-252-SET-00222437.html">SET 00222437</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/2bcddfe6ba47228f30b14c6791ad163e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00222437</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222437</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="126">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-126-BNG-00226354.html"><img loading=lazy
                                            src="../images/produit/3c6cdcff3befe309217eedb9a36fd732.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-126-BNG-00226354.html">BNG 00226354</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3c6cdcff3befe309217eedb9a36fd732.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00226354</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00226354</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="38">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-38-BRC-00205522.html"><img loading=lazy
                                            src="../images/produit/722098746b1fd4d3b5f8463539f110fc.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-38-BRC-00205522.html">BNG 00205522</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/722098746b1fd4d3b5f8463539f110fc.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00205522</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205522</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="283">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-283-PND-00178216.html"><img loading=lazy
                                            src="../images/produit/e658ee77f8e2ffadf1fb7a77e454e3ea.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-283-PND-00178216.html">PND 00178216</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e658ee77f8e2ffadf1fb7a77e454e3ea.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00178216</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00178216</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="31">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-31-RNG-00213648.html"><img loading=lazy
                                            src="../images/produit/cbdd802a5f6003e53f825167a07d20be.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-31-RNG-00213648.html">RNG 00213648</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/cbdd802a5f6003e53f825167a07d20be.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00213648</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00213648</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="63">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-63-BNG-00217481.html"><img loading=lazy
                                            src="../images/produit/72265523b28b890e747d82db5e4a7bdf.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-63-BNG-00217481.html">BNG 00217481</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/72265523b28b890e747d82db5e4a7bdf.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217481</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217481</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="215">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-215-RNG-00167015.html"><img loading=lazy
                                            src="../images/produit/ddb609e3e781ab8aef6477fc9c5a8710.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-215-RNG-00167015.html">RNG 00167015</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ddb609e3e781ab8aef6477fc9c5a8710.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00167015</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167015</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="129">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-129-PND-00032504.html"><img loading=lazy
                                            src="../images/produit/7cb1fd1f5de9f7ddb6266ce664141c6c.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-129-PND-00032504.html">CHN 00032504</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/7cb1fd1f5de9f7ddb6266ce664141c6c.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00032504</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00032504</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="169">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-169-SET-00222447.html"><img loading=lazy
                                            src="../images/produit/b7f2ca201a39fd1138931d25bd51f856.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-169-SET-00222447.html">SET 00222447</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b7f2ca201a39fd1138931d25bd51f856.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00222447</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222447</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="222">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-222-00170341.html"><img loading=lazy
                                            src="../images/produit/fffdae3a4a07eed5d8e286f180e2a398.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-222-00170341.html">00170341</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/fffdae3a4a07eed5d8e286f180e2a398.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>00170341</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00170341</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="43">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-43-BRC-00205520.html"><img loading=lazy
                                            src="../images/produit/9bafe5b7ebe34c4e547b73cff085d97a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-43-BRC-00205520.html">BNG 00205520</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/9bafe5b7ebe34c4e547b73cff085d97a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00205520</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205520</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="284">
                                <div class="product-holder">
                                    <div class="product-badge discount">Pearl</div>
                                    <a href="P-284-PEARL-00150250.html"><img loading=lazy
                                            src="../images/produit/28388066e7f149c16296656abf60b6ed.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-284-PEARL-00150250.html">PEARL 00150250</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/28388066e7f149c16296656abf60b6ed.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PEARL 00150250</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00150250</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="47">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-47-BRC-00205434.html"><img loading=lazy
                                            src="../images/produit/c33d85e2b4b8275c230aeafec5fa28a4.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-47-BRC-00205434.html">BNG 00205434</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c33d85e2b4b8275c230aeafec5fa28a4.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00205434</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205434</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="212">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-212-BRC-00125494.html"><img loading=lazy
                                            src="../images/produit/2863018039e1e7a74a6ec32bc15162e6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-212-BRC-00125494.html">BRC 00125494</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/2863018039e1e7a74a6ec32bc15162e6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00125494</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00125494</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="250">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-250-SET-00204969.html"><img loading=lazy
                                            src="../images/produit/4573bf8267d9bc6b73cf82faf1dc9b99.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-250-SET-00204969.html">SET 00204969</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/4573bf8267d9bc6b73cf82faf1dc9b99.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00204969</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00204969</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="80">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-80-PND-00214127.html"><img loading=lazy
                                            src="../images/produit/1df4bc1bab240f11f3d94c0ba14e107f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-80-PND-00214127.html">PND 00214127</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/1df4bc1bab240f11f3d94c0ba14e107f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214127</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214127</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="128">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-128-PND-00160932.html"><img loading=lazy
                                            src="../images/produit/d5c0d14d387c943aa581fdb1d91416bd.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-128-PND-00160932.html">PND 00160932</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d5c0d14d387c943aa581fdb1d91416bd.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00160932</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00160932</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="231">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-231-RNG-00178235.html"><img loading=lazy
                                            src="../images/produit/03a2e9ac830c732cc959fd4025498316.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-231-RNG-00178235.html">RNG 00178235</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/03a2e9ac830c732cc959fd4025498316.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00178235</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00178235</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="205">
                                <div class="product-holder">
                                    <div class="product-badge discount">Hamat</div>
                                    <a href="P-205-HAM-00222780.html"><img loading=lazy
                                            src="../images/produit/2b4e8e2765b5aed8e3502f164d23c955.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-205-HAM-00222780.html">HAM 00222780</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/2b4e8e2765b5aed8e3502f164d23c955.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>HAM 00222780</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222780</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="150">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-150-EAR-00244726.html"><img loading=lazy
                                            src="../images/produit/4385c5bf88789e942b86587ae9471166.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-150-EAR-00244726.html">EAR 00244726</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/4385c5bf88789e942b86587ae9471166.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00244726</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00244726</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="170">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-170-SET-00258574.html"><img loading=lazy
                                            src="../images/produit/7a6762dde22dd18f56b5b1dde1c5b28f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-170-SET-00258574.html">SET 00258574</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/7a6762dde22dd18f56b5b1dde1c5b28f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00258574</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00258574</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="67">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-67-BNG-00217512.html"><img loading=lazy
                                            src="../images/produit/c81db8795ec8aec44840546c057c2cfc.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-67-BNG-00217512.html">BNG 00217512</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c81db8795ec8aec44840546c057c2cfc.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217512</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217512</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="130">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-130-PND-00157105.html"><img loading=lazy
                                            src="../images/produit/643df81447a5298a49589b9f9b640caf.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-130-PND-00157105.html">CHN 00157105</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/643df81447a5298a49589b9f9b640caf.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00157105</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00157105</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="103">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-103-BRC-00206324.html"><img loading=lazy
                                            src="../images/produit/f8daaaef2c77e57b01eaf571bc05261a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-103-BRC-00206324.html">BRC 00206324</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f8daaaef2c77e57b01eaf571bc05261a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00206324</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00206324</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="259">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-259-SET-00222207.html"><img loading=lazy
                                            src="../images/produit/dfd70087d7ccc8154c785077493348ca.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-259-SET-00222207.html">SET 00222207</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/dfd70087d7ccc8154c785077493348ca.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00222207</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222207</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="108">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-108-BRC-00208022.html"><img loading=lazy
                                            src="../images/produit/7cd4e95d0ee742e668a8da1fcdc4ed63.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-108-BRC-00208022.html">BRC 00208022</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/7cd4e95d0ee742e668a8da1fcdc4ed63.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00208022</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00208022</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="66">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-66-BNG-00217292.html"><img loading=lazy
                                            src="../images/produit/411728c6d2468097744ccc35a712f764.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-66-BNG-00217292.html">BNG 00217292</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/411728c6d2468097744ccc35a712f764.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217292</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217292</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="202">
                                <div class="product-holder">
                                    <div class="product-badge discount">Hairclip</div>
                                    <a href="P-202-HCL-00230041.html"><img loading=lazy
                                            src="../images/produit/f44f513cc666c625e2a8f04550353b53.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-202-HCL-00230041.html">HCL 00230041</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f44f513cc666c625e2a8f04550353b53.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>HCL 00230041</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00230041</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="156">
                                <div class="product-holder">
                                    <div class="product-badge discount">Maznat</div>
                                    <a href="P-156-MZN-00229442.html"><img loading=lazy
                                            src="../images/produit/81d448d3d31cf221a2f69b2fc233aa50.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-156-MZN-00229442.html">MZN 00229442</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/81d448d3d31cf221a2f69b2fc233aa50.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MZN 00229442</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00229442</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="276">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-276-RNG-00169445.html"><img loading=lazy
                                            src="../images/produit/d8e75292f966e723805cd9b5a4183df8.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-276-RNG-00169445.html">RNG 00169445</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d8e75292f966e723805cd9b5a4183df8.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00169445</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00169445</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="113">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-113-BRC-00207361.html"><img loading=lazy
                                            src="../images/produit/07d12e4add391bbad086a40570ad3999.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-113-BRC-00207361.html">BRC 00207361</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/07d12e4add391bbad086a40570ad3999.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00207361</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00207361</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="82">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-82-PND-00214131.html"><img loading=lazy
                                            src="../images/produit/004f15316d472096db2901074898955a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-82-PND-00214131.html">PND 00214131</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/004f15316d472096db2901074898955a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214131</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214131</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : White</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="246">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-246-SET-00186213.html"><img loading=lazy
                                            src="../images/produit/088b862f4158667acd5c0b496a389397.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-246-SET-00186213.html">SET 00186213</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/088b862f4158667acd5c0b496a389397.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00186213</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00186213</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="60">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-60-BNG-00173785.html"><img loading=lazy
                                            src="../images/produit/539666ac7ffad5213688c7055bb34a40.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-60-BNG-00173785.html">BNG 00173785</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/539666ac7ffad5213688c7055bb34a40.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00173785</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00173785</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="88">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-88-NCL-00207405.html"><img loading=lazy
                                            src="../images/produit/fed987bc8d1bf21ab85d8db72e0f9000.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-88-NCL-00207405.html">NCL 00207405</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/fed987bc8d1bf21ab85d8db72e0f9000.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00207405</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00207405</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="163">
                                <div class="product-holder">
                                    <div class="product-badge discount">Tablat</div>
                                    <a href="P-163-TAB-00018870.html"><img loading=lazy
                                            src="../images/produit/c14bdefc81375ac3ebba325d25f0b0fa.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-163-TAB-00018870.html">TAB 00018870</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c14bdefc81375ac3ebba325d25f0b0fa.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>TAB 00018870</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00018870</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="77">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-77-PND-00214018.html"><img loading=lazy
                                            src="../images/produit/4c61412779732e2488f31d4494d29c9d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-77-PND-00214018.html">PND 00214018</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/4c61412779732e2488f31d4494d29c9d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214018</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span
                                                        class="sku">0021214018</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="33">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-33-RNG-00244903.html"><img loading=lazy
                                            src="../images/produit/90047b90eb4924927bcf17406755526a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-33-RNG-00244903.html">RNG 00244903</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/90047b90eb4924927bcf17406755526a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00244903</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00244903</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="247">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-247-SET-00173712.html"><img loading=lazy
                                            src="../images/produit/2f5d15de21f751a600520ab14d1df696.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-247-SET-00173712.html">SET 00173712</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/2f5d15de21f751a600520ab14d1df696.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00173712</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00173712</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="178">
                                <div class="product-holder">
                                    <div class="product-badge discount">Mortahesha</div>
                                    <a href="P-178-MTH-00150757.html"><img loading=lazy
                                            src="../images/produit/90d7a47db84b0ee8b7e96831f4ea63d9.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-178-MTH-00150757.html">MTH 00150757</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/90d7a47db84b0ee8b7e96831f4ea63d9.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MTH 00150757</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00150757</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="168">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-168-SET-00222335.html"><img loading=lazy
                                            src="../images/produit/da8ae72d28d7d821e1a217cef0255c3c.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-168-SET-00222335.html">SET 00222335</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/da8ae72d28d7d821e1a217cef0255c3c.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00222335</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222335</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="264">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-264-NCL-00013428.html"><img loading=lazy
                                            src="../images/produit/09b4084da7063bf25a625e03c7b8591d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-264-NCL-00013428.html">CHK 00013428</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/09b4084da7063bf25a625e03c7b8591d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00013428</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00013428</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="135">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-135-CHN-00230928.html"><img loading=lazy
                                            src="../images/produit/a9d4fe43deb0ed0367b5a8cca5a5c0eb.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-135-CHN-00230928.html">CHN 00230928</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a9d4fe43deb0ed0367b5a8cca5a5c0eb.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00230928</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00230928</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="280">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-280-SET-690022786.html"><img loading=lazy
                                            src="../images/produit/b1399dd14d2fcd4dd2e35cc1dc50b27b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-280-SET-690022786.html">SET 690022786</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b1399dd14d2fcd4dd2e35cc1dc50b27b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 690022786</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span
                                                        class="sku">690022786</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="65">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-65-BNG-00217294.html"><img loading=lazy
                                            src="../images/produit/270729375dad4c622b4d44b395f4143d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-65-BNG-00217294.html">BNG 00217294</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/270729375dad4c622b4d44b395f4143d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217294</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217294</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="189">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-189-CHK-00269791.html"><img loading=lazy
                                            src="../images/produit/6d9b49d6056f920a94e32f15870ebe88.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-189-CHK-00269791.html">CHK 00269791</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6d9b49d6056f920a94e32f15870ebe88.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00269791</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00269791</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="58">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-58-BNG-00217492.html"><img loading=lazy
                                            src="../images/produit/9981fd65bd4aa64c2e92f9b431ae359f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-58-BNG-00217492.html">BNG 00217492</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/9981fd65bd4aa64c2e92f9b431ae359f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217492</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217492</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="119">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-119-SET-00257720.html"><img loading=lazy
                                            src="../images/produit/601b9b2472d065cd236ba0abedead052.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-119-SET-00257720.html">SET 00257720</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/601b9b2472d065cd236ba0abedead052.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00257720</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00257720</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="134">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-134-CHN-00120190.html"><img loading=lazy
                                            src="../images/produit/5bac8f70d7f83d988c7f964db0d367e9.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-134-CHN-00120190.html">CHN 00120190</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/5bac8f70d7f83d988c7f964db0d367e9.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00120190</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00120190</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="249">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-249-SET-00222325.html"><img loading=lazy
                                            src="../images/produit/395caecdf5bd1fef1d706513f195277a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-249-SET-00222325.html">SET 00222325</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/395caecdf5bd1fef1d706513f195277a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00222325</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222325</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="74">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-74-BNG-00217308.html"><img loading=lazy
                                            src="../images/produit/6cb8c94568f8056d8b774fc28debfa0d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-74-BNG-00217308.html">BNG 00217308</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6cb8c94568f8056d8b774fc28debfa0d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217308</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217308</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="245">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-245-CHK-00207365.html"><img loading=lazy
                                            src="../images/produit/855b64a0494ea7a996f2918ed3293eec.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-245-CHK-00207365.html">CHK 00207365</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/855b64a0494ea7a996f2918ed3293eec.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00207365</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00207365</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="185">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-185-NCL-00229509.html"><img loading=lazy
                                            src="../images/produit/29444e0ab20ea4ef4283f344fd161b58.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-185-NCL-00229509.html">NCL 00229509</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/29444e0ab20ea4ef4283f344fd161b58.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00229509</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00229509</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="235">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-235-NCL-00229086.html"><img loading=lazy
                                            src="../images/produit/254295a3470d0bfc61673047b5d977a6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-235-NCL-00229086.html">NCL 00229086</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/254295a3470d0bfc61673047b5d977a6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00229086</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00229086</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="278">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-278-RNG-00222668.html"><img loading=lazy
                                            src="../images/produit/e877a3700868436cc496db0df0f39f4e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-278-RNG-00222668.html">RNG 00222668</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e877a3700868436cc496db0df0f39f4e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00222668</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222668</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="29">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-29-RNG-00212827.html"><img loading=lazy
                                            src="../images/produit/c7bf1453d48d90a080765b9170f9c488.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-29-RNG-00212827.html">RNG 00212827</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c7bf1453d48d90a080765b9170f9c488.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00212827</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00212827</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="289">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-289-NCL-00118687.html"><img loading=lazy
                                            src="../images/produit/ea31f0e9378b3d36e77f98d6eb64b1b6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-289-NCL-00118687.html">NCL 00118687</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ea31f0e9378b3d36e77f98d6eb64b1b6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00118687</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00118687</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="228">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-228-RNG-WASRN1006.html"><img loading=lazy
                                            src="../images/produit/30d2e0ef00f869c98ccdf61025867ab1.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-228-RNG-WASRN1006.html">RNG WASRN1006</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/30d2e0ef00f869c98ccdf61025867ab1.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG WASRN1006</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span
                                                        class="sku">WASRN1006</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="120">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-120-SET-00257725.html"><img loading=lazy
                                            src="../images/produit/a0fcc2d4ff812b3514dad1f520846cb1.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-120-SET-00257725.html">SET 00257725</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a0fcc2d4ff812b3514dad1f520846cb1.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00257725</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">SET
                                                        00257725</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="183">
                                <div class="product-holder">
                                    <div class="product-badge discount">Tablat</div>
                                    <a href="P-183-TAB-00221786.html"><img loading=lazy
                                            src="../images/produit/87cd217c6cda903cf1aabbb9268772de.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-183-TAB-00221786.html">TAB 00221786</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/87cd217c6cda903cf1aabbb9268772de.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>TAB 00221786</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00221786</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="114">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-114-.html"><img loading=lazy
                                            src="../images/produit/a6e9cc29648c7ccff2a68d0751adc767.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-114-.html">SET 00205562</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a6e9cc29648c7ccff2a68d0751adc767.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00205562</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205562</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="81">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-81-PND-00214128.html"><img loading=lazy
                                            src="../images/produit/4a83a215ae39032faa0eb5d3be436e6e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-81-PND-00214128.html">PND 00214128</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/4a83a215ae39032faa0eb5d3be436e6e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214128</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214128</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : White</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="261">
                                <div class="product-holder">
                                    <div class="product-badge discount">Pearl</div>
                                    <a href="P-261-PRL-SET-2.html"><img loading=lazy
                                            src="../images/produit/217055ca50d743cdce3a7e605da4735b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-261-PRL-SET-2.html">PRL SET 2</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/217055ca50d743cdce3a7e605da4735b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PRL SET 2</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">PRL SET
                                                        2</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="211">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-211-BRC-00178172.html"><img loading=lazy
                                            src="../images/produit/0fd021a3e2c44d43309238b99ce32dbb.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-211-BRC-00178172.html">BRC 00178172</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0fd021a3e2c44d43309238b99ce32dbb.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00178172</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00178172</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="69">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-69-BNG-00217486.html"><img loading=lazy
                                            src="../images/produit/7b2719f1c85d26d255a60231413590a5.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-69-BNG-00217486.html">BNG 00217486</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/7b2719f1c85d26d255a60231413590a5.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217486</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217486</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="90">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-90-NCL-00148634.html"><img loading=lazy
                                            src="../images/produit/3342a2d87b5f1a95e79782d37d8ebd17.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-90-NCL-00148634.html">NCL 00148634</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3342a2d87b5f1a95e79782d37d8ebd17.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00148634</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00148634</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="152">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-152-EAR-00273409.html"><img loading=lazy
                                            src="../images/produit/50158293a0f005ad63e484e8e4330048.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-152-EAR-00273409.html">EAR 00273409</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/50158293a0f005ad63e484e8e4330048.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00273409</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00273409</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="148">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-148-EAR-00229258.html"><img loading=lazy
                                            src="../images/produit/bea04c53b85e839226fe578e9df713d6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-148-EAR-00229258.html">EAR 00229258</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/bea04c53b85e839226fe578e9df713d6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00229258</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00229258</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="227">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-227-RNG-00221512.html"><img loading=lazy
                                            src="../images/produit/dea5e18e7785f11a7f5f91708044ef83.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-227-RNG-00221512.html">RNG 00221512</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/dea5e18e7785f11a7f5f91708044ef83.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00221512</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00221512</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="132">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-132-PND-00157095.html"><img loading=lazy
                                            src="../images/produit/f1bbc0a04523cc1234e448ea290c848b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-132-PND-00157095.html">CHN 00157095</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f1bbc0a04523cc1234e448ea290c848b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00157095</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00157095</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="68">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-68-BNG-00152657.html"><img loading=lazy
                                            src="../images/produit/50dd25b9599dd63d9d02f39b6d776111.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-68-BNG-00152657.html">BNG 00152657</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/50dd25b9599dd63d9d02f39b6d776111.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00152657</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00152657</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="117">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-117-SET-00021776.html"><img loading=lazy
                                            src="../images/produit/a0a06e753856f51341e06da020a106c1.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-117-SET-00021776.html">SET 00021776</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a0a06e753856f51341e06da020a106c1.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00021776</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00021776</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="285">
                                <div class="product-holder">
                                    <div class="product-badge discount">Pearl</div>
                                    <a href="P-285-PEARL-00223067.html"><img loading=lazy
                                            src="../images/produit/4d3507214ac4f3418ecb82ede2177630.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-285-PEARL-00223067.html">PEARL 00223067</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/4d3507214ac4f3418ecb82ede2177630.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PEARL 00223067</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00223067</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="223">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-223-EAR-00170431.html"><img loading=lazy
                                            src="../images/produit/0cec64b4718dd7a99c29b7c7bfd5759b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-223-EAR-00170431.html">EAR 00170431</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0cec64b4718dd7a99c29b7c7bfd5759b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00170431</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00170431</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="153">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-153-EAR-00222086.html"><img loading=lazy
                                            src="../images/produit/965c6020c554597972e928211f5dff0a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-153-EAR-00222086.html">EAR 00222086</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/965c6020c554597972e928211f5dff0a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00222086</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222086</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="104">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-104-BRC-00257065.html"><img loading=lazy
                                            src="../images/produit/3f7782f2829bae32a5dd39edcc481abe.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-104-BRC-00257065.html">BRC 00257065</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3f7782f2829bae32a5dd39edcc481abe.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00257065</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00257065</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="100">
                                <div class="product-holder">
                                    <div class="product-badge discount">Belt</div>
                                    <a href="P-100-BLT-00029839.html"><img loading=lazy
                                            src="../images/produit/d7ac770f9c06f052c9834f7adcd15cb9.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-100-BLT-00029839.html">BLT 00029839</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d7ac770f9c06f052c9834f7adcd15cb9.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BLT 00029839</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00029839</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="78">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-78-PND-00214023.html"><img loading=lazy
                                            src="../images/produit/14e4c57980a072244dac217775622caf.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-78-PND-00214023.html">PND 00214023</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/14e4c57980a072244dac217775622caf.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214023</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214023</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="281">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-281-PND-00221848.html"><img loading=lazy
                                            src="../images/produit/427e95548ea7c9039ac59eee57a9727f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-281-PND-00221848.html">PND 00221848</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/427e95548ea7c9039ac59eee57a9727f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00221848</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00221848</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="181">
                                <div class="product-holder">
                                    <div class="product-badge discount">Tablat</div>
                                    <a href="P-181-TAB-00221782.html"><img loading=lazy
                                            src="../images/produit/b146fde9e7c6c1ff85b7cc5e910edda0.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-181-TAB-00221782.html">TAB 00221782</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b146fde9e7c6c1ff85b7cc5e910edda0.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>TAB 00221782</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00221782</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="86">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-86-NCL-00207374.html"><img loading=lazy
                                            src="../images/produit/9f2829c87af0936ef0b4e6ad33440d9a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-86-NCL-00207374.html">NCL 00207374</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/9f2829c87af0936ef0b4e6ad33440d9a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00207374</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00207374</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="208">
                                <div class="product-holder">
                                    <div class="product-badge discount">Pendant</div>
                                    <a href="P-208-PND-00214380.html"><img loading=lazy
                                            src="../images/produit/0a3c8519f2feb258201fbf007ff7b01b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-208-PND-00214380.html">PND 00214380</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0a3c8519f2feb258201fbf007ff7b01b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214380</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">PND
                                                        00214380</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="59">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-59-BNG-00217493.html"><img loading=lazy
                                            src="../images/produit/aabaa9649f7a03df0a1cf679cd9dd2b0.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-59-BNG-00217493.html">BNG 00217493</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/aabaa9649f7a03df0a1cf679cd9dd2b0.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217493</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">BNG
                                                        00217493</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="258">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-258-SET-00232941.html"><img loading=lazy
                                            src="../images/produit/243ea57aef2a6e59781c3bcf4d2302de.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-258-SET-00232941.html">SET 00232941</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/243ea57aef2a6e59781c3bcf4d2302de.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00232941</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00232941</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="196">
                                <div class="product-holder">
                                    <div class="product-badge discount">Amayel</div>
                                    <a href="P-196-HAM-00155109.html"><img loading=lazy
                                            src="../images/produit/8762974ab2f4e592982601b40e6c04c4.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-196-HAM-00155109.html">AMA 00155109</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/8762974ab2f4e592982601b40e6c04c4.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>AMA 00155109</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00155109</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="176">
                                <div class="product-holder">
                                    <div class="product-badge discount">Karasi Necklace</div>
                                    <a href="P-176-KRS-00179163.html"><img loading=lazy
                                            src="../images/produit/a98116eef78b38e6138328a5e61c976f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-176-KRS-00179163.html">KRS 00179163</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a98116eef78b38e6138328a5e61c976f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>KRS 00179163</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00179163</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="216">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-216-CHK-000128977.html"><img loading=lazy
                                            src="../images/produit/29669a2319390a326432a0033d51d0ce.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-216-CHK-000128977.html">CHK 000128977</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/29669a2319390a326432a0033d51d0ce.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 000128977</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span
                                                        class="sku">000128977</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="291">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-291-NCL-00269780.html"><img loading=lazy
                                            src="../images/produit/92827fe08478f04f5e0c62679770c696.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-291-NCL-00269780.html">NCL 00269780</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/92827fe08478f04f5e0c62679770c696.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00269780</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00269780</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="136">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-136-CHN-00231318.html"><img loading=lazy
                                            src="../images/produit/f33123386ed9677979c0d10403a6ca7a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-136-CHN-00231318.html">CHN 00231318</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f33123386ed9677979c0d10403a6ca7a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00231318</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00231318</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="94">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-94-NCL-00206425.html"><img loading=lazy
                                            src="../images/produit/07913704203ab69846e046f3debc1763.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-94-NCL-00206425.html">CHN 00206425</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/07913704203ab69846e046f3debc1763.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00206425</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00206425</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="266">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-266-NCL-00083829.html"><img loading=lazy
                                            src="../images/produit/17557fdd58a8922db1a8118cad9bcf2d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-266-NCL-00083829.html">NCL 00083829</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/17557fdd58a8922db1a8118cad9bcf2d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00083829</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00083829</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="79">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-79-PND-00214089.html"><img loading=lazy
                                            src="../images/produit/ea035e3b43f11a3c6ddbc5c479561751.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-79-PND-00214089.html">PND 00214089</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ea035e3b43f11a3c6ddbc5c479561751.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214089</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214089</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="282">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-282-PND-00221628.html"><img loading=lazy
                                            src="../images/produit/1a8bc40727875a2fb02566a3fc3e87a1.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-282-PND-00221628.html">PND 00221628</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/1a8bc40727875a2fb02566a3fc3e87a1.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00221628</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00221628</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="214">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-214-RNG-00166994.html"><img loading=lazy
                                            src="../images/produit/eefd48961f63a759be9cb419e6231054.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-214-RNG-00166994.html">RNG 00166994</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/eefd48961f63a759be9cb419e6231054.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00166994</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00166994</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="158">
                                <div class="product-holder">
                                    <div class="product-badge discount">Maznat</div>
                                    <a href="P-158-MZN-00274167.html"><img loading=lazy
                                            src="../images/produit/cb306226f27cd8f25b3d7fe1bf7f6a16.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-158-MZN-00274167.html">MZN 00274167</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/cb306226f27cd8f25b3d7fe1bf7f6a16.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MZN 00274167</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00274167</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="179">
                                <div class="product-holder">
                                    <div class="product-badge discount">Mortahesha</div>
                                    <a href="P-179-MTH-00256209.html"><img loading=lazy
                                            src="../images/produit/74eeb7e7bb14bea8be2899fe785f520c.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-179-MTH-00256209.html">MTH 00256209</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/74eeb7e7bb14bea8be2899fe785f520c.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MTH 00256209</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00256209</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="287">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-287-SET-00132468.html"><img loading=lazy
                                            src="../images/produit/35cdb06bf0d81869ad98aa3ef3ecac4e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-287-SET-00132468.html">SET 00132468</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/35cdb06bf0d81869ad98aa3ef3ecac4e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00132468</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00132468</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="161">
                                <div class="product-holder">
                                    <div class="product-badge discount">Maznat</div>
                                    <a href="P-161-MZN-00020938.html"><img loading=lazy
                                            src="../images/produit/4fa0b48655ee488882ec5356d698d517.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-161-MZN-00020938.html">MZN 00020938</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/4fa0b48655ee488882ec5356d698d517.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MZN 00020938</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00020938</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="171">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-171-SET-00258578.html"><img loading=lazy
                                            src="../images/produit/871c1f9ae540c2e1f189fa137ad7d95c.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-171-SET-00258578.html">SET 00258578</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/871c1f9ae540c2e1f189fa137ad7d95c.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00258578</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00258578</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="141">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-141-PND-00270711.html"><img loading=lazy
                                            src="../images/produit/096b17af22b8316d9b7bdfbf2f449f45.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-141-PND-00270711.html">PND 00270711</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/096b17af22b8316d9b7bdfbf2f449f45.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00270711</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00270711</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="286">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-286-SET-00269718.html"><img loading=lazy
                                            src="../images/produit/1e0f1df1b6d530a902c272cad8c68b94.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-286-SET-00269718.html">SET 00269718</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/1e0f1df1b6d530a902c272cad8c68b94.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00269718</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00269718</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="85">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-85-PND-00214013.html"><img loading=lazy
                                            src="../images/produit/b858c5f03cf260aca6f78d08f88aaf71.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-85-PND-00214013.html">PND 00214013</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b858c5f03cf260aca6f78d08f88aaf71.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214013</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214013</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : White</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="229">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-229-RNG-00155499.html"><img loading=lazy
                                            src="../images/produit/d369f6a5a17cb369959a87f7925e0c42.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-229-RNG-00155499.html">RNG 00155499</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d369f6a5a17cb369959a87f7925e0c42.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00155499</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00155499</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="174">
                                <div class="product-holder">
                                    <div class="product-badge discount">Karasi Necklace</div>
                                    <a href="P-174-KRS-00096956.html"><img loading=lazy
                                            src="../images/produit/85fb35a465472c964d8ea9b3f95a419b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-174-KRS-00096956.html">KRS 00096956</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/85fb35a465472c964d8ea9b3f95a419b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>KRS 00096956</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00096956</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="233">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-233-RNG-00170423.html"><img loading=lazy
                                            src="../images/produit/a4e7080ffb2263498cd5029e0ec4b290.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-233-RNG-00170423.html">RNG 00170423</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a4e7080ffb2263498cd5029e0ec4b290.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00170423</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00170423</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="271">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-271-BNG-00118427.html"><img loading=lazy
                                            src="../images/produit/6ad5f77d89be714d5cbdcfb31ae787da.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-271-BNG-00118427.html">BNG 00118427</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6ad5f77d89be714d5cbdcfb31ae787da.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00118427</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00118427</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="140">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-140-EAR-00045320.html"><img loading=lazy
                                            src="../images/produit/9ed474817b912fcc86cc6c52e8a243ec.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-140-EAR-00045320.html">EAR 00045320</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/9ed474817b912fcc86cc6c52e8a243ec.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00045320</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00045320</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="35">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-35-BRC-00273541.html"><img loading=lazy
                                            src="../images/produit/0d234a6647b387d53f1c248b1c43a978.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-35-BRC-00273541.html">BNG 00273541</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0d234a6647b387d53f1c248b1c43a978.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00273541</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00273541</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="218">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-218-CHN-00177587.html"><img loading=lazy
                                            src="../images/produit/12abd59909ab0da3060f343b749c43cd.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-218-CHN-00177587.html">CHN 00032459</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/12abd59909ab0da3060f343b749c43cd.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00032459</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00032459</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="143">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-143-PND-00214294.html"><img loading=lazy
                                            src="../images/produit/81d1b45e0b15ef25f5f6cf4624ae5e32.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-143-PND-00214294.html">PND 00214294</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/81d1b45e0b15ef25f5f6cf4624ae5e32.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214294</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214294</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="111">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-111-BRC-00118223.html"><img loading=lazy
                                            src="../images/produit/0edb3b7b8c46beb8507f8be9b2b64b4d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-111-BRC-00118223.html">BRC 00118223</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0edb3b7b8c46beb8507f8be9b2b64b4d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00118223</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00118223</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="112">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-112-BRC-00167030.html"><img loading=lazy
                                            src="../images/produit/b637a900729d8376a8dc99ee456f8dec.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-112-BRC-00167030.html">BRC 00167030</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b637a900729d8376a8dc99ee456f8dec.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00167030</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167030</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="97">
                                <div class="product-holder">
                                    <div class="product-badge discount">Mortaesha</div>
                                    <a href="P-97-MRTSH-00153024.html"><img loading=lazy
                                            src="../images/produit/e153d369fabf28cd1371204bbaf9a182.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-97-MRTSH-00153024.html">MRTSH 00153024</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e153d369fabf28cd1371204bbaf9a182.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MRTSH 00153024</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00153024</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="73">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-73-BNG-00217362.html"><img loading=lazy
                                            src="../images/produit/ea85568d98da8fc8ea2d9ed15d9d6cf8.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-73-BNG-00217362.html">BNG 00217362</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ea85568d98da8fc8ea2d9ed15d9d6cf8.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217362</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217362</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="191">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-191-CHK-00225435.html"><img loading=lazy
                                            src="../images/produit/b9945c98e3bb404eef8374b65097d3a5.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-191-CHK-00225435.html">CHK 00225435</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b9945c98e3bb404eef8374b65097d3a5.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00225435</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00225435</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="290">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-290-NCL-00005049.html"><img loading=lazy
                                            src="../images/produit/6e0b8f1ef8eee66b62b24088dd87f51a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-290-NCL-00005049.html">NCL 00005049</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6e0b8f1ef8eee66b62b24088dd87f51a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00005049</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00005049</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="260">
                                <div class="product-holder">
                                    <div class="product-badge discount">Pearl</div>
                                    <a href="P-260-PRL-SET-1.html"><img loading=lazy
                                            src="../images/produit/2bcdd66b5c4b9625cf80fcfea523dac5.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-260-PRL-SET-1.html">PRL SET 1</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/2bcdd66b5c4b9625cf80fcfea523dac5.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PRL SET 1</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">PRL SET
                                                        1</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="147">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-147-EAR-00231730.html"><img loading=lazy
                                            src="../images/produit/a2f550e43f621e9e054f3edea09b0a19.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-147-EAR-00231730.html">EAR 00231730</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a2f550e43f621e9e054f3edea09b0a19.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00231730</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00231730</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="131">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-131-PND-00160935.html"><img loading=lazy
                                            src="../images/produit/71b75fccb488530bbd77ec3d47a178a6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-131-PND-00160935.html">PND 00160935</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/71b75fccb488530bbd77ec3d47a178a6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00160935</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00160935</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="188">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-188-CHK-00248689.html"><img loading=lazy
                                            src="../images/produit/df6c6d2bbf06c3034caeb7aad33c68e8.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-188-CHK-00248689.html">CHK 00248689</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/df6c6d2bbf06c3034caeb7aad33c68e8.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00248689</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00248689</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="70">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-70-BNG-00057148.html"><img loading=lazy
                                            src="../images/produit/6240ffee1f7c5e4ba0189b5151ffcb15.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-70-BNG-00057148.html">BNG 00057148</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6240ffee1f7c5e4ba0189b5151ffcb15.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00057148</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00057148</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="199">
                                <div class="product-holder">
                                    <div class="product-badge discount">Hairclip</div>
                                    <a href="P-199-HCL-232966.html"><img loading=lazy
                                            src="../images/produit/0ee67374a98bad8df5ec6a08d2828d28.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-199-HCL-232966.html">HCL 00232966</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0ee67374a98bad8df5ec6a08d2828d28.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>HCL 00232966</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00232966</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="105">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-105-BRC-00231365.html"><img loading=lazy
                                            src="../images/produit/0518f0fb94e6406b1fc38c35f7908f0a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-105-BRC-00231365.html">BRC 00231365</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0518f0fb94e6406b1fc38c35f7908f0a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00231365</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00231365</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="76">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-76-PND-00214014.html"><img loading=lazy
                                            src="../images/produit/0167be3954e5e253ff1bc793bbfb4684.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-76-PND-00214014.html">PND 00214014</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0167be3954e5e253ff1bc793bbfb4684.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214014</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214014</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="55">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-55-BNG-00217485.html"><img loading=lazy
                                            src="../images/produit/e435478172ad2189508e35cb98d3da16.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-55-BNG-00217485.html">BNG 00217485</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e435478172ad2189508e35cb98d3da16.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217485</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217485</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="92">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-92-NCL-00231317.html"><img loading=lazy
                                            src="../images/produit/a300d59459c7111fce776d21e2f5cecf.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-92-NCL-00231317.html">NCL 00231317</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a300d59459c7111fce776d21e2f5cecf.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00231317</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00231317</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="232">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-232-RNG-00167451.html"><img loading=lazy
                                            src="../images/produit/da461ce6ff9b80f8bc7d4ff06b1af290.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-232-RNG-00167451.html">RNG 00167451</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/da461ce6ff9b80f8bc7d4ff06b1af290.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00167451</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167451</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="30">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-30-RNG-00212914.html"><img loading=lazy
                                            src="../images/produit/f176f2ba4ed60c2901b85920bc73986b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-30-RNG-00212914.html">RNG 00212914</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f176f2ba4ed60c2901b85920bc73986b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00212914</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00212914</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="44">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-44-BRC-00148786.html"><img loading=lazy
                                            src="../images/produit/72c1573b8b2fc68fd18a2083aacc9350.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-44-BRC-00148786.html">BNG 00148786</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/72c1573b8b2fc68fd18a2083aacc9350.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00148786</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00148786</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="273">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-273-RNG-00187890.html"><img loading=lazy
                                            src="../images/produit/8704e75de655aaeac04534f749300c87.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-273-RNG-00187890.html">RNG 00187890</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/8704e75de655aaeac04534f749300c87.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00187890</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00187890</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="224">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-224-EAR-00213694.html"><img loading=lazy
                                            src="../images/produit/e5d4247a35773ccc91e4aefc95eb3000.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-224-EAR-00213694.html">EAR 00213694</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e5d4247a35773ccc91e4aefc95eb3000.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00213694</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00213694</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="255">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-255-SET-00222341.html"><img loading=lazy
                                            src="../images/produit/8ead42dd87cab9bb507d5b741a9e66ba.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-255-SET-00222341.html">SET 00222341</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/8ead42dd87cab9bb507d5b741a9e66ba.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00222341</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222341</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="137">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-137-EAR-00117131.html"><img loading=lazy
                                            src="../images/produit/848420057bd99892755559cbe35f138e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-137-EAR-00117131.html">EAR 00117131</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/848420057bd99892755559cbe35f138e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00117131</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00117131</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="115">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-115-SET-00222203.html"><img loading=lazy
                                            src="../images/produit/5ca806b83f58440c848d6a70865bfabe.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-115-SET-00222203.html">SET 00222203</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/5ca806b83f58440c848d6a70865bfabe.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00222203</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00222203</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="279">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-279-SET-00185503.html"><img loading=lazy
                                            src="../images/produit/bfa11335fae7434bf83ac23c18ba992b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-279-SET-00185503.html">SET 00185503</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/bfa11335fae7434bf83ac23c18ba992b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00185503</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00185503</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="107">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-107-BRC-00268021.html"><img loading=lazy
                                            src="../images/produit/361618afdf8a019e371f29ed76234311.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-107-BRC-00268021.html">BRC 00268021</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/361618afdf8a019e371f29ed76234311.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00268021</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00268021</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="209">
                                <div class="product-holder">
                                    <div class="product-badge discount">Pendant</div>
                                    <a href="P-209-PND-00155122.html"><img loading=lazy
                                            src="../images/produit/35c7f77f9fe14ace9ce84dd67457d002.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-209-PND-00155122.html">PND 00155122</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/35c7f77f9fe14ace9ce84dd67457d002.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00155122</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00155122</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="46">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-46-BRC-00269589.html"><img loading=lazy
                                            src="../images/produit/730b4122b22195b77945be26b5ce8234.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-46-BRC-00269589.html">BNG 00269589</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/730b4122b22195b77945be26b5ce8234.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00269589</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00269589</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="53">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-53-BNG-00217457.html"><img loading=lazy
                                            src="../images/produit/2bd9d551f175f5909f55e54e2d6b4fbd.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-53-BNG-00217457.html">BNG 00217457</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/2bd9d551f175f5909f55e54e2d6b4fbd.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217457</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217457</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="37">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-37-BRC-00232251.html"><img loading=lazy
                                            src="../images/produit/c81b7b01901a4b2ebb7d0db6dc94bd33.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-37-BRC-00232251.html">BNG 00232251</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c81b7b01901a4b2ebb7d0db6dc94bd33.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00232251</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00232251</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="34">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-34-BRC-00142182.html"><img loading=lazy
                                            src="../images/produit/c7c35ae880dfa87eea9b50a451649812.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-34-BRC-00142182.html">BNG 00142182</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c7c35ae880dfa87eea9b50a451649812.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00142182</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00142182</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="51">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-51-BNG-00204940.html"><img loading=lazy
                                            src="../images/produit/bce8f0d59b8dd4995c7c8a9f500cfdb9.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-51-BNG-00204940.html">BNG 00204940</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/bce8f0d59b8dd4995c7c8a9f500cfdb9.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00204940</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00204940</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="116">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-116-SET-00021760.html"><img loading=lazy
                                            src="../images/produit/d2a23502342f6f90a64e5c07b6a1b994.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-116-SET-00021760.html">SET 00021760</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d2a23502342f6f90a64e5c07b6a1b994.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00021760</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00021760</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="28">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-28-RNG-00073827.html"><img loading=lazy
                                            src="../images/produit/dba295be08b4de302c97a3667e7f87c5.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-28-RNG-00073827.html">RNG 00073827</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/dba295be08b4de302c97a3667e7f87c5.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00073827</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00073827</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="57">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-57-BNG-00217317.html"><img loading=lazy
                                            src="../images/produit/bc788ef3a6c6bb15740ac43175456c19.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-57-BNG-00217317.html">BNG 00217317</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/bc788ef3a6c6bb15740ac43175456c19.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217317</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217317</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="40">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-40-BRC-00204717.html"><img loading=lazy
                                            src="../images/produit/67a620a32e9e57b763c19b759cc176e0.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-40-BRC-00204717.html">BNG 00204717</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/67a620a32e9e57b763c19b759cc176e0.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00204717</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00204717</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="106">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-106-BRC-00207892.html"><img loading=lazy
                                            src="../images/produit/770d768eec80f6a6ce50b004221f57e5.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-106-BRC-00207892.html">BRC 00207892</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/770d768eec80f6a6ce50b004221f57e5.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00207892</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00207892</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="206">
                                <div class="product-holder">
                                    <div class="product-badge discount">Pendant</div>
                                    <a href="P-206-PND-00214308.html"><img loading=lazy
                                            src="../images/produit/15e04914fd68be58e58d42115ac5ca69.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-206-PND-00214308.html">PND 00214308</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/15e04914fd68be58e58d42115ac5ca69.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214308</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214308</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="268">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-268-BNG-00112823.html"><img loading=lazy
                                            src="../images/produit/03aadb55f39d088580b13167065a75be.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-268-BNG-00112823.html">BNG 00112823</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/03aadb55f39d088580b13167065a75be.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00112823</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00112823</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="190">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-190-CHK-00144659.html"><img loading=lazy
                                            src="../images/produit/6c27dcaade39a38ca33182e0e275fda6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-190-CHK-00144659.html">CHK 00144659</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6c27dcaade39a38ca33182e0e275fda6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00144659</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00144659</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="56">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-56-BNG-00039455.html"><img loading=lazy
                                            src="../images/produit/b8cb278b982cd97eecdf4abf30e00d4d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-56-BNG-00039455.html">BNG 00039455</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b8cb278b982cd97eecdf4abf30e00d4d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00039455</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00039455</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="45">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-45-BRC-00157984.html"><img loading=lazy
                                            src="../images/produit/4cc4d88873944800508e372c74e9885b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-45-BRC-00157984.html">BNG 00157984</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/4cc4d88873944800508e372c74e9885b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00157984</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00157984</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="240">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-240-NCL-00268024.html"><img loading=lazy
                                            src="../images/produit/68e74be34987d834b202c2001e0e6e9e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-240-NCL-00268024.html">NCL 00268024</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/68e74be34987d834b202c2001e0e6e9e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00268024</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00268024</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="39">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-39-BRC-00269586.html"><img loading=lazy
                                            src="../images/produit/3a9b12c45a283cd0bdf817a7af53b9ad.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-39-BRC-00269586.html">BNG 00269586</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3a9b12c45a283cd0bdf817a7af53b9ad.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00269586</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00269586</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="99">
                                <div class="product-holder">
                                    <div class="product-badge discount">Belt</div>
                                    <a href="P-99-BLT-00774417.html"><img loading=lazy
                                            src="../images/produit/963407394b382d88c00f10f83523a1b5.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-99-BLT-00774417.html">BLT 00774417</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/963407394b382d88c00f10f83523a1b5.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BLT 00774417</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00774417</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="256">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-256-SET-00269386.html"><img loading=lazy
                                            src="../images/produit/541a1c8af935b8c576b97b8b26cf7332.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-256-SET-00269386.html">SET 00269386</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/541a1c8af935b8c576b97b8b26cf7332.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00269386</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00269386</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="87">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-87-NCL-00225561.html"><img loading=lazy
                                            src="../images/produit/3bd55baa6ef2c8201babf4e5a85f04f7.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-87-NCL-00225561.html">NCL 00225561</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3bd55baa6ef2c8201babf4e5a85f04f7.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00225561</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00225561</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="52">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-52-BNG-00217323.html"><img loading=lazy
                                            src="../images/produit/a96dc039cb6930792f472da9a06ee7cf.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-52-BNG-00217323.html">BNG 00217323</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a96dc039cb6930792f472da9a06ee7cf.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217323</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217323</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="91">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-91-NCL-00148645.html"><img loading=lazy
                                            src="../images/produit/0578ff47315ada2402d5b653ceb05fe5.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-91-NCL-00148645.html">NCL 00148645</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0578ff47315ada2402d5b653ceb05fe5.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00148645</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00148645</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="257">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-257-SET-00227412.html"><img loading=lazy
                                            src="../images/produit/7e2c4fe2ef88183112a00ffe52fe00f4.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-257-SET-00227412.html">SET 00227412</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/7e2c4fe2ef88183112a00ffe52fe00f4.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00227412</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00227412</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="138">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-138-EAR-00231879.html"><img loading=lazy
                                            src="../images/produit/e9adc948c1041d345ebd5a705c9761f5.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-138-EAR-00231879.html">EAR 00231879</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e9adc948c1041d345ebd5a705c9761f5.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00231879</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00231879</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="144">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-144-EAR-00207920.html"><img loading=lazy
                                            src="../images/produit/aca3ae35e8b1a6d5df96071ba5ab5e7f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-144-EAR-00207920.html">EAR 00207920</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/aca3ae35e8b1a6d5df96071ba5ab5e7f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00207920</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00207920</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="146">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-146-EAR-00045958.html"><img loading=lazy
                                            src="../images/produit/6d5873a7143bd793024355fc20768a65.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-146-EAR-00045958.html">EAR 00045958</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6d5873a7143bd793024355fc20768a65.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00045958</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00045958</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="198">
                                <div class="product-holder">
                                    <div class="product-badge discount">Hairclip</div>
                                    <a href="P-198-HCL-00205584.html"><img loading=lazy
                                            src="../images/produit/113099f7dac85a7dca1288fd286b614f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-198-HCL-00205584.html">HCL 00205584</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/113099f7dac85a7dca1288fd286b614f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>HCL 00205584</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205584</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="167">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-167-SET-00205224.html"><img loading=lazy
                                            src="../images/produit/3dd0b118dfada21bacef0d4d44400cbb.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-167-SET-00205224.html">SET 00205224</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3dd0b118dfada21bacef0d4d44400cbb.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00205224</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205224</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="64">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-64-BNG-00217489.html"><img loading=lazy
                                            src="../images/produit/91284c8a0966253b7feed84d0f6e81bc.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-64-BNG-00217489.html">BNG 00217489</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/91284c8a0966253b7feed84d0f6e81bc.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217489</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217489</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="203">
                                <div class="product-holder">
                                    <div class="product-badge discount">Amayel</div>
                                    <a href="P-203-AMA-01.html"><img loading=lazy
                                            src="../images/produit/3673da95f0db494e6493132ffbf69f8b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-203-AMA-01.html">AMA 01</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3673da95f0db494e6493132ffbf69f8b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>AMA 01</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">AMA
                                                        01</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="98">
                                <div class="product-holder">
                                    <div class="product-badge discount">Mortaesha</div>
                                    <a href="P-98-MRTSH-00177747.html"><img loading=lazy
                                            src="../images/produit/b137dad083412d5329944f8645fe2523.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-98-MRTSH-00177747.html">MRTSH 00177747</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b137dad083412d5329944f8645fe2523.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MRTSH 00177747</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00177747</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="139">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-139-EAR-00231880.html"><img loading=lazy
                                            src="../images/produit/6a035cca67ab60db3aa089dda14dac9d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-139-EAR-00231880.html">EAR 00231880</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6a035cca67ab60db3aa089dda14dac9d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00231880</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00231880</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="124">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-124-BNG-00163289.html"><img loading=lazy
                                            src="../images/produit/ddb6a12aa17fc19a125496c2cb9f8101.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-124-BNG-00163289.html">BNG 00163289</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ddb6a12aa17fc19a125496c2cb9f8101.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00163289</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00163289</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="110">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-110-BRC-00266611.html"><img loading=lazy
                                            src="../images/produit/4d4569a03418ef7a25e6e262adfc70ce.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-110-BRC-00266611.html">BRC 00266611</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/4d4569a03418ef7a25e6e262adfc70ce.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00266611</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00266611</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="84">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-84-PND-00214015.html"><img loading=lazy
                                            src="../images/produit/e9e1b36199bed7b5b47edc3a04342f1b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-84-PND-00214015.html">PND 00214015</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e9e1b36199bed7b5b47edc3a04342f1b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214015</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214015</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : White</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="121">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-121-SET-00257762.html"><img loading=lazy
                                            src="../images/produit/bc33cf6727395e72a12d0e90b6e8e210.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-121-SET-00257762.html">SET 00257762</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/bc33cf6727395e72a12d0e90b6e8e210.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00257762</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00257762</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="230">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-230-RNG-00169379.html"><img loading=lazy
                                            src="../images/produit/de4d3d1061c90fe4e5d8c95b6dbbadc2.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-230-RNG-00169379.html">RNG 00169379</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/de4d3d1061c90fe4e5d8c95b6dbbadc2.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00169379</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00169379</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="162">
                                <div class="product-holder">
                                    <div class="product-badge discount">Tablat</div>
                                    <a href="P-162-TAB-00221768.html"><img loading=lazy
                                            src="../images/produit/1900e38e404f722b3acd25185f9fb1e3.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-162-TAB-00221768.html">TAB 00221768</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/1900e38e404f722b3acd25185f9fb1e3.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>TAB 00221768</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00221768</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="200">
                                <div class="product-holder">
                                    <div class="product-badge discount">Hairclip</div>
                                    <a href="P-200-HCL-00214355.html"><img loading=lazy
                                            src="../images/produit/19d695549b60fea5a3472c1300065d1a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-200-HCL-00214355.html">HCL 00214355</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/19d695549b60fea5a3472c1300065d1a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>HCL 00214355</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214355</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="151">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-151-EAR-00205257.html"><img loading=lazy
                                            src="../images/produit/1b777c2969978160d7edf4bf5660ffc6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-151-EAR-00205257.html">EAR 00205257</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/1b777c2969978160d7edf4bf5660ffc6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00205257</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205257</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="195">
                                <div class="product-holder">
                                    <div class="product-badge discount">Crown</div>
                                    <a href="P-195-CRW-03.html"><img loading=lazy
                                            src="../images/produit/33b02f365bea6d0116721050b3cd5895.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-195-CRW-03.html">CRW 03</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/33b02f365bea6d0116721050b3cd5895.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CRW 03</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">CRW
                                                        03</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="248">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-248-SET-00225719.html"><img loading=lazy
                                            src="../images/produit/6d6ba84352dcbb5f0238da6a0256ce79.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-248-SET-00225719.html">SET 00225719</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6d6ba84352dcbb5f0238da6a0256ce79.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00225719</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00225719</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="213">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-213-RNG-00167250.html"><img loading=lazy
                                            src="../images/produit/81ca47e58770e5147f58bd25725ca777.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-213-RNG-00167250.html">RNG 00167250</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/81ca47e58770e5147f58bd25725ca777.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00167250</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167250</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="26">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-26-RNG-00211451.html"><img loading=lazy
                                            src="../images/produit/70a528266d28499dab91191002d98539.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-26-RNG-00211451.html">RNG 00211451</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/70a528266d28499dab91191002d98539.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00211451</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00211837</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="75">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-75-PND-00214153.html"><img loading=lazy
                                            src="../images/produit/a8693cde202733c368afa29009e12c16.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-75-PND-00214153.html">PND 00214153</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a8693cde202733c368afa29009e12c16.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00214153</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00214153</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="180">
                                <div class="product-holder">
                                    <div class="product-badge discount">Mortahesha</div>
                                    <a href="P-180-MTH-00256600.html"><img loading=lazy
                                            src="../images/produit/a00693733d077aaa3924339f5dca863b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-180-MTH-00256600.html">MTH 00256600</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a00693733d077aaa3924339f5dca863b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MTH 00256600</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00256600</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="219">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-219-CHN-00177587.html"><img loading=lazy
                                            src="../images/produit/7e40cd1aceb4c55810a44a3dd763b9f9.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-219-CHN-00177587.html">CHN 00177587</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/7e40cd1aceb4c55810a44a3dd763b9f9.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00177587</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00177587</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="32">
                                <div class="product-holder">
                                    <div class="product-badge discount">Ring</div>
                                    <a href="P-32-TNG-00239844.html"><img loading=lazy
                                            src="../images/produit/57caa6c545a908bd256d8bc3bd5fbbc6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-32-TNG-00239844.html">RNG 00239844</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/57caa6c545a908bd256d8bc3bd5fbbc6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00239844</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00239844</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="175">
                                <div class="product-holder">
                                    <div class="product-badge discount">Karasi Necklace</div>
                                    <a href="P-175-KRS-00167105.html"><img loading=lazy
                                            src="../images/produit/c20d59b3f3c327311e80f80b7b9c5b96.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-175-KRS-00167105.html">KRS 00167105</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c20d59b3f3c327311e80f80b7b9c5b96.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>KRS 00167105</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167105</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="122">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-122-BNG-00157148.html"><img loading=lazy
                                            src="../images/produit/f140c3e3f6dc11cd0aa25199ac145e08.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-122-BNG-00157148.html">BNG 00157148</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f140c3e3f6dc11cd0aa25199ac145e08.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00157148</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00157148</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="194">
                                <div class="product-holder">
                                    <div class="product-badge discount">Crown</div>
                                    <a href="P-194-CRW-00152754.html"><img loading=lazy
                                            src="../images/produit/ea4ebbb49baf06de8ee67706405ee628.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-194-CRW-00152754.html">CRW 00152754</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/ea4ebbb49baf06de8ee67706405ee628.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CRW 00152754</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00152754</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="254">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-254-SET-00204961.html"><img loading=lazy
                                            src="../images/produit/0aee506fde5987e70b245ed65051bff7.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-254-SET-00204961.html">SET 00204961</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0aee506fde5987e70b245ed65051bff7.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00204961</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00204961</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="157">
                                <div class="product-holder">
                                    <div class="product-badge discount">Maznat</div>
                                    <a href="P-157-MZN-00271468.html"><img loading=lazy
                                            src="../images/produit/9420b955c252c808a77ad1395225ab9f.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-157-MZN-00271468.html">MZN 00271468</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/9420b955c252c808a77ad1395225ab9f.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MZN 00271468</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00271468</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="253">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-253-SET-00175349.html"><img loading=lazy
                                            src="../images/produit/7714d2a283a6f2543cb573359f8b056d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-253-SET-00175349.html">SET 00175349</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/7714d2a283a6f2543cb573359f8b056d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00175349</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00175349</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="263">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-263-NCL-00167805.html"><img loading=lazy
                                            src="../images/produit/3c3b2d12a1a8a131dfd3d3b0735e25c0.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-263-NCL-00167805.html">NCL 00167805</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3c3b2d12a1a8a131dfd3d3b0735e25c0.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00167805</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167805</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="226">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-226-EAR-00178183.html"><img loading=lazy
                                            src="../images/produit/16678e7a3409c69aed7823b6f332ec31.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-226-EAR-00178183.html">EAR 00178183</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/16678e7a3409c69aed7823b6f332ec31.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00178183</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00178183</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="123">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-123-BNG-00163283.html"><img loading=lazy
                                            src="../images/produit/dbd8f6d511c6b58a5215d6a2fa2035ce.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-123-BNG-00163283.html">BNG 00163283</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/dbd8f6d511c6b58a5215d6a2fa2035ce.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00163283</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00163283</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="102">
                                <div class="product-holder">
                                    <div class="product-badge discount">Belt</div>
                                    <a href="P-102-BLT-00271065.html"><img loading=lazy
                                            src="../images/produit/53067eb95eba255b56c3415e37dc9760.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-102-BLT-00271065.html">BLT 00271065</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/53067eb95eba255b56c3415e37dc9760.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BLT 00271065</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00271065</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="210">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bracelet</div>
                                    <a href="P-210-BRC-00169465.html"><img loading=lazy
                                            src="../images/produit/13df43bbb0acdfb3639bf337a53c54b2.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-210-BRC-00169465.html">BRC 00169465</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/13df43bbb0acdfb3639bf337a53c54b2.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BRC 00169465</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00169465</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="265">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-265-NCL-00167796.html"><img loading=lazy
                                            src="../images/produit/e55ef286b335699dc88d4aa41e97b38b.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-265-NCL-00167796.html">NCL 00167796</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e55ef286b335699dc88d4aa41e97b38b.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00167796</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167796</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="93">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-93-NCL-00268030.html"><img loading=lazy
                                            src="../images/produit/a71c941f72591aee76ca2faa4c1b6eb8.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-93-NCL-00268030.html">NCL 00268030</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/a71c941f72591aee76ca2faa4c1b6eb8.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00268030</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00268030</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="184">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-184-CHN-00225428.html"><img loading=lazy
                                            src="../images/produit/d0009cce7576b6168dbfae9fdc7560d9.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-184-CHN-00225428.html">CHN 00225428</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d0009cce7576b6168dbfae9fdc7560d9.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00225428</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00225428</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="192">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-192-CHK-00268034.html"><img loading=lazy
                                            src="../images/produit/6ab302f9a8de951fbc6d37fa424bb252.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-192-CHK-00268034.html">CHK 00268034</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6ab302f9a8de951fbc6d37fa424bb252.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00268034</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00268034</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="50">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-50-BNG-00233665.html"><img loading=lazy
                                            src="../images/produit/06dd64100b158b6aa9225c5f990ab885.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-50-BNG-00233665.html">BNG 00233665</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/06dd64100b158b6aa9225c5f990ab885.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00233665</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00233665</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="72">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-72-BNG-00204942.html"><img loading=lazy
                                            src="../images/produit/9f2c6877663a71170eaaeec5fd8c2a39.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-72-BNG-00204942.html">BNG 00204942</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/9f2c6877663a71170eaaeec5fd8c2a39.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00204942</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00204942</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="48">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-48-BNG-00269564.html"><img loading=lazy
                                            src="../images/produit/feb5b7922833d1ffb7f974a7699f569e.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-48-BNG-00269564.html">BNG 00269564</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/feb5b7922833d1ffb7f974a7699f569e.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00269564</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00269564</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="241">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-241-CHK-00331394.html"><img loading=lazy
                                            src="../images/produit/044e6021d89c3a99d692ebf11bfe9cc1.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-241-CHK-00331394.html">CHK 00331394</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/044e6021d89c3a99d692ebf11bfe9cc1.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00331394</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00331394</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="187">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-187-CHK-00152823.html"><img loading=lazy
                                            src="../images/produit/39eafb20a76b4d7770a22976004adc0d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-187-CHK-00152823.html">CHK 00152823</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/39eafb20a76b4d7770a22976004adc0d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00152823</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00152823</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="49">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-49-BNG-00217390.html"><img loading=lazy
                                            src="../images/produit/23e483a7aad088f2d3d9bd70c62123b1.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-49-BNG-00217390.html">BNG 00217390</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/23e483a7aad088f2d3d9bd70c62123b1.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217390</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217390</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="270">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-270-BNG-00167481.html"><img loading=lazy
                                            src="../images/produit/aee908d227828d7f469c7b2231824176.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-270-BNG-00167481.html">BNG 00167481</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/aee908d227828d7f469c7b2231824176.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00167481</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167481</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="207">
                                <div class="product-holder">
                                    <div class="product-badge discount">Pendant</div>
                                    <a href="P-207-PND-00232468.html"><img loading=lazy
                                            src="../images/produit/fef81c09ef360db0b50c6063903fa2fc.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-207-PND-00232468.html">PND 00232468</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/fef81c09ef360db0b50c6063903fa2fc.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00232468</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00232468</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="239">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-239-NCL-00224112.html"><img loading=lazy
                                            src="../images/produit/35047ed282abef2ef711e957ad4b1bce.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-239-NCL-00224112.html">NCL 00224112</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/35047ed282abef2ef711e957ad4b1bce.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00224112</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00224112</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="127">
                                <div class="product-holder">
                                    <div class="product-badge discount">pendant</div>
                                    <a href="P-127-PND-00160926.html"><img loading=lazy
                                            src="../images/produit/6b5c661532dbc031f61758b5ceec35d6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-127-PND-00160926.html">PND 00160926</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/6b5c661532dbc031f61758b5ceec35d6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>PND 00160926</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00160926</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="125">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-125-BNG-00118631.html"><img loading=lazy
                                            src="../images/produit/e037db4b430109cde127a7f6bda2964a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-125-BNG-00118631.html">BNG 00118631</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e037db4b430109cde127a7f6bda2964a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00118631</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00118631</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="95">
                                <div class="product-holder">
                                    <div class="product-badge discount">Mortaesha</div>
                                    <a href="P-95-MRTSH-00118085.html"><img loading=lazy
                                            src="../images/produit/419d0d8a05641bef93de3f111485230a.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-95-MRTSH-00118085.html">MRTSH 00118085</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/419d0d8a05641bef93de3f111485230a.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MRTSH 00118085</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00118085</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="236">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-236-NCL-00206698.html"><img loading=lazy
                                            src="../images/produit/f5655760a919d666e3211b042415c470.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-236-NCL-00206698.html">NCL 00206698</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f5655760a919d666e3211b042415c470.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00206698</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00206698</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="267">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-267-BNG-00167480.html"><img loading=lazy
                                            src="../images/produit/c1e02b49ad669a25162aa3ecfec38b2d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-267-BNG-00167480.html">BNG 00167480</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c1e02b49ad669a25162aa3ecfec38b2d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00167480</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167480</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="251">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-251-SET-00187159.html"><img loading=lazy
                                            src="../images/produit/11b7e533c02fff075a53a3ca82fb1723.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-251-SET-00187159.html">SET 00187159</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/11b7e533c02fff075a53a3ca82fb1723.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 00187159</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00187159</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="71">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-71-BNG-00217367.html"><img loading=lazy
                                            src="../images/produit/fd0ead2bc4410805f2e5173f1a7f69d4.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-71-BNG-00217367.html">BNG 00217367</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/fd0ead2bc4410805f2e5173f1a7f69d4.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00217367</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00217367</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="237">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-237-NCL-00258333.html"><img loading=lazy
                                            src="../images/produit/b03e651f6256e2cba1cf1bf4d0d9293d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-237-NCL-00258333.html">NCL 00258333</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/b03e651f6256e2cba1cf1bf4d0d9293d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00258333</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00258333</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : White</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="61">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-61-BNG-00266808.html"><img loading=lazy
                                            src="../images/produit/f8ea26411e618a50b677c28596892ea6.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-61-BNG-00266808.html">BNG 00266808</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f8ea26411e618a50b677c28596892ea6.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00266808</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00266808</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="177">
                                <div class="product-holder">
                                    <div class="product-badge discount">Karasi Necklace</div>
                                    <a href="P-177-KRS-00205069.html"><img loading=lazy
                                            src="../images/produit/525e4e26d556ba31079b13a491559a6d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-177-KRS-00205069.html">KRS 00205069</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/525e4e26d556ba31079b13a491559a6d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>KRS 00205069</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00205069</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="238">
                                <div class="product-holder">
                                    <div class="product-badge discount">choker</div>
                                    <a href="P-238-CHK-00231418.html"><img loading=lazy
                                            src="../images/produit/3791214c5c074ae95faa00c2f0eaa1e8.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-238-CHK-00231418.html">CHK 00231418</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/3791214c5c074ae95faa00c2f0eaa1e8.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHK 00231418</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00231418</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="220">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-220-1406040311.html"><img loading=lazy
                                            src="../images/produit/d04f3a1e0c67bae8005ad83cc14800c8.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-220-1406040311.html">1406040311</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d04f3a1e0c67bae8005ad83cc14800c8.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>1406040311</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span
                                                        class="sku">1406040311</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="182">
                                <div class="product-holder">
                                    <div class="product-badge discount">Tablat</div>
                                    <a href="P-182-TAB-00221775.html"><img loading=lazy
                                            src="../images/produit/0096d34ed5e10c4fd1f240559d9f3af3.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-182-TAB-00221775.html">TAB 00221775</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/0096d34ed5e10c4fd1f240559d9f3af3.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>TAB 00221775</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00221775</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="225">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-225-EAR-00221277.html"><img loading=lazy
                                            src="../images/produit/d3c622cd3d23d92e80fadbb7012cf59c.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-225-EAR-00221277.html">EAR 00221277</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d3c622cd3d23d92e80fadbb7012cf59c.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00221277</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00221277</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="186">
                                <div class="product-holder">
                                    <div class="product-badge discount">chain</div>
                                    <a href="P-186-CHN-00268038.html"><img loading=lazy
                                            src="../images/produit/f290023f9a6183ab6c0468c6fbfaff18.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-186-CHN-00268038.html">CHN 00268038</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/f290023f9a6183ab6c0468c6fbfaff18.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>CHN 00268038</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00268038</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="160">
                                <div class="product-holder">
                                    <div class="product-badge discount">Maznat</div>
                                    <a href="P-160-MZN-00266051.html"><img loading=lazy
                                            src="../images/produit/d381b138b81485a556095b0c44f95192.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-160-MZN-00266051.html">MZN 00266051</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/d381b138b81485a556095b0c44f95192.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>MZN 00266051</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00266051</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="234">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-234-NCL-00231309.html"><img loading=lazy
                                            src="../images/produit/e86dbeaa3fd40f9c1d9029a87f574b54.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-234-NCL-00231309.html">NCL 00231309</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/e86dbeaa3fd40f9c1d9029a87f574b54.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00231309</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00231309</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="262">
                                <div class="product-holder">
                                    <div class="product-badge discount">Necklece</div>
                                    <a href="P-262-NCL-00166954.html"><img loading=lazy
                                            src="../images/produit/57223ee094e6b4cdc1402f0f5b89ae5d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-262-NCL-00166954.html">NCL 00166954</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/57223ee094e6b4cdc1402f0f5b89ae5d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>NCL 00166954</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00166954</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="288">
                                <div class="product-holder">
                                    <div class="product-badge discount">set</div>
                                    <a href="P-288-SET-0019298.html"><img loading=lazy
                                            src="../images/produit/c80079936358970999d5ee42258dd4d2.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-288-SET-0019298.html">SET 0019298</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c80079936358970999d5ee42258dd4d2.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>SET 0019298</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">0019298</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="173">
                                <div class="product-holder">
                                    <div class="product-badge discount">Karasi Necklace</div>
                                    <a href="P-173-KRS-00002234.html"><img loading=lazy
                                            src="../images/produit/c299063db5b630824611b7a6f842aa24.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-173-KRS-00002234.html">KRS 00002234</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/c299063db5b630824611b7a6f842aa24.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>KRS 00002234</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00002234</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="274">
                                <div class="product-holder">
                                    <div class="product-badge discount">Rings</div>
                                    <a href="P-274-RNG-00167250.html"><img loading=lazy
                                            src="../images/produit/91678f30cdd83cbfcef2fab2b0ed4000.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-274-RNG-00167250.html">RNG 00167250</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/91678f30cdd83cbfcef2fab2b0ed4000.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>RNG 00167250</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00167250</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Diamond</span>
                                                <span class="tagged_as">Metal Purity : Diamond</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="145">
                                <div class="product-holder">
                                    <div class="product-badge discount">Earring</div>
                                    <a href="P-145-EAR-00229234.html"><img loading=lazy
                                            src="../images/produit/8034f0a455767138577decf7945ea7f7.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-145-EAR-00229234.html">EAR 00229234</a></h4>

                                </div>

                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/8034f0a455767138577decf7945ea7f7.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>EAR 00229234</h4>


                                        <p></p>

                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00229234</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 18 K</span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>
                        <li class="product">
                            <form method="post" id="form-item" class="productForm form-item"><input id="id_produit"
                                    name="id_produit" type="hidden" value="62">
                                <div class="product-holder">
                                    <div class="product-badge discount">Bangle</div>
                                    <a href="P-62-BNG-00020751.html"><img loading=lazy
                                            src="../images/produit/1d2695c523ead4aa63e5421bbd676e4d.png" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view"><i class="fi flaticon-view"></i></a></li>

                                            <li><button title="Request for price" type="submit" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="P-62-BNG-00020751.html">BNG 00020751</a></h4>
                                </div>
                            </form>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="../images/produit/1d2695c523ead4aa63e5421bbd676e4d.png" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>BNG 00020751</h4>
                                        <p></p>
                                        <div class="thb-product-meta-before">

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU : <span class="sku">00020751</span></span>
                                                <span class="sku_wrapper">Brand : Gold Craft Jewellery</span>
                                                <span class="posted_in">Metal color : Yellow</span>
                                                <span class="tagged_as">Metal Purity : 21 K</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end best-seller-section -->


<!-- start jewalry-testimonials-section -->
<section class="jewalry-testimonials-section section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-1 col-md-6">
                <div class="img-holder">
                    <img src="../assets/images/testimonials-pic.png" alt>
                </div>
            </div>
            <div class="col col-lg-5 col-md-6">
                <div class="quote-text">
                    <h2>Jewelry with meaning.</h2>
                    <p>Each Damas collection is conceived, designed and developed to harness a meaning and
                        message, each jewel begins with a drawing that embodies the innovative inspiration of
                        our designers' creative ideas. Made to make every woman feel special, unique and
                        powerful.</p>
                    <span>Gold Craft Jewellery</span>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end jewalry-testimonials-section -->


<!-- start simple-trending-cta -->
<section class="simple-trending-cta">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="inner">
                    <img src="../assets/images/ring.jpg" alt>
                    <h2>Gold Craft Jewelery</h2>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end simple-trending-cta -->


<!-- start site-footer -->
<section class="instagram-section">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="instagram-inner">
                    <div class="instagram-text">
                        <h3>Follow us on instagram</h3>
                        <p>@goldcraftjewellery</p>
                    </div>
                    <div class="instagram-grids clearfix">
                        <div class="grid">
                            <a target="_blank" href="https://www.instagram.com/Gold Craft Jewelleryjewellery/"><img
                                    loading=lazy src="../assets/images/instagram/1.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a target="_blank" href="https://www.instagram.com/Gold Craft Jewelleryjewellery/"><img
                                    loading=lazy src="../assets/images/instagram/3.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a target="_blank" href="https://www.instagram.com/Gold Craft Jewelleryjewellery/"><img
                                    loading=lazy src="../assets/images/instagram/4.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a target="_blank" href="https://www.instagram.com/Gold Craft Jewelleryjewellery/"><img
                                    loading=lazy src="../assets/images/instagram/2.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a target="_blank" href="https://www.instagram.com/Gold Craft Jewelleryjewellery/"><img
                                    loading=lazy src="../assets/images/instagram/5.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a target="_blank" href="https://www.instagram.com/Gold Craft Jewelleryjewellery/"><img
                                    loading=lazy src="../assets/images/instagram/6.jpg" alt></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>