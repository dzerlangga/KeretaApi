
<div class="example-box-wrapper" id="tabel">
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
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="text-align: center;" ><?php echo e($ker->id); ?></td>
                <td style="text-align: center;"><?php echo e($ker->nama); ?></td>
                <td style="text-align: center;" width="30%">
                    <button class="btn btn-success"><i class="glyph-icon icon-navicon"></i></button>
                    <button class="btn btn-yellow" data-toggle="modal" data-target="#detail<?php echo e($ker->id); ?>"><i class="glyph-icon icon-pencil"></i></button>
                    <button class="btn btn-danger hapus" kode="<?php echo e($ker->id); ?>" nama="<?php echo e($ker->nama); ?>" ><i class="glyph-icon icon-trash"></i></button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

    <script type="text/javascript">

        $(".hapus").click(function(){

            var kode=$(this).attr("kode");
            var nama=$(this).attr("nama");

            swal({
                title: '<strong>Yakin ingin menghapus? <br>' + nama +'</strong>',
                type: 'warning',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                'Yakin',
                cancelButtonText:
                'Batal'
            }).then(function(isConfirm){
                if(isConfirm.value==true){
                    $.ajax({
                        type:"get",
                        url:"./hapus",
                        data:"kode="+kode+"&nama="+nama,
                        cache:false,
                        success:function(html){
                         swal("Berhasil", "Dihapus", "success");
                         $.(".ada").load('/tabel');
                     }
                 });
                }else{
                    swal("Cancelled", "Dibatalkan", "error");
                    return false;
                }
            })
        }); 

    </script>

<?php /**PATH C:\xampp\htdocs\monarch\resources\views/tabel.blade.php ENDPATH**/ ?>