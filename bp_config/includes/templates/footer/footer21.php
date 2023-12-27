

<footer class="footer footer21 footer-background-color" id="footer">
   <div class="container">

    <div class="row">
      <div class="col-lg-6 col-sm-6">
        <div class="mb-5 mb-md-0"> 
          <!--Title-->
          <h5 class="mt-3">Contact Details</h5>
          <div class="spacer"></div>
          <!--/Title--> 
          
          <!--Contact-->
          <ul class="contact-widget">
            <li class="d-flex"> 
              <div class="info mb-3"><?= $generalConfig['address'] ?></div>
            </li>
            <li class="d-flex"> 
              <div class="info  mb-3"><?= $generalConfig['phone_number'] ?></div>
            </li>
            <li class="d-flex">
              <div class="info"><a href="mailto:<?= $generalConfig['email'] ?>"  style="word-break: break-all;"><?= $generalConfig['email'] ?></a></div>
            </li>
          </ul>
          <!--Contact--> 
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-5 mb-lg-0"> 
          <!--Title-->
          <h5 class="mt-3"> About us</h5>
          <div class="spacer"></div>
          <!--/Title-->
          <div class="footer-about">
            <p class="footer-brand"><?= $generalConfig['brand_name'] ?></p>
          </div>
          <div class="footer-cc mt-3">
            <?php if ($card_type['master'] == 'yes') { ?> <img
                      src="./bp_config/images/payment/CardSet<?= $pageConfig['creditCardIcons'] ?>/mastercard.png"> <?php } ?>
            <?php if ($card_type['discover'] == 'yes') { ?><img
                  src="./bp_config/images/payment/CardSet<?= $pageConfig['creditCardIcons'] ?>/discover.png"> <?php } ?>
            <?php if ($card_type['visa'] == 'yes') { ?><img
                  src="./bp_config/images/payment/CardSet<?= $pageConfig['creditCardIcons'] ?>/visa.png"> <?php } ?>
          </div>
        </div>
      </div>


      <div class="col-lg-12">
        <?php
            $billingModel_find = array_column($products, 'billingModel');
            $diff = array_diff($billingModel_find, [1]);
            $show_ingridient_find = array_column($products, 'show_ingredients');
            $found_ingridient = array_search('yes',$show_ingridient_find);
            ?>
        <?php if($found_ingridient !== false) { //if any one active product has the 'show_ingredients' => 'yes', then show it?> 
        <div class="container p-0 mt-5">
            <p>The statements made on our websites have not been evaluated by the FDA (U.S. Food & Drug Administration). This product is not intended to diagnose, cure or prevent any disease. The information provided by this website, email, or this company is not a substitute for a face-to-face consultation with your health care professional and should not be construed as individual medical advice. If there is a change in your medical condition, please stop using our product immediately and consult your health care professional. Do not use if safety seal is broken or missing. For adult use only, keep out of reach of children under 18 years of age.</p>
        </div>
        <?php } ?>
        <ul class="d-flex flex-column justify-content-center align-items-center footer-links">
            <li class="d-flex p-2"> 
              <div class="info"> <?= $generalConfig['fulfillment'] ?></div>
            </li>
            <li class="d-flex p-2"> 
              <div class="info"><?= $generalConfig['return_address'] ?></div>
            </li>
        </ul>
      </div>
      
    </div>
  </div>
  <div class="copyright d-flex justify-content-center footer-links">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 date-main">
          <p>
            &copy; <?php echo date("Y"); ?> <?= $generalConfig['brand_name'] ?>
          </p>
        </div>
        <div class="col-lg-6 corp-main">
          <div class="corp">
            <?= $generalConfig['corp_name'] ?>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</footer>
