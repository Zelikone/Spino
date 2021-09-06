<?php

session_start();

if ( isset( $_POST["action"] ) ) {

	if ( $_POST["action"] == 'add' ) {

		if ( isset( $_SESSION["shop_cart"] ) ) {
			$in_cart = 0;
			foreach ($_SESSION["shop_cart"] as $keys => $values)  {
				if ( $_SESSION["shop_cart"][$keys]['product_id'] == $_POST['id'] ) {
					$in_cart++;
					$_SESSION["shop_cart"][$keys]['product_quantity'] = $_SESSION["shop_cart"][$keys]['product_quantity'] + $_POST['quantity'];
				}
			}
			if ( $in_cart == 0 ) {
				$item_array = array(
					'product_id' => $_POST["id"],
					'product_title' => $_POST["title"],
					'product_type' => $_POST["type"],
					'product_image' => $_POST["image"],
					'product_price' => $_POST["price"],
					'product_quantity' => $_POST["quantity"]
				);
				$_SESSION["shop_cart"][] = $item_array;
			}
		}	else {
			$item_array = array(
				'product_id' => $_POST["id"],
				'product_title' => $_POST["title"],
				'product_type' => $_POST["type"],
				'product_image' => $_POST["image"],
				'product_price' => $_POST["price"],
				'product_quantity' => $_POST["quantity"]
			);
			$_SESSION["shop_cart"][] = $item_array;
		}
	}

	if ( $_POST["action"] == 'remove' ) {
		$total_price = 0;
		$total_items = 0;	
		foreach ($_SESSION["shop_cart"] as $keys => $values) {
			if ( $values['product_id'] == $_POST['id'] ) {
				unset( $_SESSION["shop_cart"][$keys] );
			} else {
				$total_price = $total_price + ($_SESSION["shop_cart"][$keys]['product_price'] * $_SESSION["shop_cart"][$keys]['product_quantity']);
				$total_items++;
			}
		}

		$data = array(
			'total_price' => $total_price,
			'total_items' => $total_items
		);

		echo json_encode($data);		
	}

	if ( $_POST["action"] == 'change' ) {
		$item_price = 0;
		$total_price = 0;
		foreach ($_SESSION["shop_cart"] as $keys => $values) {
			if ( $values['product_id'] == $_POST['id'] ) {
				$_SESSION["shop_cart"][$keys]['product_quantity'] = $_POST['quantity'];
				$item_price = $_SESSION["shop_cart"][$keys]['product_quantity'] * $_SESSION["shop_cart"][$keys]['product_price'];
			}
			$total_price = $total_price + ($_SESSION["shop_cart"][$keys]['product_price'] * $_SESSION["shop_cart"][$keys]['product_quantity']);
		}
		$data = array(
			'item_price' => $item_price,
			'total_price' => $total_price
		);
		echo json_encode($data);
	}

}