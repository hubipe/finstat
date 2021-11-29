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

	/** @var string|NULL */
	private $city;

	/** @var bool */
	private $cancelled;

	public function __construct(
		string $ico,
		string $name,
		string $city = NULL,
		bool $cancelled = FALSE)
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

	/**
	 * @return string|NULL
	 */
	public function getCity()
	{
		return $this->city;
	}

	public function isCancelled(): bool
	{
		return $this->cancelled;
	}


}
