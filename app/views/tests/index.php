<?php require APPROOT . '/views/components/head.php' ?>
    <h1 class="title">ບັນດາບົດເສັງ</h1>
    <div class="text-box">
        <ul class="test-list">
            <?php foreach ($data['tests'] as $test) : ?>
                <li><?= $test->test_name ?>
                    - <?= $test->test_questions_amount ?> ຂໍ້ | <a class="btn" href="<?= URLROOT . '/test/'. $test->test_url?>">ເສັງ</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php require APPROOT . '/views/components/foot.php' ?>