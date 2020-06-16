<?= $this->extend('layouts/template'); ?>

<? $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact US!</h1>
            <? foreach ($alamat as $a) : ?>
            <ul>
                <li><?= $a['tipe']; ?></li>
                <li><?= $a['alamat']; ?></li>
                <li><?= $a['kota']; ?></li>
            </ul>
            <? endforeach; ?>
        </div>
    </div>
</div>
<? $this->endsection(); ?>