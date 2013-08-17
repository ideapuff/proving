<?php

/**
 * Description of TestAction
 *
 * @author xz71
 */
class TestAction extends AbstractAction {

    public function execute() {
        $this->loadView('testView', array('test' => 'test'));
    }

}
