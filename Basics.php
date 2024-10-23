<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        // echo "Hello World";
    ?>

    <?php 
        echo "<h1> Echo Echo </h1>";
        define("PI", 3.14);
        $name = "Apple";
        $age = 78;
        $address = "Mumbai";
        $add = [
            "city" => "Mumbai",
            "pincode" => 123,
        ];

        echo "Name: $name and age is $age <br>";

        forEach($add as $key=>$value){
            echo "$key === $value <br>";
        }

        $var1 = 4;
        $var2 = 5;
        $var3 = $var1 + $var2;
        echo "The sum is $var3 <br>";

        $arr = [1,2,3,4];
        $add["city"] = "Chennai";
        $add["email"] = "email.com";
        forEach($add as $key){
            echo "$key <br>";
        }

        for($i = 0;$i<10;$i++){
            echo "$i <br>";
        }

        $num = 10;
        $num2 = 10;
        $fact = 1;
        $fact2 = 1;
        while($num>0){
            $fact = $fact * $num;
            $num--;
        }
        echo "Fact is $fact<br>";

        do {
            $fact2 = $fact2 * $num2;
            $num2--;
        }while($num2>0);
        echo "Fact2 is $fact2 <br>";

        $day = "Monday";
        switch($day){
            case "Sunday":
                echo "Holiday<br>";
                break;
            case "Monday":
                echo "Work Day<br>";
                break;
            default:
                echo "Default Day<br>";
        }


        $voteAge = 18;
        if($voteAge >= 18){
            echo "Can vote<br>";
        }
        else{
            echo "Cannot vote<br>";
        }

        $num3 = 5;
        $fact3 = 1;
        for ($i = 1; $i<=$num3; $i++){
            $fact3 *= $i;
        }
        echo "The fact is $fact3 <br>";

        //Factorial using recursion
        function calculateFact($f){
            if($f <= 1){
                return $f;
            }
            return $f * calculateFact($f-1);
        }

        $res = calculateFact(5);
        echo "The fact using recursion is $res <br>";

        echo var_dump(1==4);
        echo var_dump(1==1);
        echo var_dump("apple"=="Apple");
        echo var_dump(2);
        echo var_dump("ABC");
        echo "<br>";
        echo var_dump($add);
        echo "<br>";
        echo PI;
        echo "<br>";
        echo count($arr);
        echo "<br>";

        $a = 0;
        while($a < count($arr)){
            echo $arr[$a];
            echo "<br>";
            $a++;
        }
        
        echo "<br>";
        foreach($add as $key=>$value){
            echo "$key: $value <br>";
        }
    ?>
</body>
</html>