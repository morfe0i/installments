<?php
require_once '../../src/db_connection.php';
require_once '../../src/functions.php';

$cust_data = array_values(get_data($conn, 'customers', 'customer_id', $_GET['id'])->fetch_assoc());

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل عميل</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/styles.css">

</head>
<body class="container" style="direction: rtl;">
<div class="col-md-12" style="padding:10px;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- Navbar items -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav">
                        <a class="nav-link" href="../index.php">الصفحة الرئيسية</a>
                        <a class="nav-link" href="../customers/customers.php">لوحة العملاء</a>
                        <a class="nav-link" href="../items.php">لوحة المنتجات</a>
                        <a class="nav-link" href="">تصدير المعلومات</a>
                        <a class="nav-link" href="">احصائيات</a>
                    </div>
                </div>

                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="../../assets/img/logo.png" alt="Logo" width="50" height="50">
                </a>
                
                <!-- Navbar toggler for smaller screens -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <h1 class="card" style="color:green;font-size: 72px;">تعديل معلومات العميل</h1>
    <hr class="featurette-divider">

    <div class="col-md-12">
        <div class="card">
            <form action="../../src/process_edit_info.php" method="post">
                <div class="mb-3">
                    <label for="customer_fname">الاسم الاول:</label>
                    <input type="text" name="customer_fname" id="customer_fname" value="<?php echo $cust_data[1] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="customer_lname">الاسم الاخير:</label>
                    <input type="text" name="customer_lname" id="customer_lname" value="<?php echo $cust_data[2] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="customer_phone">رقم الهاتف:</label>
                    <input type="number" name="customer_phone" id="customer_phone"  value="<?php echo $cust_data[3] ?>"  maxlength="11" placeholder="07801234567" required>
                </div>
                <div class="mb-3">
                    <label for="customer_gender">الجنس:</label>
                    <select name="customer_gender" id="customer_gender" required>
                        <option  value="<?php echo $cust_data[4] ?>" selected><?php if($cust_data[4]=='F'){echo 'أنثى';} else {echo 'ذكر';}  ?></option>
                        <option value="F">أنثى</option>
                        <option value="M">ذكر</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="customer_city">المدينة:</label>
                    <select name="customer_city" id="customer_city" required>
                        <option  value="<?php echo $cust_data[1] ?>" selected><?php echo $cust_data[5] ?></option>
                        <option value="بغداد">بغداد</option>
                        <option value="نينوى">نينوى</option>
                        <option value="البصرة">البصرة</option>
                        <option value="صلاح الدين">صلاح الدين</option>
                        <option value="دهوك">دهوك</option>
                        <option value="اربيل">اربيل</option>
                        <option value="السليمانية">السليمانية</option>
                        <option value="ديالى">ديالى</option>
                        <option value="واسط">واسط</option>
                        <option value="ميسان">ميسان</option>
                        <option value="ذي قار">ذي قار</option>
                        <option value="المثنى">المثنى</option>
                        <option value="بابل">بابل</option>
                        <option value="كربلاء">كربلاء</option>
                        <option value="النجف">النجف</option>
                        <option value="الأنبار">الأنبار</option>
                        <option value="القادسية">القادسية</option>
                        <option value="كركوك">كركوك</option>

                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <div class="mb-3">
                    <input class="btn btn-success" type="submit" value="حفظ التعديلات">
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
