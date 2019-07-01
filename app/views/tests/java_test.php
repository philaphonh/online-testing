<?php require APPROOT . '/views/components/head.php' ?>
<h1 class="title"><?= $data['title']?></h1>
<form action="<?= URLROOT . '/test/result' ?>" method="post">
        <input type="text" id="test_id" name="test_id" value="2" hidden>
        <label for="q1">1. ການປະກາດຕົວປ່ຽນໃດຕໍ່ໄປນີ້ຖືກຕ້ອງ?</label>
        <fieldset id="q1" name="q1">
            <input type="radio" name="q1" id="a11" value="0">
            <label for="a11"><code>int 21guns = 21</code></label>
            <br>
            <input type="radio" name="q1" id="a12" value="0">
            <label for="a12"><code>double new = 2.75</code></label>
            <br>
            <input type="radio" name="q1" id="a13" value="0">
            <label for="a13"><code>string name = "Nani"</code></label>
            <br>
            <input type="radio" name="q1" id="a14" value="1">
            <label for="a14">ບໍ່ມີແບບໃດຖືກຕ້ອງ</label>
        </fieldset>
        <label for="q2">2. ໃຫ້ຄລາສ <code>Car</code>, ຖ້າຕ້ອງການສ້າງຄອນສຕຣັກເຕີ (Constructor) ຂອງຄລາສນີ້ຄວນສ້າງແນວໃດ?</label>
        <fieldset id="q2" name="q2">
            <input type="radio" name="q2" id="a21" value="1">
            <label for="a21"><code>public Car() {}</code></label>
            <br>
            <input type="radio" name="q2" id="a22" value="0">
            <label for="a22"><code>private Car() {}</code></label>
            <br>
            <input type="radio" name="q2" id="a23" value="0">
            <label for="a23"><code>protected Car() {}</code></label>
            <br>
            <input type="radio" name="q2" id="a24" value="0">
            <label for="a24"><code>public void Car() {}</code></label>
        </fieldset>
        <label for="q3">3. ໃຫ້ຄລາສ <code>Car</code>, ຖ້າຕ້ອງການສ້າງອິນສແຕນ (Instance) ຂອງຄລາສນີ້ຄວນສ້າງແນວໃດ?</label>
        <fieldset id="q3" name="q3">
            <input type="radio" name="q3" id="a31" value="1">
            <label for="a31"><code>Car myCar = new Car()</code></label>
            <br>
            <input type="radio" name="q3" id="a32" value="0">
            <label for="a32"><code>Car myCar = old Car()</code></label>
            <br>
            <input type="radio" name="q3" id="a33" value="0">
            <label for="a33"><code>Car yourCar = Car()</code></label>
            <br>
            <input type="radio" name="q3" id="a34" value="0">
            <label for="a34"><code>Car yourCar = new Car</code></label>
        </fieldset>
        <label for="q4">4. ການນໍາເຂົ້າ (Import) ຄລາສຈາກແພັກເກັດອື່ນຄວນເຮັດແນວໃດ?</label>
        <fieldset id="q4" name="q4">
            <input type="radio" name="q4" id="a41" value="0">
            <label for="a41"><code>import package.class</code></label>
            <br>
            <input type="radio" name="q4" id="a42" value="0">
            <label for="a42"><code>import package.*</code></label>
            <br>
            <input type="radio" name="q4" id="a43" value="1">
            <label for="a43">ຖືກທັງ ກ ແລະ ຂ</label>
            <br>
            <input type="radio" name="q4" id="a44" value="0">
            <label for="a44">ຜິດທັງ ກ ແລະ ຂ</label>
        </fieldset>
        <label for="q5">5. ການສືບທອດຄລາສ (Inheritance) ຄວນໃຊ້ຄໍາສັບໃດ?</label>
        <fieldset id="q5" name="q5">
            <input type="radio" name="q5" id="a51" value="0">
            <label for="a51"><code>inherits</code></label>
            <br>
            <input type="radio" name="q5" id="a52" value="0">
            <label for="a52"><code>expands</code></label>
            <br>
            <input type="radio" name="q5" id="a53" value="1">
            <label for="a53"><code>extends</code></label>
            <br>
            <input type="radio" name="q5" id="a54" value="0">
            <label for="a54">ຜິດໝົດ</label>
        </fieldset>
        <label for="q6">6. ການນໍາໃຊ້ (Implementation) ຄວນໃຊ້ຄໍາສັບໃດ?</label>
        <fieldset id="q6" name="q6">
            <input type="radio" name="q6" id="a61" value="1">
            <label for="a61"><code>implements</code></label>
            <br>
            <input type="radio" name="q6" id="a62" value="0">
            <label for="a62"><code>extends</code></label>
            <br>
            <input type="radio" name="q6" id="a63" value="0">
            <label for="a63"><code>uses</code></label>
            <br>
            <input type="radio" name="q6" id="a64" value="0">
            <label for="a64">ຜິດໝົດ</label>
        </fieldset>
        <label for="q7">7. ໃຫ້ອາເຣ <code>int arr[] = {25,50,75,100}</code>, ຖ້າຕ້ອງການປ່ຽນຄ່າໃນຕໍາແໜ່ງທີ 3 ເປັນ 90 ເຮົາຄວນເຮັດແນວໃດ?</label>
        <fieldset id="q7" name="q7">
            <input type="radio" name="q7" id="a71" value="1">
            <label for="a71"><code>arr[2] = 90</code></label>
            <br>
            <input type="radio" name="q7" id="a72" value="0">
            <label for="a72"><code>arr[3] = 90</code></label>
            <br>
            <input type="radio" name="q7" id="a73" value="0">
            <label for="a73"><code>arr[2].value = 90</code></label>
            <br>
            <input type="radio" name="q7" id="a74" value="0">
            <label for="a74"><code>arr[3].value = 90</code></label>
        </fieldset>
        <label for="q8">8. ຄໍາສັບ <code>var</code>ໃນພາສາຈາວາ ສາມາດຮັບຂໍ້ມູນແບບໃດໄດ້ແນ່?</label>
        <fieldset id="q8" name="q8">
            <input type="radio" name="q8" id="a81" value="1">
            <label for="a81">ຮັບໄດ້ທຸກແບບ</label>
            <br>
            <input type="radio" name="q8" id="a82" value="0">
            <label for="a82">ຮັບໄດ້ແຕ່ຕົວເລກ</label>
            <br>
            <input type="radio" name="q8" id="a83" value="0">
            <label for="a83">ຮັບໄດ້ແຕ່ຕົວອັກສອນ</label>
            <br>
            <input type="radio" name="q8" id="a84" value="0">
            <label for="a84">ບໍ່ມີຄໍາສັບນີ້ໃນພາສາຈາວາ</label>
        </fieldset>
        <label for="q9">9. ຈາກຄໍາສັ່ງວົນຊໍ້າຕໍ່ໄປນີ້:<br>for(int i = 0; i<=3; ++i){<br>&nbsp;&nbsp;System.out.print(i);<br>}<br>ມັນຈະສະແດງເລກຫຍັງ?</label>
        <fieldset id="q9" name="q9">
            <input type="radio" name="q9" id="a91" value="1">
            <label for="a91">0 1 2 3</label>
            <br>
            <input type="radio" name="q9" id="a92" value="0">
            <label for="a92">0 1 2</label>
            <br>
            <input type="radio" name="q9" id="a93" value="0">
            <label for="a93">1 2 3</label>
            <br>
            <input type="radio" name="q9" id="a94" value="0">
            <label for="a94">1 2 3 4</label>
        </fieldset>
        <label for="q10">10. ໃຫ້ຄໍາສັ່ງ <code>boolean IAmSmart = true;<br>if (IAmSmart) {<br>&nbsp;&nbsp;System.out.print("Yes")<br>} else {<br>&nbsp;&nbsp;System.out.print("No");<br>}</code><br>ມັນຈະສະແດງຫຍັງ?</label>
        <fieldset id="q10" name="q10">
            <input type="radio" name="q10" id="a101" value="1">
            <label for="a101">Yes</label>
            <br>
            <input type="radio" name="q10" id="a102" value="0">
            <label for="a102">No</label>
            <br>
            <input type="radio" name="q10" id="a103" value="0">
            <label for="a103">ບໍ່ສະແດງຫຍັງ</label>
            <br>
            <input type="radio" name="q10" id="a104" value="0">
            <label for="a104">ຂໍ້ຜິດພາດ</label>
        </fieldset>
        <hr>
        <input type="submit" value="ສົ່ງຄໍາຕອບ">
        <input type="reset" value="ລ້າງຄໍາຕອບ">
<?php require APPROOT . '/views/components/foot.php' ?>