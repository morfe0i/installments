<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافة منتج</title>
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
    <h1 class="card" style="color:red;font-size: 72px;">اضافة منتج جديد</h1>
    <hr class="featurette-divider">

    <div class="col-md-12">
        <div class="card">
            <form action="../../src/process_add_item.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="item_name">اسم المنتج :</label>
                    <input type="text" name="item_name" id="item_name" required>
                </div>
                <div class="mb-3">
                    <label for="item_price">سعر المنتج بالدينار العراقي :</label>
                    <input type="number" name="item_price" id="item_price" required>
                </div>
                <div class="mb-3">
                    <label for="category">التصنيف :</label>
                    <select name="category" id="category" required>
                        <?php
                        include '../../src/process_categories.php';
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="item_image">صورة المنتج :</label>
                    <input type="file" name="item_image" id="item_image" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <input class="btn btn-danger" type="submit" value="اضافة المنتج">
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
