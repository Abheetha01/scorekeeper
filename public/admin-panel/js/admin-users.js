var returnResponse;

$(window).on("load", function () {
    $("#basicModal").modal({ backdrop: "static ", keyboard: false });
    getDataOnLoad(1);
});

$(document).ready(function () {
    $(document).on("click", ".admin-user-edit-btn", function () {
        var clickedElement = $(this);
        setDataToModel(clickedElement);
    });

    $("#updateAdminUserStatus").on("click", function () {
        updateAdminUserStatus();
    });

    $(document).on("click", ".pagi-btn", function () {
        var clickedElement = $(this);
        updatePagination(clickedElement);
    });
});

function getDataOnLoad(pageNumber) {
    var toSend = {
        data: { pageNumber: pageNumber },
        _token: token,
    };

    var jsonString = JSON.stringify(toSend);

    var xhr = new XMLHttpRequest();

    xhr.open("POST", "/admin-panel/admin-users.json");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(jsonString);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            getDataOnLoadStatus = true;
            returnResponse = JSON.parse(xhr.responseText);
            // console.log("SUC");
            setDataToTable();
            clearPagination(".pagination");
            createPagination();
        }
    };
}

function setDataToTable() {
    // console.log(returnResponse.adminUserData.length);
    for (let i = 0; i < returnResponse.adminUserData.length; i++) {
        var appendCol01 =
            "<td><strong>" +
            returnResponse.adminUserData[i].admin_usr_name +
            "</strong></td>";
        var appendCol02 =
            "<td>" + returnResponse.adminUserData[i].admin_user_email + "</td>";

        if (returnResponse.adminUserData[i].admin_user_status == 1) {
            if (returnResponse.adminUserData[i].admin_user_type == "PEN") {
                var appendCol03 =
                    '<td><span class="badge bg-warning">PENDING</span></td>';
            } else {
                var appendCol03 =
                    '<td><span class="badge bg-success">ACTIVE</span></td>';
            }
        } else {
            var appendCol03 =
                '<td><span class="badge bg-danger">DEACTIVE</span></td>';
        }
        var appendCol04 =
            '<td> <button id="adminUserEditBtn' +
            returnResponse.adminUserData[i].admin_user_id +
            '" name="adminUserEditBtn' +
            i +
            '" type="button" style="color: white;" class="btn btn-icon btn-warning btn-sm admin-user-edit-btn" data-bs-toggle="modal" data-bs-target="#basicModal" data-backdrop="static" data-keyboard="false"> <i class="fa-solid fa-pen"></i> </button> </td>';

        var appendString =
            "<tr>" +
            appendCol01 +
            appendCol02 +
            appendCol03 +
            appendCol04 +
            "</tr>";

        $("#adminUsersTableBody").append(appendString);
    }
}

function setDataToModel(clickedElement) {
    // console.log(clickedElement.attr('id'));
    var adminUserDataIndex = clickedElement.attr("name").substring(16);

    $("#admiUserName").val(
        returnResponse.adminUserData[adminUserDataIndex].admin_usr_name
    );
    $("#adminUserEmail").val(
        returnResponse.adminUserData[adminUserDataIndex].admin_user_email
    );
    $("#adminUserID").val(
        returnResponse.adminUserData[adminUserDataIndex].admin_user_id
    );

    var adminUserType =
        returnResponse.adminUserData[adminUserDataIndex].admin_user_type;
    var adminUserStatus =
        returnResponse.adminUserData[adminUserDataIndex].admin_user_status;

    if (adminUserStatus === 0) {
        $("#adminUsersType").val("0");
    } else {
        $("#adminUsersType").val(adminUserType);
    }
}

function updateAdminUserStatus() {
    var adminUserId = $("#adminUserID").val();
    var adminUserStatus = $("#adminUsersType").val();

    // console.log(adminUserId);
    // console.log(adminUserStatus);

    var toSend = {
        data: { adminUserId: adminUserId, adminUserStatus: adminUserStatus, 'pageNumber':returnResponse.activePage},
        _token: token,
    };

    var jsonString = JSON.stringify(toSend);

    var xhr = new XMLHttpRequest();

    xhr.open("POST", "/admin-panel/adminUserUpdate");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(jsonString);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                returnResponse = JSON.parse(xhr.responseText);

                // console.log("SUC");

                if (returnResponse.status == true) {
                    displayAlert(returnResponse.message, "bg-success");
                    clearTable("#adminUsersTableBody");
                    getDataOnLoad(Number(returnResponse.activePage));
                    $("#basicModal").modal("hide");
                } else {
                    displayAlert(returnResponse.message, "bg-danger");
                }
            } else {
                displayAlert("404", "bg-danger");
            }
        }
    };
}

function clearTable(elementId) {
    $(elementId).empty();
}

function createPagination() {
    var pageCount = Math.ceil(returnResponse.totalRecrods / 2);
    if (returnResponse.activePage > 1) {
        var dLeftArrow =
            '<li name="dL" class="page-item first pagi-btn"> <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a></li>';
        var sLeftArrow =
            '<li name="sL" class="page-item prev pagi-btn">  <a class="page-link" href="javascript:void(0);"><i  class="tf-icon bx bx-chevron-left"></i></a> </li>';

        $(".pagination").append(dLeftArrow);
        $(".pagination").append(sLeftArrow);
    }
    for (let i = 1; i <= pageCount; i++) {
        var pageBtn = "";

        if (returnResponse.activePage == i) {
            pageBtn =
                '<li name="' +
                i +
                '" class="page-item active pagi-btn">     <a class="page-link" href="javascript:void(0);">' +
                i +
                "</a> </li>";
        } else {
            pageBtn =
                '<li name="' +
                i +
                '" class="page-item pagi-btn">     <a class="page-link" href="javascript:void(0);">' +
                i +
                "</a> </li>";
        }

        $(".pagination").append(pageBtn);
    }

    if (returnResponse.activePage < pageCount) {
        var dRighrArrow =
            '<li name="dR" class="page-item first pagi-btn"> <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a></li>';
        var sRighrArrow =
            '<li name="sR" class="page-item prev pagi-btn">  <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a> </li>';

        $(".pagination").append(sRighrArrow);
        $(".pagination").append(dRighrArrow);
    }
}

function clearPagination(elementClass) {
    $(elementClass).empty();
}

function updatePagination(clickedElement) {
    var pageNumberGet = clickedElement.attr('name');
    var pageNumber = 0;

    var pageCount = Math.ceil(returnResponse.totalRecrods / 2);

    if (pageNumberGet == "sL") {
        pageNumber = returnResponse.activePage - 1;
    } else if (pageNumberGet == "dL") {
        pageNumber = 1;
    } else if (pageNumberGet == "dR") {
        pageNumber = pageCount;
    } else if (pageNumberGet == "sR") {
        pageNumber = returnResponse.activePage + 1;
    } else {
        pageNumber = pageNumberGet;
    }

    // console.log(pageNumber);
    // console.log(pageNumberGet);

    clearTable("#adminUsersTableBody");
    clearPagination(".pagination");
    getDataOnLoad(Number(pageNumber));
}
