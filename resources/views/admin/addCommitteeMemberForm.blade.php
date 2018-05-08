@extends('layouts.admin')
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Add Committee Member</h5>
                </div>
                <div class="ibox-content">
                    <fieldset class="form-horizontal">
                        <form method="post" action="{{Route('admin.store.committeeMember')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" required name="name"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Department</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" required name="department" required></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Univerity</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" required name="university" required></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Meta Info</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" required name="meta_info"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Select Committee Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="committee" required>
                                        <option value="">Select Committee Type</option>
                                        <option value="organizing">Organizing Committee</option>
                                        <option value="executive">Executive Committeee</option>
                                        <option value="advisory">Advisory Committee</option>
                                        <option value="sub">Sub Committee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Designation</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="designation" required>
                                    <option value="">Select Designation</option>
                                    <option value="Chairman">Chairman</option>
                                    <option value="Organizing Secretary">Organizing Secretary</option>
                                    <option value="Treasurer">Treasurer</option>
                                    <option value="Member">Member</option>
                                    <option value="President">President</option>
                                    <option value="Vice-President">Vice-President</option>
                                    <option value="General Secretary">General Secretary</option>
                                    <option value="Joint-Secretary">Joint-Secretary</option>
                                    <option value="Executive Member">Executive Member</option>
                                    <option value="Patron">Patron</option>
                                    <option value="Advisory Committee">Advisory Committee</option>
                                    <option value="Joint-Secretary">Joint-Secretary</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Photo</label>
                                <div class="col-sm-10"><input type="file" class="form-control" placeholder="" name="pic" accept="image/*"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10"><button type="submit" class="btn btn-w-m btn-primary">Submit</button></div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    @endsection