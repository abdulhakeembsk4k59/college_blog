<?php
    include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Blog </title>
    <div class="headings">
        <img src="logo.jpg" alt="logo.jpg">
        <H1>QIS College Of Engineering & Technology</H1>
        <p>Vengamukkapalem, Ongole, Andhra Pradesh.</P>
    </div>
    <h3>COLLEGE ALUMNI BLOG</h3>
</head>
<body>
<div class="container mt-5">

<?php if(isset($_REQUEST['info'])){?>
        <?php if($_REQUEST['info'] == "deleted"){?>
            <div class="alert alert-success" role="alert">
                Post has been deleted successfully        
            </div>    
        <?php }?>
    <?php }?>


    <?php if(isset($_REQUEST['info'])){?>
        <?php if($_REQUEST['info'] == "edited"){?>
            <div class="alert alert-success" role="alert">
                Post has been edited successfully        
            </div>    
        <?php }?>
    <?php }?>


<?php if(isset($_REQUEST['info'])){?>
        <?php if($_REQUEST['info'] == "added"){?>
            <div class="alert alert-success" role="alert">
                Post has been added successfully        
            </div>    
        <?php }?>
    <?php }?>

  
    <div class="text-center">
        <a href="create.php" class="btn btn-dark"> + Create a new post</a>
    </div>
    <div class="row">
        <?php foreach($query as $q){?>
        <div class="col-4 d-flex justify-content-center align-item-center">
            <div class="card text-white bg-dark mt-5" style="border-radius:15px; width: 100%">
                <div class="card-body" style="width: 100%;">
                    <h5 class="card-title" style="text-align:center"><?php echo $q['title'];?></h5>
                    <p class="card-text"><?php echo $q['content'];?></p>
                </div>
                <div class="d-flex mt-2 justify-content-center align items-center">
                        <a href="edit.php?id=<?php echo $q['id'];?>" class="button btn-light btn-sm">Edit </a>
                        <form method="POST">
                        <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                        <button class="button btn-danger btns-sm ml-2" name="delete" style="border-radius:5px">Delete</button>
                        </form>
                    </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
<script src="https://cdn.1sdelivr.net/npm/popper.1s01.16.1/dist/und/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>