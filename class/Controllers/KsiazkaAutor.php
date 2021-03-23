<?php
namespace Controllers;


class KsiazkaAutor extends GlobalController {
    public function delete($id) {
      $this->deleteOne($id, 'ID_Ksiazka_Autor');
    }
    public function insert($id_book, $id_author, $order) {
      if (isset($id_book, $id_author, $order)) {
        $model = $this->createModel('KsiazkaAutor');
        $result = $model->insert($id_book, $id_author, $order);
      }
    }
}
