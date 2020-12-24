<?php

/**
 * This file is a part of horstoeko/ubl.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\ubl;

use horstoeko\ubl\entities\main\Invoice;
use horstoeko\ubl\entities\cbc\ProfileID;
use horstoeko\ubl\entities\cbc\CustomizationID;

/**
 * Class representing the ubl invoice builder
 *
 * @category UBL
 * @package  UBL
 * @author   D. Erling <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/ubl
 */
class UblDocumentBuilderBase extends UblDocument
{
    /**
     * A list of supported mimetypes by binaryattachments
     */
    const SUPPORTEDTMIMETYPES = [
        "application/pdf",
        "image/png",
        "image/jpeg",
        "text/csv",
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "application/vnd.oasis.opendocument.spreadsheet",
    ];

    /**
     * Constructor
     *
     * @codeCoverageIgnore
     */
    public function __construct()
    {
        parent::__construct();
        $this->initInvoiceObject();
    }

    /**
     * Sets the identifier for the customization
     *
     * @param  string $customization
     * The identifier for the customization
     * @return UblDocumentBuilderBase
     */
    public function setDocumentCustomization(string $customization): UblDocumentBuilderBase
    {
        $this->invoiceObject->setCustomizationID(new CustomizationID($customization));
        return $this;
    }

    /**
     * Set Profile
     *
     * @param  string $profileId
     * @return UblDocumentBuilderBase
     */
    public function setDocumentProfile($profileId): UblDocumentBuilderBase
    {
        $this->invoiceObject->setProfileID(new ProfileID($profileId));
        return $this;
    }

    /**
     * Creates a new instance of the invoice class
     *
     * @return             UblDocumentBuilderBase
     * @codeCoverageIgnore
     */
    private function initInvoiceObject(): UblDocumentBuilderBase
    {
        $this->invoiceObject = new Invoice();

        $this->onInitInvoiceObject();

        return $this;
    }

    /**
     * This method can be overwritten in derived classes, e.g. for setting
     * up the customization and the profile of the ubl document
     *
     * @return             UblDocumentBuilderBase
     * @codeCoverageIgnore
     */
    protected function onInitInvoiceObject(): UblDocumentBuilderBase
    {
        return $this;
    }
}
