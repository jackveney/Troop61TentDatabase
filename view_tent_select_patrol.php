<?php
  $page_title = 'Tents By Patrol Selection';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
  $patrols = view_all_patrols();


?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
<div class="pull-left">
		<a href="view_tent.php" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Return To All Tents</a></div>
	</div>
		<div class="panel-body">
          <table id="printTable" class="table table-bordered">

            <tbody>
<tr><td class="text-center"><a href=view_tent_patrol.php?patrol=Dragon>Dragon Patrol</a></td> </tr>
<tr><td class="text-center"><a href=view_tent_patrol.php?patrol=Falcon>Falcon Patrol</a></td> </tr>
<tr><td class="text-center"><a href=view_tent_patrol.php?patrol=Phoenix>Phoenix Patrol</a></td> </tr>
<tr><td class="text-center"><a href=view_tent_patrol.php?patrol=Not+Assigned+To+A+Patrol>Not Assigned To A Patrol</a></td></tr>
            </tbody>
	  </table>
    </div>
  </div>
  
  <?php echo remove_junk($patrols['id']); ?>
  
  <?php include_once('layouts/footer.php'); ?>