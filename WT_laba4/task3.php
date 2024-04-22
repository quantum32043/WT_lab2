<?php
class Logger {
    private $outputToFile;
    private $fileName;

    public function __construct($outputToFile, $fileName = 'log.txt') {
        $this->outputToFile = $outputToFile;
        $this->fileName = $fileName;
    }

    public function log($message) {
        $date = date('Y-m-d H:i:s');
        $message = "{$date} - {$message}";
        if ($this->outputToFile) {
            file_put_contents($this->fileName, $message . PHP_EOL, FILE_APPEND);
        } else {
            echo $message;
        }
    }
}