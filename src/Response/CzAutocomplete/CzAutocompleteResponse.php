<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Response\CzAutocomplete;

use Hubipe\FinStat\Response\BaseResponse;

class CzAutocompleteResponse extends BaseResponse
{

	/** @var CzAutocompleteResult[] */
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
	 * @return CzAutocompleteResult[]
	 */
	public function getResults(): array
	{
		return $this->results;
	}

	public function addResult(CzAutocompleteResult $result): self
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
