    <h1 class="text-primary"><i class="fas fa-pencil-squire"></i> Update Student <small>Update Student</small></h1>
                <ol class="breadcrumb">
                	<li><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                	<li><a href="index.php?page=all-student"><i class="fas fa-users"></i>All Student</a></li>
                  <li class="active"><i class="fas fa-user-plus"></i>Update Student</li>
                </ol>

           

<div class="row">
	<div class="col-sm-6">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Student Name</label>
				<input type="text" name="name" value="" placeholder="Student Name" class="form-control" required="">
			</div>

			<div class="form-group">
				<label for="roll">Student Roll</label>
				<input type="text" name="roll" value="" placeholder="Student Roll" id="roll" class="form-control" pattern="[0-9]{6}" required="">
			</div>

			<div class="form-group">
				<label for="city">Student City</label>
				<input type="text" name="city" value="" placeholder="Student City" id="city" class="form-control" required="">
			</div>

			<div class="form-group">
				<label for="pcontact">PContact</label>
				<input type="text" name="pcontact" value="" placeholder="01********" id="pcontact" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}" required="">
			</div>

			<div class="form-group">
				<label for="class">Class</label>
				<select id="class" class="form-control " name="class">
					<option value="">Select</option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="5th">5th</option>
				</select>
			</div>
			<div class="form-group">
				<label for="picture">Picture</label>
				<input type="file" name="picture" required="">
				
			</div>
			<div class="form-group">
				<input type="submit" value="update Student" name="update-student" class="btn btn-primary pull-right">
			</div>


		</form>
	</div>
</div>