<?php
namespace Controllers;

/**
 * kontroler bazowy dla innych kontrolerów z uniwersalnymi metodami
 */
class GlobalController extends Controller {
  /**
   * Usunięcie encji
   * @param  int    $id identyfikator encji
   */
  public function deleteOne($id, $id_name) {
    $className = substr(get_class($this), strrpos(get_class($this),'\\') + 1);
    $model = $this->createModel($className);
    $counter = -1;
    if(isset($id, $id_name))
      $counter = $model->deleteOneById($id, $id_name);
    //FlashMessage::addMessage($counter, 'delete');
    return $counter;
  }
}
