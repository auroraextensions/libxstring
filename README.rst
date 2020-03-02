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
.. |bsltrim| replace:: ``bsltrim``
.. |bsrtrim| replace:: ``bsrtrim``
.. |fstrim| replace:: ``fstrim``
.. |fsltrim| replace:: ``fsltrim``
.. |fsrtrim| replace:: ``fsrtrim``
.. |hytrim| replace:: ``hytrim``
.. |hyltrim| replace:: ``hyltrim``
.. |hyrtrim| replace:: ``hyrtrim``
.. |ustrim| replace:: ``ustrim``
.. |usltrim| replace:: ``usltrim``
.. |usrtrim| replace:: ``usrtrim``

.. _bsexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L23-L28
.. _fsexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L37-L42
.. _hyexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L51-L56
.. _usexplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/explode.php#L65-L70
.. _bsimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L22-L24
.. _fsimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L32-L34
.. _hyimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L42-L44
.. _usimplode: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/implode.php#L52-L54
.. _bstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L22-L24
.. _bsltrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L32-L34
.. _bsrtrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L42-L44
.. _fstrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L52-L54
.. _fsltrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L62-L64
.. _fsrtrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L72-L74
.. _hytrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L82-L84
.. _hyltrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L92-L94
.. _hyrtrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L102-L104
.. _ustrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L112-L114
.. _usltrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L122-L124
.. _usrtrim: https://github.com/auroraextensions/libxstring/blob/master/lib/functions/trim.php#L132-L134

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

* |bstrim|_, |bsltrim|_, |bsrtrim|_ Strip backslashes from string.
* |fstrim|_, |fsltrim|_, |fsrtrim|_ Strip forward slashes from string.
* |hytrim|_, |hyltrim|_ |hyrtrim|_ Strip hyphens from string.
* |ustrim|_, |usltrim|_, |usrtrim|_ Strip underscores from string.
