<?php
/**
 * Script to register M2-module
 *
 */
use Praxigento\Mage2Theme\Config as Config;
use Magento\Framework\Component\ComponentRegistrar as Registrar;

Registrar::register(Registrar::THEME, Config::THEME, __DIR__);
