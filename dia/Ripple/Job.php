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
class Job {
    // Attributes
    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $SONumber;

    /**
     * XXX
     *
     * @var    date
     * @access public
     */
    public $DateRequired;

    /**
     * XXX
     *
     * @var    char(40)
     * @access public
     */
    public $Product;

    /**
     * XXX
     *
     * @var    dec
     * @access public
     */
    public $Quantity;

    /**
     * XXX
     *
     * @var    char(1)
     * @access public
     */
    public $Status = P W C;

    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $LinkJobNumber;

    /**
     * XXX
     *
     * @var    char(60)
     * @access public
     */
    public $ArtworkAddress;

    /**
     * XXX
     *
     * @var    dec
     * @access public
     */
    public $MaterialCost;

    /**
     * XXX
     *
     * @var    int
     * @access protected
     */
    protected $JobNumber;

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
    /**
     * XXX
     * 
     * @access public
     */
    public function CRUD()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function ConfirmMaterial()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function ConfirmRoute()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function CalculateRequirement()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function JobTicket()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function CalculateBalance()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
