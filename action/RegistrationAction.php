<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationAction
 *
 * @author xz71
 */
class RegistrationAction extends AbstractAction {

    public function execute() {
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirmPassword = $_REQUEST['confirmPassword'];
        if ($password !== $confirmPassword) {
            $this->loadView('login', array('error' => 'Passwords do not match.'));
        }

        $this->loadView('registration');
    }

}

?>
