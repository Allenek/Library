<?php
namespace Controllers;


class Wydawnictwo extends GlobalController {
    public function showAll() {
      $this->view->setTemplate('Wydawnictwo/showAll');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
      $model = $this->createModel('Wydawnictwo');
      $result['data'] = $model->selectAll();
      /*
        CREATE VIEW `ilosc_produktow` AS
        SELECT `id_kategorii`, count(id) AS `ilosc` FROM produkty GROUP BY `id_kategorii`
      */
      return $result;
    }

    public function showOne($id) {
      if (isset($id)) {
        $this->view->setTemplate('Wydawnictwo/showOne');
        $this->view->addCSSSet(array());
        $this->view->addJSSet(array());
        $model = $this->createModel('Wydawnictwo');
        $result['data'] = $model->selectOneById($id, 'ID_Wydawnictwo');
        return $result;
      } else {
        $this->redirect('wydawnictwo/');
      }
    }

    public function delete($id) {
      $result = $this->deleteOne($id, 'ID_Wydawnictwo');
      \Tools\FlashMessage::addMessage($result, 'delete');
      $this->redirect('wydawnictwo/');
    }
    public function form() {
      $this->view->setTemplate('Wydawnictwo/addForm');
      $this->view->addCSSSet(array());
      $this->view->addJSSet(array());
    }
    public function insert() {
      $this->check(['nazwa'], $_POST);
      $model = $this->createModel('Wydawnictwo');
      $result = $model->insert($_POST['nazwa']);
      \Tools\FlashMessage::addMessage($result, 'add');
      $this->redirect('wydawnictwo/');
    }

    public function edit($id)
    {
      $this->view->setTemplate('Wydawnictwo/editForm');
      $model = $this->createModel('Wydawnictwo');
      $data['data'] = $model->selectOneById($id, 'ID_Wydawnictwo');
      return $data;
    }
    public function update() {
      $this->check(['ID_Wydawnictwo', 'name'], $_POST);
      $model = $this->createModel('Wydawnictwo');
      $result = $model->update($_POST['ID_Wydawnictwo'], $_POST['name']);
      \Tools\FlashMessage::addMessage($result, 'update');
      $this->redirect('wydawnictwo/');
    }
}
