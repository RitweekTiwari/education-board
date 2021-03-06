<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Signup extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        $this->load->helper('date');
         $this->load->model('Common_model');
        $this->load->helper('url');

    }


    public function index_post()
    {

        $message = [

            'mobile' => $this->post('mobile'),

        ];
         $check = $this->Common_model->Login_check_mobile($message);

        if($check != ''){

            $this->response([
                    'status' => FALSE,
                    'message' => 'User Already Exists'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }else{
            $max = $this->Common_model->getMaxUserId();
            $max =(int)substr($max,3);
            //print_r($max) ;exit;
            $text= "EDO".($max+1);
            $message = [
            'logid' => $text, // Automatically generated by the model
            'phone' => $this->post('mobile'),
            'status' => 'deactive',
            'role' => 's',
            'joindate' => date('Y-m-d:h-m-s')
             ];
            $str = $this->Common_model->insert($message,'logme');

            if($str!=''){
                $data1= array();
                $data1['code']=rand(100000,999999);
                $data1['key']=$this->post('mobile');
                $data1['time']=date('Y-m-d:h-m-s');
                self::Message($data1['code'], $data1['key']);
                $this->Common_model->insert($data1,'message');
                $this->set_response($data1, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
            }else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'Data not inserted'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }




    }

     public function index_put(){
         $message = [
            'code' => rand(100000,999999),
            'time'=> date('Y-m-d:h-m-s'),
        ];
        $mobile= $this->put('mobile');
        if($mobile!='')
        {
            $check = $this->Common_model->update($message,'key',$mobile,'message');
            if($check!='')
                {
                    $message['mobile']= $mobile;
                     self::Message($message['code'], $message['mobile']);
                    $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
                }
                else{
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Data not Found'
                    ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
                }
        }else
        {
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Inavalid Parameters'
                    ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
                }

    }

    public function otp_get(){
          $message = [

            'mobile' => $this->get('mobile'),

        ];
        // print_r($message);exit;
        $check = $this->Common_model->get_otp($message);
        if($check!='')

            {

                $this->set_response($check, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
            }
            else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'Data not Found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
    }

    public function otp_put(){
         $message = [

            'code' => rand(100000,999999),
            'time'=> date('Y-m-d:h-m-s'),
        ];
        $mobile= $this->put('mobile');
        if($mobile!='')
        {
            $check = $this->Common_model->update($message,'key',$mobile,'message');
            if($check!='')
                {
                    $message['mobile']= $mobile;
                     self::Message($message['code'], $message['mobile']);
                    $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
                }
                else{
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Data not Found'
                    ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
                }
        }else
        {
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Inavalid Parameters'
                    ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
                }

    }
public function verify_get(){
          $message = [

            'mobile' => $this->get('mobile'),
            'code' => $this->get('code')
        ];
        // print_r($message);exit;
        $check = $this->Common_model->check_otp($message);
        if($check)
            {
                $this->set_response([
                    'status' => TRUE,
                    'message' => 'Otp Match'
                ], REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
            }
            else{
                $this->response([
                    'status' => FALSE,
                    'message' => 'Otp not Match'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
    }

    private function Message($code,$mob)
    {
      $text=$code;
      $mobile_number=$mob;
      $url = "http://bhashsms.com/api/sendmsg.php?user=FastHelps&pass=Fast123&sender=FSTHLP&phone=".$mobile_number."&text=".$text."&priority=ndnd&stype=normal";
      $payload = file_get_contents($url);
      if($payload != ""){
        return;
      }else{
        return;
      }
    }



}
