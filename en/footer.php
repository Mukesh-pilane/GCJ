<footer class="site-footer">
    <div class="container-1410">
        <div class="row widget-area">
            <div class="col-lg-4 col-xs-6  widget-col about-widget-col">
                <div class="widget newsletter-widget">
                    <div class="inner">
                        <h2>Register now and get updates on your favorite products</h2>

                        <form>
                            <!-- <div class="input-1">
                                <input type="email" class="form-control" placeholder="Email *" required>
                            </div> -->
                            <div class="submit clearfix">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6 widget-col">
                <div class="widget contact-widget">
                    <h2>Contact information</h2>
                    <ul>
                        <li>Customer Service Department : <span style="direction:ltr;">00 974 55 56 22 92</span>
                        </li>
                        <li>Email : GoldcraftSingapore@gmail.com </li>
                        <li>Address : 10 RAEBURN PARK, #02-8GH34, SINGAPORE 088702</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-xs-6 widget-col">
                <div class="widget company-widget">
                    <h3>About company</h3>
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="heritage.html">About Gold Craft Jewellery</a></li>
                        <li><a href="artistry.html">Art of crafting</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-xs-6 widget-col">
                <div class="widget payment-widget">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="CP-4-Gold-21-K.html">Gold 21 K</a></li>
                        <li><a href="CP-5-Gold-18-K.html">Gold 18 K</a></li>
                        <li><a href="CP-6-Kids-.html">Kids</a></li>
                        <li><a href="CP-7-Diamond.html">Diamond</a></li>
                        <li><a href="CP-8-Gifts.html">Gifts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container -->

    <div class="lower-footer">
        <div class="container-1410">
            <div class="row">
                <div class="col-xs-12">
                    <div class="lower-footer-inner clearfix">
                        <div>
                            <p>&copy; 2022 Gold Craft Jewellery, all rights reserved</p>
                        </div>
                        <div class="social">
                            <ul class="clearfix">
                                <li><a target="_blank" href="https://www.facebook.com/Gold Craft Jewelleryjewellery"
                                        title="Facebook"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/Gold Craft Jewelleryjewellery/"
                                        title="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/c/Gold Craft JewelleryJewellery"
                                        title="YouTube"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a target="_blank" href="https://www.tiktok.com/@Gold Craft Jewelleryjewellery"
                                        title="Tik Tok"><i class="fa-brands fa-tiktok"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/Gold Craft Jewelleryjewellery"
                                        title="Twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.snapchat.com/add/Gold Craft Jewelleryjewellery"
                                        title="Snapchat"><i class="fa-brands fa-snapchat"></i></a></li>
                            </ul>
                        </div>
                        <div class="extra-link">
                            <ul>
                                <li><a href="accessibility.html">Website accessibility </a></li>
                                <li><a href="privacy-policy.html">Privacy policy</a></li>
                                <li><a href="contact.html"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- end site-footer -->




</div>
<!-- end of page-wrapper -->
</body>
<!-- All JavaScript files
    ================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins for this template -->
<script src="assets/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>
<script src="../../stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script>

    $(document).ready(function () {
        // Check if there is any cart data in localStorage on page load
        var existingData = JSON.parse(localStorage.getItem("cartItems")) || [];
        var cartCount = existingData.length; // Get the number of items in the cart
        $(".mini-cart-content").append(`<div class="mini-cart-action clearfix"><a href="contact-us" class="view-cart-btn">Confirm price request</a></div>`);
        // Check if there are any items in the cart
        if (existingData.length > 0) {
            if ($(".mini-cart-items").length === 0) {
                // Create the mini-cart-items container if it doesn't exist
                $(".mini-cart-content").prepend('<div class="mini-cart-items"></div>');
            }

            $(".mini-cart-items").empty();

            // Loop through each item in localStorage and append it to the mini-cart
            $.each(existingData, function (index, item) {
                var cartItemHTML = `
                                <div class="mini-cart-item clearfix" data-index="${index}">
                                    <div class="mini-cart-item-image">
                                        <a href="#"><img src="${item.image}" alt=""></a>
                                    </div>
                                    <div class="mini-cart-item-des">
                                        <a href="#">${item.sku}</a>
                                        <span>Qty:${item.qty}<span>
                                    </div>
                                    <div class="menu-cart-remove">
                                        <i class="ti-close"></i>
                                    </div>
                                </div>
                            `;
                $(".mini-cart-items").append(cartItemHTML);
            });
        } else {
            // If no items in the cart, show a message
            $(".mini-cart-items").append('<p>Your cart is empty.</p>');
        }


        $("#cart-count").html(cartCount); // Update the cart count on page load

        // Handle remove button click
        $(".mini-cart-content").on('click', ".menu-cart-remove", function () {
            var existingData = JSON.parse(localStorage.getItem("cartItems")) || [];
            var itemSku = $(this).closest('.mini-cart-item').find('.mini-cart-item-des a').text();
            console.log(itemSku);

            existingData = existingData.filter(item => item.sku !== itemSku);
            console.log('existingData', existingData.length)
            // Update localStorage and the cart count
            $("#cart-count").html(existingData.length); // Update the cart count on page load
            localStorage.setItem("cartItems", JSON.stringify(existingData));

            if (existingData.length === 0) {
                $('.mini-cart-content').removeClass('mini-cart-content-toggle');
                // setTimeout(() => {
                //     $(this).parent().remove();
                // }, 1000)
                // return
            }
            $(this).parent().remove();
        });

        $("#success-alert").hide();

        $(".form-item").submit(function (e) {
            e.preventDefault();
            var existingData = JSON.parse(localStorage.getItem("cartItems")) || [];
            // Extract SKU and selected image (if present)
            var formElement = this;
            var sku = $(formElement).find(".product-info a").text();
            var imageSrc = $(formElement).find("a img").attr("src");

            var formData = {
                sku: sku,
                image: imageSrc,
                qty: 1

            };
            var existingItemIndex = existingData.findIndex(item => item.sku === sku);

            if (existingItemIndex !== -1) {
                // If the item exists, increment the quantity
                existingData[existingItemIndex].qty += 1;
            } else {
                existingData.push(formData);
            }

            saveToLocalStorage();

            function saveToLocalStorage() {
                // Store form data in localStorage
                localStorage.setItem("cartItems", JSON.stringify(existingData));

                var cartCount = existingData.length;

                // Check if there are any items in the cart
                if (existingData.length > 0) {
                    if ($(".mini-cart-items").length === 0) {
                        // Create the mini-cart-items container if it doesn't exist
                        $(".mini-cart-content").prepend('<div class="mini-cart-items"></div>');
                    }

                    $(".mini-cart-items").empty();

                    // Loop through each item in localStorage and append it to the mini-cart
                    $.each(existingData, function (index, item) {
                        var cartItemHTML = `
                                <div class="mini-cart-item clearfix" data-index="${index}">
                                    <div class="mini-cart-item-image">
                                        <a href="#"><img src="${item.image}" alt=""></a>
                                    </div>
                                    <div class="mini-cart-item-des">
                                        <a href="#">${item.sku}</a>
                                        <span>Qty:${item.qty}<span>
                                    </div>
                                    <div class="menu-cart-remove">
                                        <i class="ti-close"></i>
                                    </div>
                                </div>
                            `;
                        $(".mini-cart-items").append(cartItemHTML);
                    });


                } else {
                    // If no items in the cart, show a message
                    $(".mini-cart-items").append('<p>Your cart is empty.</p>');
                }


                $("#cart-count").html(existingData.length); // Show updated cart count
                $("#success-alert").fadeTo(2000, 200).slideUp(200, function () {
                    $("#success-alert").slideUp(200);
                });

            }
        });






        // Call this function to append the cart table to the container
        function renderCartTable() {
            // Get cart items from localStorage
            var existingData = JSON.parse(localStorage.getItem("cartItems")) || [];

            // Grab the container where the table should be inserted
            var basketContainer = $("#load_panier");

            // Check if there are items in localStorage
            if (existingData.length > 0) {
                // Create the table structure
                var cartTableHTML = `
                <table class="shop_table shop_table_responsive cart">
                    <tbody>
            `;

                // Loop through each item in localStorage and generate the table rows
                $.each(existingData, function (index, item) {
                    cartTableHTML += `
                    <tr class="cart_item">
                        <td class="product-remove">
                            <a href="#" class="remove remove-item" title="Remove this product" data-code="${item.sku}">×</a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="#">
                                <img width="57" height="70" src="${item.image}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                            </a>
                        </td>
                        <td class="product-name" data-title="Product">
                            <a href="#">${item.sku}</a>
                        </td>
                        <button class="remove-cart-item">Remove</button>
                    </tr>
                `;
                });

                // Close the table tags
                cartTableHTML += `
                    </tbody>
                </table>
            `;

                // Append the generated table to the basket container
                basketContainer.html(cartTableHTML);
            } else {
                // If no items in the cart, show a message
                basketContainer.html('<p>Your cart is empty.</p>');
            }

            // Add event listener for the remove icon
            $(".remove-item").click(function () {
                // Get the SKU of the item to be removed
                var itemSku = $(this).data("code");

                // Get the current cart items from localStorage
                var existingData = JSON.parse(localStorage.getItem("cartItems")) || [];

                // Remove the item based on SKU
                existingData = existingData.filter(item => item.sku !== itemSku);

                // Update the localStorage with the remaining items
                localStorage.setItem("cartItems", JSON.stringify(existingData));

                $("#cart-count").text(existingData.length);

                // Re-render the cart table
                renderCartTable();
            });
        }
        // Call renderCartTable function when the page loads or when you need to display the cart table
        renderCartTable(); // For example, this will run immediately when the page loads
    });

    let currentIndex = 0; // Track the current position of the products

    function fetchProducts(offset = 0, limit = 5) {
        // Fetch the JSON file (adjust path if necessary)
        $.getJSON('products.json', function (data) {
            const productList = $('.product-list');
            // Slice the data to get the chunk of products to display
            const productsToDisplay = data.slice(offset, offset + limit);
            // Loop through each product and create HTML content
            data.forEach(function (product) {
                const productHtml = `
             <li class="product">
              <form method="post" id="form-item-${product.product_id}" class="productForm form-item">
                  <input id="id_produit" name="id_produit" type="hidden" value="${product.product_id}">
                  <div class="product-holder">
                      <div class="product-badge discount">${product.product_badge}</div>
                      <a class="Quick"><img loading="lazy" src="${product.img_src}" alt="${product.product_info}"></a>
                      <div class="shop-action-wrap">
                          <ul class="shop-action">
                              <li><a class="Quick"><i class="fi flaticon-view"></i></a></li>
                              <li><button title="Request for price" type="submit"><i class="fi flaticon-shopping-cart"></i></button></li>
                          </ul>
                      </div>
                  </div>
                  <div class="product-info">
                      <h4><a title="Quick view">${product.product_info}</a></h4>
                  </div>
              </form>
              <div class="quick-view-single-product">
                  <div class="view-single-product-inner clearfix">
                      <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                      <div class="img-holder">
                          <img data-src="${product.img_src}" alt="${product.product_info}">
                      </div>
                      <div class="product-details">
                          <h4>${product.product_info}</h4>
                          <div class="thb-product-meta-before">
                              <div class="product_meta">
                                  <span class="sku_wrapper">SKU : <span class="sku">${product.sku}</span></span>
                                  <span class="sku_wrapper">Brand : ${product.brand}</span>
                                  <span class="posted_in">Metal color : ${product.metal_color}</span>
                                  <span class="tagged_as">Metal Purity : ${product.metal_purity}</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </li>
          `;

                // Append the generated HTML to the Owl Carousel container
                productList.append(productHtml);
            });
            let owl = $('.product-list')
            owl.owlCarousel({
                autoplay: false,
                smartSpeed: 300,
                loop: true,
                autoplayHoverPause: true,
                dots: false,
                lazyLoad: true,

                nav: true,
                navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },

                    450: {
                        items: 2,
                        margin: 15
                    },

                    550: {
                        items: 3,
                        margin: 15
                    },

                    1200: {
                        items: 4
                    }
                }
            });
        });
    }


    $(document).ready(function () {
        fetchProducts(currentIndex, 5); // Load 5 products initially
    });




</script>


</html>