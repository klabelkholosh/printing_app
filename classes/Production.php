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
     * @var    int $Jobnumber
     * @access public
     */
    var $Jobnumber;

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
     * @var    int $Quantity
     * @access public
     */
    var $Quantity;

    /**
     * XXX
     *
     * @var    date $DateProduced
     * @access public
     */
    var $DateProduced;

    /**
     * XXX
     *
     * @var    time $TineProduced
     * @access public
     */
    var $TineProduced;

    /**
     * XXX
     *
     * @var    char(20) $PersonCode
     * @access public
     */
    var $PersonCode;

    /**
     * XXX
     *
     * @var    char(1) $Type
     * @access public
     */
    var $Type = R T S;

    // Associations
    /**
     * XXX
     *
     * @var    Job $unnamed
     * @access private
     * @accociation Job to unnamed
     */
    #var $unnamed;

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
    function CRUD() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function BalanceByJob() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function BalanceByDate() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
