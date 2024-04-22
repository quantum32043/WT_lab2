<?php
class TableBuilder {
    private $rows = [];

    public function addRow($row) {
        $this->rows[] = $row;
    }

    public function getTable() {
        $table = "<table>";
        foreach ($this->rows as $row) {
            $table .= "<tr>";
            foreach ($row as $cell) {
                $table .= "<td>{$cell}</td>";
            }
            $table .= "</tr>";
        }
        $table .= "</table>";
        return $table;
    }
}