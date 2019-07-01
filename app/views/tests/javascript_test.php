<?php require APPROOT . '/views/components/head.php' ?>
    <h1 class="title"><?= $data['title']?></h1>
<form action="<?= URLROOT . '/test/result' ?>" method="post">
        <input type="text" id="test_id" name="test_id" value="3" hidden>
        <label for="q1">1. ຖ້າເຮົາຕ້ອງການກໍານົດຄ່າໃຫ້ກັບແທັກ <code>&ltp&gt</code> ທີ່ມີໄອດີ <code>text</code> ຄວນໃຊ້ຄໍາສັ່ງແນວໃດ?</label>
        <fieldset id="q1" name="q1">
            <input type="radio" name="q1" id="a11" value="0">
            <label for="a11"><code>document.getElementByTagName('p').innerHTML = "yourText"</code></label>
            <br>
            <input type="radio" name="q1" id="a12" value="1">
            <label for="a12"><code>document.getElementById('text').innerHTML = "yourText"</code></label>
            <br>
            <input type="radio" name="q1" id="a13" value="0">
            <label for="a13"><code>document.getElementById('p').innerText = "yourText"</code></label>
            <br>
            <input type="radio" name="q1" id="a14" value="0">
            <label for="a14"><code>document.getElementByTagName('text').innerText = "yourText"</code></label>
        </fieldset>
        <label for="q2">2. ຄລາສໃນພາສາຈາວາສຄຣິບມີມາແຕ່ ECMAScript (ES) ໃດ?</label>
        <fieldset id="q2" name="q2">
            <input type="radio" name="q2" id="a21" value="0">
            <label for="a21">ECMAScript 2008</label>
            <br>
            <input type="radio" name="q2" id="a22" value="1">
            <label for="a22">ECMAScript 2015</label>
            <br>
            <input type="radio" name="q2" id="a23" value="0">
            <label for="a23">ECMAScript 2016</label>
            <br>
            <input type="radio" name="q2" id="a24" value="0">
            <label for="a24">ບໍ່ເຄີຍມີຄລາສໃນຈາວາສຄຣິບຈັກເທື່ອ</label>
        </fieldset>
        <label for="q3">3. ການສ້າງຟັງຊັນໃນຈາວາສຄຣິບແບບໃດຕໍ່ໄປນີ້ຖືກຕ້ອງ?</label>
        <fieldset id="q3" name="q3">
            <input type="radio" name="q3" id="a31" value="0">
            <label for="a31"><code>function fp() {}</code></label>
            <br>
            <input type="radio" name="q3" id="a32" value="0">
            <label for="a32"><code>var fp = function() {}</code></label>
            <br>
            <input type="radio" name="q3" id="a33" value="0">
            <label for="a33"><code>var fp = () => {}</code></label>
            <br>
            <input type="radio" name="q3" id="a34" value="1">
            <label for="a34">ຖືກໝົດ</label>
        </fieldset>
        <label for="q4">4. ໃຫ້ <code>let a = 4 == '4'</code>, ຖາມວ່າ <code>a</code> ມີຄ່າແມ່ນຫຍັງ?</label>
        <fieldset id="q4" name="q4">
            <input type="radio" name="q4" id="a41" value="1">
            <label for="a41"><code>true</code></label>
            <br>
            <input type="radio" name="q4" id="a42" value="0">
            <label for="a42"><code>false</code></label>
            <br>
            <input type="radio" name="q4" id="a43" value="0">
            <label for="a43"><code>4</code></label>
            <br>
            <input type="radio" name="q4" id="a44" value="0">
            <label for="a44">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <label for="q5">5. ໃຫ້ <code>let a = 4 === '4'</code>, ຖາມວ່າ <code>a</code> ມີຄ່າແມ່ນຫຍັງ?</label>
        <fieldset id="q5" name="q5">
            <input type="radio" name="q5" id="a51" value="0">
            <label for="a51"><code>true</code></label>
            <br>
            <input type="radio" name="q5" id="a52" value="1">
            <label for="a52"><code>false</code></label>
            <br>
            <input type="radio" name="q5" id="a53" value="0">
            <label for="a53"><code>4</code></label>
            <br>
            <input type="radio" name="q5" id="a54" value="0">
            <label for="a54">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <label for="q6">6. ຈາກອັອບເຈັກຕໍ່ໄປນີ້:<br><code>const human = {<br>&nbsp;&nbsp;name: "Keanu Reeves",<br>&nbsp;&nbsp;age: 54<br>}</code><br>ຖ້າເຮົາຕ້ອງການຄ່າຈາກພອພເພີຕີ <code>name</code> ຕ້ອງເຮັດແນວໃດ?</label>
        <fieldset id="q6" name="q6">
            <input type="radio" name="q6" id="a61" value="0">
            <label for="a61"><code>let name = new human()</code></label>
            <br>
            <input type="radio" name="q6" id="a62" value="0">
            <label for="a62"><code>let name = new human.name()</code></label>
            <br>
            <input type="radio" name="q6" id="a63" value="0">
            <label for="a63"><code>let name = human.name()</code></label>
            <br>
            <input type="radio" name="q6" id="a64" value="1">
            <label for="a64"><code>let name = human.name</code></label>
        </fieldset>
        <label for="q7">7. ຈາກອັອບເຈັກຕໍ່ໄປນີ້:<br><code>const human = {<br>&nbsp;&nbsp;name: "Keanu Reeves",<br>&nbsp;&nbsp;age: 54<br>}</code><br> ເຮົາສາມາດແກ້ໄຂຄ່າທີ່ຢູ່ພາຍໃດອັອບເຈັກໄດ້ຫຼືບໍ່?</label>
        <fieldset id="q7" name="q7">
            <input type="radio" name="q7" id="a71" value="1">
            <label for="a71">ໄດ້</label>
            <br>
            <input type="radio" name="q7" id="a72" value="0">
            <label for="a72">ບໍ່ໄດ້</label>
        </fieldset>
        <label for="q8">8. ໃຫ້ຄໍາສັ່ງ <code>let a = 13; a+= '2'</code>, ຖາມວ່າ <code>a</code> ຈະມີຄ່າແມ່ນຫຍັງ?</label>
        <fieldset id="q8" name="q8">
            <input type="radio" name="q8" id="a81" value="0">
            <label for="a81">15</label>
            <br>
            <input type="radio" name="q8" id="a82" value="0">
            <label for="a82">13</label>
            <br>
            <input type="radio" name="q8" id="a83" value="1">
            <label for="a83">132</label>
            <br>
            <input type="radio" name="q8" id="a84" value="0">
            <label for="a84">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <label for="q9">9. ຕໍ່ຈາກຂໍ້ທີ 8, ຖ້າຕື່ມຄໍາສັ່ງ <code>a += 2</code>, <code>a</code> ຈະມີຄ່າແມ່ນຫຍັງ?</label>
        <fieldset id="q9" name="q9">
            <input type="radio" name="q9" id="a91" value="1">
            <label for="a91">17</label>
            <br>
            <input type="radio" name="q9" id="a92" value="0">
            <label for="a92">15</label>
            <br>
            <input type="radio" name="q9" id="a93" value="1">
            <label for="a93">1332</label>
            <br>
            <input type="radio" name="q9" id="a94" value="0">
            <label for="a94">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <label for="q10">10. ໃຫ້ອາເຣ <code>a = [1,2,3,4,5]</code>, ແລ້ວເຮົາຈະເຮັດແນວໃດເພື່ອເອົາຄ່າແຕ່ລະອັນໂດຍທີ່ບໍ່ຕ້ອງກໍານົດຕໍາແໜ່ງຂອງຄ່ານັ້ນ?</label>
        <fieldset id="q10" name="q10">
            <input type="radio" name="q10" id="a101" value="0">
            <label for="a101">ໃຊ້ <code>for...of</code></label>
            <br>
            <input type="radio" name="q10" id="a102" value="0">
            <label for="a102">ໃຊ້ <code>for...in</code></label>
            <br>
            <input type="radio" name="q10" id="a103" value="0">
            <label for="a103">ໃຊ້ເມທອດ <code>forEach()</code></label>
            <br>
            <input type="radio" name="q10" id="a104" value="1">
            <label for="a104">ຖືກທັງ ກ ແລະ ຄ</label>
        </fieldset>
        <hr>
        <input type="submit" value="ສົ່ງຄໍາຕອບ">
        <input type="reset" value="ລ້າງຄໍາຕອບ">
<?php require APPROOT . '/views/components/foot.php' ?>