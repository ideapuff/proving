<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DashboardAction
 *
 * @author xz71
 */
class DashboardAction extends AbstractAction {
    public function execute() {
        $this->loadView('dashboard');
    }
}

?>
