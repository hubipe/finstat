<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Parser\CzDetail;

use Consistence\ObjectPrototype;
use Hubipe\FinStat\Enum\JudgementIndicator;
use Hubipe\FinStat\Enum\Profit;
use Hubipe\FinStat\Enum\Revenue;
use Hubipe\FinStat\Exception\ParserException;
use Hubipe\FinStat\Exception\ResponseException;
use Hubipe\FinStat\Parser\IParser;
use Hubipe\FinStat\Request\IRequest;
use Hubipe\FinStat\Response\CzDetail\CzDetailResponse;
use Hubipe\FinStat\Response\IResponse;
use Nette\Utils\Json;
use Nette\Utils\JsonException;

class CzDetailParser extends ObjectPrototype implements IParser
{

	public function parse(IRequest $request, int $statusCode, array $headers, string $rawData): IResponse
	{
		if ($statusCode !== 200) {
			$message = $statusCode === 404 ? 'Company not found.' : NULL;
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

		$detail = new CzDetailResponse($headers);

		$detail->setIco($json->Ico)
			->setName($json->Name)
			->setStreet($json->Street)
			->setStreetNumber($json->StreetNumber)
			->setZipCode($json->ZipCode)
			->setCity($json->City)
			->setDistrict($json->District)
			->setRegion($json->Region)
			->setCountry($json->Country)
			->setActivity($json->Activity)
			->setCreated($json->Created === NULL ? NULL : new \DateTimeImmutable($json->Created))
			->setCancelled($json->Cancelled === NULL ? NULL : new \DateTimeImmutable($json->Cancelled))
			->setUrl($json->Url)
			->setWarning($json->Warning)
			->setWarningUrl($json->WarningUrl)
			->setCzNaceCode($json->CzNaceCode)
			->setCzNaceText($json->CzNaceText)
			->setCzNaceDivision($json->CzNaceDivision)
			->setCzNaceGroup($json->CzNaceGroup)
			->setLegalForm($json->LegalForm)
			->setOwnershipType($json->OwnershipType)
			->setEmployeeCount($json->EmployeeCount);

		return $detail;
	}


}
