<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Quotes extends CI_Model {

	// The data comes from http://www.quotery.com/top-100-funny-quotes-of-all-time/?PageSpeed=noscript
	var $data = array(
		array('id' => '1', 'who' => 'robot1', 'mug' => 'a.jpg'),
		array('id' => '2', 'who' => 'robot2', 'mug' => 'b.jpg'),
		array('id' => '3', 'who' => 'robot3', 'mug' => 'c.jpg'),
		array('id' => '4', 'who' => 'robot4', 'mug' => 'm.jpg'),
		array('id' => '5', 'who' => 'robot5', 'mug' => 'r.jpg'),
		array('id' => '6', 'who' => 'robot6', 'mug' => 'w.jpg')

	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve a single quote
	public function get($which)
	{
		// iterate over the data until we find the one we pwant
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}

	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}