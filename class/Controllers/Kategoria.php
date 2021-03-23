<?php
namespace Controllers;


class Kategoria extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('Kategoria/showAll');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('Kategoria');
      $result['data'] = $model->selectAll();
      /*
        CREATE VIEW `ilosc_produktow` AS
        SELECT `id_kategorii`, count(id) AS `ilosc` FROM produkty GROUP BY `id_kategorii`
      */
      return $result;
    }

    public function showOne($id) {
      if (isset($id)) {
        $this->view->setTemplate('Kategoria/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array());
        $model = $this->createModel('Kategoria');
        $result['data'] = $model->selectOneById($id, 'ID_Kategoria');
        return $result;
      } else {
        $this->redirect('kategoria/');
      }
    }

    public function delete($id) {
        $result = $this->deleteOne($id, 'ID_Kategoria');
        \Tools\FlashMessage::addMessage($result, 'delete');
        $this->redirect('kategoria/');

    }
    public function form() {
      $this->view->setTemplate('Kategoria/addForm');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
    }
    public function insert() {
      $this->check(['nazwa'], $_POST);
      $model = $this->createModel('Kategoria');
      $result = $model->insert($_POST['nazwa']);
      \Tools\FlashMessage::addMessage($result, 'add');
      $this->redirect('kategoria/');
    }

    public function edit($id)
    {
      $this->view->setTemplate('Kategoria/editForm');
      $model = $this->createModel('Kategoria');
      $data['data'] = $model->selectOneById($id, 'ID_Kategoria');
      return $data;
    }
    public function update() {
      $this->check(['ID_Kategoria', 'name'], $_POST);
      $model = $this->createModel('Kategoria');
      $result = $model->update($_POST['ID_Kategoria'], $_POST['name']);
      \Tools\FlashMessage::addMessage($result, 'update');
      $this->redirect('kategoria/');
    }
}
