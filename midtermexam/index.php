<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 30px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            background-color: #000;
            color: #fff;
        }

        th {
            background-color: #333;
            text-align: center;
        }

        select,
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="addOrders.php" method="POST">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h4>รายการ</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="4">เลือกเครื่องดื่มของคุณ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>เครื่องดื่ม:</th>
                                    <td colspan="3">
                                        <select class="form-select" name="drink" required>
                                            <option value="" disabled selected>เลือกเครื่องดื่ม</option>
                                            <option value="ชาเขียว">ชาเขียว</option>
                                            <option value="ชาไทย">ชาไทย</option>
                                            <option value="ชานม">ชานม</option>
                                            <option value="ชามะนาว">ชามะนาว</option>
                                            <option value="">กาแฟ</option>
                                            <option value="เอสเพรสโซ่">เอสเพรสโซ่</option>
                                            <option value="ลาเต้">ลาเต้</option>
                                            <option value="คาปูชิโน่">คาปูชิโน่</option>
                                            <option value="มอค่า">มอคค่า</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ประเภท:</th>
                                    <td>
                                        <form method="post" name="type">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type" value="ปั่น">
                                                <label class="form-check-label">ปั่น</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type" value="ร้อน">
                                                <label class="form-check-label">ร้อน</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="type" value="เย็น">
                                                <label class="form-check-label">เย็น</label>
                                            </div>
                                        </form>
                                    </td>
                                    <th>ท็อปปิ้ง:</th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ไข่มุก" name="topping[]">
                                            <label class="form-check-label">ไข่มุก</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="เจลลี่ผลไม้" name="topping[]">
                                            <label class="form-check-label">เจลลี่ผลไม้</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="เจลลี่น้ำผึ้ง" name="topping[]">
                                            <label class="form-check-label">เจลลี่น้ำผึ้ง</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="เจลลี่" name="topping[]">
                                            <label class="form-check-label">เจลลี่</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>