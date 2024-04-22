<?php
class CryptoManager {
    private $algorithm;
    private $password;

    public function __construct($algorithm, $password) {
        $this->algorithm = $algorithm;
        $this->password = $password;
    }

    public function encrypt($data) {
        return openssl_encrypt($data, $this->algorithm, $this->password);
    }

    public function decrypt($data) {
        return openssl_decrypt($data, $this->algorithm, $this->password);
    }
}