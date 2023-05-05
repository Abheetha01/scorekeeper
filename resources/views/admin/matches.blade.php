<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SCOREKEEPER | MATCHES</title>

    <meta name="description" content="" />

    @include('layouts.admin-panel-com-css')
</head>

<body>

    @include('layouts.admin-loading')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.admin-menu-nav-bar')

            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts.admin-user-profile')

                <div class="main-area">
                    <!-- Start Model Dtn -->
                    <div
                        style="
                display: flex;
                justify-content: flex-end;
                margin-bottom: 10px;
              ">
                        <!-- Default Modal -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#basicModal">
                            ADD
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">
                                            ADD MATCHES
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- start tab view -->
                                        <div class="nav-align-top mb-4">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link active" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#navs-top-home"
                                                        aria-controls="navs-top-home" aria-selected="true">
                                                        TEAM 01
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#navs-top-profile"
                                                        aria-controls="navs-top-profile" aria-selected="false">
                                                        TEAM 02
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#navs-top-messages"
                                                        aria-controls="navs-top-messages" aria-selected="false">
                                                        MATCH DETAILS
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="navs-top-home"
                                                    role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">TEAM 01</label>
                                                        <select id="defaultSelect" class="form-select">
                                                            <option>Default select</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">Players</label>
                                                        <div class="inline w-100 field">

                                                            <select name="skills" multiple=""
                                                                class="label ui selection fluid dropdown">
                                                                <option value="">All</option>
                                                                <option value="1">Topic 1</option>
                                                                <option value="2">Topic 2</option>
                                                                <option value="3">Topic 3</option>
                                                                <option value="4">Topic 4</option>
                                                                <option value="5">Topic 5</option>
                                                                <option value="6">Topic 6</option>
                                                                <option value="7">Topic 7</option>
                                                                <option value="8">Topic 8</option>
                                                                <option value="9">Topic 9</option>
                                                                <option value="10">Topic 10</option>
                                                                <option value="11">Topic 11</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">TEAM 02</label>
                                                        <select id="defaultSelect" class="form-select">
                                                            <option>Default select</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">Players</label>
                                                        <div class="inline w-100 field">

                                                            <select name="skills" multiple=""
                                                                class="label ui selection fluid dropdown">
                                                                <option value="">All</option>
                                                                <option value="1">Topic 1</option>
                                                                <option value="2">Topic 2</option>
                                                                <option value="3">Topic 3</option>
                                                                <option value="4">Topic 4</option>
                                                                <option value="5">Topic 5</option>
                                                                <option value="6">Topic 6</option>
                                                                <option value="7">Topic 7</option>
                                                                <option value="8">Topic 8</option>
                                                                <option value="9">Topic 9</option>
                                                                <option value="10">Topic 10</option>
                                                                <option value="11">Topic 11</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                                                    <div>
                                                        <label for="defaultFormControlInput"
                                                            class="form-label">Name</label>
                                                        <input type="text" class="form-control"
                                                            id="defaultFormControlInput" placeholder="John Doe"
                                                            aria-describedby="defaultFormControlHelp" />
                                                    </div>
                                                    <div class="g-2 row">
                                                        <div class="col mb-0">
                                                            <label for="html5-date-input"
                                                                class="col-md-2 form-label">Date</label>
                                                            <input class="form-control" type="date"
                                                                value="2021-06-18" id="html5-date-input" />
                                                        </div>
                                                        <div class="col mb-0">
                                                            <label for="html5-time-input"
                                                                class="col-md-2 form-label">Time</label>
                                                            <input class="form-control" type="time"
                                                                value="12:30:00" id="html5-time-input" />
                                                        </div>
                                                    </div>
                                                    <div class="g-2 row">
                                                        <div class="col mb-0">
                                                            <label for="defaultSelect" class="form-label">MATCH
                                                                TYPE</label>
                                                            <select id="defaultSelect" class="form-select">
                                                                <option>MATCH TYPE</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <div class="col mb-0">
                                                            <label for="html5-time-input"
                                                                class="col-md-2 form-label">OVERS</label>
                                                            <input class="form-control" type="number" value="18"
                                                                id="html5-number-input" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Tab View -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            CREATE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->

                        <!-- Edit Modal -->
                        <div class="modal fade" id="edit-model" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">
                                            EDIT MATCHES
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- start tab view -->
                                        <div class="nav-align-top mb-4">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link active" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#edit-navs-top-home"
                                                        aria-controls="edit-navs-top-home" aria-selected="true">
                                                        TEAM 01
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#edit-navs-top-profile"
                                                        aria-controls="edit-navs-top-profile" aria-selected="false">
                                                        TEAM 02
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#edit-navs-top-messages"
                                                        aria-controls="edit-navs-top-messages" aria-selected="false">
                                                        MATCH DETAILS
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="edit-navs-top-home"
                                                    role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">TEAM 01</label>
                                                        <select id="defaultSelect" class="form-select">
                                                            <option>Default select</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">Players</label>
                                                        <div class="inline w-100 field">

                                                            <select name="skills" multiple=""
                                                                class="label ui selection fluid dropdown">
                                                                <option value="">All</option>
                                                                <option value="1">Topic 1</option>
                                                                <option value="2">Topic 2</option>
                                                                <option value="3">Topic 3</option>
                                                                <option value="4">Topic 4</option>
                                                                <option value="5">Topic 5</option>
                                                                <option value="6">Topic 6</option>
                                                                <option value="7">Topic 7</option>
                                                                <option value="8">Topic 8</option>
                                                                <option value="9">Topic 9</option>
                                                                <option value="10">Topic 10</option>
                                                                <option value="11">Topic 11</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="edit-navs-top-profile"
                                                    role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">TEAM 02</label>
                                                        <select id="defaultSelect" class="form-select">
                                                            <option>Default select</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">Players</label>
                                                        <div class="inline w-100 field">

                                                            <select name="skills" multiple=""
                                                                class="label ui selection fluid dropdown">
                                                                <option value="">All</option>
                                                                <option value="1">Topic 1</option>
                                                                <option value="2">Topic 2</option>
                                                                <option value="3">Topic 3</option>
                                                                <option value="4">Topic 4</option>
                                                                <option value="5">Topic 5</option>
                                                                <option value="6">Topic 6</option>
                                                                <option value="7">Topic 7</option>
                                                                <option value="8">Topic 8</option>
                                                                <option value="9">Topic 9</option>
                                                                <option value="10">Topic 10</option>
                                                                <option value="11">Topic 11</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="edit-navs-top-messages"
                                                    role="tabpanel">
                                                    <div>
                                                        <label for="defaultFormControlInput"
                                                            class="form-label">Name</label>
                                                        <input type="text" class="form-control"
                                                            id="defaultFormControlInput" placeholder="John Doe"
                                                            aria-describedby="defaultFormControlHelp" />
                                                    </div>
                                                    <div class="g-2 row">
                                                        <div class="col mb-0">
                                                            <label for="html5-date-input"
                                                                class="col-md-2 form-label">Date</label>
                                                            <input class="form-control" type="date"
                                                                value="2021-06-18" id="html5-date-input" />
                                                        </div>
                                                        <div class="col mb-0">
                                                            <label for="html5-time-input"
                                                                class="col-md-2 form-label">Time</label>
                                                            <input class="form-control" type="time"
                                                                value="12:30:00" id="html5-time-input" />
                                                        </div>
                                                    </div>
                                                    <div class="g-2 row">
                                                        <div class="col mb-0">
                                                            <label for="defaultSelect" class="form-label">MATCH
                                                                TYPE</label>
                                                            <select id="defaultSelect" class="form-select">
                                                                <option>MATCH TYPE</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <div class="col mb-0">
                                                            <label for="html5-time-input"
                                                                class="col-md-2 form-label">OVERS</label>
                                                            <input class="form-control" type="number" value="18"
                                                                id="html5-number-input" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Tab View -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            CREATE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Edit Modal -->

                        {{-- start view modal --}}
                        <div class="modal fade" id="view-model" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">
                                            VIEW MATCHES
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- start tab view -->
                                        <div class="nav-align-top mb-4">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link active" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#viwe-navs-top-home"
                                                        aria-controls="viwe-navs-top-home" aria-selected="false">
                                                        TEAM 01
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#viwe-navs-top-profile"
                                                        aria-controls="viwe-navs-top-profile" aria-selected="false">
                                                        TEAM 02
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#viwe-navs-top-messages"
                                                        aria-controls="viwe-navs-top-messages" aria-selected="false">
                                                        MATCH DETAILS
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="viwe-navs-top-home"
                                                    role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">TEAM 01</label>
                                                        <select disabled id="team01Select" class="form-select">
                                                            <option>Default select</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">Players</label>
                                                        <div class="inline w-100 field">

                                                            <select disabled id="team01Players" name="skills" multiple
                                                                class="label ui selection fluid dropdown">
                                                                {{-- <option value="">All</option>
                                                                <option selected value="1">Topic 1</option>
                                                                <option selected value="2">Topic 2</option>
                                                                <option value="3">Topic 3</option>
                                                                <option value="4">Topic 4</option>
                                                                <option value="5">Topic 5</option>
                                                                <option value="6">Topic 6</option>
                                                                <option value="7">Topic 7</option>
                                                                <option value="8">Topic 8</option>
                                                                <option value="9">Topic 9</option>
                                                                <option value="10">Topic 10</option>
                                                                <option value="11">Topic 11</option> --}}

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="viwe-navs-top-profile"
                                                    role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">TEAM 02</label>
                                                        <select id="defaultSelect" class="form-select">
                                                            <option>Default select</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">Players</label>
                                                        <div class="inline w-100 field">

                                                            <select name="skills" multiple=""
                                                                class="label ui selection fluid dropdown">
                                                                <option value="">All</option>
                                                                <option value="1">Topic 1</option>
                                                                <option value="2">Topic 2</option>
                                                                <option value="3">Topic 3</option>
                                                                <option value="4">Topic 4</option>
                                                                <option value="5">Topic 5</option>
                                                                <option value="6">Topic 6</option>
                                                                <option value="7">Topic 7</option>
                                                                <option value="8">Topic 8</option>
                                                                <option value="9">Topic 9</option>
                                                                <option value="10">Topic 10</option>
                                                                <option value="11">Topic 11</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="viwe-navs-top-messages"
                                                    role="tabpanel">
                                                    <div>
                                                        <label for="defaultFormControlInput"
                                                            class="form-label">Name</label>
                                                        <input type="text" class="form-control"
                                                            id="defaultFormControlInput" placeholder="John Doe"
                                                            aria-describedby="defaultFormControlHelp" />
                                                    </div>
                                                    <div class="g-2 row">
                                                        <div class="col mb-0">
                                                            <label for="html5-date-input"
                                                                class="col-md-2 form-label">Date</label>
                                                            <input class="form-control" type="date"
                                                                value="2021-06-18" id="html5-date-input" />
                                                        </div>
                                                        <div class="col mb-0">
                                                            <label for="html5-time-input"
                                                                class="col-md-2 form-label">Time</label>
                                                            <input class="form-control" type="time"
                                                                value="12:30:00" id="html5-time-input" />
                                                        </div>
                                                    </div>
                                                    <div class="g-2 row">
                                                        <div class="col mb-0">
                                                            <label for="defaultSelect" class="form-label">MATCH
                                                                TYPE</label>
                                                            <select id="defaultSelect" class="form-select">
                                                                <option>MATCH TYPE</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <div class="col mb-0">
                                                            <label for="html5-time-input"
                                                                class="col-md-2 form-label">OVERS</label>
                                                            <input class="form-control" type="number" value="18"
                                                                id="html5-number-input" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Tab View -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            CREATE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end view modal --}}




                    </div>
                    <!-- End Model Btn -->

                    <!-- Bootstrap Dark Table -->

                    <div class="table-responsive text-nowrap">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>match</th>
                                    <th>date</th>
                                    <th>type</th>
                                    <th>status</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="matchesDataTable" class="table-border-bottom-0">
                                
                                {{-- <tr>
                                    <td><strong>SL vs nz</strong></td>
                                    <td>2023.03.10@13.30</td>
                                    <td><span class="badge bg-info">S.OVER</span></td>
                                    <td><span class="badge bg-success">ACTIVE</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-info btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#view-model">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-warning btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#edit-model">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-danger btn-sm"
                                            data-bs-toggle="modal" data-bs-target="">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr> --}}
                                
                            </tbody>
                        </table>
                    </div>
                    <!--/ Bootstrap Dark Table -->

                    <!-- Basic Pagination -->
                    <nav style="display: flex; justify-content: center" aria-label="Page navigation">
                        <ul class="pagination">
                            {{-- <li class="page-item first">
                                  <a class="page-link" href="javascript:void(0);"><i
                                          class="tf-icon bx bx-chevrons-left"></i></a>
                              </li>
                              <li class="page-item prev">
                                  <a class="page-link" href="javascript:void(0);"><i
                                          class="tf-icon bx bx-chevron-left"></i></a>
                              </li>
                              <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">1</a>
                              </li>
                              <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">2</a>
                              </li>
                              <li class="page-item active">
                                  <a class="page-link" href="javascript:void(0);">3</a>
                              </li>
                              <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">4</a>
                              </li>
                              <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">5</a>
                              </li>
                              <li class="page-item next">
                                  <a class="page-link" href="javascript:void(0);"><i
                                          class="tf-icon bx bx-chevron-right"></i></a>
                              </li>
                              <li class="page-item last">
                                  <a class="page-link" href="javascript:void(0);"><i
                                          class="tf-icon bx bx-chevrons-right"></i></a>
                              </li> --}}
                        </ul>
                    </nav>
                    <!--/ Basic Pagination -->

                </div>
            </div>
        </div>
    </div>

    @include('layouts.admin-panel-com-js')
    <script src="{{ asset('admin-panel/js/admin-matches.js') }}"></script>

</body>

</html>
