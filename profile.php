<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-secondary">
        <div class="text-white py-2">
            <h2><i class="fas fa-user pe-1"></i>Profile</h2>
        </div>
    </div>

    <main class="container border mt-3 py-2">
        <form action="" method="post">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <label for="" class="form-label small">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control " required >
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label small">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <label for="" class="form=label small">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="col-4">
                            <label for="" class="form=label small">Contact Number</label>
                            <input type="number" name="contact_number" id="contact-number" class="form-control" required>
                        </div>
                    </div>
                    <label for="" class="form-label small">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                    
                    <label for="" class="form-label small">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password to confirm" required>
                    <button type="submit" name="update" class="btn btn-primary w-100 text-uppercase mt-4">Update</button>
                </div>
                <div class="col-4">
                    <img src="../gar.jpg" alt="sample photo" class="w-100 h-75">
                    <input type="file" name="avatar" class="form-control mt-2" accept="image/*">
                </div>
            </div>
        </form>
    </main>
    

   



    <script src="https://kit.fontawesome.com/bae9ba9f08.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>