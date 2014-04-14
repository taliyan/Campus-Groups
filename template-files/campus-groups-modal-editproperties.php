<!-- ADD ADMINISTRATOR MODAL -->
<button class="btn btn-default btn-bc-red btn-lg pull-right" data-toggle="modal" data-target="#editProperties">
  <span class="glyphicon glyphicon-pencil"></span> Edit Properties
</button>  
<div class="modal fade" id="editProperties" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
              <h4 class="modal-title" id="myModalLabel">Edit Group Properties</h4>
              <p>Please note that only editable fields are listed.</p>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputDisplayName" class="col-sm-3 control-label input-lg">Display Name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control bc-group-name input-lg" id="inputDisplayName" placeholder="Display Name"><a href="course-groups-help.php"><span class="glyphicon glyphicon-question-sign"></span></a>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmailable" class="col-sm-3 control-label input-lg">Emailable:</label>
            <div class="col-sm-9">
              <select class="form-control bc-prefix input-lg">
                <option>Yes</option>
                <option>No</option>
              </select>
              <a href="course-groups-help.php"><span class="glyphicon glyphicon-question-sign"></span></a>
            </div>
          </div>                        
        </div>                             
        <div class="modal-footer">
           <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
          <a href="campus-groups-createagroup-step3.php" class="btn btn-bc-red btn-lg">Save</a>
        </div>
      </div>
    </form>
    <!-- FORM END-->
  </div>
</div>
<!-- ADD ADMINISTRATOR MODAL END -->