<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchAction
 *
 * @author xz71
 */
class SearchAction extends AbstractAction {

    public function execute() {
//        $query = "SELECT * FROM Profile WHERE profileId >= ? AND profileId <= ?";
//        $params = array('ii', 1, 2);
//        $result = System::getInstance()->runQuery($query, $params);
//        var_dump($result);
//        echo 'ggggggggg';
//        $login = '';
//        if (!empty($_GET['login'])) {
//            $login = $_GET['login'];
//        }
//        echo $login;
        
        $this->loadView('search');
    }

}

?>
