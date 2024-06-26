<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">

            <div class="box1">
                
                <h1>SMART <br> CALCULATOR</h1>
            </div>
            <div class="box2">
                    <form method="POST">
                        <input type="text" name="input1" placeholder="ENTER NUMBER"><br>
                        <input type="text" name="input2" placeholder="ENTER NUMBER"><br>
                        <select name="operation" >
                            <option value="ADD" name="ADD">ADD</option>
                            <option value="SUB" name="SUB">SUB</option>
                            <option value="MUL" name="MUL">MUL</option>
                            <option value="DIV" name="DIV">DIV</option>
                        </select>
                        <input type="submit" value="SUBMIT" name="submit" class="btn">
                    </form>
                    
            </div>
            
           
            <p>
                <?php 
                if(isset($_POST["submit"]) ){
                    $num1 = $_POST['input1'];
                    $num2 = $_POST['input2'];
                    $operation = $_POST['operation'];
                    switch ($operation) {   
                        case 'ADD': $sum=  $num1 + $num2; 
                        echo " The sum of two number is : {$sum}";
                        break;
                        case 'SUB': $sub=  $num1 - $num2; 
                        echo " The subtraction of two number is : {$sub}";break;
                        case 'MUL': $mul=  $num1 * $num2; 
                        echo " The multiplication of two number is : {$mul}";break;
                        case 'DIV': $div=  $num1 / $num2;
                        echo " The division of two number is : {$div}"; break;

                }
            }
                ?>
            </p>
        
        </div>
        
    </div>
</body>
</html>