<?php

/**
 * Description of TestAction
 *
 * @author xz71
 */
class TestAction implements IAction {

    public function execute() {
        echo BASE_URL;
        include BASE_DIR . '/maintainance.html';
    }

}
