<?php
class FormBuilder {
    const METHOD_POST = 'post';
    private $method;
    private $target;
    private $submitValue;
    protected $fields = [];

    public function __construct($method, $target, $submitValue) {
        $this->method = $method;
        $this->target = $target;
        $this->submitValue = $submitValue;
    }

    public function addTextField($name, $defaultValue) {
        $this->fields[] = "<input type='text' name='{$name}' value='{$defaultValue}' />";
    }

    public function addRadioGroup($name, $values) {
        foreach ($values as $value) {
            $this->fields[] = "<input type='radio' name='{$name}' value='{$value}' />";
        }
    }

    public function getForm() {
        $form = "<form method='{$this->method}' target='{$this->target}'>";
        foreach ($this->fields as $field) {
            $form .= $field;
        }
        $form .= "<input type='submit' value='{$this->submitValue}' />";
        $form .= "</form>";
        return $form;
    }
}
