<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Produsen</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga Modal</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <a class="btn btn-primary" href="/edit" role="button">Edit</a>
                    <a class="btn btn-danger" href="#" role="button">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>