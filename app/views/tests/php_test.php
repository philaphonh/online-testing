<?php require APPROOT . '/views/components/head.php' ?>
<h1 class="title"><?= $data['title']?></h1>
<form action="<?= URLROOT . '/test/result' ?>" method="post">
        <input type="text" id="test_id" name="test_id" value="4" hidden>
        <label for="q1">1. ການປະກາດຕົວປ່ຽນໃດຕໍ່ໄປນີ້ບໍ່ຖືກຕ້ອງ?</label>
        <fieldset id="q1" name="q1">
            <input type="radio" name="q1" id="a11" value="0">
            <label for="a11"><code>$name = "Chester"</code></label>
            <br>
            <input type="radio" name="q1" id="a12" value="1">
            <label for="a12"><code>$2way = true</code></label>
            <br>
            <input type="radio" name="q1" id="a13" value="0">
            <label for="a13"><code>$_name = 'Ricardo'</code></label>
            <br>
            <input type="radio" name="q1" id="a14" value="0">
            <label for="a14"><code>$name2 = 'Milos'</code></label>
        </fieldset>
        <label for="q2">2. ໃນການຮັບຄ່າຈາກຟອມທີ່ໃຊ້ເມທອດ <code>POST</code> ເຮົາຄວນໃຊ້ຕົວປ່ຽນອັນໃດ?</label>
        <fieldset id="q2" name="q2">
            <input type="radio" name="q2" id="a21" value="1">
            <label for="a21"><code>$_POST</code></label>
            <br>
            <input type="radio" name="q2" id="a22" value="0">
            <label for="a22"><code>$_GET</code></label>
            <br>
            <input type="radio" name="q2" id="a23" value="0">
            <label for="a23">ຖືກທັງ ກ ແລະ ຂ</label>
            <br>
            <input type="radio" name="q2" id="a24" value="0">
            <label for="a24">ຜິດທັງ ກ ແລະ ຂ</label>
        </fieldset>
        <label for="q3">3. ການສ້າງອາເຣໃນພີເອຊພີແມ່ນສ້າງແນວໃດ?</label>
        <fieldset id="q3" name="q3">
            <input type="radio" name="q3" id="a31" value="0">
            <label for="a31"><code>$arr = [1,2,3]</code></label>
            <br>
            <input type="radio" name="q3" id="a32" value="0">
            <label for="a32"><code>$arr = array(1,2,3)</code></label>
            <br>
            <input type="radio" name="q3" id="a33" value="1">
            <label for="a33">ຖືກທັງ ກ ແລະ ຂ</label>
            <br>
            <input type="radio" name="q3" id="a34" value="0">
            <label for="a34">ຜິດທັງ ກ ແລະ ຂ</label>
        </fieldset>
        <label for="q4">4. ຈາກຄໍາສັ່ງວົນລູບຕໍ່ໄປນີ້:<br><code>for ($i = 0; $i < 3; $i++) { <br> &nbsp;&nbsp;
            echo $i; <br>}<br></code><br>ຄິດວ່າມັນຈະສະແດງຜົນຫຍັງ?</label>
        <fieldset id="q4" name="q4">
            <input type="radio" name="q4" id="a41" value="0">
            <label for="a41">ສະແດງເລກ 0 ຫາ 3</label>
            <br>
            <input type="radio" name="q4" id="a42" value="1">
            <label for="a42">ສະແດງເລກ 0 ຫາ 2</label>
            <br>
            <input type="radio" name="q4" id="a43" value="0">
            <label for="a43">ບໍ່ສະແດງຫຍັງ</label>
            <br>
            <input type="radio" name="q4" id="a44" value="0">
            <label for="a44">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <label for="q5">5. ໃນການອ້າງອີງໄປຫາພອພເພີຕີຂອງຄລາສຫຼືອັອບເຈັກແມ່ນໃຊ້ເຄື່ອງໝາຍຫຍັງ?</label>
        <fieldset id="q5" name="q5">
            <input type="radio" name="q5" id="a51" value="0">
            <label for="a51"><code>.</code></label>
            <br>
            <input type="radio" name="q5" id="a52" value="1">
            <label for="a52"><code>-></code></label>
            <br>
            <input type="radio" name="q5" id="a53" value="0">
            <label for="a53"><code>=></code></label>
            <br>
            <input type="radio" name="q5" id="a54" value="0">
            <label for="a54"><code>&gt</code></label>
        </fieldset>
        <label for="q6">6. ໃນພາສາພີເອຊພີ, ການເຊື່ອມຕໍ່ຂໍ້ຄວາມແມ່ນໃຊ້ເຄື່ອງໝາຍຫຍັງ?</label>
        <fieldset id="q6" name="q6">
            <input type="radio" name="q6" id="a61" value="0">
            <label for="a61"><code>+</code></label>
            <br>
            <input type="radio" name="q6" id="a62" value="1">
            <label for="a62"><code>.</code></label>
            <br>
            <input type="radio" name="q6" id="a63" value="0">
            <label for="a63"><code>_</code></label>
            <br>
            <input type="radio" name="q6" id="a64" value="0">
            <label for="a64"><code>-</code></label>
        </fieldset>
        <label for="q7">7. ໂດຍທົ່ວໄປ, ເຮົາສາມາດເອີ້ນໃຊ້ຕົວປ່ຽນທີ່ປະກາດນອກຟັງຊັນ ພາຍໃນຟັງຊັນໄດ້ຫຼືບໍ່?</label>
        <fieldset id="q7" name="q7">
            <input type="radio" name="q7" id="a71" value="0">
            <label for="a71">ໄດ້</label>
            <br>
            <input type="radio" name="q7" id="a72" value="1">
            <label for="a72">ບໍ່ໄດ້</label>
        </fieldset>
        <label for="q8">8. ເຮົາສາມາດເອີ້ນໃຊ້ຟາຍດ້ວຍເມທອດໃດຕໍ່ໄປນີ້?</label>
        <fieldset id="q8" name="q8">
            <input type="radio" name="q8" id="a81" value="0">
            <label for="a81"><code>include</code></label>
            <br>
            <input type="radio" name="q8" id="a82" value="0">
            <label for="a82"><code>require</code></label>
            <br>
            <input type="radio" name="q8" id="a83" value="1">
            <label for="a83">ຖືກທັງ ກ ແລະ ຂ</label>
            <br>
            <input type="radio" name="q8" id="a84" value="0">
            <label for="a84">ຜິດທັງ ກ ແລະ ຂ</label>
        </fieldset>
        <label for="q9">9. ພາສາພີເອຊພີສາມາດເຮັດວຽກໄດ້ໃນເວັບບຣາວເຊີຫຼືບໍ່?</label>
        <fieldset id="q9" name="q9">
            <input type="radio" name="q9" id="a91" value="0">
            <label for="a91">ໄດ້</label>
            <br>
            <input type="radio" name="q9" id="a92" value="1">
            <label for="a92">ບໍ່ໄດ້</label>
        </fieldset>
        <label for="q10">10. ໃຫ້ <code>$a = 4; $a += "2"</code>, <code>a</code> ຈະມີຄ່າເທົ່າກັບຫຍັງ?</label>
        <fieldset id="q10" name="q10">
            <input type="radio" name="q10" id="a101" value="0">
            <label for="a101">4</label>
            <br>
            <input type="radio" name="q10" id="a102" value="1">
            <label for="a102">6</label>
            <br>
            <input type="radio" name="q10" id="a103" value="0">
            <label for="a103">8</label>
            <br>
            <input type="radio" name="q10" id="a104" value="0">
            <label for="a104">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <hr>
        <input type="submit" value="ສົ່ງຄໍາຕອບ">
        <input type="reset" value="ລ້າງຄໍາຕອບ">
<?php require APPROOT . '/views/components/foot.php' ?>