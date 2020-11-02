<div class="modal fade" id="updateTeacherModal" tabindex="-1" role="dialog" aria-labelledby="update" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="update">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update-profile', $teacher->id) }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                            value="{{ $teacher->last_name ?? '' }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            placeholder="First Name" value="{{ $teacher->first_name ?? '' }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="name">Mid Name</label>
                        <input type="text" class="form-control" id="mid_name" name="mid_name" placeholder="Mid Name"
                            value="{{ $teacher->mid_name ?? '' }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="name">Degree</label>
                        <input type="text" class="form-control" id="degree" name="degree" placeholder="Degree"
                            value="{{ $teacher->degree ?? '' }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="cathedra_id">Cathedra</label>
                        <select class="custom-select" id="cathedra_id" name="cathedra_id" required autofocus>
                            @foreach ($cathedras as $cathedra)
                            <option value="{{ $cathedra->id }}">{{ $cathedra->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea type="text" class="form-control" id="about" name="about" placeholder="About"
                            rows="6">{{ $teacher->about ?? '' }}</textarea>
                    </div>

                    <input type="hidden" name="redirect" value="profile">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success submit" value="Login">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>