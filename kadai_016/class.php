<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題</title>
</head>
<body>



<p>
    <?php
     class Food {

      private $name;
      private $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      
      

      public function show_price() {
        echo $this->price;
        echo '<br>';
      }
     }

    // $food = new Food('卵', 300);
    // print_r($food);

    class Animal {

      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
        echo $this->height;
        echo '<br>';
      }
    }

    $food = new Food('卵', 250);
    print_r($food);
    print_r('<br>');

    $animal = new Animal('dog', 60, 5000);
    print_r($animal);
    print_r('<br>');

    
    $food->show_price();
    $animal->show_height();
      
    ?>
</p>

    
</body>
</html>