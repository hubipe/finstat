<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Enum;

use Consistence\Enum\Enum;

class Profit extends Enum
{

	const UNKNOWN = 'Unknown';
	const UP = 'Up';
	const DOWN = 'Down';
	const LOSS = 'Loss';

	public static function getFromJson(int $value): self
	{
		switch ($value) {
			case 0:
				return static::get(self::UNKNOWN);
			case 1:
				return static::get(self::UP);
			case 2:
				return static::get(self::DOWN);
			case 3:
				return static::get(self::LOSS);
		}
	}

}
