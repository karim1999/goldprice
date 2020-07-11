$(function() {
    $(".addImageBtn").on('click', function (e) {
        e.preventDefault();
        var inputId = $(this).attr('id');
        $("#real"+inputId).click();
    });
    $(document).on('click', '.add', function (e) {
        e.preventDefault();
        var inputId = $(this).siblings('.addImageBtn').attr("id");
        $("#real"+inputId).click();
    });

    $(".image").change(function () {
        if (this.files && this.files[0]) {
            let reader = new FileReader(),
                divId = $(this).attr("id")[$(this).attr("id").length-1];
            reader.onload = function (e) {
                $('#'+divId).children("img").attr('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
            $('#'+divId).siblings('.addImageLink').removeClass("add");
            $('#'+divId).siblings('.addImageLink').addClass("deleteImg").text("حذف شعار");
        }
    });

    $(document).on('click', '.deleteImg', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'هل انت متأكد من حذف الشعار؟',
            text: "سيتم حذف الشعار نهائياً",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'نعم,قم بالحذف!',
            cancelButtonText: 'لا'
        }).then((result) => {
            if (result.value) {
                //ajax request will be here
                $(this).removeClass('deleteImg');
                var inputId = "real" + $(this).siblings('.addImageBtn').attr("id");
                $("#"+inputId).val('');
                $(this).addClass("add");
                $(this).siblings('.addImageBtn').children("img").attr("src", 'images/addPic icon.svg');
                $(this).text("رفع صورة");
                Swal.fire(
                    'تم الحذف!',
                    'تم حذف الشعار نهائياً',
                    'success'
                )
            }
        });
    });
});