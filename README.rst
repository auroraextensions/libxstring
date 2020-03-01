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

* ``bstrim``
* ``lbstrim``
* ``rbstrim``
* ``fstrim``
* ``lfstrim``
* ``rfstrim``
