<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Response\Autocomplete;

use Consistence\ObjectPrototype;

class AutocompleteResult extends ObjectPrototype
{

	/** @var string */
	private $ico;

	/** @var string */
	private $name;

	/** @var string */
	private $city;

	/** @var bool */
	private $cancelled;

	public function __construct(
		string $ico,
		string $name,
		string $city,
		bool $cancelled)
	{
		$this->ico = $ico;
		$this->name = $name;
		$this->city = $city;
		$this->cancelled = $cancelled;
	}

	public function getIco(): string
	{
		return $this->ico;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getCity(): string
	{
		return $this->city;
	}

	public function isCancelled(): bool
	{
		return $this->cancelled;
	}


}
