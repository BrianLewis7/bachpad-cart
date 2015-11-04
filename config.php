<?php
$currency = '$'; //Currency Character or code
$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );                      


//connect to MySql                      
$mysqli = new mysqli('sulley.cah.ucf.edu', 'br419669', 'harobikes7','br419669');                        
if (mysqli_connect_errno()) 
{
	echo "Failed to connect to MySql:".mysqli_connect_error();    
}


?>