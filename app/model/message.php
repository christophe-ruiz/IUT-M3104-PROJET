<?php
    function compteMots ($string) {
        return str_word_count(explode (' ', trim($string)));
    }

/**
 * @param $string
 * @return string
 * @
 */
    function clean($string) {
        return htmlspecialchars(trim($string));
    }