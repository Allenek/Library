<?php
namespace Controllers;


class Egzemplarz extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('Egzemplarz/showAll');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('Egzemplarz');
      $result['data'] = $model->selectAll();
      /*
        CREATE VIEW `ilosc_produktow` AS
        SELECT `id_kategorii`, count(id) AS `ilosc` FROM produkty GROUP BY `id_kategorii`
      */
      $model = $this->createModel('Ksiazka');
      $result['Ksiazka'] = $model->transferByColumn($model->selectAll(), 'ID_Ksiazka');
      return $result;
    }

    public function showOne($id) {

      if (isset($id)) {
        $this->view->setTemplate('Egzemplarz/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array());
        $model = $this->createModel('Egzemplarz');
        $result['data'] = $model->selectOneById($id, 'ID_Egzemplarz');
        $model = $this->createModel('Ksiazka');
        $result['Ksiazka'] = $model->transferByColumn($model->selectAll(), 'ID_Ksiazka');
        return $result;
      } else {
        $this->redirect('egzemplarz/');
      }
    }


    public function delete($id) {
      $result = $this->deleteOne($id, 'ID_Egzemplarz');
      \Tools\FlashMessage::addMessage($result, 'delete');
      $this->redirect('egzemplarz/');
    }
    public function form() {
      $this->view->setTemplate('Egzemplarz/addForm');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('Ksiazka');
      $result['ksiazka'] = $model->transferToSelectable($model->selectAll(), ['Tytul'], ' ', 'ID_Ksiazka');
      return $result;
    }

    public function edit($id)
    {
      $this->view->setTemplate('Egzemplarz/editForm');
      $model = $this->createModel('Egzemplarz');
      $data['data'] = $model->selectOneById($id, 'ID_Egzemplarz');
      $model = $this->createModel('Ksiazka');
      $data['ksiazka'] = $model->transferToSelectable($model->selectAll(), ['Tytul'], ' ', 'ID_Ksiazka');
      return $data;
    }
    public function update() {

      $this->check(['ID_Egzemplarz', 'id_book', 'Sygnatura', 'Cena_Zakupu', 'Stan'], $_POST);

      $model = $this->createModel('Egzemplarz');
      $result = $model->update($_POST['ID_Egzemplarz'], $_POST['id_book'], $_POST['signature'], $_POST['price'], $_POST['condition']);
      \Tools\FlashMessage::addMessage($result, 'update');
      $this->redirect('egzemplarz/');
    }

    public function insert() {
      $this->check(['id_book', 'signature', 'price', 'condition'], $_POST);
      $model = $this->createModel('Egzemplarz');
      $result = $model->insert($_POST['id_book'],$_POST['signature'],$_POST['price'],$_POST['condition']);
      \Tools\FlashMessage::addMessage($result, 'add');
      $this->redirect('egzemplarz/');
    }
}
