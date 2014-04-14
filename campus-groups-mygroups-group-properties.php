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
        <div class="row row-offcanvas row-offcanvas-left">
           <?php include( 'template-files/campus-groups-sidebar.php' ); ?>
           <!-- CONTENT - MAIN SECTION -->
           <div id="content-main" class="col-xs-12 col-sm-9">
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
               <!-- CONTENT TABS -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="content-tabs">
                     <ul class="block content-subheader nav nav-tabs">
                       <li><a href="campus-groups-mygroups-group.php#header">Members</a></li>
                       <li class="active"><a href="#header">Properties</a></li>
                       <li><a href="campus-groups-mygroups-group-administrators.php#header">Administrators</a></li>
                     </ul>
                   </div>
                 </div>
               </div>
               <!-- CONTENT TABS END -->
               <!-- CONTENT SECTION -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-body">
                     <div class="row">
                       <div class="col-xs-6">
                         <p><strong>View and edit properties for this group.</strong><br />Questions? <a href="">Please consult the help section</a>.</p>
                       </div>
                       <div class="col-xs-6">
                         <?php  include( 'template-files/campus-groups-modal-editproperties.php' ); ?> 
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- CONTENT SECTION END -->
               <!-- CONTENT SECTION -->
               <div class="row">
                 <div class="col-xs-12">
                   <hr />
                   <div class="block content-body">
                       <!-- TABLE --> 
                       <div class="table-responsive">
                         <table>
                           <tbody>
                             <tr>
                               <td class="td-label">Display Name:</td>
                               <td>Programming 101</td>
                             </tr>
                             <tr>
                               <td class="td-label">Group Name:</td>
                               <td>course.programming101</td>
                             </tr>
                             <tr>
                               <td class="td-label">Group Type:</td>
                               <td>Course Group</td>
                             </tr>
                             <tr>
                               <td class="td-label">Emailable:</td>
                               <td>Yes</td>
                             </tr>
                             <tr>
                               <td class="td-label">Email:</td>
                               <td><a href="mailto:group.name@bc.edu">group.name@bc.edu</a></td>
                             </tr>
                             <tr>
                               <td class="td-label">Administrators:</td>
                               <td><a href="campus-groups-mygroups-group-administrators.php">View Administrators</a></td>
                             </tr>
                             <tr>
                               <td class="td-label">Members:</td>
                               <td><a href="campus-groups-mygroups-group.php">View Members</a></td>
                             </tr>
                             <tr>
                               <td class="td-label">Date Created:</td>
                               <td>February 20, 2014</td>
                             </tr>
                             <tr>
                               <td class="td-label">Created By:</td>
                               <td><a href="campus-groups-member.php">Mikal Morello</a></td>
                             </tr>
                           </tbody>
                         </table>
                      </div>
                      <!-- TABLE END--> 
                   </div>
                 </div>
               </div>
               <!-- CONTENT SECTION END -->
               <!-- CONTENT FOOTER -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-footer ">
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