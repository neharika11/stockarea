<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usermodel extends  CI_Model{

    /*****************Index page fetch All categories STARTS HERE******************/
    
        public function fetch_all_categories_listing_model(){
            $this->db->select('*');
            $this->db->from('tbl_type_of_listing');
            $this->db->where('status',1);
            $query = $this->db->get();
            if($query){
                return $query->result();
            }
            else{
                return false;
            }
        }


  /*****************Index page fetch All categories ENDS HERE********************/
  
  /********************Warehouse city model Starts Here*************************/
    
    public function fetch_all_warehouse_city(){
        /*$this->db->JOIN(
        left join images on (images.resource_id = warehouses.id AND images.resource_type = 'Warehouse' AND images.deleted_at is NULL)
        left join warehouse_factors on (warehouse_factors.warehouse_id = warehouses.id AND warehouse_factors.deleted_at is NULL)
        join items on (items.id = warehouse_factors.item_id)
        join categories on (categories.id = items.category_id)
        where warehouses.stage = 'moderation' and warehouses.deleted_at is null;');*/
        $this->db->select('*');
        $this->db->from('warehouse_cities');
        $this->db->where('deleted_at', null);
        $query = $this->db->get();
        if($query){
          return $query->result();    
        }
        else{
            return false;
        }
    }
    
  /********************Warehouse city model Ends Here*************************/
  
    /********************Warehouse detailing model Starts Here*************************/
    
    public function fetch_all_warehouse_detailed_data($pro_id){
    
    /*$this->db->select('product.name, product.price, product.perm_name, product.description, '); 
    $this->db->from('product');
    $this->db->where('perm_name', $this->uri->segment(2));
    $this->db->join('product_type', 'product_type.tCategory = product.type', 'LEFT OUTER');
    $query = $this->db->get();*/         
        
        
    $this->db->select('warehouses.id as warehouse_id,warehouses.provider_id,warehouses.is_active,warehouses.stage,warehouses.code as warehouses_code,warehouses.code_number,warehouses.deleted_at as warehouses_deleted
    ,warehouses.city_id,providers.id as provider_id,providers.company_name,providers.is_active as providers_active ,providers.deleted_at providers_deleted,
    providers.point_of_contact_phone,providers.secondary_phone,providers.point_of_contact_email,providers.company_address,warehouse_spaces.*,warehouse_factors.id
    as warehouse_factors_id ,warehouse_factors.warehouse_id, warehouse_factors.item_id, warehouse_factors.value as warehouse_factors_values, warehouse_factors.deleted_at, items.id as items_id , items.label
    as item_label,categories.id as categories_id, categories.name as category_name,categories.label as category_label, categories.parent_id,
    images.path as image_path,images.resource_id,images.resource_type,images.deleted_at, GROUP_CONCAT(items.label SEPARATOR ",") as item_label_list,
    GROUP_CONCAT(warehouse_factors.value SEPARATOR ",") as warehouse_factors_list,GROUP_CONCAT(images.path SEPARATOR ",") as images_path_list,
    GROUP_CONCAT(categories.label SEPARATOR ",") as categories_label_list');
    $this->db->from('warehouses');
    $this->db->where("warehouses.id = '$pro_id' and warehouses.stage = 'live' and warehouses.deleted_at is null ");
    $this->db->join('providers','providers.id = warehouses.provider_id AND providers.is_active = 1','INNER');
    $this->db->join('warehouse_spaces','warehouse_spaces.warehouse_id = warehouses.id','INNER');
    $this->db->join('images',"images.resource_id = warehouses.id AND images.resource_type = 'Warehouse' AND images.deleted_at is NULL",'left');
    $this->db->join('warehouse_factors','warehouse_factors.warehouse_id = warehouses.id AND warehouse_factors.deleted_at is NULL','left');
    $this->db->join('items','items.id = warehouse_factors.item_id');
    $this->db->join('categories','categories.id = items.category_id');
    
    
        
        
    /*$this->db->select('warehouses.id as warehouse_id,warehouses.provider_id,warehouses.is_active,warehouses.stage,warehouses.code_number,warehouses.deleted_at as warehouses_deleted
    ,warehouses.city_id,providers.id as provider_id,providers.company_name,providers.is_active,providers.deleted_at,providers.point_of_contact_phone,providers.secondary_phone,
    providers.point_of_contact_email,providers.company_address');
    $this->db->from('warehouses');
    $this->db->where('warehouses.id',$pro_id);
    $this->db->join('providers','providers.id = warehouses.provider_id AND providers.is_active = 1','INNER');
    $this->db->join('warehouse_factors','warehouse_factors.warehouse_id = warehouse_id AND warehouse_factors.deleted_at is NULL','LEFT');*/
        
        
    /*$this->db->select('warehouses.id,warehouses.code,providers.company_address,providers.point_of_contact_email, providers.company_name, providers.point_of_contact_phone,
    images.path as image_path, items.name as parameter_name,warehouse_factors.*,warehouse_factors.item_id as parameter_ID, warehouse_factors.value as parameter_value, categories.name as category,
    warehouse_spaces.id,warehouse_spaces.floor_space,warehouse_spaces.pallet,warehouse_spaces.updated_at');*/
    /*$this->db->join('warehouse_spaces','warehouse_spaces.warehouse_id = warehouses.id','INNER');
    $this->db->join('images',"images.resource_id = warehouses.id AND images.resource_type = 'Warehouse' AND images.deleted_at is NULL",'LEFT');
    $this->db->join('warehouse_factors','warehouse_factors.warehouse_id = warehouses.id AND warehouse_factors.deleted_at is NULL','LEFT');
    $this->db->join('items','items.id = warehouse_factors.item_id');
    $this->db->join('categories','categories.id = items.category_id');*/
    //$this->db->where("warehouses.stage = 'live' and warehouses_deleted is null");

    $query = $this->db->get();
    if($query){
          return $query->result();
          //echo $this->db->last_query();
        }
        else{
            return false;
        }
    }
    
  /********************Warehouse detailing model Ends Here*************************/
   
   public function fetch_warehouse_detailing_by_city_id($pro_id){
    $this->db->select('warehouses.id as warehouse_id,warehouses.*,warehouse_cities.city_name');
    $this->db->from('warehouses');
    $this->db->where('warehouses.city_id',$pro_id);
    $this->db->where('warehouses.stage','live');
    $this->db->join('warehouse_cities','warehouse_cities.id = warehouses.city_id');
    /*$this->db->select('warehouse_cities.*,warehouses.id as warehousesid');
    $this->db->from('warehouse_cities');
    $this->db->where('warehouse_cities.id',$pro_id);
    $this->db->join('warehouses','warehouses.city_id = warehouse_cities.id');*/
    
   
    $query = $this->db->get(); 
    if($query){
          return $query->result(); 
         
        }
        else{
            return false;
        }
}

public function get_all_data($city_id){
    
     $query = $this->db->query("select warehouses.id, warehouses.code, warehouses.warehouse_type, providers.point_of_contact_email, providers.company_name, providers.point_of_contact_phone,
items.name as parameter_name, warehouse_factors.item_id as parameter_ID, warehouse_factors.value as parameter_value, categories.name as category
from warehouses left join providers on (providers.id = warehouses.provider_id AND providers.is_active = 1) 
left join warehouse_factors on (warehouse_factors.warehouse_id = warehouses.id AND warehouse_factors.deleted_at is NULL)
join items on (items.id = warehouse_factors.item_id)
join categories on (categories.id = items.category_id)
where warehouses.stage = 'live' and warehouses.deleted_at is null and warehouses.is_active = 1 and warehouses.city_id = $city_id");

    $data=$query->result();
    if($data){
        return $data[0]; 
    }
    else{
            return false;
    }
    
}

public function Total_Capacity($city_id){
  
   $query = $this->db->query("Select SUM(floor_space) as total_capacity from warehouse_spaces s1 where warehouse_id in (select id from warehouses where warehouses.city_id = $city_id and warehouses.stage = 'live' and warehouses.is_active = 1 and warehouses.deleted_at is null and warehouse_type = 'Leasable space')
and s1.created_at = (select MAX(Created_at) from warehouse_spaces s2 where s1.warehouse_id = s2.warehouse_id)");

    $data=$query->result();
    if($data){
        return $data[0]; 
    }
    else{
            return false;
    }
}


public function Total_Capacity2($city_id){
  
   $query = $this->db->query("Select SUM(floor_space) as total_capacity2 from warehouse_spaces s1 where warehouse_id in (select id from warehouses where warehouses.city_id = $city_id and warehouses.stage = 'live' and warehouses.is_active = 1 and warehouses.deleted_at is null and warehouse_type = 'Leasable space')
and s1.created_at = (select MAX(Created_at) from warehouse_spaces s2 where s1.warehouse_id = s2.warehouse_id)");

    $data=$query->result();
    if($data){
        return $data[0]; 
    }
    else{
            return false;
    }
}

public function available_now($city_id){
    
     
   $query = $this->db->query("Select SUM(floor_space) as available_now from warehouse_spaces s1 where warehouse_id in 
(select id from warehouses where warehouses.city_id = $city_id and warehouses.stage = 'live' and warehouses.is_active = 1 and warehouses.deleted_at is null and warehouse_type = 'Leasable space')
and s1.created_at = (select MAX(Created_at) from warehouse_spaces s2 where s1.warehouse_id = s2.warehouse_id)");

    $data=$query->result();
    if($data){
        return $data[0]; 
    }
    else{
            return false;
    }
    
}

public function median_storage_price($city_id){
    
     
   $query = $this->db->query("select value from warehouse_factors where warehouse_id in 
(select id from warehouses where warehouses.city_id = $city_id and warehouses.stage = 'live' and warehouses.is_active = 1 and warehouses.deleted_at is null and warehouse_type = 'Leasable space')
and item_id = 272;");

    $data=$query->result();
    if($data){
        return $data[0]; 
    }
    else{
            return false;
    }
    
}

public function Pallet_Median_storage_price($city_id){
    
     
   $query = $this->db->query("select value from warehouse_factors where warehouse_id in 
(select id from warehouses where warehouses.city_id = $city_id and warehouses.stage = 'live' and warehouses.is_active = 1 and warehouses.deleted_at is null and warehouse_type = 'Warehouse services')
and item_id = 332");

    $data=$query->result();
    if($data){
        return $data[0]; 
    }
    else{
            return false;
    }
    
}

public function Floorspace_Median_storage_price($city_id){
    
     
   $query = $this->db->query("select value from warehouse_factors where warehouse_id in 
(select id from warehouses where warehouses.city_id = $city_id and warehouses.stage = 'live' and warehouses.is_active = 1 and warehouses.deleted_at is null and warehouse_type = 'Warehouse services')
and item_id = 282");

    $data=$query->result();
    if($data){
        return $data[0]; 
    }
    else{
            return false;
    }
    
}


public function warehouse_detail($id){
    
       
   $query = $this->db->query("select warehouses.*,warehouses.id, warehouses.code, warehouses.warehouse_type, providers.point_of_contact_email, providers.company_name, providers.point_of_contact_phone,
items.name as parameter_name,items.code as prameter_code,categories.id as code ,warehouse_factors.item_id as parameter_ID, warehouse_factors.value as parameter_value, categories.name as category
from warehouses left join providers on (providers.id = warehouses.provider_id AND providers.is_active = 1) 
join warehouse_factors on (warehouse_factors.warehouse_id = warehouses.id AND warehouse_factors.deleted_at is NULL)
join items on (items.id = warehouse_factors.item_id)
join categories on (categories.id = items.category_id)
where warehouses.id = $id");

    $data=$query->result();
    if($data){
        return $data; 
    }
    else{
            return false;
    }
}


public function get_image($id){
    
       
   $query = $this->db->query("select * from images where resource_id = $id and images.resource_type = 'Warehouse' AND images.deleted_at is NULL;");

    $data=$query->result();
    if($data){
        return $data; 
    }
    else{
            return false;
    }
}


public function available_space($id){
    
         
   $query = $this->db->query("Select floor_space, pallet, updated_at  from warehouse_spaces s1 where s1.created_at = (select MAX(Created_at) from warehouse_spaces s2 where s1.warehouse_id = s2.warehouse_id) and warehouse_id = $id");

    $data=$query->result();
    if($data){
        return $data[0]; 
    }
    else{
            return false;
    }
    
}

public function queryzxz(){
    
         
   $query = $this->db->query("select items.id, items.name, items.code, items.category_id, categories.name as category_name from items join categories on (items.category_id = categories.id) where items.deleted_at is null");

    $data=$query->result();
    if($data){
        return $data; 
    }
    else{
            return false;
    }
    
}
    





















}