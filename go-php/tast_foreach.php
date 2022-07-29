<?php
$student=[
    ['name'=>'mohmaed' , 'age'=>'62 ' , 'grade'=>'20','class'=>'3'],
    ['name'=>'nabel' , 'age'=>'32 ' , 'grade'=>'50','class'=>'3'],
    ['name'=>'hosam' , 'age'=>'22 ' , 'grade'=>'80','class'=>'3'],
    ['name'=>'hosam' , 'age'=>'22 ' , 'grade'=>'100','class'=>'3'],
];


?>
<style>
    table{
        border-collapse:collapse;
        width: 100%;
        border:1px solid ;
    }
    tr,th{
        border: 1px solid;
        padding:10px;
        
    }
</style>
<table>
    <tr style="background-color:gray;">
        <th>name</th>
        <th>age</th>
        <th>grade</th>
        <th>class</th>
    </tr>

    <?php 
    function color($grade){
        if($grade >= 100){
            echo "#261717";
        }elseif($grade >= 80){
            echo "#628119";
        }elseif($grade >= 50){
            echo "purple";
        }elseif($grade >= 20){
            echo "green";
        }
       
    }
    
    foreach($student as $stud){?>
        <tr style="color:white;background-color:<?php color($stud["grade"]) ?>" >

            <th><?=$stud["name"]?></th>
            <th><?=$stud["age"]?></th>
            <th><?=$stud["grade"]?></th>
            <th><?=$stud["class"]?></th>
            
        </tr>
        <?php
    }
    ?>
    
</table>
