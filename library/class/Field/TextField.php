<?php
namespace tef\Field;

defined( 'ABSPATH' ) or die('Don\'t touch the eggs, please!');

/**
 * Class TextField
 * @since 0.0.01
 * @author GuilleGarcia
 */
class TextField extends Field{
	
	protected $type = "text";
	
	/**
	 * Constructor
	 */
	function __construct($ID=NULL){
		
		parent::__construct($ID);
		
	}
	
	/**
	 * Checks whether the value corresponds to the specifications
	 * {@inheritDoc}
	 * @see TEF_Field::validate()
	 */
	function validate($value){
		
		
	}
}