<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminmodel extends  CI_Model{


/**********************Admin Details Model starts here*************************/

private function verifyHashedPassword($plainPassword, $hashedPassword){
return password_verify($plainPassword, $hashedPassword) ? true : false;
}

public function admin_login_validation($adminemail,$password){
    $this->db->where('admin_email', strtolower($adminemail));  
    $query = $this->db->get('tbl_admin'); 
    $admindetails = $query->result();
        if(!empty($admindetails)){  
            if($password === $admindetails[0]->password){
            return $this->read_admin_information($adminemail);
            } 
            else{
            return false;
            }
        } 
        else{ 
            return false;       
            } 

         }


    /*********************Admin details Model Starts Here**************************/

public function read_admin_information($adminemail) {
    $condition = "admin_email =" . "'" . $adminemail . "'";
    $this->db->select('*');
    $this->db->from('tbl_admin');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
    return $row = $query->row();
    } else {
    return false;
    }
}

var $admin_columnport = array('name', 'email',null, null, null);  
function makeadmin_query()  
{  
    $this->db->select("*");  
    $this->db->from('tbl_admin');  
    if(isset($_POST["search"]["value"]))  
    {  
    $this->db->like("admin_name", $_POST["search"]["value"]);  
    }
    if(isset($_POST["search"]["value"]))  
    {  
    $this->db->like("admin_email", $_POST["search"]["value"]);  
    }  
    if(isset($_POST["order"]))  
    {  
    $this->db->order_by($this->admin_columnport[$_POST['order']['0']['column']], $_POST['order']['0']['dir']); 
    }  
    else  
    {  
    $this->db->order_by('id', 'AESC');  
    }  
    }  
    public function fetch_all_admin_details_model(){  
    $this->makeadmin_query();  
    if($_POST["length"] != -1)  
    {  
    $this->db->limit($_POST['length'], $_POST['start']);  
    }  
    $query = $this->db->get();  
    return $query->result();  
    }  
    public function get_filtered_admindata(){  
    $this->makeadmin_query();  
    $query = $this->db->get();  
    return $query->num_rows();  
    }       
    public function get_all_admindata()  
    {  
    $this->db->select("*");  
    $this->db->from('tbl_admin');  
    return $this->db->count_all_results();  
    }  
    
    public function update_admin($pid, $data) {  
    $this->db->where("id", $pid);  
    $this->db->update("tbl_admin", $data); 
    if($this->db->affected_rows() > 0){
    return true;
    }else{
    return false;
    } 
   }    
/***********************Admin Details Model Ends here***************************/

 
/*******************Global Fetch type of categories Model starts****************/
public function get_all_categories_type(){
    $this->db->select('*');
    $this->db->from('tbl_type_of_listing');
    $this->db->where('status',1);
    $query = $this->db->get();
    if($query->num_rows() > 0){
        return $query->result();
    }
    else{
        
    }
}
/********************Global Fetch type of categories Model Ends****************/
    

/**********************City Listing Model Starts Here*****************/
    
public function fetch_all_city_listing_model(){  
 $this->makeport_city_listing_query();  
 if($_POST["length"] != -1)  
 {  
  $this->db->limit($_POST['length'], $_POST['start']);  
}  
$query = $this->db->get();  
return $query->result();  
}


var $city_listing_columnport = array(null,'city_name','city_name_slug',null,null);  
function makeport_city_listing_query(){  
  $this->db->select("*");  
  $this->db->from('tbl_warehouse_cities');  
  if(isset($_POST["search"]["value"]))  
  {  
    $this->db->like("city_name", $_POST["search"]["value"]);
    $this->db->like("city_name_slug", $_POST["search"]["value"]); 
  }  
  if(isset($_POST["order"])){  
    $this->db->order_by($this->city_listing_columnport[$_POST['order']['0']['column']], $_POST['order']['0']['dir']); 
  }  
  else  
  {  
    $this->db->order_by('id', 'AESC');  
  }  
}

public function get_all_city_listing_model(){  
 $this->db->select("*");  
 $this->db->from('tbl_warehouse_cities');  
 return $this->db->count_all_results();  
} 

public function get_filtered_city_listing_model(){  
 $this->makeport_city_listing_query();  
 $query = $this->db->get();  
 return $query->num_rows();  
}


public function insert_city_listing_data_model($table, $data){
  $this->db->insert($table, $data);
  if($this->db->affected_rows() > 0){
    return true;
  }else{
    return false;
  }
}

public function update_city_listing_data_model($data,$id){
    $this->db->where('id',$id);
    $this->db->update("tbl_warehouse_cities", $data);
    if($this->db->affected_rows() > 0){
        return true;
    }
    else{
        return false;
    }
    
}

public function fetch_single_city_listing_model($id){
    $this->db->select('*');
    $this->db->from('tbl_warehouse_cities');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->row();
}

public function update_city_listing_status($proid, $data){
     $this->db->where("id", $proid);  
     $this->db->update("tbl_warehouse_cities", $data); 
     if($this->db->affected_rows() > 0){
      return true;
    }
    else{
      return false;
    } 
}

 public function delete_city_listing($proid){
  $this->db->where("id", $proid);  
   $query=$this->db->delete('tbl_warehouse_cities');
   if($query){
     return true;
    }else{
     return false;
    } 
 }
    
    
/********************City Listing Model Ends Here*********************/

/**********************Warehouse Listing Model Starts Here*****************/


public function fetch_all_warehouse_city(){
    $this->db->select('*');
    $this->db->from('tbl_warehouse_cities');
    $this->db->where('status','1');
    $query = $this->db->get();
    if($query){
        return $query->result();
    }
    else{
       return false;    
    }
}
    
public function fetch_all_warehouse_listing_model(){  
 $this->makeport_warehouse_listing_query();  
 if($_POST["length"] != -1)  
 {  
  $this->db->limit($_POST['length'], $_POST['start']);  
}  
$query = $this->db->get();  
return $query->result();  
}


var $warehouse_listing_columnport = array(null,'owner_name','owner_company',null,null,null,null,null,null);  
function makeport_warehouse_listing_query(){  
  /*$this->db->select("*");  
  $this->db->from('tbl_warehouse_listing');*/
  
  $this->db->select("tbl_warehouse_listing.*,tbl_warehouse_cities.city_name");  
  $this->db->from('tbl_warehouse_listing');
  $this->db->join('tbl_warehouse_cities','tbl_warehouse_listing.city_id= tbl_warehouse_cities.id','INNER'); 
  
  if(isset($_POST["search"]["value"]))  
  {  
    $this->db->like("owner_name", $_POST["search"]["value"]);
    $this->db->like("owner_company", $_POST["search"]["value"]); 
  }  
  if(isset($_POST["order"])){  
    $this->db->order_by($this->warehouse_listing_columnport[$_POST['order']['0']['column']], $_POST['order']['0']['dir']); 
  }  
  else  
  {  
    $this->db->order_by('id', 'AESC');  
  }  
}

public function get_all_warehouse_listing_model(){  
 $this->db->select("*");  
 $this->db->from('tbl_warehouse_listing');  
 return $this->db->count_all_results();  
} 

public function get_filtered_warehouse_listing_model(){  
 $this->makeport_warehouse_listing_query();  
 $query = $this->db->get();  
 return $query->num_rows();  
}


public function insert_warehouse_listing_data_model($table, $data){
  $this->db->insert($table, $data);
  if($this->db->affected_rows() > 0){
    return true;
  }else{
    return false;
  }
}

public function update_warehouse_listing_data_model($data,$id){
    $this->db->where('id',$id);
    $this->db->update("tbl_warehouse_listing", $data);
    if($this->db->affected_rows() > 0){
        return true;
    }
    else{
        return false;
    }
    
}

public function fetch_single_warehouse_listing_model($id){
    $this->db->select('*');
    $this->db->from('tbl_warehouse_listing');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->row();
}

public function update_warehouse_listing_status($proid, $data){
     $this->db->where("id", $proid);  
     $this->db->update("tbl_warehouse_listing", $data); 
     if($this->db->affected_rows() > 0){
      return true;
    }
    else{
      return false;
    } 
}

 public function delete_warehouse_listing($proid){
  $this->db->where("id", $proid);  
   $query=$this->db->delete('tbl_warehouse_listing');
   if($query){
     return true;
    }else{
     return false;
    } 
 }

    
    
/********************Warehouse Listing Model Ends Here*********************/


/**********************Warehouse Detailing Model Starts Here*****************/


public function fetch_all_warehouse_list(){
    $this->db->select('*');
    $this->db->from('tbl_warehouse_listing');
    $this->db->where('status','1');
    $query = $this->db->get();
    if($query){
        return $query->result();
    }
    else{
       return false;    
    }
}


public function fetch_all_warehouse_detailing_model(){  
 $this->makeport_warehouse_detailing_query();  
 if($_POST["length"] != -1)  
 {  
  $this->db->limit($_POST['length'], $_POST['start']);  
}  
$query = $this->db->get();  
return $query->result();  
}


var $warehouse_detailing_columnport = array(null,null,null,null,'space_squre_feet',
'space_pallets','warehouse_location','founded','total_storable_space','total_staff','total_pallet_space','ramp_gates','ventilation','boundry_walls','max_height');  
function makeport_warehouse_detailing_query(){  
  $this->db->select("*");  
  $this->db->from('tbl_warehouse_detailing');
  
  /*$this->db->select("tbl_warehouse_detailing.*,tbl_warehouse_listing.id");  
  $this->db->from('tbl_warehouse_detailing');
  $this->db->join('tbl_warehouse_listing','tbl_warehouse_detailing.id= tbl_warehouse_cities.id','INNER');*/ 
  
  if(isset($_POST["search"]["value"]))  
  {  
    $this->db->like("space_squre_feet", $_POST["search"]["value"]);
    $this->db->like("space_pallets", $_POST["search"]["value"]); 
    $this->db->like("warehouse_location", $_POST["search"]["value"]); 
    $this->db->like("founded", $_POST["search"]["value"]); 
    $this->db->like("total_storable_space", $_POST["search"]["value"]); 
    $this->db->like("total_staff", $_POST["search"]["value"]);
    $this->db->like("total_pallet_space", $_POST["search"]["value"]); 
    $this->db->like("ramp_gates", $_POST["search"]["value"]);
    $this->db->like("ventilation", $_POST["search"]["value"]);
    $this->db->like("boundry_walls", $_POST["search"]["value"]);
    $this->db->like("max_height", $_POST["search"]["value"]);
    
  }  
  if(isset($_POST["order"])){  
    $this->db->order_by($this->warehouse_detailing_columnport[$_POST['order']['0']['column']], $_POST['order']['0']['dir']); 
  }  
  else  
  {  
    $this->db->order_by('id', 'AESC');  
  }  
}

public function get_all_warehouse_detailing_model(){  
 $this->db->select("*");  
 $this->db->from('tbl_warehouse_detailing');  
 return $this->db->count_all_results();  
} 

public function get_filtered_warehouse_detailing_model(){  
 $this->makeport_warehouse_detailing_query();  
 $query = $this->db->get();  
 return $query->num_rows();  
}


public function insert_warehouse_detailing_data_model($table, $data){
  $this->db->insert($table, $data);
  if($this->db->affected_rows() > 0){
    return true;
  }else{
    return false;
  }
}

public function update_warehouse_detailing_data_model($data,$id){
    $this->db->where('id',$id);
    $this->db->update("tbl_warehouse_detailing", $data);
    if($this->db->affected_rows() > 0){
        return true;
    }
    else{
        return false;
    }
    
}

public function fetch_single_warehouse_detailing_model($id){
    $this->db->select('*');
    $this->db->from('tbl_warehouse_detailing');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->row();
}

public function update_warehouse_detailing_status($proid, $data){
     $this->db->where("id", $proid);  
     $this->db->update("tbl_warehouse_detailing", $data); 
     if($this->db->affected_rows() > 0){
      return true;
    }
    else{
      return false;
    } 
}

 public function delete_warehouse_detailing($proid){
  $this->db->where("id", $proid);  
   $query=$this->db->delete('tbl_warehouse_detailing');
   if($query){
     return true;
    }else{
     return false;
    } 
 }

    
    
/********************Warehouse Detailing Model Ends Here*********************/

}
?>