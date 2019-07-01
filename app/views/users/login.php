<?php require APPROOT . '/views/components/head.php' ?>
    <h1 class="title"><?= $data['title']?></h1>
    <form id="loginForm" action="<?= URLROOT .'/user/login'?>" method="post">
        <label for="username">ຊື່ຜູ້ໃຊ້ (ສໍາລັບໃຊ້ໃນລະບົບ)</label>
        <br>
        <input type="text" id="username" name="username" placeholder="ຊື່ຜູ້ໃຊ້" value="<?= $data['username'] ?>">
        <p class="invalid-text"><?= $data['username_err']?></p>
        <br>
        <label for="password">ລະຫັດຜ່ານ</label>
        <br>
        <input type="password" id="password" name="password" placeholder="ລະຫັດຜ່ານ" value="<?= $data['password'] ?>">
        <p class="invalid-text"><?= $data['password_err']?></p>
        <br>
        <br>
        <input type="submit" value="ເຂົ້າໃຊ້">
    </form>
<?php require APPROOT . '/views/components/foot.php' ?>