<!-- ============= -->
<!-- GLOBAL STYLES -->
<!-- ============= -->
<style>
	/* Assign global variables */
    :root {
        --primary: #bf0812;
        --accent: #e57373;
        --button-text: #ffffff;
    }
	
	/* Global Buttons */
    body .et_pb_button, body .button{
       background-color: var(--primary) !important;
       color: var(--button-text) !important;
       border-radius: 6px !important;
    }



	/* Front Page Slider Button */
	body .et_pb_fullwidth_header_0 .header-content-container .header-content .et_pb_button_one.et_pb_button, body .et_pb_fullwidth_header_0 .header-content-container .header-content .et_pb_button_two.et_pb_button{
	  background-color: var(--primary) !important;
	}

    
    /* ==== Single Product Page Buttons ==== */
	/* Add to cart button */
    body .et_pb_wc_cart_notice_0_tb_body .wc-forward, body .et_pb_wc_add_to_cart_0_tb_body .button, body .et-db #et-boc .et-l .et_pb_wc_add_to_cart_0_tb_body .button, html .et-db #et-boc .et-l .et_pb_wc_cart_notice_0_tb_body .wc-forward, html .et-db #et-boc .et-l .et_pb_wc_add_to_cart_0_tb_body .button{
       background-color: var(--primary) !important;
    }
    
	/* Added to cart button */
	body #page-container .et_pb_section .et_pb_wc_cart_notice_0_tb_body .wc-forward, body #page-container .et_pb_section .et_pb_wc_cart_notice_0_tb_body button.button, body #page-container .et_pb_section .et_pb_wc_cart_notice_0_tb_body .wc-backward{
		background-color: var(--primary) !important;
	}
    
    /* View cart banner button */
    .button.wc-forward{
       min-width: 156px;
    }
    @media only screen and (max-width: 600px) {
        .woocommerce-message{
            flex-direction: column;
        }
    }

    /* Colored Links */
    #front-page-slider .et_pb_header_content_wrapper a, .opening-hours-container a{
        color: var(--accent) !important;
    }


    /* ==== Cart Page ==== */
    /* Title Bar */
    body .et_pb_wc_cart_products_0 table.cart th{
       background-color: var(--primary);
    }

    /* Update Cart Button (disabled + enabled) */
    body .et_pb_wc_cart_products_0 table.cart button[name="apply_coupon"], body .et_pb_wc_cart_products_0 table.cart button[name="update_cart"]:disabled, body .et_pb_wc_cart_totals_0 a.checkout-button, body .et_pb_wc_cart_totals_1 a.checkout-button{
        background-color: var(--accent) !important;
    }

    body .contactFormTakki .et_pb_button, body .changeButtonsInCart button, body .changeContinueToPaymentButtonOnCartPage a, body button.single_add_to_cart_button, body .lookAtCartButtonProductPage a.wc-forward, body button.et_pb_contact_submit{
        background-color: var(--primary) !important;
    color: var(--button-text) !important;
    }
    /* Continue To Checkout Button */
    body .woocommerce a.button.alt, body .woocommerce-page a.button.alt, body .et_pb_wc_cart_totals_0 a.checkout-button{
        background-color: var(--primary) !important;   
    }

    /* WooCommerce Notices */
    body .et_pb_wc_cart_notice_0 .woocommerce-message, body .et_pb_wc_cart_notice_0 .woocommerce-info, body .et_pb_wc_cart_notice_0 .woocommerce-error{
        background-color: var(--primary) !important;   
    }


    /* ==== Checkout Page ==== */
    /* Link Colors */
    .woocommerce-privacy-policy-link, .woocommerce-terms-and-conditions-link{
        color: var(--primary);
    }

    /* Order Button */
    button[name="woocommerce_checkout_place_order"]{
        background-color: var(--primary) !important;
        color: var(--button-text) !important;
    }
	
	/* Notice Banners */
	div[role=alert] a{
	  color: var(--button-color) !important;
	}


	
</style>


<!-- ============== -->
<!-- GENERAL STYLES -->
<!-- ============== -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    .desktop-header .cart{
		width:30px;
		height:30px;
		display: block;
	}
	.mobile-header .cart img{
        max-width: 30px !important;
		max-height:30px !important;
    
    }
    
    .desktop-header {
        font-family: 'Poppins', sans-serif;
        background-color: transparent;
        position: fixed;
        width: 100vw;
        top: 0;
        z-index: 1000;
        white-space: nowrap;
        text-overflow: ellipsis;
        
    }
    
    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 50px;
        background-color: var(--primary);
        
    
    }
    .title-container {
    display: flex;
    align-items: center; /* Centers the icon and text vertically */
    justify-content: center; /* Centers the content horizontally if you need */
}

    
    .site-name {
        text-align: center;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: bold;
        color: white;
        margin-left: 14px;
    }
    .site-name a{
        text-decoration: none;
        color: white;
    }
    .site-name a:hover{
        color: black;
        cursor: pointer;
    }

    .site-icon{
        width: 35px;
    }
	
	.site-icon img{
        width: 35px;
    }

    
    .right-items span {
        margin-left: 20px;
        cursor: pointer;
    }
    
    .navigation-menu{
        padding: 12px 120px;
        background-color: black;
        
    }
    
    .navigation-menu ul {
        list-style: none;
        display: flex;
        justify-content: space-around;
        margin: 0;
        padding: 0;
        
    }
    
    .navigation-menu li a {
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        font-size: 16px;
        color: #fff;    
        
        }
    
    .navigation-menu li a:hover {
        color: #ECB01A;
    }
    
    
    /* DROPDOWN DESKTOP CAKES */
    /* Existing styles... */
    
    .navigation-menu li {
        position: relative; /* Added for dropdown positioning */
    }
        
    .hover-drop-down-items{
        font-size: 12px;	
        }
    
    /* Dropdown Styles */
    .navigation-menu .dropdown {
        display: none;
        position: absolute;
        background-color: #000; /* match navbar color */
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    
    .navigation-menu .dropdown li {
        float: none;
        display: block;
    }
    
    .navigation-menu .dropdown li a {
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        color: #fff;
    }
    
    .navigation-menu .dropdown li a:hover {
        background-color: var(--primary);
    }
    
    /* Show dropdown on hover */
    .navigation-menu li:hover .dropdown {
        display: block;
    }
    
    
    .indented-mobil-nav{
        padding-left: 30px;
    }
    
    
    
    /* MOBILE HEADER */
    
    .mobile-header {
        display: none;
        z-index: 1000;
        align-items: center;
        justify-content: space-between;
        background-color: var(--primary);
        padding: 10px 20px;
        top: 0;
        position: fixed;
        width: 100vw;
        left: 0;
        font-family: 'Poppins', sans-serif;
		
    }
    
    
    .mobile-site-name {
        font-size: 25px; /* Adjust as needed */
        font-weight: bold;
        color: white;
        line-height: 1.2;
    }
        
    .mobile-site-name a{
        text-decoration: none;
        color: white;
    }
    .mobile-site-name a:hover{
        color: black;
        cursor: pointer;
    }
    
    .mobile-right-items {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .mobile-right-items span{
        padding: 0;
    }
    
    
    .menu-toggle {
        display: none;
    }
    
    .mobile-menu-button {
        font-size: 40px;
        display: none;
        cursor: pointer;
        /* Style your hamburger button here */
        margin-left: 20px;
		margin-bottom:13px;
		color: black;
    }
    
    .mobile-navigation-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        width: 100vw;
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        z-index: 999;
        top: 80px;
        left: 0;
		overflow-y: auto;
        max-height: 100vh;
		padding-bottom: 200px;
    }
    
    .mobile-navigation-menu ul {
        list-style-type: none;
        padding: 0;
    }
    
    .mobile-navigation-menu li a {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: black;
        border-bottom: 1px solid gray;
    }
    
    
    /* MOBILE DROPDOWN SKOTKOKUR */
    /* Existing styles... */
    
    
    
    /* language switcher */
    .dropdown {
        position: relative;
        display: inline-block;
    }
    
    .dropbtn {
        background-color: transparent;
        width: 72px;
        height: 50px;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: transparent;
        width: 72px;
        height: 50px;
        /* min-width: 160px; */
        /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
        z-index: 1;
        left: -60px;
        top: 4px;
    }
    
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        
    }
    
    .dropdown-content a:hover {
        background-color: gainsboro;
    }
    
    .dropdown:hover .dropdown-content {
        display: block;
    }
    /* .dropdown:active .dropdown-content {
        display: none;
    } */
    
    .dropdown:hover .dropbtn {
        background-color: transparent;
    }
    
    /* ... existing styles ... */
    
    .dropbtn img, .dropdown-content a img {
        height: 20px; /* Adjust the size as needed */
        width: auto;
        margin-right: 5px;
    }
    
    /* ... existing styles ... */
        
    .no-scroll {
        overflow: hidden;
        position: fixed; /* Optional, to ensure the page stays in the same position */
        width: 100%; /* To maintain the width */
    }
    
    
    @media screen and (max-width: 1100px) {
        .desktop-header
     {
            display: none;
        }
        .mobile-header {
            display: flex;
        }
        .mobile-menu-button {
            display: block;
        }
        #menu-toggle:checked + .mobile-menu-button + .mobile-navigation-menu {
            display: block;
        }
    
    }
	
        
    /*#####################################*/
    /*#####################################*/
    /*/*####### footer starts #############*/
    /*#####################################*/
    /*#####################################*/


    .kredo-footer {
        overflow: auto;
        margin-top: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #363637;
        color: white;
        padding: 0;
        top: 0;
        text-align: left;
        white-space: nowrap;
        text-overflow: ellipsis;
        /* position: relative; */
        /* /\ kannski fjarlæga */
        
    }


    .kredo-footer a {
    padding: 5px 5px 5px 0;
    } 



    .kredo-footer a:hover, .footer-phone-email-location a p:hover {
        color: gray;
    }

    .kredo-footer a:hover img {
    text-decoration: none;

    }
        
    .footer-top{
        display: flex;
        justify-content: space-between;
        margin: 37px 261px 0px 80px;
    }

    .footer-top-mob{
        margin: auto;
        justify-content: center;
        align-items: center;
        width: 400px;

    }


    .footer-column {
        margin: 0 20px;
    }

    .footer-bottom {
        /* padding-top: 10px; */
        text-align: center;
        padding-bottom: 17px;
    }
    .line-space-opening-hours b p{
    line-height: 2 !important;
    }
    .kredo-footer p, .kredo-footer a {
        text-decoration: none;
        color: white;
        padding: 0;
    }

    .desktop-only {
        display: none;
    }


    .custom-spacing h3{
        line-height: 0.2;
        margin-top: 26px;
        color: white;
        font-weight: 400;
    }

    .custom-spacing h2{
        line-height: 0.2;
        margin-top: 43px;
        margin-bottom: 10px;
        color: white;
        font-weight: 600;
    }

    .custom-spacing a {
        line-height: 2;
    }
    .custom-spacing p {
        line-height: 1; 
    }



    .gullborg-icon-footer{
        margin-top: 4px;
        width: 200px;
    }

    .gullborg-icon-footer img{
        /*width: 236px;
        height: 84px;*/
        /* FRANZ EDIT */
        width: 200px;
        
    }

    .utility-icons-footer{
        margin-left: 26px;
        width: 23.229px;
        height: 23.195px;
    }

    .fb-icon-footer{
        width: 30px;
        display: block;
        margin: 20px 0;
    }

    .fb-icon-footer img{
        width: 30px;
        height: 30px;
        align-items: center;
        
    }

    .terms-gullborg{
    border-bottom: 1px solid black;
    }


    /* Desktop Styles */
    @media (min-width: 1100px) {
        .desktop-only {
            display: flex;
        }
        .mobile-only {
            display: none;
        }
    }

    /* Mobile Styles */
    @media (max-width: 1100px) {
        .footer-top {
            flex-direction: column;
        }

        .footer-column {
            margin-bottom: 67px;
        }
        .kredo-footer {
        overflow: auto;
        margin-top: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #363637;
        color: white;
        padding: 0;
        top: 0;
        text-align: center;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .fb-icon-footer{
        width: 30px;
        display: block;
        margin: 37px auto 107px auto;
    }
    .gullborg-icon-footer{
        margin-top: 4px;
        display: block;
        margin: 20px auto;
    }
    }

    /* FRANZ EDITS START*/
        .footer-icon-container{
    display: flex;
            flex-direction: column;
    }
        .footer-phone-email-location{
    display: flex;
    flex-direction: column;
    }
    .footer-phone-email-location a{
    line-height: 2;
    font-size: 18px;
    padding: 0;
    }
    /* FRANZ EDITS STOP*/
</style>


<!-- =============== -->
<!-- DESKTOP NAVBAR  -->
<!-- =============== -->

<div class="desktop-header">
    <div class="top-bar">
        <div class="title-container">
        <a class="site-icon" href="http://trottur.local/">
        <img src="http://trottur.local/wp-content/uploads/2024/12/trottur_logo_comp.webp" alt="Company Logo"  style="heigth: 10px;"></a>
        <span class="site-name"><a href="http://trottur.local/">Flugeldasala Þróttar</a></span>
        </div>
        <div class="right-items">
           
            <a href="http://trottur.local/karfa/">
                <span class="cart"><img src="http://trottur.local/wp-content/uploads/2023/12/cart-transformed.png" alt="cart"></span>
            </a>
        </div>
    </div>
    <nav class="navigation-menu">
        <ul>
            <li>
                <a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/skotkokur/">Skotkökur</a>
                <!-- Dropdown Content -->
                <ul class="dropdown hover-drop-down-items">
                    <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/skotkokur/minni-skotkokur">Minni skotkökur</a></li>
                    <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/skotkokur/millistorar-skotkokur">Millistórar skotkökur</a></li>
                    <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/skotkokur/storar-skotkokur">Stórar skotkökur</a></li>
                </ul>
            </li>
            <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/blys/">Blys</a></li>
            <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/rakettur/">Rakettur</a></li>
            <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/gos/">Gos</a></li>
            <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/smavorur/">Smávörur</a></li>
            <li><a href="http://trottur.local/v%C3%B6ruflokkur/oryggisbunadur/">Öryggisbúnaður</a></li>
            <li><a href="http://trottur.local/v%C3%B6ruflokkur/tilbod/">Tilboð</a></li>
            <li><a href="http://trottur.local/verslun/">Allar vörur</a></li>

        </ul>
    </nav>
</div>


<!-- ============== -->
<!-- MOBILE NAVBAR  -->
<!-- ============== -->

<div class="mobile-header">
    <div class="mobile-site-name">
        <div class="title-container">
        <a class="site-icon" href="http://trottur.local/">
        <img src="http://trottur.local/wp-content/uploads/2024/12/trottur_logo_comp.webp" alt="Company Logo"  style="heigth: 10px;"></a>
        <span class="site-name"><a href="http://trottur.local/">Flugeldasala Þróttar</a></span>
        </div>
    </div>
    <div class="mobile-right-items">
        <a href="http://trottur.local/karfa/">
            <span class="cart"><img src="http://trottur.local/wp-content/uploads/2023/12/cart-transformed.png" alt="cart"></span>
        </a>
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="mobile-menu-button">☰</label>
        <div class="mobile-navigation-menu">
            <ul>
                <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/skotkokur/">Skotkökur</a></li>
                <li class="indented-mobil-nav"><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/skotkokur/minni-skotkokur">Minni Skotkökur</a></li>
                <li class="indented-mobil-nav"><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/skotkokur/millistorar-skotkokur">Millistórar Skotkökur</a></li>
                <li class="indented-mobil-nav"><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/skotkokur/storar-skotkokur">Stórar skotkökur</a></li>
                <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/blys/">Blys</a></li>
                <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/rakettur/">Rakettur</a></li>
                <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/gos/">Gos</a></li>
                <li><a href="http://trottur.local/v%C3%B6ruflokkur/flugeldar/smavorur/">Smávörur</a></li>
                <li><a href="http://trottur.local/v%C3%B6ruflokkur/oryggisbunadur/">Öryggisbúnaður</a></li>
                <li><a href="http://trottur.local/v%C3%B6ruflokkur/tilbod/">Tilboð</a></li>
                <li><a href="http://trottur.local/verslun/">Allar vörur</a></li>
            </ul>
        </div>
    </div>
</div>


