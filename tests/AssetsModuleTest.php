<?php
namespace tests;

use Slothsoft\Farah\Module\Module;
use Slothsoft\Farah\ModuleTests\ModuleTest;
use Slothsoft\Farah\Module\FarahUrl\FarahUrlAuthority;
use Slothsoft\Farah\Module\Manifest\XmlManifest;

class AssetsModuleTest extends ModuleTest
{
    protected static function loadModule() : Module {
        return new Module(
            FarahUrlAuthority::createFromVendorAndModule('slothsoft', 'whatthehell'),
            dirname(__DIR__) . DIRECTORY_SEPARATOR . 'assets'
        );
    }
}