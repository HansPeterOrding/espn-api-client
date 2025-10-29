.. index::
    single: Team

##############
Team endpoints
##############

Returns information on NFL teams.

********
Get team
********

Description
===========

Returns one team identified by its ESPN id

URL
===

:samp:`https://site.api.espn.com/apis/site/v2/sports/football/nfl/teams/{<team_id>}`

Parameters
----------

:team_id: The ESPN team ID to identify the team

Data transfer object
====================

``HansPeterOrding\EspnApiClient\Dto\EspnTeam``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns the draft with ID 1
    */
   $draft = $client->team()->get('1');

*****************
Get team schedule
*****************

Description
===========

Returns the schedule of a team identified by its ESPN id

URL
===

:samp:`https://site.api.espn.com/apis/site/v2/sports/football/nfl/teams/{<team_id>}/schedule`

Parameters
----------

:team_id: The ESPN team ID to identify the team

Data transfer object
====================

``HansPeterOrding\EspnApiClient\Dto\EspnSchedule``

Example
=======

.. code-block:: php
   :linenos:

   <?php

   /*
    * Returns the draft with ID 1
    */
   $draft = $client->team()->schedule('1');

