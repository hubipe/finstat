<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Utils;

use Consistence\ObjectPrototype;
use Consistence\StaticClassException;

class HashCalculator extends ObjectPrototype
{

	private function __construct()
	{
		throw new StaticClassException(sprintf('Class %s is static only.', __CLASS__));
	}

	public static function getHash(string $apiKey, string $privateKey, string $hashParam): string
	{
		$hashString = sprintf(
			'SomeSalt+%s+%s++%s+ended',
			$apiKey,
			$privateKey,
			$hashParam
		);
		$hash = hash('sha256', $hashString);
		return $hash;
	}

}
