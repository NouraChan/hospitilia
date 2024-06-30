<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Profile</h4>
        <p class="card-description">
          Tell us more about yourself.
        </p>
        <form class="forms-sample" method="post" enctype="multipart/form-data" onsubmit="">
          <div class="form-group">
            <label for="exampleInputName1">First Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="First name">
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Last Name</label>
            <input type="text" class="form-control" id="exampleInputName2" placeholder="Last name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Date of birth</label>
            <input type="date" class="form-control" id="exampleInputDate4">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Gender</label>
              <select class="form-control" id="exampleSelectGender">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
          <div class="form-group">
            <label>Profile Photo</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Address</label>
            <input type="text" class="form-control" id="exampleInputAddress1" placeholder="Location">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Bio</label>
            <textarea class="form-control" id="examplebio1" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>