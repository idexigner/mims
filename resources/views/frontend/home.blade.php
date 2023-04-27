@extends('frontend.layout.main')

@push('title') Home @endpush


@section('main-section')


<!-- banner -->
<style>
    span.bahuthard {
        /* position: absolute; */
        background: red;
        border: none;
        color: white;
        left: 25px;
        top: 5px;
        font-size: 15px;
        padding: 0px 10px;
        font-weight: 900;
        border-radius: 3px;
        border: none !important;
        letter-spacing: 1px;
        text-transform: capitalize;
        display: flex;
        align-items: center;
        align-content: center;
        width: 50px;
        justify-content: center;
        margin-left: auto;
        margin-bottom: 5px;
    }

    .content-section .row .col-md-4 {
        margin-bottom: 40px;
    }

    .content-section .row .col-md-4 .single-person {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    a.okta {
        box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
        padding: 30px 10px;
        width: 100%;
        display: block;
        font-size: 19px;
        text-align: center;
        text-transform: capitalize;
        color: #212536;
        background-size: cover;
        text-decoration: none;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
    }

    div#jclin {
        margin-top: 30px;
    }

    .important-information-col {
        height: 200px;
    }

    .important-information-col img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .uk_tabs li.nav-item {
        border: none;
    }

    .uk_tabs ul#myTab li.nav-item a {
        color: #019A3D;
        font-weight: 900;
    }

    .uk_tabs ul#myTab li.nav-item .active {
        color: #495057 !important;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    a.okta img {
        margin-right: 10px !important;
    }

    a.okta img {
        margin-right: 10px;
    }


    div#jhaiyam_more {
        height: 556px;
        margin-bottom: 40px;
    }

    div#jhaiyam_more .col-md-4.col-12 {
        padding: 0;
        margin: 0;
        height: 100%;
    }

    div#jhaiyam_more .col-md-8.col-12 {
        padding-right: 0;
    }

    div#jhaiyam_more .col-md-8.col-12 div#highlighted-product {
        border-radius: 0px !important;
        height: 100%;
    }

    .star-product {
        background-color: var(--section-bg);
        margin-top: 30px;
        height: 100% !important;
        max-height: unset !important;
        border-radius: 0px !important;
        overflow: hidden;
        box-shadow: none !important;
    }

    .un-mesh_icon {
        color: #009B3E;
        font-size: 30px;
        margin-right: 10px;
    }




    @media only screen and (max-width: 600px) {
        div#jhaiyam_more {
            height: auto !important;
            margin-bottom: 40px;
        }



        .slick-prev.slick-arrow:before,
        .slick-next.slick-arrow:before {
            content: " ";
            display: inline-block;
            height: 46px;
            width: 46px;
            border-radius: 50%;
            opacity: 1;
            background-size: contain;
            background-position: top center;
            display: none !important;
        }

        div#bihari {
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;

        }

        div#bihari a {
            font-size: 12px;
            text-align: center;
        }


        .section-col {
            border-bottom: none !important;

            padding-top: 0px !important;
        }

        .section-col h4::after {
            content: "";
            background: #33495E;
            width: 40%;
            height: 4px;
            position: absolute;
            left: 16%;
            top: -3px;
            text-align: center;
        }

        .section-col h4 {
            font-size: var(--font-size-regular);
            color: var(--title-color);
            font-family: var(--font-bold);
            text-transform: uppercase;
            margin-bottom: 16px;
            position: relative !important;
            font-size: 12px;
            text-align: center;

        }

    }

    a#okta6 {
        background: linear-gradient(to right, #009b3e, #15ed6c);
        color: white;
    }


    div#bismilaalla {
        position: relative;
    }

    div#bismilaalla span {
        position: absolute;
        background: red;
        border: none;
        color: white;
        left: 25px;
        top: 5px;
        font-size: 15px;
        padding: 0px 10px;
        font-weight: 900;
        border-radius: 3px;
        border: none !important;
        letter-spacing: 1px;
        text-transform: capitalize;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
    }

    @media only screen and (max-width: 992px) {
        div#uhjl {
            height: auto !important;
            display: block !important;
        }


        .search-wrapper {
            display: flex;
            flex-direction: column;
            position: relative;
            top: 20px !important;
            /* width: 800px; */
            width: 90%;
            margin-top: 19px !important;
            margin: auto !important;
        }


        .lockal {
            font-family: 'Bahnschrift Regular', sans-serif;
            height: 100px;
            position: relative;

            border: 1px solid #e4e4e4;
            padding: 15px 0;
            border-radius: 3px;
            margin-bottom: 10px;
            display: flex;
            width: 180px;
            margin: 20px 10px;
            /* padding: 30px 0px !important; */
            padding: 10px;
            height: 120px;
            border-radius: 20px;
            box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
            justify-content: center;
            align-items: center;
            align-content: center;
            margin-top: 60px;
        }


        .search-tabs a {
            float: left;
            padding: 6px 8px;
            text-decoration: none;
            color: var(--section-bg) !important;
            font-size: var(--font-size-medium);
            font-family: var(--font-regular);
            -webkit-border-top-left-radius: 7px;
            -webkit-border-top-right-radius: 7px;
            -moz-border-radius-topleft: 7px;
            -moz-border-radius-topright: 7px;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
            box-sizing: border-box;
            cursor: pointer;
            font-size: 14px;
        }



    }




    .lockal p {
        text-transform: capitalize !important;
    }

    @media only screen and (max-width: 500px) {


        section.anitext {

            padding-bottom: 50px;
        }

        .waviy {
            position: relative;
            padding-bottom: 50px;
        }


        .lockal {
            font-family: 'Bahnschrift Regular', sans-serif;
            height: 100px;
            position: relative;

            border: 1px solid #e4e4e4;
            padding: 15px 0;
            border-radius: 3px;
            margin-bottom: 10px;
            display: flex;
            width: 100%;
            margin: 20px 10px;
            /* padding: 30px 0px !important; */
            padding: 10px;
            height: 120px;
            border-radius: 20px;
            box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
            justify-content: center;
            align-items: center;
            align-content: center;
            margin-top: 0px;
        }


        .search-wrapper {
            display: flex;
            flex-direction: column;
            position: relative;
            top: 20px !important;
            /* width: 800px; */
            width: 90%;
            margin-top: 19px !important;
            margin: auto !important;
            margin-bottom: 35px !important;
        }

        ul.search-tabs.group li a {
            font-size: 10px;
        }

        section.anitext {
            text-align: center;
            width: 90% !important;
            margin: auto;
        }

        img.logo.d-lg-none {
            width: 199px !important;
        }

        .marquee-sibling {
            font-size: 12px !important;
        }

        .waviy {
            margin: auto;
            width: 100%;
            padding-bottom: 20px;
        }

        .waviy span {
            font-size: 12px !important;
            font-weight: 600 !important;
        }


    }

    section#contur {
        background: #FFFFFF;

    }

    img.mratime {
        width: 50px;
    }


    .type-wrap {
        font-size: 50px;
        padding: 20px;
    }

    /* the above is for styling puposes only */


    #table {
        display: table;
        width: 100%;
        height: 100%;
        background-color: #e5e5e5;
    }

    #centeralign {
        display: table-cell;
        vertical-align: middle;
    }
</style>
<!-- Study Club -->
<!-- Brand Detail -->
<!-- Search click event -->
@include('frontend.component.scroller')

<div class="banner d-md-flex d-none" id="uhjl">
    <div class="search-wrapper">
        <ul class="search-tabs group">
            <li class="brand active"><a onclick="drugObject.changeSearchOption('brand')" class="search_option_type search_by_brand">Brand</a></li>
            <li class="generic"><a onclick="drugObject.changeSearchOption('generic')" class="search_option_type search_by_generic">Generic</a></li>
            <li class="indication"><a onclick="drugObject.changeSearchOption('indication')" class="search_option_type search_by_indication">Indication</a></li>
            <li class="manufacture"><a onclick="drugObject.changeSearchOption('manufacturer')" class="search_option_type search_by_manufacturer">Manufacturer</a></li>
        </ul>
        <div class="search">
            <input class="search-bar no-outline" type="text" id="searchDrugOption">
            <button class="search-btn no-outline" onclick="drugObject.searchBrandInformation()" id="searchInformation"><img src="../frontend/images/icons/magnifying-glass.svg" class="search-icon" alt=""></button>
        </div>
        <div class="alphabets">
            <a onclick="drugObject.searchAlphabetically('a')" class="alphabet-link">A</a>
            <a onclick="drugObject.searchAlphabetically('b')" class="alphabet-link">B</a>
            <a onclick="drugObject.searchAlphabetically('c')" class="alphabet-link">C</a>
            <a onclick="drugObject.searchAlphabetically('d')" class="alphabet-link">D</a>
            <a onclick="drugObject.searchAlphabetically('e')" class="alphabet-link">E</a>
            <a onclick="drugObject.searchAlphabetically('f')" class="alphabet-link">F</a>
            <a onclick="drugObject.searchAlphabetically('g')" class="alphabet-link">G</a>
            <a onclick="drugObject.searchAlphabetically('h')" class="alphabet-link">H</a>
            <a onclick="drugObject.searchAlphabetically('i')" class="alphabet-link">I</a>
            <a onclick="drugObject.searchAlphabetically('j')" class="alphabet-link">J</a>
            <a onclick="drugObject.searchAlphabetically('k')" class="alphabet-link">K</a>
            <a onclick="drugObject.searchAlphabetically('l')" class="alphabet-link">L</a>
            <a onclick="drugObject.searchAlphabetically('m')" class="alphabet-link">M</a>
            <a onclick="drugObject.searchAlphabetically('n')" class="alphabet-link">N</a>
            <a onclick="drugObject.searchAlphabetically('o')" class="alphabet-link">O</a>
            <a onclick="drugObject.searchAlphabetically('p')" class="alphabet-link">P</a>
            <a onclick="drugObject.searchAlphabetically('q')" class="alphabet-link">Q</a>
            <a onclick="drugObject.searchAlphabetically('r')" class="alphabet-link">R</a>
            <a onclick="drugObject.searchAlphabetically('s')" class="alphabet-link">S</a>
            <a onclick="drugObject.searchAlphabetically('t')" class="alphabet-link">T</a>
            <a onclick="drugObject.searchAlphabetically('u')" class="alphabet-link">U</a>
            <a onclick="drugObject.searchAlphabetically('v')" class="alphabet-link">V</a>
            <a onclick="drugObject.searchAlphabetically('w')" class="alphabet-link">W</a>
            <a onclick="drugObject.searchAlphabetically('x')" class="alphabet-link">X</a>
            <a onclick="drugObject.searchAlphabetically('y')" class="alphabet-link">Y</a>
            <a onclick="drugObject.searchAlphabetically('z')" class="alphabet-link">Z</a>
        </div>
    </div>
    <style>
        section.anitext {
            text-align: center;
            width: 70%;
        }

        .waviy {
            position: relative;
        }

        .waviy span {
            position: relative;
            display: inline-block;
            font-size: 16px;
            font-weight: 800;
            color: #fff;
            text-transform: uppercase;
            animation: flip 5s infinite;
            animation-delay: calc(.5s * var(--i))
        }

        span.newclss {
            font-size: 25px;
            font-weight: 900;
        }

        /* @keyframes flip {
  
        0%,
        80% {
          transform: rotateY(360deg)
        }
       
      } */
    </style>

    <section class="anitext">
        <div class="waviy">
        </div>
    </section>

</div>



<!-- home product slider -->
<div class="home-product-slider-container container">
    <div class="home-product-slider-wrapper">
        <div id="home-product-slider"></div>
    </div>
</div>
<!-- home advert -->
<div class="container advert-container home-advert-container1 home-advert-container-top"></div>
<!-- content -->
<div class="container">
    <div class="row" id="jhaiyam_more">
        <!-- drug update -->
        <div class="col-md-8 col-12">
            <div class="content-section">
                <div class="section-header drug-update-header">
                    <span><img src="{{ url('/') }}/frontend/images/icons/medicine.svg" alt="*"></span>Drug
                    Update
                </div>
                <div class="container">
                    <div class="row" id="bihari">
                        <div class="col-4 col-md-4 section-col new-product-information" style="padding-left: 5px; padding-right: 5px">
                        </div>
                        <div class="col-4 col-md-4  section-col new-brand-information" style="padding-left: 5px; padding-right: 5px">
                        </div>
                        <div class="col-4 col-md-4 section-col new-presentation-information" style="padding-left: 5px; padding-right: 5px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- star product -->
        <div class="col-md-4 col-12">
            <div class="star-product" id="highlighted-product">
            </div>
        </div>
    </div>
</div>
<!-- Team Section -->
<section class="section-team" id='OurDoctors'>
    <div class="container">
        <div class="row">
            <!-- drug update -->
            <div class="col-md-12 col-12">
                <div class="content-section">
                    <div class="section-header drug-update-header">
                        <span><i class="fa fa-user-md un-mesh_icon" aria-hidden="true"></i></span> Our Doctors
                    </div>
                    <div class="row">
                        <!-- Start Single Person -->
                        <div class="col-md-4">
                            <div class="single-person">
                                <div class="person-image">
                                    <!-- <a href="#">
                      <img src="https://i.ibb.co/G2CBWvb/person1.jpg" alt="">
                    </a> -->
                                    <span class="icon">
                                        <i class="fa-solid fa-user-doctor"></i>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name"> <a href="index.php/Doctor/getAllDoctorInformation"> Dr. M.
                                            Khalequjaman </a>
                                    </h3>
                                    <span class="speciality"> ORTHOPEDICS </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-person">
                                <div class="person-image">
                                    <!-- <a href="#">
                      <img src="https://i.ibb.co/nbpNr4r/person2.jpg" alt="">
                    </a> -->
                                    <span class="icon">
                                        <i class="fa-solid fa-user-doctor"></i>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name"> <a href="index.php/Doctor/getAllDoctorInformation"> Dr. G. M.
                                            Ruhul Kuddus </a>
                                    </h3>
                                    <span class="speciality"> ORTHOPEDICS </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-person">
                                <div class="person-image">
                                    <!-- <a href="#">
                      <img src="https://i.ibb.co/25zdRMr/person3.jpg" alt="">
                    </a> -->
                                    <span class="icon">
                                        <i class="fa-solid fa-user-doctor"></i>
                                    </span>
                                </div>
                                <div class="person-info">
                                    <h3 class="full-name"><a href="index.php/Doctor/getAllDoctorInformation"> Dr. Md. Nazmul
                                            Huda </a>
                                    </h3>
                                    <span class="speciality"> ORTHOPEDICS </span>
                                </div>
                            </div>
                        </div>
                        <!-- / End Single Person -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="container" id='ImportantInformation'>
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="content-section">
                <div class="section-header drug-update-header section-header-bottom">
                    <span><i class="fa fa-info-circle un-mesh_icon" aria-hidden="true"></i></span>Important Information<a class="section-header-view-all-btn no-outline" href="#">See All Address</a>
                    <div class="row" id="jclin">
                        <div class="col-md-4">
                            <a href="#" class="okta" id="okta1"> <img src="https://cdn-icons-png.flaticon.com/512/4625/4625809.png" alt="" width="65px" height="65px"> 24 hours Pharmacy</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="okta" id="okta2"> <img src="https://cdn-icons-png.flaticon.com/512/6010/6010253.png" alt="" width="65px" height="65px">Ambulance Service</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="okta" id="okta3"> <img src="https://cdn-icons-png.flaticon.com/512/7251/7251772.png" alt="" width="65px" height="65px">Blood Bank</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="okta" id="okta4"> <img src="https://cdn-icons-png.flaticon.com/512/1856/1856063.png" alt="" width="65px" height="65px">Cancer Hospital</a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="okta" id="okta5"><img src="https://cdn-icons-png.flaticon.com/512/1589/1589705.png" alt="" width="65px" height="65px">Cardiac Hospitals</a>
                        </div>


                        <div class="col-md-4" id="bismilaalla">
                            <span>new</span>
                            <a href="#" class="okta" id="okta6"><img src="https://cdn-icons-png.flaticon.com/512/2818/2818318.png" alt="" width="65px" height="65px">Journal Dental</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- drug update -->
    <div class="row">

        <div class="col-md-4 col-12">
            <div class="content-section">
                <div class="important-information-col">
                    <img src="#" alt="">
                </div>
            </div>
        </div>



    </div>

</div>
</div>
</div>

<!-- special reports slider -->
<div class="home-special-report-slider-container container">
    <div class="home-special-report-slider-wrapper content-section">
        <div class="section-header" style="margin-bottom: 24px;">
            <span><i class="fa fa-bug un-mesh_icon" aria-hidden="true"></i></span>Special Reports
            <a class="section-header-view-all-btn no-outline" href="#">See All Special Reports</a>
        </div>
        <div id="home-special-report-slider" class="home-special-report-list"></div>
    </div>
</div>

<!-- home advert -->
<div class="container advert-container home-advert-container2 home-advert-container-mid" style="padding-top: 30px;">
</div>
<!-- MiMS Learning slider -->
<!-- content -->
<div class="container">
    <div class="row">
        <!-- job circular -->
        <div class="col-md-6 col-12">
            <div class="content-section" style="padding: 0; max-height: none;">
                <div class="section-header own-pad" style="margin-bottom: 16px;">
                    <span><img src="../frontend/images/icons/briefcase.svg" alt="*"></span>Job
                    Circular
                    <a class="section-header-view-all-btn no-outline" href="#">See All jobs</a>
                </div>
                <div class="uk_tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">medical</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">pharma</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <a href="index.php/Job/showJobDetail?JobID=">
                                <div class="media-list-left-image">
                                    <div class="media">
                                        <div class="media-left">

                                            <img src="#" class="media-object">

                                        </div>
                                        <div class="media-body">
                                            <span class="bahuthard">New</span>
                                            <h4 class="media-heading">

                                            </h4>
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>



                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <a href="index.php/Job/showJobDetail?JobID=">
                                <div class="media-list-left-image">
                                    <div class="media">
                                        <div class="media-left">

                                            <img src="#" class="media-object">

                                        </div>
                                        <div class="media-body">
                                            <span class="bahuthard">New</span>
                                            <h4 class="media-heading">

                                            </h4>
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- local news -->
        <div class="col-md-6 col-12">
            <div class="content-section" style="padding: 0px; max-height: none;">
                <div class="section-header own-pad" style="margin-bottom: 16px;">
                    <span><img src="../frontend/images/icons/newspaper.svg" alt="*"></span>Pharma News
                    <a class="section-header-view-all-btn no-outline" href="#">See
                        All News</a>
                </div>
                <div class="container ">

                    <a href="index.php/News/showIndividualNewsDetail?NewsID=">
                        <div class="media-list-left-image">
                            <div class="media">
                                <div class="media-left">

                                    <img src="#" class="media-object">

                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">

                                    </h4>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>
    <!-- special reports slider -->



    <div class="home-special-report-slider-container container" id="durandar">



        <div class="home-special-report-slider-wrapper content-section">
            <img src="https://img.icons8.com/color/512/last-12-hours.png" class="mratime" alt="">


            <section id="contur">
                <div class="mt_counter">
                    <div class="new_cunter">
                        <div class="lockal">
                            <div>
                                <h2 class="count">
                                    <div class="counting" data-count="0">0</div>
                                </h2>

                                <p>Brand</p>
                            </div>
                            <div>
                                <i class="fa fa-registered" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="lockal">
                            <div>


                                <h2 class="count">
                                    <div class="counting" data-count="">0</div>
                                </h2>
                                <p>Generic</p>
                            </div>
                            <div>
                                <i class="fa fa-flask" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="lockal">
                            <div>
                                <h2 class="count">
                                    <div class="counting" data-count="">0</div>
                                </h2>

                                <p>Herbal</p>
                            </div>
                            <div>
                                <img src="https://medex.com.bd/img/dosage-forms/herbal-meds-2.png" alt="" width="33px">
                            </div>
                        </div>
                        <div class="lockal">
                            <div>
                                <h2 class="count">
                                    <div class="counting" data-count="">0</div>
                                </h2>

                                <p>Pharma</p>
                            </div>
                            <div>
                                <i class="fa fa-industry" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="lockal">
                            <div>
                                <h2 class="count">
                                    <div class="counting" data-count="0">0</div>
                                </h2>

                                <p>doctor</p>
                            </div>
                            <div>
                                <i class="fa fa-user-md" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class=" home-special-report-slider-container container" id="my_tub">



        <div class="home-special-report-slider-wrapper content-section">






            <div class="section-header" style="margin-bottom: 24px;">
                <span><img src="../frontend/images/icons/videoclip.svg" alt="*"></span>Video
                Gallery
                <a class="section-header-view-all-btn no-outline" href="#">See All
                    Videos</a>
            </div>
            <!--<div id="home-youtube-slider" class="home-youtube-list"></div>-->
            <div class="slider">


                <div class="youtube-video">
                    <a href="#" onclick="frontendCommonMethods.youtubeFullScreen()"> <img src="#">
                    </a>
                    <h4> <a href="#" onclick="frontendCommonMethods.youtubeFullScreen()">

                        </a> </h4>
                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <!-- international health -->

        <!-- important addresses -->
    </div>
</div>
<!-- dev@ -->
<!-- bottom quote section -->

<div style="display: none" id="youtubeFullScreenModal" class="fullScreenImage">
    <div style="height: 60px">
        <!--		<div class="fb-share-button" data-href="http://localhost/mims/Video/getAllVideo?id=q-1TAxlkOvg" data-layout="box_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fmims%2FVideo%2FgetAllVideo%3Fid%3Dq-1TAxlkOvg&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>-->
        <a style="float: right; padding: 10px" class="btn-closeView" onclick="frontendCommonMethods.closeYoutubeScreen()" title="Close"><img width="40px" height="40px" src="#"></a>
        <!--		<a style="float: right; padding: 10px" class="btn-closeView" onclick="frontendCommonMethods.facebookShare()" title="Facebook Share"><img width="40px" height="40px" src="-->

        <!--application/views/images/icons/facebook-share.png"></a>-->
    </div>
    <div id="youtube-fullScreen" style="display: none; padding: 0px 50px 50px 50px; height: 100%" class="full-screen-photo-holder"></div>
</div>

<script>
    $('.banner').css('background-image', '../frontend/images/banner-bg.jpg');
    $('.slick-prev.slick-arrow:before').css('background-image', '../frontend/images/icons/left-arrow-white.png');
    $('.slick-next.slick-arrow:before').css('background-image', '../frontend/images/icons/right-arrow-white.png');
    $('.slick-prev.slick-arrow.slick-disabled:before').css('background-image', '../frontend/images/icons/left-arrow-white.png');
    $('.slick-next.slick-arrow.slick-dbefore').css('background-image', '../frontend/images/icons/right-arrow-white.png');
    frontendCommonMethods2.getAdvertisement(['home-product-slider'], 3);
    frontendCommonMethods.getCommonAdvertisement(['home-advert-container-top', 'home-advert-container-mid']);
    drugObject.productType = "REGULAR_PRODUCT";
    drugObject.getSpecialReports();
    // drugObject.getMimsLearning();
    drugObject.getJobCirculars();
    drugObject.getLocalNews();
    drugObject.getInternationalHealth();
    drugObject.getImportantAddress();
    drugObject.getNewBrands(0);
    drugObject.getNewPresentations(0);
    drugObject.getNewProducts(0);
    drugObject.getHighlightedBrands();
    frontendCommonMethods.getNumberOfVisitor();
    drugObject.getAllDrugInfoForAutoComplete('brand');
    frontendCommonMethods.mainMenuActivation('home');
    $(document).ready(function() {
        // $.getScript("http://connect.facebook.net/en_US/all.js# xfbml=1", function () {
        // 	FB.init({ appId: 'xxxxxxxx', status: true, cookie: true, xfbml: true });
        // });
    });
    youTubeVideos = "";
    var individual_youtube = '';
    var youtube_title = '';
    for (var youtube_no = 0; youtube_no < 4; youtube_no++) {
        youtube_title = youTubeVideos[youtube_no].Title;
        youtube_title = youtube_title.length > 65 ? youtube_title.substr(0, 60) + ' ...' : youtube_title;
        individual_youtube = '<div class="home-special-report-slide">' +
            '<a onclick="frontendCo mmonMethods.youtubeFullScreen(' + youtube_no + ')"><img src="' + youTubeVideos[youtube_no].thumbnail + '"  alt="">' +
            '<p class="home-special-report-slide-title">' + youtube_title + '</p>' +
            '</di v>';
        $('.home-youtube-list').append(individual_youtube);
    }
    $('#home-youtube-slider').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 1000,
        infinite: false,
        arrows: true,
        responsive: [{
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                arrows: false,
            }
        }]
    });
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

<script>

</script>

@endpush