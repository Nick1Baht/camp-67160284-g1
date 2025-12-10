<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        body {font-family: "Itim", cursive;}
        body {
                background-image: url("{{ asset('img/yim2.png') }}");
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
    .content-box {
    width: 40%;              
    margin: 50px auto;       
    padding: 20px;           
    background-color: #f3a7e5; 
    border-radius: 8px;      
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
    opacity: 75%;
    align-items: center;
    }
    
    </style>
</head>
    <body>
        <div class="content-box">
            <h1 class ="fs-1 text-center">Workshop #HTML - FORM</h1>
                <form>
                    <div class="row mb-3">
    <div class="col-3">
      <label for="fname" class="form-label">ชื่อ</label>
    </div>
    <div class="col-6">
      <input type="text" id="fname" class="form-control form-control-sm">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="lname" class="form-label">สกุล</label>
    </div>
    <div class="col-6">
      <input type="text" id="lname" class="form-control form-control-sm">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="Birth" class="form-label">วัน/เดือน/ปีเกิด</label>
    </div>
    <div class="col-4">
      <input type="date" id="Images" class="form-control form-control-sm">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="Ages" class="form-label">อายุ</label>
    </div>
    <div class="col-4">
      <input type="number" id="Ages" class="form-control form-control-sm" min="0">
    </div>
  </div>

    <div class="row mb-3">
    <div class="col-3">
      <label for="Gender" class="form-check-label">เพศ</label>
    </div>
    <div class="col-4 form-check-inline">
      <input type="radio" id="Gender" class="form-check-input" name="Gender" value="Male">
      ชาย
      <input type="radio" id="Gender" class="form-check-input ms-3" name="Gender" value="Female">
      หญิง
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="Images" class="form-label">รูป</label>
    </div>
    <div class="col-4">
      <input type="file" id="Images" class="form-control form-control-sm" multiple>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="Address" class="form-label">ที่อยู่</label>
    </div>
    <div class="col-6">
      <textarea class="form-control" id="Address" rows="4"></textarea>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="FavColor" class="form-label">สีที่ชอบ</label>
    </div>
    <div class="col-4">
    <select class="form-select" aria-label="เลือกสี" id="FavColor">
    <option selected>-</option>
    <option value="red">แดง</option>
    <option value="blue">น้ำเงิน</option>
    <option value="green">เขียว</option>
    <option value="yellow">เหลือง</option>
    <option value="orange">ส้ม</option>
    <option value="purple">ม่วง</option>
    <option value="pink">ชมพู</option>
    <option value="brown">น้ำตาล</option>
    <option value="black">ดำ</option>
    <option value="white">ขาว</option>
    <option value="gray">เทา</option>
    <option value="cyan">ฟ้า</option>
    <option value="magenta">บานเย็น</option>
    <option value="lime">เขียวอ่อน</option>
    <option value="teal">เขียวอมฟ้า</option>
    <option value="indigo">คราม</option>
    <option value="violet">ม่วงอ่อน</option>
    <option value="gold">ทอง</option>
    <option value="silver">เงิน</option>
    <option value="beige">เบจ</option>
    <option value="maroon">เลือดหมู</option>
    <option value="navy">กรมท่า</option>
    <option value="olive">เขียวมะกอก</option>
    <option value="turquoise">ฟ้าน้ำทะเล</option>
    </select>
    </div>
  </div>

      <div class="row mb-4">
    <div class="col-3">
      <label for="FavMusic" class="form-check-label">แนวเพลงที่ชอบ</label>
    </div>
    <div class="col-8 form-check-inline">
      <input type="radio" id="FavMusic" class="form-check-input" name="Tpop" value="Tpop">
      ไทยป๊อป
      <input type="radio" id="FavMusic" class="form-check-input ms-3" name="Kpop" value="Kpop">
      เคป๊อป
      <input type="radio" id="FavMusic" class="form-check-input ms-3" name="Else" value="Else">
      อื่น ๆ
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-4">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="PDPA" id="AcceptPDPA">
        <label class="form-check-label" for="AcceptPDPA">
        ยินยอมให้เก็บข้อมูล
        </label>
        </div>
    </div>
  </div>

<div class="row mb-3">
    <div class="col-end">
        <button type="button" class="btn btn-success float-end">Submit</button>
        <button type="button" class="btn btn-secondary float-end me-4">Reset</button>
    </div>
</div>

                </form>
        </div>
    </body>
</html>