<?php
/**
 * Yellowpages API Class
 *
 * @author     M Teguh A Suandi
 * @link       http://mtasuandi.wordpress.com
 * @license    http://creativecommons.org/licenses/by/3.0/
 *
 */
require_once('yellowpages_api_request.php');

class YellowPagesAPI{

	private $api_key	= 'de33b4963d3147f80877393d1eb9475e';
	
	private function verifyResponse($response){
	
		if($response === False){
			
			throw new Exception("Coul not connect to YellowPages");
		}else{
			
			return ($response);
		}
	}
	
	private function queryYellowPages($app_code, $api_uri, $parameters){
	
		return yellowpages_api_request($app_code, $api_uri, $this->api_key, $parameters);
	}
	
	public function getDetails($listingid){
		
		$app_code 	= 'listings';
		$api_uri 	= 'details';
		$parameters		= array("listingid"	=>	$listingid);
		$json_response 	= $this->queryYellowPages($app_code, $api_uri, $parameters);
		
		return $json_response;
	}
	
	public function getBusinessListingMap($listingid){
		
		$app_code 	= 'listings';
		$api_uri 	= 'listingmap';
		$parameters		= array("listingid"	=>	$listingid);
		$json_response 	= $this->queryYellowPages($app_code, $api_uri, $parameters);
		
		return $json_response;
	}
	
	public function getSearch($term, $searchloc){
		
		$app_code	= 'listings';
		$api_uri 	= 'search';
		$parameters		= array("term"	=>	$term, "searchloc"	=> $searchloc);
		$json_response 	= $this->queryYellowPages($app_code, $api_uri, $parameters);
		
		return $json_response;
	}
	
	public function getReviews($listingid){
		
		$app_code	= 'listings';
		$api_uri 	= 'reviews';
		$parameters		= array("listingid"	=>	$listingid);
		$json_response 	= $this->queryYellowPages($app_code, $api_uri, $parameters);
		
		return $json_response;
	}
	
	public function getCoupons($term, $searchloc){
	
		$app_code	= 'listings';
		$api_uri 	= 'coupons';
		$parameters		= array("term"	=>	$term, "searchloc"	=> $searchloc);
		$json_response 	= $this->queryYellowPages($app_code, $api_uri, $parameters);
		
		return $json_response;
	}
	
	public function getDeals($searchloc){
	
		$app_code	= 'content';
		$api_uri 	= 'deals';
		$parameters		= array("searchloc"	=>	$searchloc);
		$json_response 	= $this->queryYellowPages($app_code, $api_uri, $parameters);
		
		return $json_response;
	}
	
}