<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Response;

use Consistence\ObjectPrototype;
use Consistence\Type\Type;
use Hubipe\FinStat\Exception\ParserException;

abstract class BaseResponse extends ObjectPrototype implements IResponse
{

	/** @var int */
	private $dailyLimitCurrent;

	/** @var int */
	private $dailyLimitMax;

	/** @var int */
	private $monthlyLimitCurrent;

	/** @var int */
	private $monthlyLimitMax;

	public function __construct(array $httpHeaders)
	{
		Type::checkType($httpHeaders, 'string:int:string[][]');

		if (!array_key_exists('Finstat-Daily-Limit-Current', $httpHeaders)
			|| !array_key_exists('Finstat-Daily-Limit-Max', $httpHeaders)
			|| !array_key_exists('Finstat-Monthly-Limit-Current', $httpHeaders)
			|| !array_key_exists('Finstat-Monthly-Limit-Max', $httpHeaders)) {
			throw new ParserException('FinStat response is missing limit headers.');
		}

		$this->dailyLimitCurrent = (int) $httpHeaders['Finstat-Daily-Limit-Current'][0];
		$this->dailyLimitMax = (int) $httpHeaders['Finstat-Daily-Limit-Max'][0];
		$this->monthlyLimitCurrent = (int) $httpHeaders['Finstat-Monthly-Limit-Current'][0];
		$this->monthlyLimitMax = (int) $httpHeaders['Finstat-Monthly-Limit-Max'][0];
	}

	public function getDailyLimitCurrent(): int
	{
		return $this->dailyLimitCurrent;
	}

	public function getDailyLimitMax(): int
	{
		return $this->dailyLimitMax;
	}

	public function getMonthlyLimitCurrent(): int
	{
		return $this->monthlyLimitCurrent;
	}

	public function getMonthlyLimitMax(): int
	{
		return $this->monthlyLimitMax;
	}

}
