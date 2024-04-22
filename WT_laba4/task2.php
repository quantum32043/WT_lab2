<?php
class SafeFormBuilder extends FormBuilder {
    public function __construct($method, $target, $submitValue) {
        parent::__construct($method, $target, $submitValue);
    }

    public function addTextField($name, $defaultValue) {
        if (isset($_POST[$name])) {
            $defaultValue = $_POST[$name];
        }
        parent::addTextField($name, $defaultValue);
    }

    public function addRadioGroup($name, $values) {
        foreach ($values as $value) {
            if (isset($_POST[$name]) && $_POST[$name] == $value) {
                $this->fields[] = "<input type='radio' name='{$name}' value='{$value}' checked />";
            } else {
                $this->fields[] = "<input type='radio' name='{$name}' value='{$value}' />";
            }
        }
    }
}