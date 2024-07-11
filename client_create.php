<?php
    session_start();
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
                    <h4 class="mb-3">Add Clients
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                    
                    <div class="card-body">
                        
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>Client Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label>No. of linked Contacts</label>
                            <input type="text" name="links" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save_client" class="btn btn-primary">Save Client</button>

                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
  
    

<?php include('includes/footer.php');?>
