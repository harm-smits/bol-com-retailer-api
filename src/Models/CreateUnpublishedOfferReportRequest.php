<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getFormat()
 */
final class CreateUnpublishedOfferReportRequest extends \HarmSmits\BolComClient\Models\AModel
{
	const FORMAT_CSV = 'CSV';

	/**
	 * The file format in which to return the export.
	 * @var string
	 */
	protected string $format;


	public function setFormat(string $format): self
	{
		$this->_checkEnumBounds($format, [
			"CSV"
		]);
		$this->format = $format;
		return $this;
	}
}
