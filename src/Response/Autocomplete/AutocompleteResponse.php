<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Response\Autocomplete;

use Hubipe\FinStat\Response\BaseResponse;

class AutocompleteResponse extends BaseResponse
{

	/** @var AutocompleteResult[] */
	private $results;

	/** @var string[] */
	private $suggestions;

	public function __construct(array $httpHeaders)
	{
		parent::__construct($httpHeaders);
		$this->results = [];
		$this->suggestions = [];
	}

	/**
	 * @return AutocompleteResult[]
	 */
	public function getResults(): array
	{
		return $this->results;
	}

	public function addResult(AutocompleteResult $result): self
	{
		$this->results[] = $result;
		return $this;
	}

	/**
	 * @return string[]
	 */
	public function getSuggestions(): array
	{
		return $this->suggestions;
	}

	public function addSuggestion(string $suggestion): self
	{
		$this->suggestions[] = $suggestion;
		return $this;
	}




}
