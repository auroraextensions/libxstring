PHP string manipulation functions for highly recurrent tasks.

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
.. |hyexplode| replace:: ``hyexplode``
.. |usexplode| replace:: ``usexplode``
.. |bsimplode| replace:: ``bsimplode``
.. |fsimplode| replace:: ``fsimplode``
.. |hyimplode| replace:: ``hyimplode``
.. |usimplode| replace:: ``usimplode``
.. |bstrim| replace:: ``bstrim``
.. |lbstrim| replace:: ``lbstrim``
.. |rbstrim| replace:: ``rbstrim``
.. |fstrim| replace:: ``fstrim``
.. |lfstrim| replace:: ``lfstrim``
.. |rfstrim| replace:: ``rfstrim``
.. |hytrim| replace:: ``hytrim``
.. |lhytrim| replace:: ``lhytrim``
.. |rhytrim| replace:: ``rhytrim``
.. |ustrim| replace:: ``ustrim``
.. |lustrim| replace:: ``lustrim``
.. |rustrim| replace:: ``rustrim``

.. _bsexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L23-L28
.. _fsexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L37-L42
.. _hyexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L51-L56
.. _usexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L65-L70
.. _bsimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L22-L24
.. _fsimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L32-L34
.. _hyimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L42-L44
.. _usimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L52-L54
.. _bstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L22-L24
.. _lbstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L32-L34
.. _rbstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L42-L44
.. _fstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L52-L54
.. _lfstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L62-L64
.. _rfstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L72-L74
.. _hytrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L82-L84
.. _lhytrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L92-L94
.. _rhytrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L102-L104
.. _ustrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L112-L114
.. _lustrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L122-L124
.. _rustrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L132-L134

explode()
^^^^^^^^^

* |bsexplode|_ Split a string by backslash.
* |fsexplode|_ Split a string by forward slash.
* |hyexplode|_ Split a string by hyphen.
* |usexplode|_ Split a string by underscore.

implode()
^^^^^^^^^

* |bsimplode|_ Join array elements with backslash.
* |fsimplode|_ Join array elements with forward slash.
* |hyimplode|_ Join array elements with hyphen.
* |usimplode|_ Join array elements with underscore.

trim()
^^^^^^

* |bstrim|_ Strip backslashes from the beginning and end of a string.
* |lbstrim|_ Strip backslashes from the beginning of a string.
* |rbstrim|_ Strip backslashes from the end of a string.
* |fstrim|_ Strip forward slashes from the beginning and end of a string.
* |lfstrim|_ Strip forward slashes from the beginning of a string.
* |rfstrim|_ Strip forward slashes from the end of a string.
* |hytrim|_ Strip hyphens from the beginning and end of a string.
* |lhytrim|_ Strip hyphens from the beginning of a string.
* |rhytrim|_ Strip hyphens from the end of a string.
* |ustrim|_ Strip underscores from the beginning and end of a string.
* |lustrim|_ Strip underscores from the beginning of a string.
* |rustrim|_ Strip underscores from the end of a string.
