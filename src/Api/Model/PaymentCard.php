<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Concur\Api\Model;

class PaymentCard
{
    /**
     * The authorization code that the card interchange provided when it approved this purchase. Maximum length: 15 characters.
     *
     * @var string
     */
    protected $authorizationCode;
    /**
     * The masked card number for the credit card. With the exception of the AX (American Express) card type, this is the last four digits of the card number. For American Express, the value can be one of these, in order of preference: a) The first six digits and the last four digits of the card number. b) The last five digits. c) The last four digits.
     *
     * @var string
     */
    protected $maskedNumber;
    /**
     * The card interchange for the credit card. Possible values: AX (American Express), DC (Diner's Club), DS (Discover), CA (MasterCard), VI (Visa), CB (Carte Blanche), ER (Enroute), TP (Universal Air Travel), JC (JCB), EC (EuroCard), OTHER (other types).
     *
     * @var string
     */
    protected $type;

    /**
     * The authorization code that the card interchange provided when it approved this purchase. Maximum length: 15 characters.
     */
    public function getAuthorizationCode(): string
    {
        return $this->authorizationCode;
    }

    /**
     * The authorization code that the card interchange provided when it approved this purchase. Maximum length: 15 characters.
     */
    public function setAuthorizationCode(string $authorizationCode): self
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * The masked card number for the credit card. With the exception of the AX (American Express) card type, this is the last four digits of the card number. For American Express, the value can be one of these, in order of preference: a) The first six digits and the last four digits of the card number. b) The last five digits. c) The last four digits.
     */
    public function getMaskedNumber(): string
    {
        return $this->maskedNumber;
    }

    /**
     * The masked card number for the credit card. With the exception of the AX (American Express) card type, this is the last four digits of the card number. For American Express, the value can be one of these, in order of preference: a) The first six digits and the last four digits of the card number. b) The last five digits. c) The last four digits.
     */
    public function setMaskedNumber(string $maskedNumber): self
    {
        $this->maskedNumber = $maskedNumber;

        return $this;
    }

    /**
     * The card interchange for the credit card. Possible values: AX (American Express), DC (Diner's Club), DS (Discover), CA (MasterCard), VI (Visa), CB (Carte Blanche), ER (Enroute), TP (Universal Air Travel), JC (JCB), EC (EuroCard), OTHER (other types).
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The card interchange for the credit card. Possible values: AX (American Express), DC (Diner's Club), DS (Discover), CA (MasterCard), VI (Visa), CB (Carte Blanche), ER (Enroute), TP (Universal Air Travel), JC (JCB), EC (EuroCard), OTHER (other types).
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
