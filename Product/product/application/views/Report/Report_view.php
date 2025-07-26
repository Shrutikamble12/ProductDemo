<style>

.select2{
    width:100% !important;
}
</style>


<link rel="stylesheet" href="<?=base_url();?>Assets/select2/select2.min.css" />
<link rel="stylesheet" href="<?=base_url();?>Assets/select2/multiselect.css" />

        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="breadcrumb mb-0" style="border-bottom: 1px solid #aaaaaa;">
                                 <h1 style="font-family: 'Work Sans', sans-serif;">Payment Report II</h1>
                        </div>
                            <div class="card-body">
                            <form role="form" id="Form" method="post">
                            <input class="form-control" id="Mr_Id" name="Mr_Id" type="hidden" value="<?= !empty($data) ? $data[0]->Mr_Id : '' ?>" />

                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                    <label for="date1">From Date</label>
                                    <input type="date" name="startDate" id="startDate" class="form-control" required>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="date2">To Date</label>
                                    <input type="date" name="endDate" id="endDate" class="form-control" required>
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="name">Select Member Name</label>
                                    <select name="Fk_MrId" id="Fk_MrId" class="form-control select2" required>
                                        <option value="0">--Select--</option>
                                        <?php 
                                                foreach($Mnamedata as $rw=>$value){
                                                    $selected="";
                      
                                                    if(!empty($data[0]->Fk_MrId)){
                                                                    
                                                    if ($value->Mr_Id == $data[0]->Fk_MrId) {
                                                      $selected="selected='selected'";
                                                    } 
                                                  } 
                                                  echo '<option value="'.$value->Mr_Id.'"'.$selected.' >'.$value->Member_fullname.' - '.$value->Mobile.'</option>';                                            
                                            
                                            
                                            
                                                 }
                                                   ?>
                                    </select>
                                </div>

                              
                            </div>

                          
                                        
                                          <div class="row mt-3">
    <div class="col-4 text-center">
<button class="btn btn-three btn-rounded btn-lg" type="button" name="search" id="search" style="width:98px;">
<img src="<?=base_url();?>Assets/images/suc.png" width="21">&nbsp;Paid</button>
    </div>


    <div class="col-4 text-center">
    <button class="btn btn-four btn-rounded btn-lg" type="button" name="search1" id="search1" style="width: 105px; margin-left: -15px;">
    <img src="<?=base_url();?>Assets/images/unsuc.png" width="21">&nbsp;Unpaid</button>
    </div>

    
    <div class="col-4 text-center">
        <a class="btn btn-four text-white btn-rounded" href="https://new.finesseoverseas.in/Member_payment/create" style="height: 42px;background-color:#338772;width: 114px; margin-left: -12px;">
    <i class="fa-solid fa-money-check-dollar style=" color:="" #ffffff;"=""></i> &nbsp;Payment 
</a>
    </div>
    </div>
                                   
                        </form>
                        <div class="table-responsive mt-5" id="tdatas">
                            <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Member_FullName</th>
                                        <th>Amount</th>
                                        <th>Payment_date</th>
                                    </tr>
                                </thead>
                                <tbody id="tabledata">
                                    <!-- Data will be loaded here by AJAX -->
                                </tbody>
                            </table>
                        </div>

                            </div>
                        </div>
                        
                    </div>
</div>
                  

<!-- <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/StudentCreate.js"></script> -->

<script  src="<?php echo base_url();?>Assets/js/jquery.min.js"></script>           

<script src="<?= base_url(); ?>Assets/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?= base_url(); ?>Assets/js/CreateJs/Member_registration.js"></script>
    <script src="<?= base_url(); ?>Assets/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>Assets/select2/select2.init.js"></script>

   
<script>
    $(document).ready(function () {
    $('.select2').select2();

    $('#search').click(function () {
        getDateRangeData();
    });

    $('#search1').click(function () {
            getUnpaidData();
        });
  

    function getDateRangeData() {
        var startDate = $("#startDate").val();
        var endDate = $("#endDate").val();
        var selectedName = $("#Fk_MrId").val();

        $.ajax({
            url: "<?= base_url() ?>Report/getDateRangeData",
            method: 'post',
            data: {
                'startDate': startDate,
                'endDate': endDate,
                'Fk_MrId': selectedName
            },
            success: function (data) {
                $("#tabledata").empty().html(data);
                amountcalculation();
                    formatPaymentDate();
                    countIDs();
                // Optional: Any additional functions after data is loaded
            }
        });

        // Reset fields if needed
        // $('#startDate').val('');
        // $('#endDate').val('');
        $('#Fk_MrId').val('0').trigger('change');
    }
});

<!--function getUnpaidData() {-->
<!--            var startDate = $("#startDate").val();-->
<!--            var endDate = $("#endDate").val();-->
<!--            var selectedName = $("#Fk_MrId").val();-->

<!--            $.ajax({-->
<!--                url: "<?= base_url() ?>Report/getUnpaidData",-->
<!--                method: 'post',-->
<!--                data: {-->
<!--                    'startDate': startDate,-->
<!--                    'endDate': endDate,-->
<!--                    'Fk_MrId': selectedName-->
<!--                },-->
<!--                success: function (data) {-->
<!--                    $("#tabledata").empty().html(data);-->
<!--                    amountcalculation();-->
<!--                    countIDnew();-->
<!--                }-->
<!--            });-->
<!--        }-->




function getUnpaidData() {
    var startDate = $("#startDate").val();
    var endDate = $("#endDate").val();
    var selectedName = $("#Fk_MrId").val();

    $.ajax({
        url: "<?= base_url() ?>Report/getUnpaidData",
        method: 'post',
        data: {
            'startDate': startDate,
            'endDate': endDate,
            'Fk_MrId': selectedName
        },
        success: function (data) {
            $("#tabledata").empty().html(data);
            amountcalculation();
            countIDnew();

            // Add serial numbers and update total count
            var rows = $('#tabledata tr').not(':last');
            var rowCount = rows.length;
            
            // Add serial numbers to each row
            rows.each(function(index) {
                $(this).find('td:first').text(index + 1); // Add serial number in the first column
            });
            
              // Hide the total for p_date column
            var p_dateColumnIndex = 2; // Replace with the actual index of the p_date column
            lastRow.find('td').eq(p_dateColumnIndex).text(''); // Clear the total for p_date
            
            // Update the last row with the total count
            var lastRow = $('#tabledata tr:last');
            lastRow.find('td:last').text(rowCount); // Set the count in the last column of the last row
        }
    });
}
// // Example date
// let date = new Date('2024-08-23');

// // Options for formatting
// let options = { year: 'numeric', month: 'long' };

// // Format the date
// let formattedDate = date.toLocaleDateString('en-US', options);
// console.log(formattedDate);  // Output: August 2024



function formatPaymentDate() {
            $('#tabledata tr').each(function (index) {
                if (index > 0) {
                    var paymentDate = $(this).find('td:eq(3)').text().trim();
                    if (isValidDate(paymentDate)) {
                        var formattedDate = new Date(paymentDate).toLocaleDateString('en-GB', {
                            day: '2-digit',
                            month: 'short',
                            year: 'numeric'
                        });
                        $(this).find('td:eq(3)').text(formattedDate);
                    }
                }
            });
        }

        function isValidDate(dateString) {
            var regexDate = /^\d{4}-\d{2}-\d{2}$/;
            return regexDate.test(dateString);
        }

        function amountcalculation() {
            var charges = document.getElementsByClassName("Mamount");
            var Totalcharges = 0;
            for (var p = 0; p < charges.length; p++) {
                Totalcharges += parseFloat(charges[p].value);
            }
            document.getElementById("BillTot").value = Totalcharges.toFixed(2);
            $('#textt').text(Totalcharges.toFixed(2));
        }

                
document.addEventListener("DOMContentLoaded", function() {
    countIDs();
});

function countIDs() {    
    var idCells = document.getElementsByClassName("id-cell");
    var totalIDs = idCells.length;
    console.log("Total IDs count:", totalIDs);
    var textElement = document.getElementById("text");
    if (textElement) {
        textElement.textContent = totalIDs;
    }
    //  else {
    //     console.error("Element with id 'text' not found.");
    // }
}




</script>

<script>

        
document.addEventListener("DOMContentLoaded", function() {
    countIDnew();
});

function countIDnew() {    
    var idCel = document.getElementsByClassName("id-cel");
    var totalIDs = idCel.length;
    console.log("Total IDs count:", totalIDs);
    var textElement = document.getElementById("untext");
    if (textElement) {
        textElement.textContent = totalIDs;
    }
    //  else {
    //     console.error("Element with id 'text' not found.");
    // }
}



</script>