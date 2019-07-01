<?php require APPROOT . '/views/components/head.php' ?>
    <h1 class="title"><?= $data['title'] ?></h1>
    <h3 class="title">ຍິນດີຕ້ອນຮັບສູ່ເວັບສອບເສັງອອນລາຍຂອງພວກເຮົາ!</h3>
    <p>ເວັບນີ້ເປັນເວັບສໍາລັບທົດສອບຄວາມຮູ້ດ້ານການຂຽນໂປຣແກຣມ ເໝາະສໍາລັບຜູ້ເລີ່ມຕົ້ນຮຽນຂຽນໂປຣແກຣມໃໝ່ ໂດຍເວັບຂອງເຮົາກໍມິຫຼາກຫຼາຍພາສາໂປຣແກຣມໃຫ້ເລືອກທົດສອບ ຢ່າງ C, Java, Javascript, PHP ແລະອື່ນໆອີກ ເຊິ່ງຈະຕາມາໃນພາຍຫຼັງ.</p>
    <h3 class="title">ບົດທົດສອບຂອງພວກເຮົາ</h3>
    <div class="text-box">
        <ul>
            <?php foreach ($data['tests'] as $test) : ?>
                <li><?= $test->test_name ?>
                    - <?= $test->test_questions_amount ?> ຂໍ້ | <a class="btn" href="<?= URLROOT . '/test/'. $test->test_url?>">ເສັງ</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php require APPROOT . '/views/components/foot.php' ?>