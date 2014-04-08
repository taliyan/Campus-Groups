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
                         <!-- FORM EXAMPLE -->
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
                         <!-- FORM EXAMPLE END --> 
                       </div>
                       <div class="tab-pane fade" id="copypaste">
                         <h4>Copy/Paste a list of members:</h4>
                         <div class="block white-bg margin-top">
                          <!-- FORM EXAMPLE -->
                          <form class="form-horizontal bc-form" role="form">
                            <div class="form-group">
                              <label for="inputCopyPaste" class="col-sm-3 control-label">Enter a list of Members:<br /><small>(one per line)</small></label>
                              <div class="col-sm-9">
                                <textarea class="form-control" rows="8" placeholder="Add member list here"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default btn-bc-red pull-right">Add Members</button>
                              </div>
                            </div>
                          </form>
                          <!-- FORM EXAMPLE END -->
                         </div>
                         <!-- FORM INSTRUCTIONS -->
                         <div class="format-instructions">
                           <h5>Format Instructions</h5>  
                           <ul>
                             <li>Include copy/paste instructions and requirements here</li>
                             <li>Include copy/paste instructions and requirements here</li>
                           </ul>
                           <a href="campus-groups-help.php">Need additional help?  Please refer to the help section for adding members via copy/paste</a>
                         </div>
                         <!-- FORM INSTRUCTIONS END-->
                       </div>
                       <div class="tab-pane fade" id="employeesearch">
                         <div class="block white-bg margin-top">
                           <h4>Advanced Employee Search</h4>
                             <!-- FORM EXAMPLES -->
                             <form class="form-horizontal bc-form" role="form">
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
                             <div id="advancedsearchlisting" class="collapse">
                               <!-- SEARCH LISTING --> 
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
                               <!-- SEARCH LISTING END --> 
                             </form>
                             <!-- FORM EXAMPLES END --> 
                         </div>
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
                         <!-- MODAL EXAMPLE -->
                         <!-- Button trigger modal -->
                         <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#pendingMembers">
                           View Pending Members
                         </button> 
                         <!-- Modal -->
                         <div class="modal fade" id="pendingMembers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header-close">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">CLOSE &times;</button>
                               </div> 
                               <div class="modal-header">
                                 <div class="row">
                                   <div class="col-xs-9">
                                     <h4 class="modal-title" id="myModalLabel">Confirm Members</h4>
                                     <p>Once confirmed, members will be added to this group.</p>
                                   </div>
                                   <div class="col-xs-3">
                                     <a href="campus-groups-step3.php" class="btn btn-bc-red btn-lg pull-right">Confirm Members</a>
                                   </div>
                                 </div>
                               </div>
                               <div class="modal-body">
                                 <!-- FORM --> 
                                 <form class="form-horizontal bc-form" role="form">
                                   <div class="block white-bg-shadow group-list">
                                     <div class="row">
                                       <div class="col-sm-3"> 
                                       <a class="btn btn-default btn-lg btn-form-select" id="toggle-all">Select All</a>
                                       </div>
                                       <div class="col-sm-9">
                                         <p><a href="campus-groups-help.php" class="help-message"><span class="glyphicon glyphicon-warning-sign"></span>
Need Help? View the topics relating to adding members to a group</a></p>
                                       </div>
                                     </div>
                                     <!-- TABLE --> 
                                     <div class="table-responsive table-add">
                                       <table class="table">
                                         <thead>
                                           <tr>
                                             <th><input type="checkbox"></th>
                                             <th>Member Name</th>
                                             <th>Email</th>
                                             <th>Title</th>
                                             <th>Remove</th>
                                           </tr>
                                         </thead>
                                         <tbody>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                         </tbody>
                                       </table>
                                     </div>
                                     <!-- TABLE END--> 
                                   </div>
                                   <div class="row">
                                     <div class="col-sm-12"> 
                                       <a class="btn btn-default btn-lg btn-form-select btn-bc-red pull-right">Remove Selected</a>
                                     </div
                                   ></div>
                                 </form>
                                 <!-- FORM END-->                                
                               </div>

                             <div class="modal-footer">
                               <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
                               <a href="" class="btn btn-bc-red btn-lg">Save Changes</a>
                             </div>
                           </div>
                         </div>
                       <!-- MODAL EXAMPLE END -->
                       </div>
                       </div>
                       <div class="col-xs-6">
                         <!-- MODAL EXAMPLE -->
                         <!-- Button trigger modal -->
                         <button class="btn btn-default btn-bc-red btn-lg pull-right" data-toggle="modal" data-target="#confirmMembers">
                           Next Step
                         </button> 
                         <!-- Modal -->
                         <div class="modal fade" id="confirmMembers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="modal-header-close">
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">CLOSE &times;</button>
                               </div> 
                               <div class="modal-header">
                                 <div class="row">
                                   <div class="col-xs-9">
                                     <h4 class="modal-title" id="myModalLabel">Confirm Members</h4>
                                     <p>Once confirmed, members will be added to this group.</p>
                                   </div>
                                   <div class="col-xs-3">
                                     <a href="campus-groups-step3.php" class="btn btn-bc-red btn-lg pull-right">Confirm Members</a>
                                   </div>
                                 </div>
                               </div>
                               <div class="modal-body">
                                 <!-- FORM --> 
                                 <form class="form-horizontal bc-form" role="form">
                                   <div class="block white-bg-shadow group-list">
                                     <div class="row">
                                       <div class="col-sm-3"> 
                                       <a class="btn btn-default btn-lg btn-form-select" id="toggle-all">Select All</a>
                                       </div>
                                       <div class="col-sm-9">
                                         <p><a href="campus-groups-help.php" class="help-message"><span class="glyphicon glyphicon-warning-sign"></span>
Need Help? View the topics relating to adding members to a group</a></p>
                                       </div>
                                     </div>
                                     <!-- TABLE --> 
                                     <div class="table-responsive table-add">
                                       <table class="table">
                                         <thead>
                                           <tr>
                                             <th><input type="checkbox"></th>
                                             <th>Member Name</th>
                                             <th>Email</th>
                                             <th>Title</th>
                                             <th>Remove</th>
                                           </tr>
                                         </thead>
                                         <tbody>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                           <tr>
                                             <td><input type="checkbox"></td>
                                             <td><a href="">Member Name</a></td>
                                             <td>member@bc.edu</td>
                                             <td>Interface Designer, Student Apps and Services</td>
                                             <td><a><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                                           </tr>
                                         </tbody>
                                       </table>
                                     </div>
                                     <!-- TABLE END--> 
                                   </div>
                                   <div class="row">
                                     <div class="col-sm-12"> 
                                       <a class="btn btn-default btn-lg btn-form-select btn-bc-red pull-right">Remove Selected</a>
                                     </div
                                   ></div>
                                 </form>
                                 <!-- FORM END-->                                
                               </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
                               <a href="campus-groups-step3.php" class="btn btn-bc-red btn-lg">Confirm Members</a>
                             </div>
                           </div>
                         </div>
                         <!-- MODAL EXAMPLE END -->
                         </div>
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