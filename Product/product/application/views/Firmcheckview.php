<link rel="stylesheet" href="<?=base_url();?>Assets/select2/select2.min.css" />
<link rel="stylesheet" href="<?=base_url();?>Assets/select2/multiselect.css" />
<style>
    label{
        font-size:16px;
        font-weight:bold;
    }
    .table thead th {
    vertical-align: bottom;
   
   
    border-bottom: 2px solid #000000;
}
.table tbody td {
    vertical-align: bottom;
   
   
    border-bottom: 2px solid #000000;-
}
.table-bordered th, .table-bordered td ,.table-bordered tr{
    border: 2px solid #000000;
}
#example {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        #example th, #example td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        #example th {
            background-color: #f2f2f2;
            text-align: left;
        }
     
        table.dataTable.display>tbody>tr.even>.sorting_1, table.dataTable.order-column.stripe>tbody>tr.even>.sorting_1 {
    box-shadow: inset 0 0 0 9999px white;
}
table.dataTable.order-column>tbody tr>.sorting_1, table.dataTable.order-column>tbody tr>.sorting_2, table.dataTable.order-column>tbody tr>.sorting_3, table.dataTable.display>tbody tr>.sorting_1, table.dataTable.display>tbody tr>.sorting_2, table.dataTable.display>tbody tr>.sorting_3 {
    box-shadow: inset 0 0 0 9999px white;
}
table.dataTable.stripe>tbody>tr.odd>, table.dataTable.display>tbody>tr.odd> {
    box-shadow: inset 0 0 0 9999px white;
}
table.dataTable.display>tbody>tr.odd>.sorting_1, table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_1 {
    box-shadow: inset 0 0 0 9999px white;
}
table.dataTable.hover>tbody>tr:hover>*,table.dataTable.display>tbody>tr:hover>* {
    box-shadow: inset 0 0 0 9999px white;
}
</style>
<script>
       
       function setCurrentDate() {
    var today = new Date().toISOString().split('T')[0]; 
    
    var fromDateField = document.getElementById('FromDate');
    var toDateField = document.getElementById('ToDate');

    if (fromDateField) fromDateField.value = today;
    if (toDateField) toDateField.value = today;
}

    </script>

        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
               
                
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="card">
                        <div class="breadcrumb mb-0 " style="border-bottom: 1px solid #aaaaaa;">
                    <h1 style="font-family: 'Work Sans', sans-serif;">Firm report</h1>
                   
                </div>
                        <div class="card-body">
                        <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                  

                                    
                                    <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Register Mobile Number</label>
                                            <input class="form-control" id="Mobile" type="number" maxlength="10" onKeyPress="if(this.value.length==10) return false;"  name="Mobile"/>
                                        </div>
                                        
                                        

</div>

<br>
                                    <div class="row">
                                    <div class="col-md-12 text-left">
                                    <div class="col-md-12 text-left">
        <button type="button" class="btn btn-warning text-white" id="search" name="search">Search</button>
    </div>

                                        </div> 
                                    </div>
                                    <!-- <div class="row mb-3">
        <div class="col-md-12">
            <label for="searchInput">Search:</label>
            <input type="text" id="searchInput" class="form-control" placeholder="Search table...">
        </div>
    </div> -->
    <br><br>
    <div id="fileInputWrapper" class="col-md-2 form-group mb-3" style="display:none;">
    <label for="fileUpload">Choose File:</label>
    <input class="form-control" type="file" id="fileUpload" name="fileUpload">
    </div>
    <div id="fileInputWrapper1" class="col-md-2 form-group mb-3" style="display:none;">
    <label for="fileUpload">Choose File:</label>
    <input class="form-control" type="file" id="fileUpload" name="fileUpload">
    </div>
    <div id="fileInputWrapper2" class="col-md-2 form-group mb-3" style="display:none;">
    <label for="fileUpload">Choose File:</label>
    <input class="form-control" type="file" id="fileUpload" name="fileUpload">
    </div>
    <div id="fileInputWrapper3" class="col-md-2 form-group mb-3" style="display:none;">
    <label for="fileUpload">Choose File:</label>
    <input class="form-control" type="file" id="fileUpload" name="fileUpload">
    </div>

                                </form>
                                <br><br>
                            <!-- <button class="btn btn-new mb-3" ><a href="<?=base_url() ?>Uploaddata/create" class="text-decoration-none text-white "><i class="fa-solid fa-plus"></i>&nbsp;Add New</a></button><br> -->
                            
                             
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>Assets/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>Assets/select2/select2.init.js"></script>
<script>
	$(document).ready(function() {
   

    $('#example').dataTable( {} );
 
    
} );
</script>
                   
                       
<script>
$(document).ready(function() {
    // Initialize DataTables
    var table = $('#example').DataTable();
    
    // Event listener for search input
    $('#searchInput').on('keyup', function() {
        table.search(this.value).draw();
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {
        $('#search').click(function() {
            var mobileNo = $('#Mobile').val();

            // Validate the mobile number length (must be 10 digits)
            if (mobileNo.length !== 10) {
                Swal.fire('Error', 'Please enter a valid 10-digit mobile number.', 'error');
                return;
            }

            // Send the mobile number to the controller for validation
            $.ajax({
                url: '<?= base_url("Firmcheck/check_mobile") ?>', // Make sure this URL is correct
                method: 'POST',
                data: { mobileNo: mobileNo },
                success: function(response) {
                    var data = JSON.parse(response);

                    // If the mobile number is not found in the table
                    if (data.status === 'not_registered') {
                        Swal.fire('Error', 'Not registered mobile number.', 'error');
                    }
                    // If mobile number exists and navId is 1 (verified)
                    else if (data.status === 'verify') {
                        Swal.fire('Success', 'Register number is verified.', 'success');
                    }
                    // If mobile number exists but navId is not 1 (not verified)
                    else if (data.status === 'not_verified') {
                        // Show the not verified alert
                        Swal.fire({
                            title: 'Register number is not verified',
                            text: 'Please upload your documents to verify your number.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            // Show the file input when "OK" is clicked
                            if (result.isConfirmed) {
                                $('#fileInputWrapper').show(); // Show the file input
                                $('#fileInputWrapper1').show();
                                $('#fileInputWrapper2').show();
                                $('#fileInputWrapper3').show();
                            }
                        });
                    }
                }
            });
        });
    });
</script>
            