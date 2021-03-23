<?php
namespace Controllers;


class Autor extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('Autor/showAll');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('Autor');
      $result['data'] = $model->selectAll();
      /*
        CREATE VIEW `ilosc_produktow` AS
        SELECT `id_kategorii`, count(id) AS `ilosc` FROM produkty GROUP BY `id_kategorii`
      */
      return $result;
    }
    public function showOne($id) {
      if (isset($id)) {
        $this->view->setTemplate('Autor/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array());
        $model = $this->createModel('Autor');
        $result['data'] = $model->selectOneById($id, 'ID_Autor');
        return $result;
      } else {
        $this->redirect('autor/');
      }
    }

    public function delete($id) {
      $result = $this->deleteOne($id, 'ID_Autor');
      \Tools\FlashMessage::addMessage($result, 'delete');
      $this->redirect('autor/');
    }
    public function form() {
      $this->view->setTemplate('Autor/addForm');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
    }
    public function edit($id)
    {
      $this->view->setTemplate('Autor/editForm');
      $model = $this->createModel('Autor');
      $data['data'] = $model->selectOneById($id, 'ID_Autor');
      return $data;
    }
    public function update() {
      $this->check(['ID_Autor', 'name', 'surname'], $_POST);
      $model = $this->createModel('Autor');
      $result = $model->update($_POST['ID_Autor'], $_POST['name'], $_POST['surname']);
      \Tools\FlashMessage::addMessage($result, 'update');
      $this->redirect('autor/');
    }
    public function insert() {
      $this->check(['name', 'surname'], $_POST);
      $model = $this->createModel('Autor');

      $result = $model->insert($_POST['name'], $_POST['surname']);
      \Tools\FlashMessage::addMessage($result, 'add');
      $this->redirect('autor/');
    }
}
