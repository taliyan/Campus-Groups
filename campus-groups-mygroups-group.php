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
                     <!-- Nav tabs -->
                     <ul class="block nav nav-tabs">
                       <li class="active"><a href="#header" data-toggle="tab">Header Styles</a></li>
                       <li><a href="#form" data-toggle="tab">Form Styles</a></li>
                       <li><a href="#whitebox" data-toggle="tab">White Boxes</a></li>
                       <li><a href="#lists" data-toggle="tab">List Styles</a></li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="block tab-content">
                       <div class="tab-pane fade in active" id="header">
                         xxx
                       </div>
                       <div class="tab-pane fade" id="form">
                         xxx
                       </div>
                       <div class="tab-pane fade" id="whitebox">
                         xxx
                       </div>
                       <div class="tab-pane fade" id="lists">
                         xxx
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- CONTENT TABS END -->
               <!-- CONTENT BODY -->

               <!-- CONTENT BODY END -->
               <!-- CONTENT FOOTER -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-footer">
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