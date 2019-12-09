<?php $__env->startSection('title', 'Daftar Beastudi'); ?>
    
<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Selamat Datang Bos ss</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Kontribusi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">dasd</td>
                        <td scope="row">adas</td>
                        <td scope="row">asadasas</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/coballaravel/resources/views/mahasiswa/index.blade.php ENDPATH**/ ?>