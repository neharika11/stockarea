<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/') ?>">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Warehouse Detailing
                            </li>
                        </ol>
                    </div>
                </div>
                <h3 class="content-header-title mb-0">Warehouse Detailing</h3>
            </div>

        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Warehouse Detailing</h4>

                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="btn btn-primary float-right btn-sm mb-3" data-toggle="modal" data-target="#successModal">Add New</button>
                                        </div>
                                    </div>
                                    <table id="detailingTable" class="table table-striped table-bordered zero-configuration table_responsive">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Small Description</th>
                                                <th>Below Description</th>
                                                <th>Industry Served 1</th>
                                                <th>Industry Served 2</th>
                                                <th>Industry Served 3</th>
                                                <th>Industry Served 4</th>
                                                <th>Industry Served 5</th>
                                                <th>Space Squre Feet</th>
                                                <th>Space Pallets</th>
                                                <th>Space Availability</th>
                                                <th>Reach Time 1</th>
                                                <th>Reach Time 2</th>
                                                <th>Warehouse Location</th>
                                                <th>Founded</th>
                                                <th>Warehouse Type</th>
                                                <th>Total Staff</th>
                                                <th>Total Storable Space</th>
                                                <th>Total Pallet space</th>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                                <th>Saturday</th>
                                                <th>Sunday</th>
                                                <th>Floorspace area 1</th>
                                                <th>Floorspace area 2</th>
                                                <th>Floorspace area 3</th>
                                                <th>Floorspace area 4</th>
                                                <th>Pallet 1</th>
                                                <th>Pallet 2</th>
                                                <th>Pallet 3</th>
                                                <th>Other Chages 1</th>
                                                <th>Other Chages 2</th>
                                                <th>Other Chages 3</th>
                                                <th>Other Chages 4</th>
                                                <th>Other Chages 5</th>
                                                <th>Facilities 1</th>
                                                <th>Facilities 2</th>
                                                <th>Facilities 3</th>
                                                <th>Facilities 4</th>
                                                <th>Facilities 5</th>
                                                <th>Facilities 6</th>
                                                <th>Services 1</th>
                                                <th>Services 2</th>
                                                <th>Services 3</th>
                                                <th>Services 4</th>
                                                <th>Services 5</th>
                                                <th>Services 6</th>
                                                <th>Warehouse roof</th>
                                                <th>Number of ramp gates</th>
                                                <th>Ventilation</th>
                                                <th>Boundry walls</th>
                                                <th>Max height</th>
                                                <th>Added Date</th>
                                                <th>Updated Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->

            <!--/ Language - Comma decimal place table -->

        </div>
    </div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-title">Add New Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card-body">
                    <form method="post" id="warehouse_detailing_frm" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="cat_name">Warehouse Name</label>
                            <select class="form-control" id="warehouse_id" name="warehouse_id">
                                <option value="">Select Warehouse</option>
                                <?php if(!empty($warehouse_list)){
                                            foreach($warehouse_list as $warehouse_detailing){?>
                                    <option value="<?php echo $warehouse_detailing->id; ?>">
                                        <?php echo $warehouse_detailing->warehouse_name; ?>
                                    </option>
                                    <?php }} ?>

                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="warehouse_image">Image's</label>
                            <input type="file" name="warehouse_image[]" id="warehouse_image" class="form-control" multiple>
                            <input type="hidden" name="old_warehouse_image" id="old_warehouse_image" class="form-control" multiple>
                            <span id="user_uploaded_image"></span>
                        </div>
                    

                        <div class="form-group">
                            <label for="small_description">Small Description</label>
                            <textarea name="small_description" id="small_description"  class="form-control ckeditor"></textarea>
                        </div> 
                        
                        <div class="form-group">
                            <label for="below_description">Below Description</label>
                            <textarea name="below_description" id="below_description"  class="form-control ckeditor"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="industry_served_1">Industry Served 1</label>
                            <input type="text" id="industry_served_1" name="industry_served_1" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="industry_served_2">Industry Served 2</label>
                            <input type="text" id="industry_served_2" name="industry_served_2" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="industry_served_3">Industry Served 3</label>
                            <input type="text" id="industry_served_3" name="industry_served_3" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="industry_served_4">Industry Served 4</label>
                            <input type="text" id="industry_served_4" name="industry_served_4" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="industry_served_5">Industry Served 5</label>
                            <input type="text" id="industry_served_5" name="industry_served_5" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Space_Squre_Feet">Space Squre Feet</label>
                            <input type="text" id="Space_Squre_Feet" name="Space_Squre_Feet" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="space_pallets">Space Pallets</label>
                            <input type="text" id="space_pallets" name="space_pallets" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Space_Availability">Space Availability</label>
                            <select class="form-control" id="Space_Availability" name="Space_Availability">
                                <option value="">Select Space Availability</option>
                                   <option value="1"> Yes</option>
                                    <option value="2"> No </option>
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="Reach_Time_1">Reach Time 1</label>
                            <input type="text" id="Reach_Time_1" name="Reach_Time_1" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Reach_Time_2">Reach Time 2</label>
                            <input type="text" id="Reach_Time_2" name="Reach_Time_2" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Warehouse_Location">Warehouse Location</label>
                            <input type="text" id="Warehouse_Location" name="Warehouse_Location" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="Founded">Founded</label>
                            <input type="text" id="Founded" name="Founded" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="Warehouse_Type">Warehouse Type</label>
                            <select class="form-control" id="Warehouse_Type" name="Warehouse_Type">
                                <option value="">Select Warehouse_Type</option>
                                   <option value="1"> Leasable space </option>
                                    <option value="2"> Warehouse services </option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="Total_Staff">Total Staff</label>
                            <input type="text" id="Total_Staff" name="Total_Staff" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Total_Storable_Space">Total Storable Space</label>
                            <input type="text" id="Total_Storable_Space" name="Total_Storable_Space" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Total_Pallet_space">Total Pallet space</label>
                            <input type="text" id="Total_Pallet_space" name="Total_Pallet_space" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Monday">Monday</label>
                            <input type="text" id="Monday" name="Monday" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Tuesday">Tuesday</label>
                            <input type="text" id="Tuesday" name="Tuesday" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Wednesday">Wednesday</label>
                            <input type="text" id="Wednesday" name="Wednesday" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Thursday">Thursday</label>
                            <input type="text" id="Thursday" name="Thursday" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Friday">Friday</label>
                            <input type="text" id="Friday" name="Friday" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Saturday">Saturday</label>
                            <input type="text" id="Saturday" name="Saturday" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Sunday">Sunday</label>
                            <input type="text" id="Sunday" name="Sunday" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Floorspace_area_1">Floorspace area 1</label>
                            <input type="text" id="Floorspace_area_1" name="Floorspace_area_1" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Floorspace_area_2">Floorspace area 2</label>
                            <input type="text" id="Floorspace_area_2" name="Floorspace_area_2" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Floorspace_area_3">Floorspace area 3</label>
                            <input type="text" id="Floorspace_area_3" name="Floorspace_area_3" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Floorspace_area_4">Floorspace area 4</label>
                            <input type="text" id="Floorspace_area_4" name="Floorspace_area_4" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Pallet_1">Pallet 1</label>
                            <input type="text" id="Pallet_1" name="Pallet_1" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="Pallet_2">Pallet 2</label>
                            <input type="text" id="Pallet_2" name="Pallet_2" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Pallet_3">Pallet 3</label>
                            <input type="text" id="Pallet_3" name="Pallet_3" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="Other_Chages_1">Other Chages 1</label>
                            <input type="text" id="Other_Chages_1" name="Other_Chages_1" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Other_Chages_2">Other Chages 2</label>
                            <input type="text" id="Other_Chages_2" name="Other_Chages_2" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="Other_Chages_3">Other Chages 3</label>
                            <input type="text" id="Other_Chages_3" name="Other_Chages_3" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Other_Chages_4">Other Chages 4</label>
                            <input type="text" id="Other_Chages_4" name="Other_Chages_4" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Other_Chages_5">Other Chages 5</label>
                            <input type="text" id="Other_Chages_5" name="Other_Chages_5" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="facility_1">FACILITY 1</label>
                            <input type="text" id="facility_1" name="facility_1" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="facility_2">FACILITY 2</label>
                            <input type="text" id="facility_2" name="facility_2" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="facility_3">FACILITY 3</label>
                            <input type="text" id="facility_3" name="facility_3" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="facility_4">FACILITY 4</label>
                            <input type="text" id="facility_4" name="facility_4" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="facility_5">FACILITY 5</label>
                            <input type="text" id="facility_5" name="facility_5" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="facility_6">FACILITY 6</label>
                            <input type="text" id="facility_6" name="facility_6" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="service_1">SERVICE 1</label>
                            <input type="text" id="service_1" name="service_1" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="service_2">SERVICE 2</label>
                            <input type="text" id="service_2" name="service_2" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="service_3">SERVICE 3</label>
                            <input type="text" id="service_3" name="service_3" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="service_4">SERVICE 4</label>
                            <input type="text" id="service_4" name="service_4" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="service_5">SERVICE 5</label>
                            <input type="text" id="service_5" name="service_5" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="service_6">SERVICE 6</label>
                            <input type="text" id="service_6" name="service_6" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="Warehouse_roof">Warehouse roof</label>
                            <input type="text" id="Warehouse_roof" name="Warehouse_roof" class="form-control">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="ramp_gates">Number of ramp gates</label>
                            <input type="text" id="ramp_gates" name="ramp_gates" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Ventilation">Ventilation</label>
                            <input type="text" id="Ventilation" name="Ventilation" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Boundry_walls">Boundry walls</label>
                            <input type="text" id="Boundry_walls" name="Boundry_walls" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="Max_height">Max height</label>
                            <input type="text" id="Max_height" name="Max_height" class="form-control">
                        </div>

                        <input type="hidden" name="taction" id="action" value="">
                        <input type="hidden" name="id" id="id" value="">
                       <button type="submit" class="btn btn-success" id="warehouse_detailing_btn">Submit</button>
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       
                    </form>
    
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
       var dataTable = $('#detailingTable').DataTable({
        "processing": true,
        "language": {
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
        },
        "serverSide": true,
        "order": [],
        "ajax": {
            url: "<?php echo base_url('admin/fetch_all_warehouse_detailing'); ?>",
            type: "POST"
        },

    });
    
   $(document).on('click', '.hide_warehouse_detailing', function(){
        var id = $(this).attr("mainid");
        if (confirm("Are you sure you want to hide this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/hide_warehouse_detailing",
                method: "POST",
                data: {
                    id: id,
                    status: '2'
                },
                dataType: "json",
                success: function(data) {
                    if (data['error']) {
                        alert(data.error);
                    } else {
                        alert(data.success);
                    }
                    dataTable.ajax.reload();
                }
            });
        } else {
            return false;
        }
    });

    $(document).on('click', '.activate_warehouse_detailing', function(){
        var id = $(this).attr("mainid");
        if (confirm("Are you sure you Activate this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/unhide_warehouse_detailing",
                method: "POST",
                data: {
                    id: id,
                    status: '1'
                },
                dataType: "json",
                success: function(data) {
                    if (data['error']) {
                        alert(data.error);
                    } else {
                        alert(data.success);
                    }
                    dataTable.ajax.reload();
                }
            });
        } else {
            return false;
        }
    });
    
   //INSERT NEW DATA
   $(document).on('submit', '#warehouse_detailing_frm', function(event) {
        event.preventDefault();
       
        var warehouse_id = $('#warehouse_id').val();   
        if(warehouse_id != ''){
        $.ajax({
                url: "<?php echo base_url() .'admin/insert_warehouse_detailing_data'?>",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                dataType: 'JSON',
                beforeSend: function() {
                    $("#warehouse_detailing_btn").html('Please Wait...');
                    $('input[type=text],button[type=submit]', 'textarea').prop('disabled', true);
                },
                success: function(data) {
                    $("#warehouse_detailing_btn").html('Submit');
                    $('input[type=text],button[type=submit]', 'textarea').prop('disabled', false);
                    if (data['error']) {
                        alert(data.error);
                    } else {
                        $('#warehouse_detailing_frm')[0].reset();
                        alert(data.success);
                        $('#successModal').modal('hide');
                        dataTable.ajax.reload();
                    }
                }
            });
            
        }
        else {
                 alert('Warehouse Name Field is Required');
        }
    });
    
    //EDIT DATA
    $(document).on('click', '.edit_warehouse_detailing', function(){  
         var id= $(this).attr("mainid");
         $(".modal-title").html("Update Details"); 
            $.ajax({
              url:"<?php echo base_url(); ?>admin/fetch_single_warehouse_detailing",  
              method:"POST",  
              data:{id:id,taction:'update_product'},  
              dataType:"json",  
              success:function(data) { 
                $('#successModal').modal('show');
                $('#warehouse_id').val(data.warehouse_id);
                $('#old_warehouse_image').val(data.old_warehouse_image);
                CKEDITOR.instances['small_description'].setData(data.small_description);
                CKEDITOR.instances['below_description'].setData(data.below_description);
                $('#industry_served_1').val(data.industry_served_1);
                $('#industry_served_2').val(data.industry_served_2);
                $('#industry_served_3').val(data.industry_served_3);
                $('#industry_served_4').val(data.industry_served_4);
                $('#industry_served_5').val(data.industry_served_5);
                $('#Space_Squre_Feet').val(data.space_squre_feet);
                $('#space_pallets').val(data.space_pallets);
                $('#Space_Availability').val(data.space_availability);
                $('#Reach_Time_1').val(data.reach_time_1);
                $('#Reach_Time_2').val(data.reach_time_2);
                $('#Warehouse_Location').val(data.warehouse_location);
                $('#Founded').val(data.founded);
                $('#Warehouse_Type').val(data.warehouse_type);
                $('#Total_Staff').val(data.total_staff);
                $('#Total_Storable_Space').val(data.total_storable_space);
                $('#Total_Pallet_space').val(data.total_pallet_space);
                $('#Monday').val(data.monday);
                $('#Tuesday').val(data.tuesday);
                $('#Wednesday').val(data.wednesday);
                $('#Thursday').val(data.thursday);
                $('#Friday').val(data.friday);
                $('#Saturday').val(data.saturday);
                $('#Sunday').val(data.sunday);
                $('#Floorspace_area_1').val(data.floorspace_area_1);
                $('#Floorspace_area_2').val(data.floorspace_area_2);
                $('#Floorspace_area_3').val(data.floorspace_area_3);
                $('#Floorspace_area_4').val(data.floorspace_area_4);
                $('#Pallet_1').val(data.pallet_1);
                $('#Pallet_2').val(data.pallet_2);
                $('#Pallet_3').val(data.pallet_3);
                $('#Other_Chages_1').val(data.other_charges_1);
                $('#Other_Chages_2').val(data.other_charges_2);
                $('#Other_Chages_3').val(data.other_charges_3);
                $('#Other_Chages_4').val(data.other_charges_4);
                $('#Other_Chages_5').val(data.other_charges_5);
                $('#facility_1').val(data.facility_1);
                $('#facility_2').val(data.facility_2);
                $('#facility_3').val(data.facility_3);
                $('#facility_4').val(data.facility_4);
                $('#facility_5').val(data.facility_5);
                $('#facility_6').val(data.facility_6);
                $('#service_1').val(data.service_1);
                $('#service_2').val(data.service_2);
                $('#service_3').val(data.service_3);
                $('#service_4').val(data.service_4);
                $('#service_5').val(data.service_5);
                $('#service_6').val(data.service_6);
                $('#Warehouse_roof').val(data.warehouse_roof);
                $('#ramp_gates').val(data.ramp_gates);
                $('#Ventilation').val(data.ventilation);
                $('#Boundry_walls').val(data.boundry_walls);
                 $('#Max_height').val(data.max_height);
                $('#id').val(id);
                $('#action').val('update_product');
              }  
            })  
          });
          
        $(document).on('click', '.delete_warehouse_detailing', function(){
        var id = $(this).attr("mainid");
        if (confirm("Are you sure you Delete this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/delete_warehouse_detailing",
                method: "POST",
                data: {id: id,},
                dataType: "json",
                success: function(data) {
                    if (data['error']) {
                        alert(data.error);
                    } else {
                        alert(data.success);
                    }
                    dataTable.ajax.reload();
                }
            });
        } else {
            return false;
        }
    });
</script>