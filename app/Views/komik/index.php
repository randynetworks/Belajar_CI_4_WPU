<?= $this->extend('layouts/template'); ?>

<? $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-2">

            <h1>Daftar Komik</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <? $i= 1; foreach ($komik as $k) :?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                        <td><?= $k['judul']; ?></td>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <? endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<? $this->endsection(); ?>