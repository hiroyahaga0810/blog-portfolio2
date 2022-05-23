<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-danger">
        <div class="text-white py-2">
            <h2><i class="fas fa-user-cog pe-1"></i>Dashboard</h2>
        </div>
    </div>

    <main class="container">
        <h3 class="h4 text-muted fw-bold text-uppercase">all posts</h3>
        <div class="row">
            <div class="col-9 table-responsive-xl">
                <table class="table  table-hover table-striped ">
                    <thead class=" table-dark text-uppercase">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Date Posted</th>
                            <th></th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5</td>
                            <td>Letter from the admin</td>
                            <td>mark</td>
                            <td>General</td>
                            <td>Aug 15, 2021</td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-angle-double-right"></i>Details</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="col-3">
                <div class="card bg-primary mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Posts</h3>
                        <p class="fs-4"><i class="fas fa-pencil-alt"></i><?= countPosts($_SESSION['account_id']); ?></p>
                        <a href="posts.php"class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>
                <div class="card bg-success mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Categories</h3>
                        <p class="fs-4"><i class="fas fa-folder-open"></i><?= countCategories(); ?></p>
                        <a href="categories.php"class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>
                <div class="card bg-warning mb-4 border-5">
                    <div class="card-body text-center text-white">
                        <h3>Users</h3>
                        <p class="fs-4"><i class="fas fa-users"></i><?= countUsers(); ?></p>
                        <a href="users.php"class="btn btn-outline-light btn-sm fw-bold text-uppercase">view</a>
                    </div>
                </div>
            </nav>
        </div>
    </main>
        

 

    



    <script src="https://kit.fontawesome.com/bae9ba9f08.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>