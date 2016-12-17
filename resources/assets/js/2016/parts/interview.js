
Interview = {
    init: function (show) {
        if (show) {
            Interview.nextStep();
            Interview.nextTitle();
        }
        $(document).on('click', '.next-step', function () {
            var valid = validateVisible();
            if (!valid) {
                return false;
            }
            Interview.nextStep();
        });
        $(document).on('click', '.prev-step', function () {
            Interview.prevStep();
        });
        $(document).on('click', '.show-step', function () {
            Interview.showStep($(this).data('step-target'));
        });
    },
    nextTitle: function () {
        var showing = $('.step-title:visible');
        showing.hide();
        showing.next('.step-title').css('display', 'block').addClass('slideInLeft');
    },
    nextStep: function () {
        var showing = $('.step:visible');
        showing.hide();
        showing.next('.step').css('display', 'block').addClass('slideInLeft');
    },
    prevStep: function () {
        var showing = $('.step:visible');
        showing.hide();
        showing.prev('.step').css('display', 'block').addClass('slideInLeft');
    },
    showStep: function (index) {
        var showing = $('.step:visible');
        showing.hide();
        $('.step:eq(' + index + ')').css('display', 'block').addClass('slideInLeft');
    }
};