<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/auth.css">
    <title>Document</title>
   
</head>

<body>
    <!-- <div class="signup__container row justify-content-between">
        <form id="registerForm" class="signup__container__form col-12 col-md-6" action="signup" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="Enter your name"/>
                <small id="nom" class="form-text text-muted"></small>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address :</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                <small id="email" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password :</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter your password ">
                <small id="password" class="form-text text-muted"></small>
            </div>

            <button type="submit" name="register" class="signup__container__form__submit btn btn-primary ">Create Account</button>
        </form>

        <div class="signup__picture  d-none d-md-flex  col-md-6 ">
            <img src="/assets/images/articles.avif" alt="">
        </div>
    </div> -->

    
</body>

</html>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('form').addEventListener('submit', function (event) {
                if (!validateForm()) {
                    event.preventDefault();
                }
            });

            function validateForm() {
                let name = document.getElementById('name').value.trim();
                let email = document.getElementById('email').value.trim();
                let password = document.getElementById('password').value.trim();

                if (name === "") {
                    alert("Please enter your name.");
                    return false;
                }

                if (!validateEmail(email)) {
                    alert("Invalid email address");
                    return false;
                }

                if (!validatePassword(password)) {
                    alert("Mot de passe incorrect. Le mot de passe doit comporter au moins 8 caractères, dont une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.");
                    return false;
                }

                // If all validations pass, allow form submission
                return true;
            }

            function validateEmail(email) {
                const emailRegex = /^\S+@\S+\.\S+$/;
                return emailRegex.test(email);
            }

            function validatePassword(password) {
                return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password);
            }
        });
    </script>

<body>
    <section class="vh-100" style="background-color: #5F9EA0;">
        <div class="container h-100 " >
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" id="form" method="post" action="signup">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label"  for="form3Example1c">Your Name</label>
                                                <input type="text" id="name"name="nom" class="form-control" />
                                                <span class="d-none text-danger" id="name-error">non valider</span>

                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label"  for="form3Example3c">Your Email</label>
                                                <input type="email" id="email"name="email" class="form-control" />
                                                <span class="d-none text-danger" id="email-error">non valider</span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label"  for="form3Example4c">Password</label>
                                                <input type="password" id="password"name="password" class="form-control" />
                                                <span class="d-none text-danger" id="password-error">non valider</span>

                                            </div>
                                        </div>


                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" name="register" class="signup__container__form__submit btn btn-primary ">Create Account</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <script src="assets/js/signup.js"></script>
</body>

</html>