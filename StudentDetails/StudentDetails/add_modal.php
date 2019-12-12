<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" required>
					</div>
				</div>
                             <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Rollo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="rollno" required>
					</div>
				</div>
                             <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Course:</label>
					</div>
					<div class="col-sm-10">
						<!--<input type="text" class="form-control" name="class" required>-->
                                            <select value="coruse"><option value="UG">UG</option>
<option value="PG">PG</option>
                                            </select>
                                        </div>
				</div>
                            
                               <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">YEAR:</label>
					</div>
					<div class="col-sm-10">
						<!--<input type="text" class="form-control" name="class" required>-->
                                            <select value="yr"><option value="yr">I</option>
<option value="yr">II</option>
<option value="yr">III</option>
<option value="yr">IV</option>
<option value="yr">V</option>
                                            </select>
                                        </div>
				</div>
                            <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Department:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="department" required>
	

                                       
                                        </div>
				</div>
                            
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Batch:</label>
					</div>
					<div class="col-sm-10">
						<!--<input type="text" class="form-control" name="batch" required>-->
	                                <select value="batch"><option value="year">2012-2105</option>
<option value="year">2012-2016</option>
<option value="year">2013-2017</option>
<option value="yar">2013-2016</option>
<option value="year">2014-2018</option>
                                            </select>
                                        </div>
				</div>
                           
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Alumni:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alumni" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			            </div>

        </div>
    </div>
</div>