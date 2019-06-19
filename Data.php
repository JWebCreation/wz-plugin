<?php

class Data
{
    /* ************************************************** */
    /* ****************   VARIABLES   ******************* */
    /* ************************************************** */

    protected $name;
    protected $data = false ;
    protected $add  = false ;

    /* ************************************************** */
    /* ****************   CONSTRUCT   ******************* */
    /* ************************************************** */

    public function __construct( $name )
    {
        $this->name = $name ;
    }

    /* ************************************************** */
    /* ****************     SETTER    ******************* */
    /* ************************************************** */

    public function set( $key , $value )
    {
        $this->data->set( $key , $value );
    }

    /* ************************************************** */
    /* ****************     GETTER    ******************* */
    /* ************************************************** */

    public function getName()
    {
        return $this->name ;
    }

    public function get( $key )
    {
        return $this->data->get( $key ) ;
    }

    public function getData()
    {
        return $this->data ;
    }

    /* ************************************************** */
    /* ****************     TOOLS     ******************* */
    /* ************************************************** */

    public function isCreate()
    {
        return $this->add ;
    }

    /* ************************************************** */
    /* ****************   FUNCTIONS   ******************* */
    /* ************************************************** */

    public function save()
    {

    }

    public function delete()
    {

    }

    public function findOrCreate( $value = NULL )
    {

    }

    public function find( $value )
    {

    }

    public function count( array $value )
    {

    }

    public function create( $value = NULL )
    {

    }

    public function getDataArray( $prefix = '' )
    {

    }
}