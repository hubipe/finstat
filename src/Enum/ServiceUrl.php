<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Enum;

use Consistence\Enum\Enum;

class ServiceUrl extends Enum
{

	const AUTOCOMPLETE = 'https://www.finstat.sk/api/autocomplete';
	const CZ_AUTOCOMPLETE = 'https://cz.finstat.sk/api/autocomplete';
	const DETAIL = 'https://www.finstat.sk/api/detail';
	const CZ_DETAIL = 'https://cz.finstat.sk/api/detail';

}
