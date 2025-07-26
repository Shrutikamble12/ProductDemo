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
                        <div class="breadcrumb mb-0" style="border-bottom: 1px solid #aaaaaa; background-color: #65656f;">
                                 <h1 style="font-family: 'Work Sans', sans-serif; color: #ffffff;">Member Payment</h1>
                        </div>
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">

                                <?php if (!empty($data)) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                document.getElementById('formMode').value = 'update';
                document.getElementById('btnhide').hidden = true; 
            });
        </script>
    <?php endif; ?>

    <input type="hidden" id="formMode" value="add" />
    
                                    <div class="row">
                                    <input class="form-control" Id="Id"  placeholder="Enter your ID" name="Id"
                                     value="<?php if(!empty($data)) echo $data[0]->Id ; ?>" type="hidden"/>

                                      <!--<div class=""style="margin-left: 26px;">-->
                                      <!--    <button type="button" class="btnn text-white" id="btnhide" data-toggle="modal" data-target="#newmodal" style="margin-top: -10px;">-->
                                      <!--    <i class="fa-solid fa-plus" style="color: #ffffff;"-->
                                      <!--    ></i>&nbsp;Add New-->
                                      <!--  </button>-->
                                      <!--  </div>-->
                                
                                     <div class=" col-md-3 form-group">
                                        <label for="name">Member Name</label>
                                        
                                            <select class="select2 form-control " name="Fk_MrId" id="Fk_MrId" onchange="ShareMarkets()" value="<?php if(!empty($data)) echo $data[0]->Fk_MrId ; ?>"
                                            <?php echo ($this->uri->segment(2) == 'update') ? 'disabled' : '';?>>
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
                                    
                                    
                                       
                                      

                                            <!--<div class="col-md-2 form-group">-->
                                            <!--<label for="amount">Amount (Rs.)</label>-->
                                            <!--<input type="number" name="Mamount" id="Mamount" class="form-control"value="<?php if(!empty($data)) echo $data[0]->Mamount ; ?>"  style=" width: 220px;">-->
                                            <!--</div>-->
                                            
                                            
                                             <div class="row" style="display:flex; flex-wrap:nowrap;">
                                            <div class="col-md-4 form-group">
                                            <label for="amount">Amount (Rs.)</label>
                                            <input type="number" name="Mamount" id="Mamount" class="form-control"value="<?php if(!empty($data)) echo $data[0]->Mamount ; ?>"  style=" width: 200px;">
                                                </div>
                                                <div class="col-md-2 form-group">
                                            <button type="button" class="btnn text-white" id="btnhide" data-toggle="modal" data-target="#newmodal">
                                          <i class="fa-solid fa-plus" style="color: #ffffff;"></i>&nbsp;Add New
                                        </button>
                                            </div>
                                            </div>
                                            
                                    
                                        
                                        <!--<div class="row" style="display:flex; flex-wrap:nowrap;">-->
                                        <!--    <div class="col-md-4 form-group">-->
                                        <!--    <label for="amount">Amount (Rs.)</label>-->
                                        <!--    <input type="number" name="Mamount" id="Mamount" class="form-control"value="<?php if(!empty($data)) echo $data[0]->Mamount ; ?>"  style=" width: 200px;">-->
                                        <!--        </div>-->
                                        <!--         <div class="col-md-2 form-group">-->
                                        <!--    <button type="button" class="btnn text-white" id="btnhide" data-toggle="modal" data-target="#newmodal">-->
                                        <!--  <i class="fa-solid fa-plus" style="color: #ffffff;"-->
                                        <!--  ></i>&nbsp;Add New-->
                                        <!--</button>-->
                                        <!--    </div>-->
                                        <!--    </div>-->
                                            
                                            
                                            
                                            
                                            <div class="row">
                                            <div class="col-md-2 form-group">
                                            <label for="date">Payment Date</label>
                                           
                                            <input type="date" name="Pdate" id="Pdate" class="form-control" value="<?php if(!empty($data)) echo $data[0]->Pdate ; ?>" style=" width: 220px;" >
                                            </div>
                                        </div>
                                        

                                        
                                            <!--<div class="col-md-2 form-group">-->
                                            <!--<label for="date">Payment Date</label>-->
                                           
                                            <!--<input type="date" name="Pdate" id="Pdate" class="form-control" value="<?php if(!empty($data)) echo $data[0]->Pdate ; ?>" style=" width: 220px;" >-->
                                            <!--</div>-->

                                            <!-- <div class="col-md-2 form-group">
                                            <input class="form-control" Id="month" name="month"
                                     value="<?php if(!empty($data)) echo $data[0]->Month ; ?>" type="hidden"/>

                                            </div> -->

                                            </div>

                                   
                                   <!--<div class="row mt-3">-->
                                   <div class="row mt-3" style="
    padding: 13px;
">
    <div class="col-4 text-center">
        <button class="btn btn-three btn-rounded" type="button" name="btn_save" id="btn_save" style="height: 40px; width: 107px;">
            <i class="fa-solid fa-bookmark" style="color: #f6f7f9;"></i> Save
        </button>
    </div>
    <div class="col-4 text-center">
        <a class="btn btn-four text-white btn-rounded" style="height: 40px; width: 115px;" href="<?=base_url()?>Member_payment/index">
            <i class="fa-solid fa-pen-to-square" style="color: #f2f4f8;"></i> List
        </a>
    </div>
    <div class="col-4 text-center">
        <a class="btn btn-five text-white btn-rounded" href="<?=base_url()?>Payment_success/create" style="height: 42px; width: 110px;">
            <i class="fas fa-file" style="color: #ffffff;"></i>&nbsp;Report
        </a>
    </div>
</div>
                                   
                                </form>

                                
                               

                                <div class="table-responsive mt-5" id="tdatas">
                                   <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                 <!--<th>Name</th> -->
                                                <th>Amount</th>
                                                <th>Payment_Date</th>
                                    

                                            </tr>
                                        </thead>
                                        <tbody id="tabledata"> 
                                        </tbody>
                                        
                                    </table>
                                   
                                </div>

                            </div>
                        </div>
                         <div class="modal" id="newmodal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="display: flex; justify-content: space-between;border-bottom: 2px solid #47484b!important;">
          <h4 class="modal-title" style="font-family: 'Work Sans', sans-serif;">Member registration</h4>
          <button type="button" class="close Modal_close-icon" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form class="needs-validation" id="Regform"  >

                 
                 
 
                      <div class="row">
                                    <input class="form-control" Id="Mr_Id"  placeholder="Enter your ID" name="Mr_Id"
                                     value="<?php if(!empty($data)) echo $data[0]->Id ; ?>" type="hidden"/>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="name">Member Full Name</label>
                                           <input type="text" name="Member_fullname" id="Member_fullname" class="form-control">
                                           
                                        </div>
                                        
                                        
                                            <div class="col-md-12 form-group">
                                            <label for="mobile">Mobile No</label>
                                            <input type="number" name="Mobile" id="Mobile" class="form-control"  onKeyPress="if(this.value.length==10) return false;">
                                
                                            </div>
                                        

                                        
                                            <div class="col-md-12 form-group">
                                            <label for="date">Birth Date</label>
                                            <input type="date" name="DOB" id="DOB" class="form-control">
                                
                                            </div>

                                            <div class="col-md-12 form-group">
                                            <label for="date">Registration Date</label>
                                            <input type="date" name="Registration_date" id="Registration_date" class="form-control" >
                            
                                            </div>

                                            </div>

                                            <div class="row mt-3">
                                        <div class="col-md-12 text-right modal-footer">
                                         <!--<a class="btn btn-five text-white btn-rounded" href="<?=base_url()?>Payment_success/create">Report </a>-->
                                         
                                        <!--<a class="btn btn-seven text-white btn-rounded" href="<?=base_url()?>Member_payment/create">Payment</a>-->
                                        
                                           <button class="btn btn-three btn-rounded" type="button" name="infosave" id="infosave" style="height: 40px;">
                                         <!--<img src="<?=base_url();?>Assets/images/save1.png" width="21"> -->
                                        <i class="fa-solid fa-bookmark" style="color: #f6f7f9;"></i>
                                         Save</button>
                                        
                                        <!--<button class="btn btn-three btn-rounded " type="button" name="infosave" style="height: 43px;"-->
                                        <!--        id="infosave">Save</button>-->
                                                <!-- <img src="<?=base_url();?>Assets/images/save1.png" width="21">&nbsp; -->
                                               
                                            
                                            <a class="btn btn-four text-white btn-rounded"
                                                href="<?= base_url() ?>Member_registration/index">
                                                <!-- <img src="<?=base_url();?>Assets/images/editt.png" width="21">&nbsp; -->
                                                 <i class="fa-solid fa-pen-to-square" style="color: #f2f4f8;"></i>


Edit</a>
                                        

                                        </div>

                                    </div>
                                       
                                   


                                   

                                   
                                   


                                   

                                    
                                   
                    </div>
               
            </form>
        </div>
        
       
        
      </div>
    </div>
  </div>
                    <!--</div>-->
</div>

   

<!-- <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/StudentCreate.js"></script> -->

<script  src="<?php echo base_url();?>Assets/js/jquery.min.js"></script>           

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

<script src="<?php echo base_url();?>Assets/js/CreateJs/Member_payment.js"></script>  
<script src="<?php echo base_url();?>Assets/js/CreateJs/Member_payment_popup.js"></script>    
<script src="<?php echo base_url();?>Assets/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>Assets/select2/select2.init.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const setDateIfEmpty = (id) => {
            const input = document.getElementById(id);
            if (!input.value) input.valueAsDate = new Date();
        };
        setDateIfEmpty("DOB");
        setDateIfEmpty("Registration_date");
        setDateIfEmpty("Pdate");

        // Disable the button if the form is in update mode
        const formMode = document.getElementById('formMode').value;
            const btnHide = document.getElementById('btnhide');
            btnHide.hidden = (formMode === 'update');

            // Initialize Select2
            $('.select2').select2();
        });

    // function ShareMarkets() {
    //     var Mr_Id = $("#Fk_MrId").val();
    //     $.ajax({
    //         url: "<?php echo base_url()?>Member_payment/getpaymentdata",
    //         method: 'post',
    //         data: {'Mr_Id': Mr_Id},
    //         success: function(data) {
    //             $("#tabledata").empty();
    //             $("#tabledata").html(data);
    //             amountcalculation();
    //             formatPaymentDate();
    //             countIDs();
    //         }
    //     });
    // }
    
      function ShareMarkets() {
    var Mr_Id = $("#Fk_MrId").val();
    $.ajax({
        url: "<?php echo base_url()?>Member_payment/getpaymentdata",
        method: 'post',
        data: {'Mr_Id': Mr_Id},
        success: function(data) {
            $("#tabledata").empty();
            $("#tabledata").html(data);
            
            // Get all rows except the last one (assuming the last one is for the count)
            var rows = $('#tabledata tr').not(':last');
            var rowCount = rows.length;
            
            // Add serial numbers to each row
            rows.each(function(index) {
                $(this).find('td:first').text(index + 1); // Add serial number in the first column
            });
            
            // Update the last row with the total count
            var lastRow = $('#tabledata tr:last');
            lastRow.find('td:last').text(rowCount); // Set the count in the last column of the last row
            
            // Hide the total for p_date column
            var p_dateColumnIndex = 2; // Replace with the actual index of the p_date column
            lastRow.find('td').eq(p_dateColumnIndex).text(''); // Clear the total for p_date
            
            amountcalculation();
            formatPaymentDate();
            countIDs();
        }
    });
}
    
   


    

    function formatPaymentDate() {
        $('#tabledata tr').each(function(index) {
            if (index > 0) {
                var paymentDate = $(this).find('td:eq(2)').text().trim();
                if (isValidDate(paymentDate)) {
                    var formattedDate = new Date(paymentDate).toLocaleDateString('en-GB', {
                        day: '2-digit',
                        month: 'short',
                        year: 'numeric'
                    });
                    $(this).find('td:eq(2)').text(formattedDate);
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
            Totalcharges = parseInt(charges[p].value) + parseInt(Totalcharges);
        }
        console.log("total charges", Totalcharges);
        document.getElementById("BillTot").value = Totalcharges.toFixed(2);
        $('#textt').text(Totalcharges.toFixed(2));
    }
</script>
<script>

        
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
        
        
         // Add a click event listener to the save button
        document.getElementById('btn_save').addEventListener('click', () => {
        //     // Perform your save operation here

        //     // Refresh the page automatically after saving
            location.reload();
        });
        // 
        
        //  // Add a click event listener to the save button
        // document.getElementById('infosave').addEventListener('click', () => {
        //     // Perform your save operation here

        //     // Refresh the page automatically after saving
            // location.reload();
        // });
        


</script>



<script>
    document.addEventListener('DOMContentLoaded', () => {
    const setDateIfEmpty = (id) => {
        const input = document.getElementById(id);
        if (!input.value) input.valueAsDate = new Date();
    };
    setDateIfEmpty("DOB");
    setDateIfEmpty("Registration_date");
    setDateIfEmpty("Pdate");

    // Disable the button if the form is in update mode
    const formMode = document.getElementById('formMode').value;
    const btnHide = document.getElementById('btnhide');
    btnHide.hidden = (formMode === 'update');

    // Initialize Select2
    $('.select2').select2();

    // Disable Select2 if in update mode
    if (formMode === 'update') {
        $('#Fk_MrId').prop('disabled', true).trigger('change');
    }
});

</script>

 
   