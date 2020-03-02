<?php
/**
 * trim.php
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License, which
 * is bundled with this package in the file LICENSE.txt.
 *
 * It is also available on the Internet at the following URL:
 * https://raw.githubusercontent.com/auroraextensions/libxstring/master/LICENSE
 *
 * @copyright     Copyright (C) 2020 Aurora Extensions <support@auroraextensions.com>
 * @license       MIT License
 */

if (!function_exists('bstrim')) {
    /**
     * @param string $str
     * @return string
     */
    function bstrim(string $str): string {
        return trim($str, '\\');
    }
}

if (!function_exists('bsltrim')) {
    /**
     * @param string $str
     * @return string
     */
    function bsltrim(string $str): string {
        return ltrim($str, '\\');
    }
}

if (!function_exists('bsrtrim')) {
    /**
     * @param string $str
     * @return string
     */
    function bsrtrim(string $str): string {
        return rtrim($str, '\\');
    }
}

if (!function_exists('fstrim')) {
    /**
     * @param string $str
     * @return string
     */
    function fstrim(string $str): string {
        return trim($str, '/');
    }
}

if (!function_exists('fsltrim')) {
    /**
     * @param string $str
     * @return string
     */
    function fsltrim(string $str): string {
        return ltrim($str, '/');
    }
}

if (!function_exists('fsrtrim')) {
    /**
     * @param string $str
     * @return string
     */
    function fsrtrim(string $str): string {
        return rtrim($str, '/');
    }
}

if (!function_exists('hytrim')) {
    /**
     * @param string $str
     * @return string
     */
    function hytrim(string $str): string {
        return trim($str, '-');
    }
}

if (!function_exists('hyltrim')) {
    /**
     * @param string $str
     * @return string
     */
    function hyltrim(string $str): string {
        return ltrim($str, '-');
    }
}

if (!function_exists('hyrtrim')) {
    /**
     * @param string $str
     * @return string
     */
    function hyrtrim(string $str): string {
        return rtrim($str, '-');
    }
}

if (!function_exists('ustrim')) {
    /**
     * @param string $str
     * @return string
     */
    function ustrim(string $str): string {
        return trim($str, '_');
    }
}

if (!function_exists('usltrim')) {
    /**
     * @param string $str
     * @return string
     */
    function usltrim(string $str): string {
        return ltrim($str, '_');
    }
}

if (!function_exists('usrtrim')) {
    /**
     * @param string $str
     * @return string
     */
    function usrtrim(string $str): string {
        return rtrim($str, '_');
    }
}
