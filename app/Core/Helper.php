<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Models\User;
use Alert;
use Redirect;
use Session;
use App\Models\Vehicles;
use App\Models\TyresBrands;
use App\Models\Tyres;
use App\Models\TyreSize;
  function getIp(){
    

      $ipaddress = '';
       if (isset($_SERVER['HTTP_CLIENT_IP']))
           $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
       else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
           $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
       else if(isset($_SERVER['HTTP_X_FORWARDED']))
           $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
       else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
           $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
       else if(isset($_SERVER['HTTP_FORWARDED']))
           $ipaddress = $_SERVER['HTTP_FORWARDED'];
       else if(isset($_SERVER['REMOTE_ADDR']))
           $ipaddress = $_SERVER['REMOTE_ADDR'];
       else
           $ipaddress = 'UNKNOWN';    

        if($ipaddress=='::1'){
          $result = json_decode(file_get_contents('http://ip-api.io/json/127:0:0:1'));         
        }else{
          $result = json_decode(file_get_contents('http://ip-api.io/json/'.$ipaddress));                   
        } 

        return $result;
        $city = $result->city;
        $country = 'Australia';  
        Session::put('country', $country);
        return $country;
  }     


   function echo_datelist ($i, $j)
  {
      $time = str_pad($i, 2, '0', STR_PAD_LEFT).':'.str_pad($j, 2, '0', STR_PAD_LEFT);            
    return $time;
  }

  function get_custom_date_range($type){


    if($type == 'yesterday'){
      $date[0] = date('Y-m-d',strtotime('-1 day')); 
      $date[1] = date('Y-m-d',strtotime('-1 day')); 
    }
    if($type == 'today'){
      
      $date[0] = date('Y-m-d'); 
      $date[1] = date('Y-m-d'); 

    }
    if($type == 'tomorrow'){
      
      $date[0] = date('Y-m-d',strtotime('+1 day')); 
      $date[1] = date('Y-m-d',strtotime('+1 day')); 

    }
    if($type == 'last_week'){
      $date[0] = date('Y-m-d', strtotime('monday last week'));; 
      $date[1] = date('Y-m-d', strtotime('sunday last week'));  
    }
    if($type == 'this_week'){

      $date[0] = date('Y-m-d', strtotime('monday this week'));; 
      $date[1] = date('Y-m-d', strtotime('sunday this week'));      

    }
    if($type == 'next_week'){

      $date[0] = date('Y-m-d', strtotime('monday next week'));; 
      $date[1] = date('Y-m-d', strtotime('sunday next week'));      
      
    }
    if($type == 'last_month'){

      $date[0] = date('Y-m-d', strtotime("first day of previous month")); 
      $date[1] = date('Y-m-d',strtotime('last day of previous month'));      

    }
    if($type == 'this_month'){

      $date[0] = date('Y-m-d', strtotime("first day of this month")); 
      $date[1] = date('Y-m-d',strtotime('last day of this month'));      
      
    }
    if($type == 'next_month'){
      
      $date[0] = date('Y-m-d', strtotime("first day of next month")); 
      $date[1] = date('Y-m-d',strtotime('last day of next month'));      
      

    }
    if($type == 'last_year'){

      $date[0] = date('Y-m-d', strtotime("last year January 1st")); 
      $date[1] = date('Y-m-d',strtotime('last year December 31st'));            
      
    }
    if($type == 'this_year'){

      $date[0] = date('Y-m-d', strtotime("this year January 1st")); 
      $date[1] = date('Y-m-d',strtotime('this year December 31st'));      
    }
    if($type == 'next_year'){
      
      $date[0] = date('Y-m-d', strtotime("next year January 1st")); 
      $date[1] = date('Y-m-d',strtotime('next year December 31st'));            

    }

    return $date;
  }

?>