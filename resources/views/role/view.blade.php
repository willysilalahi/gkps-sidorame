<main id="main" class="main">

    <div class="pagetitle">
        <h1>{{ Helper::changeRouteName()['name'] }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ Helper::changeRouteName()['name'] }}</li>
            </ol>
        </nav>
        @add_access
            <a href="{{ route('role_add') }}" class="btn btn-primary px-3 py-2">Create</a>
        @endadd_access
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
</main><!-- End #main -->


<script type="text/javascript">
    $(document).ready(function() {
        loadData();

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getData(page);
        })
    });

    function getData(page) {
        $.ajax({
            url: `role/data?page=` + page,
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
                tata.error('Ooopss', 'Something Error');
            }
        });
    }


    function loadData() {
        $.ajax({
            url: `role/data`,
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
                tata.error('Ooopss', 'Something Error');
            }
        });
    }

    function deleteData(id) {
        swal({
                title: "Are you sure?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: `/role/${id}`,
                        method: 'DELETE',
                        data: {
                            _token: CSRF_TOKEN
                        },
                        success: function(res, data) {
                            if (res.status == true) {
                                swal("Success", "Role successfully deleted!", "success");
                                loadData();
                            } else {
                                tata.error('Ooopss', res.error);
                            }
                        },
                        error: function(error) {
                            tata.error('Ooopss', 'Something Error');
                        }
                    })
                } else {}
            });
    }
</script>
