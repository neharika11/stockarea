<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    
        public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermodel');
        error_reporting(0);
        @ini_set('display_errors', 0);
    }
    
/******************Index view Page starts Here*****************/
    
    public function index()
    { 
        $this->load->view('user/header');
        $this->load->view('user/index');
        $this->load->view('user/footer');
    }  
    
    
/******************Index view Page Ends Here*****************/

/******************blog view Page starts Here*****************/
    public function blog(){
        $this->load->view('user/header');
        $this->load->view('user/blog');
        $this->load->view('user/footer');
    }
    
    
/******************blog view Page Ends Here*****************/


/******************about view Page starts Here*****************/
    public function about_us(){
        $this->load->view('user/header');
        $this->load->view('user/about_us');
        $this->load->view('user/footer');
    }    
    
    
/******************about view Page Ends Here*****************/


    
/******************FAQS view Page starts Here*****************/
    
    public function faq(){
        $this->load->view('user/header');
        $this->load->view('user/faqs');
        $this->load->view('user/footer');
      } 
/******************FAQS view Page Ends Here*****************/
    
/******************TERMS and Services view Page starts Here*****************/
    
    public function terms_of_service(){
        $this->load->view('user/header');
        $this->load->view('user/terms-of-service');
        $this->load->view('user/footer');
    } 
/******************TERMS and Services view Page Ends Here*****************/

    
/******************warehouse network view Page starts Here*****************/
    
    public function warehouse_network(){
        $data['city_data'] =  $this->Usermodel->fetch_all_warehouse_city();
        $this->load->view('user/header');
        $this->load->view('user/warehouse_network',$data);
        $this->load->view('user/footer');
    } 
/******************warehouse network view Page Ends Here*****************/


/******************warehouse network  Deatiling view Page starts Here*****************/
    
    public function warehouse_network_detailing($pro_id){
        $data['wareshouse_discription'] = $this->Usermodel->fetch_warehouse_detailing_by_city_id($pro_id);
        $data['total_capcity'] = $this->Usermodel->Total_Capacity($pro_id);
        $data['total_capcity2'] = $this->Usermodel->Total_Capacity2($pro_id);
        $data['available_now'] = $this->Usermodel->available_now($pro_id);
        $data['median_storage_price'] = $this->Usermodel->median_storage_price($pro_id);
        $data['Pallet_Median_storage_price'] = $this->Usermodel->Pallet_Median_storage_price($pro_id);
        $data['Floorspace_Median_storage_price'] = $this->Usermodel->Floorspace_Median_storage_price($pro_id);
        // $data2['get_all_data'] = $this->Usermodel->get_all_data($pro_id);
        
        // echo $this->db->last_query();
        
        // echo "<pre>";
        // print_r($data); die;
        $this->load->view('user/header');
        $this->load->view('user/warehouse_network_detailing',$data);
        $this->load->view('user/footer');
    } 
/******************warehouse network Deatiling view Page Ends Here*****************/


/******************warehouse-provider view Page starts Here*****************/
    
    public function warehouse_provider(){
        $this->load->view('user/header');
        $this->load->view('user/warehouse_provider');
        $this->load->view('user/footer');
    } 
/******************warehouse-provider view Page Ends Here*****************/


/******************warehouse-provider view Page starts Here*****************/
    
    public function form_submitted(){
        $this->load->view('user/header');
        $this->load->view('user/form_submitted');
        $this->load->view('user/footer');
    } 
/******************warehouse-provider view Page Ends Here*****************/

/******************web-facility view Page starts Here*****************/
    
    public function web_facility($pro_id){
        $data['warehouse_detailed_data'] = $this->Usermodel->fetch_all_warehouse_detailed_data($pro_id);
        $data['detail'] = $this->Usermodel->warehouse_detail($pro_id);
        $data['img']=$this->Usermodel->get_image($pro_id);
        
     
        $this->load->view('user/header');
        $this->load->view('user/web_facility',$data);
        $this->load->view('user/footer');
    } 
    
/******************web-facility view Page Ends Here*****************/

/******************web-facility2 view Page starts Here*****************/
    
    public function web_facility_2(){
        $this->load->view('user/header');
        $this->load->view('user/web_facility_2');
        $this->load->view('user/footer');
    } 
/******************web-facility2 view Page Ends Here*****************/



/******************Contact Provider view Page starts Here*****************/
    
    public function contact_us(){
        $this->load->view('user/header');
        $this->load->view('user/contact_us');
        $this->load->view('user/footer');
    } 
/******************Contact Provider view Page Ends Here*****************/

    public function test(){
        $data = $this->Usermodel->queryzxz();
        echo "<pre>";
        
        print_r($data);
    }
    
}