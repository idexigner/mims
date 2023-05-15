@extends('frontend.layout.main')

@push('title') Special Report @endpush


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

    .select2-container--default .select2-selection--single {
        border: none;
    }

    .select2-selection__arrow {
        display: none !important;
    }
</style>



<div class="banner title-banner d-md-flex d-none">
    <h2>Pharma News</h2>
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
			<div class="news-details">
				<div class="featured-news-img">
					<img class="img-fluid news-image" src="" alt="" onerror="this.src='https://image.ibb.co/cBMMNq/default-placeholder.png'">
				</div>
				<!-- title -->
				<h2 class="news-title"></h2>
				<!-- description -->
				<p class="news-description"></p>

                {{-- <p><a href="#" target="_blank" id="see_article" class="read-more">See Article</a></p> --}}
            </div>

            <div class="doctor-list container" id="speical-report-list">
                
            </div>

			<!-- pagination -->
			<nav class="mims-pagination" style="margin-top: 36px;">
                <ul class="pagination" id="speical-report-pagination">
                    <li class="page-item active"><a class="page-link" href="#" data-page="1">1</a></li>
                    <!-- Add more page links here -->
                </ul>
            </nav>
			<div class="in-page-advert special-report-advert-bottom"></div>
		</div>
        <div class="col-md-4 col-12">
            <div class="container" id="sidebar">
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

            </div>
        </div>
    </div>
</div>



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


@include('frontend.component.script.frontend-sidebar-script')
@push('js-link')

<script src="{{ url('/')}}/admin/plugins/select2/js/select2.full.min.js"></script>

<script>
    $(document).ready(function() {

        $('.select2').select2()


      
        newsMethods.getNewsDetail({{$id}});
        newsMethods.getNews(1);
        sidebar.getSidebar();
      
    });


    

   

    var newsMethods = {
        getNewsDetail: function(id) {
            $.ajax({
                url: "{{ url('/')}}/get_news_detail/"+id,
                type: 'GET',
                dataType: 'json',
                // data: {
                //     condition: 'brand_is_new_product',
                //     limit: 7
                // },
                success: function(response) {
                    console.log("get_news_detail", response);

                    var data = response.data;
                    
                    $(".news-image").attr("src", "{{url('/')}}/storage/images/news/"+data.news_image);
                    
                    $(".news-title").html(data.news_title);
                    $(".news-description").html(data.news_description);

                    $(".news-description").append(`
                        
                    `);
                    // $("#see_article").attr("href", data.news_link_address);

                    // $("#generic_name").html(`<a href="{{url('/')}}/generic_detail/${data.generic.generic_id}">${data.generic.generic_name}</a>`);
                    // $("#manufacturer_name").html(`<a href="{{url('/')}}/manufacturer_detail/${data.manufacturer.manufacturer_id}">${data.manufacturer.manufacturer_name}</a>`);

                    // // $("#manufacturer_name").html(data.manufacturer.manufacturer_name);
                    // $("#drug_class").html(data.generic.generic_classification);
                    // $("#safety_remark").html(data.generic.generic_safety_remark);
                    // $("#dosage_form").html(data.dosage_form.dosageform_name);
                    // $("#strength_name").html(data.strength.strength_name);
                    // $("#pack_size").html(data.pack_size.packsize_name);
                    // $("#price").html(data.brand_price + " Tk");
                    // $("#indication_para").html(data.generic.generic_indication);
                    // $("#dosage_administration").html(data.generic.generic_dosage_administration);
                    // $("#contraindication_precaution").html(data.generic.generic_contraindication_precaution);
                    // $("#side_effect").html(data.generic.generic_side_effect);
                    // $("#pregnancy_lactation").html(data.generic.generic_pregnancy_lactation);
                  
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
        getNews: function(page) {

            var data = {};
            data.page = page;
           
            $.ajax({
                url: "{{ route('web_get_news') }}",
                type: 'GET',
                dataType: 'json',
                data: data,
                
                success: function(response) {


                    console.log("web_get_news-> ", response)
                    var data = response.data.data;
                    var currentPage = response.current_page;
                    var lastPage = response.last_page;
                    var maxPagesToShow = 5; // maximum number of pages to show at a time
                    var halfMaxPagesToShow = Math.floor(maxPagesToShow / 2); // half of maxPagesToShow rounded down


                    $('#speical-report-list').html('');
                    $.each(data, function(index, news) {

                        news_description = news.news_description != null && news.news_description.length > 100 ? news.news_description.substr(0, 100) + ' ...' : news.news_description;

                      
                        $('#speical-report-list').append(`
                        <div class="news-item row">
                            <div class="news-thumb col-3">
                                <img src="{{ url('/') }}/storage/images/news/${news.news_image}"  alt="" onerror="this.src=\'https://image.ibb.co/cBMMNq/default-placeholder.png\'">
                            </div>
                            <div class="news-info col-9">
                                <h3 class="news-title">
                                <a class="news-title" href="{{ url('/') }}/news_detail/${news.news_id}">${news.news_title}</a>
                                </h3>
                                <p class="news-summary">${news_description}</p>
                                <a href="{{ url('/') }}/news_detail/${news.news_id}" class="read-more">Read More</a>
                            </div>
                        </div>
                        
                        `);
                    });

                    // Update the pagination links


                    // handle pagination links
                    var paginationHtml = '';

                    // calculate start and end pages of the sliding window
                    var startPage = Math.max(1, currentPage - halfMaxPagesToShow);
                    var endPage = Math.min(lastPage, startPage + maxPagesToShow - 1);

                    // show "Previous" button if not on first page
                    if (currentPage > 1) {
                        paginationHtml += '<li class="page-item"><a class="page-link" href="#" onclick="newsMethods.getNews(' + (currentPage - 1) + ')"><i class="fas fa-angle-double-left"></i></a></li>';
                    } else {
                        paginationHtml += '<li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>';
                    }

                    // show page numbers within sliding window
                    for (var i = startPage; i <= endPage; i++) {
                        if (i == currentPage) {
                            paginationHtml += '<li class="page-item active"><a class="page-link" href="#">' + i + '</a></li>';
                        } else {
                            paginationHtml += '<li class="page-item"><a class="page-link" href="#" onclick="newsMethods.getNews(' + i + ')">' + i + '</a></li>';
                        }
                    }

                    // show "Next" button if not on last page
                    if (currentPage < lastPage) {
                        paginationHtml += '<li class="page-item"><a class="page-link" href="#" onclick="newsMethods.getNews(' + (currentPage + 1) + ')"><i class="fas fa-angle-double-right"></i></a></li>';
                    } else {
                        paginationHtml += '<li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>';
                    }

                    console.log("paginationHtml->", paginationHtml);
                    $('#speical-report-pagination').html(paginationHtml);



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