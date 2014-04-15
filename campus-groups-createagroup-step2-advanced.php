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
                     <ul class="block nav nav-tabs">
                       <li><a href="campus-groups-createagroup-step2.php#steps">Member Search</a></li>
                       <li><a href="campus-groups-createagroup-step2-copypaste.php#steps">Copy/Paste</a></li>
                       <li class="active"><a href="#steps">Adv. Employee Search</a></li>
                     </ul>
                   </div>
                 </div>
               </div>
               <!-- CONTENT TABS END -->
               <form class="form-horizontal bc-form" role="form">
               <!-- CONTENT SECTION -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-body grey-bg">
                     <div class="block white-bg margin-top">
                       <h4>Advanced Employee Search</h4>
                       <div class="form-group">
                         <label for="inputCampusAddress" class="col-sm-3 control-label input-lg">Campus Address:</label>
                         <div class="col-sm-3">
                           <select class="form-control bc-prefix input-lg">
                             <option>contains</option>
                             <option>option</option>
                             <option>option</option>
                           </select>
                         </div>
                         <div class="col-sm-6">
                           <input type="text" class="form-control bc-group-name input-lg" id="inputGroupName" placeholder="Enter Campus Address">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="inputJobTitle" class="col-sm-3 control-label input-lg">Job Title:</label>
                         <div class="col-sm-3">
                           <select class="form-control bc-prefix input-lg">
                             <option>contains</option>
                             <option>option</option>
                             <option>option</option>
                           </select>
                         </div>
                         <div class="col-sm-6">
                           <input type="text" class="form-control bc-group-name input-lg" id="inputGroupName" placeholder="Enter Job Title">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="inputDepartmentName" class="col-sm-3 control-label input-lg">Department Name:</label>
                         <div class="col-sm-3">
                           <select class="form-control bc-prefix input-lg">
                             <option>contains</option>
                             <option>option</option>
                             <option>option</option>
                           </select>
                         </div>
                         <div class="col-sm-6">
                           <input type="text" class="form-control bc-group-name input-lg" id="inputGroupName" placeholder="Enter Department Name">
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="inputClassificationCode" class="col-sm-3 control-label input-lg">Classification Code:</label>
                         <div class="col-sm-9">
                           <select class="form-control bc-prefix input-lg">
                             <option>select classification</option>
                             <option>option</option>
                             <option>option</option>
                           </select>
                         </div>
                       </div>
                       <div class="form-group">
                         <div class="col-sm-12">                              
                           <button type="button" class="btn btn-default btn-bc-red btn-lg pull-right" data-toggle="collapse" data-target="#advancedsearchlisting">Search</button>
                         </div>
                       </div> 
                     </div>
                   </div>
                 </div>
               </div>
               <!-- CONTENT SECTION END --> 
               <!-- CONTENT SECTION --> 
               <div id="advancedsearchlisting" class="collapse">
                 <!-- CONTENT SECTION - PART -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg section-top">         
                       <div class="block white-bg">
                         <a class="btn btn-default btn-lg btn-form-select" id="toggle-all">Select All</a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT SECTION - PART -->
                 <!-- CONTENT SECTION - PART END -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg section-middle">         
                       <div class="block white-bg group-list">
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
                      </div>
                    </div>
                  </div>
                </div>       
                <!-- CONTENT SECTION - PART END -->
                <!-- CONTENT SECTION - PART --> 
                <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg section-bottom text-right">                    
                       <a class="btn btn-default btn-lg btn-form-select btn-bc-red">Add Selected Members</a>
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT SECTION - PART END -->
               </div>
               <!-- CONTENT SECTION END -->
               </form>
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