<?php

/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package thrive-dashboard
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}
/**
 * This file contains the templates endpoint for MailWizzApi PHP-SDK.
 * 
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @link http://www.mailwizz.com/
 * @copyright 2013-2015 http://www.mailwizz.com/
 */
 
 
/**
 * MailWizzApi_Endpoint_Templates handles all the API calls for email templates.
 * 
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @package MailWizzApi
 * @subpackage Endpoint
 * @since 1.0
 */
class Thrive_Dash_Api_Sendreach_Templates extends Thrive_Dash_Api_Sendreach
{
    /**
     * Get all the email templates of the current customer
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param integer $page
     * @param integer $perPage
     * @return Thrive_Dash_Api_Sendreach_Response
     */
    public function getTemplates($page = 1, $perPage = 10)
    {
        $client = new Thrive_Dash_Api_Sendreach_Client(array(
            'method'        => Thrive_Dash_Api_Sendreach_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl('templates'),
            'paramsGet'     => array(
                'page'      => (int)$page, 
                'per_page'  => (int)$perPage
            ),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Get one template
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param string $templateUid
     * @return Thrive_Dash_Api_Sendreach_Response
     */
    public function getTemplate($templateUid)
    {
        $client = new Thrive_Dash_Api_Sendreach_Client(array(
            'method'        => Thrive_Dash_Api_Sendreach_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl(sprintf('templates/%s', (string)$templateUid)),
            'paramsGet'     => array(),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Create a new template
     * 
     * @param array $data
     * @return Thrive_Dash_Api_Sendreach_Response
     */
    public function create(array $data)
    {
        if (isset($data['content'])) {
            $data['content'] = base64_encode($data['content']);
        }
        
        if (isset($data['archive'])) {
            $data['archive'] = base64_encode($data['archive']);
        }
        
        $client = new Thrive_Dash_Api_Sendreach_Client(array(
            'method'        => Thrive_Dash_Api_Sendreach_Client::METHOD_POST,
            'url'           => $this->config->getApiUrl('templates'),
            'paramsPost'    => array(
                'template'  => $data
            ),
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Update existing template for the customer
     * 
     * @param string $templateUid
     * @param array $data
     * @return Thrive_Dash_Api_Sendreach_Response
     */
    public function update($templateUid, array $data)
    {
        if (isset($data['content'])) {
            $data['content'] = base64_encode($data['content']);
        }
        
        if (isset($data['archive'])) {
            $data['archive'] = base64_encode($data['archive']);
        }
        
        $client = new Thrive_Dash_Api_Sendreach_Client(array(
            'method'        => Thrive_Dash_Api_Sendreach_Client::METHOD_PUT,
            'url'           => $this->config->getApiUrl(sprintf('templates/%s', $templateUid)),
            'paramsPut'     => array(
                'template'  => $data
            ),
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Delete existing template for the customer
     * 
     * @param string $templateUid
     * @return Thrive_Dash_Api_Sendreach_Response
     */
    public function delete($templateUid)
    {
        $client = new Thrive_Dash_Api_Sendreach_Client(array(
            'method'    => Thrive_Dash_Api_Sendreach_Client::METHOD_DELETE,
            'url'       => $this->config->getApiUrl(sprintf('templates/%s', $templateUid)),
        ));
        
        return $response = $client->request();
    }
}