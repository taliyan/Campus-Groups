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
               <a name="header"></a>
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-header">
                     <h2>Group Name</h2>
                     <p>group.name</p>
                   </div>
                 </div>
               </div>
               <!-- CONTENT HEADER END -->
               <!-- CONTENT SECTION -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block red-bg">
                     <a href="campus-groups-mygroups-group.php">< BACK TO GROUP</a>
                   </div>
                 </div>
               </div>
               <!-- CONTENT SECTION END -->
               <!-- CONTENT SECTION -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-section">
                     <h3>Add Members to the Group</h3>
                   </div>
                 </div>
               </div>
               <!-- CONTENT SECTION END -->
               <!-- CONTENT TABS -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="content-tabs">
                     <ul class="block nav nav-tabs">
                       <li class="active"><a href="campus-groups-mygroups-group-addmembers.php#header">Member Search</a></li>
                       <li><a href="campus-groups-mygroups-group-addmembers-copypaste.php#header">Copy/Paste</a></li>
                       <li><a href="campus-groups-mygroups-group-addmembers-advanced.php#header">Adv. Employee Search</a></li>
                     </ul>
                   </div>
                 </div>
               </div>
               <!-- CONTENT TABS END-->
               <form class="form-horizontal bc-form" role="form">
               <!-- CONTENT SECTION -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-body grey-bg section-top">
                     <div class="form-group search margin-top">
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
                   </div>
                 </div>
               </div>
               <!-- CONTENT SECTION END -->
               <!-- CONTENT SECTION -->
               <div id="membersearch" class="grey-bg">
                 <div id="searchlisting" class="collapse">
                   <!-- CONTENT SECTION - PART --> 
                   <div class="row">
                     <div class="col-xs-12">
                       <div class="block content-body grey-bg section-top"> 
                         <div class="block white-bg">
                           <button class="btn btn-default btn-lg checkall" id="toggle-all">Select All</button>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- CONTENT SECTION - PART END --> 
                   <!-- CONTENT SECTION - PART -->
                   <div class="row">
                     <div class="col-xs-12">
                       <div class="block content-body grey-bg section-middle"> 
                         <div class="block white-bg group-list">
                           <div class="table-responsive table-add">
                             <table class="table">
                               <thead>
                                 <tr>
                                   <th><input type="checkbox" class="checkall"></th>
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
                       <div class="block content-body grey-bg section-middle"> 
                         <a class="btn btn-default btn-lg btn-form-select btn-bc-red pull-right">Add Selected Members</a>
                       </div>
                     </div>
                   </div>
                   <!-- CONTENT SECTION - PART END --> 
                </div>
              </div>
              <!-- CONTENT SECTION END -->
              </form>
              <!-- CONTENT SECTION -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="block content-footer">
                    <div class="row">
                      <div class="col-xs-6">
                        <?php include( 'template-files/campus-groups-modal-pendingmembers.php' ); ?>
                      </div>
                      <div class="col-xs-6">
                        <?php include( 'template-files/campus-groups-modal-savemembers.php' ); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- CONTENT SECTION END -->
              <!-- CONTENT SECTION -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="block content-body white-bg">
                  </div>
                </div>
              </div>
              <!-- CONTENT SECTION END -->
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