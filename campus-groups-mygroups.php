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
               <form class="form-horizontal bc-form" role="form">
                 <!-- CONTENT HEADER -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-header">
                       <h2>My Groups</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur.</p>
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT HEADER END -->
                 <!-- CONTENT SECTION -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg">
                       <div class="block white-bg group-list">
                         <div class="table-responsive">
                           <table class="table groups-list">
                             <thead>
                               <tr>
                                 <th><input type="checkbox" class="checkall"></th>
                                 <th>Group Name</th>
                                 <th>Display Name</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr class="active green">
                                 <td colspan="3">COURSE GROUPS HEADING</td>
                               </tr>
                               <tr class="green">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="green">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="green">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="active white">
                                 <td colspan="3">ADVISEE GROUPS HEADING</td>
                               </tr>
                               <tr class="white">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="white">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="white">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="active black">
                                 <td colspan="3">PERSONAL GROUPS HEADING</td>
                               </tr>
                               <tr class="black">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="black">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="black">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="active red">
                                 <td colspan="3">ADMINISTRATIVE GROUPS HEADING</td>
                               </tr>
                               <tr class="red">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="red">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                               <tr class="red">
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                                 <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT SECTION END -->
                  <!-- CONTENT SECTION -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg text-right">
                       <a class="btn btn-default btn-lg btn-bc-red">Delete Groups</a>
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
               </form>
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