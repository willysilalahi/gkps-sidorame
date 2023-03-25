<main id="main" class="main">
    <div class="pagetitle">
        <h1>{{ Helper::changeRouteName()['name'] }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ Helper::changeRouteName()['name'] }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card mx-auto">
                    <img src="{{ asset('images/coming-3.png') }}" alt="Profile" class="mx-auto" width="400px">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <h2>Coming Soon!</h2>
                        <h3>We are working hard to get this up and running</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
