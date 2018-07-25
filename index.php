<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




    <?php


      $spot = [
        ['link'=>'https://tse3.mm.bing.net/th?id=OIP.WE3X1HcOR6zJXNUOAfNU0AHaEK&pid=15.1&P=0&w=278&h=157',
          'is_active'=> true
        ],
        [
          'link'=>'https://www.google.it/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiAv4-X77jcAhUCJlAKHd0rAMEQjRx6BAgBEAU&url=http%3A%2F%2Fwww.brandknewmag.com%2Fmobile-advertising-to-get-more-creative-to-target-shoppers%2F&psig=AOvVaw0J7EGxqjvm56es06uxvb6V&ust=1532560534834787',
            'is_active'=> false
        ],
        [
          'link'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAU1M7L_qC2mHn6dDHPF4EaAkG4JT637rjmT9zzfsxJHUyC016bg',
            'is_active'=> true
        ],
        [
          'link'=>'https://tse4.mm.bing.net/th?id=OIP.01VD2bgB08cmmBdDxkBmigHaDm&pid=15.1&P=0&w=335&h=163',
            'is_active'=> true
        ]
      ];


      do {
        $random = rand(0,3); ?>
        <img src="<?php echo $spot[$random]['link']; ?>" alt="">
      <?php
      } while($spot[$random]['is_active']==false);



    ?>



  </body>
</html>
