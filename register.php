<?php
include('includes/header.php');
include('includes/navbar.php');
?>

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
          
          <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
            </form>
      </nav>
     <!-- End of Topbar -->
    <div>
      <div class='p-5'>
      <button id="myButton" class="float-left submit-button btn btn-primary" >Customer Register</button>
    </div>
    <div class="pt-5">
        <table >
          <tr>
            <th class=pl-5>Name</th>
            <th class=pl-5>Email</th>
            <th class=pl-5>Phone</th>
            <th class=pl-5>Address</th>
            <th class=pl-5>Pincode</th>
            <th class=pl-5>State</th>
            <th class=pl-5>District</th>
            <th class=pl-5>Area</th>
            


</tr>
</table>
</div>
</div>
   

        <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
        location.href = "CustomerReg.php";
    };
</script>
        <?php
        include('includes/scripts.php');
        include('includes/footer.php');


?>