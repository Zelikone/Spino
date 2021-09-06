<?php

session_start();

$total_price = 0;
$total_items = 0;

$output = '';

if ( !empty($_SESSION["shop_cart"]) ) {	
	foreach ( $_SESSION["shop_cart"] as $keys => $values ) {
		$output .= '<div id="cart-item-' . $values["product_id"] . '" class="cart-item">
		<div class="cart-item-col">
		<div class="cart-item-remove">×</div>
		<div class="cart-item-image">
		<img src="' . $values["product_image"] . '" alt="cart-image">
		</div>
		<div class="cart-item-content">
		<p class="cart-item-subtitle">' . $values["product_type"] . '</p>
		<h3 class="cart-item-title">' . $values["product_title"] . '</h3>
		</div>
		</div>
		<div class="cart-item-col">
		<p class="cart-item-price">
		<span class="cart-item-price_value">' . $values["product_price"] . '</span>
		<span class="cart-item-price_curr">руб.</span>
		</p>
		<div class="cart-item-quantity">
		<button class="cart-item-quantity-minus">
		<i class="fa fa-minus"></i>
		</button>
		<input type="number" min="1" max="99" value="' . $values["product_quantity"] . '" required>
		<button class="cart-item-quantity-plus">
		<i class="fa fa-plus"></i>
		</button>
		</div>
		<p class="cart-item-total">
		<span class="cart-item-price_value">' . ( $values["product_price"] * $values["product_quantity"] ) . '</span>
		<span class="cart-item-price_curr">руб.</span>
		</p>
		</div>
		</div>';

		$total_price = $total_price + ($values["product_price"] * $values["product_quantity"]);
		$total_items++;
	}	
} else {
	$output = '<p class="cart-empty">Корзина пуста</p>';
}

$data = array(
	'cart_content' => $output,
	'total_price' => $total_price,
	'total_items' => $total_items
);

echo json_encode($data);

?>