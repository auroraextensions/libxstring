<?php
/**
 * implode.php
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

if (!function_exists('bsimplode')) {
    /**
     * @param array $pieces
     * @return string
     */
    function bsimplode(array $pieces): string {
        return implode('\\', $pieces);
    }
}

if (!function_exists('fsimplode')) {
    /**
     * @param array $pieces
     * @return string
     */
    function fsimplode(array $pieces): string {
        return implode('/', $pieces);
    }
}
