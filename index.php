<?php
  require 'vendor/autoload.php';

  new \Controllers\Main();
/*  $router = new AltoRouter();
  $router->setBasePath('/Mikula2');


  <?php

require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/05_altorouter');

// konfiguracja routingu
// argumenty:
// metoda, szukany adres,
// parametry przekazywa w tablicy target
// nazwa wykorzystywana do odwrotnego odwzorowania
$router->map('GET','/', array('controler' => 'MainController', 'action' => 'home'), 'home');

$router->map('GET','/opis-kierunku', array('controler' => 'MainController', 'action' => 'description'), 'opis-kierunku');

$router->map('GET','/opis-kierunku/program-studiow', array('controler' => 'StudiesProgrammeController', 'action' => 'showAll'), 'opis-kierunku/program-studiow');
//przykład wykorzystania parametru alfanumerycznego 'a'
//przekazanego pod nazwą 'course'
$router->map('GET','/opis-kierunku/program-studiow/[a:course]', array('controler' => 'StudiesProgrammeController', 'action' => 'showThis'), 'opis-kierunku/przedmiot');

$router->map('GET','/dla-kandydatow', array('controler' => 'MainController', 'action' => 'forCandidates'), 'dla-kandydatow');

$router->map('GET','/dla-studentow', array('controler' => 'MainController', 'action' => 'forStudents'), 'dla-studentow');

$router->map('GET','/pobierz-plik/[a:filename]', array() , 'pobierz-plik');

$router->map('GET','/infrastruktura', array('controler' => 'MainController', 'action' => 'infrastructure'), 'infrastruktura');

$router->map('GET','/kadra', array('controler' => 'StaffController', 'action' => 'showAll'), 'kadra');
$router->map('GET','/kadra/[:person]', array('controler' => 'StaffController', 'action' => 'showThis'), 'pracownik');

//próba dopasowania
$match = $router->match();

//sprawdzenie wyniki
if($match) {
    echo 'target<br>';
    d($match['target']);
    echo 'params<br>';
    d($match['params']);
    echo 'name<br>';
    d($match['name']);


} else {
  header("HTTP/1.0 404 Not Found");
  require '404.html';
}

//przykład routingu odwrotnego

?>
<p>
    <a href=" <?php echo $router->generate('home'); ?>">
    <?php echo $router->generate('home'); ?></a>
</p>
<p>
    <a href=" <?php echo $router->generate('opis-kierunku'); ?>">
    <?php echo $router->generate('opis-kierunku'); ?></a>
</p>
<p>
    <a href=" <?php echo $router->generate('opis-kierunku/program-studiow'); ?>">
    <?php echo $router->generate('opis-kierunku/program-studiow'); ?></a>
</p>
<p>
    <a href=" <?php echo $router->generate('opis-kierunku/przedmiot', array('course' => 'aisd')); ?>">
    <?php echo $router->generate('opis-kierunku/przedmiot', array('course' => 'aisd')); ?></a>
</p>
<p>
    <a href=" <?php echo $router->generate('dla-kandydatow'); ?>">
    <?php echo $router->generate('dla-kandydatow'); ?></a>
</p>
<p>
    <a href=" <?php echo $router->generate('dla-studentow'); ?>">
    <?php echo $router->generate('dla-studentow'); ?></a>
</p>
<p>
    <a href=" <?php echo $router->generate('pobierz-plik', array('filename' => 'uklad_pracy_dyplomowej.pdf')); ?>" rel="nofollow">
    <?php echo $router->generate('pobierz-plik', array('filename' => 'uklad_pracy_dyplomowej.pdf')); ?></a>
</p>
<p>
    <a href=" <?php echo $router->generate('kadra'); ?>">
    <?php echo $router->generate('kadra'); ?></a>
</p>
<p>
    <a href=" <?php echo $router->generate('pracownik', array('person' => 'piotr-knychala')); ?>">
    <?php echo $router->generate('pracownik', array('person' => 'piotr-knychala')); ?></a>
</p>
<br>********
<?php
    require_once ('page.php');
?>
*/
?>
