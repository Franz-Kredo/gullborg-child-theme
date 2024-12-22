<?php
/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php /* translators: %s: Customer first name */ ?>
<p><?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>
<?php /* translators: %s: Order number */ ?>
<p><?php printf( esc_html__( 'Við höfum fengið pöntun númer #%s, og við erum að taka hana saman! Leiðbendingar hér fyrir neðan. (język polski na dole)', 'woocommerce' ), esc_html( $order->get_order_number() ) ); ?></p>

<?php

/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/* FRANZ */
?>
<br><hr><h2>Język polski</h2>
<p>Zbieramy Twoje zamówienie i będzie ono gotowe w ciągu godziny, jeżeli zostało złożone w godzinach pracy. Zamówienie znajduje się pod adresem Engjaveg 7, 104 Reykjavík, gdzie dostawą zajmuje się Gullborg Flugeldar.

Uwaga: jeśli złożyłeś zamówienie tuż przed zamknięciem, istnieje mała szansa, że ​​Twoje zamówienie nie będzie gotowe przed zamknięciem. Jeśli wystąpi problem, można zadzwonić do Vignir lub Magnús.<br>Vignir: 698-6620<br>Magnús: 696-1770 <br>(tylko islandzki i angielski)</p>

<h2>Godziny otwarcia</h2>
                    <p><b>28-30.grudzień</b><br>10:00 - 22:00</p> 
                    <p><b>31.grudzień</b><br>10:00 - 16:00</p> 
                    <p><b>2-5. styczeń</b><br>14:00 - 18:00</p> 
                    <p><b>6.styczeń</b><br>10:00 - 18:00</p> 

<?php
/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
