@extends('admin.layout.main')


@push('title') Generic @endpush

@section('main-section')

<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Generic List</h1>
            </div>
            <div class="col-sm-6">

            <button type="button" class="btn float-sm-right btn-primary add_new">Add New Generic</button>
            <!--             
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
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
                <!-- <div class="card-header">
                <h3 class="card-title">Generic List</h3>
                </div> -->
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-standard" class="table table-bordered table-striped">
                        {{-- <thead>
                            <tr>
                                <th>Generic Name</th>        
                                <th>Action</th>                       
                            </tr>
                        </thead> --}}
                    </table>
                {{-- <table id="table-standard" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>Generic Name</th>
                    <th>Indication Tags</th>
                    <th>Classification</th>
                    <th>Safety Remark</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.5</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.6</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.7</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td>1.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td>312.8</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td>419.3</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td>522.1</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td>420</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td>420.1</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td>413</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td>8.5</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td>3.1</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td>3.3</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td>3.5</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td>1</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td>1</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    <td>
                        <a href="#"><i class="fas fa-edit text-success"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger"></i></a>
                    </td>
                    </tr>
                    <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    </tr>
                    </tfoot>
                </table> --}}
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
            <form class="form-horizontal" id="create-generic-form">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add New Generic</h4>
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
                            <input type="text" class="form-control" name="generic_name" placeholder="Name" required data-parsley-maxlength="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Classification <span class="text-red">*</span></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="generic_classification" placeholder="Classification" required data-parsley-maxlength="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Safety Remark <span class="text-red">*</span></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="generic_safety_remark" placeholder="Safety Remark" required data-parsley-maxlength="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Indication </label>
                            <div class="col-sm-9">
                                <textarea id="generic_indication" name="generic_indication" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Indication Tags</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="generic_indication_tags" placeholder="Indication Tags" data-parsley-maxlength="300">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dosage Administration </label>
                            <div class="col-sm-9">
                                <textarea id="generic_dosage_administration" name="generic_dosage_administration" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contraindication Precaution </label>
                            <div class="col-sm-9">
                                <textarea id="generic_contraindication_precaution" name="generic_contraindication_precaution" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Composition </label>
                            <div class="col-sm-9">
                                <textarea id="generic_composition" name="generic_composition" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pharmacology </label>
                            <div class="col-sm-9">
                                <textarea id="generic_pharmacology" name="generic_pharmacology" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Interaction </label>
                            <div class="col-sm-9">
                                <textarea id="generic_interaction" name="generic_interaction" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Side Effect</label>
                            <div class="col-sm-9">
                                <textarea id="generic_side_effect" name="generic_side_effect" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Overdose Effect </label>
                            <div class="col-sm-9">
                                <textarea id="generic_overdose_effect" name="generic_overdose_effect" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Storage Condition </label>
                            <div class="col-sm-9">
                                <textarea id="generic_storage_condition" name="generic_storage_condition" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pregnancy Lactation </label>
                            <div class="col-sm-9">
                                <textarea id="generic_pregnancy_lactation" name="generic_pregnancy_lactation" class="summernote"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Is Active </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="generic_is_active">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                                </select>                        
                            </div>
                        </div>

                        <input type="hidden" name="id" class="d-none">
                       
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" data-url="{{ route('generic.store') }}" class="btn btn-primary" id="create_form_btn">Create</button>
                    <button type="submit" data-url="{{ route('generic.update') }}" class="btn btn-primary" id="update_form_btn">Update</button>
                </div>
            </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal_create_form2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <form class="form-horizontal" id="edit-generic-form">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add New Generic</h4>
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
                            <input type="text" class="form-control" name="generic_name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Classification <span class="text-red">*</span></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Classification">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Safety Remark <span class="text-red">*</span></label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Safety Remark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Indication </label>
                            <div class="col-sm-9">
                                <textarea id="s1"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Indication Tags</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Indication Tags">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dosage Administration </label>
                            <div class="col-sm-9">
                                <textarea id="s2"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contraindication Precaution </label>
                            <div class="col-sm-9">
                                <textarea id="s3"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Composition </label>
                            <div class="col-sm-9">
                                <textarea id="s4"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pharmacology </label>
                            <div class="col-sm-9">
                                <textarea id="s5"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Interaction </label>
                            <div class="col-sm-9">
                                <textarea id="s6"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Side Effect</label>
                            <div class="col-sm-9">
                                <textarea id="s7"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Overdose Effect </label>
                            <div class="col-sm-9">
                                <textarea id="s8"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Storage Condition </label>
                            <div class="col-sm-9">
                                <textarea id="s9"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pregnancy Lactation </label>
                            <div class="col-sm-9">
                                <textarea id="s10"></textarea>                          
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Is Active </label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                <option>Yes</option>
                                <option>No</option>
                                </select>                        
                            </div>
                        </div>



                        

                        <!-- <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Remember me</label>
                            </div>
                            </div>
                        </div> -->
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer">
                        <button type="submit" class="btn btn-info">Sign in</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                        </div> -->
                        <!-- /.card-footer -->
                    <!-- </form> -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@push('js-link')
    
    <!-- Page specific script -->
    <script>
        $(function () {

            
            var table = $('#table-standard');

            $('#create-generic-form').parsley({
                trigger: 'focusout'
            });
            
            $('.add_new').on('click', function(){

                $("#create_form_btn").show();
                $("#update_form_btn").hide();

                $("#create-generic-form")[0].reset();
                $("textarea.summernote").each(function(){
                    $(this).summernote('code', '');
                });

                $("#modal_create_form").modal('show');
            });

            table.DataTable({
                processing: true,
                serverSide: true,
                // ajax: " route('generic.index') ",
                ajax: "{{ route('generic.index') }}", //"/admin/generic",
                columns: [                  
                    { data: 'generic_name', name: 'generic_name', title: 'Generic Name'},
                    { data: 'generic_indication_tags', name: 'generic_indication_tags', title: 'Indication Tags', width: '40%' },
                    { data: 'generic_classification', name: 'generic_classification', title: 'Classification'},
                    { data: 'generic_safety_remark', name: 'generic_safety_remark', title: 'Safety Remark'},
                    {
                        data: null,
                        title: 'Action',
                        render: function(data, type, row) {
                            return '<a href="#" class="edit" data-id="'+row.generic_id+'"><i class="fas fa-edit text-success"></i></a> <a href="#" class="delete" data-id="'+row.generic_id+'"><i class="fas fa-trash text-danger"></i></a>';
                        },
                        orderable: false,
                        searchable: false
                    }
                ],
                "language": {
                "search": "Search Records:",
                "lengthMenu": "Show _MENU_ Records",
                "zeroRecords": "No matching records found",
                "info": "Showing _START_ to _END_ of _TOTAL_ records",
                "infoEmpty": "Showing 0 to 0 of 0 records",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "Next",
                    "previous": "Previous"
                }
                },
                "pageLength": 10
            });

            
  
    
        $('#generic_indication, #generic_dosage_administration, #generic_contraindication_precaution, #generic_composition, #generic_pharmacology, #generic_interaction, #generic_side_effect, #generic_overdose_effect, #generic_storage_condition, #generic_pregnancy_lactation').summernote({
            height:100,
            toolbar: [
            // ['style', ['style']],
            ['font', ['bold', 'italic', 'underline']],
            // ['fontname', ['fontname']],
            // ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            // ['height', ['height']],
            // ['table', ['table']],
            ['insert', ['link']],//, 'picture', 'hr'
            ['view', ['fullscreen', 'codeview']],
            // ['help', ['help']]
            ],
        });

        $('#create-generic-form').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: $("#create_form_btn").data('url'), //" {{url('/')}}/admin/generic/store",
                type: "POST",             
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

        $('#edit-post-form').submit(function(e) {
                e.preventDefault();

                var post_id =  1; // $generic->id }};

                $.ajax({
                    url: "admin/generic/update/" + post_id,
                    type: "PUT",
                    data: $(this).serialize(),
                    success: function(response) {
                        table.ajax.reload();
                        alert(response.message);
                    },
                    error: function(xhr, status, error) {
                    var errors = xhr.responseJSON.errors;
                    var errorString = '';
                    $.each(errors, function(key, value) {
                        errorString += value + '\n';
                    });

                    alert(errorString);
                }
            });
        });


        // handle click event for "Edit" button
        $('#table-standard').on('click', '.edit', function() {
          
            var id = $(this).data('id');
            var url = "{{ route('generic.edit', ':id') }}";
            url = url.replace(':id', id);
            
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    console.log(response);
                    var data = response.data;    
                    // show the response in a modal
                    // $('#edit-modal').html(response);
                    // $('#edit-modal').modal('show');
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
        $('#table-standard').on('click', '.delete', function() {
            var id = $(this).data('id');
            if (confirm("Are you sure you want to delete this post?")) {
                var currentPage =  $('#table-standard').DataTable().page.info().page;
                // var pageLength = $('#table-standard').DataTable().page.len();
                // var searchValue = $('#table-standard').DataTable().search();

                $.ajax({
                    url: '/admin/generic/destroy/'+id,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                        // console.log(pageLength)
                        // console.log(searchValue)
                        // console.log(currentPage)

                        Toast.fire({
                            icon: 'success',
                            title: "Generic record deleted successfully",
                            timer: 3000,
                        });
                        // reload the table
                        $('#table-standard').DataTable().ajax.reload();
                        // $('#table-standard').DataTable().ajax.reload(null, false)
                        $('#table-standard').DataTable().page(currentPage).draw('page');
                        // $('#table-standard').DataTable().page(currentPage).page.len(pageLength).search(searchValue).draw();
                    }
                });
            }
        });

        });
    </script>
@endpush