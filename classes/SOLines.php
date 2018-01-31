<?php
require_once 'Product.php';
require_once 'SalesOrder.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class SOLines {
    // Attributes
    /**
     * XXX
     *
     * @var    int $SONumber
     * @access public
     */
    var $SONumber;

    /**
     * XXX
     *
     * @var    int $JobNumber
     * @access public
     */
    var $JobNumber;

    /**
     * XXX
     *
     * @var    char(40) $Product
     * @access public
     */
    var $Product;

    /**
     * XXX
     *
     * @var    decimal $QuantityOrdered
     * @access public
     */
    var $QuantityOrdered;

    /**
     * XXX
     *
     * @var    decimal $PriceUnit
     * @access public
     */
    var $PriceUnit;

    /**
     * XXX
     *
     * @var    decimal $Price
     * @access public
     */
    var $Price;

    /**
     * XXX
     *
     * @var    char $Status
     * @access public
     */
    var $Status = L Q O C;

    // Associations
    /**
     * XXX
     *
     * @var    Product $unnamed
     * @access private
     * @accociation Product to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    SalesOrder $unnamed
     * @access private
     * @accociation SalesOrder to unnamed
     */
    #var $unnamed;

    // Operations
}

?>
