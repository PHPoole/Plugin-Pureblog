<?php
namespace PHPoole;
use PHPoole\Utils;

/**
 * PHPoole plugin Pureblog
 */
Class Pureblog extends Plugin
{
    const LAYOUTS_DIRNAME = 'pureblog';

    public function preInit($e)
    {
        $phpoole = $e->getTarget();
        $phpoole->addMessage('Pureblog plugin available');
    }

    public function postInit($e)
    {
        $phpoole = $e->getTarget();
        Utils\RecursiveCopy(
            __DIR__ . '/assets',
            $phpoole->getWebsitePath() . '/' . PHPoole::PHPOOLE_DIRNAME . '/' . PHPoole::ASSETS_DIRNAME
        );
        Utils\RecursiveCopy(
            __DIR__ . '/layouts',
            $phpoole->getWebsitePath() . '/' . PHPoole::PHPOOLE_DIRNAME . '/' . PHPoole::LAYOUTS_DIRNAME . '/' . self::LAYOUTS_DIRNAME
        );
        $phpoole->addMessage('Pureblog layouts and assets copied');
    }
}
