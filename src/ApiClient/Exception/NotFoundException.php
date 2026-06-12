<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Exception;

use Http\Client\Exception\HttpException;

class NotFoundException extends HttpException
{
}
