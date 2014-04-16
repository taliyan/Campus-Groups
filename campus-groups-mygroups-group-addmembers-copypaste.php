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
                       <li><a href="campus-groups-mygroups-group-addmembers.php#header">Member Search</a></li>
                       <li class="active"><a href="campus-groups-mygroups-group-addmembers-copypaste.php#header">Copy/Paste</a></li>
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
                   <div class="block content-body grey-bg">
                     <div class="form-group search margin-top">
                       <h4>Copy/Paste a list of members:</h4>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- CONTENT SECTION END -->
               <!-- CONTENT SECTION -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-body grey-bg section-middle">
                     <div class="block white-bg">
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
                     </div>
                   </div>
                 </div>
               </div>
               <!-- CONTENT SECTION END -->
               <!-- CONTENT SECTION -->
               <div class="row">
                 <div class="col-xs-12">
                   <div class="block content-body grey-bg">
                     <div class="format-instructions">
                       <h5>Format Instructions</h5>  
                       <ul>
                         <li>Include copy/paste instructions and requirements here</li>
                         <li>Include copy/paste instructions and requirements here</li>
                       </ul>
                       <a href="campus-groups-help.php">Need additional help?  Please refer to the help section for adding members via copy/paste</a>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- CONTENT TABS END -->
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