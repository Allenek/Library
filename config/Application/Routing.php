<?php
    namespace Config\Application;
final class Routing {
    public static $routes = [
      ['POST','/', array('controller' => 'Ksiazka', 'action' => 'showAll'), 'home'],
      //Ksiazka
      ['GET','/ksiazka/?', array('controller' => 'Ksiazka', 'action' => 'showAll'), 'ksiazka'],
      ['GET','/ksiazka/[i:id]/?', array('controller' => 'Ksiazka', 'action' => 'showOne'), 'ksiazka_showOne'],
      ['GET','/ksiazka/autor/[i:id]/?', array('controller' => 'Ksiazka', 'action' => 'showAuthorBooks'), 'ksiazka_showAuthorBooks'],
      //ksiazka/autor/id
      ['GET','/ksiazka/usun/[i:id]/?', array('controller' => 'Ksiazka', 'action' => 'delete'), 'ksiazka_delete'],
      ['GET','/ksiazka/formularz/?', array('controller' => 'Ksiazka', 'action' => 'form'), 'ksiazka_form'],
      ['GET','/ksiazka/edytuj/[i:id]/?', array('controller' => 'Ksiazka', 'action' => 'edit'), 'ksiazka_edit'],
      ['POST','/ksiazka/aktualizuj/?', array('controller' => 'Ksiazka', 'action' => 'update'), 'ksiazka_update'],
      ['POST','/ksiazka/dodaj/?', array('controller' => 'Ksiazka', 'action' => 'insert'), 'ksiazka_insert'],
      //Egzemplarz
      ['GET','/egzemplarz/?', array('controller' => 'Egzemplarz', 'action' => 'showAll'), 'egzemplarz'],
      ['GET','/egzemplarz/[i:id]/?', array('controller' => 'Egzemplarz', 'action' => 'showOne'), 'egzemplarz_showOne'],
      ['GET','/egzemplarz/usun/[i:id]/?', array('controller' => 'Egzemplarz', 'action' => 'delete'), 'egzemplarz_delete'],
      ['GET','/egzemplarz/formularz/?', array('controller' => 'Egzemplarz', 'action' => 'form'), 'egzemplarz_form'],
      ['GET','/egzemplarz/edytuj/[i:id]/?', array('controller' => 'Egzemplarz', 'action' => 'edit'), 'egzemplarz_edit'],
      ['POST','/egzemplarz/aktualizuj/?', array('controller' => 'Egzemplarz', 'action' => 'update'), 'egzemplarz_update'],
      ['POST','/egzemplarz/dodaj/?', array('controller' => 'Egzemplarz', 'action' => 'insert'), 'egzemplarz_insert'],
      //Autor
      ['GET','/autor/?', array('controller' => 'Autor', 'action' => 'showAll'), 'autor'],
      ['GET','/autor/[i:id]/?', array('controller' => 'Autor', 'action' => 'showOne'), 'autor_showOne'],
      ['GET','/autor/usun/[i:id]/?', array('controller' => 'Autor', 'action' => 'delete'), 'autor_delete'],
      ['GET','/autor/formularz/?', array('controller' => 'Autor', 'action' => 'form'), 'autor_form'],
      ['GET','/autor/edytuj/[i:id]?', array('controller' => 'Autor', 'action' => 'edit'), 'autor_edit'],
      ['POST','/autor/aktualizuj/?', array('controller' => 'Autor', 'action' => 'update'), 'autor_update'],
      ['POST','/autor/dodaj/?', array('controller' => 'Autor', 'action' => 'insert'), 'autor_insert'],
      //Kategoria
      ['GET','/kategoria/?', array('controller' => 'Kategoria', 'action' => 'showAll'), 'kategoria'],
      ['GET','/kategoria/[i:id]/?', array('controller' => 'Kategoria', 'action' => 'showOne'), 'kategoria_showOne'],
      ['GET','/kategoria/usun/[i:id]/?', array('controller' => 'Kategoria', 'action' => 'delete'), 'kategoria_delete'],
      ['GET','/kategoria/formularz/?', array('controller' => 'Kategoria', 'action' => 'form'), 'kategoria_form'],
      ['GET','/kategoria/edytuj/[i:id]/?', array('controller' => 'Kategoria', 'action' => 'edit'), 'kategoria_edit'],
      ['POST','/kategoria/aktualizuj/?', array('controller' => 'Kategoria', 'action' => 'update'), 'kategoria_update'],
      ['POST','/kategoria/dodaj/?', array('controller' => 'Kategoria', 'action' => 'insert'), 'kategoria_insert'],
      //Wydawnictwo
      ['GET','/wydawnictwo/?', array('controller' => 'Wydawnictwo', 'action' => 'showAll'), 'wydawnictwo'],
      ['GET','/wydawnictwo/[i:id]/?', array('controller' => 'Wydawnictwo', 'action' => 'showOne'), 'wydawnictwo_showOne'],
      ['GET','/wydawnictwo/usun/[i:id]/?', array('controller' => 'Wydawnictwo', 'action' => 'delete'), 'wydawnictwo_delete'],
      ['GET','/wydawnictwo/formularz/?', array('controller' => 'Wydawnictwo', 'action' => 'form'), 'wydawnictwo_form'],
      ['GET','/wydawnictwo/edytuj/[i:id]?', array('controller' => 'Wydawnictwo', 'action' => 'edit'), 'wydawnictwo_edit'],
      ['POST','/wydawnictwo/aktualizuj/?', array('controller' => 'Wydawnictwo', 'action' => 'update'), 'wydawnictwo_update'],
      ['POST','/wydawnictwo/dodaj/?', array('controller' => 'Wydawnictwo', 'action' => 'insert'), 'wydawnictwo_insert'],
      //Logowanie
      ['GET','/formularz-logowania/?', array('controller' => 'Access', 'action' => 'logForm'), 'login_form'],
      ['GET','/formularz-rejestracji/?', array('controller' => 'Access', 'action' => 'regForm'), 'register_form'],
      ['POST','/zarejestruj/?', array('controller' => 'Access', 'action' => 'register'), 'register'],
      ['POST','/zaloguj/?', array('controller' => 'Access', 'action' => 'login'), 'login'],
      ['GET','/wyloguj/?', array('controller' => 'Access', 'action' => 'logout'), 'logout']
];}
