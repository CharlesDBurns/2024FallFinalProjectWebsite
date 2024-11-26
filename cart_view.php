<!DOCTYPE html>
<html>
<head>
    <title>Camping4You- Shopping</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <h1>Camping4You</h1>
    </header>
    <main>
        <h1>Your Cart</h1>
        <?php if (empty($_SESSION['cart']) || count($_SESSION['cart']) == 0) : ?>
            <p>There are no items in your cart.</p>
        <?php else: ?>
            <form action="." method="post">
                <input type="hidden" name="action" value="update">
                <table>
                    <tr id="cart_header">
                        <th>Item</th>
                        <th>Item Cost</th>
                        <th>Quantity</th>
                        <th>Item Total</th>
                    </tr>
                <?php foreach($_SESSION['cart'] as $key => $item) : 
                    $cost = number_format($item['cost'], 2);
                    $total = number_format($item['total'], 2);
                ?>
                    <tr>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td>
                            $<?php echo $cost; ?>
                        </td>
                        <td>
                            <input type="text" class="cart_qty"
                                name="newqty[<?php echo $key; ?>]"
                                value="<?php echo $item['qty']; ?>">
                        </td>
                        <td>
                            $<?php echo $total; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    <tr id="cart_footer">
                        <td><b>Subtotal</b></td>
                        <td>$<?php echo get_subtotal(); ?></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Update Cart"/>
                        </td>
                    </tr>
                </table>
            <p>Click "Update Cart" to update changes of quantity in your 
                cart.<br> Enter 0 for quantity to remove said item.
            </p>
            </form>
        <?php endif; ?>
        <p><a href="add_item_page.php">Add Item</a></p>
        <p><a href="">Empty Cart</a></p>
            
    </main>
</body>
</html>