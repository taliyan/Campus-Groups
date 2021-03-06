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
                <!-- CONTENT SECTION -->
                <div class="row">
                  <div class="col-xs-12">
                    <div class="block content-section">
                      <h3>Step 3: Confirmation</h3>
                      <p>Set group administrators and confirm group details.</p>
                      <h4>Group Details:</h4>
                      <table class="table-details">
                        <tr>
                          <td class="td-label">Group Prefix:</td>
                          <td>its.staff</td>
                        </tr>
                        <tr>
                          <td class="td-label">Group Name:</td>
                          <td>Group Name</td>
                        </tr>
                        <tr>
                          <td class="td-label">Display Name:</td>
                          <td>Display Name</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- CONTENT SECTION END -->
                <!-- CONTENT SECTION -->
                <div class="row">
                  <div class="col-xs-12">
                    <div class="block grey-bg">
                      <h4>Group Administrators</h4>
                      <div class="row">
                        <div class="col-sm-8"> 
                          <p>For this type of group, you must assign at least one additional administrator:</p>
                        </div>
                        <div class="col-sm-4 text-right">
                          <?php include( 'template-files/campus-groups-modal-addadministrators.php' ); ?> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- CONTENT SECTION END-->
                <!-- CONTENT SECTION -->
                <div class="row">
                  <div class="col-xs-12">
                    <div class="block grey-bg section-top">
                      <div class="block white-bg">
                          <h5>Current Administrators</h5>
                          <a class="btn btn-default btn-lg checkall" id="toggle-all">Select All</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- CONTENT SECTION END-->
                <!-- CONTENT SECTION -->
                <div class="row">
                  <div class="col-xs-12">
                    <div class="block grey-bg section-middle">
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
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- CONTENT SECTION END -->
                <!-- CONTENT SECTION END -->
                <div class="row">
                  <div class="col-xs-12">
                    <div class="block grey-bg text-right">
                       <a class="btn btn-default btn-lg btn-form-select btn-bc-red">Add Selected Members</a>
                    </div>
                  </div>
                </div>
                <!-- CONTENT SECTION END-->
                <!-- CONTENT FOOTER -->
                <div class="row">
                  <div class="col-xs-12">
                    <div class="block content-footer">
                      <div class="row">
                        <div class="col-xs-12 text-right">
                          <a href="campus-groups-mygroups-group.php" class="btn btn-default btn-bc-red btn-lg" > 
                            Save and Create Group >
                          </a> 
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