<?php
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       2.2.7
 */

if ( ! class_exists( 'Kirki_Field_Groupdivider' ) ) {

	/**
	 * Prior to version 0.8 there was a separate 'group-title' field.
	 * This exists here just for backwards-compatibility purposes.
	 */
	class Kirki_Field_Groupdivider extends Kirki_Field {
		
		protected function set_type() {

			$this->type = 'kirki-groupdivider';

		}
		
		
	}

}
