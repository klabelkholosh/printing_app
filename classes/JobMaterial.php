<?php
require_once 'Job.php';
require_once 'Material.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class JobMaterial {
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
     * @var    char(40) $MaterialCode
     * @access public
     */
    var $MaterialCode;

    /**
     * XXX
     *
     * @var    varchar $Description
     * @access public
     */
    var $Description;

    /**
     * XXX
     *
     * @var    dec $Quantity
     * @access public
     */
    var $Quantity;

    /**
     * XXX
     *
     * @var    varchar $Instruction
     * @access public
     */
    var $Instruction;

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
     * @var    Material $unnamed
     * @access private
     * @accociation Material to unnamed
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
