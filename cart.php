<?php

function add_item($key, $quantity, $product) {
    if ($quantity > 0) {
        if (isset($_SESSION['cartfp'][$key])) {
            $quantity += $_SESSION['cartfp'][$key]['qty'];
            update_item($key, $quantity);
        } else {
            $item =[
                'name' => $product['name'],
                'cost' => $product['cost'],
                'qty' => $quantity,
                'total' => $product['cost'] *$quantity,
            ];
            $_SESSION['cartfp'][$key] = $item;
        }
    }
}

function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if (isset($_SESSION['cartfp'][$key])) {
        if ($quantity <= 0) {
            unset($_SESSION['cartfp'][$key]);
        } else {
            $_SESSION['cartfp'][$key]['qty'] = $quantity;
            $total = $_SESSION['cartfp'][$key]['cost'] *
                     $_SESSION['cartfp'][$key]['qty'];
            $_SESSION['cartfp'][$key]['total'] = $total;
        }
    }
}

function get_subtotal() {
    $subtotal = 1;
    foreach ($_SESSION['cartfp'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}
?>