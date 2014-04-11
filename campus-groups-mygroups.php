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
                 <!-- CONTENT BODY -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body group-list">
                       <!-- TABLE --> 
                       <div class="table-responsive">
                         <table class="table">
                           <thead>
                             <tr>
                               <th><input type="checkbox"></th>
                               <th>Group Name</th>
                               <th>Display Name</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <td><input type="checkbox"></td>
                               <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                               <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                             </tr>
                             <tr>
                               <td><input type="checkbox"></td>
                               <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                               <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                             </tr>
                             <tr>
                               <td><input type="checkbox"></td>
                               <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                               <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                             </tr>
                             <tr>
                               <td><input type="checkbox"></td>
                               <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                               <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                             </tr>
                             <tr>
                               <td><input type="checkbox"></td>
                               <td><a href="campus-groups-mygroups-group.php">Group Name</a></td>
                               <td><a href="campus-groups-mygroups-group.php">Display Name</a></td>
                             </tr>
                           </tbody>
                         </table>
                      </div>
                      <!-- TABLE END--> 
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