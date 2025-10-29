#####################
Data transfer objects
#####################

Espn API delivers JSON data. To enable object oriented work with this data, the ``EspnApiClient`` introduces data transfer objects (DTOs) for every piece of data available via ESPN API.

All of these DTOs are more or less one to one projections of the ESPN data to objects with some minor adjustments:

* All properties are camel case whereas the original data comes in snake case
* Properties containing date strings are converted to ``DateTime`` objects
* Properties containing timestamps are left as integers (or string if ESPN defines so)

To achieve this conversion, the ``EspnApiClient`` makes use of `Symfony serializer component <https://symfony.com/doc/current/components/serializer.html>`_. This component and all subsequently needed packages are automatically installed as dependencies when the package itself is installed.
