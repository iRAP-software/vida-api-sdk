<?php

/**************************************************************************************************
 * This file is for internal use by the ViDA SDK. It should not be altered by users
 **************************************************************************************************
 * 
 * Contains the primary methods for interacting with the API and are available to all resource
 * controllers. These methods can be overridden in the individual resoruce controllers.
 * 
 */

namespace iRAP\VidaSDK\Controllers;

abstract class AbstractResourceController
{
    protected $m_auth;
    protected $m_filter;
    
    
    public function __construct($auth, $filter = null)
    {
        $this->m_auth = $auth;
        $this->m_filter = $filter;
    }
    
    abstract protected function getResourcePath();
    
    
    /**
     * Send a GET request to the API. The $resource and $id make up the first two parts of the 
     * URL, are $args can either be a third element, or an array of elements, each of which will
     * be separated with a '/'
     * 
     * @param mixed $id
     * @param mixed $args
     * @return \iRAP\VidaSDK\Models\Response
     */
    public function getResource($id = null, $args = null)
    {
        
        $request = new \iRAP\VidaSDK\Models\APIRequest($this->m_auth);
        $request->setUrl($this->getResourcePath(), $id, $args, $this->m_filter);
        $request->send();
        return $this->response($request);
    }
    
    /**
     * Send a POST request to the API. The $resource and $id make up the first two parts of the 
     * URL, are $args can either be a third element, or an array of elements, each of which will
     * be separated with a '/'. $data should be an array of name-value pairs, representing the 
     * names and values of the POST fields.
     * 
     * $param array $data
     * @param mixed $id
     * @param mixed $args
     * @return \iRAP\VidaSDK\Models\Response
     */
    public function postResource($data, $id = null, $args = null)
    {
        
        $request = new \iRAP\VidaSDK\Models\APIRequest($this->m_auth);
        $request->setUrl($this->getResourcePath(), $id, $args);
        $request->setPostData($data);
        $request->send();
        return $this->response($request);
    }
    
    /**
     * Send a PUT request to the API. The $resource and $id make up the first two parts of the 
     * URL, are $args can either be a third element, or an array of elements, each of which will
     * be separated with a '/'. $data should be an array of name-value pairs, representing the 
     * names and values of the POST fields.
     * 
     * $param array $data
     * @param mixed $id
     * @param mixed $args
     * @return \iRAP\VidaSDK\Models\Response
     */
    public function putResource($id, $data, $args = null)
    {
        $request = new \iRAP\VidaSDK\Models\APIRequest($this->m_auth);
        $request->setUrl($this->getResourcePath(), $id, $args);
        $request->setPutData($data);
        $request->send();
        return $this->response($request);
    }
    
    /**
     * Send a PATCH request to the API. The $resource and $id make up the first two parts of the 
     * URL, are $args can either be a third element, or an array of elements, each of which will
     * be separated with a '/'. $data should be an array of name-value pairs, representing the 
     * names and values of the POST fields.
     * 
     * $param array $data
     * @param mixed $id
     * @param mixed $args
     * @return \iRAP\VidaSDK\Models\Response
     */
    public function patchResource($id, $data, $args = null)
    {
        $request = new \iRAP\VidaSDK\Models\APIRequest($this->m_auth);
        $request->setUrl($this->getResourcePath(), $id, $args);
        $request->setPatchData($data);
        $request->send();
        return $this->response($request);
    }
    
    /**
     * Send a DELETE request to the API. The $resource and $id make up the first two parts of the 
     * URL, are $args can either be a third element, or an array of elements, each of which will
     * be separated with a '/'.
     * 
     * @param mixed $id
     * @param mixed $args
     * @return \iRAP\VidaSDK\Models\Response
     */
    public function deleteResource($id, $args = null)
    {
        $request = new \iRAP\VidaSDK\Models\APIRequest($this->m_auth);
        $request->setUrl($this->getResourcePath(), $id, $args);
        $request->setDeleteRequest();
        $request->send();
        return $this->response($request);
    }
    
    /**
     * Takes the response properties from the APIRequest() object and formats them for use by 
     * the developer.
     * 
     * @param object $request
     * @return \iRAP\VidaSDK\Models\Response
     */
    public static function response($request)
    {
        return new \iRAP\VidaSDK\Models\Response(
            $request->m_httpCode,
            $request->m_status,
            $request->m_result,
            (isset($request->m_error)) ? $request->m_error : null
        );
    }
}
