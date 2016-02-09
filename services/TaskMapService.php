<?php
namespace Craft;

/**
 * TaskMapService
 *
 * @author    Top Shelf Craft <michael@michaelrog.com>
 * @copyright Copyright (c) 2016, Michael Rog
 * @license   http://topshelfcraft.com/license
 * @see       http://topshelfcraft.com
 * @package   craft.plugins.taskmap
 * @since     1.0
 */
class TaskMapPlugin extends BaseApplicationComponent
{

	/**
	 * Spawns an individual instance of one or more Tasks for each Element in a criteria
	 *
	 * @param array $tasks
	 * @param ElementCriteriaModel|array $elements
	 * @param string $idSettingName
	 * @param string $description
	 * @param array $settings
	 *
	 * @return bool
	 */
	public function map($tasks = array(), $elements = array(), $idSettingName = 'elementId', $description = null, $settings = array())
	{
		return TaskMapHelper::map($tasks, $elements, $idSettingName, $description, $settings);
	}

}