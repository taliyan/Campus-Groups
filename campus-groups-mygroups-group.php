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
               <!--<form class="form-horizontal bc-form" role="form">-->
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
                         <li class="active"><a href="#header">Members</a></li>
                         <li><a href="campus-groups-mygroups-group-properties.php#header">Properties</a></li>
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
                           <p><strong>View, manage, and edit members for this group.</strong><br />Questions? <a href="">Please consult the help section</a>.</p>
                         </div>
                         <div class="col-xs-6 text-right">
                           <a class="btn btn-default btn-lg btn-bc-red"><span class="glyphicon glyphicon-download-alt"></span> Export List</a>
                           <a href="campus-groups-mygroups-group-addmembers.php" class="btn btn-default btn-bc-red btn-lg"><span class="glyphicon glyphicon-plus-sign"></span> Add Members</a> 
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
                         <a class="btn btn-default btn-lg checkall" id="toggle-all">Select All</a>
                         <!--<div class="row">
                           <div class="col-xs-6">
                             <a class="btn btn-default btn-lg checkall" id="toggle-all">Select All</a>
                           </div>
                           <div class="col-xs-6">
                             <ul class="pager pull-right">
                               <li><a href="#">Previous</a></li>
                               <li><a href="#">Next</a></li>
                             </ul>
                           </div>
                         </div>-->
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT SECTION END -->
                 <!-- CONTENT SECTION -->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg section-middle">
                       <div class="block white-bg group-list">
                         <div class="table-responsive">
                           <table class="table">
                             <thead>
                               <tr>
                                 <th><input type="checkbox" class="checkall"></th>
                                 <th>Member Name</th>
                                 <th>Email</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">Member Name</a></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">member@bc.edu</a></td>
                               </tr>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">Member Name</a></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">member@bc.edu</a></td>
                               </tr>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">Member Name</a></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">member@bc.edu</a></td>
                               </tr>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">Member Name</a></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">member@bc.edu</a></td>
                               </tr>
                               <tr>
                                 <td><input type="checkbox"></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">Member Name</a></td>
                                 <td><a href="campus-groups-member.php"  target="_blank">member@bc.edu</a></td>
                               </tr>
                             </tbody>
                           </table>
                        </div>
                      </div>
                     </div>
                   </div>
                 </div>
                 <!-- CONTENT SECTION END -->
                 <!-- CONTENT SECTION-->
                 <div class="row">
                   <div class="col-xs-12">
                     <div class="block content-body grey-bg section-middle">
                       <div class="block red-bg">
                         <div class="row">
                           <div class="col-xs-6 form-inline">
                             <div class="form-group">
                               <label for="inputView">
                               View
                               <select id="inputView" class="form-control">
                                 <option>250</option>
                                 <option>500</option>
                                 <option>1000</option>
                                 <option>All</option>
                               </select> 
                               Per Page
                               </label>
                             </div>
                             <button type="submit" class="btn btn-default btn-no-style">(View All)</button>
                           </div>
                           <div class="col-xs-6">
                             <ul class="pagination pull-right">
                               <li class="disabled">
                                 <a href="#">«</a>
                               </li>
                               <li class="active">
                                 <a href="#">1</a>
                               </li>
                               <li>
                                 <a href="#">2</a>
                               </li>
                               <li>
                                 <a href="#">3</a>
                               </li>
                               <li>
                                 <a href="#">4</a>
                               </li>
                               <li>
                                 <a href="#">5</a>
                               </li>
                               <li>
                                 <a href="#">»</a>
                               </li>
                             </ul>
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
                     <div class="block content-body grey-bg text-right">
                       <a class="btn btn-default btn-lg btn-bc-red">Share with Members</a>
                       <a class="btn btn-default btn-lg btn-bc-red">Delete Members</a>
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
               <!--</form>-->
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