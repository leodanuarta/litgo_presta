<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Api\SyncApiClient' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\SyncApiClient(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->load('getPsAccountsService.php')) && false ?: '_'}, 'https://eventbus-sync.psessentials.net', ${($_ = isset($this->services['ps_eventbus']) ? $this->services['ps_eventbus'] : $this->load('getPsEventbusService.php')) && false ?: '_'});