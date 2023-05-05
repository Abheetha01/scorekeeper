<!DOCTYPE html>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SCOREKEEPER | SCOREBOARD</title>

    <meta name="description" content="" />

    @include('layouts.admin-panel-com-css')
</head>

<body>


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
                            CREATE
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">
                                            CREATE SCREBOARD
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
                                                        TEAM 01 BATTING
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#navs-top-profile"
                                                        aria-controls="navs-top-profile" aria-selected="false">
                                                        TEAM 01 FILEDING
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#navs-top-messages"
                                                        aria-controls="navs-top-messages" aria-selected="false">
                                                        TEAME 02 BATTING
                                                    </button>
                                                </li>
                                                <li class="nav-item">
                                                    <button type="button" class="nav-link" role="tab"
                                                        data-bs-toggle="tab" data-bs-target="#team02-field"
                                                        aria-controls="team02-field" aria-selected="false">
                                                        TEAM 02 FILEDING
                                                    </button>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="navs-top-home"
                                                    role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">SELECT TEAM
                                                            01</label>
                                                        <select class="form-select" id="exampleFormControlSelect1"
                                                            aria-label="Default select example">
                                                            <option selected="">Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <label for="defaultSelect" class="form-label">SELECT PLAYERS BATTING
                                                        ORDER</label>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon11">01</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text" id="basic-addon11">07</span>
                                                            <select id="defaultSelect" class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">02</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">08</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">03</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">09</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">04</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">10</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">05</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">11</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">06</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">12</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">SELECT TEAM
                                                            01</label>
                                                        <select class="form-select" id="exampleFormControlSelect1"
                                                            aria-label="Default select example">
                                                            <option selected="">Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <label for="defaultSelect" class="form-label">SELECT FILEDING
                                                        PLAYERS</label>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">01</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">07</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">02</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">08</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">03</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">09</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">04</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">10</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">05</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">11</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">06</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">12</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">SELECT TEAM
                                                            02</label>
                                                        <select class="form-select" id="exampleFormControlSelect1"
                                                            aria-label="Default select example">
                                                            <option selected="">Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <label for="defaultSelect" class="form-label">SELECT BATTING
                                                        PLAYERS</label>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">01</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">07</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">02</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">08</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">03</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">09</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">04</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">10</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">05</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">11</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">06</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">12</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="team02-field" role="tabpanel">
                                                    <div class="mb-3">
                                                        <label for="defaultSelect" class="form-label">SELECT TEAM
                                                            02</label>
                                                        <select class="form-select" id="exampleFormControlSelect1"
                                                            aria-label="Default select example">
                                                            <option selected="">Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <label for="defaultSelect" class="form-label">SELECT FILEDING
                                                        PLAYERS</label>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">01</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">07</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">02</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">08</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">03</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">09</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">04</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">10</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">05</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">11</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="basic-addon11">06</span>
                                                            <select style="margin-right: 10px;" id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                            <span class="input-group-text"
                                                                id="basic-addon11">12</span>
                                                            <select id="defaultSelect"
                                                                class="form-select form-control">
                                                                <option>Default select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
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
                        <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">
                                            SCORE BOARD SUMMURY
                                        </h5>

                                    </div>
                                    <div class="modal-body">
                                        <div style="display: flex; justify-content: center;">
                                            <img style="width: 200px" src="{{ asset('img/matches/m-11.png') }}"
                                                alt="Card image cap">
                                        </div>
                                        <div style="margin-top: 30px;">
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">WINNING
                                                TEAM :- TEAM 01</h4>
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">BY:- 6
                                                RUNS :- TEAM 01</h4>
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">OVERES &
                                                BALLS:-46.5</h4>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">

                                                Close
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Edit Modal -->
                        <div class="modal fade" id="stopmodal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">
                                            STOP MATCH SUMMURY
                                        </h5>

                                    </div>
                                    <div class="modal-body">

                                        <div style="margin-top: 30px;">
                                            <h3 style="font-weight: bold; font-family: 'Roboto', sans-serif;">
                                                REASON:-RAIN</h3>
                                        </div>
                                        <div style="margin-top: 30px;">
                                            <h3 style="font-weight: bold; font-family: 'Roboto', sans-serif;"> TEAM 01
                                            </h3>
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">RUNS:-150
                                            </h4>
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">OVERES &
                                                BALLS:-46.5</h4>
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">WICKET:-5
                                            </h4>
                                        </div>
                                        <div style="margin-top: 30px;">
                                            <h3 style="font-weight: bold; font-family: 'Roboto', sans-serif;"> TEAM 02
                                            </h3>
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">RUNS:-150
                                            </h4>
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">OVERES &
                                                BALLS:-46.5</h4>
                                            <h4 style="font-weight: bold; font-family: 'Roboto', sans-serif;">WICKET:-5
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">

                                                Close
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- star --}}
                        <div class="modal fade" id="startModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">START SCREBOARD</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailBasic" class="form-label">SELECT TOSS WINNING
                                                    TEAM</label>
                                                <select id="defaultSelect" class="form-select form-control">
                                                    <option>TEAM</option>
                                                    <option value="1">SL</option>
                                                    <option value="2">IND</option>
                                                </select>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row g-2">
                                            <div class="col mb-0">
                                                <label for="emailBasic" class="form-label">SELECT 1ST
                                                    BATTINGTEAM</label>
                                                <select id="defaultSelect" class="form-select form-control">
                                                    <option>TEAM</option>
                                                    <option value="1">SL</option>
                                                    <option value="2">IND</option>
                                                </select>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#updateModal">START</button>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- update --}}
                        <div class="modal fade" id="updateModal" tabindex="-1" style="display: none;"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0B2447;">
                                        <h2 class="modal-title" id="modalFullTitle"
                                            style="color: white; font-weight: bold;">SCORE BOARD </h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body" style="background-color: #0B2447;">

                                        <h4 id="matchRoundHeader" style="color: white; font-weight: bold;">1st ROUND
                                        </h4>
                                        <div class="g-2 row">
                                            <div class="col-4 mb-14" style=" margin-left: 10px; margin-right: 10px;">
                                                <select id="defaultSelect" class="form-select form-select-sm">
                                                    <option>REASON</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col mb-0">
                                                <button type="button" class="btn btn-sm btn-danger">
                                                    STOPED</button>
                                                <button type="button" class="btn btn-sm btn-success">
                                                    END 1ST R</button>
                                            </div>
                                        </div>


                                        <div style="display: flex; justify-content: center; margin-top: 10px;">

                                            <div name="batting-side"
                                                style="border-top-left-radius: 10px;
                                                padding: 20px;
                                                border: 3px solid white;
                                                width: 50%;
                                                text-align: center;
                                                margin-top: 5px;
                                                border-bottom-left-radius: 10px;">
                                                <h3 style="color: white; font-weight: bold;">BATTING</h3>
                                                <div class="g-2 row">
                                                    <div class="col mb-0" style="margin: 3px 50px 0 50px;">
                                                        <input type="text" id="userName"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Name" readonly>
                                                    </div>
                                                </div>

                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">
                                                    <div class="col mb-0">
                                                        <select id="defaultSelect"
                                                            class="form-select form-control form-select-sm">
                                                            <option>PLAYER 01</option>
                                                            <option value="1">SL</option>
                                                            <option value="2">IND</option>
                                                        </select>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            style="margin-left: 10px">
                                                            <i class="fa-solid fa-baseball-bat-ball"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-secondary btn-sm">
                                                            <i class="fa-solid fa-ban"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">
                                                    <div class="col mb-0">
                                                        <select id="defaultSelect"
                                                            class="form-select form-control form-select-sm">
                                                            <option>PLAYER 02</option>
                                                            <option value="1">SL</option>
                                                            <option value="2">IND</option>
                                                        </select>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            style="margin-left: 10px">
                                                            <i class="fa-solid fa-baseball-bat-ball"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-secondary btn-sm">
                                                            <i class="fa-solid fa-ban"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">

                                                    <div class="col mb-0">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            style="margin-left: 10px"">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <button style="width: fit-content;
                                                        color: black;
                                                        background-color: yellow;
                                                        opacity: 1 !important;
                                                        font-weight: bold;" type="button" class="btn btn-success btn-sm" disabled>
                                                            131
                                                        </button>
                                                        <button type="button" class="btn btn-success btn-sm">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>

                                                </div>

                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">

                                                    <div class="col mb-0">
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            style="margin-left: 10px">
                                                            6s
                                                        </button>
                                                        <button type="button" class="btn btn-info btn-sm">
                                                            4s
                                                        </button>
                                                        <button type="button" class="btn btn-info btn-sm">
                                                            0
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">
                                                    <div class="col mb-0">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            1R
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            2R
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            3R
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            4R
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                            <div name="balling-side"
                                                style="border-top-right-radius: 10px;
                                                padding: 20px;
                                                border: 3px solid white;
                                                width: 50%;
                                                text-align: center;
                                                margin-top: 5px;
                                                border-bottom-right-radius: 10px;">
                                                <h3 style="color: white; font-weight: bold;">BALLING</h3>
                                                <div class="g-2 row">
                                                    <div class="col mb-0" style="margin: 3px 50px 0 50px;">
                                                        <input type="text" id="userName"
                                                            class="form-control form-control-sm"
                                                            placeholder="Enter Name" readonly>
                                                    </div>
                                                </div>

                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">
                                                    <div
                                                        style="display: flex;
                                                    margin-top: 20p;
                                                    justify-content: center;">

                                                        <label for="html5-number-input"
                                                            class="col-md-2 col-form-label"
                                                            style="font-size: larger; font-weight: bold; color: white;">OVER</label>
                                                        <input disabled
                                                            style="color: black; font-weight: bolder; width: 15%; text-align: center; background-color: yellow;"
                                                            class="form-control" type="number" value="18"
                                                            id="html5-number-input">
                                                    </div>
                                                </div>

                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">
                                                    <div
                                                        style="display: flex;
                                                    margin-top: 10px;
                                                    justify-content: center;">

                                                        {{-- <label for="html5-number-input" class="col-md-2 col-form-label" style="font-weight: bold;">OVER</label>                                                         --}}
                                                        <select style="width: 50%;" id="defaultSelect"
                                                            class="form-select  form-select-sm">
                                                            <option>PLAYER 02</option>
                                                            <option value="1">SL</option>
                                                            <option value="2">IND</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">

                                                    <div class="col mb-0">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            style="margin-left: 10px"">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-success btn-sm" disabled style="width: fit-content;
                                                            color: black;
                                                            background-color: yellow;
                                                            opacity: 1 !important;
                                                            font-weight: bold;">
                                                            131
                                                        </button>
                                                        <button type="button" class="btn btn-success btn-sm">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>

                                                </div>

                                                <div class="g-2 row" style="margin: 3px 50px 0 50px;">

                                                    <div class="col mb-0">
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            style="margin-left: 15px; color: white;">
                                                            <i class="fa-solid fa-arrows-left-right"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-danger btn-sm">
                                                            <i class="fa-solid fa-circle-xmark"></i>
                                                        </button>
                                                    </div>

                                                </div>




                                            </div>
                                        </div>

                                    </div>

                                    <div class="modal-footer" style="background-color: #0B2447;">

                                        <button type="button" class="btn btn-primary">RESET</button>
                                        <button type="button" class="btn btn-primary">UPDATE</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Model Btn -->
                    <!-- Start Search -->

                    <div style="padding-top: 10px; padding-bottom: 10px; display: flex; justify-content: flex-end;"
                        class="">
                        <div class="nav-item d-flex align-items-center">

                            <select id="defaultSelect" class="form-select form-control" style="margin-right: 10px;">
                                <option>TEAM 01</option>
                                <option value="1">SL</option>
                                <option value="2">IND</option>
                            </select>

                            <select id="defaultSelect" class="form-select form-control" style="margin-right: 10px;">
                                <option>TEAM 02</option>
                                <option value="1">SL</option>
                                <option value="2">IND</option>
                            </select>

                            <input class="form-control" type="date" value="2021-06-18" id="html5-date-input">

                            {{-- <input style="color: white; background-color: #233446;" type="text"
                                class="form-control border-0 shadow-none" placeholder="Search..."
                                aria-label="Search..." /> --}}
                            <button style="margin-left: 5px;" type="button" class="btn btn-icon btn-primary">
                                <span class="tf-icons bx bx-search"></span>
                            </button>
                        </div>
                    </div>
                    <!-- End Search Bar -->
                    <!-- Bootstrap Dark Table -->

                    <div class="table-responsive text-nowrap">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>MATCH</th>
                                    <th>STATUS</th>
                                    <th>USER</th>
                                    <th>DATE</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>
                                        <ul
                                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/1.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/6.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>

                                    </td>
                                    <td><strong>SL VS ENG</strong></td>
                                    <td><span class="badge bg-success">START</span></td>
                                    <td>USER 1</td>
                                    <td>DD-MM-YYYY </td>
                                    <td>
                                        <button type="button" class="btn btn-success btn- btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#startModal">
                                            <i class="fa-solid fa-play"></i>
                                        </button>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul
                                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/1.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/6.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>

                                    </td>
                                    <td><strong>SL VS ENG</strong></td>
                                    <td><span class="badge bg-warning">PENGING</span></td>
                                    <td>USER 1</td>
                                    <td>DD-MM-YYYY </td>
                                    <td>
                                        <button type="button" class="btn btn-success btn- btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#startModal">
                                            <i class="fa-solid fa-play"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn- btn-sm" data-bs-toggle=""
                                            data-bs-target="">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul
                                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/1.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/6.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>

                                    </td>
                                    <td><strong>SL VS ENG</strong></td>
                                    <td><span class="badge bg-danger">Stoped</span></td>
                                    <td>USER 1</td>
                                    <td>DD-MM-YYYY </td>
                                    <td><button type="button" class="btn btn-primary btn- btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#stopmodal">
                                            <i class="fa-solid fa-eye"></i>
                                        </button> </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul
                                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/1.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/6.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>

                                    </td>
                                    <td><strong>SL VS ENG</strong></td>
                                    <td><span class="badge bg-info">END</span></td>
                                    <td>USER 1</td>
                                    <td>DD-MM-YYYY </td>
                                    <td> <button type="button" class="btn btn-primary btn- btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="fa-solid fa-eye"></i>
                                        </button> </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul
                                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/1.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="" data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/6.png') }}"
                                                    alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>

                                    </td>
                                    <td><strong>SL VS ENG</strong></td>
                                    <td><span class="badge bg-primary">SWITHCING</span></td>
                                    <td>USER 1</td>
                                    <td>DD-MM-YYYY </td>
                                    <td> <button type="button" class="btn btn-success btn- btn-sm"
                                            data-bs-toggle="modal" data-bs-target="">
                                            <i class="fa-solid fa-play"></i>
                                        </button></td>
                                    <td></td>
                                </tr>



                            </tbody>
                        </table>
                    </div>

                    <!--/ Bootstrap Dark Table -->
                    <!-- Basic Pagination -->
                    <nav style="display: flex; justify-content: center" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item first">
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
                            </li>
                        </ul>
                    </nav>
                    <!--/ Basic Pagination -->



                </div>

            </div>

        </div>
    </div>

    @include('layouts.admin-panel-com-js')
</body>

</html>
