@extends('template.default')
@section('title', 'Form')
@section('content')
    <h1 class ="fs-1 text-center">Workshop #HTML - FORM</h1>
    <form>
        <div class="row mb-3">
            <div class="col-3">
                <label for="fname" class="form-label">ชื่อ</label>
            </div>
            <div class="col-6">
                <input type="text" id="fname" class="form-control form-control-sm">
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุชื่อ
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                <label for="lname" class="form-label">สกุล</label>
            </div>
            <div class="col-6">
                <input type="text" id="lname" class="form-control form-control-sm">
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุนามสกุล
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                <label for="Birth" class="form-label">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col-4">
                <input type="date" id="Birth" class="form-control form-control-sm">
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุวัน/เดือน/ปีเกิด
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                <label for="Ages" class="form-label">อายุ</label>
            </div>
            <div class="col-4">
                <input type="number" id="Ages" class="form-control form-control-sm" min="0">
                <div class="valid-feedback">ถูกต้อง</div>
                <div class="invalid-feedback">โปรดระบุอายุ</div>
            </div>
        </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="Gender" class="form-check-label">เพศ</label>
                </div>
                <div class="col-4 form-check-inline">
                    <input type="radio" id="Male" class="form-check-input" name="Gender" value="Male">
                    ชาย
                    <input type="radio" id="Female" class="form-check-input ms-3" name="Gender" value="Female">
                    หญิง
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดระบุเพศ</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="Images" class="form-label">รูป</label>
                </div>
                <div class="col-4">
                    <input type="file" id="Images" class="form-control form-control-sm" multiple>
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดอัปโหลดรูปภาพ</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="Address" class="form-label">ที่อยู่</label>
                </div>
                <div class="col-6">
                    <textarea class="form-control" id="Address" rows="4"></textarea>
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดระบุที่อยู่</div>
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
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดระบุสีที่ชอบ</div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">
                    <label for="FavMusic" class="form-check-label">แนวเพลงที่ชอบ</label>
                </div>
                <div class="col-8 form-check-inline">
                    <input type="radio" id="Tpop" class="form-check-input" name="FavMusic" value="Tpop">
                    ไทยป๊อป
                    <input type="radio" id="Kpop" class="form-check-input ms-3" name="FavMusic" value="Kpop">
                    เคป๊อป
                    <input type="radio" id="Else" class="form-check-input ms-3" name="FavMusic" value="Else">
                    อื่น ๆ
                    <div class="valid-feedback">ถูกต้อง</div>
                    <div class="invalid-feedback">โปรดระบุแนวเพลงที่ชอบ</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="PDPA" id="AcceptPDPA">
                        <label class="form-check-label" for="AcceptPDPA">
                            ยินยอมให้เก็บข้อมูล
                        </label>
                        <div class="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดยินยอมให้เก็บข้อมูล</div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-end">
                    <button type="button" class="btn btn-success float-end" onclick="clickMe()">Submit</button>
                    <button type="reset" class="btn btn-secondary float-end me-4">Reset</button>
                </div>
            </div>
    </form>
@endsection

@push('scripts')
    <script>
        let clickMe = function() {
            console.log(document.getElementById('fname'));
            // fname.value = "from Clickme"
            // console.log(fname.value);

            if (fname.value == "") {
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            } else {
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }

            if (lname.value == "") {
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            } else {
                lname.classList.remove('is-invalid')
                lname.classList.add('is-valid')
            }

            if (Birth.value == "") {
                Birth.classList.remove('is-valid')
                Birth.classList.add('is-invalid')
            } else {
                Birth.classList.remove('is-invalid')
                Birth.classList.add('is-valid')
            }

            if (Ages.value == "") {
                Ages.classList.remove('is-valid')
                Ages.classList.add('is-invalid')
            } else {
                Ages.classList.remove('is-invalid')
                Ages.classList.add('is-valid')
            }

            let male = document.getElementById("Male");
            let female = document.getElementById("Female");
            if (male.checked || female.checked) {
                male.classList.remove("is-invalid");
                female.classList.remove("is-invalid");
                male.classList.add("is-valid");
                female.classList.add("is-valid");
            } else {
                male.classList.remove("is-valid");
                female.classList.remove("is-valid");
                male.classList.add("is-invalid");
                female.classList.add("is-invalid");
            }

            let img = document.getElementById("Images")
            if (img.files.length == 0) {
                img.classList.remove('is-valid')
                img.classList.add('is-invalid')
            } else {
                img.classList.remove('is-invalid')
                img.classList.add('is-valid')
            }

            if (Address.value == "") {
                Address.classList.remove('is-valid')
                Address.classList.add('is-invalid')
            } else {
                Address.classList.remove('is-invalid')
                Address.classList.add('is-valid')
            }

            if (FavColor.value == '-') {
                FavColor.classList.remove('is-valid')
                FavColor.classList.add('is-invalid')
            } else {
                FavColor.classList.remove('is-invalid')
                FavColor.classList.add('is-valid')
            }

            let tpop = document.getElementById("Tpop");
            let kpop = document.getElementById("Kpop");
            let elseMusic = document.getElementById("Else");

            if (tpop.checked || kpop.checked || elseMusic.checked) {
                // มีการเลือกอย่างน้อยหนึ่งค่า → valid
                tpop.classList.remove("is-invalid");
                kpop.classList.remove("is-invalid");
                elseMusic.classList.remove("is-invalid");

                tpop.classList.add("is-valid");
                kpop.classList.add("is-valid");
                elseMusic.classList.add("is-valid");
            } else {
                // ยังไม่ได้เลือกเลย → invalid
                tpop.classList.remove("is-valid");
                kpop.classList.remove("is-valid");
                elseMusic.classList.remove("is-valid");

                tpop.classList.add("is-invalid");
                kpop.classList.add("is-invalid");
                elseMusic.classList.add("is-invalid");
            }

            if (!(AcceptPDPA.checked)) {
                AcceptPDPA.classList.remove('is-valid')
                AcceptPDPA.classList.add('is-invalid')
            } else {
                AcceptPDPA.classList.remove('is-invalid')
                AcceptPDPA.classList.add('is-valid')
            }


        }

        let myfunc = (callback) => {
            callback("in Callback")
        }

        callMe = (param) => {
            console.log(param);

        }
        myfunc(callMe)

        console.log("Hello World! JS")
        console.warn("Hello World! JS warn")
        console.error("Hello World! JS err")
    </script>
@endpush
