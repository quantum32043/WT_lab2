<?php
class FileSystemObject {
    public $name;
    private $size;
    private $type;

    public function __construct($name, $size, $type) {
        $this->name = $name;
        $this->size = $size;
        $this->type = $type;
    }

    public function getSize($unit) {
        switch ($unit) {
            case 'KB':
                return $this->size / 1024;
            case 'MB':
                return $this->size / (1024 * 1024);
            case 'GB':
                return $this->size / (1024 * 1024 * 1024);
            default:
                return $this->size;
        }
    }
}

$dir = '.';
$files = scandir($dir);
foreach ($files as $file) {
    if (is_file($file)) {
        $fso = new FileSystemObject($file, filesize($file), filetype($file));
        echo "File: {$fso->name}, Size: " . $fso->getSize('MB') . " MB\n";
    }
}