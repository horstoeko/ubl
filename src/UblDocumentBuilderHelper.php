<?php

/**
 * This file is a part of horstoeko/ubl.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\ubl;

use \horstoeko\ubl\UblDocumentBuilder;
use \horstoeko\ubl\entities\cac\Party;
use \horstoeko\ubl\entities\main\Invoice;
use \horstoeko\ubl\entities\cac\AccountingSupplierParty;

/**
 * Class representing the ubl invoice builder tools
 *
 * @category UBL
 * @package  UBL
 * @author   D. Erling <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/ubl
 */
class UblDocumentBuilderHelper
{
    /**
     * Internal reference to the builder
     *
     * @var horstoeko\ubl\UblDocumentBuilder
     */
    private $ublDocumentBuilder = null;

    /**
     * Constructor
     *
     * @param UblDocumentBuilder $ublDocumentBuilder
     */
    public function __construct(UblDocumentBuilder $ublDocumentBuilder)
    {
        $this->ublDocumentBuilder = $ublDocumentBuilder;
    }

    /**
     * Returns the internal invoice object of the builder
     *
     * @return Invoice
     */
    private function getInvoiceObject(): Invoice
    {
        return $this->ublDocumentBuilder->getInvoiceObject();
    }

    /**
     * Make sure that there is a Accounting Supplier Party
     *
     * @return AccountingSupplierParty
     */
    public function ensureAccountingSupplier(): AccountingSupplierParty
    {
        $accountingSupplierParty = $this->getInvoiceObject()->getAccountingSupplierParty() ?? $this->getInvoiceObject()->setAccountingSupplierParty((new AccountingSupplierParty())->setParty(new Party()))->getAccountingSupplierParty();
        return $accountingSupplierParty;
    }
}