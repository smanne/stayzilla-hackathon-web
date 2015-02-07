<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo queryUsersWithQueryExpectResultsKey();



 function queryUsersWithQueryExpectResultsKey(){
		$userQuery = new parseQuery('users');
		$userQuery->whereExists('type');
		$return = $userQuery->find();
                
                return $return;
	}