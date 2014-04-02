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
   <!-- MAIN SECTION -->
    <div id="main-top">
      <div class="container">
        <div class="row">
          <a class="btn btn-breadcrumb btn-sidebar-show" data-toggle="offcanvas" data-target="#breadcrumb-container">Show Sidebar</span></a> 
          <a class="btn btn-breadcrumb" data-toggle="collapse" data-target="#breadcrumb-container"><span class="glyphicon glyphicon-map-marker"></span></a>
          <div class="clearfix"></div>     
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
    <div class="clearfix"></div>
    <div id="main" class="create-a-group">
      <div class="container">
        <div class="row ">
           <div class="col-sm-12">
             <div class="content-header">
               <div class="pull-right"><a href="campus-groups-help.php"><button type="button" class="btn btn-default">Need Help?</button></a></div>
               <h2>Create New Group</h2>
               <p>Instructions about starting a new group here</p>
             </div>
             <div class="content-subheader"> 
               <?php include( 'template-files/campus-groups-create-steps.php' ); ?>
             </div>
             <div class="content-main">
               <h3>Step 2: Add Members to the Group</h3>
               <p>Use the following options to adding members to the group:</p>
               <!-- CREATE A GROUP OPTIONS -->
               <!-- Nav tabs -->
               <ul class="nav nav-tabs">
                 <li class="active"><a href="#member" data-toggle="tab">Member Search</a></li>
                 <li><a href="#upload" data-toggle="tab">File Upload</a></li>
                 <li><a href="#paste" data-toggle="tab">Copy/Paste</a></li>
                 <li><a href="#employee" data-toggle="tab">Employee Search</a></li>
               </ul>
               <!-- Tab panes -->
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
               <div class="clearfix"></div>
               <!-- CREATE A GROUP OPTIONS END -->
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
        </div>
      </div>
    </div>
    <!-- MAIN SECTION END -->
 
<?php include( 'template-files/campus-groups-footer.php' ); ?>