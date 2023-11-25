<?php

namespace App\Services;

class Vigenere
{
    function Mod($a, $b)
    {
        return ($a % $b + $b) % $b;
    }

    function Cipher($input, $key, $encipher)
    {
        $keyLen = strlen($key);

        for ($i = 0; $i < $keyLen; ++$i)
            if (!ctype_alpha($key[$i]))
                return ""; // Error

        $output = "";
        $nonAlphaCharCount = 0;
        $inputLen = strlen($input);

        for ($i = 0; $i < $inputLen; ++$i)
        {
            if (ctype_alpha($input[$i]))
            {
                $cIsUpper = ctype_upper($input[$i]);
                $offset = ord($cIsUpper ? 'A' : 'a');
                $keyIndex = ($i - $nonAlphaCharCount) % $keyLen;
                $k = ord($cIsUpper ? strtoupper($key[$keyIndex]) : strtolower($key[$keyIndex])) - $offset;
                $k = $encipher ? $k : -$k;
                $ch = chr(($this->Mod(((ord($input[$i]) + $k) - $offset), 26)) + $offset);
                $output .= $ch;
            }
            else
            {
                $output .= $input[$i];
                ++$nonAlphaCharCount;
            }
        }

        return $output;
    }

    function encoder($input, $key)
    {
        return $this->Cipher($input, $key, true);
    }

    function decoder($input, $key)
    {
        return $this->Cipher($input, $key, false);
    }
}
