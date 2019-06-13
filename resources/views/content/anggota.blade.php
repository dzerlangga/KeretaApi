@extends('layout.main')

@section('content')

<div id="page-sidebar">
    <div class="scroll-sidebar">

        <ul id="sidebar-menu">
            <li class="header"><span>Overview</span></li>
            <li>
                <a href="index.html" title="Admin Dashboard">
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
                    <i class="glyph-icon icon-group"></i>
                    <span>Anggota RS</span>
                    <span class="bs-label label-primary"></span>
                </a>
            </li>
            <li>
                <a href="#" title="Dashboard boxes">
                    <i class="glyph-icon icon-home"></i>
                    <span>Ruangan</span>
                </a>
            </li>
            <li>
                <a href="#" title="Advanced tables">
                    <i class="glyph-icon icon-linecons-megaphone"></i>
                    <span>Advanced tables</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="tables.html" title="Basic tables"><span>Basic tables</span></a></li>
                        <li><a href="responsive-tables.html" title="Responsive tables"><span>Responsive tables</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>

            <li class="header"><span>Extra</span></li>
            <li>
                <a href="#" title="Pages">
                    <i class="glyph-icon icon-linecons-fire"></i>
                    <span>Pages</span>
                    <span class="bs-label badge-yellow">NEW</span>
                </a>
            </li>
            <li>
                <a href="#" title="Other Pages">
                    <i class="glyph-icon icon-linecons-cup"></i>
                    <span>Other Pages</span>
                </a>
            </li>
        </ul><!-- #sidebar-menu -->
    </div>
</div>
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">


            <!-- Sparklines charts -->

            <script type="text/javascript" src="../../assets/widgets/charts/sparklines/sparklines.js"></script>
            <script type="text/javascript" src="../../assets/widgets/charts/sparklines/sparklines-demo.js"></script>

            <!-- Flot charts -->

            <script type="text/javascript" src="../../assets/widgets/charts/flot/flot.js"></script>
            <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-resize.js"></script>
            <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-stack.js"></script>
            <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-pie.js"></script>
            <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-tooltip.js"></script>
            <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-demo-1.js"></script>

            <!-- PieGage charts -->

            <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage.js"></script>
            <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage-demo.js"></script>

            <div id="page-title">
                <h2>Dashboard</h2>
                <p>The most complete user interface framework that can be used to create stunning admin dashboards and presentation websites.</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard-box dashboard-box-chart bg-white content-box">
                        <div class="content-wrapper">
                            <div class="header">
                                41415
                                <span>Data<b> ID</b> Yang hadir <b>Database</b></span>
                            </div>
                            <div class="bs-label bg-blue">{{ $data2 }}</div>

                            <div class="center-div sparkline-big-alt">@foreach($data as $i){{ $i->id }}, @endforeach</div>

                            <div class="row list-grade">
                                <div class="col-md-2">January</div>
                                <div class="col-md-2">February</div>
                                <div class="col-md-2">March</div>
                                <div class="col-md-2">April</div>
                                <div class="col-md-2">May</div>
                                <div class="col-md-2">June</div>
                            </div>
                        </div>
                        <div class="button-pane">
                            <div class="size-md float-left">

                                <button class="btn btn-default btn-md" data-toggle="modal" data-target="#myModal">
                                 Tambah Data
                             </button>

                             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Tambah data</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="example-box-wrapper">
                                                <form action="/masuk" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Input</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="id" placeholder="masukan id"> 

                                                        </div>

                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>


                                </div>
                            </div>


                            
                        </div>
                        <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                            <i class="glyph-icon icon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box dashboard-box-chart bg-white content-box">
                    <div class="content-wrapper">
                        <div class="header">
                            169
                            <span>Total Subscriptions<b> in last</b> 6 days</span>
                        </div>
                        <div class="bs-label bg-red">-14%</div>
                        <div class="center-div sparkline-big-alt">21,41,31,50,18,41</div>
                        <div class="row list-grade">
                            <div class="col-md-2">M</div>
                            <div class="col-md-2">T</div>
                            <div class="col-md-2">W</div>
                            <div class="col-md-2">T</div>
                            <div class="col-md-2">F</div>
                            <div class="col-md-2">S</div>
                        </div>
                    </div>
                    <div class="button-pane">
                        <div class="size-md float-left">
                            <a href="#" title="">
                                View all members
                            </a>
                        </div>
                        <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                            <i class="glyph-icon icon-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box dashboard-box-chart bg-white content-box">
                    <div class="content-wrapper">
                        <div class="header">
                            8960
                            <span>Total Downloads<b> in last</b> 6 years</span>
                        </div>
                        <div class="bs-label bg-orange">~51%</div>
                        <div class="center-div sparkline-big-alt">2210,2310,2010,2310,2123,2350</div>
                        <div class="row list-grade">
                            <div class="col-md-2">2009</div>
                            <div class="col-md-2">2010</div>
                            <div class="col-md-2">2011</div>
                            <div class="col-md-2">2012</div>
                            <div class="col-md-2">2013</div>
                            <div class="col-md-2">2014</div>
                        </div>
                    </div>
                    <div class="button-pane">
                        <div class="size-md float-left">
                            <a href="#" title="">
                                View more details
                            </a>
                        </div>
                        <a href="#" class="btn btn-primary float-right tooltip-button" data-placement="top" title="View details">
                            <i class="glyph-icon icon-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-body">
                        <h3 class="title-hero">
                            Recent sales activity
                        </h3>
                        <div class="example-box-wrapper">
                            <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-success">
                            <div class="tile-header">
                                Photo Gallery
                            </div>
                            <div class="tile-content-wrapper">
                                <div class="chart-alt-10" data-percent="43"><span>43</span>%</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-info">
                            <div class="tile-header">
                                Subscriptions
                            </div>
                            <div class="tile-content-wrapper">
                                <div class="chart-alt-10" data-percent="76"><span>76</span>%</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning">
                            <div class="tile-header">
                                New Visitors
                            </div>
                            <div class="tile-content-wrapper">
                                <div class="chart-alt-10" data-percent="11"><span>11</span>%</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="content-box mrg20T">
                    <h3 class="content-box-header bg-primary">
                        Toggle button closed
                        <span class="header-buttons-separator">
                            <a href="#" class="icon-separator toggle-button">
                                <i class="glyph-icon icon-chevron-down"></i>
                            </a>
                        </span>
                    </h3>
                    <div class="content-box-wrapper hide">
                        This content boxes has the header with <code>.bg-default</code>.
                    </div>
                </div>

                <div class="content-box">
                    <h3 class="content-box-header bg-default">
                        <i class="glyph-icon icon-cog"></i>
                        Live server status
                        <span class="header-buttons-separator">
                            <a href="#" class="icon-separator">
                                <i class="glyph-icon icon-question"></i>
                            </a>
                            <a href="#" class="icon-separator refresh-button" data-style="dark" data-theme="bg-white" data-opacity="40">
                                <i class="glyph-icon icon-refresh"></i>
                            </a>
                            <a href="#" class="icon-separator remove-button" data-animation="flipOutX">
                                <i class="glyph-icon icon-times"></i>
                            </a>
                        </span>
                    </h3>
                    <div class="content-box-wrapper">
                        <div id="data-example-3" style="width: 100%; height: 250px;"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="row mrg20B">
                    <div class="col-md-6">
                        <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
                            <span class="bs-badge badge-absolute">5</span>
                            <div class="tile-header">
                                Dashboard
                            </div>
                            <div class="tile-content-wrapper">
                                <i class="glyph-icon icon-dashboard"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-black">
                            <span class="bs-badge badge-absolute">5</span>
                            <div class="tile-header">
                                Orders
                            </div>
                            <div class="tile-content-wrapper">
                                <i class="glyph-icon icon-cogs"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <h3 class="title-hero">
                            Users activity
                        </h3>
                        <div class="example-box-wrapper">
                            <div class="timeline-box timeline-box-left">
                                <div class="tl-row">
                                    <div class="tl-item float-right">
                                        <div class="tl-icon bg-red">
                                            <i class="glyph-icon icon-toggle-on"></i>
                                        </div>
                                        <div class="popover right">
                                            <div class="arrow"></div>
                                            <div class="popover-content">
                                                <div class="tl-label bs-label label-info">Appointment</div>
                                                <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                                <div class="tl-time">
                                                    <i class="glyph-icon icon-clock-o"></i>
                                                    a few seconds ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tl-row">
                                    <div class="tl-item float-right">
                                        <div class="tl-icon bg-primary">
                                            <i class="glyph-icon icon-wifi"></i>
                                        </div>
                                        <div class="popover right">
                                            <div class="arrow"></div>
                                            <div class="popover-content">
                                                <div class="tl-label bs-label bg-yellow">Teleconference</div>
                                                <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                                <div class="tl-time">
                                                    <i class="glyph-icon icon-clock-o"></i>
                                                    a few seconds ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tl-row">
                                    <div class="tl-item float-right">
                                        <div class="tl-icon bg-black">
                                            <i class="glyph-icon icon-headphones"></i>
                                        </div>
                                        <div class="popover right">
                                            <div class="arrow"></div>
                                            <div class="popover-content">
                                                <div class="tl-label bs-label label-danger">Meeting</div>
                                                <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                                <div class="tl-time">
                                                    <i class="glyph-icon icon-clock-o"></i>
                                                    a few seconds ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box bg-white post-box">
                    <textarea name="" class="textarea-autosize" placeholder="What are you doing right now?"></textarea>
                    <div class="button-pane">
                        <a href="#" class="btn btn-md btn-link hover-white" title="">
                            <i class="glyph-icon icon-volume-down"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-link hover-white" title="">
                            <i class="glyph-icon icon-video-camera"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-link hover-white" title="">
                            <i class="glyph-icon icon-microphone"></i>
                        </a>
                        <a href="#" class="btn btn-md btn-link hover-white" title="">
                            <i class="glyph-icon icon-picture-o"></i>
                        </a>

                        <a href="#" class="btn btn-md btn-post float-right btn-success" title="">
                            Post
                        </a>

                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <ul class="todo-box">
                            <li class="border-red">
                                <input type="checkbox" name="todo-1" id="todo-1">
                                <label for="todo-1">This is an example task that i need to finish</label>
                                <span class="bs-label bg-red" title="">Overdue</span>
                                <a href="#" class="btn btn-xs btn-danger float-right" title="">
                                    <i class="glyph-icon icon-remove"></i>
                                </a>
                                <a href="#" class="btn btn-xs btn-success float-right" title="">
                                    <i class="glyph-icon icon-check"></i>
                                </a>
                            </li>
                            <li class="border-orange">
                                <input type="checkbox" name="todo-2" id="todo-2">
                                <label for="todo-2">Update server to a newer version</label>
                                <span class="bs-label bg-green" title="">2 Weeks</span>
                                <a href="#" class="btn btn-xs btn-danger float-right" title="">
                                    <i class="glyph-icon icon-remove"></i>
                                </a>
                                <a href="#" class="btn btn-xs btn-success float-right" title="">
                                    <i class="glyph-icon icon-check"></i>
                                </a>
                            </li>
                            <li class="border-blue">
                                <input type="checkbox" name="todo-3" id="todo-3">
                                <label for="todo-3">Add more awesome template features</label>
                                <span class="bs-label bg-blue" title="">Tomorrow</span>
                                <a href="#" class="btn btn-xs btn-danger float-right" title="">
                                    <i class="glyph-icon icon-remove"></i>
                                </a>
                                <a href="#" class="btn btn-xs btn-success float-right" title="">
                                    <i class="glyph-icon icon-check"></i>
                                </a>
                            </li>
                            <li class="border-purple">
                                <input type="checkbox" name="todo-4" id="todo-4">
                                <label for="todo-4">Never forget to buy milk</label>
                                <span class="bs-label bg-black" title="">Today</span>
                                <a href="#" class="btn btn-xs btn-danger float-right" title="">
                                    <i class="glyph-icon icon-remove"></i>
                                </a>
                                <a href="#" class="btn btn-xs btn-success float-right" title="">
                                    <i class="glyph-icon icon-check"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</div>
</div>


@endsection