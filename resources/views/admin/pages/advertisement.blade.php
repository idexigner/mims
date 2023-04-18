@extends('admin.layout.main')


@push('title') Advertisement @endpush

@push('css-link')
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

@endpush

@section('main-section')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Advertisement List</h1>
            </div>
            <div class="col-sm-6">

                <button type="button" class="btn float-sm-right btn-primary add_new">Add New Advertisement</button>
           
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            

            <div class="card">
            
                <div class="card-body">
                    <table id="table-standard" class="table table-bordered table-striped">
                       
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal_create_form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <form class="form-horizontal" id="create-form">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add New Advertisement Record</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-5 px-5">
                    <!-- <form class="form-horizontal"> -->
                        <div class="card-body">
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Organization <span class="text-red">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Name" name="advertisement_name" required data-parsley-maxlength="200">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Advertisement For </label>
                                <div class="col-sm-9">
                                <select class="form-control" onchange="changeAdvertisement(this.value)">
                                    <option value="">Select Item</option>
                                    <option value="generic">Generic</option>
                                    <option value="brand">Brand</option>
                                    <option value="indication">Indication</option>
                                </select>                        
                                </div>
                            </div>
                            <div class="form-group row d-none" id="generic">
                                <label class="col-sm-3 col-form-label">Generic</label>
                                <div class="col-sm-9">
                                <select class="form-control select2" style="width:100%">
                                    <option value="">Select Item</option>
                                    <option value="">Option 1</option>  
                                    <option value="">Option 2</option> 
                                    <option value="">Option 3</option>    
                                </select>                        
                                </div>
                            </div>
                            <div class="form-group row d-none" id="brand">
                                <label class="col-sm-3 col-form-label">Brand</label>
                                <div class="col-sm-9">
                                <select class="form-control select2" style="width:100%">
                                    <option value="">Select Item</option>
                                    <option value="">Option 1</option>  
                                    <option value="">Option 2</option> 
                                    <option value="">Option 3</option>    
                                </select>                        
                                </div>
                            </div>
                            <div class="form-group row d-none" id="indication">
                                <label class="col-sm-3 col-form-label">Indication</label>
                                <div class="col-sm-9">
                                <select class="form-control select2" style="width:100%">
                                    <option value="">Select Item</option>
                                    <option value="">Option 1</option>  
                                    <option value="">Option 2</option> 
                                    <option value="">Option 3</option>    
                                </select>                        
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Advertisement Position <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                <select class="form-control select2" style="width:100%">
                                    <option value="">Select Item</option>
                                    <option value="">Option 1</option>  
                                    <option value="">Option 2</option> 
                                    <option value="">Option 3</option>    
                                </select>                        
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image<span class="text-red">*</span></label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Title">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Unpublished Date <span class="text-red">*</span></label>
                                <div class="col-sm-9">
                                    <div class="input-group date" id="publishDate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#publishDate"/>
                                        <div class="input-group-append" data-target="#publishDate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Is Active </label>
                                <div class="col-sm-9">
                                <select class="form-control" name="advertisement_is_active">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>                        
                                </div>
                            </div>


                            <input type="hidden" name="id">
                        

                       
                        </div>
                       
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" data-url="{{ route('advertisement.store') }}" class="btn btn-primary" id="create_form_btn">Create</button>
                    <button type="submit" data-url="{{ route('advertisement.update') }}" class="btn btn-primary" id="update_form_btn">Update</button>
                </div>
            </form>
            </div>
            <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection

@push('js-link')

    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- date-range-picker -->
    <!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

     <!-- Page specific script -->
     <script>
        $(function () {

            
            var table = $('#table-standard');

            $('#create-form').parsley({
                trigger: 'focusout'
            });

            $('.select2').select2()

            bsCustomFileInput.init();

            $('#applicationDeadline').datetimepicker({
                format: 'L',
                icons: {
                    // Define the icons for Today and Clear buttons
                    today: 'far fa-calendar-check',
                    clear: 'far fa-trash-alt'
                },
                buttons: {
                    // Add Today and Clear buttons
                    // You can customize the titles and classes as needed
                    showToday: true,
                    showClear: true,
                    todayTitle: 'Select Today',
                    clearTitle: 'Clear Date',
                    todayClass: 'btn btn-primary btn-sm',
                    clearClass: 'btn btn-danger btn-sm'
                }
            });
            $('#publishDate').datetimepicker({
                format: 'L',
                icons: {
                    // Define the icons for Today and Clear buttons
                    today: 'far fa-calendar-check',
                    clear: 'far fa-trash-alt'
                },
                buttons: {
                    // Add Today and Clear buttons
                    // You can customize the titles and classes as needed
                    showToday: true,
                    showClear: true,
                    todayTitle: 'Select Today',
                    clearTitle: 'Clear Date',
                    todayClass: 'btn btn-primary btn-sm',
                    clearClass: 'btn btn-danger btn-sm'
                }
            });

            


             //initializing the datatable from main.blade.php function
            var tableName = '#table-standard';
            var ajaxUrl = "{{ route('advertisement.index') }}";
            var columnsArray = [                  
                    { data: 'advertisement_title', name: 'advertisement_title', title: 'Title', width: '75%'},
                    {
                        data: null,
                        title: 'Action',
                        render: function(data, type, row) {
                            return '<a href="#" class="edit" data-id="'+row.advertisement_id+'"><i class="fas fa-edit text-success"></i></a> <a href="#" class="delete" data-id="'+row.advertisement_id+'"><i class="fas fa-trash text-danger"></i></a>';
                        },
                        orderable: false,
                        searchable: false
                    }
                ];           
            initializeDataTable(tableName, ajaxUrl, columnsArray);

            
            // handle click event for "Add" button
            $('.add_new').on('click', function(){

                $("#create_form_btn").show();
                $("#update_form_btn").hide();
                $("#modal_create_form .modal-title").text("Add New Advertisement Record");


                $("#create-form")[0].reset();               

                $("#modal_create_form").modal('show');
            });
              

            //For Creating and updating the record
            $('#create-form').submit(function(e) {
                e.preventDefault();
                var url = $("#create_form_btn").data('url');
                var type = "POST";
                
                if($('#create_form_btn').is(':hidden')){
                    url = $("#update_form_btn").data('url');
                    type = "PUT";
                }
                
                $.ajax({
                    url: url, 
                    type: type,             
                    data: $(this).serialize(), // new FormData($("#create-post-form")[0]), //
                    success: function(response) {
                        // $('#create-post-form')[0].reset();
                        table.DataTable().ajax.reload();
                        $("#modal_create_form").modal('hide');
                        Toast.fire({
                            icon: 'success',
                            title: response.message, //"Generic record deleted successfully",
                            timer: 3000,
                        });


                        // alert(response.message);
                    },
                    error: function(xhr, status, error) {
                        console.group("Error Block");
                            console.log(xhr);
                            console.log(status);
                            console.log(error);
                        console.groupEnd();   

                        if(xhr.responseJSON.messags){

                            Toast.fire({
                                icon: 'error',
                                title: xhr.responseJSON.message, //"Generic record deleted successfully",
                                timer: 3000,
                            });

                        }else{
                            Toast.fire({
                                icon: 'error',
                                title: 'Something went wrong', //"Generic record deleted successfully",
                                timer: 3000,
                            });
                        }
                                        
                    }
                });
            });

            // handle click event for "Edit" button
            table.on('click', '.edit', function() {
            
                $("#modal_create_form .modal-title").text("Update Advertisement Form Record");

                var id = $(this).data('id');
                var url = "{{ route('advertisement.edit', ':id') }}";
                url = url.replace(':id', id);
                
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        var data = response.data;  
                        console.log("data==>", data.generic_indication)

                        $("input[name=id]").val(data.advertisement_id);
                        $("input[name=advertisement_name]").val(data.advertisement_name);
                        $("select[name=advertisement_is_active]").val(data.advertisement_is_active);
                        
                        $("#modal_create_form").modal('show');
                        $("#create_form_btn").hide();
                        $("#update_form_btn").show();


                        
                    },
                    error: function(xhr, status, error) {
                        console.group("Error Block");
                            console.log(xhr);
                            console.log(status);
                            console.log(error);
                        console.groupEnd();   

                        if(xhr.responseJSON.messags){

                            Toast.fire({
                                icon: 'error',
                                title: xhr.responseJSON.message, //"Generic record deleted successfully",
                                timer: 3000,
                            });

                        }else{
                            Toast.fire({
                                icon: 'error',
                                title: 'Something went wrong', //"Generic record deleted successfully",
                                timer: 3000,
                            });
                        }
                                        
                    }
                });
            });

            // handle click event for "Delete" button
            table.on('click', '.delete', function() {
                var id = $(this).data('id');
             

                Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    timer: 5000,
                    timerProgressBar: true,
                    onOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    }).fire({
                    icon: 'warning',
                    title: 'Are you sure you want to delete the row?',
                    text: "You won't be able to revert this!",
                    }).then((result) => {
                    if (result.isConfirmed) {
                        var currentPage =  table.DataTable().page.info().page;
                        var url = "{{ route('advertisement.destroy', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                console.log(response);
                                
                                Toast.fire({
                                    icon: 'success',
                                    title: "Advertisement record deleted successfully",
                                    timer: 3000,
                                });
                                // reload the table
                                table.DataTable().ajax.reload();
                                table.DataTable().page(currentPage).draw('page');
                            }
                        });
                    } 
                })
            });
            
        });

        function changeAdvertisement(v){
                    $("#generic").addClass("d-none");
                    $("#brand").addClass("d-none");
                    $("#indication").addClass("d-none");

                    if(v == "generic"){
                        $("#generic").removeClass("d-none");
                    } else if (v == "brand"){
                        $("#brand").removeClass("d-none");
                    } else if (v == "indication"){
                        $("#indication").removeClass("d-none");
                    } 
            }
    </script>

@endpush