<?php
    session_start();
    include "config/config.php";
    if (!isset($_SESSION['user_id'])&& $_SESSION['user_id']==null) {
        header("location: index.php");
    }
?>
<?php 
    $id=$_SESSION['user_id'];
    $query=mysqli_query($con,"SELECT * from user where id=$id");
    while ($row=mysqli_fetch_array($query)) {
        $username = $row['username'];
        $name = $row['name'];
        $email = $row['email'];
        $profile_pic = $row['profile_pic'];
        $created_at = $row['created_at'];
  
    }

?>
<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title." ".$name; ?> </title>

        <!-- Bootstrap -->
        <link href="css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--aminate-->
        <link rel="stylesheet" type="text/css" href="css/animate.css/animate.css">
        <!-- Custom Theme Style -->
        <link href="css/custom.min.css" rel="stylesheet">
        
         <!-- <link href="css/sb-admin.css" rel="stylesheet">-->

    </head>

    <body class="nav-md" >
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 1;">
                          <a href="index.php" class="site_title"><i class="fa fa-cog"></i> <span>SGEEO</span></a>
                        </div>
                        <div class="clearfix"></div>

                            <!-- menu profile quick info -->
                                <div class="profile clearfix">
                                    <div class="profile_pic">
                                        <img src="images/profiles/<?php echo $profile_pic;?>" alt="<?php echo $name;?>" class="img-circle profile_img">
                                    </div>
                                    <div class="profile_info">
                                        <span>Bienvenido, <h2><?php echo $name;?></h2></span>
                                       
                                    </div>
                                </div>
                            <!-- /menu profile quick info -->

                        <br />