<?php
class Token {

    private static $name = "\0__TOKENS__\0";
    private static $max = 10;

    public static function generate() {
        self::initialize();
        $_SESSION[self::$name] =
            array(($new = sha1(mt_rand())) => 1) +
            array_slice($_SESSION[self::$name], 0, self::$max - 1, true)
        ;
        return $new;
    }

    public static function validate($token, $throw = false) {
        self::initialize();
        $token = (string)filter_var($token);
        if (isset($_SESSION[self::$name][$token])) {
            unset($_SESSION[self::$name][$token]);
            return true;
        }
        if ($throw) {
            throw new RuntimeException('不正な処理が行われました');
        } else {
            return false;
        }
    }

    private static function initialize() {
        if (!isset($_SESSION)) {
            throw new BadMethodCallException('セッションが開始されていません');
        }
        if (!isset($_SESSION[self::$name]) || !is_array($_SESSION[self::$name])) {
            $_SESSION[self::$name] = array();
        }
    }

}