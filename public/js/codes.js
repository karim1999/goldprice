$(function() {
    //add new field
    $('.addLang').on('click', function (e) {
        e.preventDefault();
        let codeName = $("#code-name").val(),
            codeValue = $("#code").val();
        if(codeName !== "" && codeValue !== "") {
            $(".inputFields").append(`
                <div class="col-md-6 col-sm-12 mb-4">
                    <h4 class="inner-title d-flex">${codeName}</h4>
                    <input type="text" name="facebook" name="${codeName}" class="form-control" autocomplete="off" value="${codeValue}">
                </div>
            `);

            $("#code-name").val("");
            $("#code").val("");
            $("#code-name").css("border", "1px solid #E6E6EB");
            $("#code").css("border", "1px solid #E6E6EB");
            $("small").remove();
            $('.modal').modal('toggle');
        }

        if(codeName === "") {
            if($("#code-name").siblings("small").length <= 0) {
                $("#code-name").parent().append(`<small class="text-danger">يجب ادخال الأسم</small>`);
                $("#code-name").css("border", "1px solid #FF7979");
            }
        }

        if(codeValue === "") {
            if($("#code").siblings("small").length <= 0) {
                $("#code").parent().append(`<small class="text-danger">يجب ادخال الكود</small>`);
                $("#code").css("border", "1px solid #FF7979");
            }
        }
    });
    //empty all form confirmation
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
                Swal.fire(
                    'تم التفريغ!',
                    'تم تفريغ جميع حقول الأدخال',
                    'success'
                )
            }
        });
    });
});