<?php
if(!empty($warehouse_detailed_data)){
    foreach($warehouse_detailed_data as $warehouse_data){/*$List = implode(', ',$warehouse_data->item_label_list);//print_r($List);die;*/
}}?>

<?php


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

<div class="web-facility-wrap-1 px-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="slide-wrap">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                        
                             <?php if($img){
                                 $i=1;
                                        foreach ($img as $pic) { ?>
                                         <div class="carousel-item <?php if($i==1){ echo "active"; } ?>">
                                        <img src="<?= $pic->path ;?>" class="w-100 h-auot">
                                          </div>
                                        <?php $i++; } }else{ ?>
                                          <div class="carousel-item active">
                                        <img src="<?= base_url()?>assets/user/images/w1.png" class="w-100 h-auot">
                                        </div>
                                        <?php } ?>
                      
                            <!--<div class="carousel-item active">
                                <img src="" alt="web" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=base_url()?>assets/user/images/webslider2.png" alt="web" width="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=base_url()?>assets/user/images/webslider3.png" alt="web" width="100%">
                            </div>-->
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="slide-wrap">
                    <div class="content-right">
                        <span>Warehouse ID: </span>
                        <span class="web-content-num"><?= $warehouse_data->warehouses_code ?></span>
                    </div>
                    <p><?php echo $value = searchForId('T_184', $detail); ?></p>

                    <h5>USP:</h5>
                    <ul>
                        <?php if(searchForId('T_193', $detail)){ ?>
                            <li><span>--</span><?php echo $value = searchForId('T_193', $detail); ?></li>
                        <?php } ?>
                        
                        <?php if(searchForId('T_194', $detail)){ ?>
                            <li><span>--</span><?php echo $value = searchForId('T_194', $detail); ?></li>
                        <?php } ?>
                        
                        <?php if(searchForId('T_195', $detail)){ ?>
                            <li><span>--</span><?php echo $value = searchForId('T_195', $detail); ?></li>
                        <?php } ?>
                        

                    </ul>
                    <div class="pallets">
                        <p><?= $warehouse_data->floor_space ?> sq ft , <?= $warehouse_data->pallet ?> Pallets</p>
                        <p>Space available now</p>
                        <p>Updated on: <?= $warehouse_data->updated_at ?></p>
                    </div>

                    <div class="pallets1">
                        <img src="<?=base_url()?>assets/user/images/manager.png" alt="manager">
                        <h4><?= $warehouse_data->company_name ?></h4>
                        <p><?= $warehouse_data->point_of_contact_phone ?></p>
                        <p><?= $warehouse_data->company_address ?></p>
                    </div>
                    <div class="pallets1-btn">
                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Contact Warehouse Manager</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="REACHIN-wrap-2 px-3">
    <div class="container-fluid">
        <h4>REACHING HERE WILL TAKE</h4>

        <div class="para-right">
            <?php if(searchForId('S_001', $detail)){ ?>
                <p><span><?php echo $value = searchForId('S_001', $detail); ?></span> </p>
            <?php } ?>
            
            <?php if(searchForId('S_002', $detail)){ ?>
                <p><span><?php echo $value = searchForId('S_002', $detail); ?></span> </p>
            <?php } ?>
            
            <?php if(searchForId('S_003', $detail)){ ?>
                <p><span><?php echo $value = searchForId('S_003', $detail); ?></span> </p>
            <?php } ?>
            
            <?php if(searchForId('S_004', $detail)){ ?>
                <p><span><?php echo $value = searchForId('S_004', $detail); ?></span> </p>
            <?php } ?>
            
            <?php if(searchForId('S_005', $detail)){ ?>
                <p><span><?php echo $value = searchForId('S_005', $detail); ?></span> </p>
            <?php } ?>
            
            
            <?php if(searchForId('S_006', $detail)){ ?>
                <p><span><?php echo $value = searchForId('S_006', $detail); ?></span> </p>
            <?php } ?>

            <?php if(searchForId('S_007', $detail)){ ?>
                <p><span><?php echo $value = searchForId('S_007', $detail); ?></span> </p>
            <?php } ?>

            <?php if(searchForId('S_008', $detail)){ ?>
                <p><span><?php echo $value = searchForId('S_008', $detail); ?></span> </p>
            <?php } ?>
            
        </div>

    </div>
</div>


<div class="REACHIN-wrap-3 px-3">
    <div class="container-fluid">
        <p class="pricing">WAREHOUSE INFO</p>
        <div class="ware-information">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="location">
                                <div class="location-para-box">
                                    <span>Warehouse ID</span>
                                    <p><?= $warehouse_data->warehouses_code ?></p>
                                </div>
                                <div class="location-para-box">
                                    <span>Warehouse Location</span>
                                    <p><?php echo $value = searchForId('S_011', $detail); ?></p>
                                </div>

                                <div class="location-para-box">
                                    <span>Founded</span>
                                    <p>2015</p>
                                </div>
                                <div class="location-para-box">
                                    <span>Warehouse type</span>
                                    <p><?php echo $value = searchForId('S_004', $detail); ?></p>
                                </div>
                                <div class="location-para-box">
                                    <span>Total staff</span>
                                    <p><?php echo $value = number_format(searchForId('S_058', $detail)); ?></p>
                                </div>
                                <div class="location-para-box">
                                    <span>Total storable space</span>
                                    <p><?php echo $value = number_format(searchForId('S_186', $detail)); ?> sq ft</p>
                                </div>
                                <div class="location-para-box">
                                    <span>Total pallet space</span>
                                    <p>Not available</p>
                                </div>
                                <div class="location-para-box">
                                    <span>Warehouse company</span>
                                    <p><?php echo $detail[0]->company_name ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location">
                                <p>Industries served</p>
                                <div class="ankertag">
                                    <label>Agriculture and prepared products</label>

                                    <label>Base Metals</label> <label><?php echo $value =searchForId('T_015', $detail); ?></label>

                                    <label>Industrial and manufacturing materials</label>
                                </div>

                                <p>Business hours</p>

                                <div class="weekday">
                                    <p><span>Monday</span>
                                        <span class="day"><?php echo $value =searchForId('T_202', $detail); ?> - <?php echo $value =searchForId('T_203', $detail); ?></span>
                                    </p>
                                    <p><span>Tuesday</span>
                                     <span class="day"><?php echo $value =searchForId('T_204', $detail); ?> - <?php echo $value =searchForId('T_205', $detail); ?></span>

                                     <p><span>Wednesday</span>
                                         <span class="day"><?php echo $value =searchForId('T_206', $detail); ?> - <?php echo $value =searchForId('T_207', $detail); ?></span>

                                         <p><span>Thursday</span>
                                             <span class="day"><?php echo $value =searchForId('T_208', $detail); ?> - <?php echo $value =searchForId('T_209', $detail); ?></span>

                                             <p><span>Friday</span>
                                                 <span class="day"><?php echo $value =searchForId('T_210', $detail); ?> - <?php echo $value =searchForId('T_211', $detail); ?></span>

                                                 <p><span>Saturday</span>
                                                     <span class="day"><?php echo $value =searchForId('T_212', $detail); ?> - <?php echo $value =searchForId('T_213', $detail); ?></span>

                                                     <p><span>Sunday</span>
                                                         <span class="day"><?php echo $value =searchForId('T_214', $detail); ?> - <?php echo $value =searchForId('T_215', $detail); ?></span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-5">
                                        <div class="location">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224368.39371725463!2d<?php echo searchForId('T_191', $detail) ?>!3d<?php echo searchForId('T_192', $detail) ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1567800532165!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
 </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="REACHIN-wrap-4 px-3">
                        <div class="container-fluid" style="border-bottom: 2px solid #BCBCBC;padding:30px 0">
                            <p class="pricing">PRICING</p>
                            <div class="warehouse7">
                                <img src="<?=base_url()?>assets/user/images/warehouse.png" alt="ware" width="30px"> &nbsp;<p>Floorspace</p>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="store1">
                                        <p class="inrfont">INR <?php echo $value = number_format(searchForId('T_032', $detail)); ?></p>
                                        <p>per sq ft</p>
                                        <p>per week</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="store1">
                                        <p class="inrfont">INR <?php echo $value = number_format(searchForId('T_047', $detail)); ?></p>
                                        <p> handling per</p>
                                        <p>movemen</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="store1">
                                        <p class="inrfont"><?php echo $value = number_format(searchForId('T_026', $detail)); ?> sq ft</p>
                                        <p>minimum storage  <img src="<?=base_url()?>assets/user/images/question-mark.png" alt="question" width="15px"></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="store1">
                                        <p class="inrfont"><?php echo $value = number_format(searchForId('T_027', $detail)); ?> week</p>
                                        <p>minimum duration <img src="<?=base_url()?>assets/user/images/question-mark.png" alt="question" width="15px"></p>
                                        <div class="alert1">
                                            This is sample text
                                            <span><i class="fa fa-caret-down"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="warehouse7">
                                <img src="<?=base_url()?>assets/user/images/pallet.png" alt="ware" width="30px"> &nbsp;<p>Pallet</p>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="store1">
                                        <p class="inrfont">INR <?php echo $value = number_format(searchForId('T_041', $detail)); ?></p>
                                        <p>per sq ft</p>
                                        <p>per week</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="store1">
                                        <p class="inrfont">INR <?php echo $value = number_format(searchForId('T_043', $detail)); ?></p>
                                        <p> handling per</p>
                                        <p>movemen</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="store1">
                                        <p class="inrfont"><?php echo $value = number_format(searchForId('T_039', $detail)); ?> sq ft</p>
                                        <p>minimum storage  <img src="<?=base_url()?>assets/user/images/question-mark.png" alt="question" width="15px"></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="store1">
                                        <p class="inrfont"><?php echo $value = number_format(searchForId('T_040', $detail)); ?> week</p>
                                        <p>minimum duration <img src="<?=base_url()?>assets/user/images/question-mark.png" alt="question" width="15px"></p>

                                    </div>
                                </div>
                            </div>

                            <div class="warehouse7">
                                <img src="<?=base_url()?>assets/user/images/bill.png" alt="ware" width="30px"> &nbsp;<p>Other charges</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                   <div class="headingprice">

                                    <p><span>Handling price per pallet </span>  <span class="rupey">INR <?php echo $value = number_format(searchForId('T_043', $detail)); ?></span></p> 
                                    <p><span>Handling price per carton </span>  <span class="rupey">INR <?php echo $value = number_format(searchForId('T_048', $detail)); ?></span></p> 
                                    <p><span>Handling Price per Item </span>  <span class="rupey">INR <?php echo $value = number_format(searchForId('T_047', $detail)); ?></span></p> 
                                    <p><span>20 Foot Container Unload Fee  </span>  <span class="rupey">INR <?php echo $value = number_format(searchForId('T_046', $detail)); ?></span></p>
                                    <p><span>40 Foot Container Unload Fee </span>  <span class="rupey">INR <?php echo $value = number_format(searchForId('T_047', $detail)); ?></span></p>
                                    <p><span>New Pallet Cost</span>  <span class="rupey">INR <?php echo $value = number_format(searchForId('T_044', $detail)); ?></span></p> 
                                    <p><span>Stretch Wrapping Pallet Fee </span>  <span class="rupey">INR <?php echo $value = number_format(searchForId('T_042', $detail)); ?></span></p>



                                </div>
                                
                                <p class="subject">* Pricing noted here are indicative and are  subject to change</p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="REACHIN-wrap-5 px-3">
                    <div class="container-fluid" style="border-bottom: 2px solid #BCBCBC;padding:30px 0">
                        <div class="HEATED">
                            <ul>
                                <li class="act1">TEMPERATURE</li>
                                <!-- <li>HEATED, AMBIENT</li> -->
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <p class="facilities">FACILITIES</p>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="check">
                                            <p class="paras"><span> <img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> 24/7 Security</span> </p>
                                            <?php if(searchForId('T_158', $detail)){ ?>
                                                <p><span> <img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">24/7 Access</span></p>
                                            <?php }else{  ?>

                                                <p><span> <img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">24/7 Access</span></p>
                                            <?php } ?>
                                            <?php if(searchForId('T_148', $detail)){ ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Alarmed</span></p>
                                            <?php } else { ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Alarmed</span></p>

                                            <?php } ?>



                                            <?php if(searchForId('T_069', $detail)){ ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Laboratory for sampling</span></p>
                                            <?php } else { ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Laboratory for sampling</span></p>

                                            <?php } ?>

                                            <?php if(searchForId('T_147', $detail)){ ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Patrolled</span></p>
                                            <?php } else { ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Patrolled</span></p>

                                            <?php } ?>

                                            <?php if(searchForId('T_067', $detail)){ ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Dock High Doors</span></p>
                                            <?php } else { ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Dock High Doors</span></p>

                                            <?php } ?>

                                            <?php if(searchForId('T_066', $detail)){ ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Foreign trade zone</span></p>
                                            <?php } else { ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Foreign trade zone</span></p>

                                            <?php } ?>




                                            <?php if(searchForId('T_146', $detail)){ ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> ESFR available</span></p>
                                            <?php } else { ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> ESFR available</span></p>

                                            <?php } ?>





                                            <?php if(searchForId('T_157', $detail)){ ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Smoke detectors</span></p>
                                            <?php } else { ?>
                                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Smoke detectors</span></p>

                                            <?php } ?>



                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="check">
                                         <?php if(searchForId('T_148', $detail)){ ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Alarmed</span></p>
                                        <?php } else { ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Alarmed</span></p>

                                        <?php } ?>

                                        <?php if(searchForId('T_071', $detail)){ ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Organic</span></p>
                                        <?php } else { ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Organic</span></p>

                                        <?php } ?>
                                        
                                        <?php if(searchForId('T_065', $detail)){ ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Bonded</span></p>
                                        <?php } else { ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Bonded</span></p>

                                        <?php } ?>


                                        <?php if(searchForId('T_145', $detail)){ ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> CCTV</span></p>
                                        <?php } else { ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> CCTV</span></p>

                                        <?php } ?>


                                        <?php if(searchForId('T_072', $detail)){ ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Alcohol Certified</span></p>
                                        <?php } else { ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Alcohol Certified</span></p>

                                        <?php } ?>


                                        <?php if(searchForId('T_144', $detail)){ ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Sprinkler System</span></p>
                                        <?php } else { ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Sprinkler System</span></p>

                                        <?php } ?>


                                        <?php if(searchForId('T_064', $detail)){ ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Proper drainage system</span></p>
                                        <?php } else { ?>
                                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Proper drainage system</span></p>

                                        <?php } ?>








                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <p class="facilities">SERVICES</p>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="check">
                                       <h5>FULLFILMENT</h5>



                                       <?php if(searchForId('T_135', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> 3rd Party Couriers</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> 3rd Party Couriers</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_130', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Consolidation Programs</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Consolidation Programs</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_133', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Docking</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Docking</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_139', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Domestic Fulfilment</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Domestic Fulfilment</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_137', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Import/Export Documentation</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Import/Export Documentation</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_138', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> International Fulfilment</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> International Fulfilment</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_132', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Merge In Transit</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Merge In Transit</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_142', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Nationwide and International Distribution</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Nationwide and International Distribution</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_140', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">  Own Fleet</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">  Own Fleet</span></p>

                                    <?php } ?>



                                    <?php if(searchForId('T_136', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Picking & Pack</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Picking & Pack</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_141', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Receiving and Shipping</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Receiving and Shipping</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_141', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Trans Loading</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Trans Loading</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_134', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Trans Loading</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Trans Loading</span></p>

                                    <?php } ?>


                                    <?php if(searchForId('T_143', $detail)){ ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Returns Logistics</span></p>
                                    <?php } else { ?>
                                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Returns Logistics</span></p>

                                    <?php } ?>




                                </div>


                                <div class="check">
                                   <h5>ACCREDIATIONS AND NOC</h5>



                                   <?php if(searchForId('T_095', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> WRDA registered?</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> WRDA registered?</span></p>

                                <?php } ?>


                                <?php if(searchForId('T_094', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">BIS/CWC/FCI Accrediation</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">BIS/CWC/FCI Accrediation</span></p>

                                <?php } ?>

                                <?php if(searchForId('T_093', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">FSSAI License</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">FSSAI License</span></p>

                                <?php } ?>


                                <?php if(searchForId('T_089', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">AEO</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">AEO</span></p>

                                <?php } ?>



                                <?php if(searchForId('T_088', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">C-PAT</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">C-PAT</span></p>

                                <?php } ?>


                                <?php if(searchForId('T_087', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">ISO 9001</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">ISO 9001</span></p>

                                <?php } ?>


                                <?php if(searchForId('T_086', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">ISO 14001</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">ISO 14001</span></p>

                                <?php } ?>


                                <?php if(searchForId('T_092', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">NOC from Fire and Emergency Services</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">NOC from Fire and Emergency Services</span></p>

                                <?php } ?>

                                <?php if(searchForId('T_091', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">NOC from the State Pollution Control Board</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">NOC from the State Pollution Control Board</span></p>

                                <?php } ?>

                                <?php if(searchForId('T_090', $detail)){ ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">NOC from the local authority for a warehouse facility</span></p>
                                <?php } else { ?>
                                    <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">NOC from the local authority for a warehouse facility</span></p>

                                <?php } ?>



                            </div>

                            <div class="check">
                               <h5>SPECIAML EQUIPEMENT/MACHINERY</h5>



                               <?php if(searchForId('T_073', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Dock Levellers</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Dock Levellers</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_085', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Forklift</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Forklift</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_084', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Counter Balance</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Counter Balance</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_083', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Crane</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Crane</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_078', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Pallet scale</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Pallet scale</span></p>

                            <?php } ?>



                            <?php if(searchForId('T_082', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Reach truck</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Reach truck</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_081', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Pallet jacks</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Pallet jacks</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_081', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Truck Restraints</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Truck Restraints</span></p>

                            <?php } ?>  

                            <?php if(searchForId('T_080', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Truck Restraints</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Truck Restraints</span></p>

                            <?php } ?>  

                            <?php if(searchForId('T_079', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Floor scale</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Floor scale</span></p>

                            <?php } ?>  

                            <?php if(searchForId('T_076', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Pacakaging equipments</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Pacakaging equipments</span></p>

                            <?php } ?>  

                            <?php if(searchForId('T_077', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Hand trucks</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Hand trucks</span></p>

                            <?php } ?> 

                            <?php if(searchForId('T_075', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Bar code printer</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Bar code printer</span></p>

                            <?php } ?>  


                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="check">
                            <h5>OTHER SERVICES</h5>

                            <?php if(searchForId('T_170', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Carton Pick</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Carton Pick</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_171', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Palletization</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Palletization</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_172', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Pallet Rebuild</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Pallet Rebuild</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_173', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Transportation Services</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Transportation Services</span></p>

                            <?php } ?>



                            <?php if(searchForId('T_164', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Product Kitting and Repackaging</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Product Kitting and Repackaging</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_166', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Quality Control Programs</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Quality Control Programs</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_166', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Special Projects</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Special Projects</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_161', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Waste Disposal</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Waste Disposal</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_161', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Waste Disposal</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Waste Disposal</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_169', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Container Devanning and Subsorting</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Container Devanning and Subsorting</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_163', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Contract Manufacturing</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Contract Manufacturing</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_160', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Flexible Operations Schedule</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Flexible Operations Schedule</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_162', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Shrink Wrapping</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Shrink Wrapping</span></p>

                            <?php } ?>


                            <?php if(searchForId('T_168', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Inspections and Quality check</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Inspections and Quality check</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_174', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Knitting</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Knitting</span></p>

                            <?php } ?>

                            <?php if(searchForId('T_167', $detail)){ ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Re-packaging; Customized Labelling; Light Assembly & Documentation</span></p>
                            <?php } else { ?>
                                <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Re-packaging; Customized Labelling; Light Assembly & Documentation</span></p>

                            <?php } ?>
                        </div>

                        <div class="check">
                           <h5>STORAGE CAPABILITIES</h5>



                           <?php if(searchForId('T_125', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Bulk Powder</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Bulk Powder</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_124', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Bulk Liquid</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Bulk Liquid</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_123', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Hazardous Chemicals</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Hazardous Chemicals</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_122', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Hazardous Other</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Hazardous Other</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_120', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> LME</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> LME</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_120', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> LME</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> LME</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_118', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Dry Bonded</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Dry Bonded</span></p>

                        <?php } ?>


                        <?php if(searchForId('T_119', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Wet Bonded</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Wet Bonded</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_117', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Container</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Container</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_117', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Container</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Container</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_116', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Outdoor</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Outdoor</span></p>

                        <?php } ?>

                        <?php if(searchForId('T_115', $detail)){ ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> RF Technology</span></p>
                        <?php } else { ?>
                            <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> RF Technology</span></p>

                        <?php } ?>



                    </div>

                    <div class="check">
                       <h5>HAZARDOUS GOODS HANDLING</h5>



                       <?php if(searchForId('T_049', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked">  Class 1 – Explosives</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked">  Class 1 – Explosives</span></p>

                    <?php } ?>


                    <?php if(searchForId('T_057', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Class 2 – Gases</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Class 2 – Gases</span></p>

                    <?php } ?>

                    <?php if(searchForId('T_057', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Class 2 – Gases</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Class 2 – Gases</span></p>

                    <?php } ?>

                    <?php if(searchForId('T_055', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Class 3 – Flammable liquids (and combustible liquids)</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Class 3 – Flammable liquids (and combustible liquids)</span></p>

                    <?php } ?>


                    <?php if(searchForId('T_056', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Class 4 – Flammable solids</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Class 4 – Flammable solids</span></p>

                    <?php } ?>

                    <?php if(searchForId('T_054', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Class 5 — Oxidizers and organic peroxides</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Class 5 — Oxidizers and organic peroxides</span></p>

                    <?php } ?>


                    <?php if(searchForId('T_053', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Class 6 — Toxic materials and infectious substances</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Class 6 — Toxic materials and infectious substances</span></p>

                    <?php } ?>

                    <?php if(searchForId('T_050', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Class 7 – Radioactive materials</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Class 7 – Radioactive materials</span></p>

                    <?php } ?>

                    <?php if(searchForId('T_051', $detail)){ ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/checked.png" alt="checked"> Class 8 – Corrosive materials</span></p>
                    <?php } else { ?>
                        <p class="paras"><span class="checkimg"><img src="<?=base_url()?>assets/user/images/cancel-music.png" alt="checked"> Class 8 – Corrosive materials</span></p>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>


<div class="REACHIN-wrap-6 px-3">
    <div class="container-fluid" style="border-bottom: 2px solid #BCBCBC;padding:30px 0">
        <div class="WAREHOUSE">
          <p class="facilities"><img src="<?=base_url()?>assets/user/images/firewall.png" alt="firewall" width="19px"> &nbsp;WAREHOUSE INFRASTRUCTURE</p>

      </div>
      <div class="row">
        <div class="col-md-6">
            <div class="INFRASTRUCTURE">
               <div class="box1">
                <P>Warehouse roof</P>
                <span><?php echo $value = searchForId('T_100', $detail); ?></span>
            </div>
            <div class="box1">
                <p>Ventilation</p>
                <span><?php echo $value = searchForId('T_101', $detail); ?></span>
            </div>
            <div class="box1">
                <p>Warehouse has pucca boundry walls.</p>
                <span><?php echo $value = searchForId('T_153', $detail); ?></span>
            </div>

            <div class="box1">
             <p>Power load (in KWA)</p>
             <span><?php echo $value = searchForId('T_060', $detail); ?></span>
         </div>

         <div class="box1">
            <p>Generator backup</p>
            <span><?php echo $value = searchForId('T_061', $detail); ?></span>
        </div>

        <div class="box1">
            <p>Floor Type</p>
            <span><?php echo $value = searchForId('T_128', $detail); ?></span>
        </div>

        <div class="box1">
            <p>Car parking</p>
            <span><?php echo $value = searchForId('T_107', $detail); ?></span>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="INFRASTRUCTURE">
       <div class="box1">
        <p>Number of ramp gates</p>
        <span><?php echo $value = searchForId('T_114', $detail); ?></span>
    </div>
    <div class="box1">
        <p>Lorry parking space</p>
        <span><?php echo $value = number_format(searchForId('T_108', $detail)); ?> lorry</span>
    </div>
    <div class="box1">
        <p>Max height at the center of warehouse</p>
        <span><?php echo $value = number_format(searchForId('T_097', $detail)); ?> ft</span>
    </div>

    <div class="box1">
        <p>Number of Dock High Doors</p>
        <span><?php echo $value = number_format(searchForId('T_067', $detail)); ?> ft</span>
    </div>

    <div class="box1">
        <p>The number of a loading dock?</p>
        <span><?php echo $value = number_format(searchForId('T_113', $detail)); ?> ft</span>
    </div>
</div>
</div>
</div>
</div>
</div>

<div class="REACHIN-wrap-6 px-3">
    <div class="container-fluid" style="border-bottom: 2px solid #BCBCBC;padding:30px 0">
        <div class="WAREHOUSE">
          <p class="facilities"><img src="<?=base_url()?>assets/user/images/firewall.png" alt="firewall" width="19px"> &nbsp;OTHER SPECIFICATIONS</p>

      </div>
      <div class="row">
        <div class="col-md-6">
            <div class="INFRASTRUCTURE">
               <div class="box1">
                <P>Racking available</P>
                <span><?php if(searchForId('T_102', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
            </div>
            <div class="box1">
                <p>Racking Height</p>
                <span><?php echo $value = searchForId('T_191', $detail); ?></span>
            </div>
            <div class="box1">
                <p>Racking Depth.</p>
                <span><?php echo $value = searchForId('T_104', $detail); ?></span>
            </div>

            <div class="box1">
             <p>Racking height</p>
             <span><?php echo $value = searchForId('T_105', $detail); ?></span>
         </div>

         <div class="box1">
            <p>Wifi</p>
            <span><?php if(searchForId('T_063', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

        <div class="box1">
            <p> Office for administrative work</p>
            <span><?php if(searchForId('T_111', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

        <div class="box1">
            <p>Entry maintenance of all incoming/outgoing vehicles</p>
            <span><?php if(searchForId('T_150', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

        <div class="box1">
            <p>Customer access in warehouse facility</p>
            <span><?php if(searchForId('T_156', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

        <div class="box1">
            <p>All-weather motorable road?</p>
            <span><?php if(searchForId('T_155', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

        <div class="box1">
            <p>Shift</p>
            <span><?php echo $value = searchForId('T_058', $detail); ?></span>
        </div>

        <div class="box1">
            <p>Rodent/insect proof warehouse</p>
            <span><?php if(searchForId('T_062', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="INFRASTRUCTURE">
        <div class="box1">
            <p>Legal liability  insurance</p>
            <span><?php if(searchForId('T_175', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

        <div class="box1">
            <p>General warehousing insurance</p>
            <span><?php if(searchForId('T_154', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

        <div class="box1">
            <p>Off dock/off quay?</p>
            <span><?php if(searchForId('T_112', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

        <div class="box1">
            <p>Guarded entry and exit points</p>
            <span><?php if(searchForId('T_152', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

         <div class="box1">
            <p>Gate pass for goods getting out of warehouse?</p>
            <span><?php if(searchForId('T_151', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

          <div class="box1">
            <p>Toilets for admins</p>
            <span><?php if(searchForId('T_109', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

          <div class="box1">
            <p>Has admin room AC?</p>
            <span><?php if(searchForId('T_110', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

         <div class="box1">
            <p>Has admin room AC?</p>
            <span><?php if(searchForId('T_110', $detail)){ echo "Yes"; }else{ echo "No"; } ?></span>
        </div>

    </div>
</div>
</div>
</div>
</div>