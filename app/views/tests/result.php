<?php require APPROOT . '/views/components/head.php' ?>
    <h1 class="title">ຜົນການສອບເສັງ</h1>
    <div style="text-align: center; border: 1px solid green">
        <p>ຄະແນນ: <?= $data['score'] ?>/10</p>
        <p><?= $data['result_status'] ?></p>
        <?php if($data['saved']) : ?>
        <p>ຜົນການສອບເສັງໄດ້ຖືກບັນທຶກໄວ້ແລ້ວ</p>
        <?php else : ?>
        <p>ບໍ່ສາມາດບັນທຶກຜົນການສອບເສັງໄດ້! ກະລຸນາເສັງໃໝ່</p>
        <?php endif; ?>
        <a class="btn-lg" href="<?= URLROOT . '/test'?>">ກັບໄປທີ່ໜ້າບົດເສັງ</a>
    </div>
<?php require APPROOT . '/views/components/foot.php' ?>