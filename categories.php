<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-success">
        <div class="text-white py-2">
            <h2><i class="fas fa-folder pe-1"></i>Category</h2>
        </div>
    </div>

    <div class="card  pt-2">
        <div class="card-title ">
            <form method="post">
                <div class="row">
                    <div class="col text-end">
                        <label for="category-name" class="mt-2">Add Category</label>
                    </div>
                    <div class="col ps-0">
                        <input type="text" name="category_name" id="category-name" class="form-control " required autofocus>
                    </div>
                    <div class="col px-0">
                        <button type="submit" name="add" class="btn btn-success text-uppercase fw-bold">Add</button>
                    </div>
                </div>
            </form>
        </div>
    

    <div class="table-responsive-xl ">
        <table class="table table-striped table-hover w-50 mx-auto text-center mt-5">
            <thead class="table-dark text-uppercase">
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th></th>
                    <th></th>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                    <td>9</td>
                    <td>Food and Drinks</td>
                    <td>
                      <button class="btn btn-warning btn-sm">Update</button>
                      
                    </td>
                    <td><button class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>General</td>
                    <td>
                      <button class="btn btn-warning btn-sm">Update</button>
                      
                    </td>
                    <td><button class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Programming</td>
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