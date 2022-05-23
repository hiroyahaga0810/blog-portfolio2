<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50 mx-auto my-5">
        <form action="" method="get">
            <div class="card">
                <div class="card-header bg-success">
                    <h1 class="display-4">Register</h1>
                    <p class="card-subtitle">Please fill out this form</p>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control border-top-0 border-end-0 border-start-0 border-3 border-primary rounded-0">
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control border-3">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <div class="form-text">
                            You will use this to log in.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="career" class="form-label">Career Field</label>
                        <select name="career" id="career" class="form-select">
                            <option value="" hidden>Select your career</option>
                            <option value="architect">Architect</option>
                            <option value="engineering">Engineering</option>
                        </select>
                    </div>

                    <div class="mb-3 input-group">
                        <span class="input-group-text bg-dark text-white">Career Field</span>
                        <select name="career" id="career" class="form-select">
                            <option value="" hidden>Select your career</option>
                            <option value="architect">Architect</option>
                            <option value="engineering">Engineering</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="hobbies" value="singing" id="sing" class="form-check-input">
                            <label for="sing" class="form-check-label">Singing</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="hobbies" value="dancing" id="danceg" class="form-check-input">
                            <label for="dance" class="form-check-label">Dancing</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="marital_status" value="single" id="single" class="form-check-input">
                            <label for="single" class="form-check-label">Single</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="marital_status" value="married" id="married" class="form-check-input">
                            <label for="married" class="form-check-label">Married</label>

                        </div>
                    </div>

                    <div class="mb-3">
                        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your comments" class="form-control"></textarea>
                    </div>
                </div>
                <!-- card-footer -->
                <div class="card-footer">
                    <div class="text-end">
                        <input type="submit" name="submit" value="send" class="btn btn-success btn-sm">
                        <a href="" class="btn btn-outline-secondary btn-sm">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    





    <script src="https://kit.fontawesome.com/bae9ba9f08.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>