<link href="https://cdn.syncfusion.com/ej2/material.css" rel="stylesheet">

<?php
if(!empty($wareshouse_discription)){ 

  function searchForId($id, $array) {
    
   
    $i=0;
    foreach ($array as $data) {
     foreach ($data as $key => $val) {
       if ($val === $id) {
        return $array[$i]->parameter_value;
      }else{
       
      }
    }
    $i++;}
    return null;
  }

  ?>

<div class="warehouse-network px-3 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="network-Chennai">
                    <h4>Warehouse network in <?= $wareshouse_discription[0]->city_name?></h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="network-Chennai">
                    <div class="pallets1-btn">
                        <a href="#">Need space in <?= $wareshouse_discription[0]->city_name?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="warehouse-network2 px-3">
        <div class="container-fluid">
            <h5>Leasable space</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="space1">
                        <p>Total capacity</p>
                        <h4><?php echo number_format($total_capcity->total_capacity); ?></h4>
                        <p class="para-space">
                            sq ft
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="space1">
                        <p>Median storage price</p>
                        <h4>INR <?php echo number_format($median_storage_price->value); ?></h4>
                        <p class="para-space">
                            sq ft
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="space1">
                        <p>Available now</p>
                        <h4><?php echo number_format($available_now->available_now); ?></h4>

                        <p class="para-space">
                            per sq ft per month
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="space1">
                        <p>Verified capacity</p>
                        <h4>NA</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="warehouse-network2 px-3">
        <div class="container-fluid">
            <h5>Warehouse services</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="space1">
                        <p>Total capacity</p>
                        <h4><?php echo number_format($total_capcity->total_capacity2); ?></h4>
                        <p class="para-space">
                            sq ft
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="space1">
                        <p>Pallet median storage price</p>
                        <h4>INR <?php echo number_format($Pallet_Median_storage_price->value); ?></h4>
                        <p class="para-space">
                            per sq ft per week
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="space1">
                        <p>Floor median storage price</p>
                        <h4><?php echo number_format($Floorspace_Median_storage_price->value); ?></h4>

                        <p class="para-space">
                            per sq ft per week
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="space1">
                        <p>Available now</p>
                        <h4>NA</h4>
                        <p class="para-space">
                            sq ft
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="filter px-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form action="" method="POST" id="filter">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="filter-main">
                            <li class="filter-inner"><span>Category</span>
                                <ul class="filter-children">
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="">All</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="">Warehouse Service</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="">Leasable Space</label></li>
                                   
                                </ul>
                            </li>
                             <li class="filter-inner"><span>Temperature</span>
                                <ul class="filter-children">
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="">All</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_216">Ambient</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_218">Frozen</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_219">Heated</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_220">Not controlled</label></li>
                                </ul>
                            </li>
                             <li class="filter-inner"><span>Facilities </span>
                             
                                <ul class="filter-children">
                                    <div class="left">
                                    <span class="me-h1">Fullfilment</span>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_135">3rd Party Couriers</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_130">Consolidation Programs</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_133">Cross Docking</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_139">Domestic Fulfilment</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_137">Import/Export Documentation</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_138">International Fulfilment</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_132">Merge In Transit</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_132">Merge In Transit</label></li>
                                    </div>
                                    <div class="right">
                                    <span class="me-h1">Fullfilment</span>
                                     <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_135">3rd Party Couriers</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_130">Consolidation Programs</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_133">Cross Docking</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_139">Domestic Fulfilment</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_137">Import/Export Documentation</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_138">International Fulfilment</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_132">Merge In Transit</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_132">Merge In Transit</label></li>
                                    </div>
                                </ul>
                            </li>
                             <li class="filter-inner"><span>Services</span>
                                <ul class="filter-children">
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_160">Flexible Operations Schedule</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_161">Waste Disposal</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_162">Shrink Wrapping</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_163">Contract Manufacturing</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_164">Product Kitting and Repackaging</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_165">Special Projects</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_165">Special Projects</label></li>
                                </ul>
                            </li>
                             <li class="filter-inner"><span>Industry Need</span>
                                <ul class="filter-children">
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_012">Agriculture and prepared products</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_013">Apparel; footwear and textiles</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_014">Automotive and aerospace</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_015">Base metals</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_016">Consumer products and mass merchandisin</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_017">Telecommunications</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_018">Arms and Defense</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_019">Chemicals</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_020">Food</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_021">Pharmaceuticals</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_022">Machinery</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_023">Industrial and manufacturing materials</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_024">Electronics</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" value="T_025">Construction</label></li>
                                </ul>
                            </li>
                            
                             <li class="filter-inner"><span class="more-filters">More Filters</span>
                                <ul class="filter-children">
                                    <div class="left">
                                    <span class="me-h1">Fullfilment</span>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_159" >24/7 Security</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_158" >24/7 Access</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_148" >Alarmed</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_069" >Laboratory for sampling</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_147" >Patrolled</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_067" >Number of Dock High Doors</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_067" >Foreign trade zone</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_067" >Foreign trade zone</label></li>
                                    </div>
                                    <div class="right">
                                    <span class="me-h1">Fullfilment</span>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_071" >Organic</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_065" >Bonded</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_145" >CCTV</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_072" >Alcohol Certified</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_144" >Sprinkler System</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_144" >Sprinkler System</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_064" >Proper drainage system</label></li>
                                    </div>
                                     <div class="left">
                                    <span class="me-h1">Fullfilment</span>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_135" >3rd Party Couriers</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_130" > Consolidation Programs</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_133" >Cross Docking</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_139" >Domestic Fulfilment</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_137" >Import/Export Documentation</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_138" >International Fulfilment</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_132" > Merge In Transit</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_142" > Nationwide and International Distribution</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_142" > Nationwide and International Distribution</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_140" > Own Fleet</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_136" > Picking & Pack</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_141" > Receiving and Shipping</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_141" > Receiving and Shipping</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_134" >Trans Loading
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_143" >Returns Logistics
                                    </label></li>
                                    </div>
                                    <div class="right">
                                    <span class="me-h1">Fullfilment</span>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_170" >Carton Pick</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_171" >Palletization</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_172" >Pallet Rebuild</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_173" >Transportation Services</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_164" >Product Kitting and Repackaging</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_166" >Quality Control Programs</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_165" >Special Projects</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_165" >Special Projects</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_161" >Waste Disposal</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_161" >Waste Disposal</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_169" >Container Devanning and Subsorting</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_163" >Contract Manufacturing</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_160" >Flexible Operations Schedule</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_162" >Shrink Wrapping</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_168" >Inspections and Quality check</label></li>
                                    <li><label><input type="checkbox" class="filter2" name="filter[]" valaue="T_174" >Knitting</label></li>
                                    </div>
                                    <div class="sub-cancel">
                                        <button>Apply Filters</button>
                                        <button>Cancel</button>
                                    </div>
                                </ul>
                                
                            </li>
                             <li class="filter-inner"><button class="clear-btn">Clear All Filters</button></li>
                            
                            
                        
                        </ul>
                        
                    </div>
                    </form>
                </nav>
            </div>
        </div>
    </div>

</div>
    <?php foreach($wareshouse_discription as $warehouse){
        //echo "<pre>";print_r($warehouse ); 
    }}?>

    <?php  if(!empty($wareshouse_discription)){
     foreach($wareshouse_discription as $warehouse){
         $j=$j+1;
         
        
    $space=$this->Usermodel->available_space($warehouse->warehouse_id);

    $img=$this->Usermodel->get_image($warehouse->warehouse_id);
    $detail=$this->Usermodel->warehouse_detail($warehouse->warehouse_id);
  
 
     ?>

        <div class="filter-data px-3">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card p-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <figure class="m-0 w-100 p-2">
                                        <?php if($img){
                                        foreach ($img as $pic) { ?>
                                        <img src="<?= $pic->path ;?>" class="w-100 h-auot">
                                        <?php } }else{ ?>
                                        <img src="<?= base_url()?>assets/user/images/w1.png" class="w-100 h-auot">
                                        <?php } ?>

                                    </figure>

                                </div>
                                <div class="col-md-9">
                                    <div class="card-header p-0 border-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h1>Warehouse ID: <?php echo $warehouse->warehouse_id; ?></h1>
                                                <h3><?php echo $warehouse->warehouse_type; ?></h3>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="space-available">
                                                    <h1><sapn class="avi"></sapn>Space available Now <i class="fas fa-info-circle"></i></h1>
                                                    <h3>Floor Space <?php echo number_format($space->floor_space); ?> sqft ,Pallet Space <?php echo number_format($space->pallet); ?> sqft</h3>
                                                    <p>Update on <?php echo date('M d, Y',strtotime($warehouse->updated_at)); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-boyd">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home<?php echo $j; ?>" role="tab" aria-controls="home" aria-selected="true">Floorspace</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile<?php echo $j; ?>" role="tab" aria-controls="profile" aria-selected="false">Pallets</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home<?php echo $j; ?>" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="detailbx d-flex flex-fill">
                                                    <div class="ar1">
                                                        <h1>INR <?php echo $value = number_format(searchForId('T_032', $detail)); ?></h1>
                                                        <p>Per pallet</p>
                                                        <p>Per Week</p>
                                                    </div>
                                                    <div class="ar1">
                                                        <h1>INR <?php echo $value = number_format(searchForId('T_043', $detail)); ?></h1>
                                                        <p>hading per</p>
                                                        <p>movement</p>
                                                    </div>
                                                    <div class="ar1">
                                                        <h1><?php echo $value = number_format(searchForId('T_033', $detail)); ?> pallets</h1>
                                                        <p>minimum storage <i class="fas fa-info-circle" aria-hidden="true"></i></p>

                                                    </div>
                                                    <div class="ar1">
                                                        <h1><?php echo $value = number_format(searchForId('T_034', $detail)); ?> week</h1>
                                                        <p>Minimum duration <i class="fas fa-info-circle" aria-hidden="true"></i></p>

                                                    </div>
                                                </div>
                                                <?php $a = 32; ?>
                                                <div class="button" style="text-align:right">
                                                    <?php $a = 32 ?>
                                                    <a href="<?=base_url('user/web_facility/'.$warehouse->warehouse_id.'')?>"><button type="button" class="btn btn-success">View More</button></a>
                                                </div>
                                                
                                            </div>
                                            <div class="tab-pane fade" id="profile<?php echo $j; ?>" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="detailbx d-flex flex-fill">
                                                    <div class="ar1">
                                                        <h1>INR <?php echo $value = number_format(searchForId('T_041', $detail)); ?></h1>
                                                        <p>Per pallet</p>
                                                        <p>Per Week</p>
                                                    </div>
                                                    <div class="ar1">
                                                        <h1>INR <?php echo $value = number_format(searchForId('T_033', $detail)); ?></h1>
                                                        <p>hading per</p>
                                                        <p>movement</p>
                                                    </div>
                                                    <div class="ar1">
                                                        <h1><?php echo $value = number_format(searchForId('T_039', $detail)); ?> pallets</h1>
                                                        <p>minimum storage <i class="fas fa-info-circle" aria-hidden="true"></i></p>

                                                    </div>
                                                    <div class="ar1">
                                                        <h1><?php echo $value = number_format(searchForId('T_040', $detail)); ?> week</h1>
                                                        <p>Minimum duration <i class="fas fa-info-circle" aria-hidden="true"></i></p>

                                                    </div>
                                                </div>
                                                
                                                <div class="button" style="text-align:right">
                                                    <a href="<?=base_url('user/web_facility/'.$warehouse->warehouse_id.'')?>"><button type="button" class="btn btn-success">View More</button></a>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    <?php } }
    else{
        echo '<h1 style="text-align: center;margin: 100px 0px;color: red;font-family: monospace;">NO Data Available</h1>';
    }
    ?>


    <script type="text/javascript">
        $('.filter').click(function(){

            console.log('anurag');
             $.ajax({
              type:'post',
              url:'<?php echo base_url('search') ?>',
              data:$('#filter').serialize(),
              success:function(data){
            

              }
            });        

        })
    </script>