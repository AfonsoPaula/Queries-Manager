<?php
    // app_helper needs to be loaded in BaseController.php

    function check_error($field, $errors) 
    {
        if(!empty($errors) && key_exists($field, $errors)){ //if the field appears in errors...
            return '<div class="alert alert-danger p-1 mt-1">'.$errors[$field].'</div>';
        }

        return '';
    }

    function encrypt($value)
    {
        // encrypt value
        $enc = \Config\Services::encrypter();
        return bin2hex($enc->encrypt($value));
    }

    function decrypt($value)
    {
        // decrypt value
        try{
            $enc = \Config\Services::encrypter();
            return $enc->decrypt(hex2bin($value)); 
        }catch(\Exception $e){
            return false;
        }
    }

    function set_project_filter($project_filter, $project)
    {
        if($project_filter == $project){
            return 'selected';
        }

        return '';
    }