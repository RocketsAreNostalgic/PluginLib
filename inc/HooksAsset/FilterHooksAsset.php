<?php
/**
 * FilterHookAttributeInterface is used by an object that needs to subscribe to
 * WordPress filter hooks.
 *
 * Reference https://carlalexander.ca/polymorphism-wordpress-interfaces/
 *
 *  @package  RanPluginLib
 */

namespace Ran\PluginLib\HooksAttribute;

/**
 * ActionHookAttributeInterface is used by an object that needs to subscribe to WordPress filter hooks.
 */
interface FilterHooksAttributeInterface {

	/**
	 * Returns an array of filters that the object needs to be subscribed to.
	 *
	 * The array key is the name of the filter hook. The value can be:
	 *
	 *  * The method name
	 *  * An array with the method name and priority
	 *  * An array with the method name, priority and number of accepted arguments
	 *
	 * For instance:
	 *
	 *  * array('filter_name' => 'method_name')
	 *  * array('filter_name' => array('method_name', $priority))
	 *  * array('filter_name' => array('method_name', $priority, $accepted_args))
	 *
	 * @return array
	 */
	public static function get_filter():array;

}