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
     * @var    char(60)
     * @access public
     */
    public $Name;

    /**
     * XXX
     *
     * @var    char(60)
     * @access public
     */
    public $Email;

    /**
     * XXX
     *
     * @var    char(60)
     * @access public
     */
    public $Phone;

    /**
     * XXX
     *
     * @var    bytea
     * @access public
     */
    public $BiometricID;

    /**
     * XXX
     *
     * @var    char(20)
     * @access protected
     */
    protected $PersonCode;

    // Associations
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

}

?>
