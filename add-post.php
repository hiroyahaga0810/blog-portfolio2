<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Post</title>
</head>
<body>
   <div class="container">
        <div class="card w-50 mx-auto">
            <div class="card-header bg-white border-bottom-0">
                <h2 class="display-4 text-center my-4"><i class="fas fa-edit"></i>Add Post</h2>
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <input type="text" name="title" id="title" class="form-control border border-top-0 border-start-0 border-end-0 rounded-0 border-3 border-info mb-3" placeholder="Title">
                    <input type="date" name="date" id="date" class="form-control border border-top-0 border-start-0 border-end-0 rounded-0 border-3 border-dark mb-3" >
                    <select name="category" id="category" class="form-select mb-3 border border-top-0 border-start-0 border-end-0 rounded-0 border-3 border-dark">
                        <option value="" hidden>Category</option>
                    </select>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control border-dark border-3 mb-2" placeholder="MESSAGE"></textarea>

                    <div class="input-group">
                        <span class="input-group-text bg-secondary text-white">Author</span>
                        <select name="author" id="author" class="form-select border border-top-0 border-start-0 border-end-0 rounded-0 border-3 border-dark">
                            <option value="" hidden></option>
                            <option value="mark" selected>Mark</option>
                            <option value="john">John</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark w-100 text-uppercase mt-5" >Post</button>
                </form>
            </div>
        </div>

   </div>

    

   





    <script src="https://kit.fontawesome.com/bae9ba9f08.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>