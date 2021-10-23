<?php 

$errors = array("price"=>"","moneyGiven"=>"");

$price = $moneyGiven = "";

if (isset($_POST['submit'])){

    //price
    if(empty($_POST['price']))
        $errors['price'] = "Please enter a price! <br/>";
    else
        $price = $_POST['price'];

    //moneyGiven
    if(empty($_POST['moneyGiven']))
        $errors['moneyGiven'] = "Please enter a value! <br/>";
    else
        $moneyGiven = $_POST['moneyGiven'];

    if(!empty($_POST['price']) && !empty($_POST['moneyGiven'])){
        
        echo calculateChange($price,$moneyGiven);
        echo "<br/>";
    }

}


//100,50,20,10,5,1

function calculateChange($price,$moneyGiven){

$hundredNote = $fiftyNote = $twentyNote = $tenNote = $fiveNote = $oneNote = 0;

$change = $moneyGiven - $price;

echo "<b>Change :</b> ".$change."<br/><br/>";

if ($change < 0)
    return "ERROR: Value cannot be negative! <br/>";
else if ($change == 0)
    return "PASS: No changes needed! <br/>";
else{

    //Hundred-Note
    if(($change - 100) > 0)
    for($i = 1; $i<=$change; $i++){            
        if(($change - 100) < 0)
            break;
        else{
            $hundredNote += 1;
            if (($change-(100 * $i)) == 0 )
                $hundredNote += 1;
                $change -= (100);
            }
    }
    else if (($change - 100) <= 0)
        if(($change - 100) == 0){
            $hundredNote = 1;
            $change = 0;
    }
    // echo $change."<br/>";
    //Fifty-Note
    if(($change - 50) > 0)
    for($i = 1; $i<=$change; $i++){            
        if(($change - 50) < 0)
            break;
        else{
            $fiftyNote += 1;
            if (($change-(50 * $i)) == 0 )
                $fiftyNote += 1;
                $change -= (50);
            }
    }
    else if (($change - 50) <= 0)
        if(($change - 50) == 0){
            $fiftyNote = 1;
            $change = 0;
        }

    //Twenty-Note
    if(($change - 20) > 0)
        for($i = 1; $i<=$change; $i++){            
            if(($change - 20) < 0)
                break;
            else{
                $twentyNote += 1;
                if (($change-(20 * $i)) == 0 )
                    $twentyNote += 1;
                    $change -= (20);
                }
        }
    else if (($change - 20) <= 0)
        if(($change - 20) == 0){
            $twentyNote = 1;
            $change = 0;
        }
    //Ten-Note
    if(($change - 10) > 0)
    for($i = 1; $i<=$change; $i++){            
        if(($change - 10) < 0)
            break;
        else{
            $tenNote += 1;
            if (($change-(10 * $i)) == 0 )
                $tenNote += 1;
                $change -= (10);
            }
    }
    else if (($change - 10) <= 0)
        if(($change - 10) == 0){
            $tenNote = 1;
            $change = 0;
        }
    
    //Five-Note
    if(($change - 5) > 0)
    for($i = 1; $i<=$change; $i++){            
        if(($change - 5) < 0)
            break;
        else{
            $fiveNote += 1;
            if (($change-(5 * $i)) == 0 )
                $fiveNote += 1;
                $change -= (5);
            }
    }
    else if (($change - 5) <= 0)
        if(($change - 5) == 0){
            $fiveNote = 1;
            $change = 0;
        }
    // echo $change."<br/>";
    //One-Note

    if($change%5!=0){
        $oneNote = $change;
        
    }
    else
        if(($change - 1) > 0)
        for($i = 1; $i<=$change; $i++){            
            if(($change - 1) < 0)
                break;
            else{
                $oneNote += 1;
                if (($change-(1 * $i)) == 0 )
                    $oneNote += 1;
                    $change -= (1);
                }
        }
        else if (($change - 1) <= 0)
            if(($change - 1) == 0){
                $oneNote = 1;
                $change = 0;
            }


}

return "<tr><td>RM 100 Note = ".$hundredNote."</td></tr> <br/>". 
"<tr><td>RM 50 Note = ".$fiftyNote."</td></tr> <br/>". 
"<tr><td>RM 20 Note = ".$twentyNote."</td></tr> <br/>". 
"<tr><td>RM 10 Note = ".$tenNote."</td></tr> <br/>". 
"<tr><td>RM 5 Note = ".$fiveNote."</td></tr> <br/>". 
"<tr><td>RM 1 Note = ".$oneNote."</td></tr> <br/>";

}

?>