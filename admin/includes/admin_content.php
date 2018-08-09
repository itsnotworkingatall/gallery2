<?php
/**
 * Created at:
 * Date: 08.08.2018
 * Time: 22:47
 */

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard
                <small>Subheading</small>
            </h1>

            <h2>
                <?php



                $result = User::getUserById(3);
                echo $result['username'] . "<br>";


                echo User::findAllUsers()->num_rows;

                ?>
            </h2>

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                </li>

            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
