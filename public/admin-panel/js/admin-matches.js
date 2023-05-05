var returnResponse;
var allPlayersResponse;

$(window).on("load", function () {
    $("#basicModal").modal({ backdrop: "static ", keyboard: false });
    getDataOnLoad(1);
});

function getDataOnLoad(pageNumber) {
    var toSend = {
        data: { pageNumber: pageNumber },
        _token: token,
    };

    var jsonString = JSON.stringify(toSend);

    var xhr = new XMLHttpRequest();

    xhr.open("POST", "/admin-panel/matches.json");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(jsonString);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            returnResponse = JSON.parse(xhr.responseText);
            // console.log("SUC");
            setDataToTable();
            createPagination();
        }
    };
}

function setDataToTable() {
    // console.log(returnResponse.adminUserData.length);
    for (let i = 0; i < returnResponse.matchesData.length; i++) {
        var statusClass = "";
        var typeClass = "";

        if (returnResponse.matchesData[i].match_play_status == "PENDING") {
            statusClass = "bg-warning";
        } else if (
            returnResponse.matchesData[i].match_play_status == "ONGOING"
        ) {
            statusClass = "bg-success";
        } else if (
            returnResponse.matchesData[i].match_play_status == "2ND_ROUND"
        ) {
            statusClass = "bg-success";
        } else if (returnResponse.matchesData[i].match_play_status == "WIN") {
            statusClass = "bg-info";
        } else if (returnResponse.matchesData[i].match_play_status == "DRAW") {
            statusClass = "bg-primary";
        } else if (
            returnResponse.matchesData[i].match_play_status == "STOPED"
        ) {
            statusClass = "bg-danger";
        }

        if (returnResponse.matchesData[i].match_type == "TEST") {
            typeClass = "bg-secondary";
        } else if (returnResponse.matchesData[i].match_type == "ODI") {
            typeClass = "bg-primary";
        } else if (returnResponse.matchesData[i].match_type == "T20") {
            typeClass = "bg-info";
        }

        var appendCol_01 =
            "<td><strong>" +
            returnResponse.matchesData[i].match_name +
            "</strong></td>";

        var appendCol_02 =
            "<td>" +
            returnResponse.matchesData[i].match_date_time
                .substring(0, 16)
                .replace(" ", "@") +
            "</td>";
        var appendCol_03 =
            '<td><span class="badge ' +
            typeClass +
            '">' +
            returnResponse.matchesData[i].match_type +
            "</span></td>";
        var appendCol_04 =
            '<td><span class="badge ' +
            statusClass +
            '">' +
            returnResponse.matchesData[i].match_play_status +
            "</span></td>";
        var appendCol_05 =
            '<td><button id="matchViewBtn' +
            returnResponse.matchesData[i].match_id +
            '" name="matchDataIndexView' +
            i +
            '" type="button" class="btn btn-icon btn-info btn-sm match-view" data-bs-toggle="modal" data-bs-target="#view-model"> <i class="fa-solid fa-eye"></i> </td>';

        if (returnResponse.matchesData[i].match_play_status == "ONGOING") {
            var appendCol_06 =
                '<td><button id="matchEditBtn'+returnResponse.matchesData[i].match_id+'" name="matchDataIndexEdit'+i+'" type="button" class="btn btn-icon btn-warning btn-sm match-edit" data-bs-toggle="modal" data-bs-target="#edit-model"> <i class="fa-solid fa-pen"></i> </button></td>';

            var appendCol_07 =
                '<td><button id="matchDeleteBtn'+returnResponse.matchesData[i].match_id+'" name="matchDataIndexDelete'+i+'" type="button" class="btn btn-icon btn-danger btn-sm match-delete"> <i class="fa-solid fa-trash"></i> </button></td>';
        } else {
            var appendCol_06 = "<td></td>";
            var appendCol_07 = "<td></td>";
        }

        $("#matchesDataTable").append(
            "<tr>" +
                appendCol_01 +
                appendCol_02 +
                appendCol_03 +
                appendCol_04 +
                appendCol_05 +
                appendCol_06 +
                appendCol_07 +
                "</tr>"
        );
    }
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

function setDataToModel(clickedElement) {
    // console.log(clickedElement.attr('id'));
    var matchesDataIndex = clickedElement.attr("name").substring(18);

    $("#matchesData").val(
        returnResponse.matchesData[matchesDataIndex].team01_name
    );



    $('#team01Players').append()
    
}

function getTeamPlayersAll(team01Id, team02Id) {

    var toSend = {
        data: { team01Id: team01Id,  team02Id:team02Id},
        _token: token,
    };

    var jsonString = JSON.stringify(toSend);

    var xhr = new XMLHttpRequest();

    xhr.open("POST", "/admin-panel/get-all-plyers");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(jsonString);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            allPlayersResponse = JSON.parse(xhr.responseText);
            // console.log("SUC");
        }
    };
}