<?php
/**
 * explode.php
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

if (!function_exists('bsexplode')) {
    /**
     * @param string $str
     * @param int $limit
     * @return array
     */
    function bsexplode(
        string $str,
        int $limit = PHP_INT_MAX
    ): array {
        return explode('\\', $str, $limit);
    }
}

if (!function_exists('fsexplode')) {
    /**
     * @param string $str
     * @param int $limit
     * @return array
     */
    function fsexplode(
        string $str,
        int $limit = PHP_INT_MAX
    ): array {
        return explode('/', $str, $limit);
    }
}
