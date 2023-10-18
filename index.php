<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Cairo:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rakkas&display=swap" rel="stylesheet">
    <style>
        * {
          box-sizing: border-box;
        }
        body {
            direction:rtl;
            font-family: 'Almarai', sans-serif;
        }
        
        input[type=number], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }
        
        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }
        
        input[type=submit] {
          background-color: #04AA6D;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        
        .col-25 {
          float: left;
          width: 25%;
          margin-top: 6px;
        }
        
        .col-75 {
          float: left;
          width: 75%;
          margin-top: 6px;
        }
        
        /* Clear floats after the columns */
        .row::after {
          content: "";
          display: table;
          clear: both;
        }
        .all-browsers {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

        footer {
  text-align: center;
  padding: 3px;
  background-color: #45a049;
  color: white;
  margin-top: 100%;
}
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
        }
        </style>
    <title>pricer</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-5">
        <div class="container-fluid">
          <a class="navbar-brand ">ZoalnaStore</a>
          <form class="d-flex" role="search">
            
            
          </form>
        </div>
      </nav>
    <div class="container">
        <form method="POST" action="result.php">
        <div class="row">
          <div class="col-25">
            
          </div>
          <div class="col-75">
            <input type="number" id="fname" name="dprice" placeholder="سعر الدولار اليوم">
          </div>
        </div>
        
        </div>
        <br>
        <div class="row m-3">
            
          <input type="submit" name="send" value="حساب الاسعار">
       
        </div>
        </form>
      </div>

      <footer>
        <p>mogtba amin<br>
      </footer>

</body>
</html>