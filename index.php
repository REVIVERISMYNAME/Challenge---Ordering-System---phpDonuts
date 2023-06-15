<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <title>DroppingDonuts_Index</title>
    
</head>
<body>

<div class="header">
    <h1>
        Welcome to Dropping Donuts
    </h1>
   
        Where the spelling doesn't matter because you can still Sprinkle Nuts on your Dough.
</div>
   
<form action="payentPage.php" method="post">
    
<hr>

<div>

    Enter your Username, Please? <input name="userName" type="text">
    
 <hr>
   

        <div>
            <h3>R 4.00 for each Basic Glazed Donut.</h3>
        </div>
        <hr>


        <h4><u>Want to any add Glazing to your Donut(s)?</u> - (Not more than One.)</h4>
            <p> <input type="checkbox" name="chocoloateGlaze" value="Chocolate_Glaze">R 2.00 - Chocolate Glaze</p>
            <p> <input type="checkbox" name="caramelGlaze" value="Caramel_Glaze">R 2.00 - Caramel Glaze</p>
        <hr>

        <h4><u>Want to add any Toppings to your Donut(s)?</u> - (Not more than Three.)</h4>
        <p><label for="cinnamonSugar"> 
                <input type="checkbox" name="cinnamonSugar" id="cinnamonSugar" value="Cinnamon_Sugar">R 2.00 - Cinnamon Sugar
            </label>
        </p>
            
        <p><label for="nuts">
                <input type="checkbox" name="nuts" id="nuts" value="Nuts">R 2.00 - Nuts
            </label>
        </p>
                
        <p><label for="sprinkels">
                <input type="checkbox" name="sprinkels" id="sprinkels" value="Sprinkels">R 2.00 - Sprinkels
            </label>
        </p>
                
        <p><label for="cookieCrumbs">
                <input type="checkbox" name="cookieCrumbs" id="cookieCrumbs" value="Cookie_Crumbs">R 2.00 - Cookie Crumbs
            </label>
        </p>
                
        <p><label for="toffeeBits">
                <input type="checkbox" name="toffeeBits" id="toffeeBits" value="Toffee_Bits">R 2.00 - Toffee Bits
            </label>
        </p>
                
        <p><label for="toastedCoconut">
                <input type="checkbox" name="toastedCoconut" id="toastedCoconut" value="Toasted Coconut">R 2.00 - Toasted Coconut
            </label>
        </p>
                

        <hr>

        <h4><u>Want to add any Filling to your Donut(s)?</u> - (Not more than One.)</h4>
            <p> <label for="CherryJam"><input type="checkbox" name="CherryJam" id="CherryJam" value="Cherry_Jam">R 2.00 - Cherry Jam</p></label>
            <p> <label for="Nutella"><input type="checkbox" name="Nutella" id="Nutella" value="Nutella">R 2.00 - Nutella</p></label>
            <p> <label for="CoffeeCustard"><input type="checkbox" name="CoffeeCustard" id="CoffeeCustard" value="Coffee_Custard">R 2.00 - Coffee Custard</p></label>
            <p> <label for="StrawberryCheesecake"><input type="checkbox" name="StrawberryCheesecake" id="StrawberryCheesecake" value="Strawberry_Cheesecake">R 2.00 - Strawberry Cheesecake</p></label>
            <p> <label for="LemmonCurd"><input type="checkbox" name="LemmonCurd" id="LemmonCurd" value="Lemmon_Curd">R 2.00 - Lemmon Curd</p></label>
            <p> <label for="MapleBacon"><input type="checkbox" name="MapleBacon" id="MapleBacon" value="Maple_Bacon">R 2.00 - Maple Bacon</p></label>

        <hr>

        <h4>How many of these Donut(s) would you like to purchase?</h4>
             <h4>
                <input type="number" name="selectAmmount" value="1">
                <button type="submit" name="submit">Proceed to Payment</button>
            </h4>

        <hr>

    </div> 

    

</form>

    
</body>
</html>