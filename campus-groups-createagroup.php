<!DOCTYPE html>
<html lang="en">
  <?php include( 'template-files/campus-groups-head.php' ); ?>
<body>
  <a class="sr-only" href="#content">Skip to main content</a>
  <?php include( 'template-files/campus-groups-banner.php' ); ?>
  <?php include( 'template-files/campus-groups-header.php' ); ?>
  <?php include( 'template-files/campus-groups-highlight.php' ); ?>
  <?php include( 'template-files/campus-groups-toolbar.php' ); ?>
  <!-- CONTENT SECTION -->
    <section id="content">
      <div class="container">
        <div class="row">
           <!-- CONTENT - MAIN SECTION -->
           <div id="content-main" class="col-xs-12">
             <div class="white-bg-shadow">
               <!-- CONTENT HEADER -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-header">
                     <h2>Create New Group</h2>
                     <p>Instructions about starting a new group go here</p>
                   </div>
                 </div>
               </div>
               <!-- CONTENT HEADER END -->
               <!-- CONTENT SUBHEADER -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-subheader">
                     <?php include( 'template-files/campus-groups-create-steps.php' ); ?>
                   </div>
                 </div>
               </div>
               <!-- CONTENT SUBHEADER END -->
               <!-- CONTENT BODY -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-body">
                     <h3>Step 1: Assign Group Properties</h3>
                       <!-- FORM EXAMPLES -->
                       <form class="form-horizontal bc-form" role="form">
                         <div class="form-group">
                           <label for="inputGroupPrefix" class="col-sm-3 control-label input-lg">Group Prefix:</label>
                           <div class="col-sm-9">
                             <select class="form-control bc-prefix input-lg">
                               <option>morellmi</option>
                               <option>prefix</option>
                               <option>prefix</option>
                               <option>prefix</option>
                               <option>prefix</option>
                             </select>
                             <a href="course-groups-help.php"><span class="glyphicon glyphicon-question-sign"></span></a>
                           </div>
                         </div>
                         <div class="form-group">
                           <label for="inputGroupName" class="col-sm-3 control-label input-lg">Group Name:</label>
                           <div class="col-sm-9">
                             <input type="text" class="form-control bc-group-name input-lg" id="inputGroupName" placeholder="Group Name"><a href="course-groups-help.php"><span class="glyphicon glyphicon-question-sign"></span></a>
                           </div>
                         </div>
                         <div class="form-group">
                           <label for="inputDisplayName" class="col-sm-3 control-label input-lg">Display Name:</label>
                           <div class="col-sm-9">
                             <input type="text" class="form-control bc-display-name input-lg" id="inputDisplayName" placeholder="Display Name"><a href="course-groups-help.php"><span class="glyphicon glyphicon-question-sign"></span></a>
                             <span class="help-block">EXAMPLE: group.name.description</span>
                           </div>
                         </div>
                         <div class="form-group">
                           <label for="inputEmailable" class="col-sm-3 control-label input-lg">Emailable:</label>
                           <div class="col-sm-9">
                             <div class="checkbox">
                               <input type="checkbox" id="inputEmailable"><a href="course-groups-help.php"><span class="glyphicon glyphicon-question-sign"></span></a>
                             </div>
                           </div>
                         </div>
                         <div class="form-group">
                           <div class="col-sm-offset-3 col-sm-7 col-sm-offset-2">                              
                             <a href="campus-groups-createagroup-step2.php#steps" class="btn btn-default btn-bc-red btn-lg pull-right">Next Step</a>
                           </div>
                         </div>
                       </form>
                       <!-- FORM EXAMPLES END --> 
                   </div>
                 </div>
               </div>
               <!-- CONTENT BODY END -->
               <!-- CONTENT FOOTER -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-footer">
                   </div>
                 </div>
               </div>
               <!-- CONTENT FOOTER END -->
             </div>
           </div>
           <!-- CONTENT - MAIN SECTION END -->
        </div>
      </div>
    </section>
  <!-- CONTENT SECTION END -->
  <?php include( 'template-files/campus-groups-footer.php' ); ?>
  <?php include( 'template-files/campus-groups-scripts.php' ); ?>
  </body>
</html>