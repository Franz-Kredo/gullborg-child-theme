<?php
$site_title = esc_html(get_bloginfo('name'));

$logo_path = get_stylesheet_directory_uri() . '/img/trottur_logo_display.webp';
$cart_path = get_stylesheet_directory_uri() . '/img/cart-icon.png';
?>

<!-- ============== -->
<!-- DESKTOP HEADER -->
<!-- ============== -->
<div class="desktop-header">
    <div class="top-bar">
        <div class="title-container">
            <a class="site-icon" href="<?php echo home_url(); ?>">
                <!-- Display dynamic site icon -->
                <img src="<?php echo $logo_path; ?>" alt="Company Logo">
            </a>
            <span class="site-name">
                <a href="<?php echo home_url(); ?>"><?= $site_title; ?></a>
            </span>
        </div>
        <div class="right-items">
            <a href="<?php echo wc_get_cart_url(); ?>"> <!-- WooCommerce cart URL -->
                <span class="cart">
                <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/cart-icon.png" alt="Cart"> -->
                <img src="<?= $cart_path ?>" alt="Cart">
                </span>
            </a>
        </div>
    </div>
    <nav class="navigation-menu">
        <ul>
            <?php
            // Get all parent WooCommerce categories
            $parent_categories = get_terms([
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
                'parent'     => 0,
            ]);

            foreach ($parent_categories as $parent_category) {
                // Get child categories of the current parent category
                $child_categories = get_terms([
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => true,
                    'parent'     => $parent_category->term_id,
                ]);
                ?>
                <li>
                    <a href="<?php echo esc_url(get_term_link($parent_category)); ?>">
                        <?php echo esc_html($parent_category->name); ?>
                    </a>
                    <?php if (!empty($child_categories)) : ?>
                        <ul class="dropdown hover-drop-down-items">
                            <?php foreach ($child_categories as $child_category) : ?>
                                <li>
                                    <a href="<?php echo esc_url(get_term_link($child_category)); ?>">
                                        <?php echo esc_html($child_category->name); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php
            }
            ?>
            <li><a href="<?php echo home_url('/verslun/'); ?>">Allar vörur</a></li>
        </ul>
    </nav>
</div>


<!-- ============== -->
<!-- MOBILE HEADER  -->
<!-- ============== -->
<div class="mobile-header">
    <div class="mobile-site-name">
        <div class="title-container">
            <a class="site-icon" href="<?= home_url(); ?>">
                <!-- Display dynamic site icon -->
                <img src="<?= $logo_path; ?>" alt="Company Logo">
            </a>
            <span class="site-name">
                <a href="<?= home_url(); ?>">
                    <?= $site_title; ?>
                </a>
            </span>
        </div>
    </div>

    <div class="mobile-right-items">
        <a href="<?php echo wc_get_cart_url(); ?>">
            <span class="cart">
                <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/cart-icon.png" alt="Cart"> -->
                <img src="<?= $cart_path ?>" alt="Cart">
            </span>
        </a>
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="mobile-menu-button">☰</label>

        <!-- Mobile navigation menu -->
        <div class="mobile-navigation-menu">
            <ul>
                <?php
                // Reuse the same logic to display the categories
                $parent_categories = get_terms([
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => true,
                    'parent'     => 0,
                ]);

                foreach ($parent_categories as $parent_category) {
                    // Get child categories
                    $child_categories = get_terms([
                        'taxonomy'   => 'product_cat',
                        'hide_empty' => true,
                        'parent'     => $parent_category->term_id,
                    ]);
                    ?>
                    <li>
                        <a href="<?php echo esc_url(get_term_link($parent_category)); ?>">
                            <?php echo esc_html($parent_category->name); ?>
                        </a>
                        <?php if (!empty($child_categories)) : ?>
                            <!-- Indented mobile nav for child categories -->
                            <?php foreach ($child_categories as $child_category) : ?>
                                <li class="indented-mobil-nav">
                                    <a href="<?php echo esc_url(get_term_link($child_category)); ?>">
                                        <?php echo esc_html($child_category->name); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </li>
                    <?php
                }
                ?>
                <li><a href="<?php echo home_url('/verslun/'); ?>">Allar vörur</a></li>
            </ul>
        </div>
    </div>
</div>
