<?php

interface Plugin
{
    public function registerHook():array
    public function getPluginKey():string
}