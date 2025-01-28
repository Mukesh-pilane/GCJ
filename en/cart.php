<?php
include 'header.php';
?>

    <!-- start page-title -->
    <section class="page-title">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2>shopping cart</h2>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">Home</a></li>
                                <li>shopping cart</li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start checkout-section -->
    <section class="checkout-section section-padding">
        <div class="container-1410">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="woocommerce">

                        <form name="checkout" method="post" class="checkout woocommerce-checkout"
                            action="https://Gold Craft Jewelleryonline.com/en/saveOrder">

                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">

                                        <h3>Personal Information</h3>



                                        <p class="form-row form-row form-row-first validate-required"
                                            id="billing_last_name_field">
                                            <label for="billing_last_name" class="">Last name <abbr class="required"
                                                    title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="nom" id="billing_last_name"
                                                placeholder="" value="" />
                                        </p>
                                        <p class="form-row form-row form-row-last validate-required"
                                            id="billing_first_name_field">
                                            <label for="billing_first_name" class="">First name<abbr class="required"
                                                    title="required">*</abbr></label>
                                            <input type="text" required="" class="input-text " name="prenom"
                                                id="billing_first_name" placeholder="" value="" />
                                        </p>
                                        <div class="clear"></div>



                                        <p class="form-row form-row form-row-first validate-required validate-email"
                                            id="billing_email_field">
                                            <label for="billing_email" class="">Email </label>
                                            <input type="email" class="input-text " name="email" id="billing_email"
                                                placeholder="" autocomplete="email" value="" />
                                        </p>

                                        <p class="form-row form-row form-row-last validate-required validate-phone"
                                            id="billing_phone_field">
                                            <label for="billing_phone" class="">Mobile phone </label>
                                            <input type="tel" class="input-text " name="telf" id="billing_phone"
                                                placeholder="" autocomplete="tel" value="" />
                                        </p>
                                        <div class="clear"></div>



                                    </div>
                                </div>

                                <button onclick="window.open('index-2.html'); return true;" type="submit"
                                    class="button alt" id="place_order" value="Place order">Confirm price request
                                    and send via WhatsApp<i class="ti-comments"></i></button>
                            </div>

                            <h3 id="order_review_heading">Cart</h3>

                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <div class="woocommerce">
                                    <div id="load_panier">

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end checkout-section -->


    <section class="instagram-section">
        <div class="container-1410">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="instagram-inner">
                        <div class="instagram-text">
                            <h3>Follow us on instagram</h3>
                            <p>@Gold Craft Jewelleryjewellery</p>
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
</div>
<!-- end of page-wrapper -->

<?php
include 'footer.php';
?>