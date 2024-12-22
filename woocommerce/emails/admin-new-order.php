<?php
defined( 'ABSPATH' ) || exit;

// Existing header and other content
// do_action( 'woocommerce_email_header', $email_heading, $email );
// Existing header and other content
$email_heading = sprintf( 'Sölunóta #%s', $order->get_order_number() );


$current_site = get_bloginfo('name');
echo "<h1 id='big-email-custom-title'>$current_site</h1>";

if (esc_html($order->get_payment_method_title()) == "Greitt við afhendingu") {
    echo "<p style='font-weight: bold; color: blue; font-size: 22px;'>PÖNTUN ÓGREIDD</p>";
} else {
    echo "<p style='font-weight: bold; color: blue; font-size: 22px;'>Pöntun hefur verið greidd</p>";
}

printf(
    '<p>%s</p>',
    sprintf(
        esc_html__( 'You’ve received the following order from %s:', 'woocommerce' ),
        $order->get_formatted_billing_full_name()
    )
);


// Rest of the email content
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);
do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);
do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email);

if ($additional_content) {
    echo wp_kses_post(wpautop(wptexturize($additional_content)));
}

do_action('woocommerce_email_footer', $email);


// Adding a page break before the new section
echo '<div style="page-break-before: always;">';
echo "<h2 style='text-align: center;'>Afgreiðsluseðill</h2>";

echo "<table border='1' cellpadding='6' cellspacing='0' style='width: 100%; border: 1px solid #eee;'>
    <thead>
        <tr>
            <th>Hillunúmer</th>
            <th>Magn</th>
            <th>Vörunafn</th>
        </tr>
    </thead>
    <tbody>";

foreach ($order->get_items() as $item_id => $item) {
    $product = $item->get_product(); // Get the product object
    if ($product) {
        $product_tags = wp_get_post_terms($product->get_id(), 'product_tag', ['fields' => 'names']);
        $tags_list = !empty($product_tags) ? implode(', ', $product_tags) : 'No Tags'; // Format tags
        $product_name = $item->get_name();
        $quantity = $item->get_quantity(); // Get the quantity of the product

        echo "<tr>
            <td>{$tags_list}</td>
            <td>{$quantity}</td>
            <td>{$product_name}</td>
        </tr>";
    }
}

echo "</tbody></table>";

// Display customer information
$customer_name = $order->get_formatted_billing_full_name();
$order_date = wc_format_datetime($order->get_date_created());
$total_price = $order->get_formatted_order_total();

echo "<br><br>";
echo "<p><strong>Viðskiptavinur:</strong> {$customer_name}</p>";
echo "<p><strong>Dagsetning:</strong> {$order_date}</p>";
echo "<p><strong>Heildarupphæð:</strong> {$total_price}</p>";
echo "</div>";
// Add signature section
echo '<div style="margin-top: 50px; text-align: left;">';
echo '<h3>Undirskriftir</h3>';
echo '<p><strong>Starfsmaður:</strong> ______________________________________________________________</p>';
echo '<p><strong>Viðskiptavinur:</strong> ______________________________________________________________</p>';
echo '</div>';
