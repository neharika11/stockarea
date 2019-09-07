<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/') ?>">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Warehouse Listing
                            </li>
                        </ol>
                    </div>
                </div>
                <h3 class="content-header-title mb-0">Warehouse Listing</h3>
            </div>

        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row"> 
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Warehouse Listing</h4>

                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="btn btn-primary float-right btn-sm mb-3" data-toggle="modal" data-target="#successModal">Add New</button>
                                        </div>
                                    </div>
                                    <table id="listingTable" class="table table-striped table-bordered zero-configuration table_responsive">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>City</th>
                                                <th>Warehouse Name</th>
                                                <th>Owner Image</th>
                                                <th>Owner Name</th>
                                                <th>Owner Designation</th>
                                                <th>Owner Company</th>
                                                <th>Added Date</th>
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
                    <form method="post" id="warehouse_listing_frm" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="cat_name">City Name</label>
                            <select class="form-control" id="city" name="city">
                                <option value="">Select City</option>
                                <?php if(!empty($warehouse_city)){
                                            foreach($warehouse_city as $city){?>
                                    <option value="<?php echo $city->id; ?>">
                                        <?php echo $city->city_name; ?>
                                    </option>
                                    <?php }} ?>

                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="warehouse_name">Warehouse Name</label>
                            <input type="text" id="warehouse_name" name="warehouse_name" class="form-control">
                        </div> 
                        
                        <div class="form-group">
                            <label for="owner_image">Owner Image</label>
                            <input type="file" name="owner_image" id="owner_image" class="form-control">
                            <input type="hidden" name="old_owner_image" id="old_owner_image" class="form-control">
                            <span id="user_uploaded_image"></span>
                        </div>
                    

                        <div class="form-group">
                            <label for="owner_name">Owner Name</label>
                            <input type="text" id="owner_name" name="owner_name" class="form-control">
                        </div> 
                        
                        <div class="form-group">
                            <label for="owner_designation">Owner Designation</label>
                            <input type="text" id="owner_designation" name="owner_designation" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="owner_company">Owner Company</label>
                            <input type="text" id="owner_company" name="owner_company" class="form-control">
                        </div> 
                        
                        
                        <input type="hidden" name="taction" id="action" value="">
                        <input type="hidden" name="id" id="id" value="">
                       <button type="submit" class="btn btn-success" id="warehouse_listing_btn">Submit</button>
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       
                    </form>
    
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
       var dataTable = $('#listingTable').DataTable({
        "processing": true,
        "language": {
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
        },
        "serverSide": true,
        "order": [],
        "ajax": {
            url: "<?php echo base_url('admin/fetch_all_warehouse_listing'); ?>",
            type: "POST"
        },

    });
    
    $(document).on('click', '.hide_warehouse_listing', function(){
        var id = $(this).attr("mainid");
        if (confirm("Are you sure you want to hide this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/hide_warehouse_listing",
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

    $(document).on('click', '.activate_warehouse_listing', function(){
        var id = $(this).attr("mainid");
        if (confirm("Are you sure you Activate this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/unhide_warehouse_listing",
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
    
    $(document).on('click', '.delete_warehouse_listing', function(){
        var id = $(this).attr("mainid");
        if (confirm("Are you sure you Delete this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/delete_warehouse_listing",
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
    
   //INSERT NEW DATA
   $(document).on('submit', '#warehouse_listing_frm', function(event) {
        event.preventDefault();
       
        var city_id = $('#city').val();
        var owner_image = $('#owner_image').val();
        var owner_name = $('#owner_name').val();
        var owner_designation = $('#owner_designation').val();
        var owner_company = $('#owner_company').val();
        var warehouse_name = $('#warehouse_name').val();
        if(city_id != '' || warehouse_name != ''){
        $.ajax({
                url: "<?php echo base_url() .'admin/insert_warehouse_listing_data'?>",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                dataType: 'JSON',
                beforeSend: function() {
                    $("#warehouse_listing_btn").html('Please Wait...');
                    $('input[type=text],button[type=submit]', 'textarea').prop('disabled', true);
                },
                success: function(data) {
                    $("#warehouse_listing_btn").html('Submit');
                    $('input[type=text],button[type=submit]', 'textarea').prop('disabled', false);
                    if (data['error']) {
                        alert(data.error);
                    } else {
                        $('#warehouse_listing_frm')[0].reset();
                        alert(data.success);
                        $('#successModal').modal('hide');
                        dataTable.ajax.reload();
                    }
                }
            });
            
        }
        else {
                 alert('City Field is Required');
        }
    });
    
        //EDIT DATA
        $(document).on('click', '.edit_warehouse_listing', function(){  
         var id= $(this).attr("mainid");
         $(".modal-title").html("Update Details"); 
            $.ajax({
              url:"<?php echo base_url(); ?>admin/fetch_single_warehouse_listing",  
              method:"POST",  
              data:{id:id,taction:'update_product'},  
              dataType:"json",  
              success:function(data) { 
                $('#successModal').modal('show');
                $('#city').val(data.city_id);
                $('#warehouse_name').val(data.warehouse_name);
                $('#old_owner_image').val(data.old_owner_image);
                $('#owner_name').val(data.owner_name);
                $('#owner_designation').val(data.owner_designation);
                $('#owner_company').val(data.owner_company);
                $('#id').val(id);
                $('#action').val('update_product');
              }  
            })  
          });
</script>