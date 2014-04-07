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
                     <h3>Step 2: Add Members</h3>
                   </div>
                 </div>
               </div>
               <!-- CONTENT BODY END -->
               <!-- CONTENT TABS -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="content-tabs">
                     <!-- Nav tabs -->
                     <ul class="block nav nav-tabs">
                       <li class="active"><a href="#membersearch" data-toggle="tab">Member Search</a></li>
                       <li><a href="#copypaste" data-toggle="tab">Copy/Paste</a></li>
                       <li><a href="#employeesearch" data-toggle="tab">Adv. Employee Search</a></li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="block tab-content">
                       <div class="tab-pane fade in active" id="membersearch">
                         <!-- FORM EXAMPLES -->
                         <form class="form-horizontal bc-form" role="form">
                           <div class="form-group">
                             <div class="col-sm-7">                              
                               <input type="search" class="form-control input-lg" placeholder="Search input">
                             </div>
                             <div class="col-sm-2">                              
                               <button type="button" class="btn btn-default btn-bc-red btn-lg" data-toggle="collapse" data-target="#searchlisting">Search</button>
                             </div>
                             <div class="col-sm-3">                              
                               <button type="button" class="" data-toggle="collapse" data-target="#searchlisting">Clear Search</button>
                             </div>
                           </div>
                           <!-- SEARCH LISTING --> 
                           <div id="searchlisting" class="collapse">
                             <div class="block white-bg margin-top group-list">
                               <a class="btn btn-default btn-lg btn-form-select">Select All</a>
                               <!-- TABLE --> 
                               <div class="table-responsive">
                                 <table class="table">
                                   <thead>
                                     <tr>
                                       <th><input type="checkbox"></th>
                                       <th>Table heading</th>
                                       <th>Table heading</th>
                                       <th>Table heading</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                     </tr>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                     </tr>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                     </tr>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                     </tr>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                       <td>Table cell</td>
                                     </tr>
                                   </tbody>
                                 </table>
                              </div>
                              <!-- TABLE END--> 
                             </div>
                           </div>
                           <!-- SEARCH LISTING END --> 
                         </form>
                         <!-- FORM EXAMPLES END --> 
                       </div>
                       <div class="tab-pane fade" id="copypaste">
                         xxx
                       </div>
                       <div class="tab-pane fade" id="employeesearch">
                         xxx
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- CONTENT TABS END -->
               <!-- CONTENT FOOTER -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-footer">
                     <div class="row">
                       <div class="col-xs-6">
                         <a class="btn btn-default btn-lg">View Pending Members</a>
                       </div>
                       <div class="col-xs-6">
                         <a class="btn btn-default btn-bc-red btn-lg pull-right">Next Step</a>
                       </div>
                     </div>
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