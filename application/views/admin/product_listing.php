<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/') ?>">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Categories Listing
                            </li>
                        </ol>
                    </div>
                </div>
                <h3 class="content-header-title mb-0">Categories Listing</h3>
            </div>

        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Categories Listing</h4>

                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="btn btn-primary float-right btn-sm mb-3" data-toggle="modal" data-target="#successModal">Add New</button>
                                        </div>
                                    </div>
                                    <table id="listingTable" class="table table-striped table-bordered zero-configuration table_responsive" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Category</th>
                                                <th>Main Image</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
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
                    <form method="post" id="product_listing_frm" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="cat_name">Category Name</label>
                            <select class="form-control" id="category" name="category">
                                <option value="">Select Category</option>
                                <?php if(!empty($categories)){
                                            foreach($categories as $category){?>
                                    <option value="<?php echo $category->id; ?>">
                                        <?php echo $category->category_name; ?>
                                    </option>
                                    <?php }} ?>

                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="main_image">Main Image</label>
                            <input type="file" name="main_image" id="main_image" class="form-control">
                            <input type="hidden" name="old_main_image" id="old_main_image" class="form-control">
                            <span id="user_uploaded_image"></span>
                        </div>
                    
                    
                        <div class="form-group">
                            <label for="other_image">Other Images</label>
                            <input type="file" name="other_image[]" id="other_image" class="form-control" multiple>
                            <input type="hidden" name="old_other_image" id="old_other_image" class="form-control" multiple>
                            <span id="user_uploaded_image"></span>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="pro_name">Product Name</label>
                            <input type="text" id="pro_name" name="pro_name" class="form-control">
                        </div> 
                        
                        <div class="form-group">
                            <label for="pro_price">Price</label>
                            <input type="text" id="pro_price" name="pro_price" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description"  class="form-control ckeditor"></textarea>
                        </div> 
                        
                        
                        <input type="hidden" name="taction" id="action" value="">
                        <input type="hidden" name="id" id="id" value="">
                       <button type="submit" class="btn btn-success" id="product_listing_btn">Submit</button>
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
            url: "<?php echo base_url('admin/fetch_all_product_listing'); ?>",
            type: "POST"
        },

    });
    
/*  $(document).on('click', '.hide_product_listing', function(){
        var id = $(this).attr("mainid");
        if (confirm("Are you sure you want to hide this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/hide_product_listing",
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
    });*/

/*    $(document).on('click', '.activate_product_listing', function(){
        var id = $(this).attr("mainid");
        if (confirm("Are you sure you Activate this?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/unhide_product_listing",
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
    });*/
    
   //INSERT NEW DATA
   $(document).on('submit', '#product_listing_frm', function(event) {
        event.preventDefault();
       
        var category_id = $('#category').val();
        var main_image = $('#main_image').val();
        var pro_name = $('#pro_name').val();
        var pro_price = $('#pro_price').val();
        var description = $('#description').val();       
        /*var id_value = document.getElementById("id").value;
        if (id_value == '') {
            if (category_id != '' && pro_name !='' && description !='' && pro_price !='') {
                alert('All Fields are Required');
                return false;
            }
         }*/
        $.ajax({
                url: "<?php echo base_url() .'admin/insert_product_listing_data'?>",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                dataType: 'JSON',
                beforeSend: function() {
                    $("#product_listing_btn").html('Please Wait...');
                    $('input[type=text],button[type=submit]', 'textarea').prop('disabled', true);
                },
                success: function(data) {
                    $("#product_listing_btn").html('Submit');
                    $('input[type=text],button[type=submit]', 'textarea').prop('disabled', false);
                    if (data['error']) {
                        alert(data.error);
                    } else {
                        $('#product_listing_frm')[0].reset();
                        alert(data.success);
                        $('#successModal').modal('hide');
                        dataTable.ajax.reload();
                    }
                }
            });
            
        /*} else {
                 alert('All Fields are Required');
        }*/
    });
    
        //EDIT DATA
        $(document).on('click', '.edit_product_listing', function(){  
         var id= $(this).attr("mainid");
         $(".modal-title").html("Update Details"); 
            $.ajax({
              url:"<?php echo base_url(); ?>admin/fetch_single_product_listing",  
              method:"POST",  
              data:{id:id,taction:'update_product'},  
              dataType:"json",  
              success:function(data) { 
                $('#successModal').modal('show');
                $('#category').val(data.category);
                $('#pro_name').val(data.pro_name);
                $('#pro_price').val(data.pro_price);
                $('#description').val(data.pro_description);
                $('#id').val(id);
                $('#action').val('update_product');
              }  
            })  
          });
</script>