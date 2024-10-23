<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Class Php</title>
</head>
<body>
    <?php 
        class Car{
            public $name;
            public $age;
            public function __construct($name, $age){
                $this->name = $name;
                $this->age = $age;
            }

            public function getDetails(){
                return "The name is $this->name and age is $this->age";
            }
        }

        $car1 = new Car("Mustang", 17);
        $res = $car1->getDetails();
        echo $res;
    ?>
</body>
</html>