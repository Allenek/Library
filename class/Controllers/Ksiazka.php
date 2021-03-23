<?php
namespace Controllers;


class Ksiazka extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('Ksiazka/showAll');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('Ksiazka');
      $result['data'] = $model->selectAll();
      /*
        CREATE VIEW `ilosc_produktow` AS
        SELECT `id_kategorii`, count(id) AS `ilosc` FROM produkty GROUP BY `id_kategorii`
      */
      $model = $this->createModel('Kategoria');
      $result['Kategoria'] = $model->transferByColumn($model->selectAll(), 'ID_Kategoria');
      $model = $this->createModel('Wydawnictwo');
      $result['Wydawnictwo'] = $model->transferByColumn($model->selectAll(), 'ID_Wydawnictwo');
      $model = $this->createModel('Autor');
      $result['Autor'] = $model->transferByColumn($model->selectAll(), 'ID_Autor');
      $model = $this->createModel('KsiazkaAutor');
      $result['ksiazka_autor'] = $model->groupByBook($model->selectAll(), 'ID_Ksiazka');
      return $result;
    }

    public function showAuthorBooks($id) {
      $this->view->setTemplate('Ksiazka/showAll');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('Ksiazka');
      $result['data'] = $model->selectAllAuthorBooks($id);
      /*
        CREATE VIEW `ilosc_produktow` AS
        SELECT `id_kategorii`, count(id) AS `ilosc` FROM produkty GROUP BY `id_kategorii`
      */
      $model = $this->createModel('Kategoria');
      $result['Kategoria'] = $model->transferByColumn($model->selectAll(), 'ID_Kategoria');
      $model = $this->createModel('Wydawnictwo');
      $result['Wydawnictwo'] = $model->transferByColumn($model->selectAll(), 'ID_Wydawnictwo');
      $model = $this->createModel('Autor');
      $result['Autor'] = $model->transferByColumn($model->selectAll(), 'ID_Autor');
      $model = $this->createModel('KsiazkaAutor');
      $result['ksiazka_autor'] = $model->groupByBook($model->selectAll(), 'ID_Ksiazka');
      return $result;
    }

    public function showOne($id) {

      if (isset($id)) {
        $this->view->setTemplate('Ksiazka/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array());
        $model = $this->createModel('Ksiazka');
        $result['data'] = $model->selectOneById($id, 'ID_Ksiazka');
        $model = $this->createModel('Kategoria');
        $result['Kategoria'] = $model->transferByColumn($model->selectAll(), 'ID_Kategoria');
        $model = $this->createModel('Wydawnictwo');
        $result['Wydawnictwo'] = $model->transferByColumn($model->selectAll(), 'ID_Wydawnictwo');
        $model = $this->createModel('Autor');
        $result['Autor'] = $model->transferByColumn($model->selectAll(), 'ID_Autor');
        $model = $this->createModel('KsiazkaAutor');
        $result['ksiazka_autor'] = $model->groupByBook($model->selectAllBookAuthors($id), 'ID_Ksiazka');
        return $result;
      } else {
        $this->redirect('ksiazka/');
      }
    }

    public function delete($id) {
      $result = $this->deleteOne($id, 'ID_Ksiazka');
      \Tools\FlashMessage::addMessage($result, 'delete');
      $this->redirect('ksiazka/');
    }
    public function form() {
      $this->view->setTemplate('Ksiazka/addForm');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('Wydawnictwo');
      $data['wydawnictwo'] = $model->transferToSelectable($model->selectAll(), ['Nazwa'], ' ', 'ID_Wydawnictwo');
      $model = $this->createModel('Kategoria');
      $data['kategoria'] = $model->transferToSelectable($model->selectAll(), ['Nazwa'], ' ', 'ID_Kategoria');
      $model = $this->createModel('Autor');
      $data['autor'] = $model->transferToSelectable($model->selectAll(), ['Imie', 'Nazwisko'], ' ', 'ID_Autor');
      return $data;
    }
    public function insert() {
      $this->check(['ID_Kategoria', 'ID_Autor', 'Tytul', 'Opis', 'ID_Wydawnictwo', 'Rok_Wydania'], $_POST);
      $model = $this->createModel('Ksiazka');
      $result = $model->insert($_POST['ID_Kategoria'], $_POST['Tytul'], $_POST['Opis'], $_POST['ID_Wydawnictwo'], $_POST['Rok_Wydania']);
      $author_result = 1;
      if (isset($_POST['ID_Autor'], $result) && $result > 0) {
        $kamodel = $this->createModel('KsiazkaAutor');
        foreach ($_POST['ID_Autor'] as $v) {
          $tmp = $kamodel->insert($result, $v);
          if ($tmp < $author_result) {
            $author_result = $tmp;
          }
        }
      }
      \Tools\FlashMessage::addMessage($result, 'add');
      $this->redirect('ksiazka/');
    }

    public function edit($id)
    {
      $this->view->setTemplate('Ksiazka/editForm');
      $model = $this->createModel('Ksiazka');
      $data['data'] = $model->selectOneById($id, 'ID_Ksiazka');
      $model = $this->createModel('Wydawnictwo');
      $data['wydawnictwo'] = $model->transferToSelectable($model->selectAll(), ['Nazwa'], ' ', 'ID_Wydawnictwo');
      $model = $this->createModel('Kategoria');
      $data['kategoria'] = $model->transferToSelectable($model->selectAll(), ['Nazwa'], ' ', 'ID_Kategoria');
      $model = $this->createModel('Autor');
      $data['autor'] = $model->transferToSelectable($model->selectAll(), ['Imie', 'Nazwisko'], ' ', 'ID_Autor');
      $model = $this->createModel('KsiazkaAutor');
      $data['ksiazka_autor'] = $model->transferByColumn($model->selectAll(), 'ID_Ksiazka');
      $data['ksiazka_autorzy'] = array_column($model->selectAllBookAuthors($id), 'ID_Autor');
      return $data;
    }
    public function update() {
      $this->check(['ID_Ksiazka', 'ID_Autor', 'ID_Kategoria', 'Tytul', 'Opis', 'ID_Wydawnictwo', 'Rok_Wydania'], $_POST);
      $model = $this->createModel('Ksiazka');
      $result = $model->update($_POST['ID_Ksiazka'], $_POST['ID_Kategoria'], $_POST['Tytul'], $_POST['Opis'], $_POST['ID_Wydawnictwo'], $_POST['Rok_Wydania'] );
      $kamodel = $this->createModel('KsiazkaAutor');
      $kamodel->updateIntelligent($_POST['ID_Autor'], $_POST['ID_Ksiazka']);
      \Tools\FlashMessage::addMessage($result, 'update');
      $this->redirect('ksiazka/');
    }
}
