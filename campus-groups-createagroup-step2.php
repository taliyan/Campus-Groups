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
                   <div class="block content-section">
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
                       <li class="active"><a href="#steps">Member Search</a></li>
                       <li><a href="campus-groups-createagroup-step2-copypaste.php#steps">Copy/Paste</a></li>
                       <li><a href="campus-groups-createagroup-step2-advanced.php#steps">Adv. Employee Search</a></li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="block tab-content">
                       <div class="tab-pane fade in active" id="membersearch">
                         <form class="form-horizontal bc-form" role="form">
                           <div class="form-group search">
                             <div class="col-sm-7">   
                               <span class="glyphicon glyphicon-search"></span>                           
                               <input type="search" class="form-control input-lg" placeholder="Search input">
                             </div>
                             <div class="col-sm-2">                              
                               <button type="button" class="btn btn-default btn-bc-red btn-lg" data-toggle="collapse" data-target="#searchlisting">Search</button>
                             </div>
                             <div class="col-sm-3">                              
                               <button id="clear-search" type="button" class="btn btn-no-style" data-toggle="collapse" data-target="#searchlisting">Clear Search</button>
                             </div>
                           </div>
                           <!-- SEARCH LISTING --> 
                           <div id="searchlisting" class="collapse"> 
                             <div class="block white-bg margin-top group-list">
                               <a class="btn btn-default btn-lg btn-form-select" id="toggle-all">Select All</a>
                               <!-- TABLE --> 
                               <div class="table-responsive table-add">
                                 <table class="table">
                                   <thead>
                                     <tr>
                                       <th><input type="checkbox"></th>
                                       <th>Member Name</th>
                                       <th>Email</th>
                                       <th>Title</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Member Name</td>
                                       <td>member@bc.edu</td>
                                       <td>Interface Designer, Student Apps and Services</td>
                                     </tr>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Member Name</td>
                                       <td>member@bc.edu</td>
                                       <td>Interface Designer, Student Apps and Services</td>
                                     </tr>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Member Name</td>
                                       <td>member@bc.edu</td>
                                       <td>Interface Designer, Student Apps and Services</td>
                                     </tr>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Member Name</td>
                                       <td>member@bc.edu</td>
                                       <td>Interface Designer, Student Apps and Services</td>
                                     </tr>
                                     <tr>
                                       <td><input type="checkbox"></td>
                                       <td>Member Name</td>
                                       <td>member@bc.edu</td>
                                       <td>Interface Designer, Student Apps and Services</td>
                                     </tr>
                                   </tbody>
                                 </table>
                              </div>
                              <!-- TABLE END--> 
                             </div>
                             <div class="row">
                               <div class="col-sm-12"> 
                                 <a class="btn btn-default btn-lg btn-form-select btn-bc-red pull-right">Add Selected Members</a>
                               </div>
                             </div>
                           </div>
                           <!-- SEARCH LISTING END --> 
                         </form>
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
                         <?php include( 'template-files/campus-groups-modal-pendingmembers.php' ); ?>
                       </div>
                       <div class="col-xs-6">
                         <?php include( 'template-files/campus-groups-modal-confirmmembers.php' ); ?>
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