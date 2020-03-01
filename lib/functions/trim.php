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

if (!function_exists('lbstrim')) {
    /**
     * @param string $str
     * @return string
     */
    function lbstrim(string $str): string {
        return ltrim($str, '\\');
    }
}

if (!function_exists('rbstrim')) {
    /**
     * @param string $str
     * @return string
     */
    function rbstrim(string $str): string {
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

if (!function_exists('lfstrim')) {
    /**
     * @param string $str
     * @return string
     */
    function lfstrim(string $str): string {
        return ltrim($str, '/');
    }
}

if (!function_exists('rfstrim')) {
    /**
     * @param string $str
     * @return string
     */
    function rfstrim(string $str): string {
        return rtrim($str, '/');
    }
}
