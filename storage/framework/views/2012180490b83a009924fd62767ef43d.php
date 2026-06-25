<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - RS Madani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0D1B3D;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }
        .login-header {
            background: #0D1B3D;
            padding: 2rem;
            text-align: center;
        }
        .login-header h4 { color: #fff; }
        .login-header p { color: rgba(255,255,255,0.7); font-size: 0.9rem; }
        .login-body { padding: 2rem; }
        .form-control { border-radius: 10px; padding: 0.75rem 1rem; }
        .btn-primary { border-radius: 10px; padding: 0.75rem; font-weight: 600; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card login-card shadow-lg">
                    <div class="login-header">
                        <div class="mb-2">
                            <i class="bi bi-heart-pulse text-secondary fs-1"></i>
                        </div>
                        <h4>RS Madani</h4>
                        <p>Panel Administrasi</p>
                    </div>
                    <div class="login-body">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('admin.authenticate')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="admin@rsmadani.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Login
                            </button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="<?php echo e(route('home')); ?>" class="text-decoration-none small">
                                <i class="bi bi-arrow-left me-1"></i>Kembali ke Website
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\rs-madani\resources\views/admin/login.blade.php ENDPATH**/ ?>