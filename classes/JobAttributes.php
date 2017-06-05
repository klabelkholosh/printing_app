<?php
require_once 'Job.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class JobAttributes {
    // Attributes
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
     * @var    char(40) $ProductCode
     * @access public
     */
    var $ProductCode;

    /**
     * XXX
     *
     * @var    char(60) $AttrName
     * @access public
     */
    var $AttrName;

    /**
     * XXX
     *
     * @var    dec $AttrValue
     * @access public
     */
    var $AttrValue;

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
    function CRUD() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
