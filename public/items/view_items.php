<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض المنتجات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/styles.css">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
    </style>
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
    <h1 class="card" style="color:red;font-size: 72px;">بيانات المنتجات</h1>
    <hr class="featurette-divider">
    
    <div class="col-md-12">
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr class="table table-danger">
                        <th scope="col">ت</th>
                        <th scope="col">صورة المنتج</th>
                        <th scope="col">اسم المنتج</th>
                        <th scope="col">سعر المنتج</th>
                        <th scope="col">تصنيف المنتج</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../../src/process_view_items.php';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
   
</body>
</html>
