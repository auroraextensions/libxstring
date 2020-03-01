PHP string manipulation functions for highly recurrent use cases.

.. contents:: :local:

Description
-----------

The purpose of ``libxstring`` is to curtail usage of ``trim($str, '/')`` and
``explode('/', $str)`` when manipulating strings in PHP.

Installation
------------

.. code-block:: sh

    composer require auroraextensions/libxstring

Functions
---------

.. |bsexplode| replace:: ``bsexplode``
.. |fsexplode| replace:: ``fsexplode``
.. |bsimplode| replace:: ``bsimplode``
.. |fsimplode| replace:: ``fsimplode``
.. |bstrim| replace:: ``bstrim``
.. |lbstrim| replace:: ``lbstrim``
.. |rbstrim| replace:: ``rbstrim``
.. |fstrim| replace:: ``fstrim``
.. |lfstrim| replace:: ``lfstrim``
.. |rfstrim| replace:: ``rfstrim``
.. _bsexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L23-L28
.. _fsexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L37-L42
.. _bsimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L22-L24
.. _fsimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L32-L34
.. _bstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L22-L24
.. _lbstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L32-L34
.. _rbstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L42-L44
.. _fstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L52-L54
.. _lfstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L62-L64
.. _rfstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L72-L74

explode()
^^^^^^^^^

* |bsexplode|_ Split a string by backslash.
* |fsexplode|_ Split a string by forward slash.

implode()
^^^^^^^^^

* |bsimplode|_ Join array elements with backslash.
* |fsimplode|_ Join array elements with forward slash.

trim()
^^^^^^

* |bstrim|_ Strip backslashes from the beginning and end of a string.
* |lbstrim|_ Strip backslashes from the beginning of a string.
* |rbstrim|_ Strip backslashes from the end of a string.
* |fstrim|_ Strip forward slashes from the beginning and end of a string.
* |lfstrim|_ Strip forward slashes from the beginning of a string.
* |rfstrim|_ Strip forward slashes from the end of a string.
