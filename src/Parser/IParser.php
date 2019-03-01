<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Parser;

use Hubipe\FinStat\Exception\ParserException;
use Hubipe\FinStat\Request\IRequest;
use Hubipe\FinStat\Response\IResponse;

interface IParser
{

	/**
	 * @param IRequest $request
	 * @param int $statusCode
	 * @param array $headers
	 * @param string $rawData
	 * @return IResponse
	 * @throws ParserException
	 */
	public function parse(IRequest $request, int $statusCode, array $headers, string $rawData): IResponse;

}
