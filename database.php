<?php
$products = 
[
    
    "1111"=>["img"=>"images/1111.jpg","name"=>"A","price"=>50],
    "1112"=>["img"=>"images/1112.jpg","name"=>"B","price"=>50],
    "1113"=>["img"=>"images/1113.jpg","name"=>"C","price"=>50],
    "1114"=>["img"=>"images/1114.jpg","name"=>"D","price"=>50],
    "1115"=>["img"=>"images/1115.jpg","name"=>"E","price"=>50],
    "1116"=>["img"=>"images/1116.jpg","name"=>"F","price"=>50],
    "1117"=>["img"=>"images/1117.jpg","name"=>"G","price"=>50],
    "1118"=>["img"=>"images/1118.jpg","name"=>"H","price"=>50],
    "1119"=>["img"=>"images/1119.jpg","name"=>"I","price"=>50],
    "1120"=>["img"=>"images/1120.jpg","name"=>"J","price"=>50],
    "1121"=>["img"=>"images/1121.jpg","name"=>"K","price"=>50],
    "1122"=>["img"=>"images/1122.jpg","name"=>"L","price"=>50],

];

$values = array_values($products);
$keys = array_keys($products);
$size_keys = sizeof($keys);
for($x=0 ;$x<$size_keys ;$x++ )
{ 
    $id = $keys[$x];
    $img= $values[$x]['img'];
    $name = $values[$x]['name'];
    $price = $values[$x]['price'];
  

    echo 
    "
        <div class='col-md-3 offset-ms-3  mr-5 mb-4'>

                        <div class='card ' style='width: 18rem;' >
                        
                            <img src= $img class='card-img-top ' alt='...'>
                            
                            <div class='card-body'>
                                <h5 class='card-title mt-5'>$name</h5>
                                <p class='card-text'>$price</p>
                                <a href='details.php?id=$id&img=$img&name=$name&price=$price' class='btn btn-primary' name='submit'>Details</a>

                            </div>
                        </div>

                    </div>
    ";
  
}
