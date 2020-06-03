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

      class Latte extends Carne {

        public $conservazione;
        public function __construct($nome, $prezzo, $provenienza, $conservazione){
          parent::__construct($nome, $prezzo, $provenienza);
          $this -> conservazione = $conservazione;
        }

        public function printMe(){
          echo "Latte di " . $this -> nome
              . ", prezzo " . $this -> prezzo . " euro al litro"
              .", proveniente da " . $this -> provenienza
              . ", tipologia: " . $this -> conservazione . "<br>";
        }
      }

      class Gelato extends Prodotto {
        public $materiePrime;
        public $formato;

        public function __construct($materiePrime, $nome, $formato, $prezzo){
          parent::__construct($nome, $prezzo);
          $this -> materiePrime = $materiePrime;
          $this -> formato = $formato;
        }

        public function printMe(){
          echo "Gelato " . $this -> materiePrime
              . ", gusto " . $this -> nome
              . ", formato " . $this -> formato
              . ", prezzo: " . $this -> prezzo . " al kg" . "<br>";
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

      $latte1 = new Latte("pecora", 1.5 , "Italia", "a lunga conservazione");
      $latte2 = new Latte("mucca", 1 , "Svizzera", "fresco");
      $latte1 -> printMe();
      $latte2 -> printMe();

      $gelato1 = new Gelato("artigianale", "cioccolato", "vaschetta", 19);
      $gelato2 = new Gelato("confezionato", "cioccolato e panna", "stecco", 10);
      $gelato3 = new Gelato("confezionato", "caffè", "monoporzioni", 15);
      $gelato1 -> printMe();
      $gelato2 -> printMe();
      $gelato3 -> printMe();

     ?>

  </body>
</html>
