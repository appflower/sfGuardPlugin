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
 * @version    SVN: $Id: sfGuardBasicSecurityFilter.class.php 9999 2008-06-29 21:24:44Z fabien $
 */
class sfGuardBasicSecurityFilter extends sfBasicSecurityFilter
{
  public function execute ($filterChain)
  {
    if ($this->isFirstCall() and !$this->getContext()->getUser()->isAuthenticated())
    {
      if ($cookie = $this->getContext()->getRequest()->getCookie(sfConfig::get('app_sf_guard_plugin_remember_cookie_name', 'sfRemember')))
      {
        $c = new Criteria();
        $c->add(sfGuardRememberKeyPeer::REMEMBER_KEY, $cookie);
        $rk = sfGuardRememberKeyPeer::doSelectOne($c);
        if ($rk && $rk->getSfGuardUser())
        {
          $this->getContext()->getUser()->signIn($rk->getSfGuardUser());
        }
      }
    }
   
    parent::execute($filterChain);
  }
  
  /**
   * Forwards the current request to the secure action.
   *
   * @throws sfStopException
   */
  protected function forwardToSecureAction()
  {
  	/*if($this->getContext()->getRequest()->isXmlHttpRequest())
  	{
  		echo json_encode(array("load"=>'center',"redirect"=>$this->getContext()->getRequest()->getParameter('af_referer'),"message"=>'You don\'t have access ! You\'ll be redirected to the previous content!','title'=>'No access'));die();
  	}
  	else {*/
    	$this->context->getController()->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));

    	throw new sfStopException();
  	/*}*/
  }

  /**
   * Forwards the current request to the login action.
   *
   * @throws sfStopException
   */
  protected function forwardToLoginAction()
  {
  	if($this->getContext()->getRequest()->isXmlHttpRequest())
  	{
  		echo json_encode(array("load"=>'page',"redirect"=>'/login',"message"=>'You were logged out ! You\'ll be redirected to the login page!'));die();
  	}
  	else {
    	$this->context->getController()->forward(sfConfig::get('sf_login_module'), sfConfig::get('sf_login_action'));

    	throw new sfStopException();
  	}
  }
}
