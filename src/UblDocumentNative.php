<?php

/**
 * This file is a part of horstoeko/ubl.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\ubl;

use \horstoeko\ubl\entities\main\Invoice;

/**
 * Class representing the native ubl invoice creator
 *
 * @category UBL
 * @package  UBL
 * @author   D. Erling <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/ubl
 */
class UblDocumentNative extends UblDocument
{
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
     * Creates a new instance of the invoice class
     *
     * @return UblDocumentNative
     */
    private function initInvoiceObject(): UblDocumentNative
    {
        $this->invoiceObject = new Invoice();
        return $this;
    }
}
