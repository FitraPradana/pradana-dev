<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-project-portofilio">Project</li>
            {{-- <li data-filter=".filter-web-portofilio">Web</li> --}}
            <li data-filter=".filter-certification-portofilio">Certification</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <!-- APP -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-app-project">
                <div class="portfolio-img"><img
                        src="{{ asset('/') }}source_Arsha/assets/img/portfolio/sistem_overtime/Beranda.png"
                        class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Dashboard</h4>
                    <p>Sistem Overtime</p>
                    <a href="{{ asset('/') }}source_Arsha/assets/img/portfolio/sistem_overtime/Beranda.png"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Home"><i
                            class="bx bx-plus"></i></a>
                    {{-- <a href="{{ asset('/') }}source_Arsha/assets/img/portfolio/sistem_overtime/Login.png"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Login"></a>
                    <a href="{{ asset('/') }}source_Arsha/assets/img/portfolio/sistem_overtime/Master User.png"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Master User"></a>
                    <a href="{{ asset('/') }}source_Arsha/assets/img/portfolio/sistem_overtime/Master Department.png"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                        title="Master Department"></a>
                    <a href="{{ asset('/') }}source_Arsha/assets/img/portfolio/sistem_overtime/Transaksi.png"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Transaksi"></a>
                    <a href="{{ asset('/') }}source_Arsha/assets/img/portfolio/sistem_overtime/Laporan.png"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Laporan"></a> --}}
                </div>
            </div>
            <!-- END APP -->

        </div>

    </div>
</section>
