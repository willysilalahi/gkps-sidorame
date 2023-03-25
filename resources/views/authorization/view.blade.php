<main id="main" class="main">
    <form method="POST" id="formAuthorization" class="w-100">
        @csrf
        <div class="pagetitle">
            <h1>{{ Helper::changeRouteName()['name'] }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">{{ Helper::changeRouteName()['name'] }}</li>
                </ol>
            </nav>
            <div>
                <select id="roles" name="roles" class="form-select w-25 d-inline" onchange="loadData()">
                    @foreach ($roles as $i)
                        <option value="{{ $i->id }}">{{ $i->name }}</option>
                    @endforeach
                </select>
                @edit_access
                    <button class="btn btn-primary px-3" type="button" onclick="updateAuthorization()">Update</button>
                @endedit_access
            </div>
            <x-alert></x-alert>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body py-3" id="data">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</main><!-- End #main -->


<script type="text/javascript">
    $(document).ready(function() {
        loadData();
    });


    function loadData() {
        let role = $('#roles').find(':selected').val();
        $.ajax({
            url: `authorization/data/${role}`,
            method: 'GET',
            beforeSend: function() {
                callOverlay('.container-fluid');
            },
            complete: function() {
                removeOverlay();
            },
            success: function(data) {
                $('#data').html(data)
            },
            error: function(error) {
                swal("Oopss!", "Something Error!", "error");
            }
        });
    }

    function updateAuthorization() {
        let formData = $('#formAuthorization').serialize();

        $.ajax({
            url: `/authorization`,
            method: 'POST',
            data: formData,
            beforeSend: function() {
                $('#loading').show();
            },
            complete: function() {
                $('#loading').hide();
            },
            success: function(data) {
                swal("Yayy!", "Authorization has been updated!", "success");
                getData();
            },
            error: function(error) {
                swal("Oopss!", "Something Error!", "error");
            }
        })
    }
</script>
