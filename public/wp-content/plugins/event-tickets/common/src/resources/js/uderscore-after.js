(function() {
    if (window._lodash_tmp !== false && typeof window._lodash_tmp === 'function') {
        window.underscore = _.noConflict();
        window._ = window._lodash_tmp;
    }
}
)();
