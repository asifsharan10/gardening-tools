<?php
   error_reporting(0);
   $configFilePath = __DIR__ . DIRECTORY_SEPARATOR . 'bp_config' . DIRECTORY_SEPARATOR . 'site-info.php';
   if (file_exists($configFilePath )) {
   require_once $configFilePath;
   }else{
   echo 'General configuration error';
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cancellation</title>
       <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- Fonts -->
      <link rel='stylesheet' type='text/css' href="<?= $path['css']; ?>/bootstrap.min.css?v=<?= time() ?>">
      <link rel='stylesheet' type='text/css' href="<?= $path['css']; ?>/custom.css?v=<?= time() ?>">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
      <link rel='stylesheet' type='text/css' href="<?= $path['css']; ?>/style.css?v=<?= time() ?>">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
      <link rel='stylesheet' type='text/css' href="<?= $path['css']; ?>/animate.css?v=<?= time() ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="stylesheet" href="bp_config/css/swiper-bundle.min.css" />
      <!-- <script src="bp_config/js/swiper-bundle.min.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

      <style>.col-sm-12{margin-bottom: 10px;}</style>
   </head>
   <body>

   <?php
   $showTrialContinuityVerbiage = false;

   foreach ($products as $product) {
       if ($product['status'] == 'active' && $product['billingModel'] != 1) {
           $showTrialContinuityVerbiage = true;
       }
   }
   ?>

<?php
if (file_exists('bp_config/includes/templates/headers/header' . $pageConfig['header_template'] . '.php')) {
    require 'bp_config/includes/templates/headers/header' . $pageConfig['header_template'] . '.php';
}
?>

<script type="text/javascript">
    $(function(){
        // var total = sessionStorage.getItem('cartTotal');
        // var qty = sessionStorage.getItem('qty');
        // console.log(qty);
        // // $('#cart_amt').html(total);
        // $('#cart_qty').html(qty);
        var productCart = [];
        var tot_pdt_count = <?=$generalConfig['product_count']?>;
        for(i=1;i<=tot_pdt_count;i++){       //total pdt count

            var shoppingCart = JSON.parse(sessionStorage.getItem( 'product-'+i ));
            var cartpdtTotal = productCart.push(shoppingCart);

        }
        //console.log(productCart);
        var cartPdtArrNew = productCart.filter(function (el) {
            return el != null && el != "";
        });

        console.log(cartPdtArrNew);
        sessionStorage.setItem( "cartPdtArr", JSON.stringify(cartPdtArrNew));

        let table = document.getElementById("minicartRow");

        //let table = '<thead><tr><th>id</th><th>name</th><th>age</th></tr></thead><tbody>';

        // let table = $('#cartRO');


        var TotalPrice = {};

        var showCartNumber = false;
        cartPdtArrNew.forEach(function(d) {
            if (d.EnableMaxqty > 1) {
                showCartNumber = true;
                return;
            }
        });

        cartPdtArrNew.forEach(function(d){
            if (d.billModel == '2' || d.billModel == '8') {
                <?php if ($showTrialContinuityVerbiage) { ?>
                table += '<tr id="row-' + d.Id + '" data-product-id="' + d.Id + '" data-product-name="' + d.Name + '">'
                table += '<td><img src="' + d.Image + '" class="img-fluid  mini-pdt-image" id="mini-image-' + d.Id + '"></td>';
                table += '<td><p>' + d.Name + '</p><p class="cart_amount"><span class="cartNumber" id="cartNumber">' + (showCartNumber ? d.Qty : '') + '</span> X <span class="cartPrice" id="cartPrice">$' + d.trlPrice + '</span></p><p class="cart_amount" style="display:none;"> = <span class="cartTotal" id="cartTotal" data-total="' + (d.Qty * d.trlPrice) + '">$' + (d.Qty * d.trlPrice) + '</span></p></td>';
                table += '<td><span class="material-icons close_button close-button" id="close-' + d.Id + '">close</span></td></tr>';
                <?php } ?>
            } else {
                table += '<tr id="row-' + d.Id + '" data-product-id="' + d.Id + '" data-product-name="' + d.Name + '">'
                table += '<td><img src="' + d.Image + '" class="img-fluid  mini-pdt-image" id="mini-image-' + d.Id + '"></td>';
                table += '<td><p>' + d.Name + '</p><p class="cart_amount"><span class="cartNumber" id="cartNumber">' + (showCartNumber ? d.Qty : '') + '</span> X <span class="cartPrice" id="cartPrice">$' + d.Price + '</span></p><p class="cart_amount" style="display:none;"> = <span class="cartTotal" id="cartTotal" data-total="' + d.Total + '">$' + d.Total + '</span></p></td>';
                table += '<td><span class="material-icons close_button close-button" id="close-' + d.Id + '">close</span></td></tr>';
            }
        })

        $('#minicartRow').empty().html(table);

        var miniTotal = sessionStorage.getItem('cartTotal');

        $('.subtotalAmount').html(miniTotal);

        var total = 0;
        $('.cartTotal').each(function(){

            total += parseFloat($(this).data('total'),10);
            //console.log($(this).attr('data-total'));
            //console.log(total)
            $('#subtotalAmount').html(total.toFixed(2));
            $('#cart_amt').html(total.toFixed(2));
        })

        var qtyCol = 0;
        $('.cartNumber').each(function(){

            qtyCol += parseFloat($(this).data('qty'),10);
            $('#cart_qty').html(qtyCol);
        })
        $('.close-button').click(function(){

            console.log($(this).parents('tr').data('product-id'));

            sessionStorage.removeItem($(this).parents('tr').data('product-id'));

            var removeItem = $(this).parents('tr').data('product-id');

            var ar = sessionStorage.getItem( "cartPdtArr");

            for(var i=0; i < ar.length; i++) {
                if(ar[i].Id == removeItem)
                {
                    ar.splice(i,1);

                }
                if(sessionStorage.getItem('cartPdtArrNew') == '[]' || sessionStorage.getItem('cartPdtArrNew') == ''){
                    $('.subtotalAmount').html('0.00');
                    $('#cart_amt').html('0.00');
                    $('.bag_icon').removeClass('active');
                }
            }
            location.reload(true);
            //            $('#cart_amt').html(total);
            // $('#cart_qty').html(qty);
            // $('.subtotalAmount').html(total);
        })

        if(sessionStorage.getItem('cartPdtArr') == '[]' || sessionStorage.getItem('cartPdtArr') == ''){
            //alert('hello');
            $('#minicartRow')
                .empty()
                .html('<tr class="emptyRow"><td colspan="3"><p class="cart_empty">Cart is Empty</p></td></tr>');
            $('#cart_amt').html('0.00');
            $('#cart_qty').html('0');
            $('.subtotalAmount').html('0.00');
            $('.cart_bag').addClass('empty_bag');
            $('.bag_icon').removeClass('active');
        }
    })
</script>


   <div class="py-5">   <div class="container">
         <h1>Cancellations</h1>
         <p>Please fill out the information below to cancel your existing order of <?= $generalConfig['brand_name']; ?>. After completing and submitting this form, your account will be terminated and all billing will be stopped. Once the account has been successfully cancelled, you will receive a cancellation email confirmation. If you are having any trouble and would like assistance please phone our customer support at <?= $generalConfig['phone_number']; ?> during business hours (<?= $generalConfig['customer_service_hours']; ?>) or email us at <?= $generalConfig['email']; ?>.</p>
         
         <?php require 'bp_config/includes/cancellation_form.php'; ?>
      </div> </div>
      
      <?php
      if (file_exists('bp_config/includes/templates/footer/footer' . $pageConfig['footer_template'] . '.php')) {
          require 'bp_config/includes/templates/footer/footer' . $pageConfig['footer_template'] . '.php';
      }
   ?>
   
      <script src="bp_config/js/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="<?= $path['js']; ?>/form.js"></script>
      <script src="<?= $path['js']; ?>/form_validation.js"></script>
      <?php
            $dynamicFont = __DIR__ . DIRECTORY_SEPARATOR . 'bp_config' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'fonts.php';
            if (file_exists($dynamicFont)) {
                require_once $dynamicFont;
            }
        ?>
        <?php
            $dynamicColors = __DIR__ . DIRECTORY_SEPARATOR . 'bp_config' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'colors.php';
            if (file_exists($dynamicColors)) {
                require_once $dynamicColors;
            }
        ?>
   </body>
</html>


