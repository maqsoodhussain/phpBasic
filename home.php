<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" 
          content="width=device-width, 
                   initial-scale=1,
                   shrink-to-fit=no" />
    <link rel="stylesheet" 
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Bootstrap Form</title>
</head>

<body>
    <h1 class="text-success text-center">
        LOGIN HERE
    </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="registrationForm" action="handle.php" method="POST">
                            <div class="form-group">
                                <label for="username">
                                    Username
                                </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="username" 
                                       name="username"
                                       placeholder="username" required />
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Password
                                </label>
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       name="password"
                                       placeholder="Password"
                                    required />
                            </div>
                            <button class="btn btn-danger btn-block">
                                Login
                            </button>
                        </form>
                        <p class="mt-3">
                            Not registered?
                            <a href="#">Create an
                                account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>