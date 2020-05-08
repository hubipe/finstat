<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Parser\CzAutocomplete;

use Consistence\ObjectPrototype;
use Hubipe\FinStat\Exception\ParserException;
use Hubipe\FinStat\Exception\ResponseException;
use Hubipe\FinStat\Parser\IParser;
use Hubipe\FinStat\Request\IRequest;
use Hubipe\FinStat\Response\CzAutocomplete\CzAutocompleteResponse;
use Hubipe\FinStat\Response\CzAutocomplete\CzAutocompleteResult;
use Hubipe\FinStat\Response\IResponse;
use Nette\Utils\Json;
use Nette\Utils\JsonException;

class CzAutocompleteParser extends ObjectPrototype implements IParser
{

	public function parse(IRequest $request, int $statusCode, array $headers, string $rawData): IResponse
	{

		if ($statusCode !== 200) {
			$message = $statusCode === 404 ? 'Query has to have at least 3 characters.' : NULL;
			throw new ResponseException($statusCode, $message);
		}

		try {
			$json = Json::decode($rawData);
		} catch (JsonException $e) {
			throw new ParserException(
				sprintf('Response is not in valid format: %s', $e->getMessage()),
				0,
				$e
			);
		}

		$autocomplete = new CzAutocompleteResponse($headers);

		foreach ($json->Results as $row) {
			$result = new CzAutocompleteResult(
				$row->Ico,
				$row->Name,
				$row->City,
				$row->Cancelled);
			$autocomplete->addResult($result);
		}

		foreach ($json->Suggestions as $suggestion) {
			$autocomplete->addSuggestion($suggestion);
		}

		return $autocomplete;
	}


}
