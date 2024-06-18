<?php $this->load->view('auth/templates/header') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            background-color: salmon;
        }

        /* Style untuk form register */
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: 10px;
        }

        /* Style untuk tombol "Sign In" */
        .btn-block {
            display: block;
            width: 100%;
            padding: 10px;
        }

        /* Style untuk judul "Register" */
        .card-title {
            font-size: 24px;
            font-weight: bold;
        }

        /* Style untuk alert */
        .alert {
            margin-bottom: 1rem;
        }

        /* Style untuk footer */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
        }
    </style>


    <main class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5 px-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>

                        <!-- Alert -->
                        <div class="row">
                            <div class="col">
                                <?php if ($this->session->flashdata('message')) : ?>
                                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                        <?= $this->session->flashdata('message') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>

                        <form action="register/register" method="post">
                            <div class="form-label-group">
                                <input type="text" name="email" value="" class="form-control" id="inputEmail" placeholder="Email" required autofocus>
                                <label for="inputEmail">Email</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" name="username" value="" class="form-control" id="inputUsername" placeholder="Email" required autofocus>
                                <label for="inputUsername">Username</label>
                            </div>


                            <div class="form-label-group">
                                <input type="text" name="first_name" value="" class="form-control" id="inputFirstName" placeholder="Email" required autofocus>
                                <label for="inputFirstName">Firstname</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" name="last_name" value="" class="form-control" id="inputLastname" placeholder="Email" required autofocus>
                                <label for="inputLastname">Lastname</label>
                            </div>
                            <div class="form-label-group">
                                <input type="text" name="company" value="" class="form-control" id="inputCompany" placeholder="Email" required autofocus>
                                <label for="inputCompany">Company</label>
                            </div>
                            <div class="form-label-group">
                                <input type="text" name="phone" value="" class="form-control" id="inputPhone" placeholder="Email" required autofocus>
                                <label for="inputPhone">Phone</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" name="password" id="inputPassword" value="" class="form-control" placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="configm_password" id="inputConfirmPassword" value="" class="form-control" placeholder="" required>
                                <label for="inputConfirmPassword">Confirm Password</label>
                            </div>

                            <div class="form-label-group">
                                <select name="role" class="form-control" id="">
                                    <option value="admin">Admin</option>
                                    <option value="author">Author</option>
                                </select>
                            </div>
                            <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit">Sign In</button>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>