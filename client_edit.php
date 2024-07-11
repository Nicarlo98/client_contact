<?php
    session_start();
    require 'dbcon.php';
?>

<?php include('includes/header.php');?>
    
    <!-- clients section-->
    <section class="bg-light" id="clients">
        <div class=" container px-4 ">
            <div class="row gx-4 justify-content-center ">
            
            <div class="col-lg-8 ">
                    <h2>Clients</h2>
                    <p class="lead ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  
                    <?php include('message.php');?>
                    <h4 class="mb-3"> Clients Edit
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                
                    <?php
                       if ( isset($_GET['code'])) {
                            $client_code = mysqli_real_escape_string($con ,$_GET['code']);
                            $query = "SELECT * FROM client WHERE code='$client_code'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0 ) {
                                $client = mysqli_fetch_array($query_run);
                                ?>

                                <form action="code.php" method="POST">
                                <input type="hidden" name="client_code" value="<?=$client_code?>">

                                <div class="mb-3">
                            <label>Client Name</label>
                            <input type="text" name="name" value="<?=$client['name'];?> "class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label>No. of linked Contacts</label>
                            <input type="text" name="links" value="<?=$client['links'];?> "class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="update_client" class="btn btn-primary">Update Client</button>

                        </div>
                            </form>
                               <?php
                            }else{

                                echo "<h4>Client Code Not Found</h4>";
                            }
                       } 
                    ?>
                </div>
            </div>
        </div>
    </section>
  

<?php include('includes/footer.php');?>