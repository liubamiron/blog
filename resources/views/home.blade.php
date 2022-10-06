

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   

    <link rel="stylesheet" href="/app.css">
{{-- <script src="/app.js"></script> --}}
  </head>
  
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Navbar</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">
          
        <div class="row">
            <div class="col-sm-7"></div>
          
        <div class="col-sm-5">  
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="/" role="button">
                Home
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/despre_noi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Despre Noi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/istoria">Istoria</a></li>
                  <li><a class="dropdown-item" href="/organigrama">Organigrama</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/rapoarte">Rapoarte de activitate</a></li>
                  <li><a class="dropdown-item" href="/galeria">Galeria foto</a></li>
                </ul>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/servicii" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicii
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/ingrijiri-comunitare">Ingrijiri comunitare</a></li>
                  <li><a class="dropdown-item" href="/ingrijiri-paliative">Ingrijiri paliative</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/informatii">Informatii pentru pacienti</a></li>
                  <li><a class="dropdown-item" href="/servicii-prestate">Calitatea serviciilor prestate</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Legislatie
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Donatii
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Parteneriat
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Colaborare</a></li>
                 
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Voluntariat</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contacte
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  RM
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">RU</a></li>
                </ul>
              </li>

          </ul>
        </div>

          </div>
          </div>
        </nav>
    </div>
  
        <body> 
            <div class="container">

                <div class="row">                 
                    <img src="https://www.freewebheaders.com/wp-content/gallery/healthcare_1/medical-doctor-stethoscope-and-office-sign-web-header.jpg" class="img-fluid" alt="medical care" width="804" height="236">  
                </div>

                <div class="row">
                    <h2 class="text-center">Serviciile noastre</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia rerum excepturi nisi minus, quae eligendi. Sunt cum aut consectetur odio nihil recusandae? Delectus voluptas esse, ipsa repellat ex optio exercitationem!</p> 
                {{-- <div class="row">
                <img src="{{ asset('medblog_1.avif') }}" class="col rounded" alt="Paris" width="100%" height="236"> 
                <img src="{{ asset('medblog_2.avif') }}" class="col rounded" alt="Paris" width="100%" height="236"> 
                <img src="{{ asset('medblog_2.avif') }}" class="col rounded" alt="Paris" width="100%" height="236"> 
                </div> --}}

                
                
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                          <div class="card shadow-sm">
                            <img src="{{ asset('medblog_1.avif') }}" class="col rounded" alt="Paris" width="100%" height="236"> 

                
                            <div class="card-body">
                              <p class="card-text">
                                <h5><a href = "#">Îngrijiri comunitare la domiciliu</a></h5>
                                <hr>
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                            <img src="{{ asset('old_pacient.avif') }}" class="col rounded" alt="Paris" width="100%" height="236">                
                            <div class="card-body">
                              <p class="card-text">
                                <h5><a href = "#">Ingrijiri paliative la domiciliu</a></h5>
                                <hr>
                                Lorem ipsum dolor sit amet voluptatibus sint et dolores laboriosam expedita magni suscipit laborum amet! Ea, quaerat ducimus.
                                </p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                            <img src="{{ asset('medblog_4.avif') }}" class="col rounded" alt="Paris" width="100%" height="236">
                            <div class="card-body">
                              <p class="card-text">
                                <h5><a href = "#">Pentru pacienti</a></h5>
                                <hr>
                                Tempore doloribus provident aut aliquam nihil quam, ndus ipsam, maxime incidunt culpa natus ipsa voluptates blanditiis odio.
                              </p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>      
            </div>

            <div class="row indent_sponsors_label">
                <div class="col ">

                    <a href="http://vsa.cnam.gov.md/app/verify/">
                        <img src="{{ asset('cnam.jpeg') }}"  alt="cnam">
                    </a>                        
                </div>

                <div class="col ">

                    <a href="http://vsa.cnam.gov.md/app/verify/">
                        <img src="{{ asset('alogen.jpeg') }}"  alt="cnam">
                    </a>                        
                </div>

                <div class="col ">

                    <a href="http://vsa.cnam.gov.md/app/verify/">
                        <img src="{{ asset('balti.jpeg') }}"  alt="cnam">
                    </a>                        
                </div>

                <div class="col ">

                    <a href="http://vsa.cnam.gov.md/app/verify/">
                        <img src="{{ asset('col-med.jpeg') }}"  alt="cnam">
                    </a>                        
                </div>

                <div class="col ">

                    <a href="http://vsa.cnam.gov.md/app/verify/">
                        <img src="{{ asset('Emblema_Guvernului_Republicii_Moldova-150x150.jpeg') }}"  alt="cnam">
                    </a>                        
                </div>

              </div>


              <iframe loading="lazy" src="https://www.google.com/maps/d/embed?mid=1GAEjkQrfH5f9--LrSpLi79urjkzDmNss" width="100%" height="480"></iframe>

            
  </body>
</html>