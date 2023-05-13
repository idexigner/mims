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
            <div id="searchDrugOptionautocomplete-list" class="autocomplete-items"></div>
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


<script>

$(document).ready(function() {
    $('#searchDrugOption').on('keyup', function() {
        var searchKeyword = $(this).val();
        console.log("searchKeyword", searchKeyword.length)
        if(searchKeyword.length > 1) {
            $.ajax({
                url: '{{ url('/')}}/search',
                type: 'GET',
                dataType: 'json',
                data: {keyword: searchKeyword},
                success: function(response) {
                    console.log("Search-> ", response);
                    data = response.data;

                    $('#searchDrugOptionautocomplete-list').html('');
                    // $.each(data)
                    $.each(data, function(index, item){
                        // <strong>ASCA</strong>
                        $("#searchDrugOptionautocomplete-list").append(`
                            <div>
                            ${item.brand_name} ${item.dosage_form.dosageform_name}<input type="hidden" value="${item.brand_name}">
                            </div>
                        `);
                    })
                    
                    // $('#searchDrugOptionautocomplete-list').html(response);
                }
            });
        } else {
            $('#searchDrugOptionautocomplete-list').empty();
        }
    });
});
</script>
