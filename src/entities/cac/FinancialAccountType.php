<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing FinancialAccountType
 *
 * ABIE
 *  Financial Account. Details
 *  Information about a Financial Account.
 *  Financial Account
 * XSD Type: FinancialAccountType
 */
class FinancialAccountType
{

    /**
     * BBIE
     *  Financial Account. Identifier
     *  The identifier for the Financial Account; the Bank Account Number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Financial Account. Name
     *  The name of the Financial Account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  The type of Financial Account, expressed as a code.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountTypeCode $accountTypeCode
     */
    private $accountTypeCode = null;

    /**
     * BBIE
     *  Financial Account. Currency Code. Code
     *  The currency in which the Financial Account is held, expressed as a code.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CurrencyCode $currencyCode
     */
    private $currencyCode = null;

    /**
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PaymentNote[] $paymentNote
     */
    private $paymentNote = [
        
    ];

    /**
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  An association to Financial Institution Branch.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *
     * @var \horstoeko\ubl\entities\cac\FinancialInstitutionBranch $financialInstitutionBranch
     */
    private $financialInstitutionBranch = null;

    /**
     * ASBIE
     *  Financial Account. Country
     *  An association to Country.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *
     * @var \horstoeko\ubl\entities\cac\Country $country
     */
    private $country = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Financial Account. Identifier
     *  The identifier for the Financial Account; the Bank Account Number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
     *
     * @return \horstoeko\ubl\entities\cbc\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Financial Account. Identifier
     *  The identifier for the Financial Account; the Bank Account Number.
     *  0..1
     *  Financial Account
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  SWIFT(BIC) and IBAN are defined in ISO 9362 and ISO 13616.
     *
     * @param \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Financial Account. Name
     *  The name of the Financial Account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Financial Account. Name
     *  The name of the Financial Account.
     *  0..1
     *  Financial Account
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Name $name
     * @return self
     */
    public function setName(\horstoeko\ubl\entities\cbc\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as accountTypeCode
     *
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  The type of Financial Account, expressed as a code.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AccountTypeCode
     */
    public function getAccountTypeCode()
    {
        return $this->accountTypeCode;
    }

    /**
     * Sets a new accountTypeCode
     *
     * BBIE
     *  Financial Account. Account Type Code. Code
     *  The type of Financial Account, expressed as a code.
     *  0..1
     *  Financial Account
     *  Account Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AccountTypeCode $accountTypeCode
     * @return self
     */
    public function setAccountTypeCode(\horstoeko\ubl\entities\cbc\AccountTypeCode $accountTypeCode)
    {
        $this->accountTypeCode = $accountTypeCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * BBIE
     *  Financial Account. Currency Code. Code
     *  The currency in which the Financial Account is held, expressed as a code.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * BBIE
     *  Financial Account. Currency Code. Code
     *  The currency in which the Financial Account is held, expressed as a code.
     *  0..1
     *  Financial Account
     *  Currency Code
     *  Code
     *  Currency_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CurrencyCode $currencyCode
     * @return self
     */
    public function setCurrencyCode(\horstoeko\ubl\entities\cbc\CurrencyCode $currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Adds as paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\PaymentNote $paymentNote
     */
    public function addToPaymentNote(\horstoeko\ubl\entities\cbc\PaymentNote $paymentNote)
    {
        $this->paymentNote[] = $paymentNote;
        return $this;
    }

    /**
     * isset paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentNote($index)
    {
        return isset($this->paymentNote[$index]);
    }

    /**
     * unset paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentNote($index)
    {
        unset($this->paymentNote[$index]);
    }

    /**
     * Gets as paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PaymentNote[]
     */
    public function getPaymentNote()
    {
        return $this->paymentNote;
    }

    /**
     * Sets a new paymentNote
     *
     * BBIE
     *  Financial Account. Payment_ Note. Text
     *  Free-form text applying to the Payment to the owner of this account.
     *  0..n
     *  Financial Account
     *  Payment
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PaymentNote[] $paymentNote
     * @return self
     */
    public function setPaymentNote(array $paymentNote)
    {
        $this->paymentNote = $paymentNote;
        return $this;
    }

    /**
     * Gets as financialInstitutionBranch
     *
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  An association to Financial Institution Branch.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *
     * @return \horstoeko\ubl\entities\cac\FinancialInstitutionBranch
     */
    public function getFinancialInstitutionBranch()
    {
        return $this->financialInstitutionBranch;
    }

    /**
     * Sets a new financialInstitutionBranch
     *
     * ASBIE
     *  Financial Account. Financial Institution_ Branch. Branch
     *  An association to Financial Institution Branch.
     *  0..1
     *  Financial Account
     *  Financial Institution
     *  Branch
     *  Branch
     *
     * @param \horstoeko\ubl\entities\cac\FinancialInstitutionBranch $financialInstitutionBranch
     * @return self
     */
    public function setFinancialInstitutionBranch(\horstoeko\ubl\entities\cac\FinancialInstitutionBranch $financialInstitutionBranch)
    {
        $this->financialInstitutionBranch = $financialInstitutionBranch;
        return $this;
    }

    /**
     * Gets as country
     *
     * ASBIE
     *  Financial Account. Country
     *  An association to Country.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *
     * @return \horstoeko\ubl\entities\cac\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ASBIE
     *  Financial Account. Country
     *  An association to Country.
     *  0..1
     *  Financial Account
     *  Country
     *  Country
     *
     * @param \horstoeko\ubl\entities\cac\Country $country
     * @return self
     */
    public function setCountry(\horstoeko\ubl\entities\cac\Country $country)
    {
        $this->country = $country;
        return $this;
    }


}

