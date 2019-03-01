<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Response;

interface IResponse
{

	public function getDailyLimitCurrent(): int;

	public function getDailyLimitMax(): int;

	public function getMonthlyLimitCurrent(): int;

	public function getMonthlyLimitMax(): int;

}
