$(document).ready(function() {

// Toggle play/pause button
$('#play-button').on('click', function() {
  $(this).toggleClass('fa-play fa-pause');
});

// Rearrange Tracks
$('#timeline-column').sortable({ items: ".track", handle: '.track-handle' });
$('.move-track-button').click(function() {
    var btn = $(this);
    var val = (this.dataset.direction);
    if (val == 'up')
        moveUp(btn.parents('.track'));
    else
        moveDown(btn.parents('.track'));
});

// Move track up
function moveUp(item) {
    var prev = item.prev();
    if (prev.length == 0)
        return;
    prev.css('z-index', 999).css('position','relative').animate({ top: item.height() }, 250);
    item.css('z-index', 1000).css('position', 'relative').animate({ top: '-' + prev.height() }, 300, function () {
        prev.css('z-index', '').css('top', '').css('position', '');
        item.css('z-index', '').css('top', '').css('position', '');
        item.insertBefore(prev);
    });
}

// Move track down
function moveDown(item) {
    var next = item.next();
    if (next.length == 0)
        return;
    next.css('z-index', 999).css('position', 'relative').animate({ top: '-' + item.height() }, 250);
    item.css('z-index', 1000).css('position', 'relative').animate({ top: next.height() }, 300, function () {
        next.css('z-index', '').css('top', '').css('position', '');
        item.css('z-index', '').css('top', '').css('position', '');
        item.insertAfter(next);
    });
}


});
