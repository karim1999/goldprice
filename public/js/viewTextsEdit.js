$(function() {
    //add language box to page
    $('.addLang').on('click', function (e) {
        e.preventDefault();
       var selectedLanguage = $("#selectLanguage").val(),
           htmlLanguageValue;
       if(selectedLanguage === "arabic"){
           htmlLanguageValue = "العربية";
       }else if(selectedLanguage === "english") {
           htmlLanguageValue = "English";
       }else if(selectedLanguage === "france"){
           htmlLanguageValue = "Le français";
       }
       if($("#"+selectedLanguage)[0] === undefined) {
            $('.languages').append(`
                <div class="row">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center flat-card textareaContainer mb-4">
                        <div class="titleBar d-flex justify-content-between w-100">
                            <p class="language">${htmlLanguageValue}</p>
                            <button class="langDelete"><img src="images/delete%20icon.svg" alt="delete language icon"></button>
                        </div>
                        <textarea class="languageContent w-100 text-right" name="${selectedLanguage}" id="${selectedLanguage}"></textarea>
                    </div>
                </div>
            `);
           $('.modal').modal('toggle');
       } else {
           $('.modal').modal('toggle');
       }
    });
    //delete language box from page
    $(document).on('click', '.langDelete', function (e) {
        e.preventDefault();
        $(this).parent().parent().parent().remove();
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