// Change Product Sise To Update Price
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#getPrice").change(function () {
        var size = $(this).val();
        if (size == "") {
            alert("Please Select A Size");
            return false;
        }
        var product_id = $(this).attr("product-id");

        $.ajax({
            type: "post",
            url: "/get-product-price",

            data: {
                size: size,
                product_id: product_id,
            },
            success: function (response) {
                $(".getAttrPrice").html("$ " + response);
            },
            error: function () {
                alert("ERROR");
            },
        });
    });
});
