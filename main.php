<?php
include('./includes/header.php');
// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');


session_start();


?>
  
    <!--Hero Section  -->
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img
            src="./img/hero_section.jpg"
            class="d-block mx-lg-auto img-fluid"
            alt="Bootstrap Themes"
            width="700"
            height="500"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
            Responsive left-aligned hero with image
          </h1>
          <p class="lead">
            Quickly design and customize responsive mobile-first sites with
            Bootstrap, the world’s most popular front-end open source toolkit,
            featuring Sass variables and mixins, responsive grid system,
            extensive prebuilt components, and powerful JavaScript plugins.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
              Primary
            </button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">
              Default
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Recomended-->
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom">Recomended to you</h2>
      <div
        class="card_container row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5"
      >
        <!-- Side Buttons -->
        <!-- <ul
          class="controls"
          id="sliderFirstControls"
          aria-label="Carousel Navigation"
          tabindex="0"
        >
          <li
            class="prev"
            aria-controls="tns1"
            tabindex="-1"
            data-controls="prev"
          >
            <i class="fa-solid fa-chevron-left"></i>
          </li>
          <li
            class="next"
            aria-controls="tns1"
            tabindex="-1"
            data-controls="next"
          >
            <i class="fe fe-chevron-right"></i>
            <i class="fa-solid fa-chevron-right"></i>
          </li>
        </ul> -->
        <!-- card -->
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <!-- <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="./img/stack_1.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>
            </ul>
          </div> -->
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Trending -->
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom">Trending</h2>
      <div
        class="card_container row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5"
      >
        <!-- Side Buttons -->
        <!-- <ul
        class="controls"
        id="sliderFirstControls"
        aria-label="Carousel Navigation"
        tabindex="0"
      >
        <li
          class="prev"
          aria-controls="tns1"
          tabindex="-1"
          data-controls="prev"
        >
          <i class="fa-solid fa-chevron-left"></i>
        </li>
        <li
          class="next"
          aria-controls="tns1"
          tabindex="-1"
          data-controls="next"
        >
          <i class="fe fe-chevron-right"></i>
          <i class="fa-solid fa-chevron-right"></i>
        </li>
      </ul> -->
        <!-- card -->
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">Heading</h2>
              <p>
                Some representative placeholder content for the three columns of
                text below the carousel. This is the first column.
              </p>
              <p><a class="btn btn-secondary" href="#">View details »</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
<?php
    include('./includes/footer.php');
?>
