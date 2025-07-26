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
                    <h1 style="font-family: 'Work Sans', sans-serif;">Product List</h1>
                   
                </div>
                        <div class="card-body">


    <div class="col-4 text-center">
        <!-- <a class="btn btn-five text-white btn-rounded" href="<?=base_url()?>Payment_success/create" style="height: 42px; width: 118px;">
            <i class="fas fa-file" style="color: #ffffff;"></i>&nbsp;Report
        </a> -->

        <button class="btn btn-new mb-3" style="
    width: 105px;
    height: 38px;
    border-radius: 18px;
    background-color: purple;
"><a href="<?=base_url()?>Cart/create"  class="text-decoration-none text-white "><i class="fa-solid fa-plus"></i>&nbsp;Add New</a></button>
    </div>
</div>




                                <div class="table-responsive">
                                    <table class="display table" id="example" style="width:100%">
                                        <thead class="Heading-table">
                                            <tr>
                                                <th></th>
                                                <th>Id</th>
                                                 <th>Product</th>
                                                <th>Price</th>
                                                <th>Images</th>
                                                <th></th>
                                               
                                            </tr>
                                        </thead>


                                        <tbody>
         <tbody>
<?php 
$i = 0;
foreach($alldata as $rw => $value) {
    echo "<tr>";
    echo '<td>
        <a href="'.base_url().'Cart/update/'.$value->id.'">
            <i class="fa-regular fa-pen-to-square"></i>
        </a>
    </td>';
    echo "<td>".$value->id."</td>";
    echo "<td>".$value->name."</td>";
    echo "<td>".$value->price."</td>";
    
    if (!empty($value->image_path)) {
        echo "<td><img src='".base_url($value->image_path)."' style='height: 60px; border-radius: 4px;'></td>";
    } else {
        echo "<td>No Image</td>";
    }

    echo "<td></td>";
    echo "</tr>";
    $i++;
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

                   