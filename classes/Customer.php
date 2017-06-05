<?php

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Customer {
    // Attributes
    /**
     * XXX
     *
     * @var    char(40) $Name
     * @access public
     */
    var $Name;

    /**
     * XXX
     *
     * @var    char(1) $Status
     * @access public
     */
    var $Status = P A H I;

    /**
     * XXX
     *
     * @var    char(60) $LoginEmail
     * @access public
     */
    var $LoginEmail;

    /**
     * XXX
     *
     * @var    char(20) $Password
     * @access public
     */
    var $Password;

    /**
     * XXX
     *
     * @var    char(10) $CustomerCode
     * @access protected
     */
    var $_CustomerCode;

    // Associations
    // Operations
    /**
     * XXX
     * 
     * @access public
     */
    function CRUD() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
