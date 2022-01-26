(function ($) {
    /*======== 1. START CHANGE SECTION STATUS ========*/
    $(".toggle-class-section").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var section_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/section-status",
            data: {
                status: status,
                section_id: section_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 1. END CHANGE SECTION STATUS ========*/

    /*======== 2. START CHANGE CATEGORY STATUS ========*/
    $(".toggle-class-category").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var category_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/category-status",
            data: {
                status: status,
                category_id: category_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 2. END CHANGE CATEGORY STATUS ========*/

    /*======== 3. START CHANGE SUB CATEGORY STATUS ========*/
    $(".toggle-class-subcategory").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var subcategory_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/subcategory-status",
            data: {
                status: status,
                subcategory_id: subcategory_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 3. END SUB CHANGE CATEGORY STATUS ========*/

    /*======== 4. START CHANGE PRODUCT STATUS ========*/
    $(".toggle-class-product").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var product_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/product-status",
            data: {
                status: status,
                product_id: product_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 4. END CHANGE PRODUCT STATUS ========*/

    /*======== 5. START CHANGE ATTRIBURE STATUS ========*/
    $(".toggle-class-attribute").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var attribute_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/attribute-status",
            data: {
                status: status,
                attribute_id: attribute_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 5. END CHANGE ATTRIBURE STATUS ========*/

    /*======== 6. START CHANGE PRODUCT GALLERY IMAGE STATUS ========*/
    $(".toggle-class-gallery_image").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var gallery_image_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/gallery-image-status",
            data: {
                status: status,
                gallery_image_id: gallery_image_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 6. END CHANGE PRODUCT GALLERY IMAGE STATUS ========*/

    /*======== 7. START CHANGE BRAND STATUS ========*/
    $(".toggle-class-brand").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var brand_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/brand-status",
            data: {
                status: status,
                brand_id: brand_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 7. END BRAND STATUS ========*/

    /*======== 14. START CHANGE UNIT STATUS ========*/
    // $(function () {
    //     $(".toggle-class-unit").change(function () {
    //         var status = $(this).prop("checked") == true ? 1 : 0;
    //         var unit_id = $(this).data("id");

    //         $.ajax({
    //             type: "GET",
    //             dataType: "json",
    //             url: "/units-status",
    //             data: {
    //                 status: status,
    //                 unit_id: unit_id,
    //             },
    //             success: function (data) {
    //                 console.log("Success");
    //             },
    //         });
    //     });
    // });
    /*======== 14. END UNIT STATUS ========*/

    /*======== 15. START CHANGE SIZE STATUS ========*/
    // $(function () {
    //     $(".toggle-class-size").change(function () {
    //         var status = $(this).prop("checked") == true ? 1 : 0;
    //         var size_id = $(this).data("id");

    //         $.ajax({
    //             type: "GET",
    //             dataType: "json",
    //             url: "/sizes-status",
    //             data: {
    //                 status: status,
    //                 size_id: size_id,
    //             },
    //             success: function (data) {
    //                 console.log("Success");
    //             },
    //         });
    //     });
    // });
    /*======== 15. END SIZE STATUS ========*/

    /*======== 16. START CHANGE COLOR STATUS ========*/
    // $(function () {
    //     $(".toggle-class-color").change(function () {
    //         var status = $(this).prop("checked") == true ? 1 : 0;
    //         var color_id = $(this).data("id");

    //         $.ajax({
    //             type: "GET",
    //             dataType: "json",
    //             url: "/colors-status",
    //             data: {
    //                 status: status,
    //                 color_id: color_id,
    //             },
    //             success: function (data) {
    //                 console.log("Success");
    //             },
    //         });
    //     });
    // });
    /*======== 16. END COLOR STATUS ========*/

    /*======== 18. START CHANGE ORDERS STATUS ========*/
    // $(function () {
    //     $(".toggle-class-order").change(function () {
    //         var status = $(this).prop("checked") == true ? 1 : 0;
    //         var order_id = $(this).data("id");

    //         $.ajax({
    //             type: "GET",
    //             dataType: "json",
    //             url: "/order-status",
    //             data: {
    //                 status: status,
    //                 order_id: order_id,
    //             },
    //             success: function (data) {
    //                 console.log("Success");
    //             },
    //         });
    //     });
    // });
    /*======== 18. END ORDERS STATUS ========*/

    // Dropify Image
    $(document).ready(function () {
        $(".dropify").dropify();
    });

    // Data Table
    $(document).ready(function () {
        $("#order-listing").dataTable();
    });
})(jQuery);
