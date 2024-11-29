<?php 
require_once 'C:\\xampp\\htdocs\\webshop\\helpers.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {

    if (isset($_POST['product_id'], $_POST['product_name'], $_POST['product_price'])) {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];

        $product_quantity = isset($_POST['product_quantity']) ? (int)$_POST['product_quantity'] : 1;

        if ($product_quantity < 1) {
            $product_quantity = 1;
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $product_found = false;
        foreach ($_SESSION['cart'] as &$product) {
            if ($product['id'] == $product_id) {

                $product['quantity'] += $product_quantity;
                $product_found = true;
                break;
            }
        }

        if (!$product_found) {
            $_SESSION['cart'][] = [
                'id' => $product_id,
                'name' => $product_name,
                'price' => $product_price,
                'quantity' => $product_quantity
            ];
        }
    } else {
       
        echo "Nisu prosleđeni potrebni podaci za proizvod!";
    }
}

if (isset($_POST['update_quantity']) && isset($_POST['product_id']) && isset($_POST['product_quantity'])) {
    $product_id = $_POST['product_id'];
    $product_quantity = (int)$_POST['product_quantity'];

    if ($product_quantity < 1) {
        $product_quantity = 1;
    }

    foreach ($_SESSION['cart'] as &$product) {
        if ($product['id'] == $product_id) {
            $product['quantity'] = $product_quantity;
            break;
        }
    }
}

if (isset($_SESSION['payment_complete']) && $_SESSION['payment_complete']) {
    $_SESSION['cart'] = [];
    unset($_SESSION['payment_complete']); 
}

function calculateTotalPrice() {
    $total = 0;
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $total += $product['price'] * $product['quantity']; 
        }
    }
    return $total;
}

$totalPrice = calculateTotalPrice(); 

loadPartial('head');
loadPartial('navbar');
?>

<div class="container-cart">
    <h2>Korpa</h2>

    <table class="table table-bordered bg-white">
        <tr>
            <th id="product">Proizvod</th>
            <th id="price">Cena</th>
            <th id="quantity">Količina</th>
            <th id="total">Ukupno</th>
        </tr>
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
            foreach ($_SESSION['cart'] as $product):
        ?>
        <tr>
            <td><mark class="highlight"><?php echo $product['name']; ?></mark></td>
            <td><mark class="highlight"><?php echo number_format($product['price'], 2, ',', '.'); ?> rsd</mark></td>
            <td>
                <form method="post" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="number" name="product_quantity" value="<?php echo $product['quantity']; ?>" min="1" onchange="this.form.submit()">
                    <input type="hidden" name="update_quantity" value="1">
                </form>
            </td>
            <td><mark class="highlight"><?php echo number_format($product['price'] * $product['quantity'], 2, ',', '.'); ?> rsd</mark></td>
        </tr>
        <?php
            endforeach;
        else:
        ?>
        <tr>
            <td colspan="5" class="text-center">Vaša korpa je prazna</td>
        </tr>
        <?php endif; ?>
    </table>

    <div class="total-price">
        <h3>Ukupna cena: <?php echo number_format($totalPrice, 2); ?> RSD</h3>
    </div>

    <div class="text-right">
        <button class="btn mr-3"><a href="./shop.php">Nastavi sa kupovinom</a></button>
        <?php if ($totalPrice > 0): ?>
        <button class="btn" id="checkoutBtn"><a href="./checkout.php">Izvršite plaćanje</a></button>
    <?php else: ?>
        <button class="btn" id="checkoutBtn"><a href="./shop.php">Izvršite plaćanje</a></button>
    <?php endif; ?>
    </div>
</div>
<?php loadPartial('footer'); ?>
<script src="public/js/script.js"></script>
</body>
</html>