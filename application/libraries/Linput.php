<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * input Library
 * 입력에대한 것을 도와줌
 */
class Linput {

    private $key = 'antam';

    public function __construct()
    {

    }
    /**
     * 암호화
     *
     * @param string $v
     * @return void
     */
    public function encrypt(string $v)
    {
        return openssl_encrypt($v, 'aes-256-cbc', $this->key, false, str_repeat(chr(0), 16));
    }
    /**
     * 암호디코드
     *
     * @param string $v
     * @return void
     */
    public function decrypt(string $v)
    {
        return openssl_decrypt($v, 'aes-256-cbc', $this->key, false, str_repeat(chr(0), 16));
    }

    public function find($param = [], $chkdata = []) {

        $chkdata = empty($chkdata) ? $_REQUEST : $chkdata;
        $param = !is_array($param) ? [$param] : $param;

        foreach($param as $i => $v) {
            if(!isset($chkdata[$param[$i]])) {
                return false;
            }
        }
        return true;

    }
}