<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      class Prodotto {
        public $nome;
        public $prezzo;

        public function __construct($nome, $prezzo){
          $this -> nome = $nome;
          $this -> prezzo = $prezzo;
        }
      }

      class Carne extends Prodotto {
        public $provenienza;

        public function __construct($nome, $prezzo, $provenienza){
          parent::__construct($nome, $prezzo);
          $this -> provenienza = $provenienza;
        }

        public function printMe(){
          echo "Carne di " . $this -> nome
              . ", prezzo " . $this -> prezzo . " euro al kg"
              . ", provenienza: " . $this -> provenienza . "<br>";
        }
      }

      class Frutta extends Carne {
        public $colore;

        public function __construct($nome, $prezzo, $provenienza, $colore){
          parent::__construct($nome, $prezzo, $provenienza);
          $this -> colore = $colore;
        }

        public function printMe(){
          echo "Tipo di frutto: " . $this -> nome
              . ", prezzo " . $this -> prezzo . " euro al kg"
              .", proveniente da " . $this -> provenienza
              . ", colore " . $this -> colore . "<br>";
        }
      }


      $carne1 = new Carne("vitello", 40, "Italia");
      $carne2 = new Carne("suino", 35, "Germania");
      $carne1 -> printMe();
      $carne2 -> printMe();

      $frutto1 = new Frutta("pesca", 3, "Italia", "gialla");
      $frutto2 = new Frutta("arancia", 2.5, "Turchia", "arancione");
      $frutto1 -> printMe();
      $frutto2 -> printMe();

     ?>

  </body>
</html>
