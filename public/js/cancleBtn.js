$(function() {
    $(".cancel").on('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'هل انت متأكد من الألغاء؟',
            text: "سيتم تفريغ جميع حقول الأدخال",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'نعم,قم بالحذف!',
            cancelButtonText: 'لا'
        }).then((result) => {
            if (result.value) {
                $("input").val("");
                $("textarea").val("");
                Swal.fire(
                    'تم التفريغ!',
                    'تم تفريغ جميع حقول الأدخال',
                    'success'
                )
            }
        });
    });
});