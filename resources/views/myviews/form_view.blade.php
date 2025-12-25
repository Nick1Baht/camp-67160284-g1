@extends('template.default')
@section('title', 'Form-view')
@section('header', 'Form View')
@section('content')

    <body class = "fs-5">
        <label for="fname">ชื่อ</label>
        <span id="fname">
            <?php
            echo $fname;
            ?>
        </span>

        <br>
        <label for="lname">สกุล</label>
        <span id="lname">
            <?php
            echo $lname;
            ?>
        </span>

        <br>
        <label for="Birth">วันเดือนปีเกิด</label>
        <span id="Birth">
            <?php
            echo $Birth;
            ?>
        </span>

        <br>
        <label for="Ages">อายุ</label>
        <span id="Ages">
            <?php
            echo $Ages;
            echo " ปี";
            ?>
        </span>

        <br>
        <label for="Gender">เพศ</label>
        <span id="Gender">
            <?php
            if ($Gender = "Male") {
                echo "ชาย";
            }else {
                echo "หญิง";
            }
            ?>
        </span>

        <br>
        <label for="">รูปภาพ</label>
        <span id="Images">
            <?php
            echo $Images;
            ?>
        </span>

        <br>
        <label for="Address">ที่อยู่</label>
        <span id="Address">
            <?php
            echo $Address;
            ?>
        </span>

        <br>
        <label for="FavColor">สีที่ชอบ</label>
        <span id="FavColor">
            <?php
            echo $FavColor;
            ?>
        </span>

        <br>
        <label for="FavMusic">เพลงที่ชอบ</label>
        <span id="FavMusic">
            <?php
            echo $FavMusic;
            ?>
        </span>

        <br>
        <label for="AcceptPDPA">ยินยอมให้เก็บข้อมูล</label>
        <span id="AcceptPDPA">
            <?php
            if (!empty($AcceptPDPA)) {
                echo "ยินยอม";
            }else {
                echo "ไม่ยินยอม";
            }
            ?>
        </span>
    </body>


@endsection
