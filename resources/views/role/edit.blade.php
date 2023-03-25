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
            <div class="col-lg-6">
                <div class="card p-4">
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{ route('role_edit_patch', $role->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Role Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $role->name }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form><!-- End Multi Columns Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
