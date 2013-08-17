<?php

require_once BASE_DIR . '/system/FrameworkException.php';

/**
 * Description of system
 *
 * @author xz71
 */
class System {

    private static $instance;

    private function __construct() {
        date_default_timezone_set('America/New_York');
        register_shutdown_function(array($this, 'handleFatalError'));
        set_error_handler(array($this, 'handleError'), E_ALL & ~E_STRICT & ~E_DEPRECATED);
        $this->loadGlobals();
        spl_autoload_register(array($this, 'autoload'));
    }

    public static function getInstance() {
        if (!isset(static::$instance)) {
            static::$instance = new System();
        }
        return static::$instance;
    }

    public function autoload($className) {
        try {
            $simplexml_class = $this->getNode("classes/class[@name='" . $className . "']");
            $classPath = BASE_DIR . '/' . (string) $simplexml_class['path'];
            if (!file_exists($classPath)) {
                throw new FrameworkException("Could not load class - $className.");
            }
            require_once $classPath;
        } catch (Exception $e) {
            $fe = new FrameworkException('Error in System::autoload.', $e);
            $fe->log();
            throw $fe;
        }
    }

    public function loadGlobals() {
        $simplexml_globals = $this->getNode('globals');
        foreach ($simplexml_globals as $global) {
            $name = (string) $global['name'];
            $value = (string) $global['value'];
            define($name, $value);
        }
    }

    public function getView($actionName) {
        try {
            $simplexml_action = $this->getNode("actions/action[@name='" . $actionName . "']");
            $actionPath = BASE_DIR . '/' . (string) $simplexml_action['path'];
            if (!file_exists($actionPath)) {
                throw new FrameworkException("Could not load action - $actionName.");
            }
            require_once $actionPath;

            if (!preg_match_all('//([^/])\.php/', $actionPath, $matches)) {
                throw new FrameworkException("Action path is not valid - $actionPath");
            }
            $class = $matches[0];
            $action = new $class;
            if (!$action instanceof IAction) {
                throw new FrameworkException("Object is not instance of IAction - $action.");
            }
            return $action;
        } catch (Exception $e) {
            $fe = new FrameworkException("Error in Syste::getAction", $e);
            $fe->log();
            throw $fe;
        }
    }

    public function getAction($actionName) {
        try {
            $simplexml_action = $this->getNode("actions/action[@name='" . $actionName . "']");
            $actionPath = BASE_DIR . '/' . (string) $simplexml_action['path'];
            if (!file_exists($actionPath)) {
                throw new FrameworkException("Could not load action - $actionName.");
            }
            require_once $actionPath;

            if (!preg_match_all('/\/([^\/]*)\.php/', $actionPath, $matches)) {
                throw new FrameworkException("Action path is not valid - $actionPath");
            }
            $class = $matches[1][0];
            $action = new $class;
            if (!$action instanceof IAction) {
                throw new FrameworkException("Object is not instance of IAction - $action.");
            }
            return $action;
        } catch (Exception $e) {
            $fe = new FrameworkException("Error in Syste::getAction", $e);
            $fe->log();
            throw $fe;
        }
    }

    public function getNode($xpath) {
        $xml = simplexml_load_file(BASE_DIR . '/config/config.xml');
        $node = $xml->xpath($xpath);
        return $node[0];
    }

    function handleError($severity, $message, $filename, $lineno) {
        throw new ErrorException($message, 0, $severity, $filename, $lineno);
    }

    function handleFatalError() {
        $error = error_get_last();
        if (empty($error)) {
            return;
        }
        var_dump($error);
    }

}

