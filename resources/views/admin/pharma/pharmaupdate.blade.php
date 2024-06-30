<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Pharma</h4>
            <p class="card-description">
                Here you can update pharma
            </p>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputName1">Visit No.</label>
                    <input list="visits" name="visit" id="visit">

                    <datalist id="visits">
                        <option value="">
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Doctor</label>
                    <input list="doctors" name="doctor" id="doctor">

                    <datalist id="doctors">
                        <option value="">
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Pharmacist</label>
                    <input list="pharmacists" name="pharmacist" id="pharmacist">

                    <datalist id="pharmacists">
                        <option value="">
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Treatment</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>