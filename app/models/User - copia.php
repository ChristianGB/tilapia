<?php
use Illuminate\Auth\UserInterface;
 
Class Usuarios extends Eloquent implements UserInterface{
 
    protected $table = 'usuarios';
    protected $fillable = array('nombre', 'correo', 'password');
 
    // este metodo se debe implementar por la interfaz
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    
    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión 
    public function getAuthPassword()
    {
        return $this->password;
    }
    
}