{{-- @php
  $responseData = json_decode($adminUsersPageResponse);
@endphp --}}

<!DOCTYPE html>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>SCOREKEEPER | ADMIN USER</title>

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

                    <!-- Bootstrap Dark Table -->

                    <div class="table-responsive text-nowrap">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>username</th>
                                    <th>e-mail</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0" id="adminUsersTableBody">
                            </tbody>
                        </table>
                    </div>

                    <!--/ Bootstrap Dark Table -->

                    <!-- Basic Pagination -->
                    <nav style="display: flex; justify-content: center;" aria-label="Page navigation">
                        <ul class="pagination">
                            
                        </ul>
                    </nav>
                    <!--/ Basic Pagination -->

                </div>

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">User Name</label>
                            <input type="text" id="admiUserName" class="form-control" placeholder="Enter Name" readonly />

                            <label for="nameBasic" class="form-label">E-Mail</label>
                            <input type="email" id="adminUserEmail" class="form-control" placeholder="E-mail" readonly />
                            <input type="hidden" id="adminUserID" class="form-control"/>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="emailBasic" class="form-label">User Status</label>
                            <select id="adminUsersType" class="form-select form-control">
                                <option disabled style="background-color: gray; color: black;">Select User Status</option>
                                <option value="SU">SUPER USER</option>
                                <option value="NU">ADMIN USER</option>
                                <option value="PEN">PENDING USER</option>
                                <option value="0">DEACTIVATE</option>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="dobBasic" class="form-label">&nbsp;</label>
                            <button type="button" id="updateAdminUserStatus" class="btn btn-primary form-label form-control">UPDATE USER
                                TYPE</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">SEND PASSWORD RESET LINK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    @include('layouts.admin-panel-com-js')
    <script src="{{ asset('admin-panel/js/admin-users.js') }}"></script>
</body>

</html>
