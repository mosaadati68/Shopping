function addWishlist(productId) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    axios.get(route('wishlist.store', {_token: CSRF_TOKEN, id: productId}))
        .then(function (response) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "rtl": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            if (response.data.isLogin) {
                if (response.data.status) {
                    toastr.success(response.data.message)
                    $('#productlist').html(response.data.productlist);
                } else {
                    toastr.error(response.data.message)
                    $('#productlist').html(response.data.productlist);
                }
            } else {
                window.location.assign(route('login'));
            }
        });
}

function addToCart(productId) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    axios.get(route('cart.add', {_token: CSRF_TOKEN, id: productId}))
        .then(function (response) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "rtl": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success(response.data.message)
            $('#cartMenu').html(response.data.cartMenu);
            document.getElementById("cartCount").innerHTML = response.data.count;
        });
}

function updateCart(rowId) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var Qty = '#Qty_' + rowId;
    var qty = $(Qty).val();
    axios.post(route('cart.update', {_token: CSRF_TOKEN, rowId: rowId, qty: qty}))
        .then(function (response) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "rtl": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success(response.data.message)
            $('#cartMenu').html(response.data.cartMenu);
            $('#cart_content').html(response.data.cart);
        });
}

function removeItem(rowId) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    axios.post(route('cart.delete', {_token: CSRF_TOKEN, rowId: rowId}))
        .then(function (response) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "rtl": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success(response.data.message)
            $('#cartMenu').html(response.data.cartMenu);
            $('#cart_content').html(response.data.cart);
        });
}

function ratingProduct(rate, productId) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    axios.post(route('product.rating', {_token: CSRF_TOKEN, rate: rate, productId: productId}))
        .then(function (response) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "rtl": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            if (response.data.isLogin) {
                toastr.success(response.data.message)
                $('#productlist').html(response.data.productlist);
            } else {
                window.location.assign(route('login'));
            }
        });
}

function initMainSearchBar() {
    var overlay = $('.js-navi-overlay'),
        searchInput = $('.js-search-input'),
        searchResults = $('.js-search-results'),
        searchKeyword = $('.js-search-keyword'),
        searchKeywordLink = $('.js-search-keyword-link');

    // var search = function (val) {
    //     if (!!val && val.length > 0)
    //         window.location = '/search/?q=' + encodeURIComponent(val);
    // };

    // var ServicesAutoSuggest = $.extend(false, Services, {
    //     ajaxBeforeSendCallback: function (jqXHR, settings) {
    //         settings.duplicateUrl = '/ajax/autosuggest/';
    //     }
    // });

    var self = this;
    self.lastSearch = '';
    self.lastSearchResponse = null;
    self.lastFocusedItem = -1;

    searchInput.off();

    searchInput.on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });

    searchResults.on('click', function (e) {
        e.stopPropagation();
    });

    searchInput.on("focus click", function (e) {

        var trendsList = $('.js-trends-results');

        if ($(this).val().trim().length === 0) {
            suggestionList
                .show();
            resultList
                .show();
        }
        //
        // if (!!$(this).val() && $(this).val().length) {
        //     searchInput.trigger(jQuery.Event('keyup'));
        //     return;
        // }
        //
        // function showTrends(trends_result) {
        //
        //     trendsList.empty();
        //
        //     $.map(trends_result, function (element) {
        //         trendsList.append('<li><a  href="' + element.url + '">' + element.label + '</a></li>');
        //     });
        //
        //
        //     searchResults.addClass('is-active').parent('.js-search').addClass('is-active');
        //     overlay.addClass('is-active');
        //     overlay.on('click', function () {
        //         overlay.removeClass('is-active');
        //         searchResults.removeClass('is-active').parent('.js-search').removeClass('is-active');
        //     });
        //     $(".js-autosuggest-empty-list").hide();
        //     $(".js-trends-results").addClass("no-border").show().parent().show();
        // }
        //
        // if (!!self.trends && self.trends.length > 0) {
        //     showTrends(self.trends);
        //     return;
        // }
        //
        // ServicesAutoSuggest.ajaxGETRequestJSON(
        //     '/ajax/autosuggest/',
        //     {
        //         'q': ''
        //     },
        //     function (data) {
        //         if (!!data && "trends_result" in data) {
        //             if (data.trends_result.length > 0) {
        //                 self.trends = data.trends_result;
        //                 showTrends(data.trends_result);
        //             }
        //             else {
        //                 trendsList.hide().parent().hide();
        //             }
        //         }
        //     },
        //     null, null, null, 'execute');
    });

    $('.js-header-search-button, .js-search-keyword-link').on('click', function () {
        var e = jQuery.Event("keyup");
        e.which = 13;
        e.keyCode = 13;
        searchInput.trigger(e);
    });

    $(document).click(function () {
        searchResults.removeClass('is-active').parent('.js-search').removeClass('is-active');
        overlay.removeClass('is-active');
    });


    var resultList = $('.js-autosuggest-results-list'),
        suggestionList = $('.js-results-list'),
        trendsList = $('.js-trends-results'),
        emptyList = $('.js-autosuggest-empty-list');
    var up = 38, down = 40, esc = 27, ent = 13;

    searchInput.on('keyup', function (e) {
        var processResponse = function (data) {
            self.lastSearch = data.query;
            self.lastSearchResponse = data;
            self.lastFocusedItem = -1;
            trendsList.hide().parent().hide();

            if ("auto_complete" in data && "search_result" in data && "advance_links" in data) {
                if (data.auto_complete.length === 0 && data.search_result.length === 0 && data.advance_links.length === 0) {
                    suggestionList
                        .hide()
                        .empty();
                    resultList
                        .hide()
                        .empty();
                    emptyList.show();
                } else {
                    if (data.auto_complete.length > 0)
                        suggestionList
                            .empty()
                            .show();
                    if (data.search_result.length > 0 || data.advance_links.length > 0)
                        resultList
                            .empty()
                            .show();

                    emptyList.hide();

                    $.map(data.search_result, function (element) {
                        resultList.append('<li><a href="' + element.url + '"><span class="c-search__result-item">' + element.label + ' </span><span class="c-search__result-item--category">' + element.category_name + '</span></a></li>');
                    });

                    $.map(data.advance_links, function (element) {
                        resultList.append('<li><a href="' + element.url + '"><span class="c-search__result-item">' + element.title_prefix + ' </span><span class="c-search__result-item--category">' + element.title + '</span></a></li>');
                    });

                    $.map(data.auto_complete, function (element) {
                        suggestionList.append('<li><a href="' + element.url + '">' + element.label + '</a></li>');
                    });
                }
            }
            else {
                suggestionList
                    .hide()
                    .empty();
                resultList
                    .hide()
                    .empty();
            }

            if ("trends_result" in data && data.trends_result.length > 0) {
                self.trends = data.trends_result;
            }
        };

        var key = e.which;

        if (key === up || key === down || key === esc) return;

        if (key === ent) {
            if (val = $(this).val()) {
                search(val);
            }
        } else {
            var searchInputValue = $(this).val();
            var searchInputValueL = searchInputValue.length;
            searchKeyword.text(searchInputValue);
            searchKeywordLink.attr('href', '/search/?q=' + searchInputValue);
            if (searchInputValueL > 1) {
                if (searchResults.not('.is-active')) {
                    searchResults.addClass('is-active').parent('.js-search').addClass('is-active');
                    overlay.addClass('is-active');
                }
                if (self.lastSearch === searchInputValue && !!self.lastSearchResponse)
                    return processResponse(self.lastSearchResponse);

                ServicesAutoSuggest.ajaxGETRequestJSON(
                    '/ajax/autosuggest/',
                    {
                        'q': searchInputValue
                    },
                    processResponse
                    ,
                    null, null, null,
                    'execute'
                );
            } else {
                searchResults.removeClass('is-active').parent('.js-search').removeClass('is-active');
                $('.js-autosuggest-results-list')
                    .hide()
                    .empty();
                overlay.removeClass('is-active');
            }
        }
    });

    searchInput.on('keydown', function (e) {
        var key = e.which;

        if ([up, down, ent].indexOf(key) === -1) return;

        e.preventDefault();
        e.stopPropagation();

        var lists = resultList.find('li').add(suggestionList.find('li'));

        if (key === ent && lists.filter('.is-hover').length > 0) {
            searchInput.off('keyup');
            return window.location.href = lists.filter('.is-hover').find('a').attr('href');
        } else if (key === ent) {
            return;
        }

        if (key === up || key === down) lists.removeClass('is-hover');

        var shouldGoTo = self.lastFocusedItem;

        if (key === up) {
            shouldGoTo = shouldGoTo - 1;
            if (shouldGoTo < 0) shouldGoTo = lists.length - 1;
        } else if (key === down) {
            shouldGoTo = (shouldGoTo + 1) % lists.length;
        }

        self.lastFocusedItem = shouldGoTo;

        var focusedItem = lists.eq(shouldGoTo);
        focusedItem.addClass('is-hover');
        searchInput.val(focusedItem.parent().is(suggestionList) ? focusedItem.find('a').text() : searchKeyword.text());
    });
}
$(function () {
    initMainSearchBar();
});