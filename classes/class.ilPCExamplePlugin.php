<?php

include_once("./Services/COPage/classes/class.ilPageComponentPlugin.php");
 
/**
 * Example user interface plugin
 *
 * @author Alex Killing <alex.killing@gmx.de>
 * @version $Id$
 *
 */
class ilPCExamplePlugin extends ilPageComponentPlugin
{
	/**
	 * Get plugin name 
	 *
	 * @return string
	 */
	function getPluginName()
	{
		return "PCExample";
	}
	
	
	/**
	 * Get plugin name 
	 *
	 * @return string
	 */
	function isValidParentType($a_parent_type)
	{
		if (in_array($a_parent_type, array("lm", "wpg")))
		{
			return true;
		}
		return false;
	}
	
	/**
	 * Get Javascript files
	 */
	function getJavascriptFiles()
	{
		return array("js/pcexp.js");
	}
	
	/**
	 * Get css files
	 */
	function getCssFiles()
	{
		return array("css/pcexp.css");
	}

}

?>
