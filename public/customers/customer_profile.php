<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحساب الشخصي</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/styles.css">

    <style>
        .profile-info {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .order-table {
            margin-top: 20px;
        }

        .order-table th,
        .order-table td {
            padding: 10px;
            text-align: center;
        }

        .order-table th {
            background-color: #f0f0f0;
        }

        .order-table td button {
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .order-table td button:hover {
            color: darkred;
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
                        <a class="nav-link" href="./customers.php">لوحة العملاء</a>
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
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card">
                <img src="<?php include '../../src/process_profile.php'; if($customer_data[4]=='F'){echo '../../assets/img/profile-female.png';}else {echo '../../assets/img/profile-male.png';};?>" width="240px" height="205px" alt="Profile Image">
            </div>
        </div>
        <div class="col-md-9">
    <div class="card profile-info">
        <div class="card-header">
            <h2 class="card-title">بروفايل العميل</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>الاسم:</strong> 
                    <?php include '../../src/process_profile.php'; echo $customer_data[1] . ' ' . $customer_data[2];?>
                </p>
                </div>
                <div class="col-md-6">
                    <p><strong>رقم الهاتف:</strong> 
                    <?php include '../../src/process_profile.php'; echo $customer_data[3];?>
                </p>
                </div>
                <div class="col-md-6">
                    <p><strong>الجنس</strong>
                    <?php include '../../src/process_profile.php'; if ($customer_data[4] == 'F') {
                        echo 'انثى';
                    }else {
                        echo 'ذكر';
                    };?>
                </p>
                </div>
                <div class="col-md-6">
                    <p><strong>المدينة</strong> <?php include '../../src/process_profile.php'; echo $customer_data[5];?></p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <a href="../orders/add_order.php?id=<?php include '../../src/process_profile.php'; echo $customer_data[0];?>" class="btn btn-dark">اضافة طلب</a>
                    </div>
                    <div class="col-md-6">
                        <a href="./edit_cust_info.php?id=<?php include '../../src/process_profile.php'; echo $customer_data[0];?>" class="btn btn-dark">تعديل المعلومات الشخصية</a>
                    </div>
                </div>
        </div>
    </div>
</div>

    </div>

    <hr class="featurette-divider">

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <h2>الطلبات</h2>
                <table class="order-table">
                    <thead>
                        <tr>
                            <th>رقم الطلب</th>
                            <th>اسم المنتج</th>
                            <th>تاريخ الشراء</th>
                            <th>سعر الطلب</th>
                            <th>عدد الأقساط</th>
                            <th>الأقساط المتبقية</th>
                            <th>سعر القسط</th>
                            <th>الخيارات</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php include '../../src/process_profile.php';
                            while ($row = $orders_array->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>'. $row['order_id'] .'</td>';
                                $columns = array('item_id', 'item_name');
                                    $result = get_data($conn, 'items', 'item_id', (int) $row['item_id']);

                                    if ($result->num_rows > 0) {
                                        while($rows = $result->fetch_assoc()) {
                                            echo '<td>'. $rows['item_name'] .'</td>';;
                                        }
                                    }
                                
                                echo '<td>'. $row['start_date'] .'</td>';
                                echo '<td>'. $row['installment_price'] .' IQD</td>';
                                echo '<td>'. $row['installments_number'] .'</td>';
                                $installments_left = (((int) $row['installments_number']) - ((int) $row['installments_paid']));
                                echo '<td>'. $installments_left .'</td>';

                                $individual_installment = (float) $row['installment_price'] / (int) $row['installments_number'];
                                echo '<td>'.  $individual_installment .' IQD</td>';
                                echo '<td>';

                                echo "<form action=\"../../src/process_action.php\" method=\"post\">";
                                echo "<input type=\"hidden\" name=\"inst-paid\" value=\"" . $row['installments_paid'] . "\">";
                                echo "<input type=\"hidden\" name=\"cust-id\" value=\"" . $row['customer_id'] . "\">";
                                echo "<input type=\"hidden\" name=\"order-id\" value=\"" . $row['order_id'] . "\">";
                                echo "<input type=\"hidden\" name=\"name\" value=\"record-installment\">";
                                echo '<button type=\'submit\' style="color:green;">تسديد قسط</button></br>';
                                echo "</form>";
                                
                                echo "<form action=\"../../src/process_action.php\" method=\"post\">";
                                echo "<input type=\"hidden\" name=\"cust-id\" value=\"" . $row['customer_id'] . "\">";
                                echo "<input type=\"hidden\" name=\"order-id\" value=\"" . $row['order_id'] . "\">";
                                echo "<input type=\"hidden\" name=\"name\" value=\"delete-order\">";
                                echo '<button type=\'submit\' style="color:red;">حذف</button>';
                                echo "</form>";

                                echo '</td>';
                                echo '</tr>';
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container" style="direction: ltr;">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-body-secondary">Morfei Future Company</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                </svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 
