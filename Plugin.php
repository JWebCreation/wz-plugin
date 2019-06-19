<?php

class Plugin
{
    public function install()
    {
        if ( ! empty( $this->registerHook() ) )
        {
            foreach( $this->registerHook() as $hook )
            {
                $this->hook()->add( $hook , $this->getPluginKey() ) ;
            }
        }
    }

    public function uninstall()
    {
        if ( ! empty( $this->registerHook() ) )
        {
            foreach( $this->registerHook() as $hook )
            {
                $this->hook()->remove( $hook , $this->getPluginKey() ) ;
            }
        }
    }

    /*
     * Retourne une instance hook
     */
    private function hook()
    {

    }

    /*
     * Retourne le SDK de Wizishop
     * Retourne une instance avec le token deja enregistrer
     */
    public function api()
    {

    }
}