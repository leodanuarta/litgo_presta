<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Repository\LanguageRepository' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository(${($_ = isset($this->services['ps_eventbus.db']) ? $this->services['ps_eventbus.db'] : $this->load('getPsEventbus_DbService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->load('getPsEventbus_ContextService.php')) && false ?: '_'});
