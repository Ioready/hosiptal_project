<?php if ($this->ion_auth->is_superAdmin() || $this->ion_auth->is_admin() || $this->ion_auth->is_subAdmin() || $this->ion_auth->is_facilityManager()) { ?>
       <!-- Include chart.js for chart rendering -->
   
       
    <style>
    .dashboardBoxes{
       
      
        padding:2rem;
        
    }
    .ibox{
        border-radius:15px;
        padding:2rem ;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }
    .ibox strong{
        /* color:black;
        font-size:1.6rem;
        font-weight:600; */
        color:black;
        font-weight:600;
    }
    .no-margins{
        color: #333;
        font-size:1.6rem;
        font-weight:bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    .dashboard-title {
    font-size: 2rem;
    font-weight: 700;
    color: #333; /* Text color */
    text-transform: uppercase; /* Uppercase text */
    letter-spacing: 2px; /* Adjust letter spacing */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Text shadow */
}
.block-title {
    /* box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4); */
   background-color: rgba(255, 255, 255, 1) !important;
    border-radius:0px 0px 10px 10px; 
    /* Add border radius for rounded corners */
    border-bottom: 5px solid #6FD943 !important;  
}

</style>

    <!-- Page content -->
    <div id="page-content" >
        <!--        <div id="msg"></div>-->
        <!-- eShop Overview Block -->
        <div class="block full">
            <!-- eShop Overview Title -->
          
            <div class="block-title">
          
                <!-- <h2 style="font-size: 2rem;
    font-weight: 700;">
    <strong>Dashboard</strong>
</h2> -->
<h2 class="dashboard-title">
    <strong>Dashboard</strong>
</h2>
            </div>
            <!-- END eShop Overview Title -->
            <!-- eShop Overview Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                        <?php if ($this->ion_auth->is_superAdmin()) { ?>
                          
                            




 <div class="col-lg-3 dashboardBoxes">
    <div style="background-color: #F9F5FF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $total_admin; ?></h1>
            <h5 class="text-primary"><strong>Total Admin</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/administrator.png" style=" height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>

<div class="col-lg-3 dashboardBoxes">
    <div style="background-color: #FFFAEC; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $total_hospital; ?></h1>
            <h5 class="text-primary"><strong>Total Hospital</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/hospital-buildings.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>

<div class="col-lg-3 dashboardBoxes">
    <div style="background-color: #E6F2FF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $total_plans; ?></h1>
            <h5 class="text-primary"><strong>Total Plan</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/checklist.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>

<div class="col-lg-3 dashboardBoxes">
    <div style="background-color: #D9F4E9; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $total_order; ?></h1>
            <h5 class="text-primary"><strong>Total Order</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/order.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>

<!-- <div class="col-lg-4 dashboardBoxes">
    <div style="background-color:#FFE6E8; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $total_patient_today; ?></h1>
            <h5 class="text-primary"><strong>Total Patient Today</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/doctor-consultation1.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div> -->







                        <!-- <div class="col-lg-4">
                           <div class="ibox float-e-margins">
                               <div class="ibox-title">
                                        <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div>
                                        <h5 class="text-primary"><strong>Care Unit</strong></h5>
                                   </div>
                                   <div class="ibox-content">
                                       <h1 class="no-margins"><?php //echo $careUnit; ?></h1>
                                       <h5 class="text-primary"><strong>Total hospitals</strong></h5>
                                   </div>
                               </div>
                        </div> -->

                        <!--<div class="col-lg-4">-->
                        <!--    <div class="ibox float-e-margins">-->
                        <!--            <div class="ibox-title">-->
                                      
                        <!--            </div>-->
                        <!--            <div class="ibox-content">-->
                        <!--                <h1 class="no-margins"><?php echo $initial_dx; ?></h1>-->
                                       
                        <!--                <h5 class="text-primary"><strong>Total Infections</strong></h5>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!-- </div>-->

                        <!--<div class="col-lg-4">-->
                        <!--        <div class="ibox float-e-margins">-->
                        <!--            <div class="ibox-title">-->
                                       
                        <!--            </div>-->
                        <!--            <div class="ibox-content">-->
                        <!--                <h1 class="no-margins"><?php echo $initial_rx; ?></h1>-->
                                       
                        <!--                <h5 class="text-primary"><strong>Total Antibiotic</strong></h5>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--</div>-->

                        <!--<div class="col-lg-4">-->
                        <!--        <div class="ibox float-e-margins">-->
                        <!--            <div class="ibox-title">-->
                                        
                        <!--            </div>-->
                        <!--            <div class="ibox-content">-->
                        <!--                <h1 class="no-margins"><?php echo $total_patient_today; ?></h1>-->
                                       
                        <!--                <h5 class="text-primary"><strong>Total Patient Today</strong></h5>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--</div>-->




                                            <!-- <h5 class="text-primary"><strong>Patient</strong></h5> -->





  <div class="row m-2">
    <div class="col-lg-6 mt-4">
        <canvas id="myChart" style="width: 100%; height: 100%; background-color: #F9F5FF; padding: 15px;  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);"></canvas>
    </div>
    <div class="col-lg-6 mt-4">
        <canvas id="myChart2" style="width: 100%; height: 100%;  background-color: #FFFAEC; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 2,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.9)',
                        'rgba(54, 162, 235, 0.9)',
                        'rgba(255, 205, 86, 0.9)',
                        'rgba(75, 192, 192, 0.9)',
                        'rgba(153, 102, 255, 0.9)',
                        'rgba(255, 159, 64, 0.9)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false, // Allows chart to adjust its size based on the container size
                responsive: true // Ensures chart responsiveness
            }
        });

        const pie = document.getElementById('myChart2');
        const data = {
            labels: [
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        const config = {
            type: 'doughnut',
            data: data,
            options: {
                maintainAspectRatio: false, // Allows chart to adjust its size based on the container size
                responsive: true // Ensures chart responsiveness
            }
        };
        new Chart(pie, config);
    });
</script>

<?php }else if ($this->ion_auth->is_admin()) { ?>




<div class="col-lg-4 dashboardBoxes">
    <div style="background-color:#EDEAFF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);"  class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $total_hospital; ?></h1>
            <h5 class="text-primary"><strong>Total Hospital</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/hospital-buildings.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>
<div class="col-lg-4 dashboardBoxes">
    <div style="background-color:#FFE0B7; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $careUnit; ?></h1>
  <h5 class="text-primary"><strong>Total Care Unit</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/intravenous-therapy.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>


<div class="col-lg-4 dashboardBoxes">
    <div style="background-color:#DAEBFF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $initial_dx; ?></h1>
            <h5 class="text-primary"><strong>Total Infections</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/infected.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>

<div class="col-lg-4 dashboardBoxes">
    <div style="background-color:#D0FAE4; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $initial_rx; ?></h1>
            <h5 class="text-primary"><strong>Total Antibiotic</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/medicine.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>

<div class="col-lg-4 dashboardBoxes">
    <div style="background-color:#FDE2E4; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $total_patient_today; ?></h1>
            <h5 class="text-primary"><strong>Total Patient Today</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/doctor-consultation1.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>


<div class="switch-wrapper">
    <input id="toggle-monthly" type="radio" name="switch" checked>
    <label style="font-size:1.5rem;margin-bottom:10px" for="monthly">Monthly</label>
    <input style="margin-left:2rem" id="toggle-yearly" type="radio" name="switch">
    
    <label style="font-size:1.5rem;margin-bottom:10px   " for="yearly">Yearly</label>
    <span class="highlighter"></span>
  </div>


    <section>
        <div class="content">


            <?php 
            foreach($all_plan_list as $key=> $row){
            
            if($row->DurationInMonths == 'month'){ 

            ?>
            <div class="basic box price monthly">
                <h2 style="margin-top:0;margin-bottom:0" class="title"><?php echo $row->PlanName;?></h2>
                <div class="view">
                    <div class="icon">
                        <img src="https://i.postimg.cc/2jcfMcf4/hot-air-balloon.png" alt="hot-air-balloon">
                    </div>
                    <div class="price monthly cost">
                        <p class="amount">$<?php echo $row->Price;?></p>
                        <p class="detail">Admin Per Month</p>
                    </div>
                    <div class="price yearly hide cost">
                        <p class="amount">$<?php echo $row->Price;?></p>
                        <p class="detail">Admin Per Years</p>
                    </div>
                </div>
                <div class="description">
                  

                    <?php echo $row->plan_description; ?>

                </div>
                <?php if($this->ion_auth->is_superAdmin()){ ?>
                <div class="button plan_button">
                
               
                
                <!--<a href="<?php echo base_url('make-stripe-payment?'.'id='.$row->id);?>"><button >START FREE 7 DAYS TRIAL </button></a>-->
                <h2>
                    <a href="javascript:void(0)" onclick="open_modal_edit('<?php echo $model; ?>', '<?php echo $row->id; ?>')" class="save-btn btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> Edit Plan
                    </a>
                </h2>
                </div>

        <?php } else if($this->ion_auth->is_admin()){ ?>
                <div class="button plan_button">
                
                <!-- <a href="<?php echo site_url('stripePayments'); ?>" class=" <?php echo (strtolower($this->router->fetch_class()) == "stripePaymentController") ? "active" : "" ?>"> -->
                <!-- <button >START FREE 7 DAYS TRIAL </button></a> -->
                <a href="<?php echo base_url('make-stripe-payment?'.'id='.$row->id);?>"><button >START FREE 7 DAYS TRIAL </button></a>
                <!-- <a href="<?php echo base_url('my-stripe?'.'id='.$row->id);?>"><button >START FREE 7 DAYS TRIAL </button></a> -->
                </div>
                <?php } ?>
            </div>

            

            <!-- make-stripe-payment -->
            <?php 
            }else if($row->DurationInMonths == 'years'){ ?>
 <div class="basic box price yearly ">
                <h2 style="margin-top:0;margin-bottom:0" class="title"><?php echo $row->PlanName;?></h2>
                <div class="view">
                    <div class="icon">
                        <img src="https://i.postimg.cc/2jcfMcf4/hot-air-balloon.png" alt="hot-air-balloon">
                    </div>
                    <div class="price monthly cost">
                        <p class="amount">$<?php echo $row->Price;?></p>
                        <p class="detail">Admin Per Month</p>
                    </div>
                    <div class="price yearly hide cost">
                        <p class="amount">$<?php echo $row->Price;?></p>
                        <p class="detail">Admin per Years</p>
                    </div>
                </div>
                <div class="description">
                    <!-- <ul>
                        <li>Lorem, ipsum dolor.</li>
                        <li>Harum, beatae laudantium.</li>
                        <li>Odit, fugit saepe.</li>
                        <li>Harum, veniam suscipit!</li>
                        <li>A, aut veritatis!</li>
                        <li>Aliquid, quasi repellat!</li>
                    </ul> -->
                    <?php echo $row->plan_description; ?>
                </div>
                <?php if($this->ion_auth->is_admin()){ ?>
                <!-- <div class="button">
                <a href="<?php echo base_url('make-stripe-payment?'.'id='.$row->id);?>"><button >START FREE 7 DAYS TRIAL </button></a>
                    
                </div> -->
                <?php }?>
                <?php if($this->ion_auth->is_superAdmin()){ ?>
                <div class="button plan_button">
                
               
                
                <!--<a href="<?php echo base_url('make-stripe-payment?'.'id='.$row->id);?>"><button >START FREE 7 DAYS TRIAL </button></a>-->
                <h2>
                    <a href="javascript:void(0)" onclick="open_modal_edit('<?php echo $model; ?>', '<?php echo $row->id; ?>')" class="save-btn btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> Edit Plan
                    </a>
                </h2>
                </div>

        <?php } else if($this->ion_auth->is_admin()){ ?>
                <div class="button plan_button">
                
                <!-- <a href="<?php echo site_url('stripePayments'); ?>" class=" <?php echo (strtolower($this->router->fetch_class()) == "stripePaymentController") ? "active" : "" ?>"> -->
                <!-- <button >START FREE 7 DAYS TRIAL </button></a> -->
                <a href="<?php echo base_url('make-stripe-payment?'.'id='.$row->id);?>"><button >START FREE 7 DAYS TRIAL </button></a>
                <!-- <a href="<?php echo base_url('my-stripe?'.'id='.$row->id);?>"><button >START FREE 7 DAYS TRIAL </button></a> -->
                </div>
                <?php } ?>

            </div>
       <?php } ?>     
        
      
<?php } //}?>
        </div>
    </section>



<div class="col-lg-6 mt-4 m-4" style="background-color: #fff8f8;box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
  'rgba(255, 99, 132, 0.6)', // Red
  'rgba(54, 162, 235, 0.6)', // Blue
  'rgba(255, 206, 86, 0.6)', // Yellow
  'rgba(75, 192, 192, 0.6)', // Green
  'rgba(153, 102, 255, 0.6)', // Purple
  'rgba(255, 159, 64, 0.6)' // Orange
],

        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>






                            <!-- <div> -->
  <canvas id="myChart"></canvas>
<!-- </div> -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


                                            <!-- <h5 class="text-primary"><strong>Patient</strong></h5> -->
                        <?php } else if ($this->ion_auth->is_subAdmin()) { ?>

            
                            


<div class="col-lg-4 col-md-6 dashboardBoxes">
    <div style="background-color:<?php echo $total_patient > 0 ? '#EDEAFF' : '#FFFFFF'; ?>;box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $total_patient; ?></h1>
            <h5 class="text-primary"><strong>Total Patient</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/intravenous-therapy.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>

<div class="col-lg-4 col-md-6  dashboardBoxes">
    <div style="background-color:<?php echo $careUnit > 0 ? '#FEE2E1' : '#FFFFFF'; ?>; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $careUnit; ?></h1>
            <h5 class="text-primary"><strong>Total Care Unit</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/intravenous-therapy.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>

<div class="col-lg-4 col-md-6  dashboardBoxes">
    <div style="background-color:<?php echo $initial_dx > 0 ? '#DAEBFF' : '#FFFFFF'; ?>; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $initial_dx; ?></h1>
            <h5 class="text-primary"><strong>Total Infections</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/respiratory.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>

<div class="col-lg-4 col-md-6  dashboardBoxes">
    <div style="background-color:<?php echo $initial_rx > 0 ? '#D0FAE4' : '#FFFFFF'; ?>; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $initial_rx; ?></h1>
            <h5 class="text-primary"><strong>Total Antibiotic</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/medicine.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>

<div class="col-lg-4 col-md-6 dashboardBoxes">
    <div style="background-color:<?php echo $total_patient_today > 0 ? '#D0FAE4' : '#FFFFFF'; ?>; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
            <h1 class="no-margins"><?php echo $total_patient_today; ?></h1>
            <h5 class="text-primary"><strong>Total Patient Today</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/patient.png" style="height: 45px;width:45px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt="">
    </div>
</div>




<div class="row m-2">
<div class="col-lg-6 mt-4">
        <canvas id="myChart" style="width: 100%; height: 100%; background-color: #F9F5FF; padding: 15px;  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);"></canvas>
    </div>
    <div class="col-lg-6 mt-4">
        <canvas id="myChart2" style="width: 100%; height: 100%;  background-color: #FFFAEC; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);"></canvas>
    </div>   
</div>
                


                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                <script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 2,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.9)',
                        'rgba(54, 162, 235, 0.9)',
                        'rgba(255, 205, 86, 0.9)',
                        'rgba(75, 192, 192, 0.9)',
                        'rgba(153, 102, 255, 0.9)',
                        'rgba(255, 159, 64, 0.9)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false, // Allows chart to adjust its size based on the container size
                responsive: true // Ensures chart responsiveness
            }
        });

        const pie = document.getElementById('myChart2');
        const data = {
            labels: [
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        const config = {
            type: 'doughnut',
            data: data,
            options: {
                maintainAspectRatio: false, // Allows chart to adjust its size based on the container size
                responsive: true // Ensures chart responsiveness
            }
        };
        new Chart(pie, config);
    });
</script>


   

                        <?php } else if ($this->ion_auth->is_facilityManager()) { ?>





                            <div class="col-lg-4 dashboardBoxes">
    <div style="background-color: #F9F5FF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $total_patient; ?></h1>
<h5 class="text-primary"><strong>Total Patient</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/administrator.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>

<div class="col-lg-4 dashboardBoxes">
    <div style="background-color: #FFFAEC; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $doctors; ?></h1>
           <h5 class="text-primary"><strong>Total Doctor</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/doctor.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>

<div class="col-lg-4 dashboardBoxes">
    <div style="background-color: #E6F2FF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $careUnit; ?></h1>
         <h5 class="text-primary"><strong>Total Care Unit</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/intravenous-therapy.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>

<div class="col-lg-4 dashboardBoxes">
    <div style="background-color: #D9F4E9; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $initial_dx; ?></h1>
 <h5 class="text-primary"><strong>Total Infections</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/infected.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>

<div class="col-lg-4 dashboardBoxes">
    <div style="background-color:#FFE6E8; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $initial_rx; ?></h1>
      <h5 class="text-primary"><strong>Total Antibiotic</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/medicine.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>
<div class="col-lg-4 dashboardBoxes">
    <div style="background-color:#FFFF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);" class="ibox float-e-margins">
        <div class="ibox-content">
        <h1 class="no-margins"><?php echo $total_patient_today; ?></h1>
  <h5 class="text-primary"><strong>Total Patient Today</strong></h5>
        </div>
        <img src="<?php echo base_url(); ?>uploads/doctor-consultation1.png" style="height: 45px; width: 45px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt="">
    </div>
</div>











<div class="row m-2">
    <div class="col-lg-6 mt-4">
        <canvas id="myChart" style="width: 100%; height: 100%; background-color: #F9F5FF; padding: 15px;  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);"></canvas>
    </div>
    <div class="col-lg-6 mt-4">
        <canvas id="myChart2" style="width: 100%; height: 100%;  background-color: #FFFAEC; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 2,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.9)',
                        'rgba(54, 162, 235, 0.9)',
                        'rgba(255, 205, 86, 0.9)',
                        'rgba(75, 192, 192, 0.9)',
                        'rgba(153, 102, 255, 0.9)',
                        'rgba(255, 159, 64, 0.9)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false, // Allows chart to adjust its size based on the container size
                responsive: true // Ensures chart responsiveness
            }
        });

        const pie = document.getElementById('myChart2');
        const data = {
            labels: [
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        const config = {
            type: 'doughnut',
            data: data,
            options: {
                maintainAspectRatio: false, // Allows chart to adjust its size based on the container size
                responsive: true // Ensures chart responsiveness
            }
        };
        new Chart(pie, config);
    });
</script>


                        <?php }else if($this->ion_auth->is_patient()){ ?>
                            <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                </div>
                                <div class="ibox-content">
                                <h1 class="no-margins">

                                <?php echo $total_patient; ?>
                                </h1>
                                <h5 class="text-primary"><strong>Total Patient</strong></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $doctors; ?></h1>
                                        <h5 class="text-primary"><strong>Total Doctor</strong></h5>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                                        <!-- <h5 class="text-primary"><strong>Care Unit</strong></h5> -->
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $careUnit; ?></h1>
                                        <h5 class="text-primary"><strong>Total Care Unit</strong></h5>
                                    </div>
                                </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                                        <!-- <h5 class="text-primary"><strong>Infections</strong></h5> -->
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $initial_dx; ?></h1>
                                        <!-- <small>Total Infections</small> -->
                                        <h5 class="text-primary"><strong>Total Infections</strong></h5>
                                    </div>
                                </div>
                         </div>

                        <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                                        <!-- <h5 class="text-primary"><strong>Total Antibiotic</strong></h5> -->
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $initial_rx; ?></h1>
                                        <!-- <small>Total Antibiotic</small> -->
                                        <h5 class="text-primary"><strong>Total Antibiotic</strong></h5>
                                    </div>
                                </div>
                        </div>

                        <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                                        <!-- <h5 class="text-primary"><strong>Patient Today</strong></h5> -->
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $total_patient_today; ?></h1>
                                        <!-- <small>Total Patient Today</small> -->
                                        <h5 class="text-primary"><strong>Total Patient Today</strong></h5>
                                    </div>
                                </div>
                        </div>


                        

                        <?php } ?>
                                    </div>

                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
     

            <!-- END eShop Overview Content -->
        </div>
        <!-- END eShop Overview Block -->

    </div>
    <!-- END Page Content -->

    



<?php }else if($this->ion_auth->is_patient()){ ?>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<!-- Page content -->
    <div id="page-content">
        <!--        <div id="msg"></div>-->
        <!-- eShop Overview Block -->
        <div class="block full">
            <!-- eShop Overview Title -->
            <div class="block-title">
                <h2><strong>Dashboard</strong> Overview</h2>
            </div>
            <!-- END eShop Overview Title -->
            <!-- eShop Overview Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                                        
                                    </div>
                                    <div class="ibox-content">
                                        <h5 class="text-primary"><strong>Patient Appointment: </strong></h5>

                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                        <!-- <h1 class="no-margins">

                                            <?php //echo $total_patient; ?>
                                        </h1>
                                        <h5 class="text-primary"><strong>Total Patient</strong></h5> -->
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                    </div>
                                    <div class="ibox-content">
                                    <h2>
                                    <a href="<?php echo base_url().'index.php/' .'patientAppointment'; ?>/open_model" class="btn btn-sm btn-primary">
                                        <i class="gi gi-circle_plus"></i> Patient Appointment form
                                    </a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $careUnit; ?></h1>
                                        <h5 class="text-primary"><strong>Total Care Unit</strong></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                                        <!-- <h5 class="text-primary"><strong>Infections</strong></h5> -->
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $initial_dx; ?></h1>
                                        <!-- <small>Total Infections</small> -->
                                        <h5 class="text-primary"><strong>Total Infections</strong></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                                        <!-- <h5 class="text-primary"><strong>Total Antibiotic</strong></h5> -->
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $initial_rx; ?></h1>
                                        <!-- <small>Total Antibiotic</small> -->
                                        <h5 class="text-primary"><strong>Total Antibiotic</strong></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                                        <!-- <h5 class="text-primary"><strong>Patient Today</strong></h5> -->
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $total_patient_today; ?></h1>
                                        <!-- <small>Total Patient Today</small> -->
                                        <h5 class="text-primary"><strong>Total Patient Today</strong></h5>
                                    </div>
                                </div>
                            </div>


                        </div>
                      
                                 <!-- Flex container for charts -->
    <!-- <div class="d-flex  flex-column ">
       
        <div class=" p-3 bg-purple-50 rounded-xl box_shadow_charts">
            <p class=" p-4 text-xl font-medium">ELITE HEALTH SERVICES- 2023 Per Month Income / Expense</p>
            <canvas id="multiline-chart" width="400" height="300"></canvas>
        </div>
        
        <div class=" p-3 bg-purple-50 rounded-xl box_shadow_charts">
            <p class=" p-4 text-xl font-medium">Monthly Orders</p>
            <canvas id="bar-chart" width="400" height="300"></canvas>
        </div>
    </div> -->
                    </div>
                </div>
            </div>
            <!-- END eShop Overview Content -->
        </div>
        <!-- END eShop Overview Block -->

    </div>
    <!-- END Page Content -->
    
    <?php }?>


    <script>
    var stripe = Stripe('pk_test_P3N5vEUYda6Xg4MZM2tWd9PJ00hZgBj5nj', {
    betas: ['checkout_beta_4']
  });

  var checkoutButton = document.getElementById('checkout-button');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      items: [{sku: 'sku_EouPQJ6eEYCU1q', quantity: 1}],

      // Note that it is not guaranteed your customers will be redirected to this
      // URL *100%* of the time, it's possible that they could e.g. close the
      // tab between form submission and the redirect.
      successUrl: 'https://formhero.com/',
      cancelUrl: 'https://formhero.com/',
    })
    .then(function (result) {
      if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
</script>
<script>
    // Get the toggle buttons and pricing elements
// Get references to the toggle buttons
const monthlyButton = document.getElementById("toggle-monthly");
const yearlyButton = document.getElementById("toggle-yearly");

// Get references to the price elements
const monthlyPrices = document.querySelectorAll(".price.monthly");
const yearlyPrices = document.querySelectorAll(".price.yearly");

// Hide yearly prices initially
yearlyPrices.forEach(price => {
    price.classList.add("hide");
});

// Add click event listeners to toggle buttons
monthlyButton.addEventListener("click", () => {
    monthlyButton.classList.add("active");
    yearlyButton.classList.remove("active");
    monthlyPrices.forEach(price => {
        price.classList.remove("hide");
    });
    yearlyPrices.forEach(price => {
        price.classList.add("hide");
    });
});

yearlyButton.addEventListener("click", () => {
    yearlyButton.classList.add("active");
    monthlyButton.classList.remove("active");
    monthlyPrices.forEach(price => {
        price.classList.add("hide");
    });
    yearlyPrices.forEach(price => {
        price.classList.remove("hide");
    });
});


</script>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

    .save-btn{
    font-weight:700;
    font-size: 1.5rem;
    padding: 0.6rem 2.25rem;
    background:#337ab7;
}
.save-btn:hover{
    /* background-color:#00008B !important; */
    background:#00008B !important;
}


*{
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
}

:root{
    --pinkish-red: #C35A74;
    --medium-blue: #307BAA;
    --greenish-blue: #53BAB5;
    --bright-orange: #FF7445;
    --white-smoke: #F5F5F4;
    --white: #FFF;
    --dark-gray: #7D7C7C;
    --black: #000;
}

section{
    display: flex;
    justify-content: center;
    align-items: center;
    /* min-height: 100vh; */

    background: var(--white-smoke);
}

.content{
    display: flex;
    justify-content: space-between;
    width: 1200px;
    margin: 100px;
}

.box{
    display: flex;
    flex-direction: column;
    height: 586px;
    width: 300px;
    border-radius: 20px;
    margin-left: 10px;
    margin-right: 10px;
    
    background: var(--white);
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, 20%);
}

.title{
    width: 100%;
    padding: 10px 0;
    font-size: 1.2em;
    font-weight: lighter;
    text-align: center;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;

    color: var(--white-smoke);
}

.basic .title{
    background: var(--pinkish-red);
}

.standard .title{
    background: var(--medium-blue);
}

.business .title{
    background: var(--greenish-blue);
}

.view{
    display: block;
    width: 100%;
    padding: 30px 0 20px;

    background: var(--white-smoke);
}

.icon{
    display: flex;
    justify-content: center;
}

.icon img{
    width: 100px;
}

.cost{
    display: flex;
    justify-content:center;
    flex-direction: row;
    margin-top: 10px;
}

.amount{
    font-size: 2.8em;
    font-weight: bolder;
}

.detail{
    margin: auto 0 auto 5px;
    width: 70px;
    font-size: 0.7em;
    font-weight: bold;
    line-height: 15px;
    color: #7D7C7C;
}

.description{
    margin: 30px auto;
    font-size: 0.8em;
    color: #7D7C7C;
}

ul{
    list-style: none;
}

li{
    margin-top: 10px;
}

.description li::before{
    content: "";
    background-image: url("https://i.postimg.cc/ht7g996V/check.png");
    background-position: center;
    background-size: cover;
    opacity: 0.5;

    display: inline-block;
    width: 10px;
    height: 10px;
    margin-right: 10px;
}

/* .button{
    margin: 0 auto 30px;
} */

.plan_button{
    /* height: 40px;
    width: 250px;
    font-size: 0.7em;
    font-weight: bold;
    letter-spacing: 0.5px;
    color: #7D7C7C;
    border: 2px solid var(--dark-gray);
    border-radius: 50px;

    background: transparent; */
    height: 40px;
    width: 250px;
    font-size: 0.7em;
    font-weight: bold;
    letter-spacing: 0.5px;
    color: #f7f3f3;
    border: 2px solid #d9416c;
    border-radius: 50px;
    background: #d90a4b;
    
}

.plan_button:hover{
    color: var(--white-smoke);
    transition: 0.5s;
    border: none;

    background: var(--bright-orange);
}

/* Responsiveness:Start */
@media screen and (max-width:970px) {
    .content{
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 50px auto;
    }
    .standard, .business{
        margin-top: 25px;
    }
}
/* Responsiveness:End */
</style>

  