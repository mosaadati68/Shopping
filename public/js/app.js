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

function myMap() {
    var position = new google.maps.LatLng(36.293290, 59.591735);
    var mapProp = {
        center: position,
        zoom: 15,
    };
    var map = new google.maps.Map(document.getElementById("map-container"), mapProp);
    marker = new google.maps.Marker({
        position: position,
        title: 'فروشگاه اینترنتی همه چی کالا',
        map: map
    });
}
