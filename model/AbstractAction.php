<?php

/**
 * Description of AbstractAction
 *
 * @author xz71
 */
abstract class AbstractAction {

    private $emailRegex = "/^[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+$/";
    private $password = "/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{8,20}$/";
    private $username = "/^[a-zA-Z][0-9a-zA-Z]{7,19}$/";

    abstract function execute();

    protected function loadAction($action) {
        header("Location: $action");
        exit();
    }

    protected function loadView($view, $data = null) {
        System::getInstance()->getView($view, $data);
        exit();
    }

    protected function validate($field, $type) {
        switch ($type) {
            case 'EMAIL' :
                if (!preg_match($this->emailRegex, $field)) {
                    return "Validation failed: '$field' is not a valid email.";
                }
            case 'PASSWORD' :
                if (!preg_match($this->password, $field)) {
                    return "Validation failed: '$filed' is not a valid password. A password must be 8-20 in length and must have at least one number, one letter, and one of the following '!@#$%'.";
                }
            case 'USERNAME' :
                if (!preg_match($this->username, $field)) {
                    return "Validation failed: '$filed' is not a valid username. A username must start with a letter, can only have letters and numbers, and must be 8-20 in length.";
                }
            default :
                return "Validation failed: type '$type' is not found.\n";
        }
        return true;
    }

}

?>
