<?php

use Slothsoft\Farah\Module\Module;
use Slothsoft\Farah\Module\ModuleRepository;
use Slothsoft\Farah\Module\FarahUrl\FarahUrlAuthority;
use Slothsoft\Farah\Module\Manifest\XmlManifest;

ModuleRepository::getInstance()->registerModule(
    new Module(
        FarahUrlAuthority::createFromVendorAndModule('slothsoft', 'whatthehell'),
        new XmlManifest(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'assets.xml'),
        dirname(__DIR__) . DIRECTORY_SEPARATOR . 'assets'
    )
);