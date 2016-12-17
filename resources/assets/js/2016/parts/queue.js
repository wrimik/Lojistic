function queue(start) {
    var rest = [].splice.call(arguments, 1),
        promise = $.Deferred();

    if (start) {
        $.when(start()).then(function () {
            queue.apply(window, rest);
        });
    } else {
        promise.resolve();
    }
    return promise;
}