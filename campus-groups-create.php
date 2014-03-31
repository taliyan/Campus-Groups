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
               <h3>Step 1: Assign Group Properties</h3>
               <form class="form-horizontal" role="form">
                 <div class="form-group">
                   <label for="inputPrefix" class="col-sm-2 control-label">Group Prefix</label>
                   <div class="col-sm-10">
                     <select class="form-control">
                       <option>Prefix</option>
                       <option>Prefix</option>
                       <option>Prefix</option>
                       <option>Prefix</option>
                       <option>Prefix</option>
                     </select>
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputGroupName" class="col-sm-2 control-label">Group Name</label>
                   <div class="col-sm-10">
                     <input type="password" class="form-control" id="inputPassword3" placeholder="Group Name">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputDisplayName" class="col-sm-2 control-label">Display Name</label>
                   <div class="col-sm-10">
                     <input type="password" class="form-control" id="inputPassword3" placeholder="Display Name">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputDisplayName" class="col-sm-2 control-label">Emailable</label>
                   <div class="col-sm-10">
                     <div class="checkbox">
                       <label>
                         <input type="checkbox">
                       </label>
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-default pull-right">Next Step</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
        </div>
      </div>
    </div>
    <!-- MAIN SECTION END -->
 
<?php include( 'template-files/campus-groups-footer.php' ); ?>