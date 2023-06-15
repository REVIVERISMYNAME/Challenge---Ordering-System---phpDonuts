<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paymentPage.css">
    <title>DroppingDonuts_PaymentPage</title>
</head>
<body>

<?php
    $name = $_POST["userName"];
    $ammountOfDonuts = $_POST["selectAmmount"];

    if($name == null && $ammountOfDonuts >= 1){
        echo "<br><br><br><br><br><br><br><hr><hr><br><br>Greetings No-Name,<br>
        <br> a User name is required for you to proceed ordering online at Dropping Donuts. <br><br>
        <hr><hr>";
    }

    elseif($name != null && $ammountOfDonuts < 1){
        echo "<br><br><br><br><br><br><br><hr><hr>Hello, " . $name . "<br> You can not order less than one Donut, Please reselect your ammount. <br><hr><hr><br>";
    }
    
    elseif($name == null && $ammountOfDonuts < 1){
        echo "<br><br><br><br><br><br><br><hr><hr><br><br>Greetings No-Name,<br>
        <br> a User name is required for you to proceed ordering online at Dropping Donuts. <br>
        You're also required to select an ammount of at least one or more Donuts.<br><br>
        <hr><hr>";
    }

    else{ 
        function calcPriceOfDonut(){
            $name = $_POST["userName"];
            echo "Hello, " . $name . "<br> Here is your Donut Order. <br><hr><hr><br>";
    
            $glazing = array();
            
                if(isset($_POST["chocoloateGlaze"])){
                    array_push($glazing, "Chocolate Glazing");
                };
                if(isset($_POST["caramelGlaze"])){
                    array_push($glazing, "Caramel Glazing");
                };
    
                    //print_r($glazing);
                    if($glazing == null){
                    echo "No Glazing selected. <br><br>";
                }
                    else{
                        echo "The following Glazing have been added to your Donut(s). <br>" . 
                        " - " . $glazing[0] . " <br>";
                    };
                
            
    
            $toppings = array();
            
                if(isset($_POST["cinnamonSugar"])){
                    array_push($toppings, "Cinnamon Sugar");
                };
                if(isset($_POST["nuts"])){
                    array_push($toppings, "Nuts");
                };
                if(isset($_POST["sprinkels"])){
                    array_push($toppings, "Sprinkels");
                };
                if(isset($_POST["cookieCrumbs"])){
                    array_push($toppings, "Cookie Crumbs");
                };
                if(isset($_POST["toffeeBits"])){
                    array_push($toppings, "Toffee Bits");
                };
                if(isset($_POST["toastedCoconut"])){
                    array_push($toppings, "Toasted Coconut");
                };
                //print_r($toppings);
                if($toppings == null){
                    echo "<br><br> No Toppings selected. <br><br>";
                }
                elseif(count($toppings) <= 3){
                     echo "<br><br> The following Toppings have been added to your Donut(s). <br> " . 
                        " - " . $toppings[0] . " <br>" . 
                        " - " . $toppings[1] . " <br>" . 
                        " - " . $toppings[2] . " <br>" ;
                }
                else{
                    array_pop($toppings);
                    
                     echo "<br><br>The following Toppings have been added to your Donut(s). <br> " . 
                          "(Maximum of THREE TOPPINGS ALLOWED)<br>" .
                            " - " . $toppings[0] . " <br>" . 
                            " - " . $toppings[1] . " <br>" . 
                            " - " . $toppings[2] . " <br>" ;
                };
    
            $fillings = array();

                if(isset($_POST["CherryJam"])){
                    array_push($fillings, "Cherry Jam");
                };
                if(isset($_POST["Nutella"])){
                    array_push($fillings, "Nutella");
                };
                if(isset($_POST["CoffeeCustard"])){
                    array_push($fillings, "Coffee Custard");
                };
                if(isset($_POST["StrawberryCheesecake"])){
                    array_push($fillings, "Strawberry Cheesecake");
                };
                if(isset($_POST["LemmonCurd"])){
                    array_push($fillings, "Lemmon Curd");
                };
                if(isset($_POST["MapleBacon"])){
                    array_push($fillings, "Maple Bacon");
                };



                //print_r($glazing);
                if($fillings == null){
                    echo "<br><br> No Fillings selected. <br>";
                }
                    else{
                        echo "<br><br> The following Fillings have been added to your Donut(s). <br>" . 
                        " - " . $fillings[0] . " <br>";
                    };

            echo "<br><hr><hr> Summary <br><hr>";
            echo "R4.00 for each Basic Glazed Donut. <br>";

            $ammountToMultiply = array();

        
            if($glazing[0] != null){
                array_push($ammountToMultiply, "Glazing");
                echo "R2.00 for Glazing per Donut.<br>";
            };

            if($toppings[0] != null){
                array_push($ammountToMultiply, "Topping_1");
                if($toppings[1] != null){
                    array_push($ammountToMultiply, "Topping_1");
                };
                if($toppings[2] != null){
                    array_push($ammountToMultiply, "Topping_2");
                };
                if(count($toppings) <= 3){
                    echo "R2.00 for each Topping. " . count($toppings) . " - Topping(s) added per Donut. <br>";
                }
                else{
                    array_pop($toppings);
                    echo "R2.00 for each Topping. " . count($toppings) . " - Topping(s) added per Donut. <br><br>";
                };
                
            };
            

            if($fillings[0] != null){
                array_push($ammountToMultiply, "Glazing");
                echo "R2.00 for Filling per Donut. <br>";
            };

            $multiplyByTwo = 2;
            $FourRandDonut = 4;
            
            $priceForAdditions = count($ammountToMultiply) * $multiplyByTwo;

            $priceOfOneDonut = $FourRandDonut + $priceForAdditions;
            //echo $priceOfOneDonut;
            
            

            echo "<br><hr>  Price per Donut = R" . $priceOfOneDonut . ".00 <br><hr>";
            
            }; 
            
            calcPriceOfDonut();





        function getOrderTotal(){
            $glazing = array();
               
                if(isset($_POST["chocoloateGlaze"])){
                    array_push($glazing, "Chocolate Glazing");
                };
                if(isset($_POST["caramelGlaze"])){
                    array_push($glazing, "Caramel Glazing");
                };
        
            $toppings = array();
               
                if(isset($_POST["cinnamonSugar"])){
                    array_push($toppings, "Cinnamon Sugar");
                };
                if(isset($_POST["nuts"])){
                    array_push($toppings, "Nuts");
                };
                if(isset($_POST["sprinkels"])){
                    array_push($toppings, "Sprinkels");
                };
                if(isset($_POST["cookieCrumbs"])){
                    array_push($toppings, "Cookie Crumbs");
                };
                if(isset($_POST["toffeeBits"])){
                    array_push($toppings, "Toffee Bits");
                };
                if(isset($_POST["toastedCoconut"])){
                    array_push($toppings, "Toasted Coconut");
                };
                  
        
            $fillings = array();
        
                if(isset($_POST["CherryJam"])){
                    array_push($fillings, "Cherry Jam");
                };
                if(isset($_POST["Nutella"])){
                    array_push($fillings, "Nutella");
                };
                if(isset($_POST["CoffeeCustard"])){
                    array_push($fillings, "Coffee Custard");
                };
                if(isset($_POST["StrawberryCheesecake"])){
                    array_push($fillings, "Strawberry Cheesecake");
                };
                if(isset($_POST["LemmonCurd"])){
                    array_push($fillings, "Lemmon Curd");
                };
                if(isset($_POST["MapleBacon"])){
                    array_push($fillings, "Maple Bacon");
                };
        
        
           $ammountToMultiply = array();
        
           if($glazing[0] != null){
               array_push($ammountToMultiply, "Glazing");
           };
        
           if($toppings[0] != null){
            array_push($ammountToMultiply, "Topping_1");
            if($toppings[1] != null){
                array_push($ammountToMultiply, "Topping_1");
            };
            if($toppings[2] != null){
                array_push($ammountToMultiply, "Topping_2");
            };
          };
        
          if($fillings[0] != null){
               array_push($ammountToMultiply, "Glazing");
          };


        
          $multiplyByTwo = 2;
          $FourRandDonut = 4;
          
          $priceForAdditions = count($ammountToMultiply) * $multiplyByTwo;
        
          $priceOfOneDonut = $FourRandDonut + $priceForAdditions;
          //echo $priceOfOneDonut;
          $ammountOfDonuts = $_POST["selectAmmount"];

          echo "Ammount of Donuts to Purchase = " . $ammountOfDonuts;
          $totalPrice = $priceOfOneDonut * $ammountOfDonuts;
        
          echo "<br>  Total Price = R" . $totalPrice . ".00 <br><br>";      
        }; getOrderTotal();

        echo $toppings;

        
    }

       
    
       

        
   

    ?>
    
</body>
</html>