<!-- MODAL EXAMPLE -->
<button class="btn btn-default btn-bc-red btn-lg pull-right" data-toggle="modal" data-target="#confirmMembers">
  Confirm Additions
</button> 
<div class="modal fade" id="confirmMembers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <!-- FORM -->
    <form class="form-horizontal bc-form" role="form"> 
      <div class="modal-content">
        <div class="modal-header-close">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle"></span>CLOSE</button>
        </div> 
        <div class="modal-header">
          <div class="row">
            <div class="col-xs-9">
              <h4 class="modal-title" id="myModalLabel">Confirm Members</h4>
              <p>Once confirmed, members will be added to this group.</p>
            </div>
            <div class="col-xs-3">
              <a href="campus-groups-createagroup-step3.php" class="btn btn-bc-red btn-lg pull-right">Confirm Members</a>
            </div>
          </div>
        </div>
        <div class="modal-body">
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
          </div>
          <div class="row">
            <div class="col-sm-12"> 
              <a class="btn btn-default btn-lg btn-form-select btn-bc-red pull-right">Remove Selected</a>
            </div>
          </div>                      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
          <a href="campus-groups-createagroup-step3.php" class="btn btn-bc-red btn-lg">Confirm Members</a>
        </div>
      </div>
    </form>  
    <!-- FORM END -->
  </div>
</div>
<!-- MODAL EXAMPLE END -->