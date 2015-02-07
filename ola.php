<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//This example is a sample video upload stored in parse
echo $r;
    $parse = new parseObject('Videos');
    $parse->title = $data['upload_data']['title'];
    $parse->description = $data['upload_data']['description'];
    $parse->tags = $data['upload_data']['tags'];

    //create new geo
    $geo = new parseGeoPoint($data['upload_data']['lat'],$data['upload_data']['lng']);
    $parse->location = $geo->location;

    //use pointer to other class
    $parse->userid = array("__type" => "Pointer", "className" => "_User", "objectId" => $data['upload_data']['userid']);

    //create acl
    $parse->ACL = array("*" => array("write" => true, "read" => true));
    $r = $parse->save();
    
    echo $r;