<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace iRAP\VidaSDK\Controllers;

class AuthController extends AbstractResourceController
{
    public function getUserToken($email, $password)
    {
        
        $request = new \iRAP\VidaSDK\Models\APIRequest();
        $request->setUrl("auth/register");
        $request->setPostData(array("email"=>$email,"password"=>$password));
        $request->send();
        if ($request->m_result)
        {
            return json_decode($request->m_result);
        }
    }
    
    public static function setUserToken($userAuthID, $userAPIKey, $userPrivateKey)
    {
        define('iRAP\VidaSDK\USER_AUTH_ID', $userAuthID);
        define('iRAP\VidaSDK\USER_API_KEY', $userAPIKey);
        define('iRAP\VidaSDK\USER_PRIVATE_KEY', $userPrivateKey);
    }
}
