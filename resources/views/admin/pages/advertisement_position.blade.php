@extends('admin.layout.main')


@push('title') Advertisement Position @endpush

@section('main-section')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Advertisement Position List</h1>
            </div>
            <div class="col-sm-6">

                <button type="button" class="btn float-sm-right btn-primary add_new">Add New Advertisement Position</button>
           
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
                    <h4 class="modal-title">Add New Advertisement Position Record</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-5 px-5">
                    <!-- <form class="form-horizontal"> -->
                        <div class="card-body">
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name <span class="text-red">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Name" name="advertisement_position_name" required data-parsley-maxlength="200">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Class Name <span class="text-red">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Class Name" name="advertisement_position_class_name" required data-parsley-maxlength="200">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Width <span class="text-red">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Width" name="advertisement_position_width" required data-parsley-type="number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Height <span class="text-red">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Height" name="advertisement_position_height" required data-parsley-type="number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Number</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Number" name="advertisement_position_number" data-parsley-type="number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Interval</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Interval" name="advertisement_position_interval" data-parsley-type="number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Price" name="advertisement_position_price" data-parsley-type="number">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Is Featured </label>
                                <div class="col-sm-9">
                                <select class="form-control" name="advertisement_position_is_featured">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>                        
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Is Active </label>
                                <div class="col-sm-9">
                                <select class="form-control" name="advertisement_position_is_active">
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
                    <button type="submit" data-url="{{ route('setting.advertisement.position.store') }}" class="btn btn-primary" id="create_form_btn">Create</button>
                    <button type="submit" data-url="{{ route('setting.advertisement.position.update') }}" class="btn btn-primary" id="update_form_btn">Update</button>
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

     <!-- Page specific script -->
     <script>
        $(function () {

            
            var table = $('#table-standard');

            $('#create-form').parsley({
                trigger: 'focusout'
            });

            


             //initializing the datatable from main.blade.php function
            var tableName = '#table-standard';
            var ajaxUrl = "{{ route('setting.advertisement.position.index') }}";
            var columnsArray = [                  
                    { data: 'advertisement_position_name', name: 'advertisement_position_name', title: 'Name'},
                    { data: 'advertisement_position_class_name', name: 'advertisement_position_class_name', title: 'Class Name'},
                    { data: 'advertisement_position_width', name: 'advertisement_position_width', title: 'Width'},
                    { data: 'advertisement_position_height', name: 'advertisement_position_height', title: 'Height'},
                    {
                        data: null,
                        title: 'Action',
                        render: function(data, type, row) {
                            return '<a href="#" class="edit" data-id="'+row.advertisement_position_id+'"><i class="fas fa-edit text-success"></i></a> <a href="#" class="delete" data-id="'+row.advertisement_position_id+'"><i class="fas fa-trash text-danger"></i></a>';
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
                $("#modal_create_form .modal-title").text("Add New Advertisement Position Record");


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
            
                $("#modal_create_form .modal-title").text("Update Strength Form Record");

                var id = $(this).data('id');
                var url = "{{ route('setting.advertisement.position.edit', ':id') }}";
                url = url.replace(':id', id);
                
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        var data = response.data;  
                        console.log("data==>", data.generic_indication)

                        $("input[name=id]").val(data.advertisement_position_id);
                        $("input[name=advertisement_position_name]").val(data.advertisement_position_name);
                        $("input[name=advertisement_position_class_name]").val(data.advertisement_position_class_name);
                        $("input[name=advertisement_position_width]").val(data.advertisement_position_width);
                        $("input[name=advertisement_position_height]").val(data.advertisement_position_height);
                        $("input[name=advertisement_position_number]").val(data.advertisement_position_number);
                        $("input[name=advertisement_position_interval]").val(data.advertisement_position_interval);
                        $("input[name=advertisement_position_price]").val(data.advertisement_position_price);
                        $("select[name=advertisement_position_is_featured]").val(data.advertisement_position_is_featured);
                        $("select[name=advertisement_position_is_active]").val(data.advertisement_position_is_active);
                        
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
                        var url = "{{ route('setting.advertisement.position.destroy', ':id') }}";
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
                                    title: "Advertisement Position record deleted successfully",
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
    </script>

@endpush