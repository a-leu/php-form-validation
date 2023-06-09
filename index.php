<?php require 'validation_logic.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>php-form-validation</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Registration</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username"
                                   class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : '' ?>" value="<?php echo $username ?>">
                            <small class="form-text text-muted">Min 6 and max 16 characters</small>
                            <div class="invalid-feedback"><?php echo $errors['username'] ?? '' ?></div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" id="email" name="email"
                                   class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : '' ?>" value="<?php echo $email ?>">
                            <div class="invalid-feedback"><?php echo $errors['email'] ?? '' ?></div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password"
                                   class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : '' ?>" value="<?php echo $password ?>">
                            <div class="invalid-feedback"><?php echo $errors['password'] ?? '' ?></div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password_repeat" class="form-label">Repeat password</label>
                            <input type="password" id="password_repeat" name="password_repeat"
                                   class="form-control <?php echo isset($errors['password_repeat']) ? 'is-invalid' : '' ?>" value="<?php echo $password_repeat ?>">
                            <div class="invalid-feedback"><?php echo $errors['password_repeat'] ?? '' ?></div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="cv_url" class="form-label">CV link</label>
                            <input type="url" id="cv_url" name="cv_url"
                                   class="form-control <?php echo isset($errors['cv_url']) ? 'is-invalid' : '' ?>"
                                   placeholder="https://www.example.com/my-cv" value="<?php echo $cv_url ?>">
                            <small class="form-text text-muted">Optional field</small>
                            <div class="invalid-feedback"><?php echo $errors['cv_url'] ?? '' ?></div>
                        </div>
                        <button class="btn btn-primary w-100 mt-4">Okay!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

