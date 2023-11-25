<?php

namespace App\Services;


class Morse {
    function get_morse()
    {

        return array(
            "\n" => "\n",
            " " => "     ",
            "a" => "*- ",
            "b" => "-*** ",
            "c" => "-*-* ",
            "d" => "-** ",
            "e" => "* ",
            "f" => "**-* ",
            "g" => "--* ",
            "h" => "**** ",
            "i" => "** ",
            "j" => "*--- ",
            "k" => "-*- ",
            "l" => "*-** ",
            "m" => "-- ",
            "n" => "-* ",
            "o" => "--- ",
            "p" => "*--* ",
            "q" => "--*- ",
            "r" => "*-* ",
            "s" => "*** ",
            "t" => "- ",
            "u" => "**- ",
            "v" => "***- ",
            "w" => "*-- ",
            "x" => "-**- ",
            "y" => "-*-- ",
            "z" => "--** ",
            "A" => "|*- ",
            "B" => "|-*** ",
            "C" => "|-*-* ",
            "D" => "|-** ",
            "E" => "|* ",
            "F" => "|**-* ",
            "G" => "|--* ",
            "H" => "|**** ",
            "I" => "|** ",
            "J" => "|*--- ",
            "K" => "|-*- ",
            "L" => "|*-** ",
            "M" => "|-- ",
            "N" => "|-* ",
            "O" => "|--- ",
            "P" => "|*--* ",
            "Q" => "|--*- ",
            "R" => "|*-* ",
            "S" => "|*** ",
            "T" => "|- ",
            "U" => "|**- ",
            "V" => "|***- ",
            "W" => "|*-- ",
            "X" => "|-**- ",
            "Y" => "|-*-- ",
            "Z" => "|--** ");
    }

    function encoder($text) {

        return str_replace(array_keys($this->get_morse()), $this->get_morse(), $text);
    }

    function decoder($text) {
        $morse = array_map("trim", $this->get_morse());
        $output = "";
        foreach (explode(" ", $text) as $value) {
            $output .=  array_search($value, $morse);
        }
        return $output;
    }
















}
