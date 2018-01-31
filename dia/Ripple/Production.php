<?php
require_once 'Job.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Production {
    // Attributes
    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $Jobnumber;

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
     * @var    int
     * @access public
     */
    public $Quantity;

    /**
     * XXX
     *
     * @var    date
     * @access public
     */
    public $DateProduced;

    /**
     * XXX
     *
     * @var    time
     * @access public
     */
    public $TimeProduced;

    /**
     * XXX
     *
     * @var    char(20)
     * @access public
     */
    public $PersonCode;

    /**
     * XXX
     *
     * @var    char(1)
     * @access public
     */
    public $Type = R T S;

    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $Containers;

    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $QtyPerContainer;

    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $QtyLastContainer;

    // Associations
    /**
     * XXX
     *
     * @var    Job $unnamed
     * @access private
     * @accociation Job to unnamed
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
    public function BalanceByJob()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function BalanceByDate()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
