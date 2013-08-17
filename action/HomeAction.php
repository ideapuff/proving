<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HomeAction extends AbstractAction {

    public function execute() {
//        echo BASE_URL;
        include BASE_DIR . '/view/home.php';
    }

}

?>
