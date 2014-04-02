<?php include( 'template-files/campus-groups-header.php' ); ?>
 
<!-- HIGHLIGHT -->
    <div id="highlight">
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <!--<div class="branding"></div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
   <!-- HIGHLIGHT END -->
   <!-- MAIN TOP SECTION -->
    <div id="main-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a class="btn btn-breadcrumb btn-sidebar-show" data-toggle="offcanvas" data-target="#breadcrumb-container">Show Sidebar</a> 
            <a class="btn btn-breadcrumb" data-toggle="collapse" data-target="#breadcrumb-container"><span class="glyphicon glyphicon-map-marker"></span></a>
          </div>
        </div>
        <div class="clearfix"></div>  
        <div class="row">    
          <div class="col-md-12">
            <div id="breadcrumb-container" class="collapse"> 
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li> 
                <li><a href="#">Link</a></li>
                <li class="active">Link Active</li> 
              </ol>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <!-- MAIN TOP SECTION END-->
    <div class="clearfix"></div>
    <!-- MAIN SECTION END-->
    <div id="main" class="create-a-group">
      <div class="container">
        <div class="row content-header">
          <div class="col-sm-12">
            <div class="pull-right"><a href="campus-groups-help.php"><button type="button" class="btn btn-default">Need Help?</button></a></div>
            <h2>Create New Group</h2>
            <p>Instructions about starting a new group here</p>
           </div>
         </div>
         <div class="row content-subheader">  
           <div class="col-sm-12">
             <?php include( 'template-files/campus-groups-create-steps.php' ); ?>
           </div>
         </div>
         <div class="row content-main">
           <div class="col-sm-12">
             <h3>Step 2: Add Members to the Group</h3>
             <p>Use the following options to adding members to the group:</p>
           </div>
         </div>
         <!-- CREATE A GROUP OPTIONS -->
         <div class="row">
           <div class="col-sm-12">
             <ul class="nav nav-tabs">
               <li class="active"><a href="#member" data-toggle="tab">Member Search</a></li>
               <li><a href="#upload" data-toggle="tab">File Upload</a></li>
               <li><a href="#paste" data-toggle="tab">Copy/Paste</a></li>
               <li><a href="#employee" data-toggle="tab">Employee Search</a></li>
             </ul>
             <div class="tab-content">
               <div class="tab-pane fade in active" id="member">
                 <?php include( 'template-files/campus-groups-create-search.php' ); ?>
               </div>
               <div class="tab-pane fade" id="upload">
                 <?php include( 'template-files/campus-groups-create-upload.php' ); ?>
               </div>
               <div class="tab-pane fade" id="paste">
                 <?php include( 'template-files/campus-groups-create-paste.php' ); ?>
               </div>
               <div class="tab-pane fade" id="employee">
                 <?php include( 'template-files/campus-groups-create-employee.php' ); ?>
               </div>
             </div>
           </div>
         </div>
         <!-- CREATE A GROUP OPTIONS END --> 
         <div class="clearfix"></div>
         <!-- CREATE A GROUP BOTTOM -->
         <div class="row ">
           <div class="col-sm-6">
             <button type="submit" class="btn btn-default pull-left">View Pending Members</button>
           </div>
           <div class="col-sm-6">
             <button type="submit" class="btn btn-default pull-right">Next Step</button>
           </div>
         </div>
         <!-- CREATE A GROUP BOTTOM END -->
       </div>
     </div>
    <!-- MAIN SECTION END -->
 
<?php include( 'template-files/campus-groups-footer.php' ); ?>