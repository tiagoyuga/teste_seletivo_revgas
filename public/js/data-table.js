/*$("#dom_jq_event tbody").on("click", "tr", function () {
        var data = table.row(this).data();
        alert("You clicked on " + data[0] + "'s row");
    });*/
$().ready(function () {

    const translate = $("#data-table-translate").val();
    // console.log('aoba', translate);

    $(".data-table").dataTable({
        language: {
            url: translate
        },
    });

    $(".data-table-buttons").dataTable({
        dom: "Bfrtip",
        display: true,
        buttons: ["csv", "excel", "pdf", "print"],//"copy"
        language: {
            url: translate
        },
    });
});