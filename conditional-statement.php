<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
<?php
    $products = [
        [
            'name'=> 'product1',
            'price'=> 20
        ],
        [
            'name'=> 'product2',
            'price'=> 15
        ],
        [
            'name'=> 'product3',
            'price'=> 10
        ],
        [
            'name'=> 'product4',
            'price'=> 5
        ],
        [
            'name'=> 'product5',
            'price'=> 30
        ],
        [
            'name'=> 'product6',
            'price'=> 40
        ]

    ];
    foreach($products as $product){
       // if ($product['price']>20){
            //echo $product['price']. '<br/>';
        //}
        //if ($product['price'] > 10  &&  ($product['price']< 50))
        //{
            //echo $product['price'] . '<br/>';
        //}
        if ($product['price'] > 30 || $product['price'] < 10)
        {
            echo $product['price'] . '<br>';
        }
    }
?>    

<div>

    <ul>
        <?php foreach($products as $product) { ;?>
                <?php if($product['price'] > 40){?>
                    <li>
                        <p><?php echo $product['name'];?></p>
                        <p><?php echo $product['price'];?></p>
                    </li>
                <?php }elseif($product['price']< 10)
                        {
                            echo $product['price'];
                        }
                ;?>  


            <?php };?>
    </ul>
</div>


</body>
</html>

