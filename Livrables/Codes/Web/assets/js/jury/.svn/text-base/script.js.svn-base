/**
 * Created by Francois on 31/03/15.
 */
$(document).ready(function() {
    $('.scrollspy').scrollSpy();

    $('.dropdown-button').dropdown({hover: false});
    $('.button-collapse').sideNav();
    $('.modal-trigger').leanModal();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    $('.materialboxed').materialbox();
    $('ul.tabs').tabs();
    $('select').material_select();


    function is_touch_device() {
        try {
            document.createEvent("TouchEvent");
            return true;
        } catch (e) {
            return false;
        }
    }
    if (is_touch_device()) {
        $('#nav-mobile').css({ overflow: 'auto'})
    }



});