<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Response\Detail;

use Consistence\ObjectPrototype;
use DateTimeImmutable;

class BankAccount extends ObjectPrototype
{

	/** @var string */
	private $accountNumber;

	/** @var DateTimeImmutable */
	private $publishedAt;

	public function __construct(string $accountNumber, DateTimeImmutable $publishedAt)
	{
		$this->accountNumber = $accountNumber;
		$this->publishedAt = $publishedAt;
	}

	public function getAccountNumber(): string
	{
		return $this->accountNumber;
	}

	public function getPublishedAt(): DateTimeImmutable
	{
		return $this->publishedAt;
	}


}
