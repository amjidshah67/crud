@extends("photofolio.layout.app")
@section('content')
    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Sample Inner Page</h2>
                        <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>

                        <a class="cta-btn" href="{{ route('contact-photo') }}">Available for hire</a>

                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <section class="sample-page">
            <div class="container" data-aos="fade-up">

                <p>
                    You can duplicate this sample page and create any number of inner pages you like!
                </p>

            </div>
        </section>

    </main><!-- End #main -->

@endsection
