@extends("layouts.app")
@section("content")
    <div class="container-fluid py-5" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
      <div class="container d-flex justify-content-between align-items-center  pb-5">
            <div>
              <h1 class="mb-3">Technology School</h1>
                <h3>Most Popular Programming Language Teach</h3>
                <p class="d-inline d-md-none">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque optio itaque consequatur officiis numquam odio sint illo, quis quos alias tempore quo culpa facere vitae ullam officia nemo necessitatibus voluptate. Omnis, tempore quis similique nisi possimus, sunt repellendus nesciunt itaque vero qui illum, necessitatibus inventore a eum temporibus eius ipsam eaque quisquam? Obcaecati aperiam officia consequatur nihil, corporis necessitatibus delectus excepturi, hic beatae ex similique perferendis reiciendis dolorum impedit. Quas, sint sunt asperiores praesentium ducimus doloribus debitis cum ipsum reiciendis vero ullam nesciunt facere rem, magnam, dolore nisi harum fugiat architecto minus maiores ipsa omnis? Esse quis dignissimos vel illum!</p>
            </div>
              <img src="https://media.istockphoto.com/id/1060864002/photo/rear-view-of-friends-with-rucksacks-walking-near-travel-bus-at-street.jpg?s=612x612&w=0&k=20&c=O2kIqu8hxHQMCXcjbBRFwu8d8Jjdfd1QnIwxU44Ovss=" alt="photo" class="d-none d-md-inline" style="width: 35rem; border-right: 15px solid rgb(186, 85, 211); border-bottom: 15px solid rgb(186, 85, 211); border-radius: 30px">
    </div>
    </div>
    <div class="container-fluid">
      <div class="container">
        <div class="alert text-light text-center dropdown" style="background-color: rgba(0, 0, 0, 0.9); position: relative; top: -30px;">
          <div class="float-start" style="width: 50px; height: 50px; border-radius: 50px; background: linear-gradient(0deg, rgb(247, 218, 240), rgb(183, 215, 240)) ; position: relative; top: -13px;"></div>
          <i class="fas fa-users ms-3 float-start"></i>
          <a href="#" class="float-start dropdown-toggle text-white" data-bs-toggle="dropdown">
          </a>
          <div class="dropdown-menu">
              <a href="{{url("/students")}}" class="dropdown-item">Students</a>
              <div class="dropdown-divider"></div>
            <a href="{{url("/teachers")}}" class="dropdown-item">Teachers</a>
          </div>
          Top 8 Languages Teaching
          <a href="#" class="float-end dropdown-toggle text-white" data-bs-toggle="dropdown">
          </a>
          <i class="fa-brands fa-alipay float-end"></i>
          <div class="dropdown-menu">
              <a href="{{url("/enrollments")}}" class="dropdown-item">Enrollments</a>
              <div class="dropdown-divider"></div>
            <a href="{{url("/payments")}}" class="dropdown-item">Payments</a>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <p class="d-none d-md-inline d-lg-inline">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime amet aperiam, repellendus ex necessitatibus dolore nemo, deleniti unde velit natus pariatur provident, ea voluptas praesentium! Dignissimos, eveniet! Recusandae enim quas sit quis iure sunt earum quod, facilis distinctio non accusamus cumque, ex doloremque natus perferendis velit corrupti eaque nostrum, et aperiam dolore. Ipsum, nam quaerat. Neque dolorum corrupti error minus eius labore praesentium nesciunt quia at officiis eligendi fugiat reprehenderit aperiam illum minima, nihil soluta totam voluptas odio earum vel debitis ratione unde? Laborum non odit unde sunt nostrum debitis molestiae harum iste facere laboriosam! Error voluptate dolor magni voluptatem!</p>
        <div class="row mt-5">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card mb-3" style="width: 100%; border-radius: 8px; background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
                <img src="https://media.istockphoto.com/id/1338737959/photo/little-kids-schoolchildren-pupils-students-running-hurrying-to-the-school-building-for.webp?a=1&b=1&s=612x612&w=0&k=20&c=wUFTo57NyZx-svAoOUkLSnTRbAqobLR9ufAbBbOGBzE=" alt="photo" style="border-top-left-radius: 5px; border-top-right-radius: 8px">
                <div class="card-body">
                  <h5 class="card-title">HTML/CSS Course</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{url("/courses")}}" class="btn text-light" style="background-color:orangered">Detail</a>
                </div>
              </div>
              </div>

            <div class="col-12 col-md-6 col-lg-3">
                  <div class="card mb-3" style="width: 100%; border-radius: 8px; background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
                    <img src="https://media.istockphoto.com/id/1338737959/photo/little-kids-schoolchildren-pupils-students-running-hurrying-to-the-school-building-for.webp?a=1&b=1&s=612x612&w=0&k=20&c=wUFTo57NyZx-svAoOUkLSnTRbAqobLR9ufAbBbOGBzE=" alt="photo" style="border-top-left-radius: 5px; border-top-right-radius: 8px">
                    <div class="card-body">
                      <h5 class="card-title">JavaScript Course</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="{{url("/courses")}}" class="btn text-white"  style="background-color:orangered">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card mb-3" style="width: 100%; border-radius: 8px; background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
                <img src="https://media.istockphoto.com/id/1338737959/photo/little-kids-schoolchildren-pupils-students-running-hurrying-to-the-school-building-for.webp?a=1&b=1&s=612x612&w=0&k=20&c=wUFTo57NyZx-svAoOUkLSnTRbAqobLR9ufAbBbOGBzE=" alt="photo" style="border-top-left-radius: 5px; border-top-right-radius: 8px">
                <div class="card-body">
                  <h5 class="card-title">PHP Course</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{url("/courses")}}" class="btn text-white"  style="background-color:orangered">Detail</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card mb-3" style="width: 100%; border-radius: 8px; background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
                <img src="https://media.istockphoto.com/id/1338737959/photo/little-kids-schoolchildren-pupils-students-running-hurrying-to-the-school-building-for.webp?a=1&b=1&s=612x612&w=0&k=20&c=wUFTo57NyZx-svAoOUkLSnTRbAqobLR9ufAbBbOGBzE=" alt="photo" style="border-top-left-radius: 5px; border-top-right-radius: 8px">
                <div class="card-body">
                  <h5 class="card-title">Java Course</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{url("/courses")}}" class="btn text-white"  style="background-color:orangered">Detail</a>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
      <div class="row mt-5">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-3" style="width: 100%; border-radius: 8px; background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
              <img src="https://media.istockphoto.com/id/2050780380/photo/hispanic-programmers-collaborating-on-software-development-in-a-modern-office-setting.webp?a=1&b=1&s=612x612&w=0&k=20&c=YiY0YH-8XMysOS3TyLM3wxUOEUd1lPnAtybUtJGr3lg=" alt="photo" style="border-top-left-radius: 5px; border-top-right-radius: 8px">
              <div class="card-body">
                <h5 class="card-title">Rust Course</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url("/courses")}}" class="btn text-light" style="background-color:mediumorchid">Detail</a>
              </div>
            </div>
            </div>

          <div class="col-12 col-md-6 col-lg-3">
                <div class="card mb-3" style="width: 100%; border-radius: 8px; background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
                  <img src="https://media.istockphoto.com/id/2050780380/photo/hispanic-programmers-collaborating-on-software-development-in-a-modern-office-setting.webp?a=1&b=1&s=612x612&w=0&k=20&c=YiY0YH-8XMysOS3TyLM3wxUOEUd1lPnAtybUtJGr3lg=" alt="photo" style="border-top-left-radius: 5px; border-top-right-radius: 8px">
                  <div class="card-body">
                    <h5 class="card-title"> Go Course</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{url("/courses")}}" class="btn text-white"  style="background-color:mediumorchid">Detail</a>
                  </div>
                </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-3" style="width: 100%; border-radius: 8px; background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
              <img src="https://media.istockphoto.com/id/2050780380/photo/hispanic-programmers-collaborating-on-software-development-in-a-modern-office-setting.webp?a=1&b=1&s=612x612&w=0&k=20&c=YiY0YH-8XMysOS3TyLM3wxUOEUd1lPnAtybUtJGr3lg=" alt="photo" style="border-top-left-radius: 5px; border-top-right-radius: 8px">
              <div class="card-body">
                <h5 class="card-title">Ruby Course</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url("/courses")}}" class="btn text-white"  style="background-color:mediumorchid">Detail</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-3" style="width: 100%; border-radius: 8px; background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
              <img src="https://media.istockphoto.com/id/2050780380/photo/hispanic-programmers-collaborating-on-software-development-in-a-modern-office-setting.webp?a=1&b=1&s=612x612&w=0&k=20&c=YiY0YH-8XMysOS3TyLM3wxUOEUd1lPnAtybUtJGr3lg=" alt="photo" style="border-top-left-radius: 5px; border-top-right-radius: 8px">
              <div class="card-body">
                <h5 class="card-title">C# Course</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url("/courses")}}" class="btn text-white"  style="background-color:mediumorchid">Detail</a>
              </div>
            </div>
          </div>
      </div>
      <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi accusamus tenetur illo atque dolores magni voluptas ab laboriosam consectetur, nisi itaque quod dicta similique. Facere dolores enim perspiciatis facilis rem, incidunt repellat eligendi magnam quaerat beatae fuga mollitia molestias porro cum temporibus dolorum aperiam quos cumque alias esse ab animi veritatis ipsa optio! Dolorem nam nihil saepe soluta eligendi tempora, nobis corporis debitis ad tempore voluptate quos enim fugit voluptates aspernatur! Officiis dolor aliquid voluptatem delectus quis! Velit animi quam totam distinctio ipsam voluptatum porro in, illo error sequi provident suscipit natus quos adipisci, esse id ex rerum minus optio.</p>
      <footer class="mt-4 py-4 text-center text-muted border-top">
          <small>&copy; Copyright 2025</small>
      </footer>
  </div>
    </div>
@endsection