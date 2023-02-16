<?php

include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form4Example1" class="form-control" />
                            <label class="form-label" for="form4Example1">PoojaID</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form4Example2" class="form-control" />
                            <label class="form-label" for="form4Example2">Pooja Tittle</label>
                        </div>

                        <!-- chosse file -->
                        <div class="form-outline mb-4">
                            <input type="file" id="form4Example2" class="form-control" />
                        </div>

                        <!--description -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                            <label class="form-label" for="form4Example3">Pooja description</label>
                        </div>
                        <!-- Pooja Time -->
                        <div class="form-outline mb-4">
                            <input type="time" id="form4Example2" class="form-control" />
                            <!-- <label class="form-label" for="form4Example2">Pooja Time</label> -->
                        </div>

                        <!-- Pooja Benefit -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form4Example2" class="form-control" />
                            <label class="form-label" for="form4Example2">Pooja Benefit</label>
                        </div>
                        <!-- chosse file -->
                        <div class="form-outline mb-4">
                            <input type="file" id="form4Example2" class="form-control" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- /.content-header -->
</div>



<?php

include("includes/footer.php");

?>