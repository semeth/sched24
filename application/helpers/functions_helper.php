<?php

function dnd($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    exit;
}

function getPermissions(){
    $ci = &get_instance();
    $permissions = $ci->session->userdata('permission');
    return json_decode($permissions);
}

function isMaster(){
    return (in_array(0, getPermissions())) ? true : false;
}

function isTracking(){
    return (in_array(1, getPermissions())) ? true : false;
}

function isSupplier(){
    return (in_array(2, getPermissions())) ? true : false;
}

function isConfiguration(){
    return (in_array(3, getPermissions())) ? true : false;
}

function getPermissionLabels(){
    $ci = &get_instance();
    $ci->load->model('permissions');
    $permissions = getPermissions();
    $permLabels = [];
    foreach ($permissions as $permission) :
        $label = $ci->permissions->getPermissionLabels($permission);
        $permLabels[] = $label;
    endforeach;
    return $permLabels;
}

function generateToken($type = '', $length = 36){
    if ($type == 'number') {
        $characters = '0123456789';
    } else if ($type == 'letter') {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    } else {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
