<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Dargan API</title>
    
    <style>
        .pad-bg {
          background: #f8f8f8;
          padding: 40px 20px;
          border-radius: 5px;
          margin-top: 50px;
          margin-bottom: 50px;
          border: 1px solid #e5e5e5;
          h1 {
            padding-bottom: 30px;
            margin-top: 0;
            margin-bottom: 30px;
            border-bottom: 1px dashed #ccc;
          }
        }
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="row">
          <div class="col-sm-3"></div>
            <div class="col-sm-6 col-sm-offset-2">
              <!-- Default form -->
              <form action="darganapi.php" class='pad-bg' method="POST">
                <h1 class="text-center">Dargan API Test</h1>
                <div class="form-group">
                  <label for="">Postcode</label>
                  <input type="text" name="postcode" class="i-box form-control input-lg" />
                </div>
                <div class="form-group">
                  <label for="">Distance</label>
                    <select class="form-control" name="distance">
                      <option value="Within 1 mile">Within 1 mile</option>
                      <option value="Within 1 mile">Within 5 mile</option>
                      <option value="Within 1 mile">Within 10 mile</option>
                      <option value="Within 1 mile">Within 15 mile</option>
                      <option value="Within 1 mile">Within 20 mile</option>
                    </select>
                </div>
                
                <br>
                <button class="btn btn-primary btn-sm text-center">Submit</button>
              </form>
            </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>