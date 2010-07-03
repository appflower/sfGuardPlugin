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
 * @version    SVN: $Id: sfGuardGroup.php 9999 2008-06-29 21:24:44Z fabien $
 */
class sfGuardGroup extends PluginsfGuardGroup
{
	public function getHtmlName()
    {
        return '<a class="widgetLoad" href="'.sfContext::getInstance()->getController()->genUrl('/sfGuardGroup/edit?id='.$this->getId(), true).'"> '.$this->getName().' </a>';
    }
}
