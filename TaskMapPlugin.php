<?php
namespace Craft;

/**
 * TaskMapPlugin
 *
 * @author    Top Shelf Craft <michael@michaelrog.com>
 * @copyright Copyright (c) 2016, Michael Rog
 * @license   http://topshelfcraft.com/license
 * @see       http://topshelfcraft.com
 * @package   craft.plugins.taskmap
 * @since     1.0
 */
class TaskMapPlugin extends BasePlugin
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Task Map';
	}

	/**
	 * Return the plugin description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return 'A helper/service for mapping Task(s) onto Element(s)';
	}

	/**
	 * Return the plugin developer's name
	 *
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Top Shelf Craft (Michael Rog)';
	}

	/**
	 * Return the plugin developer's URL
	 *
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://topshelfcraft.com';
	}

	/**
	 * Return the plugin's Documentation URL
	 *
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return false;
		// TODO
	}

	/**
	 * Return the plugin's current version
	 *
	 * @return string
	 */
	public function getVersion()
	{
		return '0.1.0';
	}

	/**
	 * Return the plugin's db schema version
	 *
	 * @return string|null
	 */
	public function getSchemaVersion()
	{
		return '0.0.0.0';
	}

	/**
	 * Return the plugin's db schema version
	 *
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return false;
		// TODO
	}

	/**
	 * Return whether the plugin has a CP section
	 *
	 * @return bool
	 */
	public function hasCpSection()
	{
		return false;
	}

}
