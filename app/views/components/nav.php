<header>
    <nav>
        <div class="navbar">
            <a href="<?= URLROOT ?>/">ໜ້າຫຼັກ</a>
            <a href="<?= URLROOT ?>/test">ບົດເສັງ</a>
            <a href="<?= URLROOT ?>/about">ກ່ຽວກັບ</a>
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?= URLROOT ?>/user"><?php echo $_SESSION['username'] ?></a>
                <a href="<?= URLROOT ?>/user/logout">ອອກຈາກລະບົບ</a>
            <?php else : ?>
            <a href="<?= URLROOT ?>/user/register">ລົງທະບຽນ</a>
            <a href="<?= URLROOT ?>/user/login">ເຂົ້າໃຊ້</a>
            <?php endif;?>
        </div>
    </nav>
</header>