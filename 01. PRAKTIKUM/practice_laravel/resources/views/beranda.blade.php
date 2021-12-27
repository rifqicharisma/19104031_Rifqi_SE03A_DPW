<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Beranda</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      .header-2-3 .modal-backdrop.show {
        background-color: #707092;
        opacity: 0.6;
      }

      .header-2-3 .modal-item.modal {
        top: 2rem;
      }

      .header-2-3 .navbar,
      .header-2-3 .hero {
        padding: 3rem 2rem;
      }

      .header-2-3 .navbar-dark .navbar-nav .nav-link {
        font: 300 18px/1.5rem Poppins, sans-serif;
        color: #707092;
        transition: 0.3s;
      }

      .header-2-3 .navbar-dark .navbar-nav .nav-link:hover {
        font: 600 18px/1.5rem Poppins, sans-serif;
        color: #E7E7E8;
        transition: 0.3s;
      }

      .header-2-3 .navbar-dark .navbar-nav .active>.nav-link,
      .header-2-3 .navbar-dark .navbar-nav .nav-link.active,
      .header-2-3 .navbar-dark .navbar-nav .nav-link.show,
      .header-2-3 .navbar-dark .navbar-nav .show>.nav-link {
        font-weight: 600;
        transition: 0.3s;
      }

      .header-2-3 .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-2-3 .btn:focus,
      .header-2-3 .btn:active {
        outline: none !important;
      }

      .header-2-3 .btn-fill {
        font: 600 18px / normal Poppins, sans-serif;
        background-color: #524EEE;
        border-radius: 12px;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-3 .btn-fill:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-3 .btn-no-fill {
        font: 300 18px/1.75rem Poppins, sans-serif;
        color: #E7E7E8;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-3 .btn-no-fill:hover {
        color: #E7E7E8;
      }

      .header-2-3 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
        transition: 0.3s;
      }

      .header-2-3 .responsive li a {
        padding: 1rem;
        transition: 0.3s;
      }

      .header-2-3 .left-column {
        margin-bottom: 2.75rem;
        width: 100%;
      }

      .header-2-3 .text-caption {
        font: 600 0.875rem/1.625 Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #FB6262;
      }

      .header-2-3 .title-text-big {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #CBCBD2;
      }

      .header-2-3 .btn-try {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: #524EEE;
        transition: 0.3s;
      }

      .header-2-3 .btn-try:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-3 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        border: 1px solid #707092;
        color: #707092;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: transparent;
        transition: 0.3s;
      }

      .header-2-3 .btn-outline:hover {
        border: 1px solid #FFFFFF;
        color: #FFFFFF;
        transition: 0.3s;
      }

      .header-2-3 .btn-outline:hover div path {
        fill: #FFFFFF;
        transition: 0.3s;
      }

      .header-2-3 .right-column {
        width: 100%;
      }

      @media (min-width: 576px) {
        .header-2-3 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-2-3 .navbar {
          padding: 3rem 2rem;
        }

        .header-2-3 .hero {
          padding: 3rem 2rem 5rem;
        }

        .header-2-3 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-2-3 .navbar {
          padding: 3rem 4rem;
        }

        .header-2-3 .hero {
          padding: 3rem 4rem 5rem;
        }

        .header-2-3 .left-column {
          margin-bottom: 3rem;
        }
      }

      @media (min-width: 992px) {
        .header-2-3 .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 1.25rem;
          padding-left: 1.25rem;
        }

        .header-2-3 .navbar {
          padding: 3rem 6rem;
        }

        .header-2-3 .hero {
          padding: 3rem 6rem 5rem;
        }

        .header-2-3 .left-column {
          width: 50%;
          margin-bottom: 0;
        }

        .header-2-3 .title-text-big {
          font-size: 3.75rem;
          line-height: 1.2;
        }

        .header-2-3 .right-column {
          width: 50%;
        }
      }
    </style>
    <div class="container-xxl mx-auto p-0  position-relative header-2-3" style="font-family: 'Poppins', sans-serif;">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#">
          <img style="margin-right:0.75rem"
            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-3.png" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content border-0" style="background-color: #141432;">
              <div class="modal-header border-0" style="padding:	2rem; padding-bottom: 0;">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top:0.5rem"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-3.png"
                    alt="">
                </a>
                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #E7E7E8;">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Feature</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding:	2rem; padding-top: 0.75rem">
                <button class="btn btn-default btn-no-fill">Log In</button>
                <button class="btn btn-fill border-0 text-white">Try Now</button>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color: #E7E7E8;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feature</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <div class="gap-3">
            <button class="btn btn-default btn-no-fill">Log In</button>
            <button class="btn btn-fill text-white border-0">Try Now</button>
          </div>
        </div>
      </nav>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <p class="text-caption">FREE 30 DAY TRIAL</p>
            <h1 class="title-text-big">The best way<br class=" d-lg-block d-none"> to organize your online learning</h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <button class="btn d-inline-flex mb-md-0 btn-try text-white border-0">Try it free</button>
              <button class="btn btn-outline">
                <div class="d-flex align-items-center">
                  <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.9293 8L6.66668 5.158V10.842L10.9293 8ZM12.9173 8.27734L5.85134 12.988C5.80115 13.0214 5.74283 13.0406 5.6826 13.0435C5.62238 13.0463 5.5625 13.0328 5.50934 13.0044C5.45619 12.9759 5.41175 12.9336 5.38075 12.8818C5.34976 12.8301 5.33337 12.771 5.33334 12.7107V3.28934C5.33337 3.22904 5.34976 3.16989 5.38075 3.11817C5.41175 3.06645 5.45619 3.0241 5.50934 2.99564C5.5625 2.96719 5.62238 2.95368 5.6826 2.95656C5.74283 2.95944 5.80115 2.9786 5.85134 3.012L12.9173 7.72267C12.963 7.75311 13.0004 7.79435 13.0263 7.84273C13.0522 7.89111 13.0658 7.94513 13.0658 8C13.0658 8.05488 13.0522 8.1089 13.0263 8.15728C13.0004 8.20566 12.963 8.2469 12.9173 8.27734Z"
                      fill="#707092" />
                  </svg>
                  Watch the video
                </div>
              </button>
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png" alt="">
          </div>

        </div>
      </div>
    </div>


  </section><section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432; ">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-2-3 .btn:focus,
      .content-2-3 .btn:active {
        outline: none !important;
      }

      .content-2-3 .title-text {
        padding-top: 5rem;
        margin-bottom: 3rem;
      }

      .content-2-3 .text-title {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
      }

      .content-2-3 .text-caption {
        color: #707092;
        font-weight: 300;
      }

      .content-2-3 .column {
        padding: 2rem 2.25rem;
      }

      .content-2-3 .icon {
        margin-bottom: 1.5rem;
      }

      .content-2-3 .icon-title {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
      }

      .content-2-3 .icon-caption {
        font: 400 1rem/1.625 Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #707092;
      }

      .content-2-3 .card {
        padding: 1.75rem;
        background-color: #292952;
        border-radius: 0.75rem;
        border: 1px solid #4c4c6d;
      }

      .content-2-3 .card-block {
        padding: 1rem 1rem 5rem;
      }

      .content-2-3 .card-title {
        font: 600 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
      }

      .content-2-3 .card-caption {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        color: #707092;
        letter-spacing: 0.025em;
        margin-bottom: 0;
      }

      .content-2-3 .btn-card {
        font: 700 1rem/1.5rem Poppins, sans-serif;
        background-color: #524eee;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
        margin-bottom: 1.25rem;
        border: none;
      }

      .content-2-3 .btn-card:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .content-2-3 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        color: #57578e;
        border: 1px solid #57578e;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
      }

      .content-2-3 .btn-outline:hover {
        border: 1px solid #ffffff;
        color: #ffffff;
      }

      .content-2-3 .card-text {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }

      .content-2-3 .grid-padding {
        padding: 0rem 1rem 3rem;
      }

      @media (min-width: 576px) {
        .content-2-3 .grid-padding {
          padding: 0rem 2rem 3rem;
        }

        .content-2-3 .card-block {
          padding: 3rem 2rem 5rem;
        }
      }

      @media (min-width: 768px) {
        .content-2-3 .grid-padding {
          padding: 0rem 4rem 3rem;
        }

        .content-2-3 .card-block {
          padding: 3rem 4rem 5rem;
        }
      }

      @media (min-width: 992px) {
        .content-2-3 .grid-padding {
          padding: 1rem 6rem 3rem;
        }

        .content-2-3 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-3 .column {
          padding: 0rem 2.25rem;
        }
      }

      @media (min-width: 1200px) {
        .content-2-3 .grid-padding {
          padding: 1rem 10rem 3rem;
        }

        .content-2-3 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-3 .card-btn-space {
          margin-top: 15px;
          margin-bottom: 15px;
        }

        .content-2-3 .btn-outline,
        .content-2-3 .btn-card {
          width: 95%;
          float: right;
        }
      }

      @media (max-width: 980px) {
        .content-2-3 .card-btn-space {
          width: 100%;
        }
      }
    </style>
    <div class="content-2-3 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title text-white">3 Keys Benefit</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
          You can easily manage your business with a powerful tools
        </p>
      </div>

      <div class="grid-padding text-center">
        <div class="row">
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-8.png"
                alt="" />
            </div>
            <h3 class="icon-title text-white">Easy to Operate</h3>
            <p class="icon-caption">
              This can easily help you to<br />
              grow up your business fast
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-9.png"
                alt="" />
            </div>
            <h3 class="icon-title text-white">Real-Time Analytic</h3>
            <p class="icon-caption">
              With real-time analytics, you<br />
              can check data in real time
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-10.png"
                alt="" />
            </div>
            <h3 class="icon-title text-white">Very Full Secured</h3>
            <p class="icon-caption">
              With real-time analytics, we<br />
              will guarantee your data
            </p>
          </div>
        </div>
      </div>

      <div class="card-block">
        <div class="card">
          <div class="d-flex flex-lg-row flex-column align-items-center">
            <div class="me-lg-3">
              <img
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                alt="" />
            </div>
            <div class="flex-grow-1 text-lg-start text-center card-text">
              <h3 class="card-title text-white">
                Fast Business Management in 30 minutes
              </h3>
              <p class="card-caption">
                Our tools for business analysis helps an organization
                understand<br class="d-none d-lg-block" />
                market or business development.
              </p>
            </div>
            <div class="card-btn-space">
              <button class="btn btn-card text-white">Buy Now</button>
              <button class="btn btn-outline">Demo Version</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>
