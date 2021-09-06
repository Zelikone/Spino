<?php

$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$phone = trim($_POST["phone"]);
	$products = json_decode($_POST["products"]);
	$total = trim($_POST["total"]);

	$admin_email = trim($_POST["admin_email"]);
	$project_name = trim($_POST["project_name"]);
	$form_subject = 'Заказ с сайта ' . $project_name;
	$noreply_email = trim($_POST["noreply_email"]);

	foreach ( $_POST as $key => $value ) {
		switch ($key) {
			case 'name' : $field = 'Имя'; break;
			case 'email' : $field = 'E-mail'; break;
			case 'phone' : $field = 'Телефон'; break;
		}		
		if ( $key != 'products' && $key != 'total' && $key != 'admin_email' && $key != 'project_name' ) $message .= "
		" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$field</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";		
	}

	$list = '<tr style="background-color: #f8f8f8;">
	<td style="text-align: center; font-weight: 700; padding: 10px; border: #e9e9e9 1px solid;">#</td>
	<td style="text-align: center; font-weight: 700; padding: 10px; border: #e9e9e9 1px solid;">ID</td>
	<td style="text-align: center; font-weight: 700; padding: 10px; border: #e9e9e9 1px solid;">Изображение товара</td>
	<td style="text-align: center; font-weight: 700; padding: 10px; border: #e9e9e9 1px solid;">Подзаголовок/Тип товара</td>
	<td style="text-align: center; font-weight: 700; padding: 10px; border: #e9e9e9 1px solid;">Наименование товара</td>
	<td style="text-align: center; font-weight: 700; padding: 10px; border: #e9e9e9 1px solid;">Цена за 1 шт.</td>
	<td style="text-align: center; font-weight: 700; padding: 10px; border: #e9e9e9 1px solid;">Кол-во единиц</td>
	<td style="text-align: center; font-weight: 700; padding: 10px; border: #e9e9e9 1px solid;">Суммарная цена</td>
	</tr>';

	foreach ( $products as $value ) {
		$list .= '<tr>
		<td style="text-align: center; padding: 10px; border: #e9e9e9 1px solid;">' . $value->num . '</td>
		<td style="text-align: center; padding: 10px; border: #e9e9e9 1px solid;">' . $value->id . '</td>
		<td style="text-align: center; padding: 10px; border: #e9e9e9 1px solid;"><img src="' . $value->image . '" style="max-width: 100px;"></td>
		<td style="text-align: center; padding: 10px; border: #e9e9e9 1px solid;">' . $value->type . '</td>
		<td style="text-align: center; padding: 10px; border: #e9e9e9 1px solid;">' . $value->title . '</td>		
		<td style="text-align: center; padding: 10px; border: #e9e9e9 1px solid;">' . $value->price . '</td>
		<td style="text-align: center; padding: 10px; border: #e9e9e9 1px solid;">' . $value->quantity . '</td>
		<td style="text-align: center; padding: 10px; border: #e9e9e9 1px solid;">' . $value->sum . '</td>
		</tr>';
	}


	$list .= '<tr style="background-color: #f8f8f8;">
	<td colspan="4" style="text-align: right; padding: 10px; border: #e9e9e9 1px solid;">Всего: ' . $value->sum . '</td>
	</tr>';
}

$message = "<table style='width: 100%;'>$message</table><br><br><table style='width: 100%;'>$list</table>";

$wp_email = trim($_POST["noreply_email"]);

function adopt($text) {
	return '=?UTF-8?B?'.base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;

mail($admin_email, adopt($form_subject), $message, $headers);