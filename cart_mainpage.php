<?php
require_once('cart.php');

$lifetime = 60 * 60 * 24 * 365 * 4;
session_set_cookie_params($lifetime, '/');
session_start();

if (empty($_SESSION['cartfp'])) { $_SESSION['cartfp'] = []; }

$products = [
    'BCS-1111' => ['name' => 'Tent', 'cost' => '40.50'],
    'BCS-1212' => ['name' => 'Lighter', 'cost' => '5.99'],
    'MCS-1221' => ['name' => 'Climbing Gear', 'cost' => '75.99'],
    'MCS-1331' => ['name' => 'Climbing Rope', 'cost' => '54.00'],
    'CCS-2112' => ['name' => 'One-Person Canoe', 'cost' => '60.50'],
    'CCS-2222' => ['name' => 'Two-Person Canoe', 'cost' => '80.50'],
    'CCS-2332' => ['name' => 'Canoe Oar', 'cost' => '35.99'],
];

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_add_item';
    }
}

switch($action) {
    case 'add':
        $product_key = filter_input(INPUT_POST, 'productkey');
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        $product = $products[$product_key];
        add_item($product_key, $itemqty, $product);
        header('Location: .?action=show_cart');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cartfp'][$key]['qty'] != $qty) {
                update_item($key, $qty);
            }
        }
        header('Location: .?action=show_cart');
        break;
    case 'show_cart':
        include('cart_view.php');
        break;
    case 'show_add_item':
        include('add_item_page.php');
        break;
    case 'empty_cart':
        unset($_SESSION['cartfp']);
        include('cart_view.php');
        break;
}