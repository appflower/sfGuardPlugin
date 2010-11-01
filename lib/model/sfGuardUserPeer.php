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
 * @version    SVN: $Id: sfGuardUserPeer.php 9999 2008-06-29 21:24:44Z fabien $
 */
class sfGuardUserPeer extends PluginsfGuardUserPeer
{
	public static function getAll($user_id=null)
	{
		$c = new Criteria();
		$c->add(self::IS_ACTIVE, true);
		if($user_id)
			$c->addOr(self::ID, $user_id);
		$a = $c->toString();
		$objects=self::doSelect($c);

		if($objects!=null)
		{
			foreach ($objects as $object)
			{
				$array[$object->getId()]=$object->getFirstName().' '.$object->getLastName();
			}

			return $array;
		}
		else return array();
	}

	public static function getAllNotAssignedForProject($project_id, $user_id)
	{
		$c2 = new Criteria();
		$c2->add(self::IS_ACTIVE, true);
		$c2->add(ProjectUserPeer::PROJECT_ID, $project_id);
		if($user_id != null) {//we want to see user while edit
			$c2->add(ProjectUserPeer::USER_ID, $user_id, Criteria::NOT_EQUAL);
		}
		$projectUsers = ProjectUserPeer::doSelect($c2);
		$projectUserIds = array();
		if($projectUsers != null) {
			foreach ($projectUsers as $projectUser) {
				$projectUserIds[] = $projectUser->getUserId();
			}
		}

		$c1 = new Criteria();
		$c1->add(self::IS_ACTIVE, true);
		$c1->addAnd(self::ID, $projectUserIds, Criteria::NOT_IN);
		$objects=self::doSelect($c1);

		if($objects!=null)
		{
			foreach ($objects as $object)
			{
				$array[$object->getId()]=$object->getFirstName().' '.$object->getLastName();
			}

			return $array;
		}
		else return array();
	}

	public static function getAllUsers()
	{
		$c = new Criteria();
		$c->addJoin(self::ID,sfGuardUserProfilePeer::USER_ID);
		return $c;
	}

	public static function fetchData() {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::ID);

		return $c;
	}

	public static function isEditable(Array $args) {
		if(sfContext::getInstance()->getUser()->hasCredential('user_list_edit')) {
			return true;
		}else{
			return false;
		}
	}

	public static function getEmails()
	{
		$objects=self::doSelect(new Criteria());

		if($objects!=null)
		{
			foreach ($objects as $object)
			{
				$array[$object->getUsername()]=$object->getFirstName().' '.$object->getLastName();
			}

			return $array;
		}
		else return array();
	}

	/**
	 * used in beanstalk web hooks
	 *
	 * @param string $email
	 * @return object
	 * @author radu
	 */
	public static function getUserByBeanstalkEmail($email)
	{
		$c = new Criteria();
		$c->add(self::USERNAME,$email);
		$obj=self::doSelectOne($c);

		if($obj!=null)
		{
			return $obj;
		}
		else {
			return false;
		}
	}

	public static function getByUsername($username)
	{
		$c = new Criteria();
		$c->add(self::USERNAME,$username);
		return self::doSelectOne($c);
	}

	/**
	 * search for user by username, id or beanstalk_user
	 *
	 * @param string $keyword
	 * @return object
	 * @author radu
	 */
	public static function searchForUser($keyword)
	{
		$c = new Criteria();
		$c->add(self::IS_ACTIVE,1);
		$c->addJoin(sfGuardUserProfilePeer::USER_ID,self::ID);
		$crit0=$c->getNewCriterion(self::USERNAME,$keyword);
		$crit1=$c->getNewCriterion(self::ID,$keyword);
		$crit2=$c->getNewCriterion(sfGuardUserProfilePeer::BEANSTALK_USER,$keyword);
		$crit0->addOr($crit1);
		$crit0->addOr($crit2);
		$c->addAnd($crit0);
		$obj=self::doSelectOne($c);

		if($obj!=null)
		{
			return $obj;
		}
		else {
			return false;
		}
	}

	public static function sendWelcomeEmail($user_id, $password)
	{
		$userObj = sfGuardUserPeer::retrieveByPK($user_id);

		if ($userObj->getUsername()) {
			$parameters = array(
                    'userObj'  => $userObj,
                    'password' => $password,
                    'email'    => $userObj->getUsername(),
                    'subject'  => 'Welcome to Seedcontrol',
                    'from'     => 'Seedcontrol'
                    );

                    afAutomailer::saveMail('mail', 'sendWelcomeEmail', $parameters);
		}

	}

	public static function getUsersByEmailCc($ticket_id=null)
	{
		if($ticket_id!=null) {
			$ticketObj = TicketPeer::retrieveByPK($ticket_id);
		}
		
		$c = new Criteria();
		$c->add(self::IS_ACTIVE, true);
		if($ticket_id!=null) {
			$c->add(self::ID, array($ticketObj->getUserId(), $ticketObj->getOwnerId()), Criteria::NOT_IN);
			// when editing ticket filter user by project permission
			$c->addJoin(sfGuardUserPeer::ID, ProjectUserPeer::USER_ID, Criteria::INNER_JOIN);
			$c->add(ProjectUserPeer::PROJECT_ID, $ticketObj->getTicketMilestone()->getProjectId());
			$c->addJoin(sfGuardUserPeer::ID, ProjectPermissionPeer::USER_ID, Criteria::INNER_JOIN);
		}
		$objs=self::doSelect($c);
		$options=array();
		if($objs!=null)
		{
			foreach ($objs as $obj)
			{
				$options[$obj->getUsername()]=$obj->getName();
			}
		}

		$selected = array();
		if($ticket_id!=null) {
			$emails = explode(',', $ticketObj->getEmailCc());
		}

		if(isset($emails) && is_array($emails))
		{
			foreach($emails as $email)
			{
				$userObj = sfGuardUserPeer::getByUsername($email);
				if(isset($userObj))
				{
					$selected[$userObj->getUsername()] = $userObj->getName();
				}
			}
		}
	  
		return array($options,$selected);
	}
	
	public static function getUsersWithoutTickets() {
		$c = new Criteria();
		$c->add(self::IS_ACTIVE, 1);	
		$users = array();
		foreach(self::doSelect($c) as $obj){
			$c = new Criteria();
			$c->add(TicketPeer::USER_ID, $obj->getId());
			TicketPeer::getActiveTickets($c);
			if(TicketPeer::doCount($c)==0){
				$users[] = $obj->getId();
			} 
		}
				
		$c = new Criteria();
		$c->add(self::ID,$users, Criteria::IN);
		$c->addJoin(self::ID,sfGuardUserProfilePeer::USER_ID);
		return $c;
	}
}
