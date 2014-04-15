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
               <!-- <form class="form-horizontal bc-form" role="form"> -->
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
                         <li><a href="campus-groups-mygroups-group-properties.php#header">Properties</a></li>
                         <li class="active"><a href="#header">Administrators</a></li>
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
                           <p><strong>View, manage, and edit administrators for this group.</strong><br />Questions? <a href="">Please consult the help section</a>.</p>
                         </div>
                         <div class="col-xs-6">
                           <?php  include( 'template-files/campus-groups-modal-addadministrators.php' ); ?> 
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT SECTION END -->
                 <!-- CONTENT SECTION -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg section-top">
                       <div class="block white-bg">
                         <div class="row">
                           <div class="col-xs-12">
                             <a class="btn btn-default btn-lg" id="toggle-all">Select All</a>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT SECTION END -->
                 <!-- CONTENT SECTION -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg section-bottom">
                       <div class="block white-bg group-list">
                         <!-- TABLE --> 
                         <div class="table-responsive">
                           <table class="table">
                             <thead>
                               <tr>
                                 <th><input type="checkbox"></th>
                                 <th>Administrator Name</th>
                                 <th>Email</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php">Administrator Name</a></td>
                                 <td><a href="campus-groups-member.php">administrator@bc.edu</a></td>
                               </tr>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php">Administrator Name</a></td>
                                 <td><a href="campus-groups-member.php">administrator@bc.edu</a></td>
                               </tr>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php">Administrator Name</a></td>
                                 <td><a href="campus-groups-member.php">administrator@bc.edu</a></td>
                               </tr>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php">Administrator Name</a></td>
                                 <td><a href="campus-groups-member.php">administrator@bc.edu</a></td>
                               </tr>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php">Administrator Name</a></td>
                                 <td><a href="campus-groups-member.php">administrator@bc.edu</a></td>
                               </tr>
                             </tbody>
                           </table>
                        </div>
                        <!-- TABLE END-->
                      </div> 
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT SECTION END -->
                 <!-- CONTENT FOOTER -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-footer"> 
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT FOOTER END -->
               <!-- </form> -->
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