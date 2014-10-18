jQuery(document).ready(function() {
    var foo = jQuery('#DateTicketEn');

    function updateTime() {
        var now = new Date();
        foo.val(now.toString());
    }

    updateTime();
    setInterval(updateTime, 1000); // 5 * 1000 miliseconds
});