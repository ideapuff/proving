<?php

/**
 * Description of TestAction
 *
 * @author xz71
 */
class TestAction implements IAction {

    public function execute() {
        include BASE_DIR . '/maintainance.html';
    }

}
