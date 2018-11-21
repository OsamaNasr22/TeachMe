<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validation
 *
 * @author OSAMA
 */
class Validation {
    function validate($post,$rules){
        $valid=TRUE;
        foreach ($rules as $key => $rule) {
            $methods= explode("|", $rule);
            foreach ($methods as $method) {
                $value= isset($post[$key])? $post[$key]:NULL;
                if($this->$method($value,$key)== FALSE);
                $valid=FALSE;
            }
        }
        return $valid;
    }
            function validateString($value,$key){
        $patern="/^[a-zA-Zأ-ي\p{Cyrillic}0-9\s\-]+$/u";
        $validation= preg_match($patern, $value);
        if($validation==FALSE){
            throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key Must be String.');history.back();</script>");
        } else {
            return $validation;    
        }
    }
    function validateEmail($value,$key){
        $validation= filter_var($value,FILTER_VALIDATE_EMAIL);
        if($validation == FALSE){
             throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key Must be E-mail.');history.back();</script>");
        } else {
         return $validation;      
        }
    }
    function validateUrl($value,$key){
        $validation= filter_var($value,FILTER_VALIDATE_URL);
         if($validation == FALSE){
             throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key Must be Url.');history.back();</script>");
        } else {
         return $validation;      
        }
    }
    function validateIp($value,$key){
        $validation= filter_var($value,FILTER_VALIDATE_IP);
         if($validation == FALSE){
             throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key Must be Ip.');history.back();</script>");
        } else {
         return $validation;      
        }
    }
    function validateInteger($value,$key){
        $validation= filter_var($value,FILTER_VALIDATE_INT);
         if($validation == FALSE){
             throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key Must be integer.');history.back();</script>");
        } else {
         return $validation;      
        }
    }
    function validateEmpty($value,$key){
        $validation= empty($value);
         if($validation == TRUE){
             throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key not Must be Empty.');history.back();</script>");
        } else {
         return $validation;      
        }
    }
    
    function sanitizeEmail($value,$key){
        $validation= filter_var($value,FILTER_SANITIZE_EMAIL);
        if($validation == FALSE){
            throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key is invalid.');history.back();</script>");
        } else {
            return $validation;    
        }
    }
    
    function sanitizeUrl($value,$key){
        $validation= filter_var($value,FILTER_SANITIZE_URL);
        if($validation == FALSE){
            throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key is invalid.');history.back();</script>");
        } else {
            return $validation;    
        }
    }
    function sanitizeString($value,$key){
        $validation= filter_var($value,FILTER_SANITIZE_STRING);
        if($validation == FALSE){
            throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key is invalid.');history.back();</script>");
        } else {
            return $validation;    
        }
    }
    function sanitizeInt($value,$key){
        $validation= filter_var($value,FILTER_SANITIZE_NUMBER_INT);
        if($validation == FALSE){
            throw new Exception("<script type='text/javascript'>alert('Error: Sorry The $key is invalid.');history.back();</script>");
        } else {
            return $validation;    
        }
    }
}
