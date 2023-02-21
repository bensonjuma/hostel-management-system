<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- By CodeAstro - codeastro.com -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    </head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include '../includes/student-navigation.php'?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include '../includes/student-sidebar.php'?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
    <p> we would like to recommend a few hostels that offer discounted rates and are located within walking <br>distance to and from RVTTI institute.
        
         We have provided several options with different pricing to suit your pocket.<br> See the list below. 
         We encourage you to visit the websites and preferrably<br> speak directly to the manager 
         of your preferred hostel to make reservations.  </p>
        <p>List of Rift Valley Training Institute hostels 2023 </p>
        <table>
            <tr>
                <th>
                Hostel
                </th>
                <th>Distance</th>
                <th>Room Rates in Kshs</th>
                <th>Contacts</th>
            </tr>
            <tr>
                <td>
                  Pearl Hostel</td>
            <td>15 minutes <br>walk to school</td>
            <td>Single 3000 <br>Double 4000<br> Bedsitter 5000 <br>two bedroom 7000</td>
            <td>Stella Arusei (Manager)<br> +254733456789 <br>website: pearlshostelke.com<br> Email:info@pearlho</td>
        </tr>
        <tr>
            <td>
               Bowin Hostel</td>
        <td>12 minutes <br>walk to school</td>
        <td>Single 3000 <br>Double 4000<br> Bedsitter 5500 </td>
        <td>kelvin Mwangi(Manager)<br> +254724456789 <br>website: bowinshostelke.com<br> Email:bowinslhostel@gmail.com</td>
    </tr>
    <tr>
        <td>
          Shekin Hostel</td>
    <td>5 minutes <br>walk to school</td>
    <td>Single 4000 <br>Double 5000<br> Bedsitter 7000 </td>
    <td>Brian Kipkogey (Manager)<br> +254732453871 <br>website: shekinhostelke.com<br> Email:shekinhostel!@gmail.com</td>
</tr>
<tr>
    <td>
      Mattias Hostel</td>
<td>10 minutes <br>walk to school</td>
<td>Single 3200 <br>Double 4200<br>two bedroom 7000</td>
<td>Mercy Cheruto(Manager)<br> +254736578435 <br>website: pearlshostelke.com<br> Email:mattias19hostel@gmail.com</td>
</tr>
<tr>
    <td>
      Venus Hostel</td>
<td>10 minutes <br>walk to school</td>
<td>Single 3500 <br>One Bedroom 5000<br>two bedroom 7000</td>
<td>Shaniqwa nyachae(Manager)<br> +254785724149 <br>website: pearlshostelke.com<br> Email:venushostel@gmail.com</td>
</tr>
<tr>
    <td>
      Shatom Hostel</td>
<td>8 minutes <br>walk to school</td>
<td>Single 3500 <br>Double 4500<br> Bedsitter 5500 <br>two bedroom 8000</td>
<td>Kelvin Oindo(Manager)<br> +254778312765 <br>website: shatomhostelke.com<br> Email:shatomhostel43@gmail.com</td>
</tr>
<tr>
    <td>
      Bethany Hostel</td>
<td>4 minutes <br>walk to school</td>
<td>Single 4500 <br>Double 6000<br> Bedsitter 8000 <br>two bedroom 10,000</td>
<td>Esther Wakasi(Manager)<br> +254722673421 <br>website: bethanyhostelke.com<br> Email:bethany@gmail.com</td>
</tr>
        </table>
        <?php include '../includes/footer.php' ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== --> 
</body>
</html>