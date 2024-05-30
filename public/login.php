<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">

</head>
<body style="direction: rtl;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">تسجيل الدخول</h2>
                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">اسم المستخدم:</label>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">كلمة المرور:</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <a href="">نسيت كلمة المرور ؟ اضغط هنا</a>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark">تسجيل الدخول</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
