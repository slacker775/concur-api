<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Concur\Api\Model;

class ReportGet
{
    /**
     * The total amount due to the company card for the report. Maximum 23 characters.
     *
     * @var float|null
     */
    protected $amountDueCompanyCard;
    /**
     * The total amount due to the employee for the report. Maximum 23 characters.
     *
     * @var float|null
     */
    protected $amountDueEmployee;
    /**
     * The approval status code for the report.
     *
     * @var string|null
     */
    protected $approvalStatusCode;
    /**
     * The report's approval status, in the OAuth consumer's language.
     *
     * @var string|null
     */
    protected $approvalStatusName;
    /**
     * The Login ID of the report owner's expense approver.
     *
     * @var string|null
     */
    protected $approverLoginID;
    /**
     * The name of the report owner's expense approver.
     *
     * @var string|null
     */
    protected $approverName;
    /**
     * The report country. Maximum 2 characters. Format: The ISO 3166-1 alpha-2 country code. Example: United States is US.
     *
     * @var string|null
     */
    protected $country;
    /**
     * The report country subdivision.  Format: ISO 3166-2:2007 country subdivision.
     *
     * @var string|null
     */
    protected $countrySubdivision;
    /**
     * The date the report was created.
     *
     * @var mixed|null
     */
    protected $createDate;
    /**
     * The 3-letter ISO 4217 currency code for the expense report currency. Examples: USD - US dollars; BRL - Brazilian real; CAD - Canadian dollar; CHF - Swiss franc; EUR - Euro; GBO - Pound sterling; HKD - Hong Kong dollar; INR - Indian rupee; MXN - Mexican peso; NOK - Norwegian krone; SEK - Swedish krona.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * @var mixed
     */
    protected $custom1;
    /**
     * @var mixed
     */
    protected $custom10;
    /**
     * @var mixed
     */
    protected $custom11;
    /**
     * @var mixed
     */
    protected $custom12;
    /**
     * @var mixed
     */
    protected $custom13;
    /**
     * @var mixed
     */
    protected $custom14;
    /**
     * @var mixed
     */
    protected $custom15;
    /**
     * @var mixed
     */
    protected $custom16;
    /**
     * @var mixed
     */
    protected $custom17;
    /**
     * @var mixed
     */
    protected $custom18;
    /**
     * @var mixed
     */
    protected $custom19;
    /**
     * @var mixed
     */
    protected $custom2;
    /**
     * @var mixed
     */
    protected $custom20;
    /**
     * @var mixed
     */
    protected $custom3;
    /**
     * @var mixed
     */
    protected $custom4;
    /**
     * @var mixed
     */
    protected $custom5;
    /**
     * @var mixed
     */
    protected $custom6;
    /**
     * @var mixed
     */
    protected $custom7;
    /**
     * @var mixed
     */
    protected $custom8;
    /**
     * @var mixed
     */
    protected $custom9;
    /**
     * Whether the report has ever been sent back to the employee. Format: Y/N.
     *
     * @var bool
     */
    protected $everSentBack;
    /**
     * Whether the report has exceptions. Format: Y/N.
     *
     * @var bool
     */
    protected $hasException;
    /**
     * The unique identifier of the resource.
     *
     * @var string
     */
    protected $iD;
    /**
     * The text of the most recent comment on the report.
     *
     * @var string|null
     */
    protected $lastComment;
    /**
     * The date the report header was last modified.
     *
     * @var mixed
     */
    protected $lastModifiedDate;
    /**
     * The name of the expense report ledger. Maximum 20 characters.
     *
     * @var string|null
     */
    protected $ledgerName;
    /**
     * The name of the report.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var mixed
     */
    protected $orgUnit1;
    /**
     * @var mixed
     */
    protected $orgUnit2;
    /**
     * @var mixed
     */
    protected $orgUnit3;
    /**
     * @var mixed
     */
    protected $orgUnit4;
    /**
     * @var mixed
     */
    protected $orgUnit5;
    /**
     * @var mixed
     */
    protected $orgUnit6;
    /**
     * The Login ID of the user this report belongs to.
     *
     * @var string|null
     */
    protected $ownerLoginID;
    /**
     * The name of the expense report owner.
     *
     * @var string|null
     */
    protected $ownerName;
    /**
     * The date when all journal entries in the report were integrated with or extracted to the financial system.
     *
     * @var mixed|null
     */
    protected $paidDate;
    /**
     * The code for the payment status of the report.
     *
     * @var string|null
     */
    protected $paymentStatusCode;
    /**
     * The report's payment status, in the OAuth consumer's language.
     *
     * @var string|null
     */
    protected $paymentStatusName;
    /**
     * The total amount of expenses marked as personal. Maximum 23 characters.
     *
     * @var float|null
     */
    protected $personalAmount;
    /**
     * The unique identifier of the policy that applies to this report. Maximum 64 characters.
     *
     * @var string|null
     */
    protected $policyID;
    /**
     * The date that the report completed all approvals and was ready to be extracted for payment.
     *
     * @var mixed|null
     */
    protected $processingPaymentDate;
    /**
     * If Y, then this report has its receipt receipt confirmed by the Expense Processor. Format: Y/N.
     *
     * @var bool
     */
    protected $receiptsReceived;
    /**
     * The date the report was submitted.
     *
     * @var mixed|null
     */
    protected $submitDate;
    /**
     * The total amount of the report.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The total amount of approved expenses in the report. Maximum 23 characters.
     *
     * @var float|null
     */
    protected $totalApprovedAmount;
    /**
     * The total amount of all non-personal expenses in the report. Maximum 23 characters.
     *
     * @var float|null
     */
    protected $totalClaimedAmount;
    /**
     * The URI to the resource.
     *
     * @var string
     */
    protected $uRI;
    /**
     * The date of the report assigned by the user.
     *
     * @var mixed|null
     */
    protected $userDefinedDate;
    /**
     * The URL to post a workflow action to the report using the "Post Report Workflow Action" function.
     *
     * @var string|null
     */
    protected $workflowActionUrl;

    /**
     * The total amount due to the company card for the report. Maximum 23 characters.
     */
    public function getAmountDueCompanyCard(): ?float
    {
        return $this->amountDueCompanyCard;
    }

    /**
     * The total amount due to the company card for the report. Maximum 23 characters.
     */
    public function setAmountDueCompanyCard(?float $amountDueCompanyCard): self
    {
        $this->amountDueCompanyCard = $amountDueCompanyCard;

        return $this;
    }

    /**
     * The total amount due to the employee for the report. Maximum 23 characters.
     */
    public function getAmountDueEmployee(): ?float
    {
        return $this->amountDueEmployee;
    }

    /**
     * The total amount due to the employee for the report. Maximum 23 characters.
     */
    public function setAmountDueEmployee(?float $amountDueEmployee): self
    {
        $this->amountDueEmployee = $amountDueEmployee;

        return $this;
    }

    /**
     * The approval status code for the report.
     */
    public function getApprovalStatusCode(): ?string
    {
        return $this->approvalStatusCode;
    }

    /**
     * The approval status code for the report.
     */
    public function setApprovalStatusCode(?string $approvalStatusCode): self
    {
        $this->approvalStatusCode = $approvalStatusCode;

        return $this;
    }

    /**
     * The report's approval status, in the OAuth consumer's language.
     */
    public function getApprovalStatusName(): ?string
    {
        return $this->approvalStatusName;
    }

    /**
     * The report's approval status, in the OAuth consumer's language.
     */
    public function setApprovalStatusName(?string $approvalStatusName): self
    {
        $this->approvalStatusName = $approvalStatusName;

        return $this;
    }

    /**
     * The Login ID of the report owner's expense approver.
     */
    public function getApproverLoginID(): ?string
    {
        return $this->approverLoginID;
    }

    /**
     * The Login ID of the report owner's expense approver.
     */
    public function setApproverLoginID(?string $approverLoginID): self
    {
        $this->approverLoginID = $approverLoginID;

        return $this;
    }

    /**
     * The name of the report owner's expense approver.
     */
    public function getApproverName(): ?string
    {
        return $this->approverName;
    }

    /**
     * The name of the report owner's expense approver.
     */
    public function setApproverName(?string $approverName): self
    {
        $this->approverName = $approverName;

        return $this;
    }

    /**
     * The report country. Maximum 2 characters. Format: The ISO 3166-1 alpha-2 country code. Example: United States is US.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * The report country. Maximum 2 characters. Format: The ISO 3166-1 alpha-2 country code. Example: United States is US.
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * The report country subdivision.  Format: ISO 3166-2:2007 country subdivision.
     */
    public function getCountrySubdivision(): ?string
    {
        return $this->countrySubdivision;
    }

    /**
     * The report country subdivision.  Format: ISO 3166-2:2007 country subdivision.
     */
    public function setCountrySubdivision(?string $countrySubdivision): self
    {
        $this->countrySubdivision = $countrySubdivision;

        return $this;
    }

    /**
     * The date the report was created.
     *
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * The date the report was created.
     *
     * @param mixed $createDate
     */
    public function setCreateDate($createDate): self
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * The 3-letter ISO 4217 currency code for the expense report currency. Examples: USD - US dollars; BRL - Brazilian real; CAD - Canadian dollar; CHF - Swiss franc; EUR - Euro; GBO - Pound sterling; HKD - Hong Kong dollar; INR - Indian rupee; MXN - Mexican peso; NOK - Norwegian krone; SEK - Swedish krona.
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * The 3-letter ISO 4217 currency code for the expense report currency. Examples: USD - US dollars; BRL - Brazilian real; CAD - Canadian dollar; CHF - Swiss franc; EUR - Euro; GBO - Pound sterling; HKD - Hong Kong dollar; INR - Indian rupee; MXN - Mexican peso; NOK - Norwegian krone; SEK - Swedish krona.
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom1()
    {
        return $this->custom1;
    }

    /**
     * @param mixed $custom1
     */
    public function setCustom1($custom1): self
    {
        $this->custom1 = $custom1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom10()
    {
        return $this->custom10;
    }

    /**
     * @param mixed $custom10
     */
    public function setCustom10($custom10): self
    {
        $this->custom10 = $custom10;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom11()
    {
        return $this->custom11;
    }

    /**
     * @param mixed $custom11
     */
    public function setCustom11($custom11): self
    {
        $this->custom11 = $custom11;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom12()
    {
        return $this->custom12;
    }

    /**
     * @param mixed $custom12
     */
    public function setCustom12($custom12): self
    {
        $this->custom12 = $custom12;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom13()
    {
        return $this->custom13;
    }

    /**
     * @param mixed $custom13
     */
    public function setCustom13($custom13): self
    {
        $this->custom13 = $custom13;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom14()
    {
        return $this->custom14;
    }

    /**
     * @param mixed $custom14
     */
    public function setCustom14($custom14): self
    {
        $this->custom14 = $custom14;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom15()
    {
        return $this->custom15;
    }

    /**
     * @param mixed $custom15
     */
    public function setCustom15($custom15): self
    {
        $this->custom15 = $custom15;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom16()
    {
        return $this->custom16;
    }

    /**
     * @param mixed $custom16
     */
    public function setCustom16($custom16): self
    {
        $this->custom16 = $custom16;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom17()
    {
        return $this->custom17;
    }

    /**
     * @param mixed $custom17
     */
    public function setCustom17($custom17): self
    {
        $this->custom17 = $custom17;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom18()
    {
        return $this->custom18;
    }

    /**
     * @param mixed $custom18
     */
    public function setCustom18($custom18): self
    {
        $this->custom18 = $custom18;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom19()
    {
        return $this->custom19;
    }

    /**
     * @param mixed $custom19
     */
    public function setCustom19($custom19): self
    {
        $this->custom19 = $custom19;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom2()
    {
        return $this->custom2;
    }

    /**
     * @param mixed $custom2
     */
    public function setCustom2($custom2): self
    {
        $this->custom2 = $custom2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom20()
    {
        return $this->custom20;
    }

    /**
     * @param mixed $custom20
     */
    public function setCustom20($custom20): self
    {
        $this->custom20 = $custom20;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom3()
    {
        return $this->custom3;
    }

    /**
     * @param mixed $custom3
     */
    public function setCustom3($custom3): self
    {
        $this->custom3 = $custom3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom4()
    {
        return $this->custom4;
    }

    /**
     * @param mixed $custom4
     */
    public function setCustom4($custom4): self
    {
        $this->custom4 = $custom4;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom5()
    {
        return $this->custom5;
    }

    /**
     * @param mixed $custom5
     */
    public function setCustom5($custom5): self
    {
        $this->custom5 = $custom5;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom6()
    {
        return $this->custom6;
    }

    /**
     * @param mixed $custom6
     */
    public function setCustom6($custom6): self
    {
        $this->custom6 = $custom6;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom7()
    {
        return $this->custom7;
    }

    /**
     * @param mixed $custom7
     */
    public function setCustom7($custom7): self
    {
        $this->custom7 = $custom7;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom8()
    {
        return $this->custom8;
    }

    /**
     * @param mixed $custom8
     */
    public function setCustom8($custom8): self
    {
        $this->custom8 = $custom8;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustom9()
    {
        return $this->custom9;
    }

    /**
     * @param mixed $custom9
     */
    public function setCustom9($custom9): self
    {
        $this->custom9 = $custom9;

        return $this;
    }

    /**
     * Whether the report has ever been sent back to the employee. Format: Y/N.
     */
    public function getEverSentBack(): bool
    {
        return $this->everSentBack;
    }

    /**
     * Whether the report has ever been sent back to the employee. Format: Y/N.
     */
    public function setEverSentBack(bool $everSentBack): self
    {
        $this->everSentBack = $everSentBack;

        return $this;
    }

    /**
     * Whether the report has exceptions. Format: Y/N.
     */
    public function getHasException(): bool
    {
        return $this->hasException;
    }

    /**
     * Whether the report has exceptions. Format: Y/N.
     */
    public function setHasException(bool $hasException): self
    {
        $this->hasException = $hasException;

        return $this;
    }

    /**
     * The unique identifier of the resource.
     */
    public function getID(): string
    {
        return $this->iD;
    }

    /**
     * The unique identifier of the resource.
     */
    public function setID(string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * The text of the most recent comment on the report.
     */
    public function getLastComment(): ?string
    {
        return $this->lastComment;
    }

    /**
     * The text of the most recent comment on the report.
     */
    public function setLastComment(?string $lastComment): self
    {
        $this->lastComment = $lastComment;

        return $this;
    }

    /**
     * The date the report header was last modified.
     *
     * @return mixed
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * The date the report header was last modified.
     *
     * @param mixed $lastModifiedDate
     */
    public function setLastModifiedDate($lastModifiedDate): self
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    /**
     * The name of the expense report ledger. Maximum 20 characters.
     */
    public function getLedgerName(): ?string
    {
        return $this->ledgerName;
    }

    /**
     * The name of the expense report ledger. Maximum 20 characters.
     */
    public function setLedgerName(?string $ledgerName): self
    {
        $this->ledgerName = $ledgerName;

        return $this;
    }

    /**
     * The name of the report.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the report.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgUnit1()
    {
        return $this->orgUnit1;
    }

    /**
     * @param mixed $orgUnit1
     */
    public function setOrgUnit1($orgUnit1): self
    {
        $this->orgUnit1 = $orgUnit1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgUnit2()
    {
        return $this->orgUnit2;
    }

    /**
     * @param mixed $orgUnit2
     */
    public function setOrgUnit2($orgUnit2): self
    {
        $this->orgUnit2 = $orgUnit2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgUnit3()
    {
        return $this->orgUnit3;
    }

    /**
     * @param mixed $orgUnit3
     */
    public function setOrgUnit3($orgUnit3): self
    {
        $this->orgUnit3 = $orgUnit3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgUnit4()
    {
        return $this->orgUnit4;
    }

    /**
     * @param mixed $orgUnit4
     */
    public function setOrgUnit4($orgUnit4): self
    {
        $this->orgUnit4 = $orgUnit4;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgUnit5()
    {
        return $this->orgUnit5;
    }

    /**
     * @param mixed $orgUnit5
     */
    public function setOrgUnit5($orgUnit5): self
    {
        $this->orgUnit5 = $orgUnit5;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrgUnit6()
    {
        return $this->orgUnit6;
    }

    /**
     * @param mixed $orgUnit6
     */
    public function setOrgUnit6($orgUnit6): self
    {
        $this->orgUnit6 = $orgUnit6;

        return $this;
    }

    /**
     * The Login ID of the user this report belongs to.
     */
    public function getOwnerLoginID(): ?string
    {
        return $this->ownerLoginID;
    }

    /**
     * The Login ID of the user this report belongs to.
     */
    public function setOwnerLoginID(?string $ownerLoginID): self
    {
        $this->ownerLoginID = $ownerLoginID;

        return $this;
    }

    /**
     * The name of the expense report owner.
     */
    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }

    /**
     * The name of the expense report owner.
     */
    public function setOwnerName(?string $ownerName): self
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * The date when all journal entries in the report were integrated with or extracted to the financial system.
     *
     * @return mixed
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * The date when all journal entries in the report were integrated with or extracted to the financial system.
     *
     * @param mixed $paidDate
     */
    public function setPaidDate($paidDate): self
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * The code for the payment status of the report.
     */
    public function getPaymentStatusCode(): ?string
    {
        return $this->paymentStatusCode;
    }

    /**
     * The code for the payment status of the report.
     */
    public function setPaymentStatusCode(?string $paymentStatusCode): self
    {
        $this->paymentStatusCode = $paymentStatusCode;

        return $this;
    }

    /**
     * The report's payment status, in the OAuth consumer's language.
     */
    public function getPaymentStatusName(): ?string
    {
        return $this->paymentStatusName;
    }

    /**
     * The report's payment status, in the OAuth consumer's language.
     */
    public function setPaymentStatusName(?string $paymentStatusName): self
    {
        $this->paymentStatusName = $paymentStatusName;

        return $this;
    }

    /**
     * The total amount of expenses marked as personal. Maximum 23 characters.
     */
    public function getPersonalAmount(): ?float
    {
        return $this->personalAmount;
    }

    /**
     * The total amount of expenses marked as personal. Maximum 23 characters.
     */
    public function setPersonalAmount(?float $personalAmount): self
    {
        $this->personalAmount = $personalAmount;

        return $this;
    }

    /**
     * The unique identifier of the policy that applies to this report. Maximum 64 characters.
     */
    public function getPolicyID(): ?string
    {
        return $this->policyID;
    }

    /**
     * The unique identifier of the policy that applies to this report. Maximum 64 characters.
     */
    public function setPolicyID(?string $policyID): self
    {
        $this->policyID = $policyID;

        return $this;
    }

    /**
     * The date that the report completed all approvals and was ready to be extracted for payment.
     *
     * @return mixed
     */
    public function getProcessingPaymentDate()
    {
        return $this->processingPaymentDate;
    }

    /**
     * The date that the report completed all approvals and was ready to be extracted for payment.
     *
     * @param mixed $processingPaymentDate
     */
    public function setProcessingPaymentDate($processingPaymentDate): self
    {
        $this->processingPaymentDate = $processingPaymentDate;

        return $this;
    }

    /**
     * If Y, then this report has its receipt receipt confirmed by the Expense Processor. Format: Y/N.
     */
    public function getReceiptsReceived(): bool
    {
        return $this->receiptsReceived;
    }

    /**
     * If Y, then this report has its receipt receipt confirmed by the Expense Processor. Format: Y/N.
     */
    public function setReceiptsReceived(bool $receiptsReceived): self
    {
        $this->receiptsReceived = $receiptsReceived;

        return $this;
    }

    /**
     * The date the report was submitted.
     *
     * @return mixed
     */
    public function getSubmitDate()
    {
        return $this->submitDate;
    }

    /**
     * The date the report was submitted.
     *
     * @param mixed $submitDate
     */
    public function setSubmitDate($submitDate): self
    {
        $this->submitDate = $submitDate;

        return $this;
    }

    /**
     * The total amount of the report.
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }

    /**
     * The total amount of the report.
     */
    public function setTotal(?float $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * The total amount of approved expenses in the report. Maximum 23 characters.
     */
    public function getTotalApprovedAmount(): ?float
    {
        return $this->totalApprovedAmount;
    }

    /**
     * The total amount of approved expenses in the report. Maximum 23 characters.
     */
    public function setTotalApprovedAmount(?float $totalApprovedAmount): self
    {
        $this->totalApprovedAmount = $totalApprovedAmount;

        return $this;
    }

    /**
     * The total amount of all non-personal expenses in the report. Maximum 23 characters.
     */
    public function getTotalClaimedAmount(): ?float
    {
        return $this->totalClaimedAmount;
    }

    /**
     * The total amount of all non-personal expenses in the report. Maximum 23 characters.
     */
    public function setTotalClaimedAmount(?float $totalClaimedAmount): self
    {
        $this->totalClaimedAmount = $totalClaimedAmount;

        return $this;
    }

    /**
     * The URI to the resource.
     */
    public function getURI(): string
    {
        return $this->uRI;
    }

    /**
     * The URI to the resource.
     */
    public function setURI(string $uRI): self
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * The date of the report assigned by the user.
     *
     * @return mixed
     */
    public function getUserDefinedDate()
    {
        return $this->userDefinedDate;
    }

    /**
     * The date of the report assigned by the user.
     *
     * @param mixed $userDefinedDate
     */
    public function setUserDefinedDate($userDefinedDate): self
    {
        $this->userDefinedDate = $userDefinedDate;

        return $this;
    }

    /**
     * The URL to post a workflow action to the report using the "Post Report Workflow Action" function.
     */
    public function getWorkflowActionUrl(): ?string
    {
        return $this->workflowActionUrl;
    }

    /**
     * The URL to post a workflow action to the report using the "Post Report Workflow Action" function.
     */
    public function setWorkflowActionUrl(?string $workflowActionUrl): self
    {
        $this->workflowActionUrl = $workflowActionUrl;

        return $this;
    }
}
