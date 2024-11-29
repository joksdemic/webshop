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


$name = $lastname = $email = $country = $city = $zip = $address = $payment = $flat = "";
$name_err = $lastname_err = $email_err = $country_err = $city_err = $zip_err = $address_err = $payment_err = $flat_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (empty(trim($_POST["name"]))) {
        $name_err = "Molimo unesite vaše ime.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", trim($_POST["name"]))) {
        $name_err = "Ime može da sadrži samo slova i razmake.";
    } else {
        $name = trim($_POST["name"]);
    }

    if (empty(trim($_POST["lastname"]))) {
        $lastname_err = "Molimo unesite vaše prezime.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", trim($_POST["lastname"]))) {
        $lastname_err = "Prezime može da sadrži samo slova i razmake.";
    } else {
        $lastname = trim($_POST["lastname"]);
    }

    if (empty(trim($_POST["email"]))) {
        $email_err = "Molimo unesite vaš email.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Molimo unesite ispravnu email adresu.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["country"]))) {
        $country_err = "Molimo izaberite vašu državu.";
    } else {
        $country = trim($_POST["country"]);
    }

    if (empty(trim($_POST["city"]))) {
        $city_err = "Molimo unesite vaš grad.";
    } else {
        $city = trim($_POST["city"]);
    }

    if (empty(trim($_POST["zip"]))) {
        $zip_err = "Molimo unesite vaš poštanski broj.";
    } elseif (!preg_match("/^[0-9]{5}$/", trim($_POST["zip"]))) {
        $zip_err = "Treba 5 cifara.";
    } else {
        $zip = trim($_POST["zip"]);
    }

    if (empty(trim($_POST["address"]))) {
        $address_err = "Molimo unesite vašu adresu.";
    } else {
        $address = trim($_POST["address"]);
    }

    if (empty($_POST["payment"])) {
        $payment_err = "Molimo odaberite način plaćanja.";
    } else {
        $payment = $_POST["payment"];
    }

    if (empty($name_err) && empty($lastname_err) && empty($email_err) && empty($country_err) && empty($city_err) && empty($zip_err) && empty($address_err) && empty($payment_err)) {
        $_SESSION['form_success'] = "Uspešno ste poslali formu!";
        $_SESSION['payment_complete'] = true;
        unset($_SESSION['cart']);
        header("Location: thankYou.php");
        exit();
    }
}

?>

<?php loadPartial('footer'); ?>
<script src="public/js/script.js"></script>
</body>
</html>  