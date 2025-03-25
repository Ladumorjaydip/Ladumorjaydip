<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles_calc.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="photo/favicon.png" />
  <title>Calculator-Carbon Footprint</title>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="photo/favicon.png" target="_blank">
            <img src="photo/favicon.png" alt="Logo" style="width:40px;margin-left:10px;" class="rounded-pill">
          </a>
          <a class="navbar-brand" href="index.html">Carbon-Emission-Footprint</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="sign-in.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sign In
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="loginA.php")>Admin</a></li>
                  <li><a class="dropdown-item" href="login.php">User</a></li>
                </ul>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="offset.html">offset</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.html">Contact Us</a>
              </li>
            </ul>
            <a class="navbar-brand" href="profile.html">
              <img src="photo/img_avatar3.png" alt="Logo" style="width:40px;" class="rounded-pill">
            </a>
          </div>
        </div>
      </nav>
    </header>
  <div class="box">
  <h2 class="title-text">Calculate your emissions made in a year</h2>
  <form id="calcForm">
    <p>Please enter your organization's name</p>
    <div class="num-counter">
      <input type="text" name="c_name" placeholder="Company's Name" />
      Ltd.
    </div>
    <br />
    <p>Please enter the year</p>
    <div class="num-counter">
      <input type="number" name="year" max="2024" value="2024" min="1" step="1.0" />
      year's
    </div>
    <p>For how many hours were machinery in your industry operated?</p>
    <div class="num-counter">
      <input type="number" name="hour" id="num-hours" value="1" min="1" />
      hour(s)
    </div>
    <br />
    <p>How many kilograms of fossil fuel were consumed for various manufacturing processes?</p>
    <div class="num-counter">
      <input type="number" name="kilograms" id="num-fuel" value="1" min="1" step="1.0" />
      kilograms
    </div>
    <br />
    <p>How many kilometers of vehicles were traveled pertaining to industrial works?</p>
    <div class="num-counter">
      <input type="number" name="kilometres" id="num-km" value="1" min="1" />
      kilometers
    </div>
    <br />
    <input type="button" id="push" value="Calculate" onclick="onButtonClick()" />
  </form>
</div>

  <div class="box">
    <h2 class="title-text">Results</h2>
    <p>
      The results provided by this application are obtained assuming average data. The results shown may be the near approximation.
    </p>
    <div class="row" id="results"></div>
  </div>
  <footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary footer"> <div class="container py-4 py-md-2 px-4 px-md-3 text-body-secondary">
      <div class="row">
        <div class="col-lg-3">
          <img src="photo/favicon.png" alt="Logo" style="width:100px;margin-left:10px;" class="rounded-pill">
          <div class="container" style="text-align: center;margin-top: 12px;font-size:large;">
            <b>Carbon-Emission-Footprint</b>
          </div>
        </div>
        <div class="col-6 col-lg-6 offset-lg-1 ">
          <div class="container" style="text-align: center;margin-bottom: 20px;font-size:large;">
            <b>Connect With Us:</b>
          </div>
          <div class="container" style="text-align: center;">
            <div class="connect-space">
              <a href="https://www.linkedin.com" target="_blank" rel="noreferrer" class=""><svg width="50" height="50" viewBox="0 0 128 128" fill="#23242E" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M64 4C97.1371 4 124 30.8629 124 64C124 97.1371 97.1371 124 64 124C30.8629 124 4 97.1371 4 64C4 30.8629 30.8629 4 64 4ZM128 64C128 28.6538 99.3462 0 64 0C28.6538 0 0 28.6538 0 64C0 99.3462 28.6538 128 64 128C99.3462 128 128 99.3462 128 64ZM42.9643 51.1633V102H27.1875V51.1633H42.9643ZM44.1518 35.0112C44.1518 40.1119 40.0804 44.3624 34.9911 44.3624C30.0714 44.3624 26 40.1119 26 35.0112C26 30.0805 30.0714 26 34.9911 26C40.0804 26 44.1518 30.0805 44.1518 35.0112ZM102 102H101.83H86.2232V77.3468C86.2232 71.396 86.0536 63.915 77.9107 63.915C69.7679 63.915 68.5804 70.2058 68.5804 76.8367V102H52.8036V51.1633H67.9018V58.1342H68.0714C70.2768 54.2237 75.3661 49.9732 83 49.9732C98.9464 49.9732 102 60.5145 102 74.1163V102Z"></path>
                </svg>
              </a>
            </div>
          <div class="connect-space">
                <a href="https://www.instagram.com" target="_blank" rel="noreferrer" class=""><svg width="50" height="50" viewBox="0 0 128 128" fill="#23242E" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M64 4C97.1371 4 124 30.8629 124 64C124 97.1371 97.1371 124 64 124C30.8629 124 4 97.1371 4 64C4 30.8629 30.8629 4 64 4ZM128 64C128 28.6538 99.3462 0 64 0C28.6538 0 0 28.6538 0 64C0 99.3462 28.6538 128 64 128C99.3462 128 128 99.3462 128 64ZM44.5759 63.9152C44.5759 53.2277 53.2277 44.4062 64.0848 44.4062C74.7723 44.4062 83.5938 53.2277 83.5938 63.9152C83.5938 74.7723 74.7723 83.4241 64.0848 83.4241C53.2277 83.4241 44.5759 74.7723 44.5759 63.9152ZM51.3616 63.9152C51.3616 71.0402 57.1295 76.6384 64.0848 76.6384C71.0402 76.6384 76.6384 71.0402 76.6384 63.9152C76.6384 56.9598 71.0402 51.3616 64.0848 51.3616C56.9598 51.3616 51.3616 56.9598 51.3616 63.9152ZM84.2723 39.1473C86.817 39.1473 88.8527 41.183 88.8527 43.7277C88.8527 46.2723 86.817 48.308 84.2723 48.308C81.7277 48.308 79.692 46.2723 79.692 43.7277C79.692 41.183 81.7277 39.1473 84.2723 39.1473ZM95.6384 32.3616C100.049 36.7723 101.406 42.2009 101.746 48.308C102.085 54.5848 102.085 73.4152 101.746 79.692C101.406 85.7991 100.049 91.058 95.6384 95.6384C91.2277 100.049 85.7991 101.406 79.692 101.746C73.4152 102.085 54.5848 102.085 48.308 101.746C42.2009 101.406 36.942 100.049 32.3616 95.6384C27.9509 91.058 26.5938 85.7991 26.2545 79.692C25.9152 73.4152 25.9152 54.5848 26.2545 48.308C26.5938 42.2009 27.9509 36.7723 32.3616 32.3616C36.942 27.9509 42.2009 26.5938 48.308 26.2545C54.5848 25.9152 73.4152 25.9152 79.692 26.2545C85.7991 26.5938 91.2277 27.9509 95.6384 32.3616ZM86.4777 93.6027C89.7009 92.2455 92.4152 89.7009 93.6027 86.308C95.3325 82.1275 95.225 72.9247 95.1536 66.8186C95.141 65.7391 95.1295 64.7563 95.1295 63.9152C95.1295 63.1049 95.1408 62.1511 95.1533 61.0976C95.2247 55.0929 95.3345 45.852 93.6027 41.5223C92.2455 38.2991 89.7009 35.5848 86.4777 34.3973C82.148 32.6654 72.9071 32.7752 66.9024 32.8466C65.8489 32.8591 64.895 32.8705 64.0848 32.8705C63.2437 32.8705 62.2609 32.859 61.1813 32.8464C55.0753 32.775 45.8724 32.6674 41.692 34.3973C38.2991 35.7545 35.7545 38.2991 34.3973 41.5223C32.6654 45.852 32.7752 55.0929 32.8466 61.0976C32.8591 62.1511 32.8705 63.1049 32.8705 63.9152C32.8705 64.7563 32.859 65.7391 32.8464 66.8186C32.775 72.9247 32.6674 82.1275 34.3973 86.308C35.7545 89.7009 38.2991 92.2455 41.692 93.6027C45.8724 95.3325 55.0753 95.225 61.1813 95.1536C62.2609 95.141 63.2437 95.1295 64.0848 95.1295C64.895 95.1295 65.8489 95.1408 66.9024 95.1533C72.907 95.2247 82.148 95.3345 86.4777 93.6027Z"></path>
                </svg>
                </a>
          </div>
          <div class="connect-space">
                <a href="https://twitter.com" target="_blank" rel="noreferrer" class=""><svg width="50" height="50" viewBox="0 0 128 128" fill="#23242E" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M64 4C97.1371 4 124 30.8629 124 64C124 97.1371 97.1371 124 64 124C30.8629 124 4 97.1371 4 64C4 30.8629 30.8629 4 64 4ZM128 64C128 28.6538 99.3462 0 64 0C28.6538 0 0 28.6538 0 64C0 99.3462 28.6538 128 64 128C99.3462 128 128 99.3462 128 64ZM95.032 50.05C95.032 71.3999 78.947 96 49.5483 96C40.4911 96 32.0775 93.3499 25 88.7502C26.2869 88.9 27.5241 88.9501 28.8604 88.9501C36.3336 88.9501 43.2132 86.4001 48.707 82.0501C41.6791 81.9 35.7894 77.25 33.7601 70.85C34.75 71 35.7398 71.0999 36.7793 71.0999C38.2146 71.0999 39.6499 70.8999 40.9861 70.55C33.6612 69.0498 28.1674 62.55 28.1674 54.7V54.5001C30.2954 55.7001 32.7703 56.4501 35.3932 56.5499C31.0874 53.6499 28.2665 48.6999 28.2665 43.0999C28.2665 40.0999 29.0581 37.3499 30.4441 34.9499C38.3133 44.7499 50.1422 51.1498 63.4059 51.8499C63.1586 50.6499 63.0101 49.4 63.0101 48.15C63.0101 39.25 70.137 32 78.9961 32C83.599 32 87.7562 33.95 90.6765 37.1C94.2893 36.4 97.7537 35.05 100.822 33.2C99.6341 36.9501 97.1103 40.1001 93.7945 42.1C97.0116 41.7501 100.13 40.8499 103 39.6C100.823 42.7999 98.1004 45.6499 94.9824 47.9499C95.032 48.6499 95.032 49.3501 95.032 50.05Z"></path>
                </svg>
                </a>
          </div>
        <div class="connect-space">
                <a href="https://www.facebook.com" target="_blank" rel="noreferrer" class=""><svg width="50" height="50" viewBox="0 0 128 128" fill="#23242E" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M64 4C97.1371 4 124 30.8629 124 64C124 94.0568 101.899 118.952 73.0618 123.32V83.2163H88.3345L91.1855 64.6194H73.0618V52.491C73.0618 47.2354 75.5055 42.384 83.6509 42.384H92V26.415C92 26.415 84.4655 25 77.3382 25C62.4727 25 52.6982 34.0963 52.6982 50.2675V64.6194H36V83.2163H52.6982V122.937C24.9642 117.651 4 93.2737 4 64C4 30.8629 30.8629 4 64 4ZM63.1728 127.995C28.2078 127.552 0 99.0701 0 64C0 28.6538 28.6538 0 64 0C99.3462 0 128 28.6538 128 64C128 98.9234 100.028 127.314 65.2655 127.988C64.8447 127.996 64.4228 128 64 128C63.7239 128 63.4481 127.998 63.1728 127.995Z"></path>
                </svg>
                </a>
           </div>
          </div>
        </div>
      </div>
    </div>
    
  </footer>
  <?php
  include 'connect_calc.php';

?>
  <script src="./main.js"></script>
  
</body>
</html>
