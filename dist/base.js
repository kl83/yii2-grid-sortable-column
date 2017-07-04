jQuery(function($){
    $('.grid-view.sortable tbody').sortable({
        axis: "y",
        containment: '.grid-view.sortable',
        handle: '.sortable-cell',
        stop: function(e, ui){
            var grid = ui.item.closest('.grid-view');
            var prev = ui.item.prev();
            var next = ui.item.next();
            grid.trigger('sortablecolumn-sort', {
                itemId: ui.item.data('key'),
                prevId: prev.length ? prev.data('key') : false,
                nextId: next.length ? next.data('key') : false
            });
        }
    });
});
