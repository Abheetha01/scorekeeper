<!DOCTYPE html>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SCOREKEEPER | TEAMS</title>

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
                    <div style="display: flex; justify-content: flex-end; margin-bottom: 10px">
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
                                        <h5 class="modal-title" id="exampleModalLabel1">ADD TEAM</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameBasic" class="form-label">NAME</label>
                                                <input type="text" id="userName" class="form-control"
                                                    placeholder="Enter Name"  />

                                                <label for="nameBasic" class="form-label">SHORT NAME</label>
                                                <input type="email" id="userEmail" class="form-control"
                                                    placeholder="SHORT NAME"  />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-0">
                                               
                                            </div>
                                            <div class="col mb-0">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">FLAG</label>
                                        <input class="form-control imageUpload" type="file" id="imageUpload">
                                    </div>
                                    <div class="col mb-0">
                                        <div class="avatar-upload">
                                            <div class="avatar-preview">
                                                <div id="imagePreview" style="background-image: url({{asset('admin-panel/img/avatars/6.png')}});">
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
                                            ADD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                    </div>
                    <!-- End Model Btn -->
                    <!-- Start Search -->
                    <div style="padding-top: 10px; padding-bottom: 10px; display: flex; justify-content: flex-end;"
                        class="">
                        <div class="nav-item d-flex align-items-center">
                            <input style="color: white; background-color: #233446;" type="text"
                                class="form-control border-0 shadow-none" placeholder="Search..."
                                aria-label="Search..." />
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
                                    <th>NAME</th>
                                    <th>SHORT NAME</th>
                                    <th>STATUS</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up" title=""
                                                data-bs-original-title="Lilian Fuller">
                                                <img src="{{ asset('admin-panel/img/avatars/1.png') }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td><strong>SRI LANKA</strong></td>
                                    <td>SL</td>
                                    <td><span class="badge bg-success">ACTIVE</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-info btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#basicModal">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-danger btn-sm"
                                            data-bs-toggle="modal" data-bs-target="">
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
                                        </ul>
                                    </td>

                                    <td><strong>INDIAN</strong></td>
                                    <td>IND</td>
                                    <td><span class="badge bg-danger">DEACTIVE</span></td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-success btn-sm"
                                            data-bs-toggle="modal" data-bs-target="">
                                            <i class="fa-solid fa-arrows-rotate"></i>
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
                                        </ul>
                                    </td>
                                    <td><strong>ENGLEND</strong></td>
                                    <td>ENG</td>
                                    <td><span class="badge bg-success">ACTIVE</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-info btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#basicModal">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-danger btn-sm"
                                            data-bs-toggle="modal" data-bs-target="">
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
                                        </ul>
                                    </td>
                                    <td><strong>NEW ZEALAND</strong></td>
                                    <td>NZ</td>
                                    <td><span class="badge bg-success">ACTIVE</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-info btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#basicModal">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-danger btn-sm"
                                            data-bs-toggle="modal" data-bs-target="">
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
                                        </ul>
                                    </td>
                                    <td><strong>PAKISTHAN</strong></td>
                                    <td>PAK</td>
                                    <td><span class="badge bg-success">ACTIVE</span></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-info btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#basicModal">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-danger btn-sm"
                                            data-bs-toggle="modal" data-bs-target="">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
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
