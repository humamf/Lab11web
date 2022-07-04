<?= $this->include('template/header'); ?>

<?php if($artikel): foreach($artikel as $artikel): ?>
<article class="entry">
    <h2><a href="<?= base_url() . '/artikel/' . $artikel['slug'] ?>"><?=$artikel['judul']; ?></a></h2>
    <img class="fotoo" src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=$artikel['judul']; ?>">
    <p><?= substr($artikel['isi'], 0, 200); ?></p>
</article>
<hr class="divider" />
<?php endforeach; else: ?>
<article class="entry">
    <h2>Belum ada data.</h2>
</article>
<?php endif; ?>

<?= $this->include('template/footer'); ?>
