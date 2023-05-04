@extends('frontend.layout.main')

@push('title') Doctor @endpush


@push('css-link')
     <!-- Select2 -->
     <link rel="stylesheet" href="{{ url('/')}}/admin/plugins/select2/css/select2.min.css">
@endpush
@section('main-section')



<style>
    div#my_left_r {
        display: flex;
    }

    div#my_left_r .in-page-advert {
        width: 100%;
        margin-left: 0px !important;
    }

    div#my_left_r .in-page-advert a.advert.no-outline {
        text-align: left !important;
        margin-left: 0px !important;
        display: block;
        padding-left: 0px !important;
    }

    div#my_left_r .in-page-advert a.advert.no-outline img {
        object-fit: contain;
        margin: 0 !important;
        padding: 0 !important;
    }

    div#my_left_r .col-md-6.col-12 {
        display: flex;
        margin-left: 0px !important;
        padding-left: 0px !important;
    }
    .select2 {
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .select2:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .select2-selection__rendered {
        line-height: 1.5;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        border: none;
        background: transparent;
        padding-top: inherit;
    }

    .select2-container--default .select2-selection--single{
        border: none;
    }
    .select2-selection__arrow {
  display: none !important;
}
</style>



<div class="banner title-banner d-md-flex d-none">
    <h2>Doctors</h2>
</div>

<!-- advert -->
<!-- change the img tag accordingly (e.g: <ins> tag) -->
<div class="container">
    <div class="row" id="my_left_r">
        <div class="col-md-6 col-12">
            <div class="in-page-advert doctor-advert-top-left"></div>
            <div class="in-page-advert doctor-advert-top-right"></div>
        </div>
        <div class="col-md-6 col-12">
            <img src="https://dev.mimsbangladesh.com/application/views/images/logo/Gv2.png" alt="" width="80%px" style="
    padding: 30px;
    background: white;
    margin-top: 30px;
">
        </div>
    </div>
</div>

<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-12">
            <div class="content-section main">
                <div class="section-header d-flex justify-content-between" style="margin-bottom: 0px; padding: 24px 30px 16px 30px;">
                    <span>Find Doctors</span> <i class="fas fa-filter d-md-none d-blocK"></i>
                </div>
                <!-- doctor search -->
                <div class="container" style="padding-bottom: 20px">
                    <div class="address-search row">
                        <div class="col-md-5 col-12 address-search-col">
                            <div class="theme-select">
                                <select class="form-control select2" id="doctorCountry" name="doctorCountry">
                                    <option value="0">Search by Country</option>
                                    
                                </select>
                                <div class="theme-down-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12 address-search-col">
                            <div class="theme-select">
                                <select class=" select2 form-control" id="doctorCity" name="doctorCity">
                                    <option value="0">Search by City</option>
                                   
                                </select>
                                <div class="theme-down-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 address-search-col"></div>
                    </div>
                    <div class="address-search row">
                        <div class="col-md-5 col-12 address-search-col">
                            <div class="theme-select">
                                <select class="form-control select2" id="doctorSpecialty" name="doctorSpecialty">
                                    <option value="0">Search by Specialty</option>
                                   
                                </select>
                                <div class="theme-down-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12 address-search-col">
                            <div class="theme-select">
                                <select class="form-control" id="doctorGender" name="doctorGender">
                                    <option value="0">Search by Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <div class="theme-down-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 address-search-col">
                            <button class="btn theme-btn" style="width: 100%;" onclick="doctorObject.searchDoctor(1)">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="doctor-list container" id="doctor-info-list">
                <?php
                foreach ($AllDoctors as $doctor) {
                    $image_path = empty($doctor['ImagePath']) ? base_url() . 'application/views/images/doctor.png' : base_url() . 'application/views/img/' . $doctor['ImagePath'];
                    $hotline_info = empty($doctor['Hotline']) ? '' : '<br>Hotline: ' . $doctor['Hotline'];
                    $PhoneNo = empty($doctor['PhoneNo']) ? '' : '<p class="number">' . $doctor['PhoneNo'] . '</p>';
                    $MobileNo1 = empty($doctor['MobileNo1']) ? '' : '<p class="number">' . $doctor['MobileNo1'] . '</p>';
                    $MobileNo2 = empty($doctor['MobileNo2']) ? '' : '<p class="number">' . $doctor['MobileNo2'] . '</p>';
                    $MobileNo3 = empty($doctor['MobileNo3']) ? '' : '<p class="number">' . $doctor['MobileNo3'] . '</p>';
                    $mobile_info = $PhoneNo . $MobileNo1 . $MobileNo2 . $MobileNo3;
                    $mobile_info = empty($mobile_info) ? '' : '<p class="doctor-info-title">
                                        <i class="fas fa-phone" style="transform: scaleX(-1);"></i>  Phone No.
                                    </p>
                                    <p class="doctor-info-description">' . $mobile_info . '</p>';
                    echo '<div class="doctor row">
                    <div class="col-md-2 col-3 doctor-img">
                        <img src="' . $image_path . '" alt="">
                    </div>
                    <div class="col-md-10 col-9">
                        <h3 class="doctor-name">' . $doctor['Name'] . '</h3>
                        <div class="doctor-info d-md-block d-none">
                            <div class="row">
                                <div class="col-6">
                                    <p class="doctor-info-title">' . $doctor['Specialization'] . '</p>
                                    <p class="doctor-info-description">' . $doctor['ProfessionDegree'] . '</p>
                                </div>
                                <div class="col-6">
                                    <p class="doctor-info-title">
                                        <i class="fas fa-map-marker-alt"></i> Chamber
                                    </p>
                                    <p class="doctor-info-description">' . $doctor['ChamberAddress'] . $hotline_info . '</p>' . $mobile_info . '
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-md-none d-block">
                          <div class="doctor-info">
                              <div class="row">
                                  <div class="col-12">
                                    <p class="doctor-info-title">' . $doctor['Specialization'] . '</p>
                                    <p class="doctor-info-description">' . $doctor['ProfessionDegree'] . '</p>
                                  </div>
                                  <div class="col-12">
                                    <p class="doctor-info-title">
                                      <i class="fas fa-map-marker-alt"></i> Chamber
                                    </p>
                                    <p class="doctor-info-description">' . $doctor['ChamberAddress'] . $hotline_info . '</p>
                                  </div>
                                  <div class="col-12">' . $mobile_info . '</div>
                                </div>
                          </div>
                      </div>
                </div>';
                }
                ?>
            </div> --}}
            <!-- pagination -->
            <nav class="mims-pagination" style="margin-top: 36px;">
                <ul class="pagination" id="doctor-pagination"></ul>
            </nav>
            <div class="in-page-advert doctor-advert-bottom">
                <img src="{{ url('/') }}/application/views/images/add-12.png" alt="">
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="container">
                <div class="row side-bar-mimslearning-title">
                    <!-- special reports -->
                    <div class="content-section col-12" style="padding: 0; height: auto; max-height: none;">
                        <a href="https://www.dental-practice.biz/emagazine/dpbangladesh1-1/"> <img src="{{ url('/') }}/application/views/images/dantal.jpeg" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="in-page-advert side-col doctor-sidebar-advert">
                        <img src="{{ url('/') }}/application/views/images/add-4.png" alt="">
                    </div>
                </div>
                <div class="row side-bar-important-address-title">
                    <!-- important addresses -->
                    <div class="content-section col-12" style="padding: 0; max-height: none;">
                        <div class="section-header own-pad">
                            <span><img src="{{ url('/') }}/application/views/images/icons/briefcase.svg" alt="*"></span>Important Information
                        </div>
                        <ul class="address-list sidebar-assress"></ul>
                    </div>
                </div>
                <div class="row side-bar-job-circular-title">
                    <!-- job circular -->
                    <div class="content-section col-12" style="padding: 0; height: auto; max-height: none;">
                        <div class="section-header own-pad" style="margin-bottom: 16px;">
                            <span><img src="{{ url('/') }}/application/views/images/icons/briefcase.svg" alt="*"></span>Job Circular
                        </div>
                        <div class="section-tab sidebar-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#pharmaTab" role="tab" aria-controls="pharmaTab" aria-selected="true">Pharma</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#medicalTab" role="tab" aria-controls="medicalTab" aria-selected="false">Medical</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pharmaTab" role="tabpanel" aria-labelledby="pharma-tab">
                                    <div class="container sidebar-jobs"></div>
                                </div>
                                <div class="tab-pane fade" id="medicalTab" role="tabpanel" aria-labelledby="medical-tab">
                                    <div class="container sidebar-jobs"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row side-bar-special-report-title">
                    <!-- special reports -->
                    <div class="content-section col-12" style="padding: 0; height: auto; max-height: none;">
                        <div class="section-header own-pad">
                            <span><img src="{{ url('/') }}/application/views/images/icons/briefcase.svg" alt="*"></span>Special Reports
                        </div>
                        <div class="container sidebar-special-reports"></div>
                    </div>
                </div>
                <div class="row side-bar-news-title">
                    <!-- local news -->
                    <div class="content-section col-12" style="padding: 0; height: auto; max-height: none;">
                        <div class="section-header own-pad">
                            <span><img src="{{ url('/') }}/application/views/images/icons/newspaper.svg" alt="*"></span>Pharma News
                        </div>
                        <div class="container sidebar-news"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    frontendCommonMethods.getSideBarData(['job', 'address', 'news', 'report', 'study']);
    frontendCommonMethods.getCommonAdvertisement(['doctor-sidebar-advert', 'doctor-advert-top-left', 'doctor-advert-top-right', 'doctor-advert-bottom']);
    doctorObject.totalDoctor = <?php echo isset($TotalDoctor) ? $TotalDoctor : 0; ?>;
    doctorObject.populatePagination(1);
    frontendCommonMethods.mainMenuActivation('doctor');
</script>
 --}}



<script>
    $('.banner').css('background-image', '../frontend/images/banner-bg.jpg');
    $('.slick-prev.slick-arrow:before').css('background-image', '../frontend/images/icons/left-arrow-white.png');
    $('.slick-next.slick-arrow:before').css('background-image', '../frontend/images/icons/right-arrow-white.png');
    $('.slick-prev.slick-arrow.slick-disabled:before').css('background-image', '../frontend/images/icons/left-arrow-white.png');
    $('.slick-next.slick-arrow.slick-dbefore').css('background-image', '../frontend/images/icons/right-arrow-white.png');
    // frontendCommonMethods2.getAdvertisement(['home-product-slider'], 3);
    // frontendCommonMethods.getCommonAdvertisement(['home-advert-container-top', 'home-advert-container-mid']);
    // drugObject.productType = "REGULAR_PRODUCT";
    // drugObject.getSpecialReports();
    // // drugObject.getMimsLearning();
    // drugObject.getJobCirculars();
    // drugObject.getLocalNews();
    // drugObject.getInternationalHealth();
    // drugObject.getImportantAddress();
    // drugObject.getNewBrands(0);
    // drugObject.getNewPresentations(0);
    // drugObject.getNewProducts(0);
    // drugObject.getHighlightedBrands();
    // frontendCommonMethods.getNumberOfVisitor();
    // drugObject.getAllDrugInfoForAutoComplete('brand');
    // frontendCommonMethods.mainMenuActivation('home');
    $(document).ready(function() {
        // $.getScript("http://connect.facebook.net/en_US/all.js# xfbml=1", function () {
        // 	FB.init({ appId: 'xxxxxxxx', status: true, cookie: true, xfbml: true });
        // });
    });
    // youTubeVideos = "";
    // var individual_youtube = '';
    // var youtube_title = '';
    // for (var youtube_no = 0; youtube_no < 4; youtube_no++) {
    //     youtube_title = youTubeVideos[youtube_no].Title;
    //     youtube_title = youtube_title.length > 65 ? youtube_title.substr(0, 60) + ' ...' : youtube_title;
    //     individual_youtube = '<div class="home-special-report-slide">' +
    //         '<a onclick="frontendCo mmonMethods.youtubeFullScreen(' + youtube_no + ')"><img src="' + youTubeVideos[youtube_no].thumbnail + '"  alt="">' +
    //         '<p class="home-special-report-slide-title">' + youtube_title + '</p>' +
    //         '</di v>';
    //     $('.home-youtube-list').append(individual_youtube);
    // }
    // $('#home-youtube-slider').slick({
    //     slidesToScroll: 1,
    //     slidesToShow: 4,
    //     autoplay: true,
    //     autoplaySpeed: 1000,
    //     infinite: false,
    //     arrows: true,
    //     responsive: [{
    //         breakpoint: 480,
    //         settings: {
    //             slidesToShow: 2,
    //             arrows: false,
    //         }
    //     }]
    // });
</script>

<script>
    jQuery(document).ready(function($) {
        $('.slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
<script>
    // number count for stats, using jQuery animate

    $('.counting').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({
            countNum: $this.text()
        }).animate({
                countNum: countTo
            },

            {

                duration: 3000,
                easing: 'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                }

            });


    });
</script>



@endsection



@push('js-link')

<script src="{{ url('/')}}/admin/plugins/select2/js/select2.full.min.js"></script>

<script>

    $(document).ready(function() {

        $('.select2').select2()


        doctorMethods.getCountry();
        doctorMethods.getCity();
        doctorMethods.getSpecialization();
        // drugUpdate.getNewProduct();
        // drugUpdate.getNewBrand();
        // drugUpdate.getNewPresentation();
        // homeMethods.getDoctor();
        // homeMethods.getSpecialReport();
        // homeMethods.getMedicalJob();
        // homeMethods.getPharmaJob();
        // homeMethods.getNews();
        // homeMethods.getVideo();
    });


    var drugUpdate = {
        getNewProduct: function(){
            $.ajax({
                url: "{{ route('web_get_brand')}}",
                type: 'GET',
                dataType: 'json',
                data: {
                    condition: 'brand_is_new_product',
                    limit: 7
                },
                success: function(response) {
                    // console.log(response);
                

                    $('.new-product-information').html('<h4>New Products</h4>');
                    $.each(response.data, function(index, brand) {

                        $('.new-product-information').append(
                            `<a href='${brand.brand_id}'>${brand.brand_name.toUpperCase()}</a>`
                        );
                    });
                    $('.new-product-information').append(`<a href='showall'>See More</a>`);
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getNewBrand: function(){
            $.ajax({
                url: "{{ route('web_get_brand')}}",
                type: 'GET',
                dataType: 'json',
                data: {
                    condition: 'brand_is_new_brand',
                    limit: 7
                },
                success: function(response) {
                    // console.log(response);
                

                    $('.new-brand-information').html('<h4>New Brands</h4>');
                    $.each(response.data, function(index, brand) {

                        $('.new-brand-information').append(
                            `<a href='${brand.brand_id}'>${brand.brand_name.toUpperCase()}</a>`
                        );
                    });
                    $('.new-brand-information').append(`<a href='showall'>See More</a>`);
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getNewPresentation: function(){
            $.ajax({
                url: "{{ route('web_get_brand')}}",
                type: 'GET',
                dataType: 'json',
                data: {
                    condition: 'brand_is_new_presentation',
                    limit: 7
                },
                success: function(response) {
                    // console.log(response);
                

                    $('.new-presentation-information').html('<h4>New Products</h4>');
                    $.each(response.data, function(index, brand) {

                        $('.new-presentation-information').append(
                            `<a href='${brand.brand_id}'>${brand.brand_name.toUpperCase()}</a>`
                        );
                    });
                    $('.new-presentation-information').append(`<a href='showall'>See More</a>`);
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
    }

    var homeMethods = {
        getDoctor: function(){
            $.ajax({
                url: "{{ route('web_get_home_doctor')}}",
                type: 'GET',
                dataType: 'json',
                // data: {
                //     condition: 'brand_is_new_product',
                //     limit: 7
                // },
                success: function(response) {
                    // console.log(response);
                
                    $.each(response.data, function(index, doctor) {

                        $('.doctor_row').append(`
                            <div class="col-md-4">
                                <div class="single-person">
                                    <div class="person-image">
                                        <span class="icon">
                                            <i class="fa-solid fa-user-doctor"></i>
                                        </span>
                                    </div>
                                    <div class="person-info">
                                        <h3 class="full-name"> <a href="index.php/Doctor/getAllDoctorInformation">${doctor.doctor_name} </a>
                                        </h3>
                                        <span class="speciality"> ${doctor.doctor_specialization} </span>
                                    </div>
                                </div>
                            </div>
                        `);
                       
                    });
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getSpecialReport:function(){
            $.ajax({
                url: "{{ route('web_get_home_special_report')}}",
                type: 'GET',
                dataType: 'json',
                // data: {
                //     condition: 'brand_is_new_product',
                //     limit: 7
                // },
                success: function(response) {
                    console.log("get_home_special_report-> ", response);
                    $('#home-special-report-slider').html('');
                    $.each(response.data, function(index, specialReport) {
                        special_report_title = specialReport.special_report_title.length > 65 ? specialReport.special_report_title.substr(0, 65) + ' ...' : specialReport.special_report_title;

                        $('#home-special-report-slider').append(`
                            <div class="home-special-report-slide">
                                <img src="{{ url('/') }}/storage/images/SpecialReportImages/${specialReport.special_report_image}"  alt="" onerror="this.src=\'https://image.ibb.co/cBMMNq/default-placeholder.png\'">
                                <p class="home-special-report-slide-title"><a href="${specialReport.special_report_id}">${specialReport.special_report_title}</a></p>
                            </div>
                        `);
                       
                    });

                    $('#home-special-report-slider').slick({
                        slidesToScroll: 1,
                        slidesToShow: 4,
                        autoplay: false,
                        autoplaySpeed: 1000,
                        infinite: false,
                        arrows: false,
                        responsive: [
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 4,
                                    arrows: false,
                                }
                            }
                        ]
                    });
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getMedicalJob:function(){
            $.ajax({
                url: "{{ route('web_get_home_job')}}",
                type: 'GET',
                dataType: 'json',
                data: {
                    category: 'Medical'
                },
                success: function(response) {
                    console.log("get_home_job-> ", response);
                    $('#medical_job').html('');
                    $.each(response.data, function(index, job) {

                        $('#medical_job').append(`
                            <a href="#">
                                <div class="media-list-left-image">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ url('/') }}/storage/images/JobImages/${job.job_organization_logo}" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <span class="bahuthard">New</span>
                                            <h4 class="media-heading">
                                                ${job.job_title}
                                            </h4>
                                            <p>
                                                ${job.job_organization}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        `);
                       
                    });

                   
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getPharmaJob:function(){
            $.ajax({
                url: "{{ route('web_get_home_job')}}",
                type: 'GET',
                dataType: 'json',
                data: {
                    category: 'Pharma'
                },
                success: function(response) {
                    console.log("get_home_job-> ", response);
                    $('#pharma_job').html('');
                    $.each(response.data, function(index, job) {

                        $('#pharma_job').append(`
                            <a href="#">
                                <div class="media-list-left-image">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ url('/') }}/storage/images/JobImages/${job.job_organization_logo}" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <span class="bahuthard">New</span>
                                            <h4 class="media-heading">
                                                ${job.job_title}
                                            </h4>
                                            <p>
                                                ${job.job_organization}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        `);
                       
                    });

                   
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getNews:function(){
            $.ajax({
                url: "{{ route('web_get_home_news')}}",
                type: 'GET',
                dataType: 'json',
                // data: {
                //     category: 'Pharma'
                // },
                success: function(response) {
                    console.log("web_get_home_news-> ", response);
                    $('.pharma_news').html('');
                    $.each(response.data, function(index, news) {
                        news_description = news.news_description.length > 50 ? news.news_description.substr(0, 50) + ' ...' : news.news_description;

                        $('.pharma_news').append(`
                            <a href="#">
                                <div class="media-list-left-image">
                                    <div class="media">
                                        <div class="media-left">

                                            <img src="{{ url('/') }}/storage/images/NewsImages/${news.news_image}" class="media-object">

                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                ${news.news_title}
                                            </h4>
                                            <p>
                                                ${news_description}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        `);
                       
                    });

                   
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getVideo:function(){
            $.ajax({
                url: "{{ route('web_get_home_video')}}",
                type: 'GET',
                dataType: 'json',
                // data: {
                //     category: 'Pharma'
                // },
                success: function(response) {
                    console.log("web_get_home_video-> ", response);
                    $('#home-youtube-video-slider').html('');
                    $.each(response.data, function(index, video) {
              
                        $('#home-youtube-video-slider').append(`
                            <div class="youtube-video">
                                <a href="#" onclick="frontCommonMethods.youtubeFullScreen('${video.video_link}')" tabindex="0">
                                    <div class="youtube-video-wrapper" style="background-image: url(http://127.0.0.1:8000/storage/images/NewsImages/d8935b1118e631102d0971fc79d6379a.jpg);">
                                        <img src="http://127.0.0.1:8000/storage/images/NewsImages/d8935b1118e631102d0971fc79d6379a.jpg" alt="Video thumbnail">
                                    </div>
                                </a>
                                <h4 class="mt-3">
                                    <a href="#" onclick="frontCommonMethods.youtubeFullScreen('${video.video_link}')" tabindex="0">
                                        ${video.video_title}
                                    </a>
                                </h4>
                            </div>
                        `);
                       
                    });

                    $('#home-youtube-video-slider').slick({
                        slidesToScroll: 1,
                        slidesToShow: 4,
                        autoplay: false,
                        autoplaySpeed: 1000,
                        infinite: false,
                        arrows: true,
                        responsive: [
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 4,
                                    arrows: false,
                                }
                            }
                        ]
                    });

                   
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        }

        
    }

    var doctorMethods = {
        getCountry: function(){
            $.ajax({
                url: "{{ route('web_country')}}",
                type: 'GET',
                dataType: 'json',
                // data: {
                //     condition: 'brand_is_new_product',
                //     limit: 7
                // },
                success: function(response) {
                    console.log("response get country" ,response);
                
                    var data = response.data;


                        var select2El = $('#doctorCountry');
                        
                        select2El.select2('destroy');
                        select2El.empty();
                        
                        select2El.append($('<option value="" selected="selected"></option>').text('Search By Country'));
                        
                        $.each(data, function(index, value) {
                            select2El.append($('<option></option>').attr('value', value.country_id).text(value.country_name));
                        });

                        select2El.select2();                     
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getCity: function(){
            $.ajax({
                url: "{{ route('web_city')}}",
                type: 'GET',
                dataType: 'json',
                // data: {
                //     condition: 'brand_is_new_product',
                //     limit: 7
                // },
                success: function(response) {
                    // console.log(response);
                
                    var data = response.data;


                        var select2El = $('#doctorCity');
                        
                        select2El.select2('destroy');
                        select2El.empty();
                        
                        select2El.append($('<option value="" selected="selected"></option>').text('Search By City'));
                        
                        $.each(data, function(index, value) {
                            select2El.append($('<option></option>').attr('value', value.city_id).text(value.city_name));
                        });

                        select2El.select2();                     
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getSpecialization: function(){
            $.ajax({
                url: "{{ route('web_specialization')}}",
                type: 'GET',
                dataType: 'json',
                // data: {
                //     condition: 'brand_is_new_product',
                //     limit: 7
                // },
                success: function(response) {
                    // console.log(response);
                
                    var data = response.data;


                        var select2El = $('#doctorSpecialty');
                        
                        select2El.select2('destroy');
                        select2El.empty();
                        
                        select2El.append($('<option value="" selected="selected"></option>').text('Search By Speciality'));
                        
                        $.each(data, function(index, value) {
                            select2El.append($('<option></option>').attr('value', value.specialization_id).text(value.specialization_name));
                        });

                        select2El.select2();                     
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },
        getDoctor: function(){
            $.ajax({
                url: "{{ route('web_get_doctor')}}",
                type: 'GET',
                dataType: 'json',
                // data: {
                //     condition: 'brand_is_new_product',
                //     limit: 7
                // },
                success: function(response) {
                    // console.log(response);
                
                    var data = response.data;


                                            
                    
                },
                error: function(xhr, status, error) {
                    console.group("Error Block");
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    console.groupEnd();
                }
            });
        },

    }

</script>

@endpush
