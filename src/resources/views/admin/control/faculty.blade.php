<div class="modal fade" id="controlFaculty" tabindex="-1" role="dialog" aria-labelledby="controlFaculty"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                Faculty CRUD
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('admin/control-faculty/create') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="faculty_name_c" class="col-md-4 col-form-label text-md-right">Faculty Name:</label>
                        <div class="col-md-6">
                            <input id="faculty_name_c" type="text" class="form-control" name="faculty_name_c" required
                                autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="faculty_thumbnail_c" class="col-md-4 col-form-label text-md-right">Faculty
                            Thumbnail:
                        </label>
                        <div class="col-md-6">
                            <input id="faculty_thumbnail_c" type="text" class="form-control" name="faculty_thumbnail_c"
                                required autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Add
                            </button>
                        </div>
                    </div>
                </form>

                <div class="d-flex flex-row justify-content-center double-color-line my-3">
                    <div></div>
                    <div></div>
                </div>

                <form method="POST" action="{{ url('admin/control-faculty/update') }}">
                    @csrf

                    <select class="form-control" id="faculty_dropdown_u" name="faculty_dropdown_u"
                        data-live-search="true">
                        <option> Faculties </option>
                        @foreach ($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                    <div class="form-group row">
                        <label for="faculty_name_u" class="col-md-4 col-form-label text-md-right">Faculty Name:</label>
                        <div class="col-md-6">
                            <input id="faculty_name_u" type="text" class="form-control" name="faculty_name_u" required
                                autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="faculty_thumbnail_u" class="col-md-4 col-form-label text-md-right">
                            Faculty Thumbnail:
                        </label>
                        <div class="col-md-6">
                            <input id="faculty_thumbnail_u" type="text" class="form-control" name="faculty_thumbnail_u"
                                required autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>

                <div class="d-flex flex-row justify-content-center double-color-line my-3">
                    <div></div>
                    <div></div>
                </div>

                <form method="POST" action="{{ url('admin/control-faculty/delete') }}">
                    @csrf

                    <select class="form-control" id="faculty_dropdown_d" name="faculty_dropdown_d"
                        data-live-search="true">
                        <option> Faculties </option>
                        @foreach ($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                delete
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>