<style>
    .dashboardsection {
    position: relative;
    padding-top: 1%;
}

@media(max-width:767px) {
    .dashboardsection {
        padding-bottom: 0%;
        padding-top: 0%;
    }
    .row.gapBothSides .col-6 {
        flex: 0 0 100%; /* Full width on small screens */
        max-width: 100%;
    }
}

.ms-content-wrapper {
    padding: 20px;
}

.row.topArea {
    background: radial-gradient(ellipse at 30% 30%, #5000ca 0%, #6026b9 50%, #3f1381 100%);
    height: 168px;
    display: flex;
    padding: 34px 6px;
    margin-top: 78px;
}

.infos {
    font-weight: 600;
    color: white;
    font-family: sans-serif;
}

.desklogo {
    font-weight: 700;
    font-size: 28px;
    line-height: 0px;
    color: white;
    font-family: 'Rubik', sans-serif !important;
}

@media(max-width:600px) {
    .desklogo {
        font-size: 25px;
    }
}

.col-11.for_over {
    padding: 0;
    margin: 0 15px;
    background: #fff;
    margin-top: -40px;
    transform: translateY(-124px);
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    padding-bottom: 12px;
    box-shadow: 0 8px 17px rgba(0, 0, 0, .2), 0 6px 20px rgba(0, 0, 0, .15);
}

.cash_wrap {
    padding: 16px;
    border-bottom: 1px solid #c2b9b9;
}

.total_cash {
    font-weight: bold;
    font-family: sans-serif;
    justify-content: space-between;
    font-size: 14px;
    display: flex;
    margin-left: 22px;
    font-weight: 600;
}

.ms-has-notification {
    position: relative;
}

.row.gapBothSides {
    width: 100%;
    margin-top: -25px;
    padding-left: 1px;
    padding-right: 1px;
    text-align: center;
    display: flex;
    flex-wrap: wrap; /* Allow items to wrap */
    justify-content: center;
    transform: translateY(-74px);
}

.for_menus {
    background: #fff;
    padding: 20px; /* Adjust padding for better spacing */
    margin: 6px;
    text-decoration: none;
    box-shadow: 0 8px 17px rgba(0, 0, 0, .2), 0 6px 20px rgba(0, 0, 0, .15);
    border-radius: 6px;
    cursor: pointer;
    transition: all .3s ease-in-out; /* Slightly faster transition */
    color: var(--common_blue) !important;
    font-size: 15px !important;
    font-family: 'Poppins', sans-serif !important;
    font-weight: 600;
    position: relative;
}

.for_menus:hover {
    transform: scale(1.05); /* Slightly smaller scale for better UX */
    background: #c9d0fb;
}

.for_menus .countspan {
    position: absolute;
    top: 4px;
    right: 9px;
    font-size: 18px;
    color: #fbfaf9;
    font-weight: 700;
    height: 25px;
    width: 25px;
    background: var(--common_blue);
    border-radius: 50%;
    line-height: 26px;
}

.app-footer {
    padding: 0 20px !important;
    margin-top: 0 !important;
}

</style>

<section class="dashboardsection">
    <div class="ms-content-wrapper" style="padding-top: 0; max-width: 1000px; margin: auto;">
        <div class="row">
            <div class="col-md-12 col-12 col-sm-12">
                <div class="row topArea">
                    <div class="col-3 col-md-3 col-lg-2 d-flex justify-content-end">
                        <div class="imageFit">
                            <img src="<?= base_url()?>Assets/images/newsnnnnn.png" width="60" class="image_radius" style="height:60px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; background: white;">
                        </div>
                    </div>
                    <div class="col-9 pt-3">
                        <div class="mainInfoContainer">
                            <!-- <div class="infos">
                                <h3 class="desklogo">Newspepar</h3>
                            </div> -->
                            <div class="infos" style="font-size: 19px; color: red; font-weight: bold;"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="justify-content: center; max-height: 263px;">
                    <div class="col-11 for_over">
                        <div class="cash_wrap">
                            <div class="total_cash">
                                <li class="ms-nav-item dropdown" style="list-style-type: none; margin-left: 34px;">
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="text-disabled ms-has-notification" id="notificationDropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell-o fa-lg" style="color: #621fcb; font-size: 26px;"></i>
                                    </a>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                        <!--<img src="<?= base_url() ?>Assets/images/comtrance logo.png" alt="no picture" height="70px" width="70px" style="margin-left: 43px;">-->
                        <img src="<?= base_url() ?>Assets\images\comtrance new.jpeg" alt="no picture" height="70px" width="70px" style="margin-left: 43px;">
                        <h5 style="text-align: center; margin-left: 17px; font-weight: 600; color: var(--common_color); padding: 19px; font-size: 22px; font-family: 'Poppins';">
                          News paper
                        </h5>
                        </div>
                    </div>
                    <div class="row gapBothSides">
                    <a href="<?= base_url() ?>Member_registration/create" class="col-5 col-md-3 for_menus">
    <div class="menus_icon">
        <img src="<?= base_url() ?>Assets/images/regnnnnnnn.png" width="50">
    </div>
    <div class="menus_icon">Member Registration</div>
</a>


<a href="<?= base_url() ?>Member_payment/create" class="col-5 col-md-3 for_menus">
    <div class="menus_icon">
        <img src="<?= base_url() ?>Assets/images/memberpayment.png" width="50">
    </div>
    <div class="menus_icon">Member Payment</div>
</a>


<a href="<?= base_url() ?>Member_payment/index" class="col-5 col-md-3 for_menus">
    <div class="menus_icon">
        <img src="<?= base_url() ?>Assets/images/listnnnnn.png" width="50">
    </div>
    <div class="menus_icon">Payment List</div>
</a>

                        
<a href="<?= base_url() ?>Member_registration" class="col-5 col-md-3 for_menus">
    <div class="menus_icon">
    <img src="<?= base_url() ?>Assets/images/list23nnnnn.png" width="50">
    </div>
    <div class="menus_icon">List</div>
</a>

<a href="<?= base_url() ?>Payment_success/create" class="col-5 col-md-3 for_menus">
    <div class="menus_icon">
        <img src="<?= base_url() ?>Assets/images/reportsnnnnn.png" width="50">
    </div>
    <div class="menus_icon">Report</div>
</a>

                        <a href="<?= base_url('');?>" class="col-5 col-md-3 for_menus">
                            <div class="menus_icon">
                                <img src="<?= base_url() ?>Assets/images/logoutnnnnn.png" width="50">
                            </div>
                            <div class="menus_icon">Logout</div>
                        </a>
                        <!-- <a class="dropdown-item" href="<?=base_url('');?>">Log out</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
