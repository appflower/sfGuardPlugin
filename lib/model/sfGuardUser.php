<?php
class sfGuardUser extends PluginsfGuardUser implements AppFlowerUser {
    public function __toString() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    public function getName() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }

    public function getHtmlName() {
        return '<a class="widgetLoad" href="' . sfContext::getInstance()->getController()->genUrl('/sfGuardUser/editUser?id=' . $this->getId(), true) . '" class="widgetLoad"> ' . self::getName() . ' </a>';
    }

    public function getAccount() {
        if ($this->getId() == 1)return 'admin';
        else return sprintf("user%04s", $this->getId());
    }


    public function getFirstName() {
        return $this->getProfile()->getFirstName();
    }

    public function getLastName() {
        return $this->getProfile()->getLastName();
    }

    public function getLogin($format = 'Y-m-d H:i:s') {
        if (!is_null($this->getLastLogin($format))) {
            return $this->getLastLogin($format);
        }
        else
        {
            return 'Never logged in';
        }
    }

    public function getHtmlStatus() {
        sfProjectConfiguration::getActive()->loadHelpers(array("Url", "Tag", "Asset"/*, "Javascript"*/));
        if ($this->getIsActive()) {
            return image_tag('famfamfam/user_green', array('title' => 'User is active'));
        }
        else
        {
            return image_tag('famfamfam/user_red', array('title' => 'User is inactive'));
        }
    }

    public function setIsActive($v) {
        if ($this->getId() == 1 && !$v) {
            // admin cannot be disabled
            return $this;
        }
        return parent::setIsActive($v);
    }

    public function getPicture() {
        sfProjectConfiguration::getActive()->loadHelpers(array("Url", "Tag", "Thumbnail"));
        $img = $this->getProfile()->getProfilePicture();
        if (is_file(sfConfig::get('sf_root_dir').'/web/'.$img)) {
            return thumbnail_tag($this->getProfile()->getProfilePicture(), 100, 100);
        } else {
        	return thumbnail_tag("images/anonymous.jpeg", 100, 100);
            
        }
    }
    
	public function getProjectsByUserRole($c, $owner=true)
    {
    	$c1 = new Criteria();
    	if($owner)
    		$c1->add(ProjectRolePeer::PROJECT_OWNER_ROLE, 1);
    	else
    		$c1->add(ProjectRolePeer::PROJECT_OWNER_ROLE, 1, Criteria::NOT_EQUAL);
    	
    	$project_roles = array();
    	foreach(ProjectRolePeer::doSelect($c1) as $pr){
    		$project_roles[] = $pr->getId();
    	}
    	
    	$c2 = new Criteria();
    	$c2->add(ProjectUserPeer::PROJECT_ROLE_ID, $project_roles, Criteria::IN);
    	$c2->add(ProjectUserPeer::USER_ID, $this->getId());
    	$project_ids = array();
    	foreach(ProjectUserPeer::doSelect($c2) as $pu){
    		$project_ids[] = $pu->getProjectId();
    	}
    	
    	$c->add(ProjectPeer::ID, $project_ids, Criteria::IN);
    	
    	return ProjectPeer::doSelect($c);
    }
    public function getUploadDir()
    {
        $folder = self::getBaseUploadDir().$this->getId();
        if(!file_exists($folder)){
            mkdir($folder, 0777, true);
        }
        return $folder;
    }

    public function getBaseUploadDirUrl()
    {
        $conf = frontendConfiguration::getActive();
        $baseUrl = $conf->getBaseWebDirUrl();
        return "{$baseUrl}user/".$this->getId();
    }

    static function getBaseUploadDir()
    {
        $conf = frontendConfiguration::getActive();
        $baseUploadDir = $conf->getWebUploadDir();
        return "{$baseUploadDir}user/";
    }

    function isWidgetHelpEnabled()
    {
        return $this->getProfile()->getWidgetHelpIsEnabled();
    }

    function getFullname()
    {
        return $this->getProfile()->getFullname();
    }

    function isAnonymous()
    {
        return false;
    }
    
	public function getNumberClosedTickets() {
    	$c = new Criteria();
    	$c->add(TicketPeer::USER_ID, $this->getId());
    	TicketPeer::getClosedTickets($c);
    	return TicketPeer::doCount($c);
    }
}
