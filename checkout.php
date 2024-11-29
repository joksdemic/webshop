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


<div class="container-checkout">

    <div class="total-price">
        <h3><mark class="hig">Ukupan iznos za plaćanje: <?php echo number_format($totalPrice, 2); ?> RSD</mark></h3>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <div class="row">

            <div class="col-md-6">
                <label class="name">Ime*</label>
                <input class="form-control" type="text" id="name" name="name" value="<?php echo $name; ?>">
                <span class="error"><?php echo $name_err; ?></span>
            </div>

            <div class="col-md-6">
                <label>Prezime*</label>
                <input class="form-control" type="text" name="lastname" value="<?php echo $lastname; ?>">
                <span class="error"><?php echo $lastname_err; ?></span>
            </div>

            <div class="col-md-6">
                <label>Email*</label>
                <input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $email_err; ?></span>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <label>Država*</label>
                <select class="form-control" name="country">
                    <option value="">Izaberite državu</option>
                    <option value="AF">Afganistan</option>
                    <option value="AL">Albanija</option>
                    <option value="DZ">Alžir</option>
                </select>
                <span class="error"><?php echo $country_err; ?></span>
            </div>

            <div class="col-md-6">
                <label>Grad*</label>
                <input class="form-control" type="text" name="city" value="<?php echo $city; ?>">
                <span class="error"><?php echo $city_err; ?></span>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6" id="postal">
                <label>Poštanski broj*</label>
                <input class="form-control" type="text" name="zip" value="<?php echo $zip; ?>">
                <span class="error"><?php echo $zip_err; ?></span>

            </div>

            <div class="col-md-6" id="adress">

                <label>Adresa*</label>
                <input class="form-control" type="text" name="address" value="<?php echo $address; ?>">
                <span class="error"><?php echo $address_err; ?></span>

            </div>

            <div class="col-md-6" id="flat">
                <label>Broj stana</label>
                <input class="form-control" type="text" name="flat" value="<?php echo $flat; ?>">
                <span class="error"><?php echo $flat_err; ?></span>
            
            </div>

        </div>

        <div class="payment-method mt-5">

            <div class="row d-flex">

                <div class="col-md-4">
                    <input name="payment" id="radio1" class="mr-2 css-checkbox" type="radio" value="cash" <?php echo ($payment == 'cash') ? 'checked' : ''; ?>> <span>Plaćanje pouzećem</span>
                </div>

                <div class="col-md-4">
                    <input name="payment" id="radio2" class="mr-2 css-checkbox" type="radio" value="paypal" <?php echo ($payment == 'paypal') ? 'checked' : ''; ?>> <span>PayPal</span>
                </div>

                <div class="col-md-4" id="mb">
                    <input name="payment" id="radio3" class="mr-2 css-checkbox" type="radio" value="mbanking" <?php echo ($payment == 'mbanking') ? 'checked' : ''; ?>> <span>MBanking</span>
                    <p>Platite putem mobilne aplikacije vaše banke</p>
                </div>

            </div>

            <span class="error"><?php echo $payment_err; ?></span>
            <input name="checkboxG2" type="checkbox" required> I accept the <a href="#">terms & conditions</a>

        </div>

        <button type="submit" class="btn btn-checkout">Izvršite plaćanje</button>

    </form>
</div>


<?php loadPartial('footer'); ?>
<script src="public/js/script.js"></script>
</body>
</html>  