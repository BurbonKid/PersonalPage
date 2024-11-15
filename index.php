<?php require_once('./layout/header.php'); ?>

        <section class="container">
            <div class="row vh-100">
                <div class="col-12 my-auto">
                    <div class="row text-center">
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h1 class="display-2 text-primary"><span class="ion ion-ios-snow-outline"></span></h1>
                                    <h4 class="card-title text-primary">Unique</h4>
                                    <p class="card-text">Don't like that typical Bootstrap look? Each theme has a custom look-and-feel, while maximizing use of Bootstrap without extensive additional CSS & JS.</p>
                                    <a href="#" class="btn btn-primary mt-auto">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h1 class="display-2 text-primary"><span class="ion ion-ios-tablet-portrait-outline"></span></h1>
                                    <h4 class="card-title text-primary">Responsive</h4>
                                    <p class="card-text">Based on mobile-first Bootstrap 4, all themes are 100% responsive and designed to look great on everything from smartphones to tablets to desktops..</p>
                                    <a href="#" class="btn btn-primary mt-auto">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <h1 class="display-2 text-primary"><span class="ion ion-ios-checkmark-circle-outline"></span></h1>
                                    <h4 class="card-title text-primary">Consistent</h4>
                                    <p class="card-text">Themes are crafted with care for design and performance. All themes are built on modern HTML5 & CSS3 standards to ensure consistency and cross-browser support.</p>
                                    <a href="#" class="btn btn-primary mt-auto">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <section id="buttons" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="pb-3">
                            <button type="button" class="btn btn-primary mr-1">Primary #FF550B</button>
                            <button type="button" class="btn btn-outline-primary">Outline</button>
                        </div>
                        <div class="pb-3">
                            <button type="button" class="btn btn-primary align-bottom btn-lg mr-1">Large</button>
                            <button type="button" class="btn btn-primary align-bottom mr-1">Normal</button>
                            <button type="button" class="btn btn-primary align-bottom btn-sm mr-1">Small</button>
                            <a href="#" class="text-primary">Text</a>
                        </div>
                    </div>
                    <div class="col-md d-none d-sm-block">
                        <h4>Code Explorer</h4>
                        <p>
                        Just hover over any of the Bootstrap 
                        components, and click the 
                        <span class="d-inline-block rounded border align-middle pb-1 px-1 small"><small>&lt;&gt;</small></span>
                        to view or copy the HTML markup for that element.
                        </p>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-auto col-3">
                        <button class="btn btn-outline-secondary">Secondary</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-outline-info">Info</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-outline-danger">Danger</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-outline-success">Success</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-outline-warning">Warning</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-outline-light">Light</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-outline-dark">Dark</button>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-auto col-3">
                        <button class="btn btn-secondary">Secondary</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-info">Info</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-danger">Danger</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-success">Success</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-warning">Warning</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-light">Light</button>
                    </div>
                    <div class="col-md-auto col-3">
                        <button class="btn btn-dark">Dark</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="navs" class="container pb-5">
            <div class="row">
                <div class="col-xl-9 pb-4">
                    <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-2">
                        <a class="navbar-brand" href="#">Light text</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarColor02">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="Current breakpoint tier">
                                        Tier     
                                        <span class="d-xl-inline d-none">XL</span>
                                        <span class="d-lg-inline d-xl-none d-none">LG</span>
                                        <span class="d-md-inline d-lg-none d-none">MD</span>
                                        <span class="d-sm-inline d-md-none d-none">SM</span>
                                        <span class="d-inline d-sm-none">XS</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <nav class="navbar navbar-expand-md navbar-light bg-primary mb-3">
                        <a class="navbar-brand" href="#">Dark text</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarColor03">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="card border-0">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab1" data-toggle="tab">Tab</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2" data-toggle="tab">Tab</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab3" data-toggle="tab">Tab</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#tab4" data-toggle="tab">Disabled</a>
                            </li>
                        </ul>
                        <div class="tab-content px-1 pt-3">
                            <div class="tab-pane active" id="tab1">
                                Select a palette, change the <span class="text-primary ">primary</span>, <span class="text-secondary ">secondary</span>, 
                                <span class="text-success ">success</span>, <span class="text-danger ">danger</span>, 
                                <span class="text-info ">info</span>, and <span class="text-warning ">warning</span> colors. 
                                Choose from various Google Fonts, and modify most of the Bootstrap SASS variables. Click to generate your completely custom 
                                Bootstrap theme.
                            </div>
                            <div class="tab-pane" id="tab2">
                                The whole idea is to make the Bootstrap customization process easier, and allow you to visualize changes along the way. 
                                For most users it's designed to be point-and-click, while advanced users can delve into the SASS as desired. It's a 4-step process.
                            </div>
                            <div class="tab-pane" id="tab3">3. Put some more content in your pane here.</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 pb-4">
                    <ul class="nav nav-pills flex-column mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <div class="btn-group mb-3 w-100">
                        <button type="button" class="btn btn-primary btn-block">Dropdown</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Link</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cards" class="container pb-5">
            <div class="d-flex my-3">
                <div class="jumbotron w-100 py-5 mx-auto">
                    <h1>Themestr.app</h1>
                    <h4>Theme Builder for Bootstrap</h4>
                    <p class="lead">
                        Rapidy build custom themes for Bootstrap, the world's most 
                        popular front-end component library for mobile-first, 
                        responsive Web apps. <a class="font-weight-bold" href="https://themestr.app">Themestr.app</a> is a customizer and theme creator for Bootstrap. 
                        Choose from a huge collection of color palettes, fonts and SASS variables. Prototype different styles, and 
                        easily generate CSS from SASS to give your projects a unique look-and-feel.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-primary h-100">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h4 class="card-title text-primary">Card Outline</h4>
                            <p class="card-text">Themestr.app makes it easy to customize this, and other free Bootstrap 4 themes for your downloading pleasure.</p>
                            <a href="#" class="btn btn-primary mt-auto">Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-primary h-100">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">Dis List Group</a>
                                <a href="#" class="list-group-item list-group-item-action">Custom Colors</a>
                                <a href="#" class="list-group-item list-group-item-action">Google Fonts</a>
                                <a href="#" class="list-group-item list-group-item-action disabled">Ionicons</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h4 class="card-title">Scrollspy</h4>
                            <p class="card-text">The top NavBar utilizes Bootstrap's Scrollspy component. You'll notice when you scroll the page the "active" nav section is highlighted.</p>
                            <a href="https://getbootstrap.com/docs/4.1/components/scrollspy/" class="btn btn-primary border-white mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="modals" class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="position-relative" style="z-index:1000">
                            <div id="myModal" class="modal d-block position-relative" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3>Modal</h3>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>This is a basic Bootstrap 4 modal. The modal also comes in a <a href="#modal-sm" data-toggle="modal">smaller</a> and <a href="#modal-lg" data-toggle="modal">larger</a> sizes.</p>
                                        <p>
                                            What will you put in your modal? Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                            in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="alert" aria-hidden="true">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9"></div>
            </div>
        </section>
        <section id="typography" class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h4><a target="_new" href="https://fonts.google.com/specimen/Comfortaa">Comfortaa</a></h4>
                </div>
                <div class="col-xl-4">
                    <h6>Heading 6</h6>
                    <h5>Heading 5</h5>
                    <h4>Heading 4</h4>
                    <h3 class="text-truncate">Heading 3</h3>
                    <h2 class="text-truncate">Heading 2</h2>
                    <h1 class="text-truncate">Heading 1</h1>
                    <p class="lead">Lead</p>
                    <p>Paragraph</p>
                    <span class="badge badge-dark">badge</span>
                </div>
                <div class="col-xl-8 text-right">
                    <p class="display-4 text-truncate">Display 4</p>
                    <p class="display-3 text-truncate">Display 3</p>
                    <p class="display-2 text-truncate">Display 2</p>
                    <p class="display-1 text-truncate">Display 1</p>
                </div>
            </div>
        </section>
        <section id="forms" class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label form-control-label text-muted">First</label>
                            <div class="col-md-4">
                                <input class="form-control" type="text" value="Jane">
                            </div>
                            <label class="col-md-1 col-form-label form-control-label text-muted">Last</label>
                            <div class="col-md-5">
                                <input class="form-control" type="text" value="Bishop">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label form-control-label text-muted">Address</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label form-control-label text-muted"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" placeholder="City">
                            </div>
                            <div class="col-lg-4">
                                <select class="form-control">
                                    <option>State</option>
                                    <option>AK</option>
                                    <option>AZ</option>
                                    <option>CA</option>
                                    <option>CO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row was-validated">
                            <label class="col-lg-2 col-form-label form-control-label text-muted">Username</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" required="" id="un" name="un">
                                <div class="invalid-feedback">
                                  Username is required.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label form-control-label"></label>
                            <div class="col-lg-10">
                                <input type="reset" class="btn btn-outline-secondary mr-2" value="Cancel">
                                <input type="button" class="btn btn-primary mr-2" value="Submit">
                                <div class="custom-control custom-checkbox d-inline">
                                  <input type="checkbox" class="custom-control-input" id="customCheck" checked>
                                  <label class="custom-control-label" for="customCheck">Check me out</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section id="grid" class="container pb-5">
            <p class="lead">The rows &amp; columns of the world famous Bootstrap grid speak for themselves.</p>
            <div class="row">
                <div class="col-sm-6">
                    6
                </div>
                <div class="col-6">
                    <div class="card my-1 bg-light">6</div>
                </div>
                <div class="col-sm-5">
                    5
                </div>
                <div class="col-7">
                    <div class="card my-1">7</div>
                </div>
                <div class="col-sm-4">
                    4
                </div>
                <div class="col-8">
                    <div class="card my-1">8</div>
                </div>
                <div class="col-sm-3">
                    3
                </div>
                <div class="col-9">
                    <div class="card my-1">9</div>
                </div>
                <div class="col-sm-2">
                    2
                </div>
                <div class="col-10">
                    <div class="card my-1">10</div>
                </div>
                <div class="col-sm-1">
                    1
                </div>
                <div class="col-11">
                    <div class="card my-1">11</div>
                </div>
            </div>
        </section>
        <section id="more" class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-sm">
                            <tbody>
                                <tr>
                                    <th class="w-25">Location</th>
                                    <th class="w-50">Date</th>
                                    <th class="w-25">Visits</th>
                                </tr>
                                <tr>
                                    <td>Westfield</td>
                                    <td>08.05.18 <span class="badge badge-primary">badge</span></td>
                                    <td>2323</td>
                                </tr>
                                <tr>
                                    <td>Galway</td>
                                    <td>08.05.18 <span class="badge badge-pill badge-primary">badge-pill</span></td>
                                    <td>5362</td>
                                </tr>
                                <tr class="table-primary">
                                    <td>Bern</td>
                                    <td>08.05.18</td>
                                    <td>153</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="w-100 my-4"></div>
                <div class="col-md-8">
                    <a href="#" class="text-primary" data-toggle="tooltip" data-placement="right" title="This tooltip is on the right.">Right tooltip (hover)</a>
                    <br>
                    <a href="#" class="text-primary" data-toggle="tooltip" data-placement="bottom" title="This tooltip is on the bottom.">Bottom tooltip (hover)</a>
                    <br>
                </div>
                <div class="col-md-4 text-right">
                    <!--
                    <div class="px-4 p-2 rounded bg-primary text-light" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
                        Toggle my popover
                    </div>-->
                    <button type="button" class="btn btn-lg btn-primary" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Toggle my popover</button>
                </div>
                <div class="w-100 my-4"></div>
                <div class="col-md-12">
                    <div class="progress mb-2">
                        <div class="progress-bar bg-primary w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="alert alert-primary alert-dismissable show fade" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Well done!</strong> You successfully read this important alert message.
                    </div>
                </div>
                <div class="w-100 my-4"></div>
            </div>
        </section>
<?php require_once('./layout/footer.php'); ?>