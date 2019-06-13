<?php $__env->startSection('content'); ?>

<div id="page-sidebar">
    <div class="scroll-sidebar">


        <ul id="sidebar-menu">
            <li class="header"><span>Overview</span></li>
            <li>
                <a href="#" title="Admin Dashboard">
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
                <a href="./ker" title="Elements">
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
                                KERETA
                                <span>Data<b> kereta</b> yang tersedia </span>
                            </div>
                            <div class="bs-label bg-blue">120</div>

                            <div class="center-div"><img src="train_13244.png" width="62%"></div>
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
                                                    <?php echo e(csrf_field()); ?>

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
                            DETAILS
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box dashboard-box-chart bg-white content-box">
                    <div class="content-wrapper">
                        <div class="header">
                            LAPORAN
                            <span>Laporan<b> kereta</b> yang rusak</span>
                        </div>
                        <div class="bs-label bg-red">3</div>
                        <div class="center-div"><img src="train3.png" width="62%"></div>
                    </div>
                    <div class="button-pane">
                        <div class="size-md float-left">

                            View all details

                        </div>
                        <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                            DETAILS
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box dashboard-box-chart bg-white content-box">
                    <div class="content-wrapper">
                        <div class="header">
                           USER
                           <span>Total user<b></span>
                           </div>
                           <div class="bs-label bg-green">44</div>
                           <div class="center-div"><img src="name_user_3716.png" width="62%"></div>
                       </div>
                       <div class="button-pane">
                        <div class="size-md float-left">

                            View all user
                            
                        </div>
                        <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                            DETAILS
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\monarch\resources\views/content/input.blade.php ENDPATH**/ ?>