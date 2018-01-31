<?php
require_once 'Product.php';
require_once 'Material.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class DefaultMaterial {
    // Attributes
    /**
     * XXX
     *
     * @var    char(20) $ProductCode
     * @access public
     */
    var $ProductCode;

    /**
     * XXX
     *
     * @var    char(60) $DefaultName
     * @access public
     */
    var $DefaultName;

    /**
     * XXX
     *
     * @var    dec $DefaultValue
     * @access public
     */
    var $DefaultValue;

    /**
     * XXX
     *
     * @var    char(40) $DefaultMaterial
     * @access public
     */
    var $DefaultMaterial;

    /**
     * XXX
     *
     * @var    dec $DefaultQty
     * @access public
     */
    var $DefaultQty;

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
