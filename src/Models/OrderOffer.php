<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getOfferId()
 * @method self setOfferId(string $offerId)
 * @method null|string getReference()
 * @method self setReference(string $reference)
 */
final class OrderOffer extends \HarmSmits\BolComClient\Models\AModel
{
	/**
	 * Unique identifier for an offer.
	 * @var string
	 */
	protected ?string $offerId = null;

	/**
	 * A user-defined reference tied to the offer upon creating the offer.
	 * @var string
	 */
	protected ?string $reference = null;
}
