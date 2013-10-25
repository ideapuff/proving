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
class RegistrationFormAction extends AbstractAction {

    public function execute() {
        $validationData = array();
        $viewData = array('validationData' => $validationData);

        $username = $_REQUEST['username'];
        if (true !== $usernameValidation = $this->validate($username, 'USERNAME')) {
            $validationData[] = $usernameValidation;
        }

        $email = $_REQUEST['email'];
        if (true !== $emailValidation = $this->validate($email, 'EMAIL')) {
            $validationData[] = $emailValidation;
        }

        $password = $_REQUEST['password'];
        $confirmPassword = $_REQUEST['confirmPassword'];
        if ($password !== $confirmPassword) {
            $validationData[] = 'Passwords do not match.';
        } elseif (true !== $passwordValidation = $this->validate($password, 'PASSWORD')) {
            $validationData[] = $passwordValidation;
        }

        $this->loadView('registrationForm', $viewData);
    }

}

?>
