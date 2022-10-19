<?php

class Crypto{

    public static $def_cryptoid = "0-00000000000000";
    public static $def_cryptokey = '[_/$VV&*Qg&)r?~g';
    private static $def_salt = "ahHoj2woo1eeChiech6ohphoB7Aithoh";

	public function encrypt($data, $cryptokey = '[_/$VV&*Qg&)r?~g'){
	
		return strtr(openssl_encrypt($data, "aes-128-cbc", $cryptokey, 0, 'jXT#/vz]3]5X7Jl\\'), '+/', '-_');
	}

    public function makepass($pass){
        if(strlen($pass) != strlen(sha1(self::$def_salt))){
            $pass = sha1($pass . self::$def_salt);
        }

        return $pass;
    }

}
?>