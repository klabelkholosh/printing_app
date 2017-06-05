<?php

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Person {
    // Attributes
    /**
     * XXX
     *
     * @var    char(60) $Name
     * @access public
     */
    var $Name;

    /**
     * XXX
     *
     * @var    char(60) $Email
     * @access public
     */
    var $Email;

    /**
     * XXX
     *
     * @var    char(60) $Phone
     * @access public
     */
    var $Phone;

    /**
     * XXX
     *
     * @var    bytea $Fingerprint
     * @access public
     */
    var $Fingerprint;

    /**
     * XXX
     *
     * @var    char(20) $PersonCode
     * @access protected
     */
    var $_PersonCode;

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
