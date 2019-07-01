<?php require APPROOT . '/views/components/head.php' ?>
    <h1 class="title"><?= $data['title']?></h1>
    <form id="registerForm" action="<?= URLROOT . '/user/register'?>" method="post">
        <label for="firstName">ຊື່</label>
        <br>
        <input class="<?= !empty($data['firstName_err']) ? 'invalid' : '' ?>" type="text" name="firstName" id="firstName" placeholder="ຊື່ແທ້" value="<?= $data['firstName']?>">
        <p class="invalid-text"><?= $data['firstName_err']?></p>
        <br>
        <label for="lastName">ນາມສະກຸນ</label>
        <br>
        <input class="<?= !empty($data['lastName_err']) ? 'invalid' : '' ?>" type="text" name="lastName" id="lastName" placeholder="ນາມສະກຸນ" value="<?= $data['lastName']?>">
        <p class="invalid-text"><?= $data['lastName_err']?></p>
        <br>
        <label for="email">ອີເມວ</label>
        <br>
        <input class="<?= !empty($data['email_err']) ? 'invalid' : '' ?>" type="email" id="email" name="email" placeholder="ອີເມວ" value="<?= $data['email']?>">
        <p class="invalid-text"><?= $data['email_err']?></p>
        <br>
        <label for="username">ຊື່ຜູ້ໃຊ້ (ສໍາລັບໃຊ້ໃນລະບົບ)</label>
        <br>
        <input class="<?= !empty($data['username_err']) ? 'invalid' : '' ?>" type="text" id="username" name="username" placeholder="ຊື່ຜູ້ໃຊ້" value="<?= $data['username']?>">
        <p class="invalid-text"><?= $data['username_err']?></p>
        <br>
        <label for="password">ລະຫັດຜ່ານ</label>
        <br>
        <input class="<?= !empty($data['password_err']) ? 'invalid' : '' ?>" type="password" id="password" name="password" placeholder="ລະຫັດຜ່ານ" value="<?= $data['password']?>">
        <p class="invalid-text"><?= $data['password_err']?></p>
        <br>
        <label for="confirmPassword">ຢືນຢັນລະຫັດຜ່ານ</label>
        <br>
        <input class="<?= !empty($data['confirmPassword_err']) ? 'invalid' : '' ?>" type="password" id="confirmPassword" name="confirmPassword" placeholder="ຢືນຢັນລະຫັດຜ່ານ" value="<?= $data['confirmPassword']?>">
        <p class="invalid-text"><?= $data['confirmPassword_err']?></p>
        <br>
        <br>
        <input type="submit" value="ລົງທະບຽນ">
        <input type="reset" value="ລ້າງຟອມ">
    </form>
<?php require APPROOT . '/views/components/foot.php' ?>
