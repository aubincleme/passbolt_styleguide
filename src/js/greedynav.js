/**
 * GreedyNav.js, Passbolt edition
 *
 * @licence Licensed under the MIT license - http://opensource.org/licenses/MIT
 * @copyright (c) 2015 Luke Jackson, (c) 2019 Passbolt SA
 * @source https://github.com/lukejacksonn/GreedyNav
 */
$(function() {

    var $btn = $('nav.greedy button');
    var $vlinks = $('nav.greedy .links');
    var $hlinks = $('nav.greedy .hidden-links');

    var numOfItems = 0;
    var totalSpace = 0;
    var closingTime = 2000;
    var breakWidths = [];

    // Get initial state
    $vlinks.children().outerWidth(function(i, w) {
        totalSpace += w;
        numOfItems += 1;
        breakWidths.push(totalSpace);
    });

    var availableSpace, numOfVisibleItems, requiredSpace, timer;

    function check() {

        // Get instant state
        availableSpace = $vlinks.width() - 10;
        numOfVisibleItems = $vlinks.children().length;
        requiredSpace = breakWidths[numOfVisibleItems - 1];

        // There is not enought space
        if (requiredSpace > availableSpace) {
            $vlinks.children().last().prependTo($hlinks);
            numOfVisibleItems -= 1;
            check();
            // There is more than enough space
        } else if (availableSpace > breakWidths[numOfVisibleItems]) {
            $hlinks.children().first().appendTo($vlinks);
            numOfVisibleItems += 1;
            check();
        }
        // Update the button accordingly
        $btn.attr("count", numOfItems - numOfVisibleItems);
        if (numOfVisibleItems === numOfItems) {
            $btn.addClass('hidden');
        } else $btn.removeClass('hidden');
    }

    // Window listeners
    $(window).resize(function() {
        check();
    });

    $btn.on('click', function() {
        $hlinks.toggleClass('hidden');
        clearTimeout(timer);
    });

    $hlinks.on('mouseleave', function() {
        // Mouse has left, start the timer
        timer = setTimeout(function() {
            $hlinks.addClass('hidden');
        }, closingTime);
    }).on('mouseenter', function() {
        // Mouse is back, cancel the timer
        clearTimeout(timer);
    });

    // close when clicking somewhere else
    $('body').click(function(e) {
        if($(e.target).closest('nav.greedy').length === 0) {
            $hlinks.addClass('hidden');
        }
    });

    check();

});