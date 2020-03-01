PHP string manipulation functions for highly frequent use cases.

.. contents:: :local:

Description
-----------

The sole purpose of ``libxstring`` is to stop writing ``trim($str, '/')`` and
``explode('/', $str)`` all over the place. That's the gist of it.

Installation
------------

.. code-block:: sh

    composer require auroraextensions/libxstring

Functions
---------

.. |bstrim| replace:: ``bstrim``
.. |lbstrim| replace:: ``lbstrim``
.. |rbstrim| replace:: ``rbstrim``
.. |fstrim| replace:: ``fstrim``
.. |lfstrim| replace:: ``lfstrim``
.. |rfstrim| replace:: ``rfstrim``
.. |bsexplode| replace:: ``bsexplode``
.. |fsexplode| replace:: ``fsexplode``
.. _bstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L22-L24
.. _lbstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L32-L34
.. _rbstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L42-L44
.. _fstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L52-L54
.. _lfstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L62-L64
.. _rfstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L72-L74
.. _bsexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L23-L28
.. _fsexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L37-L42

trim()
^^^^^^

* |bstrim|_ Strip backslashes from the beginning and end of a string.
* |lbstrim|_ Strip backslashes from the beginning of a string.
* |rbstrim|_ Strip backslashes from the end of a string.
* |fstrim|_ Strip forward slashes from the beginning and end of a string.
* |lfstrim|_ Strip forward slashes from the beginning of a string.
* |rfstrim|_ Strip forward slashes from the end of a string.

explode()
^^^^^^^^^

* |bsexplode|_ Split a string by backslash.
* |fsexplode|_ Split a string by forward slash.
