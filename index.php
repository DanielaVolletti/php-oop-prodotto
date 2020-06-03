<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      class Scaffale {
        public $width;
        public $height;
        public $ripiani;
        public $materiale;
        public $caricoMax;

        public function __construct($width, $height, $ripiani, $materiale, $caricoMax){
          $this -> width = $width;
          $this -> height = $height;
          $this -> ripiani = $ripiani;
          $this -> materiale = $materiale;
          $this -> caricoMax = $caricoMax;
        }

        public function printMe(){
          echo "Lo scaffale è largo " . $this -> width . "m"
              . ", è alto " . $this -> height . "m"
              . ", ed ha " . $this -> ripiani . " ripiani; "
              . "telaio in " . $this -> materiale
              . ", carico massimo di " . $this -> caricoMax . "kg" . "<br>";
        }
      }



      $scaffale1 = new Scaffale(2, 2.5 , 4, "plastica", 20);
      $scaffale2 = new Scaffale(1, 1, 3, "legno", 8);
      $scaffale3 = new Scaffale(4, 4, 6, "acciaio", 200);

      $scaffale1 -> printMe();
      $scaffale2 -> printMe();
      $scaffale3 -> printMe();

     ?>

  </body>
</html>
