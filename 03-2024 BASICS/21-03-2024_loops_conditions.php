<?php

$wpisyNaBlogu = ["Kiedy będzie koniec świata", "Gdzie są pieniądze z Komunii", "Czy dobrze zrobiłem, że się ożeniłem"];

foreach ($wpisyNaBlogu as $wpis) {
  echo $wpis, "<br>";
}

if (2 > 0) {
  echo "Znasz matematykę mistrzu!";
}

$godzina = 16;

if($godzina < 18) {
  echo "Masz jeszcze czas";
}
elseif ($godzina <21) {
  echo "Lepiej zbieraj się do domu";
}
else {
  echo "Idź się bawić, już i tak nie masz po co wracać do domu";
}

$obecnyWiek = 33;

if ($obecnyWiek < 30) {
  echo "Piękne czasy, młoda i piękna";
}
else {
  echo "Witaj w brutalnym świecie starych ludzi";
}

$miesiac = 1;
while ($miesiac <=12) {
  echo $miesiac . "<br>";
  $miesiac = $miesiac + 1;
}

for ($i = 1; $i <=10; $i ++) {
  echo $i . "<br>";
}

$dzien = "Czw";
switch ($dzien) {
  case "Pon":
    echo "Poniedziałek";
    break;
  case "Wt":
    echo "Wtorek";
    break;
  default:
    echo "No to chyba weekend";
}
?>