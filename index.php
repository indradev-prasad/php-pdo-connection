<?php
    //config related data will include from autoloader or how you want to include include that
    /**
     * for example I will include only my needed file
     * @auther INDRADEV PRASAD
     *
    **/
    $_SERVER['DOCUMENT_ROOT'] = __DIR__;
    $_SERVER['APP_ROOT'] = "/";
    require($_SERVER['DOCUMENT_ROOT'] . $_SERVER['APP_ROOT'] . 'config/DbConfig.php'); //
    require($_SERVER['DOCUMENT_ROOT'] . $_SERVER['APP_ROOT'] . 'models/UserModel.php'); //
    //end auto loader
    error_reporting(-1);
    ini_set('display_errors', 'On');
    $userMdl = new UserModel();
    //create user
    /*$user = new stdClass();
    $user->name = "John";
    $user->email = "john@domain.com";
    if($userMdl->create($user)){
    	echo "data insert success \n";
    }else{
    	echo $userMdl->errorInfo;
    }*/

    //get user
    /*$id = 1;
    if($user = $userMdl->get($id)){
    	print_r($user);
    }else{
    	echo $userMdl->errorInfo;
    }*/

    //update user
    /*$user = new stdClass();
    $user->name = "John";
    $user->email = "johnnew@domain.com";
    $id = 1;
    if($userMdl->edit($id, $user)){
    	echo "data update success \n";
    }else{
    	echo $userMdl->errorInfo;
    }*/
    //delete user
      /*$id = 1;
    if($user = $userMdl->remove($id)){
    	echo "data delete success \n";
    }else{
    	echo $userMdl->errorInfo;
    }*/

     
 ?>