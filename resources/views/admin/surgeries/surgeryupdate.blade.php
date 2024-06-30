<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Surgery</h4>
            <p class="card-description">
                Here you can update Surgery
            </p>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputName1">Surgery Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Summary</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Time</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Doctor</label>
                    <input list="doctors" name="doctor" id="doctor">

                    <datalist id="doctors">
                        <option value="">
                    </datalist>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>