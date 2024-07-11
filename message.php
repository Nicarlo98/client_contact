<?php

    if (isset($_SESSION['message'])) : 
        
    

?>

<strong>Hi!</strong> <?= $_SESSION['message'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
    unset($_SESSION['message']);
    endif;
?>