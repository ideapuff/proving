<?php

/**
 * Description of AbstractAction
 *
 * @author xz71
 */
abstract class AbstractAction implements IAction {

    abstract function execute();

    protected function loadAction($action) {
        header("Location: $action");
        exit();
    }

    protected function loadView($view, $data) {
        System::getInstance()->getView($view, $data);
        exit();
    }

}

?>