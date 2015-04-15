<?php
//session_start();

/*	FACEBOOK LOGIN + LOGOUT - PHP SDK V4.0
 *	file 			- index.php
 * 	Developer 		- Krishna Teja G S
 *	Website			- http://packetcode.com/apps/fblogin-basic/
 *	Date 			- 27th Sept 2014
 *	license			- GNU General Public License version 2 or later
*/
/* INCLUSION OF LIBRARY FILEs*/
	//
	require_once APPPATH."/third_party/Facebook/FacebookSession.php";
	require_once APPPATH."/third_party/Facebook/FacebookRequest.php";
	require_once APPPATH."/third_party/Facebook/FacebookResponse.php";
	require_once APPPATH."/third_party/Facebook/FacebookSDKException.php";
	require_once APPPATH."/third_party/Facebook/FacebookRequestException.php";
	require_once APPPATH."/third_party/Facebook/FacebookRedirectLoginHelper.php";
	require_once APPPATH."/third_party/Facebook/FacebookAuthorizationException.php";
	require_once APPPATH."/third_party/Facebook/GraphObject.php";
	require_once APPPATH."/third_party/Facebook/GraphUser.php";
	require_once APPPATH."/third_party/Facebook/GraphSessionInfo.php";
	require_once APPPATH."/third_party/Facebook/Entities/AccessToken.php";
	require_once APPPATH."/third_party/Facebook/HttpClients/FacebookCurl.php";
	require_once APPPATH."/third_party/Facebook/HttpClients/FacebookHttpable.php";
	require_once APPPATH."/third_party/Facebook/HttpClients/FacebookCurlHttpClient.php";
	

/* USE NAMESPACES */
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\GraphUser;
	use Facebook\GraphSessionInfo;
	use Facebook\FacebookHttpable;
	use Facebook\FacebookCurlHttpClient;
	use Facebook\FacebookCurl;





/** PHPExcel root directory */
// if (!defined('PHPEXCEL_ROOT')) {
//     define('PHPEXCEL_ROOT', dirname(__FILE__) . '/');
//     require(PHPEXCEL_ROOT . 'PHPExcel/Autoloader.php');
// }

// /*PROCESS*/
	
// 			//1.Stat Session
			 
// 			//check if users wants to logout
// 			$CI = &get_instance();
			
// 			// unset($_SESSION['fb_token']);
// 			//$CI->session->sess_destroy();
		
// 			if(isset($_REQUEST['logout'])){
// 			 	unset($_SESSION['fb_token']);
// 			 	$CI->session->sess_destroy();
		
// 			}
			
// 			//2.Use app id,secret and redirect url 
// 			// $app_id = '';
// 			// $app_secret = '';


// 			$app_id = '714900771953716';

// 			$app_secret = 'f553eb1b8b1c7241b6fce605dbd5a867';


// 			$redirect_url='https://ourmoviedb.com/auth/facebook';
// 			// $redirect_url='http://packetcode.com/apps/fblogin-basic/';
			 
// 			//3.Initialize application, create helper object and get fb sess
// 			 FacebookSession::setDefaultApplication($app_id,$app_secret);
// 			 $helper = new FacebookRedirectLoginHelper($redirect_url);
// 			 $sess = @$helper->getSessionFromRedirect();

// 			//check if facebook session exists
// 			if(isset($_SESSION['fb_token'])){
// 			 	$sess = new FacebookSession($_SESSION['fb_token']);
// 			}

// 			//logout
// 			$logout = 'https://ourmoviedb.com/auth/facebook?logout=true';

// 			//4. if fb sess exists echo name 
// 			 	if(isset($sess)){
// 			 		//store the token in the php session
// 			 		$_SESSION['fb_token']=$sess->getToken();
// 			 		//create request object,execute and capture response
// 			 		$request = new FacebookRequest($sess,'GET','/me');
// 					// from response get graph object
// 					$response = $request->execute();
// 					$graph = $response->getGraphObject(GraphUser::classname());
// 					// use graph object methods to get user details
// 					$name = $graph->getName();
// 					$id = $graph->getId();
// 					$image = 'http://graph.facebook.com/'.$id.'/picture?width=300';
// 					$email = $graph->getProperty('email');
// 					echo "hi $name <br>";
// 					print_r($graph);
// 					echo "your email is $email <br><Br>";
// 					echo "<img src='$image' /><br><br>";
// 					echo "<a href='".$logout."'><button>Logout</button></a>";
// 			 	}else{
// 					//else echo login
// 			 		echo '<a href="'.$helper->getLoginUrl(array('email')).'" >Login with facebook</a>';
// 			 	}



	
