<?php require APPROOT . '/views/components/head.php' ?>
    <h1 class="title"><?= $data['title'] ?></h1>
    <form action="<?= URLROOT . '/test/result' ?>" method="post">
        <input type="text" id="test_id" name="test_id" value="1" hidden>
        <label for="q1">1. ການປະກາດຕົວປ່ຽນຕໍ່ໄປນີ້ ແບບໃດບໍ່ຖືກຕ້ອງ?</label>
        <fieldset id="q1" name="q1">
            <input type="radio" name="q1" id="a11" value="1">
            <label for="a11"><code>int a = 25.2</code></label>
            <br>
            <input type="radio" name="q1" id="a12" value="0">
            <label for="a12"><code>float b = 50.2</code></label>
            <br>
            <input type="radio" name="q1" id="a13" value="0">
            <label for="a13"><code>double c = 32</code></label>
            <br>
            <input type="radio" name="q1" id="a14" value="0">
            <label for="a14"><code>int d = 21</code></label>
        </fieldset>
        <label for="q2">2. ຄໍາໃດຕໍ່ໄປນີ້ເປັນຄໍາສະຫງວນໃນພາສາຊີ?</label>
        <fieldset id="q2" name="q2">
            <input type="radio" name="q2" id="a21" value="0">
            <label for="a21"><code>back</code></label>
            <br>
            <input type="radio" name="q2" id="a22" value="0">
            <label for="a22"><code>class</code></label>
            <br>
            <input type="radio" name="q2" id="a23" value="1">
            <label for="a23"><code>return</code></label>
            <br>
            <input type="radio" name="q2" id="a24" value="0">
            <label for="a24"><code>when</code></label>
        </fieldset>
        <label for="q3">3. ພາສາຊີ ເປັນພາສາລະດັບສູງຫຼືບໍ່?</label>
        <fieldset id="q3" name="q3">
            <input type="radio" name="q3" id="a31" value="1">
            <label for="a31">ແມ່ນ</label>
            <br>
            <input type="radio" name="q3" id="a32" value="0">
            <label for="a32">ບໍ່ແມ່ນ</label>
        </fieldset>
        <label for="q4">4. ຈາກຄໍາສັ່ງຕໍ່ໄປນີ້:<br> <code>main() {<br>&nbsp;&nbsp;for (i = 0; i < 3; i++) { <br> &nbsp;&nbsp;
                printf("$d", &i); <br>&nbsp;&nbsp;}<br>}</code><br>ຄິດວ່າມັນຈະສະແດງຜົນຫຍັງ?</label>
        <fieldset id="q4" name="q4">
            <input type="radio" name="q4" id="a41" value="0">
            <label for="a41">ສະແດງເລກ 0 ຫາ 3</label>
            <br>
            <input type="radio" name="q4" id="a42" value="0">
            <label for="a42">ສະແດງເລກ 0 ຫາ 2</label>
            <br>
            <input type="radio" name="q4" id="a43" value="0">
            <label for="a43">ບໍ່ສະແດງຫຍັງ</label>
            <br>
            <input type="radio" name="q4" id="a44" value="1">
            <label for="a44">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <label for="q5">5. ຈາກຄໍາສັ່ງຕໍ່ໄປນີ້:<br> <code>main() {<br>&nbsp;&nbsp;int i = 0;<br>&nbsp;&nbsp;while(i <= 3)
                {<br>&nbsp;&nbsp;&nbsp;&nbsp;printf("C");<br>&nbsp;&nbsp;&nbsp;&nbsp;++i<br>&nbsp;&nbsp;}<br>}</code><br>ຄິດວ່າມັນຈະສະແດງຜົນ "C" ຈັກເທື່ອ?</label>
        <fieldset id="q5" name="q5">
            <input type="radio" name="q5" id="a51" value="0">
            <label for="a51">3 ເທື່ອ</label>
            <br>
            <input type="radio" name="q5" id="a52" value="1">
            <label for="a52">4 ເທື່ອ</label>
            <br>
            <input type="radio" name="q5" id="a53" value="0">
            <label for="a53">5 ເທື່ອ</label>
            <br>
            <input type="radio" name="q5" id="a54" value="0">
            <label for="a54">6 ເທື່ອ</label>
        </fieldset>
        <label for="q6">6. ຂໍ້ໃດຕໍ່ໄປນີ້ເປັນການປະກາດຕົວປ່ຽນແບບພອຍເຕີ?</label>
        <fieldset id="q6" name="q6">
            <input type="radio" name="q6" id="a61" value="0">
            <label for="a61"><code>int p</code></label>
            <br>
            <input type="radio" name="q6" id="a62" value="0">
            <label for="a62">int &p</label>
            <br>
            <input type="radio" name="q6" id="a63" value="1">
            <label for="a63">int *p</label>
            <br>
            <input type="radio" name="q6" id="a64" value="0">
            <label for="a64">ຜິດໝົດ</label>
        </fieldset>
        <label for="q7">7. ການປະກາດຟາຍຫົວ (Header) ທີ່ຖືກຕ້ອງຄວນປະກາດແນວໃດ?</label>
        <fieldset id="q7" name="q7">
            <input type="radio" name="q7" id="a71" value="0">
            <label for="a71"><code>include &ltstdio.h&gt</code></label>
            <br>
            <input type="radio" name="q7" id="a72" value="0">
            <label for="a72"><code>#include &ltstdio.h&gt</code></label>
            <br>
            <input type="radio" name="q7" id="a73" value="0">
            <label for="a73"><code>#include "stdio.h"</code></label>
            <br>
            <input type="radio" name="q7" id="a74" value="1">
            <label for="a74">ຖືກທັງ ຂ ແລະ ຄ</label>
        </fieldset>
        <label for="q8">8. ຈາກຄໍາສັ່ງຕໍ່ໄປນີ້:<br><code>main(){<br>&nbsp;&nbsp;int i = 1;<br>&nbsp;&nbsp;printf("%d", ++i);<br>}</code><br>ມັນຈະສະແດງເລກຫຍັງ?</label>
        <fieldset id="q8" name="q8">
            <input type="radio" name="q8" id="a81" value="0">
            <label for="a81">1</label>
            <br>
            <input type="radio" name="q8" id="a82" value="1">
            <label for="a82">2</label>
            <br>
            <input type="radio" name="q8" id="a83" value="0">
            <label for="a83">ບໍ່ສະແດງຫຍັງ</label>
            <br>
            <input type="radio" name="q8" id="a84" value="0">
            <label for="a84">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <label for="q9">9. ຈາກຄໍາສັ່ງຕໍ່ໄປນີ້:<br><code>int add(int a, int b){<br>&nbsp;&nbsp;return a+b;<br>}<br>main(){<br>&nbsp;&nbsp;printf("%d", add(50, 27.5));<br>}<br>ມັນຈະສະແດງຜົນຫຍັງ?</code></label>
        <fieldset id="q9" name="q9">
            <input type="radio" name="q9" id="a91" value="0">
            <label for="a91">77.5</label>
            <br>
            <input type="radio" name="q9" id="a92" value="1">
            <label for="a92">77</label>
            <br>
            <input type="radio" name="q9" id="a93" value="0">
            <label for="a93">0</label>
            <br>
            <input type="radio" name="q9" id="a94" value="0">
            <label for="a94">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <label for="q10">10. ໃຫ້ອາເຣ <code>int a[3] = {12,24,36}</code> ຖ້າເຮົາຕ້ອງການ <code>24</code> ຕ້ອງແທນເລກດັດສະນີ (index) ຫຼືເລກລໍາດັບ ຂອງອາເຣເປັນເລກໃດ?</label>
        <fieldset id="q10" name="q10">
            <input type="radio" name="q10" id="a101" value="1">
            <label for="a101">1</label>
            <br>
            <input type="radio" name="q10" id="a102" value="0">
            <label for="a102">2</label>
            <br>
            <input type="radio" name="q10" id="a103" value="0">
            <label for="a103">3</label>
            <br>
            <input type="radio" name="q10" id="a104" value="0">
            <label for="a104">4</label>
        </fieldset>
        <hr>
        <input type="submit" value="ສົ່ງຄໍາຕອບ">
        <input type="reset" value="ລ້າງຄໍາຕອບ">
    </form>
<?php require APPROOT . '/views/components/foot.php' ?>