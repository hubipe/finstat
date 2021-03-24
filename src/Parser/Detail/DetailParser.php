<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Parser\Detail;

use Consistence\ObjectPrototype;
use Hubipe\FinStat\Enum\JudgementIndicator;
use Hubipe\FinStat\Enum\Profit;
use Hubipe\FinStat\Enum\Revenue;
use Hubipe\FinStat\Exception\ParserException;
use Hubipe\FinStat\Exception\ResponseException;
use Hubipe\FinStat\Parser\IParser;
use Hubipe\FinStat\Request\IRequest;
use Hubipe\FinStat\Response\Detail\DetailResponse;
use Hubipe\FinStat\Response\IResponse;
use Nette\Utils\Json;
use Nette\Utils\JsonException;

class DetailParser extends ObjectPrototype implements IParser
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

		$detail = new DetailResponse($headers);

		$judgementIndicator = JudgementIndicator::get(0);
		foreach ((array) $json->JudgementIndicators as $row) {
			if ($row->Value === TRUE) {
				switch ($row->Name) {
					case 'Defendant':
						$judgementIndicator = $judgementIndicator->add(JudgementIndicator::get(JudgementIndicator::DEFENDANT));
						break;
					case 'Plaintiff':
						$judgementIndicator = $judgementIndicator->add(JudgementIndicator::get(JudgementIndicator::PLAINTIFF));
						break;
					default:
						throw new ParserException(sprintf('Judgement indicator %s is unexpected.', $row->Name));
				}
			}
		}

		$detail->setIco($json->Ico)
			->setRegisterNumberText($json->RegisterNumberText)
			->setDic($json->Dic)
			->setIcDph($json->IcDPH)
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
			->setSuspendedAsPerson($json->SuspendedAsPerson)
			->setUrl($json->Url)
			->setWarning($json->Warning)
			->setWarningUrl($json->WarningUrl)
			->setPaymentOrderWarning($json->PaymentOrderWarning)
			->setPaymentOrderUrl($json->PaymentOrderUrl)
			->setOrChange($json->OrChange)
			->setOrChangeUrl($json->OrChangeUrl)
			->setRevenue(Revenue::getFromJson($json->Revenue))
			->setProfit(Profit::getFromJson($json->Profit))
			->setSkNaceCode($json->SkNaceCode)
			->setSkNaceText($json->SkNaceText)
			->setSkNaceDivision($json->SkNaceDivision)
			->setSkNaceGroup($json->SkNaceGroup)
			->setLegalFormCode($json->LegalFormCode)
			->setLegalFormText($json->LegalFormText)
			->setRpvsInsert($json->RpvsInsert)
			->setRpvsUrl($json->RpvsUrl)
			->setProfitActual($json->ProfitActual)
			->setRevenueActual($json->RevenueActual)
			->setJudgementIndicators($judgementIndicator)
			->setJudgementFinstatLink($json->JudgementFinstatLink)
			->setSalesCategory($json->SalesCategory);

		if ($json->IcDphAdditional !== NULL) {
			$detail->setIcDphParagraph($json->IcDphAdditional->Paragraph)
				->setIcDphCancelListDetectedDate($json->IcDphAdditional->CancelListDetectedDate === NULL ? NULL : new \DateTimeImmutable($json->IcDphAdditional->CancelListDetectedDate))
				->setIcDphRemoveListDetectedDate($json->IcDphAdditional->RemoveListDetectedDate === NULL ? NULL : new \DateTimeImmutable($json->IcDphAdditional->RemoveListDetectedDate));
		}

		return $detail;
	}


}
