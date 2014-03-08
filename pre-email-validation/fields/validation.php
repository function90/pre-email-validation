<?php

/**
* @copyright	Copyright (C) 2013 Function90.
* @license		GNU/GPL, see LICENSE.php
* @contact		dev.function90+ contact@gmail.com
* @author		Function90
*/

defined( '_JEXEC' ) or die( 'Restricted access' );


JFormHelper::loadFieldClass('list');

/** 
 * Pre Email Validation Field
 */
class F90PEVFormFieldValidation extends JFormField
{
	protected function getInput()
	{
		return '<input type="button" class="btn" id="f90sendvalidationcode" value="'.JText::_('PLG_SYSTEM_PREEMAILVALIDATION_SEND_CODE').'"></input><div>&nbsp;</div>
				<input required="required" class="required validate-checkValidationCode" type="text" name="'.$this->name.'" id="f90validationcode"><div>&nbsp;</div>';
	}
}