<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Nsession { 

    function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
        
        $this->unset_flashdata();
    }
    
    function set_userdata($name, $value){
        $_SESSION[$name] = $value;
    }
    
    function unset_userdata($name = null){
        if($name)
            unset( $_SESSION[$name] ) ;
        else
            session_destroy();
    }
    
    function userdata($name = null){
        if($name == null){
            return $_SESSION;
        }
        if(isset($_SESSION[$name]))
            return $_SESSION[$name];
        
        return null;
    }
    
    function set_flashdata($name, $value){
        $_SESSION['flash'][$name]['flash_long'] = 1;
        $_SESSION['flash'][$name]['value'] = $value;
    }
    
    function flashdata($name){
        if(isset($_SESSION['flash'][$name]))
            return $_SESSION['flash'][$name]['value'];
        
        return null;
    }
    
    function persist_flashdata($name){
        if(isset($_SESSION['flash'][$name]))
            $_SESSION['flash'][$name]['flash_long']++;
    }
    
    function unset_flashdata(){
        if(isset($_SESSION['flash'])){
            $k = array_keys($_SESSION['flash']);
            for($i=0; $i<count($_SESSION['flash']); $i++){
                $j = $k[$i];
                --$_SESSION['flash'][$j]['flash_long'];
                if($_SESSION['flash'][$j]['flash_long'] < 0){
                    unset ( $_SESSION['flash'][$j] );
                }
            }
        }
    }
    

}
?>
