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

            <button type="button" class="btn float-sm-right btn-primary" data-toggle="modal" data-target="#modal-default">Add New Generic</button>
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
                <table id="example1" class="table table-bordered table-striped">
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

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
            <form class="form-horizontal">
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
                            <input type="text" class="form-control" placeholder="Name">
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
                    <button type="button" class="btn btn-primary">Create</button>
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
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
        //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    
    
        $('#s1, #s2, #s3, #s4, #s5, #s6, #s7, #s8, #s9, #s10').summernote({
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
        });
    </script>
@endpush