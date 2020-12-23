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
     * @internal
     * The internal invoice object
     * @var      \horstoeko\ubl\entities\main\Invoice
     */
    protected $invoiceObject = null;

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
     * @inheritDoc
     */
    public function getInvoiceObject(): Invoice
    {
        return $this->invoiceObject;
    }

    /**
     * This method can be overridden in derived class
     * It is called before a XML is written
     *
     * @return void
     */
    protected function onBeforeGetContent(): void
    {
        // Do nothing
    }

    /**
     * Write the content of a UBL object to a string
     *
     * @return string
     */
    public function getContent(): string
    {
        $this->onBeforeGetContent();
        return $this->serializer->serialize($this->invoiceObject, 'xml');
    }

    /**
     * Write the content of a UBL object to a file
     *
     * @param  string $xmlfilename
     * The filename to which the content of the UBL invoice object is
     * saved to as XML
     * @return UblDocumentNative
     */
    public function writeFile(string $xmlfilename): UblDocumentNative
    {
        file_put_contents($xmlfilename, $this->getContent());
        return $this;
    }

    /**
     * Read XML content from string
     *
     * @param string $xmlcontent
     * The XML content to deserialize
     * @return UblDocumentNative
     */
    public function readContent(string $xmlcontent): UblDocumentNative
    {
        $this->invoiceObject = $this->serializer->deserialize($xmlcontent, 'horstoeko\ubl\entities\main\Invoice', 'xml');
        return $this;
    }

    /**
     * Read XML content from file
     *
     * @param string $xmlfilename
     * The filename which contains the XML content
     * @return UblDocumentNative
     */
    public function readFile(string $xmlfilename): UblDocumentNative
    {
        $this->readContent(file_get_contents($xmlfilename));
        return $this;
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
