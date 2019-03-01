<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Request;

use Hubipe\FinStat\Exception\ParserException;
use Hubipe\FinStat\Exception\RequestException;
use Hubipe\FinStat\Response\IResponse;

interface IRequestClient
{

	/**
	 * @param IRequest $request
	 * @return IResponse
	 * @throws RequestException When there is an error during request
	 * @throws ParserException When there is an error parsing the response
	 */
	public function call(IRequest $request): IResponse;

}
