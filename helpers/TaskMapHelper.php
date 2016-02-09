<?php
namespace Craft;

/**
 * TaskMapHelper
 *
 * @author    Top Shelf Craft <michael@michaelrog.com>
 * @copyright Copyright (c) 2016, Michael Rog
 * @license   http://topshelfcraft.com/license
 * @see       http://topshelfcraft.com
 * @package   craft.plugins.taskmap
 * @since     1.0
 */
class TaskMapHelper {

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
	public static function map($tasks = array(), $elements = array(), $idSettingName = 'elementId', $description = null, $settings = array())
	{

		// We'd really prefer not to get timed out or hung up on memory limits...

		craft()->config->maxPowerCaptain();

		// Make sure we have a valid list of Task handles

		if (is_string($tasks))
		{
			$tasks = array($tasks);
		}
		elseif (!is_array($tasks))
		{
			return false;
		}

		// Make sure we have a valid list of Elements

		if ($elements instanceof ElementCriteriaModel)
		{
			$elements = $elements->ids();
		}
		elseif (!is_array($elements))
		{
			$elements = array();
		}

		// Make sure we have a valid settings array

		if (!is_array($settings))
		{
			$settings = array();
		}

		// Spawn tasks for each Task/Element

		$success = true;

		foreach ($elements as $id)
		{

			foreach ($tasks as $task)
			{

				// Add the Element ID to any provided settings.
				$taskSettings = $settings;
				$taskSettings[$idSettingName] = $id;

				// Create the new task.
				$t = craft()->tasks->createTask($task, $description, $taskSettings);

				// Note whether the new task was created successfully, and then clear it from memory.
				$success = $success && !empty($t);
				unset($t);

			}

		}

		return $success;

	}

}