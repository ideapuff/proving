<?php

/**
 * Description of AbstractAction
 *
 * @author xz71
 */
abstract class AbstractAction {

    abstract function execute();

    protected function loadAction($action) {
        header("Location: $action");
        exit();
    }

    protected function loadView($view, $data = null) {
        System::getInstance()->getView($view, $data);
        exit();
    }

}

?>
