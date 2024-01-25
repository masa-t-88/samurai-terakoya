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
    

      $nums = array(15, 4, 18, 23, 10,);
      
      sort($nums);
      echo '昇順にソートします。<br>';

      
        foreach ($nums as $num) {
          echo $num . '<br>';
        }

        rsort($nums);
        echo '降順にソートします。<br>';
        foreach ($nums as $num) {
            echo $num . '<br>';
        }

      
    ?>
</p>
    
</body>
</html>