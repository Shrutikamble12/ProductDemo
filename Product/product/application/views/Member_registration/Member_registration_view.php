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
                                 <h1 style="font-family: 'Work Sans', sans-serif; color: #ffffff;">Member Registration</h1>
                        </div>
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                    <input class="form-control" Id="Mr_Id"  placeholder="Enter your ID" name="Mr_Id"
                                     value="<?php if(!empty($data)) echo $data[0]->Mr_Id ; ?>" type="hidden"/>
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="name">member name</label>
                                           <input type="text" name="Member_fullname" id="Member_fullname" class="form-control" value="<?php if(!empty($data)) echo $data[0]->Member_fullname ; ?>">
                                        </div>

                                        <div class=" col-md-3 form-group">
                                        <label for="name">Paper Name</label>
                                        
                                            <select class="select2 form-control " name="peparname" id="peparname" value="<?php if(!empty($data)) echo $data[0]->peparname ; ?>">
                                                <option value="0">--Select--</option>
                                  
                        <?php 
                                                foreach($pepardata as $rw=>$value){
                                                    $selected="";
                      
                                                    if(!empty($data[0]->peparname)){
                                                                    
                                                    if ($value->pepar_Id == $data[0]->peparname) {
                                                      $selected="selected='selected'";
                                                    } 
                                                  } 
                                             
                                                  echo '<option value="'.$value->pepar_Id.'"'.$selected.' >'.$value->pepar_name.'</option>';                                            
                                            
                                                 }
                                                   ?>
                                              
                                            </select>
                                       
                                        </div>
                                        
                                        
                                            <div class="col-md-2 form-group">
                                            <label for="mobile">Mobile No</label>
                                            <input type="number" name="Mobile" id="Mobile" class="form-control" onKeyPress="if(this.value.length==10) return false;" value="<?php if(!empty($data)) echo $data[0]->Mobile ; ?>">
                                            </div>
                                        

                                        
                                            <div class="col-md-2 form-group">
                                            <label for="date">Birth Date</label>
                                            <input type="date" name="DOB" id="DOB" class="form-control" value="<?php if(!empty($data)) echo $data[0]->DOB ; ?>">
                                            </div>

                                            
                                            <div class="col-md-2 form-group">
                                            <label for="date">Registration Date</label>
                                            <input type="date" name="Registration_date" id="Registration_date" class="form-control" value="<?php if(!empty($data)) echo $data[0]->Registration_date ; ?>">
                                            </div>

                                            </div>

                                   
                                            <div class="row mt-3">
                                    <div class="col-md-12">
                                            &nbsp; &nbsp; &nbsp;<button class="btn btn-three btn-rounded btn-lg" type="button" name="btn_save" id="btn_save">
                                        <!-- <img src="<?=base_url();?>Assets/images/save1.png" width="21">  -->
                                        <i class="fa-solid fa-bookmark" style="color: #f6f7f9;"></i>
                                        Save</button>
                                            <a  class="btn btn-four text-white btn-rounded btn-lg" href="<?=base_url()?>Member_registration/index">
                                            <!-- <img src="<?=base_url();?>Assets/images/editt.png" width="21">&nbsp;  -->
                                             <i class="fa-solid fa-pen-to-square" style="color: #f2f4f8;"></i>
                                            List</a>
                                            <!-- <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel">Cancel</button> -->

                                        </div> 

                                       
                                       
                                   


                                   

                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<!-- <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/StudentCreate.js"></script> -->

<script  src="<?php echo base_url();?>Assets/js/jquery.min.js"></script>           

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

<script src="<?php echo base_url();?>Assets/js/CreateJs/Member_registration.js"></script>    
<script src="<?php echo base_url();?>Assets/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>Assets/select2/select2.init.js"></script>

 <!-- <script>
     document.addEventListener('DOMContentLoaded', () => {
    const setDateIfEmpty = (id) => {
        const input = document.getElementById(id);
 if (!input.value) input.valueAsDate = new Date();
    };
    setDateIfEmpty("dob");
    setDateIfEmpty("todaydate");
});
    </script> -->




 <script>
    document.addEventListener('DOMContentLoaded', () => {
        const today = new Date().toISOString().split('T')[0];

        const setDateIfEmpty = (id) => {
            const input = document.getElementById(id);
            if (!input.value) {
                input.value = today;
            }
        };

        setDateIfEmpty("DOB");
        setDateIfEmpty("Registration_date");

        // Add a click event listener to the save button
        document.getElementById('btn_save').addEventListener('click', () => {
            // Perform your save operation here

            // Refresh the page automatically after saving
            location.reload();
        });
    });
</script>
