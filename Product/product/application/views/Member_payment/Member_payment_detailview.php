<style>
    @media (max-width: 576px) {
    .layout-sidebar-large .main-header {
        height: 80px;
        padding: 0 1.5rem;
       
    }
}
 .main-header{
      top:0;
 }

 .dataTables_empty {
    display: none;
}
</style>

 <!-- =============== Left side End ================-->
 <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
               
                
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="card">
                        <div class="breadcrumb mb-0 " style="border-bottom: 1px solid #aaaaaa;">
                    <h1 style="font-family: 'Work Sans', sans-serif;">Payment List</h1>
                   
                </div>
                        <div class="card-body">

<div class="row mt-3">
    <div class="col-4 text-center">
        <a class="btn btn-three btn-rounded" href="https://new.finesseoverseas.in/Payment_success/create" style="background-color: green;height: 42px;width: 114px;">
    <i class="fas fa-file" style="color: #ffffff;"></i>&nbsp;Report 
</a>
    </div>
    <div class="col-4 text-center">
        <a class="btn btn-four text-white btn-rounded" href="https://new.finesseoverseas.in/Member_payment/create" style="height: 42px;background-color: #dd1b1b;width: 118px;">
    <i class="fa-solid fa-money-check-dollar style=" color:="" #ffffff;"=""></i> &nbsp;Payment 
</a>
    </div>
    <div class="col-4 text-center">
        <!-- <a class="btn btn-five text-white btn-rounded" href="<?=base_url()?>Payment_success/create" style="height: 42px; width: 118px;">
            <i class="fas fa-file" style="color: #ffffff;"></i>&nbsp;Report
        </a> -->

        <button class="btn btn-new mb-3" style="
    width: 105px;
    height: 38px;
    border-radius: 18px;
    background-color: purple;
"><a href="https://new.finesseoverseas.in/Member_payment/create" class="text-decoration-none text-white "><i class="fa-solid fa-plus"></i>&nbsp;Add New</a></button>
    </div>
</div>










                                <div class="table-responsive">
                                    <table class="display table" id="example" style="width:100%">
                                        <thead class="Heading-table">
                                            <tr>
                                                <th></th>
                                                <th>Id</th>
                                                 <th>Member_Fullname....</th>
                                                <th>Amount</th>
                                                <th>Payment_Date</th>
                                                <th></th>
                                               
                                            </tr>
                                        </thead>


                                        <tbody>
                                        <tbody>
    <?php 
    $i = 0;
    foreach($alldata as $rw => $value) {
        $formatted_date = date('d-M-Y', strtotime($value->Pdate));
        echo "<tr>";
        echo '<td>
            <a href="'.base_url().'Member_payment/update/'.$value->Id.'">
                <i class="fa-regular fa-pen-to-square"></i>
            </a>
        </td>';
        echo "<td>".$value->Id."</td>";
        echo "<td>".$value->Member_fullname."</td>";
        echo "<td>".$value->Mamount."</td>";
        echo "<td>".$formatted_date."</td>";
        echo '<td>
            <!--<a href="https://api.whatsapp.com/send?phone='.$value->Mobile.'&text=Hello '.$value->Member_fullname.', your payment of Rs. '.$value->Mamount.' on '.$formatted_date.' is successful!" class="float wpicon" target="_blank">-->
            <!--    <div class="social"><i class="fa-brands fa-whatsapp"></i></div>-->
            <!--</a>-->
            
           
              <a href="https://api.whatsapp.com/send?phone=91'.$value->Mobile.'&text=Hello '.$value->Member_fullname.', your payment of Rs. '.$value->Mamount.' on '.$formatted_date.' is successful!" class="float wpicon" target="_blank">
    <i class="fa-brands fa-whatsapp" style="color: #25D366; font-size: 28px;"></i>
</a>
        </td>';

        $i++;
        echo "</tr>";
    }
    ?> 
</tbody>

</tbody>
                                        
                                    </table>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
</div>
             

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<!-- <script>
	$(document).ready(function() {
   

    $('#example').dataTable( {} );
 
    
} );
</script> -->


<script>
$(document).ready(function() {
    $('#example').dataTable({});
});
</script>

                   