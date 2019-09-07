<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adminemail') || !$this->session->userdata('adminname') || !$this->session->userdata('adminid')) {
            redirect('adminlogin');
            exit();
        }
        $this->load->model('Adminmodel');
    }
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function logout(){
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != '__ci_last_regenerate'){
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        return redirect('adminlogin');
    }  
    
    //------------------Make slug of string------------------
	function make_slug_of_string($string){
		$slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));
		return $slug;
	}
    
    /***************************Global Upload path*********************************/

    private function custom_image_upload_function($fieldname,$uploadpath){
            $config['upload_path']          = $uploadpath;
            $config['overwrite']            = TRUE;
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 10240000;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            //$config['file_name']            = $finalfilename;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload($fieldname)){
                return '';
            }
            else{
                $image_data = $this->upload->data();
                return  $image_data['file_name'];
        }
    }

/********************** Global Upload path Ends Here***************************/
    
    
/*----------------------------------------------------------------------------*/
		
    private function custom_file_upload($finalfilename, $fieldname){
            $config['upload_path']          = './uploads/warehouse_image/';
            $config['overwrite']            = TRUE;
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 10240000;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $config['file_name']            = $finalfilename;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload($fieldname)){
                return $this->upload->display_errors();
            }
            else{
            return true;
        }
    }

/*
----------------------------------------------------------------



/**************************Admin Details***************************************/

public function admin_details(){
       $this->load->view('admin/header');
       $this->load->view('admin/admin_details');
       $this->load->view('admin/footer');
}

public function fetch_all_admin_details(){    
    $fetch_data = $this->Adminmodel->fetch_all_admin_details_model();  
    $data = array();
    $sn = 1;  
    foreach($fetch_data as $row){  

    if($row->status==='1'){
    $st = '<span class="badge badge-pill badge-primary">Active</span>';
    $bt = '<button type="button" name="hide_category" mainid="'.$row->id.'" class="btn btn-danger btn-sm hide_category"><i class="fa fa-ban"></i></button>';
    } 
    else {
    $st = '<span class="badge badge-pill badge-danger">InActive</span>';
    $bt = '<button type="button" name="activate_category" mainid="'.$row->id.'" class="btn btn-info btn-sm activate_category"><i class="fa fa-thumbs-up"></i></button>';
    }

    $sub_array = array(); 
    $sub_array[] = $sn++;
    $sub_array[] = $row->admin_name;
    $sub_array[] = $row->admin_email;
    $sub_array[] = date('d-M-Y, h:i:s A', strtotime($row->added_at));
    $sub_array[] = $st;  
    $sub_array[] = $bt;  
    $data[] = $sub_array;  
    }  
    $output = array(  
    "draw" =>     intval($this->input->post("draw")),  
    "recordsTotal"  => $this->Adminmodel->get_all_admindata(),  
    "recordsFiltered" => $this->Adminmodel->get_filtered_admindata(),  
    "data" => $data  
    );  
    echo json_encode($output);
    }

    public function update_admin(){
    $up_data = array( 
    'status' => $this->input->post("status")
    ); 
    $updb = $this->Adminmodel->update_admin($this->input->post("id"), $up_data);   
    if($updb){
    echo json_encode(array('success'=>'Admin Updated successfully'));
    } else {
    echo json_encode(array('error'=>'Fail to Update Admin'));
    }	
 }
/***************************Admin Details Ends Here*****************************/
    
  /***************************************************************************
                        City Listing Page Starts
  ****************************************************************************/
  
/***************************City Listing starts Here****************/
    
    public function city_listing(){
        $this->load->view('admin/header');
        $this->load->view('admin/city_listing');
        $this->load->view('admin/footer');
    }
    
    public function fetch_all_city_listing(){
    $fetch_data = $this->Adminmodel->fetch_all_city_listing_model();  
    $data = array();
    $sn = 1;  
    foreach($fetch_data as $row){

        if($row->status==='1'){
            $st = '<span class="badge badge-pill badge-primary">Active</span>';
            $bt = '<button type="button" name="hide_city_listing" mainid="'.$row->id.'" class="btn btn-danger btn-sm hide_city_listing"><i class="fa fa-ban"></i></button>';
        } else {
            $st = '<span class="badge badge-pill badge-danger">InActive</span>';
            $bt = '<button type="button" name="activate_city_listing" mainid="'.$row->id.'" class="btn btn-info btn-sm activate_city_listing"><i class="fa fa-thumbs-up"></i></button>';
        }

        //Update and Delete Button

         //$dt = ' <button type="button" name="delete_city_listing" mainid="'.$row->id.'" class="btn btn-danger btn-sm delete_city_listing"><i class="fa fa-trash"></i></button>';
         $ut = ' <button type="button" name="edit_city_listing"  mainid="'.$row->id.'" class="btn btn-danger btn-sm edit_city_listing"><i class="fa fa-edit"></i></button>';

        
        $sub_array = array(); 
        $sub_array[] = $sn++;
        $sub_array[] = $row->city_name;
        $sub_array[] = date('d-M-Y, h:i:s A', strtotime($row->added_at));
        $sub_array[] = $st;  
        $sub_array[] = $bt .$ut;  
        $data[] = $sub_array;  
    }  
    $output = array(  
        "draw" =>     intval($this->input->post("draw")),  
        "recordsTotal"  => $this->Adminmodel->get_all_city_listing_model(),  
        "recordsFiltered" => $this->Adminmodel->get_filtered_city_listing_model(),  
        "data" => $data  
    );  
    echo json_encode($output);
    }
    
    public function insert_city_listing_data(){

    if($this->input->post('taction')=="update_product"){
          $updated_data = array(
                'city_name' => $this->input->post("city_name"),
                'city_name_slug' =>$this->make_slug_of_string($this->input->post("city_name"))
            );
            $result = $this->Adminmodel->update_city_listing_data_model($updated_data, $this->input->post('id'));
            if($result===TRUE)
            { 
                echo json_encode(array('success'=>'Details updated successfully')); 
                die;
            } else {
                echo json_encode(array('error'=>'Fail to update Details'));
            } 

        }
        else{
        $insert_data = array( 
                'city_name' => $this->input->post("city_name"),
                'city_name_slug' =>$this->make_slug_of_string($this->input->post("city_name"))
        ); 
        $insertdb = $this->Adminmodel->insert_city_listing_data_model('tbl_warehouse_cities', $insert_data);   
        if($insertdb){
            echo json_encode(array('success'=>'Data Added successfully'));
        } else {
            echo json_encode(array('error'=>'Fail to Add Data'));
        }
      }
    }

    //fetch_single
    public function fetch_single_city_listing(){
        $output = array();  
        $data = $this->Adminmodel->fetch_single_city_listing_model($this->input->post("id"));  
            if($data){
                $output['city_name'] = $data->city_name;
            }  
                echo json_encode($output); 
         }

    public function hide_city_listing(){  
    $update_data = array(  
        'status' => '2'    
    );  
    $result = $this->Adminmodel->update_city_listing_status($this->input->post("id"), $update_data); 
    if($result){
        echo json_encode(array('success'=>'Data updated successfully'));
    }
    else{
        echo json_encode(array('error'=>'Fail to Update Data.'));
    }
    }

    public function unhide_city_listing(){  
    $update_data = array(  
        'status' => '1'    
    );  
    $result = $this->Adminmodel->update_city_listing_status($this->input->post("id"), $update_data); 
    if($result){
        echo json_encode(array('success'=>'Data updated successfully'));
    }
    else{
        echo json_encode(array('error'=>'Fail to Update Data.'));
    }
}

    
  /***************************************************************************
                        City Listing Page Ends
  ****************************************************************************/
  
/***************************************************************************
                            Warehouse Listing Page Starts
****************************************************************************/
    
    public function warehouse_listing(){
        $data['warehouse_city'] = $this->Adminmodel->fetch_all_warehouse_city();
        $this->load->view('admin/header');
        $this->load->view('admin/warehouse_listing',$data);
        $this->load->view('admin/footer');
    }    
    
    public function fetch_all_warehouse_listing(){
    $fetch_data = $this->Adminmodel->fetch_all_warehouse_listing_model();  
    $data = array();
    $sn = 1;  
    foreach($fetch_data as $row){

        if($row->status==='1'){
            $st = '<span class="badge badge-pill badge-primary">Active</span>';
            $bt = '<button type="button" name="hide_warehouse_listing" mainid="'.$row->id.'" class="btn btn-danger btn-sm hide_warehouse_listing"><i class="fa fa-ban"></i></button>';
        } else {
            $st = '<span class="badge badge-pill badge-danger">InActive</span>';
            $bt = '<button type="button" name="activate_warehouse_listing" mainid="'.$row->id.'" class="btn btn-info btn-sm activate_warehouse_listing"><i class="fa fa-thumbs-up"></i></button>';
        }

        //Update and Delete Button

         $dt = ' <button type="button" name="delete_warehouse_listing" mainid="'.$row->id.'" class="btn btn-danger btn-sm delete_warehouse_listing"><i class="fa fa-trash"></i></button>';
         $ut = ' <button type="button" name="edit_warehouse_listing"  mainid="'.$row->id.'" class="btn btn-danger btn-sm edit_warehouse_listing"><i class="fa fa-edit"></i></button>';

        $owner_image = '';
        if($row->owner_image != '')
        {
          $owner_image = '<img src="'.base_url().'uploads/warehouse_owner/'.$row->owner_image.'" class="img-thumbnail" width="50" height="35" />';
        }
        else
        {
             $owner_image = '';
        }
        
        $sub_array = array(); 
        $sub_array[] = $sn++;
        $sub_array[] = $row->city_name;
        $sub_array[] = $row->warehouse_name;
        $sub_array[] = $owner_image;
        $sub_array[] = $row->owner_name;
        $sub_array[] = $row->owner_designation;
        $sub_array[] = $row->owner_company;
        $sub_array[] = date('d-M-Y, h:i:s A', strtotime($row->added_at));
        $sub_array[] = $st;  
        $sub_array[] = $bt .$ut .$dt;  
        $data[] = $sub_array;  
    }  
    $output = array(  
        "draw" =>     intval($this->input->post("draw")),  
        "recordsTotal"  => $this->Adminmodel->get_all_warehouse_listing_model(),  
        "recordsFiltered" => $this->Adminmodel->get_filtered_warehouse_listing_model(),  
        "data" => $data  
    );  
    echo json_encode($output);
    }
    
    public function insert_warehouse_listing_data(){

    if($this->input->post('taction')=="update_product"){
        
            
            if(!empty($_FILES["owner_image"]["name"])){
                    $owner_image = $_FILES["owner_image"]["name"];
                    $uploadpath1 = './uploads/warehouse_owner/';
                    $filename1 = $this->custom_image_upload_function('owner_image',$uploadpath1);
                }
            else{
                    $filename1 = $this->input->post('old_owner_image');
            }
                
          $updated_data = array(
                'city_id' => $this->input->post("city"),
                'warehouse_name' => $this->input->post("warehouse_name"),
                'owner_image' => $filename1,
                'owner_name' => $this->input->post("owner_name"),
                'owner_designation' => $this->input->post("owner_designation"),
                'owner_company' => $this->input->post("owner_company")
            );
            $result = $this->Adminmodel->update_warehouse_listing_data_model($updated_data, $this->input->post('id'));
            if($result===TRUE)
            { 
                echo json_encode(array('success'=>'Details updated successfully')); 
                die;
            } else {
                echo json_encode(array('error'=>'Fail to update Details'));
            } 

        }
        else{
            
            if(!empty($_FILES["owner_image"]["name"])){
                    $main_image = $_FILES["owner_image"]["name"];
                    $uploadpath1 = './uploads/warehouse_owner/';
                    $filename1 = $this->custom_image_upload_function('owner_image',$uploadpath1);
                }
                else{
                    $filename1 = '';
                }
        $insert_data = array( 
                'city_id' => $this->input->post("city"),
                'warehouse_name' => $this->input->post("warehouse_name"),
                'owner_image' => $filename1,
                'owner_name' => $this->input->post("owner_name"),
                'owner_designation' => $this->input->post("owner_designation"),
                'owner_company' => $this->input->post("owner_company")
        ); 
        $insertdb = $this->Adminmodel->insert_warehouse_listing_data_model('tbl_warehouse_listing', $insert_data);   
        if($insertdb){
            echo json_encode(array('success'=>'Data Added successfully'));
        } else {
            echo json_encode(array('error'=>'Fail to Add Data'));
        }
      }
    }

    //fetch_single
    public function fetch_single_warehouse_listing(){
        $output = array();  
        $data = $this->Adminmodel->fetch_single_warehouse_listing_model($this->input->post("id"));  
            if($data){
                $output['city_id'] = $data->city_id;
                $output['warehouse_name'] = $data->warehouse_name;
                $output['old_owner_image'] = $data->owner_image;
                $output['owner_name'] = $data->owner_name;
                $output['owner_designation'] = $data->owner_designation;
                $output['owner_company'] = $data->owner_company;
            }  
                echo json_encode($output); 
         }

    public function hide_warehouse_listing(){  
    $update_data = array(  
        'status' => '2'    
    );  
    $result = $this->Adminmodel->update_warehouse_listing_status($this->input->post("id"), $update_data); 
    if($result){
        echo json_encode(array('success'=>'Data updated successfully'));
    }
    else{
        echo json_encode(array('error'=>'Fail to Update Data.'));
    }
    }

    public function unhide_warehouse_listing(){  
    $update_data = array(  
        'status' => '1'    
    );  
    $result = $this->Adminmodel->update_warehouse_listing_status($this->input->post("id"), $update_data); 
    if($result){
        echo json_encode(array('success'=>'Data updated successfully'));
    }
    else{
        echo json_encode(array('error'=>'Fail to Update Data.'));
    }
}
 
    public function delete_warehouse_listing(){  
    $result = $this->Adminmodel->delete_warehouse_listing($this->input->post("id")); 
    if($result){
        echo json_encode(array('success'=>'Data updated successfully'));
    }
    else{
        echo json_encode(array('error'=>'Fail to Update Data.'));
    }
}   
 


/***************************************************************************
                            Warehouse Listing Page Ends
****************************************************************************/



/***************************************************************************
                            Warehouse Detailing Starts Here
****************************************************************************/

    public function warehouse_detailing(){
        $data['warehouse_list'] = $this->Adminmodel->fetch_all_warehouse_list();
        $this->load->view('admin/header');
        $this->load->view('admin/warehouse_detailing',$data);
        $this->load->view('admin/footer');
    }    
    
    public function fetch_all_warehouse_detailing(){
    $fetch_data = $this->Adminmodel->fetch_all_warehouse_detailing_model();  
    $data = array();
    $sn = 1;  
    foreach($fetch_data as $row){

        if($row->status==='1'){
            $st = '<span class="badge badge-pill badge-primary">Active</span>';
            $bt = '<button type="button" name="hide_warehouse_detailing" mainid="'.$row->id.'" class="btn btn-danger btn-sm hide_warehouse_detailing"><i class="fa fa-ban"></i></button>';
        } else {
            $st = '<span class="badge badge-pill badge-danger">InActive</span>';
            $bt = '<button type="button" name="activate_warehouse_detailing" mainid="'.$row->id.'" class="btn btn-info btn-sm activate_warehouse_detailing"><i class="fa fa-thumbs-up"></i></button>';
        }

        //Update and Delete Button

         $dt = ' <button type="button" name="delete_warehouse_detailing" mainid="'.$row->id.'" class="btn btn-danger btn-sm delete_warehouse_detailing"><i class="fa fa-trash"></i></button>';
         $ut = ' <button type="button" name="edit_warehouse_detailing"  mainid="'.$row->id.'" class="btn btn-danger btn-sm edit_warehouse_detailing"><i class="fa fa-edit"></i></button>';

        $sub_array = array(); 
        $sub_array[] = $sn++;
        $sub_array[] = $row->small_description;
        $sub_array[] = $row->below_description;
        $sub_array[] = $row->industry_1;
        $sub_array[] = $row->industry_2;
        $sub_array[] = $row->industry_3;
        $sub_array[] = $row->industry_4;
        $sub_array[] = $row->industry_5;
        $sub_array[] = $row->space_squre_feet;
        $sub_array[] = $row->space_pallets;
        $sub_array[] = $row->space_availability;
        $sub_array[] = $row->reach_time_1;
        $sub_array[] = $row->reach_time_2;
        $sub_array[] = $row->warehouse_location;
        $sub_array[] = $row->founded;
        $sub_array[] = $row->warehouse_type;
        $sub_array[] = $row->total_staff;
        $sub_array[] = $row->total_storable_space;
        $sub_array[] = $row->total_pallet_space;
        $sub_array[] = $row->monday;
        $sub_array[] = $row->tuesday;
        $sub_array[] = $row->wednesday;
        $sub_array[] = $row->thursday;
        $sub_array[] = $row->friday;
        $sub_array[] = $row->saturday;
        $sub_array[] = $row->sunday;
        $sub_array[] = $row->floorspace_area_1;
        $sub_array[] = $row->floorspace_area_2;
        $sub_array[] = $row->floorspace_area_3;
        $sub_array[] = $row->floorspace_area_4;
        $sub_array[] = $row->pallet_1;
        $sub_array[] = $row->pallet_2;
        $sub_array[] = $row->pallet_3;
        $sub_array[] = $row->other_charges_1;
        $sub_array[] = $row->other_charges_2;
        $sub_array[] = $row->other_charges_3;
        $sub_array[] = $row->other_charges_4;
        $sub_array[] = $row->other_charges_5;
        $sub_array[] = $row->facilities_1;
        $sub_array[] = $row->facilities_2;
        $sub_array[] = $row->facilities_3;
        $sub_array[] = $row->facilities_4;
        $sub_array[] = $row->facilities_5;
        $sub_array[] = $row->facilities_6;
        $sub_array[] = $row->services_1;
        $sub_array[] = $row->services_2;
        $sub_array[] = $row->services_3;
        $sub_array[] = $row->services_4;
        $sub_array[] = $row->services_5;
        $sub_array[] = $row->services_6;
        $sub_array[] = $row->warehouse_roof;
        $sub_array[] = $row->ramp_gates;
        $sub_array[] = $row->ventilation;
        $sub_array[] = $row->boundry_walls;
        $sub_array[] = $row->max_height;
        $sub_array[] = date('d-M-Y, h:i:s A', strtotime($row->added_date));
        $sub_array[] = date('d-M-Y, h:i:s A', strtotime($row->updated_date));
        $sub_array[] = $st;  
        $sub_array[] = $bt .$ut .$dt;  
        $data[] = $sub_array;  
    }  
    $output = array(  
        "draw" =>     intval($this->input->post("draw")),  
        "recordsTotal"  => $this->Adminmodel->get_all_warehouse_detailing_model(),  
        "recordsFiltered" => $this->Adminmodel->get_filtered_warehouse_detailing_model(),  
        "data" => $data  
    );  
    echo json_encode($output);
    }
    
    public function insert_warehouse_detailing_data(){

    if($this->input->post('taction')=="update_product"){
            
             if(!empty($_FILES["warehouse_image"]["name"])){                     
                        $image_total = [];
                        foreach($_FILES["warehouse_image"]["name"] as $key => $name){
                        $img = $_FILES["warehouse_image"]["name"][$key];
                        $file_tmp = $_FILES["warehouse_image"]["name"][$key];
                        $arrayupfile = explode('.', $img);
                        $ext = end($arrayupfile);
                        $filepanname = substr(hash('sha256', mt_rand() . microtime()), 0, 20).'_temp'. '.' .$ext;
                        $finaldb = 'uploads/warehouse_image/'.$filepanname;
                        array_push($image_total, $filepanname);
                        $filesucces = $this->custom_file_upload($filepanname, 'image[]');
                        $a = move_uploaded_file($_FILES["warehouse_image"]["tmp_name"][$key], $finaldb);
                        }
                        $all_image = implode(',', $image_total);
        
                }
              else{
                     $all_image = $this->input->post('old_warehouse_image');
                }
          $updated_data = array(
                'warehouse_id' => $this->input->post("warehouse_id"),
                'images' => $all_image,
                'small_description' => $this->input->post("small_description"),
                'below_description' => $this->input->post("below_description"),
                'industry_1' => $this->input->post("industry_served_1"),
                'industry_2' => $this->input->post("industry_served_2"),
                'industry_3' => $this->input->post("industry_served_3"),
                'industry_4' => $this->input->post("industry_served_4"),
                'industry_5' => $this->input->post("industry_served_5"),
                'space_squre_feet' => $this->input->post("Space_Squre_Feet"),
                'space_pallets' => $this->input->post("space_pallets"),
                'space_availability' => $this->input->post("Space_Availability"),
                'reach_time_1' => $this->input->post("Reach_Time_1"),
                'reach_time_2' => $this->input->post("Reach_Time_2"),
                'warehouse_location' => $this->input->post("Warehouse_Location"),
                'founded' => $this->input->post("Founded"),
                'warehouse_type' => $this->input->post("Warehouse_Type"),
                'total_staff' => $this->input->post("Total_Staff"),
                'total_storable_space' => $this->input->post("Total_Storable_Space"),
                'total_pallet_space' => $this->input->post("Total_Pallet_space"),
                'monday' => $this->input->post("Monday"),
                'tuesday' => $this->input->post("Tuesday"),
                'wednesday' => $this->input->post("Wednesday"),
                'thursday' => $this->input->post("Thursday"),
                'friday' => $this->input->post("Friday"),
                'saturday' => $this->input->post("Saturday"),
                'sunday' => $this->input->post("Sunday"),
                'floorspace_area_1' => $this->input->post("Floorspace_area_1"),
                'floorspace_area_2' => $this->input->post("Floorspace_area_2"),
                'floorspace_area_3' => $this->input->post("Floorspace_area_3"),
                'floorspace_area_4' => $this->input->post("Floorspace_area_4"),
                'pallet_1' => $this->input->post("Pallet_1"),
                'pallet_2' => $this->input->post("Pallet_2"),
                'pallet_3' => $this->input->post("Pallet_3"),
                'other_charges_1' => $this->input->post("Other_Chages_1"),
                'other_charges_2' => $this->input->post("Other_Chages_2"),
                'other_charges_3' => $this->input->post("Other_Chages_3"),
                'other_charges_4' => $this->input->post("Other_Chages_4"),
                'other_charges_5' => $this->input->post("Other_Chages_5"),
                'facilities_1'=> $this->input->post("facility_1"),
                'facilities_2'=> $this->input->post("facility_2"),
                'facilities_3'=> $this->input->post("facility_3"),
                'facilities_4'=> $this->input->post("facility_4"),
                'facilities_5'=> $this->input->post("facility_5"),
                'facilities_6'=> $this->input->post("facility_6"),
                'services_1'=> $this->input->post("service_1"),
                'services_2'=> $this->input->post("service_2"),
                'services_3'=> $this->input->post("service_3"),
                'services_4'=> $this->input->post("service_4"),
                'services_5'=> $this->input->post("service_5"),
                'services_6'=> $this->input->post("service_6"), 
                'warehouse_roof' => $this->input->post("Warehouse_roof"),
                'ramp_gates' => $this->input->post("ramp_gates"),
                'ventilation' => $this->input->post("Ventilation"),
                'boundry_walls' => $this->input->post("Boundry_walls"),
                'max_height' => $this->input->post("Max_height"),
                'updated_date' => date('Y-m-d H:i:s')
                
            );
            $result = $this->Adminmodel->update_warehouse_detailing_data_model($updated_data, $this->input->post('id'));
            if($result===TRUE)
            { 
                echo json_encode(array('success'=>'Details updated successfully')); 
                die;
            } else {
                echo json_encode(array('error'=>'Fail to update Details'));
            } 

        }
        else{
            
            if(!empty($_FILES["warehouse_image"]["name"])){                     
                        $image_total = [];
                        foreach($_FILES["warehouse_image"]["name"] as $key => $name){
                        $img = $_FILES["warehouse_image"]["name"][$key];
                        $file_tmp = $_FILES["warehouse_image"]["name"][$key];
                        $arrayupfile = explode('.', $img);
                        $ext = end($arrayupfile);
                        $filepanname = substr(hash('sha256', mt_rand() . microtime()), 0, 20).'_temp'. '.' . $ext;
                        $finaldb = 'uploads/warehouse_image/'.$filepanname;
                        array_push($image_total, $filepanname);
                        $filesucces = $this->custom_file_upload($filepanname, 'image[]');
                        $a = move_uploaded_file($_FILES["warehouse_image"]["tmp_name"][$key], $finaldb);
                        }
                        $all_image = implode(',', $image_total);
        
                }
              else{
                     $all_image = $this->input->post('old_warehouse_image');
                }
        $insert_data = array( 
                'warehouse_id' => $this->input->post("warehouse_id"),
                'images' => $all_image,
                'small_description' => $this->input->post("small_description"),
                'below_description' => $this->input->post("below_description"),
                'industry_1' => $this->input->post("industry_served_1"),
                'industry_2' => $this->input->post("industry_served_2"),
                'industry_3' => $this->input->post("industry_served_3"),
                'industry_4' => $this->input->post("industry_served_4"),
                'industry_5' => $this->input->post("industry_served_5"),
                'space_squre_feet' => $this->input->post("Space_Squre_Feet"),
                'space_pallets' => $this->input->post("space_pallets"),
                'space_availability' => $this->input->post("Space_Availability"),
                'reach_time_1' => $this->input->post("Reach_Time_1"),
                'reach_time_2' => $this->input->post("Reach_Time_2"),
                'warehouse_location' => $this->input->post("Warehouse_Location"),
                'founded' => $this->input->post("Founded"),
                'warehouse_type' => $this->input->post("Warehouse_Type"),
                'total_staff' => $this->input->post("Total_Staff"),
                'total_storable_space' => $this->input->post("Total_Storable_Space"),
                'total_pallet_space' => $this->input->post("Total_Pallet_space"),
                'monday' => $this->input->post("Monday"),
                'tuesday' => $this->input->post("Tuesday"),
                'wednesday' => $this->input->post("Wednesday"),
                'thursday' => $this->input->post("Thursday"),
                'friday' => $this->input->post("Friday"),
                'saturday' => $this->input->post("Saturday"),
                'sunday' => $this->input->post("Sunday"),
                'floorspace_area_1' => $this->input->post("Floorspace_area_1"),
                'floorspace_area_2' => $this->input->post("Floorspace_area_2"),
                'floorspace_area_3' => $this->input->post("Floorspace_area_3"),
                'floorspace_area_4' => $this->input->post("Floorspace_area_4"),
                'pallet_1' => $this->input->post("Pallet_1"),
                'pallet_2' => $this->input->post("Pallet_2"),
                'pallet_3' => $this->input->post("Pallet_3"),
                'other_charges_1' => $this->input->post("Other_Chages_1"),
                'other_charges_2' => $this->input->post("Other_Chages_2"),
                'other_charges_3' => $this->input->post("Other_Chages_3"),
                'other_charges_4' => $this->input->post("Other_Chages_4"),
                'other_charges_5' => $this->input->post("Other_Chages_5"),
                'warehouse_roof' => $this->input->post("Warehouse_roof"),
                'facilities_1'=> $this->input->post("facility_1"),
                'facilities_2'=> $this->input->post("facility_2"),
                'facilities_3'=> $this->input->post("facility_3"),
                'facilities_4'=> $this->input->post("facility_4"),
                'facilities_5'=> $this->input->post("facility_5"),
                'facilities_6'=> $this->input->post("facility_6"),
                'services_1'=> $this->input->post("service_1"),
                'services_2'=> $this->input->post("service_2"),
                'services_3'=> $this->input->post("service_3"),
                'services_4'=> $this->input->post("service_4"),
                'services_5'=> $this->input->post("service_5"),
                'services_6'=> $this->input->post("service_6"),
                'ramp_gates' => $this->input->post("ramp_gates"),
                'ventilation' => $this->input->post("Ventilation"),
                'boundry_walls' => $this->input->post("Boundry_walls"),
                'max_height' => $this->input->post("Max_height"),
                'added_date' =>  date('Y-m-d H:i:s'),
                'updated_date' => date('Y-m-d H:i:s')
        ); 
        $insertdb = $this->Adminmodel->insert_warehouse_detailing_data_model('tbl_warehouse_detailing', $insert_data);   
        if($insertdb){
            echo json_encode(array('success'=>'Data Added successfully'));
        } else {
            echo json_encode(array('error'=>'Fail to Add Data'));
        }
      }
    }

    //fetch_single
    public function fetch_single_warehouse_detailing(){
        $output = array();  
        $data = $this->Adminmodel->fetch_single_warehouse_detailing_model($this->input->post("id"));  
            if($data){
                $output['warehouse_id'] = $data->warehouse_id;
                $output['old_warehouse_image'] = $data->images;
                $output['small_description'] = $data->small_description;
                $output['below_description'] = $data->below_description;
                $output['industry_served_1'] = $data->industry_1;
                $output['industry_served_2'] = $data->industry_2;
                $output['industry_served_3'] = $data->industry_3;
                $output['industry_served_4'] = $data->industry_4;
                $output['industry_served_5'] = $data->industry_5;
                $output['space_squre_feet'] = $data->space_squre_feet;
                $output['space_pallets'] = $data->space_pallets;
                $output['space_availability'] = $data->space_availability;
                $output['reach_time_1'] = $data->reach_time_1;
                $output['reach_time_2'] = $data->reach_time_2;
                $output['warehouse_location'] = $data->warehouse_location;
                $output['founded'] = $data->founded;
                $output['warehouse_type'] = $data->warehouse_type;
                $output['total_staff'] = $data->total_staff;
                $output['total_storable_space'] = $data->total_storable_space;
                $output['total_pallet_space'] = $data->total_pallet_space;
                $output['monday'] = $data->monday;
                $output['tuesday'] = $data->tuesday;
                $output['wednesday'] = $data->wednesday;
                $output['thursday'] = $data->thursday;
                $output['friday'] = $data->friday;
                $output['saturday'] = $data->saturday;
                $output['sunday'] = $data->sunday;
                $output['floorspace_area_1'] = $data->floorspace_area_1;
                $output['floorspace_area_2'] = $data->floorspace_area_2;
                $output['floorspace_area_3'] = $data->floorspace_area_3;
                $output['floorspace_area_4'] = $data->floorspace_area_4;
                $output['pallet_1'] = $data->pallet_1;
                $output['pallet_2'] = $data->pallet_2;
                $output['pallet_3'] = $data->pallet_3;
                $output['other_charges_1'] = $data->other_charges_1;
                $output['other_charges_2'] = $data->other_charges_2;
                $output['other_charges_3'] = $data->other_charges_3;
                $output['other_charges_4'] = $data->other_charges_4;
                $output['other_charges_5'] = $data->other_charges_5;
                $output['facility_1'] = $data->facilities_1;
                $output['facility_2'] = $data->facilities_2;
                $output['facility_3'] = $data->facilities_3;
                $output['facility_4'] = $data->facilities_4;
                $output['facility_5'] = $data->facilities_5;
                $output['facility_6'] = $data->facilities_6;
                $output['service_1'] = $data->services_1;
                $output['service_2'] = $data->services_2;
                $output['service_3'] = $data->services_3;
                $output['service_4'] = $data->services_4;
                $output['service_5'] = $data->services_5;
                $output['service_6'] = $data->services_6;
                $output['warehouse_roof'] = $data->warehouse_roof;
                $output['ramp_gates'] = $data->ramp_gates;
                $output['ventilation'] = $data->ventilation;
                $output['boundry_walls'] = $data->boundry_walls;
                $output['max_height'] = $data->max_height;
            }  
                echo json_encode($output); 
         }

    public function hide_warehouse_detailing(){  
    $update_data = array(  
        'status' => '2'    
    );  
    $result = $this->Adminmodel->update_warehouse_detailing_status($this->input->post("id"), $update_data); 
    if($result){
        echo json_encode(array('success'=>'Data updated successfully'));
    }
    else{
        echo json_encode(array('error'=>'Fail to Update Data.'));
    }
    }

    public function unhide_warehouse_detailing(){  
    $update_data = array(  
        'status' => '1'    
    );  
    $result = $this->Adminmodel->update_warehouse_detailing_status($this->input->post("id"), $update_data); 
    if($result){
        echo json_encode(array('success'=>'Data updated successfully'));
    }
    else{
        echo json_encode(array('error'=>'Fail to Update Data.'));
    }
}

    public function delete_warehouse_detailing(){  
    $result = $this->Adminmodel->delete_warehouse_detailing($this->input->post("id")); 
    if($result){
        echo json_encode(array('success'=>'Data updated successfully'));
    }
    else{
        echo json_encode(array('error'=>'Fail to Update Data.'));
    }
}   

/***************************************************************************
                            Warehouse Detailing Page Ends
****************************************************************************/

    
}
?>