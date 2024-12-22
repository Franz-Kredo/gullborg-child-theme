<?php
$site_title = esc_html(get_bloginfo('name'));
$logo_path = get_stylesheet_directory_uri() . '/img/trottur_logo_display.webp';

// info_email = info@$site_url
$info_email = 'info@' . $_SERVER['HTTP_HOST'];
?>
<!-- ================= -->
<!-- UNIVERSAL FOOTER  -->
<!-- ================= -->

<div class="kredo-footer">
    <div class="footer-top desktop-only custom-spacing">
        <div class="footer-column">
        <div class="gullborg-icon-footer"><a href="<?= home_url() ?>"><img src="<?= $logo_path ?>" alt="Company Logo"></a></div>
        </div>
        <div class="footer-column footer-phone-email-location">
            <h2><?php echo get_bloginfo( 'name' ); ?></h2>
            <a href="https://maps.app.goo.gl/Q4L2FtYPDyW8epce9" target="_blank"><b>Staðsetning:</b><br>Engjavegur 7, 104 Reykjavík</a>
            <a href="tel:+3546986620">Vignir: 698-6620</a>
            <a href="tel:+3546961770">Magnús: 696-1770</a>
            <a href="mailto:<?= $info_email ?>" target="_blank"><?= $info_email ?></a>
            <!-- <div class="fb-icon-footer"><a href="https://www.facebook.com/ThrotturKnattspyrna" target="_blank">
                <img  src="http://trottur.local/wp-content/uploads/2023/12/fjolnirFBIcon.webp" alt="Facebook">
            </a>
        </div> -->
        </div>
        <div class="footer-column line-space-opening-hours">
            <h2>Opnunartímar</h2>
            <b><p>28-30.desember:</p></b>
            <p>10:00-22:00</p>
            <b><p>31.desember:</p></b>
            <p>10:00-16:00</p>
            <b><p>2-5.janúar:</p></b>
            <p>14:00-18:00</p>
            <b><p>6.janúar:</p></b>
            <p>10:00-18:00</p>
        </div>
    </div>

    <div class="footer-top-mob mobile-only custom-spacing">
        <div class="footer-column footer-phone-email-location">
            <h2><?= $site_title ?></h2>
            <a href="https://maps.app.goo.gl/Q4L2FtYPDyW8epce9" target="_blank"><b>Staðsetning:</b><br>Lambhagavegur 2-4, 113 Rvk</a>

            <a href="tel:+3546986620">Vignir: 698-6620</a>
            <a href="tel:+3546961770">Magnús: 696-1770</a>
            <a href="mailto:<?= $info_email ?>" target="_blank"><?= $info_email ?></a>
            
        </div>
        <div class="footer-column line-space-opening-hours">
            <h2>Opnunartímar</h2>
            <b><p>28-30.desember:</p></b>
            <p>10:00-22:00</p>
            <b><p>31.desember:</p></b>
            <p>10:00-16:00</p>
            <b><p>2-5.janúar:</p></b>
            <p>14:00-18:00</p>
            <b><p>6.janúar:</p></b>
            <p>10:00-18:00</p>
        </div>
        <div class="footer-column">
            <div class="gullborg-icon-footer"><a href="<?= home_url() ?>"><img src="<?= $logo_path ?>" alt="Company Logo"></a></div>
            <!-- <div class="fb-icon-footer"><a href="https://www.facebook.com/ThrotturKnattspyrna" target="_blank">
                <img  src="http://trottur.local/wp-content/uploads/2023/12/fjolnirFBIcon.webp" alt="Facebook">
            </a>
        </div>     -->
        </div>
    </div>

    <div class="footer-bottom">
        <p>Allur réttur áskilinn - <?php echo date("Y"); ?>© - <a class="terms-gullborg" href="http://trottur.local/almennir-skilmalar/?preferredFlag=http%3A%2F%2Ftrottur.local%2Fwp-content%2Fuploads%2F2022%2F09%2Ficelandic_flag.webp">Skilmálar</a></p>
    </div>
</div>

<script>
    //NO SCROLL
    // Select the first element with the 'menu-toggle' class
    var menuToggle = document.querySelector('.menu-toggle');

    // Function to toggle the 'no-scroll' class on the body
    function toggleScroll() {
        document.body.classList.toggle('no-scroll');
    }

    // Event listener for the menu toggle
    menuToggle.addEventListener('click', function() {
        toggleScroll();
    });    
</script>

