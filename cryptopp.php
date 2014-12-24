<?php

/**
 * Description of cryptopp
 * 万千海淘开发部(http://www.wqbuyer.com)
 * @author root.wqbuyer@gmail.com
 */
class cryptopp {

    public function __construct($param);

    public function setkey($param);

    public function encode($param);

    public function decode($param);

    public static function enhex($param);

    public static function dehex($param);

    public static function enbase64($param);

    public static function debase64($param);

    public static function enbase32($param);

    public static function debase32($param);

    public static function md5($param);

    public static function sha1($param);

    public static function sha256($param);

    public static function sha512($param);
}
