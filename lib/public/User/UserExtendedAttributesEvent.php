<?php
/**
 * @author Sujith Haridasan <sharidasan@owncloud.com>
 *
 * @copyright Copyright (c) 2019, ownCloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

// use OCP namespace for all classes that are considered public.
// This means that they should be used by apps instead of the internal ownCloud classes
namespace OCP\User;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class UserExtendedAttributesEvent
 *
 * @package OCP\User
 * @since 10.3.1
 */
class UserExtendedAttributesEvent extends Event {
	const USER_EXTENDED_ATTRIBUTES = 'UserExtendedAttributesEvent';

	/** @var string */
	private $event;

	/** @var array */
	private $attributes;

	/**
	 * UserExtendedAttributesEvent constructor.
	 *
	 * @param string $event
	 * @param array $attributes
	 * @since 10.3.1
	 */
	public function __construct($event, $attributes) {
		$this->event = $event;
		$this->attributes = $attributes;
	}

	/**
	 * Get the extended attributes of user
	 *
	 * @return array
	 */
	public function getAttributes() {
		return $this->attributes;
	}

	/**
	 * Set the attributes
	 *
	 * @param string $appName
	 * @param array $data
	 */
	public function setAttributes($app, $data) {
		$this->attributes[$app] = $data;
	}
}
