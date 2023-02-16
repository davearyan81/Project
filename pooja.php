<?php
include("includes/header.php");
include("includes/topbar.php");
include("includes/sidebar.php");
include("config/dbcon.php");
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pooja Service</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Table / Pooja Service</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>

                        <th>PoojaName</th>
                        <th>PoojaImg</th>
                        <th>Approxtime</th>
                        <th>Poojareq</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                $qry = "select * from pooja";
                $result = $con->query($qry);
                while ($row = $result->fetch_assoc()) {

                    $img = "img\\" . $row['poojaimg'];
                    $id = $row['poojaid'];
                    echo $id;
                    ?>
                    <tbody>
                        <tr>

                            <td>
                                <?php echo $row['poojatitle']; ?>
                            </td>
                            <td>
                                <img src="<?php echo $img; ?>" height='300px' width='200px'>


                            </td>

                            <td>
                                <?php echo $row['approxtime']; ?>
                            </td>

                            <td>
                                <?php echo $row['poojareq']; ?>
                            </td>
                            <td>
                                <?php
                                echo "<a href='edit.php?id=$id'>Edit</a>";
                                ?>
                            </td>
                            <td>
                                <?php
                                echo "<a href='delete.php?id=$id'>Delete</a>";
                                ?>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>


    </div>
</div>
</div>


<?php
include("includes/footer.php");
?>