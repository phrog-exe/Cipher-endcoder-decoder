<?php
declare(strict_types=1);
namespace App\Services;

use Psr\Log\InvalidArgumentException;

class Affine
{

    function encoder(string $text, int $num1, int $num2): string
    {
        list($alphabet, $letters, $result) = $this->primaryProcess(func_get_args());
        foreach ($letters as $k => $v) {
            $result .= is_numeric($v)
                ? $v
                : $alphabet[($num1 * strpos($alphabet, $v) + $num2) % 26];
            $result .= ($k + 1) % 5 == 0 ? ' ' : '';
        }
        return rtrim($result);
    }
    function decoder(string $text, int $num1, int $num2): string
    {
        list($alphabet, $letters, $result) = $this->primaryProcess(func_get_args());
        foreach ($letters as $v) {
            if (is_numeric($v)) {
                $result .= $v;
                continue;
            }
            $newIndex = strpos($alphabet, $v);
            while (($newIndex - $num2) % $num1 != 0) {
                $newIndex += 26;
            }
            $result .= $alphabet[($newIndex - $num2) / $num1];
        }
        return $result;
    }
    function primaryProcess(array $args): array
    {
        list($text, $num1, $num2) = $args;
        if ($num1 % 2 == 0 || $num1 % 13 == 0) {
            throw new InvalidArgumentException('A not coprime to M.');
        }
        $alphabet = implode('', range('a', 'z'));
        $letters = str_split(preg_replace('/[\W]+/', '', strtolower($text)));
        $result = '';
        return [$alphabet, $letters, $result];
    }

}
