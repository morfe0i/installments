<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافة طلب</title>
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
    <h1 class="card" style="color:orange;font-size: 72px;">اضافة طلب جديد</h1>
    <hr class="featurette-divider">

    <div class="col-md-12">
        <div class="card">
            <form action="../../src/process_add_order.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                    <label for="category">المنتج :</label>
                    <select name="item_id" id="item_id" required>
                    <option value="" disabled selected>اختر</option>
                        <?php
                        include '../../src/process_item_name.php';
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="instsllment_number">عدد الدفعات</label>
                    <input type="number" name="instsllment_number" id="instsllment_number" required>
                </div>
                <div class="mb-3">
                    <label for="quantity">الكمية</label>
                    <input type="number" name="quantity" id="quantity" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <div class="mb-3">
                    <input class="btn btn-warning" type="submit" value="اضافة المنتج">
                </div>
                
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
