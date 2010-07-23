<?php
class sfGuardUser extends PluginsfGuardUser {
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
        sfProjectConfiguration::getActive()->loadHelpers(array("Url", "Tag", "Asset", "Javascript"));
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

    /**
     * Generate a html code containing a bar, to represent the percent of closed tickets
     * @return  String A html code containing a bar, to represent the percent of closed tickets
     */
    public function getHtmlClosedTickets() {
        $total = TicketPeer::doCount(TicketPeer::fetchFilteredTicketsList(array('user_id' => $this->getId())));
        $x = TicketPeer::doCount(TicketPeer::fetchFilteredTicketsList(array('status' => 'closed', 'user_id' => $this->getId())));
        $percent = ($x != 0) ? intval((100 * $x) / $total) : 0;

        return "<div style=\"float:left;\"><a class=\"widgetLoad\" href=\"" . sfContext::getInstance()->getController()->genUrl('/ticket/list?status=closed&user_id=' . $this->getId(), true) . "\">$x</a> of <a class=\"widgetLoad\" href=\"" . sfContext::getInstance()->getController()->genUrl('/ticket/list?user_id=' . $this->getId(), true) . "\">$total</a> </div>
        		<div style=\"margin-left:45px;margin-right:30px;border:1px solid black;\"><div style=\"width:$percent%;background-color:blue;\">&nbsp;</div></div> 
        		<div style=\"float:right;margin-left:-40px;margin-top:-15px;\"> &nbsp;$percent%</div>";
    }

    public function getPicture() {
        sfProjectConfiguration::getActive()->loadHelpers(array("Url", "Tag", "Thumbnail"));
        $img = $this->getProfile()->getProfilePicture();
        if (empty($img)) {
            return thumbnail_tag("images/anonymous.jpeg", 100, 100);
        } else {
            return thumbnail_tag($this->getProfile()->getProfilePicture(), 100, 100);
        }
    }
    
    public function getProjectRole()
    {
        $out = '';
        $projectId = sfContext::getInstance()->getUser()->hasAttribute('projectId','/appflower') ? sfContext::getInstance()->getUser()->getAttribute('projectId',false,'/appflower') : false;
        
        $c = new Criteria();
        $c->addSelectColumn(ProjectPeer::NAME);
        $c->addSelectColumn(ProjectRolePeer::PROJECT_OWNER_ROLE);
        $c->add(ProjectUserPeer::USER_ID, $this->getId());
        if($projectId) {
            $c->add(ProjectUserPeer::PROJECT_ID, $projectId);
        }
        $c->addJoin(ProjectUserPeer::PROJECT_ID, ProjectPeer::ID);
        $c->addjoin(ProjectUserPeer::PROJECT_ROLE_ID, ProjectRolePeer::ID);

        $stmt = ProjectPeer::doSelectStmt($c);

        $projectUsers = array();

        $i = 0;
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $projectUsers[$i]['name'] = $row[0];
            $projectUsers[$i]['is_owner'] = $row[1];

            $i++;
        }

        foreach($projectUsers as $row)
        {
            if($projectId) {
                $projectName = '';
            } else {
                $projectName = '/'.$row['name'];
            }
            
            $out.=empty($out) ? '' : ', ';

            if($row['is_owner']) {
                $out.='Owner'.$projectName;
            } else {
                $out.='Member'.$projectName;
            }
        }

        return $out;
    }

}
