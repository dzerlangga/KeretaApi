@extends('layout.main')

@section('content')

<div id="page-sidebar">
    <div class="scroll-sidebar">
     <ul id="sidebar-menu">
        <li class="header"><span>Overview</span></li>
        <li>
            <a href="../input" title="Admin Dashboard">
                <i class="glyph-icon icon-linecons-tv"></i>
                <span>Admin dashboard</span>
            </a>
        </li>
        <li class="divider"></li>
        <li class="no-menu">
            <a href="../frontend-template/index.html" title="Frontend template">
                <i class="glyph-icon icon-linecons-beaker"></i>
                <span>Frontend template</span>
                <span class="bs-label label-danger">
                    NEW
                </span>
            </a>
        </li>
        <li class="header"><span>Components</span></li>
        <li>
            <a href="#" title="Elements">
                <i class="glyph-icon icon-bus"></i>
                <span>Management Kereta</span>
                <span class="bs-label label-primary"></span>
            </a>
        </li>
        <li>
            <a href="#" title="Dashboard boxes">
                <i class="glyph-icon icon-book"></i>
                <span>Data Laporan</span>
            </a>
        </li>
        <li>
            <a href="#" title="Advanced tables">
                <i class="glyph-icon icon-user"></i>
                <span>Management User</span>
            </a>
        </li>
        <div class="example-box-wrapper" style="visibility: hidden;">
            <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px;"></div>
        </div>
        <div class="content-box-wrapper" style="visibility: hidden;">
            <div id="data-example-3" style="width: 100%; height: 250px;"></div>
        </div>
    </ul><!-- #sidebar-menu -->
</div>
</div>
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <!-- Data tables -->

            <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>

            <script type="text/javascript">

                /* Datatables basic */

                $(document).ready(function() {
                    $('#datatable-example').dataTable();
                });

                /* Datatables hide columns */

                $(document).ready(function() {
                    var table = $('#datatable-hide-columns').DataTable( {
                        "scrollY": "300px",
                        "paging": false
                    } );

                    $('#datatable-hide-columns_filter').hide();

                    $('a.toggle-vis').on( 'click', function (e) {
                        e.preventDefault();

            // Get the column API object
            var column = table.column( $(this).attr('data-column') );

            // Toggle the visibility
            column.visible( ! column.visible() );
        } );
                } );

                /* Datatable row highlight */

                $(document).ready(function() {
                    var table = $('#datatable-row-highlight').DataTable();

                    $('#datatable-row-highlight tbody').on( 'click', 'tr', function () {
                        $(this).toggleClass('tr-selected');
                    } );
                });



                $(document).ready(function() {
                    $('.dataTables_filter input').attr("placeholder", "Search...");
                });

            </script>
            
            <div class="panel">
                <div class="panel-body">
                    <h3 class="title-hero" id="page-title">
                     Data Rangkaian
                     <p style="font-size: 10px;">Kereta {{ $kereta[0]->nama }}</p>
                     <button class="btn btn-primary float-right" data-toggle="modal" data-target="#kereta">Tambah<i class="glyph-icon icon-plus"></i></button>
                 </h3><!-- end head form -->

                 <div class="modal fade" id="kereta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Tambah Rangkaian</h4>
                            </div>
                            <div class="modal-body">
                               <div class="example-box-wrapper">
                                <form action="/plusrangkaian/{{ $kereta[0]->id }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label">Nomor</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="no_rangkaian" placeholder="Masukan nomor"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- End modal plus kereta -->

            @foreach($data as $ker)
            <div class="modal fade" id="d_rangkaian{{ $ker->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Edit Kereta</h4>
                        </div>
                        <div class="modal-body">
                           <div class="example-box-wrapper">
                            <form action="/edit_rangkaian/{{ $kereta[0]->id }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Nomor</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="no_rangkaian" value="{{ $ker->no_rangkaian }}">
                                        <input type="hidden" class="form-control" name="id" value="{{ $ker->id }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach<!-- End modal detail -->


        <div class="example-box-wrapper">
            <table id="datatable-row-highlight" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>

                <tbody>
                   @foreach($data as $ker)
                   <tr>
                    <td style="text-align: center;">{{ $ker->id }}</td>
                    <td style="text-align: center;">{{ $ker->no_rangkaian }}</td>
                    <td style="text-align: center;" width="30%">
                        <button class="btn btn-success"><i class="glyph-icon icon-navicon"></i></button>
                        <button class="btn btn-yellow" data-toggle="modal" data-target="#d_rangkaian{{ $ker->id }}"><i class="glyph-icon icon-pencil"></i></button>
                        <button class="btn btn-danger hapus_rangkaian" kode="{{ $ker->id }}" no="{{ $ker->no_rangkaian }}"><i class="glyph-icon icon-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

</div>
</div>
</div>
@endsection