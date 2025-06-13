
'use strict'

function generateForm(formData, formId) {

    console.log(formData)
    // Tìm form element theo ID
    const $form = $('#' + formId);

    // Kiểm tra nếu form không tồn tại
    if ($form.length === 0) {
        console.error('Form với ID "' + formId + '" không tồn tại');
        return;
    }

    // Duyệt qua từng key trong formData
    $.each(formData, function(key, value) {
        // Tìm element có name hoặc id trùng với key
        let $element = $form.find('[name="' + key + '"]');
        if ($element.length === 0) {
            $element = $form.find('#' + key);
        }

        // Nếu tìm thấy element thì set value
        if ($element.length > 0) {
            const tagName = $element.prop('tagName').toLowerCase();
            const inputType = $element.attr('type');

            if (tagName === 'input') {
                if (inputType === 'checkbox') {
                    // Xử lý checkbox
                    if (Array.isArray(value)) {
                        // Nếu value là array, check các checkbox có value trong array
                        $element.each(function() {
                            $(this).prop('checked', value.includes($(this).val()));
                        });
                    } else {
                        // Nếu value là boolean hoặc string
                        $element.prop('checked', value == true || value == $element.val());
                    }
                } else if (inputType === 'radio') {
                    // Xử lý radio button
                    $form.find('[name="' + key + '"][value="' + value + '"]').prop('checked', true);
                } else {
                    // Xử lý input thường (text, email, password, number, date, etc.)
                    $element.val(value);
                }
            } else if (tagName === 'select') {
                // Xử lý select
                if ($element.prop('multiple') && Array.isArray(value)) {
                    // Select multiple
                    $element.val(value);
                } else {
                    // Select single
                    $element.val(value);
                }
            } else if (tagName === 'textarea') {
                // Xử lý textarea
                $element.val(value);
            }
        }
    });
}
