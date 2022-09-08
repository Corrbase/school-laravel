<?php

function lowerCaseCleanTerm(string $string): string
{
    return strtolower(preg_replace('/[^A-Za-z0-9]/', '', $string));
}

function getCleanTerm($string = null): string
{
    if (empty($string)) {
        return '';
    }
    $term = preg_replace('/[^A-Za-z0-9a-z]/', '', $string);

    return preg_replace('/\s+/', '%', $term);
}
