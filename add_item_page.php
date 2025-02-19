<!DOCTYPE html>
<html>
<head>
    <title>Camping4You- Shopping</title>
</head>
<body>
    <header>
        <h1>Camping4You</h1>
    </header>
    <main>
        <h1>Add Item</h1>
        <div>
            <a href="index.php">Home</a>
            <a href="signup_page.php">Sign in</a>
        </div>
        <form action="." method="post">
            <input type="hidden" name="action" value="add">
            <label>Name:</label>
            <select name="productkey">
                <?php foreach($products as $key => $product) :
                    $cost = number_format($product['cost'], 2);
                    $name = $product['name'];
                    $item = $name . ' ($' . $cost . ')';
                ?>
                    <option value="<?php echo $key; ?>">
                        <?php echo $item; ?>
                    </option>
                <?php endforeach; ?>
                </select><br>

                <label>Quantity:</label>
                <select name="itemqty">
                <?php for($i = 1; $i <= 10; $i++) : ?>
                    <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </option>
                <?php endfor; ?>
                </select><br>

                <label>&nbsp;</label>
                <input type="submit" value="Add Item">
        </form>
        <p><a href=".?action=show_cart">View Cart</a></p>
    </main>
</body>
</html>