<?php

/**
 * Clase Activo, instanciará los objetos Activo que contienen los datos de los distintas 
 * empresas de mantenimiento, así como los métodos para poder manipularlos (set y get)
 * e implementará los métodos de la Interfaz IGuardable para poder gestionarlos en la BBDD.
 * 
 * @package DWES04
 * @author Raquel Medina Romero 
 * @version 1.0
 * {@internal debe implementarse la interfaz IGuardable}
 */
require_once 'src/IGuardable.php';

class Activo implements IGuardable{
    
    private $id=null;
    private $nombre;
    private $descripcion;
    private $empresamnt;
    private $contactomnt;
    private $telefonomnt;
    
    const REG_TFNO='/^((?:\d{3}[ -]\d{2}[ -]\d{2}[ -]\d{2})|(?:\d{3}[ -]\d{3}[ -]\d{3})|(?:\d{9}))(?:[;](?1))*$/';
    const MAX_LENGTH_TEXTOS=45;
    const MAX_TINYTEXT=255;

    
    /**
     * Método getNombre
     * Devuelve el valor del atributo ID
     * @return int $name
     */
    public function getID(){return $this->id;}
    /**
     * Método getNombre
     * Devuelve el valor del atributo nombre
     * @return string $name
     */
    public function getNombre(){return $this->nombre;}
        
    
    /**
     * Método setNombre
     * Establecerán el valor del atributo asociado aplicando antes el método strip_tags
     * @param string $name
     */
    public function setNombre($name){$this->nombre=strip_tags($name);}
    /**
     * Método setDescripcion
     * Establecerá el valor del atributo asociado aplicando antes el método strip_tags
     * @param string $description
     */
    public function setDescripcion($description){$this->descripcion=strip_tags($description);}
    /**
     * Método setEmpresamnt
     * Establecerá el valor del atributo asociado aplicando antes el método strip_tags 
     * @param string $empresmnt
     */
    public function setEmpresamnt($empresmnt){$this->empresamnt= strip_tags($empresmnt);}
    /**     
     * Método setContactomnt
     * Establecerá el valor del atributo asociado aplicando antes el método strip_tags 
     * @param string $contactmnt
     */
    public function setContactomnt($contactmnt){$this->contactomnt= strip_tags($contactmnt);}
    /**
     * Método setTelefonomnt
     * Establecerá el valor del atributo asociado aplicando antes el método strip_tags 
     * @param string $tfnmont
     */
    public function setTelefonomnt($tfnmont){$this->telefonomnt= strip_tags($tfnmont);}
    
}
    
    
    
    
    



