<?php

require_once('../../Facebook/FacebookSession.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/FacebookResponse.php');
require_once('Facebook/FacebookSDKException.php');
require_once('Facebook/FacebookRequestException.php');
require_once('Facebook/FacebookRedirectLoginHelper.php');
require_once('Facebook/FacebookAuthorizationException.php');
require_once('Facebook/GraphObject.php');
require_once('Facebook/GraphUser.php');
require_once('Facebook/GraphSessionInfo.php');
require_once('Facebook/Entities/AccessToken.php');
require_once('Facebook/HttpClients/FacebookCurl.php');
require_once('Facebook/HttpClients/FacebookHttpable.php');
require_once('Facebook/HttpClients/FacebookCurlHttpClient.php');

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\FacebookCurl;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;

/**
* 
*/
class Fblogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{

	}

	function login()
	{
		$app_id = "369227166775039";
		$app_secret = "bdfdf85349fdeeed5e3cd83ab9975866";
		$redirect = "http://localhost/wasir/fblogin/login";

		FacebookSession::setDefaultApplication( $app_id , $app_secret );
		$helper = new FacebookRedirectLoginHelper($redirect);
		$sess = $helper->getSessionFromRedirect();

		if ($this->session->userdata('fb_token'))
		{
			$sess = new FacebookSession($this->session->userdata('fb_token'));

			try
			{
				$sess->Validate($app_id,$app_secret);
			}
			catch(FacebookAuthorizationException $e)
			{
				print_r($e);
			}
		}

		$this->data['loggedin'] = FALSE;

		$this->data['login_url'] = $helper->getLoginUrl(array('email'));

		if (isset($sess))
		{
			$this->session->set_userdata('fb_token',$sess->getToker());
			$request = new FacebookRequest( $sess , 'GET' , '/me');
			$response = $request->execute();
			$graph = $response->getGraphObject(GraphUser::classname());
			$sess_data = array(
						'id' => $graph->getId(),
						'name' => $graph->getName(),
						'email' => $graph->getProperty('email'),
						'image' => 'https://graph.facebook.com/'.$graph->getId().'/picture?width=50',
						'loggedin' => TRUE
				);
			$this->session->set_userdata($sess_data);

			redirect('dashboard');
		}

		$this->load->view('welcome_message',$this->data);
	}

	function logout()
	{
		delete_cookie('ci_session');
		$this->session->destroy();
		redirect();
	}
}

?>