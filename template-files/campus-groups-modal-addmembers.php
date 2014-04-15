<!-- ADD ADMINISTRATOR MODAL -->
<button class="btn btn-default btn-bc-red btn-lg" data-toggle="modal" data-target="#addMembers">
  <span class="glyphicon glyphicon-plus-sign"></span> Add Members
</button> 
<div class="modal fade" id="addMembers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <!-- FORM --> 
    <form class="form-horizontal bc-form" role="form">
      <div class="modal-content">
        <div class="modal-header-close">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle"></span>CLOSE</button>
        </div> 
        <div class="modal-header">
          <div class="row">
            <div class="col-xs-12">
              <h4 class="modal-title" id="myModalLabel">Add Members to the Group</h4>
              <p>Use the following options for adding members to the group.</p>
            </div>
          </div>
        </div>
        <div class="content-tabs">
          <ul class="block nav nav-tabs">
            <li class="active"><a href="#membersearch">Member Search</a></li>
          </ul>
        </div>
        <div class="modal-body">
          <div class="form-group search">
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
          <div class="block white-bg-shadow group-list">
            <div class="row">
              <div class="col-sm-12"> 
                <a class="btn btn-default btn-lg btn-form-select" id="toggle-all">Select All</a>
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
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">Member Name</a></td>
                    <td>member@bc.edu</td>
                    <td>Interface Designer, Student Apps and Services</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">Member Name</a></td>
                    <td>member@bc.edu</td>
                    <td>Interface Designer, Student Apps and Services</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">Member Name</a></td>
                    <td>member@bc.edu</td>
                    <td>Interface Designer, Student Apps and Services</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">Member Name</a></td>
                    <td>member@bc.edu</td>
                    <td>Interface Designer, Student Apps and Services</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td><a href="">Member Name</a></td>
                    <td>member@bc.edu</td>
                    <td>Interface Designer, Student Apps and Services</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"> 
              <a class="btn btn-default btn-lg btn-form-select btn-bc-red pull-right">Add Selected Members</a>
            </div>
          </div>                                
        </div>                             
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
          <a href="campus-groups-createagroup-step3.php" class="btn btn-bc-red btn-lg">Save and Confirm Members</a>
        </div>
      </div>
    <!-- TEMPORARILY REMOVED </form> -->
    <!-- FORM END-->
  </div>
</div>
<!-- ADD ADMINISTRATOR MODAL END -->