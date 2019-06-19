<?php

namespace Plugin;

class Cegid extends Plugin implements PluginMap
{
    public function registerHook()
    {
        return [ 'updateAccount' ];
    }

    public function hook_updateAccount()
    {

    }

    protected function getPluginKey()
    {
        return "Cegid" ;
    }
}