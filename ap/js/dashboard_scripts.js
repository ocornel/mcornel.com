
$(".page-loader").click(function (e) {
    e.preventDefault();
    $(".page-loader").removeClass("active-page");
    page = this.getAttribute('data-value');
    $("[data-value="+page+"]").addClass("active-page");
    return load_page(page);
});

function load_page(page) {
    $.ajax({
        type: "POST",
        url: "page_loader.php",
        data: {
            "page": page,
        },
        success: function (data) {
            console.log(data);
            page_content = data;
            $('#page-content').html(page_content);


        },
        error: function () {
            console.log("error");
        }
    });
}