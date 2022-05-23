<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-warning">
        <div class="text-white py-2">
            <h2><i class="fas fa-user-edit pe-1"></i>User</h2>
        </div>
    </div>

    <div class="container w-50 mx-auto">
        <form action="" method="get">
            <h3 class="display-4">Add User</h3>
            <div class="row mb-2">
                <div class="col-6">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-6">
                  <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <input type="tel" name="contact_number" class="form-control" placeholder="Contact Number" required>
                </div>
                <div class="col-6">
                  <input type="text" name="address" class="form-control" placeholder="Address" required>
                </div>
            </div>
            <input type="text" name="username" class="form-control mb-2" placeholder="username" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button type="submit" name="add" class="btn btn-warning w-100 text-uppercase text-white fw-bold">Add</button>
        </form>
    </div>

    <div class="table-responsive-xl w-75 mx-auto">
        <table class="table table-hover table-striped my-5">
            <thead class="table-dark text-uppercase">
                <tr>
                    <th>Account ID</th>
                    <th>Full Name</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Username</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td>3</td>
                  <td>John Doe</td>
                  <td>4545435-54354</td>
                  <td>Budapest, Hungary</td>
                  <td>John</td>
                  <td>
                    <button class="btn btn-warning btn-sm">Update</button>
                 </td>
                  <td><button class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
              <tr>
                <td>6</td>
                <td>John Smith</td>
                <td>4545435-542354</td>
                <td>Moscow, Russia</td>
                <td>abc</td>
                <td>
                  <button class="btn btn-warning btn-sm">Update</button>
                 
                </td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
            </tbody>
        </table>
        
    </div>

    



    <script src="https://kit.fontawesome.com/bae9ba9f08.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>