<?php
// <!--********************
//     Version 3.4
// ********************-->
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'helper.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'verbiage.php';

$products = array(
    'product1' => array(
        'id' => '11',
        'name' => 'Indoor Plant Pot Flowerpot Wooden Stand',
        'description' => 'Elevate your indoor plant game with our Indoor Plant Pot Flowerpot Wooden Stand. Its sleek design and sturdy construction provide a stylish and stable platform to showcase your favorite foliage.<br><br>
        Package Includes: 1 Indoor Plant Pot Flowerpot Wooden Stand<br>
        Size: 6.10 inches x 6.10 inches x 2.56 inches<br>
        Weight: 0.66 pounds<br>
        Material: Ceramic and Wood<br>
        Color: White and Brown<br>
        Note: Flower/Plant not included',
        'image' => 'products/Garden MCC 5261/Indoor Plant Pot Flowerpot Wooden Stand.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '3.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '4.78'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '5.65'
            ),
            'shop_option4' => array(
                'option_quantity' => '4',
                'option_price' => '6.95'
            ),
            'shop_option5' => array(
                'option_quantity' => '5',
                'option_price' => '7.95'
            ),
            'shop_option6' => array(
                'option_quantity' => '6',
                'option_price' => '8.95'
            ),
            'shop_option7' => array(
                'option_quantity' => '7',
                'option_price' => '9.95'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product2' => array(
        'id' => '12',
        'name' => 'Metal Decoration Folding Trellis Planter',
        'description' => 'Add a touch of elegance to your garden with our Metal Decoration Folding Trellis Planter. This versatile and space-saving design not only supports climbing plants but also doubles as a beautiful decorative piece for your outdoor space.<br><br>
        Package Includes: 1 Metal Decoration Folding Trellis Planter<br>
        Size: 45.67 inches x 8.27 inches x 26.77 inches<br>
        Weight: 1.32 pounds<br>
        Material: Metal<br>
        Color: Black',
        'image' => 'products/Garden MCC 5261/Metal Decoration Folding Trellis Planter.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '11.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '17.95'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '23.95'
            ),
            'shop_option4' => array(
                'option_quantity' => '4',
                'option_price' => '27.95'
            ),
            'shop_option5' => array(
                'option_quantity' => '10',
                'option_price' => '68.74'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product3' => array(
        'id' => '13',
        'name' => 'Garden Farm Fence',
        'description' => 'Keep your garden secure and stylish with our Garden Farm Fence. Made from durable materials, it provides a reliable barrier while enhancing the visual appeal of your outdoor area.<br><br>
        Package Includes: 1 Garden Farm Fence<br>
        Color: Red<br>
        Size: 1.33 inches x 360 inches<br>
        Weight: 0.88 pounds<br>
        Material: Plastic',
        'image' => 'products/Garden MCC 5261/Garden Farm Fence.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '91.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '12.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '19.95'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '24.95'
            ),
            'shop_option4' => array(
                'option_quantity' => '4',
                'option_price' => '29.95'
            ),
            'shop_option5' => array(
                'option_quantity' => '11',
                'option_price' => '78.84'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product4' => array(
        'id' => '14',
        'name' => 'Green Water Sprayer Garden',
        'description' => 'Our Green Water Sprayer Garden is a must-have tool for effortless watering. With its adjustable nozzle and comfortable grip, it ensures precise and efficient irrigation for your plants.<br><br>
        Package Includes: 1 Green Water Sprayer Garden<br>
        Size: 7.09 inches x 4.33 inches<br>
        Weight: 0.22 pounds<br>
        Capacity: 50.72 fluid ounces<br>
        Material: Plastic<br>
        Color: White Sprayer',
        'image' => 'products/Garden MCC 5261/Green Water Sprayer Garden.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '13.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '4.94'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '5.87'
            ),
            'shop_option3' => array(
                'option_quantity' => '5',
                'option_price' => '13.95'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product5' => array(
        'id' => '15',
        'name' => 'Fruit Picker Picking Garden Tool',
        'description' => 'Make fruit picking a breeze with our Fruit Picker Picking Garden Tool. Featuring a lightweight design and extendable handle, it allows you to safely and easily reach high branches and gather delicious fruits.<br><br>
        Package Includes: 1 Fruit Picker Picking Garden Tool<br>
        Material: Metal<br>
        Size: 4 feet x 0.80 feet<br>
        Weight: 2.65 pounds<br>
        Color: Red',
        'image' => 'products/Garden MCC 5261/Fruit Picker Picking Garden Tool.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '14.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '5.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '3',
                'option_price' => '14.95'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product6' => array(
        'id' => '16',
        'name' => 'Garden Solar Lights',
        'description' => 'Light up your garden with our Garden Solar Lights. Powered by the sun, these eco-friendly lights create a magical ambiance while providing illumination and enhancing the beauty of your outdoor space.<br><br>
        Package Includes: 1 Garden Solar Light<br>
        Size: 7.28 inches x 7.28 inches x 27.56 inches<br>
        Weight: 0.88 pounds<br>
        Material: Metal<br>
        Color: White',
        'image' => 'products/Garden MCC 5261/Garden Solar Lights.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '15.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '15.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '6',
                'option_price' => '91.95'
            ),
            'shop_option3' => array(
                'option_quantity' => '8',
                'option_price' => '119.95'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product7' => array(
        'id' => '17',
        'name' => 'Mini Triller Cultivator Garden',
        'description' => 'Take the hassle out of soil preparation with our Mini Triller Cultivator Garden. Its compact size and powerful performance make it ideal for tilling small garden plots, ensuring optimal conditions for planting.<br><br>
        Package Includes: 1 Mini Triller Cultivator Garden<br>
        Color: Green and Black<br>
        Material: Metal<br>
        Size: 11.81 inches x 9.06 inches<br>
        Weight: 12.50 pounds<br>
        ',
        'image' => 'products/Garden MCC 5261/Mini Triller Cultivator Garden.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '15.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '39.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '56.95'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '79.95'
            ),
            'shop_option4' => array(
                'option_quantity' => '4',
                'option_price' => '96.95'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product8' => array(
        'id' => '18',
        'name' => 'Electric Scissor With Steel Blades',
        'description' => 'Trim with precision using our Electric Scissor With Steel Blades. Whether it\'s pruning branches or cutting through tough materials, its sharp blades and ergonomic design make every cutting task effortless and efficient.<br><br>
        Package Includes: 1 Electric Scissor with Steel Blades<br>
        Color: Red and Black<br>
        Size: 11.02 inches x 3.15 inches x 8.66 inches<br>
        Weight: 3.31 pounds<br>
        Material: Stainless Steel and Plastic',
        'image' => 'products/Garden MCC 5261/Electric Scissor With Steel Blades.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '15.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '6.95',          //if trial
        'trialRebillPrice' => '44.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '44.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '64.95'
            ),
            'shop_option3' => array(
                'option_quantity' => '3',
                'option_price' => '86.95'
            ),
            'shop_option4' => array(
                'option_quantity' => '6',
                'option_price' => '149.95'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    ),
    'product9' => array(
        'id' => '19',
        'name' => 'Solar Sunflower Lights',
        'description' => 'Add a whimsical touch to your garden with our Solar Sunflower Lights. These enchanting lights harness solar energy during the day to illuminate your outdoor space with a warm and inviting glow at night.<br><br>
        Size: 16.38 x 8.62 x 3.43 inches<br>
        Weight: 2.24 pounds<br>
        Color: Yellow and Green<br>
        Total 4 lights are included in a package.',
        'image' => 'products/Garden MCC 5261/Solar Sunflower Lights.jpg',
        'show_ingredients' => 'no',
        'ingredients_image' => 'ingredients/keto.png',
        'category' => 'Garden',
        'billingModel' => '1',              // 1=ss|2=trial|3=con|4=SS+trial|5=SS+con|6=trial+con|7= SS+trial+con
        'ssPrice' => '15.95',               //if ss
        'ssShipping' => '0.00',             //if ss
        'ssMaxqty' => '1',                  // 1 for disable qty, 2 for enable qty
        'trialPrice' => '0.00',             //if trial
        'trialShipping' => '5.45',          //if trial
        'trialRebillPrice' => '91.95',       //Rebill price - if trial(after 14 days) 
        'trialMaxqty' => '1',               // 1 for disable qty, 2 for enable qty
        'continuityPrice' => '91.95',       //if continuity
        'continuityShipping' => '3.95',     //if continuity
        'continuityMaxqty' => '1',          // 1 for disable qty, 2 for enable qty
        'straightSaleMultiPrice' => 'yes',  // if yes, only then it take price from below
        'shop_option' => array(
            'shop_option1' => array(
                'option_quantity' => '1',
                'option_price' => '49.95'
            ),
            'shop_option2' => array(
                'option_quantity' => '2',
                'option_price' => '69.95'
            ),
            'shop_option3' => array(
                'option_quantity' => '6',
                'option_price' => '175.95'
            ),
            'shop_option4' => array(
                'option_quantity' => '7',
                'option_price' => '198.95'
            )
        ),
        'enableMaxqty' => '1',               //1 for not display quantity increase/decrease button, any other number is the maximum qty customer can buy
        'sizeOption' => 'no',              //if yes then how size options in product page
        'size_option' => array(
            '0' => 'S',
            '1' => 'M',
            '2' => 'L',
            '3' => 'XL',
            '4' => '2XL',
            '5' => '3XL',
        ),
        'status' => 'active',               //active or inactive
    )        
);

//Website Information
$generalConfig =  array(
    'brand_name' => 'Ever Choice Gardening Tools',
    'website_url' => 'everchoicegardeningtools.com',
    'email' => 'support@everchoicegardeningtools.com',
    'descriptor' => '8442238066everchoicega',
    'corp_name' => 'Taecee Arching Services LLC',
    'phone_number' => '1-(833) 722-7183',
    'address' => '4582 Kingwood Dr STE E #153, Kingwood, Texas, 77345  USA',
    'fulfillment' => 'Fulfillment Ninjas Hub Inc',
    'return_address' => '10802 Capital Ave, Unit 6A, Garden Grove, CA 92843, USA',

    'trial_period' => '14',
    'trial_period_breakdown' => '',
    'shipping_period' => '3-5',
    'shipping_carrier' => 'USPS',
    'customer_service_hours' => '5:00 am - 5:00 pm PST Monday through Sunday',
    'add_stylesheet' => '',
    'maximum_ticket_value' => '500',
    'naming_convention' => array(       //this is the billing model name 
        '1' => 'One Time Sale',              //this is for SS
        '2' => 'Trial',            //this is for trial
        '3' => 'Continuity'        //this is for continuity
    ),
    'product_count' => count($products), //total products count
);

//Website Content
$updateContent = array(
    'slogan'        => Info::$slogan[23],            // choose 1-70   
    'tagline'       => Info::$tagline[44],           // choose 1-70
    'aboutUsTitle'  => Info::$aboutUsTitle[33],      // choose 1-40
    'aboutUs'       => Info::$aboutUs[59],           // choose 1-70
    'shopTitle'     => Info::$shopTitle[20],         // choose 1-40
    'buttonName'    => Info::$buttonName[11],        // choose 1-40
    'popularTitle'  => Info::$popularTitle[1],      // choose 1-40
    'contactTitle'  => Info::$contactTitle[10],      // choose 1-40
    'contactContent'  => Info::$contactContent[64]   // choose 1-70
);

//Website Theme
$pageConfig =  array(
    'header_template' => 21,             // choose 1-30
    'hero_section' => 20,                // choose 1-30
    'product_section' => 10,            // choose 1-30
    'about_section' => 11,               // choose 1-12
    'contact_section' => 1,             // choose 1-10
    'popularProducts_section' => 12,     // choose 1-13
    'cta_section' => 0,                 // choose 1-2
    'features_section' => 7,            // choose 1-9
    'footer_template' => 22,             // choose 1-30

    'product_page' => 1,                // choose 1-2
    'contact_page' => 8,                // choose 1-10
    'cart_page' => 6,                   // choose 1-10
    'checkout_page' => 7,               // choose 1-10

    'relatedProducts_section' => 1,      // choose 1
    // If you want to hide any section select 0

    'indexSectionsOrder' => [ //just order the lines like you want it to be ordered
        'aboutSection',
        'productSection',
        'contactSection',
        'popularProductsection',
        'ctaSection',
        'featuresSection',
    ],
    'font' => 1, // 1-Open Sans ; 2-Alegreya ; 3-Poppins ; 4-Roboto ; 5-Montserrat ; 6-Lato ; 7-Oswald ; 8-Raleway ; 
    // 9-Mulish ; 10-Nunito ; 11-Assistant ; 12-Barlow ; 13-Rubik ; 14-Work Sans ; 15-Mukta

    // CSS Colors for theme using HEX or rgba (Can also write Transparent, white, red or basic colors)
    'primary_color' => 'red',      //Accent Color on most elements like buttons bottom header
    'primary_text_color' => '#fff',    //Text to be used on Primary background color
    'secondary_color' => '#000000',    //Elements which dont have primary color will use this
    'secondary_text_color' => '#fff',  //Text to be used on secondary background color
    // Header Colors
    'topbar_bg_color' => '#4b3f8330',
    'topbar_text_color' => '#222',
    'header_bg_color' => '#fff',
    'header_text_color' => '#222',
    'header_icon_color' => '#4b3f83',
    // Banner and Button Colors
    'banner_overly_color' => 'rgb(0 0 0 / 20%)',
    'banner_text_color' => '#fff',
    'button_bg_color' => '#4b3f83',
    'button_text_color' => '#fff',
    'button_bg_color_hover' => '#000',
    'button_text_color_hover' => '#fff',
    // Footer Colors
    'footer_bg_color' => '#0e1e3f',
    'footer_text_color' => '#fff',

    'displayCategory' => 'no', //this toggles the category on the index and product page

    'displayBillingModel' => 'yes', //this show/hide the billing model on entire site

    'displayShippingPrice' => 'yes', //this show/hide the shipping price on entire site

    'displayRelatedProducts' => 'yes', //this toggles the related products on the product page

    'onlyShowFirstPrice' => 'no', //this only applies when the multi price is enabled. if set to 'yes' it will only show the first price from the array for the product on the index and shop page

    'creditCardIcons' => 1, // Icons set Pick between 1 - 4

    'loadingGif' => 10, // Preloader Animation sitewide. Select from 1 - 10

    'sortProducts' => 5, //1 - alphabetical, 2 - reverse alphabetical, 3 - lowest to highest price, 4 - highest to lowest price, 5 - first to last product array, 6 - last to first product, 7 - shortest product name to longest product name, 8 - longest product name to shortest product name

    'showNavigationCart' => 'yes', //yes displays it, no hides it

    'showBillingColumnCheckoutPage' => 'no', //yes displays it, no hides it

    'popularProducts' => [ //this toggles the popular products on the landing page
        'displaypopularProducts' => 'yes',
        'popularProducts' => 3
    ],

    'oneProductCartLimit' => 'no', //this limits one product in the shopping cart

    'shippingOption' => array(
        'enableShippingOption' => 'no', //enables shipping option to checkout page and add description to terms page
        'shippingOptionName' => 'Shipping Insurance', //name that will be displayed in the checkout and terms page
        'shippingOptionPrice' => '1.00',   //price of the shipping option
    ),



    //Terms 
    'checkoutPage' => array(
        'require_generic_text_terms' => 'yes',   //if set to no, then disable checkout page product terms checkboxes
        'require_product_terms' => 'yes',   //if set to no, then disable checkout page product terms checkboxes
        'require_total_price_terms' => 'no'   //if set to no, then disable checkout page product terms checkboxes
    )
);

//Credit Card 

$card_type = array(
    'visa' => 'yes', //yes or no
    'discover' => 'yes', //yes or no 
    'master' => 'yes', //yes or no
);

//CRM settings
$CRM = [
    'url'                       => 'https://dcconsulting.sticky.io/api/v1/new_order',
    'username'                  => 'dc_consulting_bp',
    'password'                  => '6XYJvHVXUepd',
    'shippingId'                => 3,
    'campaignId'                => 262,
    'tranType'                  => 'Sale',
    'offerId'                   => 25,
    'billingModelId'            => 2,
    'gatewayId'                 => 959,

    //'shippingInsurancePrice'    => 1.00,
    //'shippingInsuranceProductId'=> 123
];

// all ajax and other css,images/js file path moved on this file => design_and_ajax.php
require 'design_and_ajax.php';