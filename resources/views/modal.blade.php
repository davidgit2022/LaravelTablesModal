<!-- Modal -->
<div class="modal fade" id="addnew" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ URL::to('save') }}" method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addnew">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    {{ csrf_field() }}
                    <div class="mb-3 row">
                        <label for="firstname" class="col-sm-2 col-form-label">Firstname</label>
                        <div class="col-auto">
                            <input type="text" name="firstname" class="form-control" placeholder="input Firstname"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="lastname" class="col-sm-2 col-form-label">Lastname</label>
                        <div class="col-auto">
                            <input type="text" name="lastname" class="form-control" placeholder="input Lastname"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-auto">
                            <select class="form-select" name="gender">
                                @foreach ($genders as $gender)
                                    <option value="{{ $gender->id }}">{{ $gender->gender }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="position" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-auto">
                            <select class="form-select" name="position">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
