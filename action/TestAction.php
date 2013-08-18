<?php

/**
 * Description of TestAction
 *
 * @author xz71
 */
class TestAction extends AbstractAction {

    public function execute() {
        try {
            $query = "SELECT profileId FROM Profile WHERE profileId >= ? AND profileId <= ?";
            $params = array('ii', 1, 2);
            $result = System::getInstance()->runQuery($query, $params);
            var_dump($result);
        } catch (Exception $e) {
            $fe = new FrameworkException("Error in TestAction::execute");
            throw $fe;
        }
    }

}
