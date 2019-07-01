<?php require APPROOT . '/views/components/head.php' ?>
    <h1 class="title">ຜູ້ໃຊ້ <?= $data['user']->username?></h1>
    <div style="text-align: center; border: 1px solid green; padding: 5px">
        <p>ຊື່: <?= $data['user']->user_firstName ?></p>
        <p>ນາມສະກຸນ: <?= $data['user']->user_lastName ?></p>
        <a class="btn" href="<?= URLROOT . '/user/edit'?>">ແກ້ໄຂ</a>
        <a class="btn-red" href="<?= URLROOT . '/user/delete'?>">ລົບບັນຊີ</a>
    </div>
    <h3 class="title">ປະຫວັດການເສັງ</h3>
    <?php if($data['results']) : ?>
    <table style="margin-left: auto; margin-right: auto; border-collapse: collapse; border: 1px solid green; text-align: center">
        <tr>
            <th>ລະຫັດບົດເສັງ</th>
            <th>ຊື່ບົດເສັງ</th>
            <th>ຄະແນນ</th>
            <th>ຜົນລັບ</th>
            <th>ເວລາເສັງ</th>
        </tr>
        <?php foreach ($data['results'] as $result) : ?>
        <tr>
            <td><?= $result->test_id ?></td>
            <td><?= $result->test_name ?></td>
            <td><?= $result->test_score ?></td>
            <td><?= $result->test_result ?></td>
            <td><?= $result->test_date ?></td>
        </tr>
        <?php endforeach;?>
    </table>
    <?php else : ?>
    <p class="title">ຍັງບໍ່ໄດ້ເສັງຈັກເທື່ອ</p>
    <?php endif;?>
<?php require APPROOT . '/views/components/foot.php' ?>