<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Nayantar Memorial Charitable Trust</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
        }

        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            text-align: center;
            padding: 2rem;
        }

        .login-header i {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .login-body {
            padding: 2rem;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #e3e6f0;
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .btn-login {
            background: linear-gradient(135deg, #3498db, #2980b9);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #2980b9, #1f6ba8);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
            color: white;
        }

        .input-group-text {
            background: #f8f9fa;
            border: 2px solid #e3e6f0;
            border-radius: 10px 0 0 10px;
        }

        .form-control:not(:last-child) {
            border-radius: 0 10px 10px 0;
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .back-link {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: #f39c12;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <i class="fas fa-user-shield"></i>
                    <h3 class="mb-0">Admin Login</h3>
                    <p class="mb-0">Nayantar Memorial Charitable Trust</p>
                </div>
                <div class="login-body">
                    <?php if (session('error')): ?>
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle"></i> <?= session('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('admin/authenticate') ?>" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Enter your username" required autofocus>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-login">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <a href="<?= base_url() ?>" class="back-link">
                            <i class="fas fa-arrow-left"></i> Back to Website
                        </a>
                    </div>

                    <div class="mt-4 p-3" style="background-color: #f8f9fa; border-radius: 10px;">
                        <small class="text-muted">
                            <strong>Demo Credentials:</strong><br>
                            Username: <code>admin</code><br>
                            Password: <code>admin123</code>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
