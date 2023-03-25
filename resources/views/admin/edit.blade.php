<main id="main" class="main">

    <div class="pagetitle">
        <h1>{{ Helper::changeRouteName()['name'] }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ Helper::changeRouteName()['name'] }}</li>
                <li class="breadcrumb-item active">Edit {{ Helper::changeRouteName()['name'] }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{ route('admin_edit_patch', $admin->id) }}">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $admin->name }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Role</label>
                                <select name="roles_id" class="form-select">
                                    @foreach ($role as $i)
                                        <option value="{{ $i->id }}"
                                            @if ($i->id == $admin->roles_id) selected @endif>{{ $i->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('roles_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username"
                                    value="{{ $admin->username }}">
                                @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Status</label>
                                <select name="is_active" class="form-select">
                                    <option value="1" @if ($admin->is_active == 1) selected @endif>Active
                                    </option>
                                    <option value="0" @if ($admin->is_active == 0) selected @endif>Non-Active
                                    </option>
                                </select>
                                @error('is_active')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Multi Columns Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
