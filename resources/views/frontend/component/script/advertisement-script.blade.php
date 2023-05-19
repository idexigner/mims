<script>
    function getAdvertisements(v){

        switch(v){
            case 'home':
                advertisementMethods.home();
            break;
            

            default:
        }
    }

    var advertisementMethods = {

        home: function(){
            $.ajax({
                url: "{{ route('get_home_advertisement')}}",
                type: 'GET',
                dataType: 'json',
                data: {
                    // condition: 'brand_is_new_product',
                    limit: 5
                },
                success: function(response) {
                    console.log("get_home_advertisement-> ", response);
                    $('.home-product-slide').html('');
                    // $.each(response.data, function(index, specialReport) {
                    //     special_report_title = specialReport.special_report_title.length > 30 ? specialReport.special_report_title.substr(0, 30) + ' ...' : specialReport.special_report_title;

                    //     $('.sidebar-special-reports').append(`
                    //         <div class="row news">
                    //             <div class="col-3" style="padding: 5px; padding-left: 16px;">
                    //                 <img class="news-img" style="width: 100%; height: auto; padding: 0;" src="{{ url('/') }}/storage/images/special_report/${specialReport.special_report_image}" alt="" onerror="this.src=\'https://image.ibb.co/cBMMNq/default-placeholder.png\'">
                    //             </div>
                    //             <div class="col-9" style="padding-right: 0; padding-left: 7px">
                    //                 <p class="news-title side-col">
                    //                     <a href="{{ url('/') }}/special_report_detail/${specialReport.special_report_id}">${special_report_title}...</a>
                    //                 </p>
                    //             </div>
                    //         </div> 
                    //     `);
                    // });

               

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
</script>