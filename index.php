<?php
    session_start();
    require 'dbcon.php';
?>

<?php include('includes/header.php');?>

    <!-- About section-->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>About this page</h2>
                    <p class="lead">This is a great place to talk about your webpage. This template features:</p>
                    <ul>
                        <li>Mini discribe about Page 5,6 ad 7</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- client section-->
    <section class="bg-light" id="clients">
        <div class=" container px-4 mt-4">
        
            <div class="row gx-4 justify-content-center ">
                <div class="col-lg-8 ">

                    <!-- <p class="center"><?php include('message.php');?></p> -->
                    
                    <h2>Clients</h2>
                    
                    <p class="lead ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                    
                    <div class="card-header">
                        <h5>Client Details
                             <a href="client_create.php" class="btn btn-primary float-end">Add Client</a>
                        </h5>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Client Code</th>
                                    <th>Client Name</th>
                                    <th>No. of Linked Contacts</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query= "SELECT * FROM client";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $client) {
                                            
                                            ?>
                                            <tr>
                                                <td><?= $client['code'] ?></td>
                                                <td><?= $client['name'] ?></td>
                                                <td><?= $client['links'] ?></td>
                                                <td>
                                                    <a href="client_view.php?code<?=$client['code'];?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="client_edit.php?code=<?=$client['code']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button href="submit" name="delete_client" value="<?= $client['code'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        echo "<h5>Sorry! No Record Found</h5>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section id="contact">
        <div class="container px-4 ">
            <div class="row gx-4 justify-content-center ">
                <div class="col-lg-8 ">
                <h2>Contacts</h2>
                    
                    <p class="lead ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                    
                    <div class="card-header">
                        <h5>Contact Details
                             <a href="contact_create.php" class="btn btn-primary float-end">Add Contact</a>
                        </h5>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email Adress</th>
                                    <th>No. of Linked Contacts</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- <tbody>
                                
                            </tbody> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include('includes/footer.php');?>