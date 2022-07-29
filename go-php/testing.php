<?php
$products=[
    ['product'=>'computer','modil'=>'HP','price'=>2000],
    ['product'=>'computer','modil'=>'Mac','price'=>2500],
    ['product'=>'computer','modil'=>'apple','price'=>3000],
    ['product'=>'computer','modil'=>'Dell','price'=>4000],
    ['product'=>'computer','modil'=>'Dell','price'=>11000]
]
?>
<style>
    table{
        border-collapse:collapse;
        border:1px solid ;
        width:100%;
    }
    tr,th{
        border:0.5px solid;
        padding:10px;

        font-size:20px;
        font-width:400;
    }

</style>
<table>
    <tr>
        <th>product</th>
        <th>modil</th>
        <th>price</th>
    </tr>
    <?php
    function color($price){
        if($price >=5300){
            echo "purple";
        }else if($price >=3000){
            echo "green";
        }else if($price >=1300){
            echo "red";
        }
    }

    foreach($products as $pro){?>
        <tr style="color:white;background-color:<?= color($pro['price']) ?>;" >

            <th><?=$pro['product']?></th>
            <th><?=$pro['modil']?></th>
            <th><?=$pro['price']?></th>

    </tr>
        <?php
    }
    ?>
    
</table>