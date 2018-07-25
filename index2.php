<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $squadre = [
      [
        'nome' => 'Milan',
        'punti'=>'15',
      ],
      [
        'nome' => 'Roma',
        'punti'=>'22',
      ],
      [
        'nome' => 'Inter',
        'punti'=>'13',
      ],
      [
        'nome' => 'Samp',
        'punti'=>'16',
      ],
      [
        'nome' => 'Juve',
        'punti'=>'21',
      ],
    ];



    $points_order = [];

    foreach($squadre as $squadra){
      if($squadra['punti']>$points_order[0]['punti']){
        $points_order[0]=$squadra;
      }
    };

    for ($i=1; $i < 4; $i++) {
      foreach($squadre as $squadra){
        if(($squadra['punti']>$points_order[$i]['punti'])&&($squadra['punti']<$points_order[$i-1]['punti'])){
          $points_order[$i]=$squadra;
        }
      }
    };

    var_dump($points_order);die();
    ?>

  </body>
</html>
