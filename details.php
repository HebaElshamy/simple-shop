<?php
$products_details =
[ 
    "1111"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1112"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1113"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1114"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1115"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1116"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1117"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1118"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1119"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1120"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1121"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse.",
    "1122"=>
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem provident vel molestias dolorem esse,
    nesciunt eveniet nihil pariatur, magni nobis, veniam nisi adipisci? Illo,
    accusantaaaaaaaaaaaaaaaaium id quam fuga suscipit odit odio aliquid voluptatibus quaerat vel 
    voluptatem asperiores optio magni.",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class ='container mt-3'>
        <div class='row justify-content-center'>
                <?php
                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        $img= $_GET['img'];
                        $name = $_GET['name'];
                        $price = $_GET['price'];
                        foreach ($products_details as $key=>$value)
                        {
                            if ($_GET['id'] == $key)
                            {
                              
                                echo
                                 "
                                    <div class='col-md-6 offset-ms-3'>
                                        <div class='card' style='width: 18rem;'>
                                            <img class='card-img-top' src=$img alt='Card image cap'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 offset-ms-3'>
                                        <div class='card' style='width: 18rem;'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>$name</h5>
                                                <p class='card-text'>$value</p>
                                            </div>
                                            <ul class='list-group list-group-flush'>
                                                <li class='list-group-item'>EGP $price</li>
                                                <li class='list-group-item'>Cash on Delivery</li>
                                                <li class='list-group-item'>All prices include VAT.</li>
                                             </ul>
                                            <div class='card-body'>
                                                <a href='index.php' class='card-link'>Back</a>
                                                <a href='#' class='card-link'>Add Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                ";


                            }   
                        }      
                    }        

                 ?>


            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>



































<!-- if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $img= $_GET['img'];
    $name = $_GET['name'];
    $price = $_GET['price'];

    foreach ($products_details as $key=>$value)
    {
        if ($_GET['id'] == $key)
        {
            //  echo $id ."<br>" ;
            //  echo $img ."<br>" ;
            //  echo $name ."<br>" ;
            //  echo $value ."<br>" ;

            echo "
            
                         <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src=$img alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>$name</h5>
                                <p class='card-text'>$value</p>
                            </div>
                            <ul class='list-group list-group-flush'>
                                <li class='list-group-item'>EGP $price</li>
                                <li class='list-group-item'>Cash on Delivery</li>
                                <li class='list-group-item'>All prices include VAT.</li>
                            </ul>
                            <div class='card-body'>
                                <a href='index.php' class='card-link'>Back</a>
                                <a href='#' class='card-link'>Add Cart</a>
                             </div>
                        </div>
                     </div>
                </div>
            </div>
            
            
            ";

        }
        // // print_r($key);
        
        // print_r($value['112']);
        // echo $key , $value ."<br>" ;
       

    }
    // echo $_GET['name'];
}
else
{
    header("location:index.php");
} -->



<!-- // <div class="card" style="width: 18rem;">
//   <img class="card-img-top" src="..." alt="Card image cap">
//   <div class="card-body">
//     <h5 class="card-title">Card title</h5>
//     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//   </div>
//   <ul class="list-group list-group-flush">
//     <li class="list-group-item">Cras justo odio</li>
//     <li class="list-group-item">Dapibus ac facilisis in</li>
//     <li class="list-group-item">Vestibulum at eros</li>
//   </ul>
//   <div class="card-body">
//     <a href="#" class="card-link">Card link</a>
//     <a href="#" class="card-link">Another link</a>
//   </div>
// </div> -->