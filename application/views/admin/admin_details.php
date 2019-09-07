    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('admin/admin_details') ?>">Home</a>
                  </li>
                  
                  <li class="breadcrumb-item active">Admin Details
                  </li>
                </ol>
              </div>
            </div>
            <h3 class="content-header-title mb-0">Admin Details</h3>
          </div>
          
        </div>
        <div class="content-body"><!-- Zero configuration table -->
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Admin Management</h4>

                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">

                                <table id="categoryTable" class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Added date</th>
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




<script type="text/javascript">
    
	var dataTable = $('#categoryTable').DataTable({  
		"processing":true,
		"language": {
			processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
		},  
		"serverSide":true,
		"order":[],  
		"ajax":{  
			url:"<?php echo base_url('admin/fetch_all_admin_details'); ?>",  
			type:"POST"  
		},
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		 
		"columnDefs":[  
		{  
			"targets":[0,3,4],  
			"orderable":false,  
		},  
		],  
	});



	$(document).on('click', '.hide_category', function(){  
		var id = $(this).attr("mainid");  
		if(confirm("Are you sure you want to hide this?")){  
			$.ajax({  
				url:"<?php echo base_url(); ?>admin/update_admin",  
				method:"POST",  
				data:{id:id, status:'2'},
				dataType:"json",   
				success:function(data){  
					if(data['error']){
						alert(data.error);
					}else{
						alert(data.success);
					}  
					dataTable.ajax.reload();      
				}  
			});  
		} else {  
			return false;       
		}  
	});

	$(document).on('click', '.activate_category', function(){  
		var id = $(this).attr("mainid");  
		if(confirm("Are you sure you Activate this?")){  
			$.ajax({  
				url:"<?php echo base_url(); ?>admin/update_admin",  
				method:"POST",  
				data:{id:id, status:'1'},
				dataType:"json",   
				success:function(data){  
					if(data['error']){
						alert(data.error);
					}else{
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