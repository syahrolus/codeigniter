<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5 w-50">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Edit
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="produsen">Produsen</label>
                    <input type="text" class="form-control" id="produsen" name="produsen">
                </div>
                <div class="form-group">
                    <label for="ukuran">Ukuran</label>
                    <select class="form-control" id="ukuran" name="ukuran">
                        <option>XL</option>
                        <option>L</option>
                        <option>M</option>
                        <option>S</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                </div>
                <div class="form-group">
                    <label for="harga_modal">Harga Modal</label>
                    <input type="number" class="form-control" id="harga_modal" name="harga_modal">
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" class="form-control" id="harga_jual" name="harga_jual">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>