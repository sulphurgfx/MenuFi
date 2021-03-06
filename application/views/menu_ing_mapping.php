<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menu Fi</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        span.multiselect-native-select {
	position: relative
}
span.multiselect-native-select select {
	border: 0!important;
	clip: rect(0 0 0 0)!important;
	height: 1px!important;
	margin: -1px -1px -1px -3px!important;
	overflow: hidden!important;
	padding: 0!important;
	position: absolute!important;
	width: 1px!important;
	left: 50%;
	top: 30px
}
.multiselect-container {
	position: absolute;
	list-style-type: none;
	margin: 0;
	padding: 0
}
.multiselect-container .input-group {
	margin: 5px
}
.multiselect-container>li {
	padding: 0
}
.multiselect-container>li>a.multiselect-all label {
	font-weight: 700
}
.multiselect-container>li.multiselect-group label {
	margin: 0;
	padding: 3px 20px 3px 20px;
	height: 100%;
	font-weight: 700
}
.multiselect-container>li.multiselect-group-clickable label {
	cursor: pointer
}
.multiselect-container>li>a {
	padding: 0
}
.multiselect-container>li>a>label {
	margin: 0;
	height: 100%;
	cursor: pointer;
	font-weight: 400;
	padding: 3px 0 3px 30px
}
.multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
	margin: 0
}
.multiselect-container>li>a>label>input[type=checkbox] {
	margin-bottom: 5px
}
.btn-group>.btn-group:nth-child(2)>.multiselect.btn {
	border-top-left-radius: 4px;
	border-bottom-left-radius: 4px
}
.form-inline .multiselect-container label.checkbox, .form-inline .multiselect-container label.radio {
	padding: 3px 20px 3px 40px
}
.form-inline .multiselect-container li a label.checkbox input[type=checkbox], .form-inline .multiselect-container li a label.radio input[type=radio] {
	margin-left: -20px;
	margin-right: 0
}
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Menu Fi</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url(); ?>index.php/Admin/changePwd"><i class="fa fa-sign-out fa-fw"></i> Change Password</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>index.php/Admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <?php include 'nav_links.php'; ?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Menu-Ingredients-Addons Mapping</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <?php
            
            ?>
            
            <!-- /.row -->
            <div class="row" id="outOfStock">
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Add Ingredient(s) for Menu Item(s)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form method="post" action="<?php echo base_url(); ?>index.php/Admin/addMenuIngMapping" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label for="pwd">Select Menu Item:</label>
                                        <select name="ddlMenu" required class="form-control">
                                            <?php 
                                            if(isset($menu)){
                                                foreach ($menu as $value) {
                                                    echo '<option value="'.$value['Menu_Id'].'">'.$value['Name'].'</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label for="pwd">Ingredients:</label>
                                        <select name="ddlIng" id="dates-field2" required class="form-control">
                                            <?php 
                                            if(isset($ing)){
                                                foreach ($ing as $value) {
                                                    echo '<option value="'.$value['Ingredients_id'].'">'.$value['Name'].'</option>';
                                                }
                                            }
                                            ?>
                                            
                                            
                                        </select>
                                    </div>
									<div class="form-group">
                                        <label for="pwd">Addon Price:</label>
                                        <input type="text" class="form-control" id="addonPrice" name="addonPrice" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Quantity Required:</label>
                                        <input type="text" class="form-control" id="QtyRequired" name="QtyRequired" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Is the Ingredient Optional?</label>
                                        <input type="checkbox"  id="isOptional" name="isOptional">&nbsp;Yes
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6" style="height:300px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Add Addon(s) for Menu Item(s)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form method="post" action="<?php echo base_url(); ?>index.php/Admin/addMenuAddonMapping" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label for="pwd">Select Menu Item:</label>
                                        <select name="ddlMenu" required class="form-control">
                                            <?php 
                                            if(isset($menu)){
                                                foreach ($menu as $value) {
                                                    echo '<option value="'.$value['Menu_Id'].'">'.$value['Name'].'</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label for="pwd">Select Addons:</label>
                                        <select name="ddlAddons" id="dates-field2" required class="form-control">
                                            
                                            <?php 
                                            if(isset($ing)){
                                                foreach ($ing as $value) {
                                                    echo '<option value="'.$value['Ingredients_id'].'">'.$value['Name'].'</option>';
                                                }
                                            }
                                            ?>
                                            
                                            
                                        </select>
                                    </div>
									
									<div class="form-group">
                                        <label for="pwd">Addon Price:</label>
                                        <input type="text" class="form-control" id="addonPrice" name="addonPrice" required>
                                    </div>
									
                                    <div class="form-group">
                                        <label for="pwd">Quantity Required:</label>
                                        <input type="text" class="form-control" id="QtyRequired" name="QtyRequired" required>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            
            <div class="row" id="outOfStock">
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Manage Ingredient(s) Menu Item(s) Mapping
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Menu Item</th>
                                        <th>Ingredient Name</th>
                                        <th>Quantity</th>
                                        <th>Type</th>
                                        <th>Manage</th>
                                    </tr>
                                    <?php 
                                    if(isset($mapped_ing)){
                                        $i=1;
                                        foreach ($mapped_ing as $value) {
                                            echo '<tr><td>'.$i.'</td>';
                                            echo '<td>'.$value['Name'].'</td>';
                                            echo '<td>'.$value['ing_name'].'</td>';
                                            echo '<td>'.$value['quantity_rel'].'</td>';
                                            
                                            if($value['addons']==2){
                                            echo '<td>Optional</td>';
                                            }else if($value['addons']==0){
                                                echo '<td>Mandatory</td>';
                                            }
                                            
                                            echo '<td><a href="'.  base_url().'index.php/Admin/v_editIng/'.$value['id'].'" class="btn btn-warning btn-sm btnEdit"><span class="glyphicon glyphicon-pencil"></span></a>'
                                                    . '<a href="'.  base_url().'index.php/Admin/deleteIng/'.$value['id'].'" class="btn btn-danger btn-sm btnDelete"><span class="glyphicon glyphicon-trash"></span></a></td>';
                                                    echo '</tr>';
                                            $i++; 
                                        }
                                    }
                                    else{
                                        echo '<tr><td>No records available.</td></tr>';
                                    }
                                    ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Manage Addon(s)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Menu Item</th>
                                        <th>Addon Name</th>
                                        <th>Quantity</th>
                                        
                                        <th>Manage</th>
                                    </tr>
                                    <?php 
                                    if(isset($mapped_addons)){
                                        $i=1;
                                        foreach ($mapped_addons as $value) {
                                            echo '<tr><td>'.$i.'</td>';
                                            echo '<td>'.$value['Name'].'</td>';
                                            echo '<td>'.$value['ing_name'].'</td>';
                                            echo '<td>'.$value['quantity_rel'].'</td>';
                                            
                                            
                                            
                                            echo '<td><a href="'.  base_url().'index.php/Admin/v_editAddon/'.$value['id'].'" class="btn btn-warning btn-sm btnEdit"><span class="glyphicon glyphicon-pencil"></span></a>'
                                                    . '<a href="'.  base_url().'index.php/Admin/deleteAddon/'.$value['id'].'" class="btn btn-danger btn-sm btnDelete"><span class="glyphicon glyphicon-trash"></span></a></td>';
                                                    echo '</tr>';
                                            $i++; 
                                        }
                                    }else{
                                        echo '<tr><td>No records available.</td></tr>';
                                    }
                                    ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            
            
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../assets/vendor/raphael/raphael.min.js"></script>
    <script src="../../assets/vendor/morrisjs/morris.min.js"></script>
    <script src="../../assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/dist/js/sb-admin-2.js"></script>
    <script src="../../assets/dist/js/multiselect.js" type="text/javascript"></script>
    <script type="text/javascript">
$(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true
    });
});
</script>
</body>

</html>
