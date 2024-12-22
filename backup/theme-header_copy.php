<?php
$site_title = get_bloginfo('name');
?>

<div class="desktop-header">
    <div class="top-bar">
        <div class="title-container">
        <a class="site-icon" href="http://trottur.local/">
        <img src="http://trottur.local/wp-content/uploads/2024/12/trottur_logo_comp.webp" alt="Company Logo" ></a>
        <span class="site-name"><a href="http://trottur.local/"><?= $site_title ?></a></span>
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
        <img src="http://trottur.local/wp-content/uploads/2024/12/trottur_logo_comp.webp" alt="Company Logo" ></a>
        <span class="site-name"><a href="http://trottur.local/"><?= $site_title ?></a></span>
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


