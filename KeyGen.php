<?php

class KeyGen
{
    const LENGTH = 32;

    private $key;

    public function computationHmac(string $computer){
        $this->key_hmac = hash_hmac('sha256', $computer, $this->key);

        return $this->key_hmac;
    }

    public function generateKey(): string
    {
        $key_str= '';
        for ($i = 0; $i < self::LENGTH; $i++) {
            $randnum = mt_rand(0, 61);

            if ($randnum < 10) {
                $key_str.= chr($randnum + 48);
            } elseif ($randnum < 36) {
                $key_str.= chr($randnum + 55);
            } else {
                $key_str.= chr($randnum + 61);
            }
        }

        return $key_str;
    }

    public function setKey(): string
    {
        $this->key=$this->generateKey();

        return $this->key;
    }

    public function getKey(): string
    {
        return $this->key;
    }


}

