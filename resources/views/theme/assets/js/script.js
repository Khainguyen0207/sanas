'use strict'

$(document).ready(function () {
    $('.login-btn').on('click', function (e) {
        const toggle = $(e.currentTarget).find('[data-bs-toggle="toggle-password"]');
        const target = toggle.data('bb-target');
        const passwordField = $(`[data-bb-toggle="${target}"]`);

        if (passwordField.attr('type') === 'password') {
            passwordField.attr('type', 'text');
            toggle.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            toggle.removeClass('fa-eye-slash').addClass('fa-eye');
            passwordField.attr('type', 'password');
        }
    });

    // Header scroll behavior
    let currentScrollY = 0;
    let previousScrollY = 0;
    const header = $('header nav');
    const scrollThreshold = 50;

    $(window).on('scroll', function () {
        currentScrollY = window.scrollY;

        if (Math.abs(currentScrollY - previousScrollY) > scrollThreshold) {
            if (currentScrollY > previousScrollY) {
                header.hide();
            } else {
                header.show();
            }
            previousScrollY = currentScrollY;
        }
    });

    $('form[data-bb-toggle="register-form-toggle"]').on('submit', function (e) {
        e.preventDefault()
        const $form = $(e.currentTarget)

        $.ajax({
            url: $form.action,
            method: 'POST',
            data: $form.serialize(),
            success: function (response) {
                $('#validation').append(showSuccess(response.message, 0));

                setTimeout(function () {
                    window.location.href = response.nextUrl
                }, 500)
            },
            error: function (res) {
                const errors = res.responseJSON.errors;
                let toastID = 0;
                Object.entries(errors).forEach(([field, messages]) => {
                    $('#validation').append(showError(messages[0], toastID));
                })
            }
        })

    })
});

$(document).ready(function () {
    function showMessage(message) {
        let messageBox = $('#messageBox');
        if (messageBox.length === 0) {
            messageBox = $('<div>', {
                id: 'messageBox', css: {
                    position: 'fixed',
                    top: '20px',
                    left: '50%',
                    transform: 'translateX(-50%)',
                    backgroundColor: '#f8d7da',
                    color: '#721c24',
                    padding: '10px 20px',
                    borderRadius: '5px',
                    border: '1px solid #f5c6cb',
                    zIndex: '1000',
                    display: 'none'
                }
            }).appendTo('body');
        }
        messageBox.text(message).show();
        setTimeout(() => {
            messageBox.hide();
        }, 3000);
    }

    window.toggleGuestBox = function () {
        const guestBox = $('#guestBox');
        guestBox.toggle();
        updateGuestSummary();
    };

    window.changeValue = function (type, delta) {
        const element = $(`#${type}`);
        let value = parseInt(element.text());

        value = Math.max(0, value + delta);

        if (type === 'rooms') {
            const adults = parseInt($('#adults').text());
            if (value > adults) {
                showMessage("Số phòng không được vượt quá số người lớn!");
                return;
            }
        }

        if (type === 'children') {
            if (value > 10) {
                showMessage("Tối đa 10 trẻ em!");
                return;
            }
        }

        element.text(value);
        updateGuestSummary();
        updateChildrenAgeInputs();
    };

    window.updateGuestSummary = function () {
        const adults = $('#adults').text();
        const children = $('#children').text();
        const rooms = $('#rooms').text();
        $('#guestSummary').text(`${adults} Người lớn, ${children} Trẻ em, ${rooms} Phòng`);
    };

    window.updateChildrenAgeInputs = function () {
        const children = parseInt($('#children').text());
        const container = $('#childrenAges');

        container.empty();

        if (children >= 1) {
            for (let i = 1; i <= children; i++) {
                $('<input>', {
                    type: 'number', min: '0', max: '17', placeholder: `Tuổi trẻ em ${i}`, class: 'child-age-input'
                }).appendTo(container);
            }
        }
    };

    const promoContainer = $('.promo-container');

    let isDown = false;
    let startX;
    let scrollLeft;

    promoContainer.on('mousedown', function (e) {
        isDown = true;
        $(this).addClass('active');
        startX = e.pageX - $(this).offset().left;
        scrollLeft = $(this).scrollLeft();
    });

    promoContainer.on('mouseleave mouseup', function () {
        isDown = false;
        $(this).removeClass('active');
    });

    promoContainer.on('mousemove', function (e) {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - $(this).offset().left;
        const walk = (x - startX) * 1.5;
        $(this).scrollLeft(scrollLeft - walk);
    });

    // Initial updates when the document loads
    updateGuestSummary();
    updateChildrenAgeInputs();
});

function showError(message, toastID) {
    return `
         <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive"
             aria-atomic="true" id="error-${toastID}">
            <div class="d-flex">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
            </div>
        </div>
        <script>
            setTimeout(function () {
                $('#error-${toastID}').remove()
            }, 3000)
        </script>
    `
}

function showSuccess(message, toastID) {
    return `
         <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive"
             aria-atomic="true" id="success-${toastID}">
            <div class="d-flex">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
            </div>
        </div>
        <script>
            setTimeout(function () {
                $('#success-${toastID}').remove()
            }, 3000)
        </script>
    `
}

