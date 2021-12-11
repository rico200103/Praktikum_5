<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Device</h1>

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama </th>
                        <th scope="col">Brand </th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                        <th scope="col">Control</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/lampu.png" alt="" class="gambar"></td>
                        <td>Lampu</td>
                        <td>Bardy</td>
                        <td>1</td>
                        <td>On</td>
                        <td>
                            <a href="" class="btn btn-success">Push</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="/img/cctv.jpg" alt="" class="gambar"></td>
                        <td>CCTV</td>
                        <td>Xiomi</td>
                        <td>1</td>
                        <td>Off</td>
                        <td>
                            <a href="" class="btn btn-success">Push</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="/img/ac.png" alt="" class="gambar"></td>
                        <td>AC</td>
                        <td>Sharp</td>
                        <td>1</td>
                        <td>On</td>
                        <td>
                            <a href="" class="btn btn-success">Push</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>