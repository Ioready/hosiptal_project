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
  