<?php 
require_once 'C:\\xampp\\htdocs\\webshop\\helpers.php';

loadPartial('head'); 
loadPartial('navbar'); 
loadPartial('scroll'); 

session_start();


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

?>

<?php loadPartial('footer'); ?>
<script src="public/js/script.js"></script>
</body>
</html>  