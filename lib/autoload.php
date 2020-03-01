<?php
/**
 * autoload.php
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

/** @var string $match */
$match = __DIR__ . '/functions/*.php';

/** @var string $file */
foreach (glob($match) as $file) {
    if (is_file($file)) {
        require_once $file;
    }
}
