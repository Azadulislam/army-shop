function printDiv(divName) {
    $("body").css("padding-top", "80px");
    // $(".relation-list .col-md-3").removeClass('col-6').addClass('col-4')
    // $(".relation-header .col-md-3").removeClass('col-12').addClass('col-4')
    // $("div.relation .col-md-1.max-45").removeClass('d-none').addClass('d-block')
    // $("div.relation .col-md-10").removeClass('col-12').addClass('col-10')
    $("table.dataTable").removeClass('table-bordered')
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    var title = $("#"+divName).data('title');
    if(title == undefined){
        title = "Khairat Ajal";
    }
    document.body.innerHTML = printContents;
    var pageHeight = parseInt($("body").css("height"));
    var offsetHeight = 1230;
    for (var i = 0; i < pageHeight; i++) {
        if (i == 1) {
            $("body").append(
                '<h3 style="text-align: center;position: absolute;top: ' +
                i +
                'px;left:0;right:0">' +
                title +
                "</h3>"
            );
        }
    }
    window.print();
    document.body.innerHTML = originalContents;
    $("table.dataTable").addClass('table-bordered')
    $("body").css("padding-top", "0px");
}