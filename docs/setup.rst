#####################
Setting up the bundle
#####################

********************
Download the library
********************

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

.. code-block:: bash

   $ composer require hans-peter-ording/espn-api-client

This command requires you to have Composer installed globally, as explained
in the `installation chapter <https://getcomposer.org/doc/00-introduction.md>`_ of the Composer documentation.

**************
Use the client
**************

To make use of the sleeper api client, you only need to install some bundles of your choice for:

* PSR-18 compatible HTTP client (e.g. `Symfony HTTP client <https://github.com/symfony/http-client>`_)
* PSR-7 compatible library (e.g. `Nyholm PSR 7 implementation <https://github.com/Nyholm/psr7>`_)

If these prerequisites are met, you can simply use the ``EspnApiClientFactory`` to get a fully qualified instance of ``EspnApiClient``:

.. code-block:: php
   :linenos:

   <?php
   // MyCustomClientUsage.php

   use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClient;
   use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientFactory;
   use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;

   class EspnApiClientUsage
   {
      public function initEspnApiClient(): EspnApiClientInterface
      {
         $espnApiClient = (new EspnApiClientFactory())->getEspnApiClient();

         return $espnApiClient;
      }
   }

You can now use the ``EspnApiClient`` to request resources from the ESPN api:

.. code-block:: php
   :linenos:

   <?php
   // MyCustomClientUsage.php

   use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClient;
   use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientFactory;
   use HansPeterOrding\EspnApiClient\ApiClient\EspnApiClientInterface;
   use HansPeterOrding\EspnApiClient\Dto\Team;

   class EspnApiClientUsage
   {
      public function initEspnApiClient(): EspnApiClientInterface
      {
         $espnApiClient = (new EspnApiClientFactory())->getEspnApiClient();

         return $espnApiClient;
      }

      public function getTeam(): array
      {
         $client = $this->initEspnApiClient();

         return $client->team()->get("1");
      }
   }
