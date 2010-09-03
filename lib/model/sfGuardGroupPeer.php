<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardGroupPeer.php 9999 2008-06-29 21:24:44Z fabien $
 */
class sfGuardGroupPeer extends PluginsfGuardGroupPeer
{
	public static function getAllGroups()
	{
		return new Criteria();
	}
	
	
	public static function getAll()
	{
		$timezones = self::doSelect(new Criteria());
		$timezonesArray = array();
		
		if(!is_null($timezonesArray))
		{
			foreach($timezones as $timezone)
			{
				$timezonesArray[$timezone->getId()] = htmlspecialchars($timezone->getName(),ENT_QUOTES );
			}
		}
		return $timezonesArray;		
	}

        public static function getAllForSelect()
        {
            $c = new Criteria();

            $projectOwnerGroupId = ConfigPeer::get('project_owner_sf_guard_group_id');
            if ($projectOwnerGroupId > 0) {
                $c->add(self::ID, $projectOwnerGroupId, Criteria::NOT_EQUAL);
            }

            $objects = self::doSelect($c);

            if($objects!=null)
            {
                foreach ($objects as $object)
                {
                    $array[$object->getId()] = $object->getName();
                }

                return $array;
            } else {
                return array();
            }
        }

	public static function isEditable(Array $args) {
		if(sfContext::getInstance()->getUser()->hasCredential('role_edit')) {
			return true;
		}else{
			return false;
		}
	}

        public static function getProjectLeaderRoleId($throwExceptionOnError = true)
        {
            $c = new Criteria();
            $c->add(ConfigPeer::NAME, 'project_owner_sf_guard_group_id');
            $c->addJoin(ConfigPeer::VALUE, sfGuardGroupPeer::ID);

            $group = sfGuardGroupPeer::doSelectOne($c);

            if($throwExceptionOnError && !$group) {
                throw new sfException("There is no project role marked as project leader");
            } else if (!$group) {
                return null;
            }

            return $group->getId();
        }

        public static function clearProjectOwnerRole()
        {
            ConfigPeer::set('project_owner_sf_guard_group_id', null);
        }
}
