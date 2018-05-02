$(document).ready(function () {
    var OSName = "Unknown OS";
    if (navigator.appVersion.indexOf("Win") != -1) OSName = "Windows";
    if (navigator.appVersion.indexOf("Mac") != -1) OSName = "MacOS";
    if (navigator.appVersion.indexOf("X11") != -1) OSName = "UNIX";
    if (navigator.appVersion.indexOf("Linux") != -1) OSName = "Linux";

    if (OSName == "Linux") {
        $(".linkdbcls").attr("href", "https://play.google.com/store/apps/details?id=com.eyesoccer.eyesoccer&hl=in");
        $(".linkdbcls").attr("target", "_blank");
    } else if (OSName == "MacOS") {
        $(".linkdbcls").attr('href', 'https://itunes.apple.com/us/app/eyesoccer-apps/id1345440798?ls=1&mt=8');
        $(".linkdbcls").attr("target", "_blank");
    } else {
        $(".dbcls").attr('href', '#');
        $(".dbcls").hide();
    }

    // Click on Point
    $(document).on("click", ".form_point", function (e) {
        e.preventDefault();

        var IDForm = $(this).attr('id');
        if ($(this).attr('id') == undefined) {
            var IDForm = $(this).attr('form');
        }

        // Input Set
        if ($(this).attr('vf') != undefined) {
            vf = $(this).attr('vf');
            to = $(this).attr('to');
            val = $(this).attr('val');

            $('.' + vf + ' .' + to).val(val);
            $('.' + to).val(val);
        }

        // CSS Select
        vb = $(this).attr('vb'); // Back to Normal
        vp = $(this).attr('vp'); // Set to Active
        $('.' + vb).each(function () {
            if ($(this).attr('active') == 'on') {
                $(this).removeAttr('active');
                $(this).removeClass(vp)
            }
        })
        $('#' + IDForm).attr('active', 'on');
        $('#' + IDForm).addClass(vp);

        // Set Default & Clean Next Attribut
        if ($(this).attr('clean') != undefined) {
            df = $(this).attr('df');
            vdf = JSON.parse($(df).attr('val'));
            $.each(vdf, function (v, n) {
                if (Object.prototype.toString.call(n) == '[object Object]') {
                    $.each(n, function (v1, n1) {
                        $('.' + v + ' .' + v1).html(n1);
                    })
                } else {
                    $('.' + v).html(n);
                }
            })

            cls = $(this).attr('clean');
            splitID = cls.split(",");
            if (Object.prototype.toString.call(splitID) == '[object Array]') {
                splitID.map(function (v) {
                    $('.' + v).each(function () {
                        if ($(this).attr('active') == 'on') {
                            $(this).removeAttr('active');
                            $(this).removeClass(vp)
                        }
                    })
                })
            } else {
                $('.' + cls).each(function () {
                    if ($(this).attr('active') == 'on') {
                        $(this).removeAttr('active');
                        $(this).removeClass(vp)
                    }
                })
            }
        }
    });

    // Get on Click
    $(document).on("click", ".form_get", function (e) {
        e.preventDefault();

        var cnt = 1;
        if ($(this).attr('confirm') != undefined) {
            if (confirm($(this).attr('confirm'))) {
                cnt = 1;
            } else {
                cnt = 0;
                return false;
            }
        }

        $('#boxmessage').fadeOut(200);
        if (cnt > 0) {
            $('.loading').show();
            box_popup();
        }

        var msgBox = $(this).attr('msg');
        var formURL = $(this).attr('action');
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        if (cnt > 0) ajaxReqGet(formURL, msgRequest);
    });

    // Post on Click
    $(document).on("click", ".form_post", function (e) {
        e.preventDefault();

        var IDForm = $(this).attr('id');
        if ($(this).attr('id') == undefined) {
            var IDForm = $(this).attr('form');
        }

        // Clean Next Attribut
        if ($(this).attr('clean') != undefined) {
            vp = $(this).attr('vp');
            cls = $(this).attr('clean');
            splitID = cls.split(",");
            if (Object.prototype.toString.call(splitID) == '[object Array]') {
                splitID.map(function (v) {
                    $('.' + v).each(function () {
                        if ($(this).attr('active') == 'on') {
                            $(this).removeAttr('active');
                            $(this).removeClass(vp)
                        }
                    })
                })
            } else {
                $('.' + cls).each(function () {
                    if ($(this).attr('active') == 'on') {
                        $(this).removeAttr('active');
                        $(this).removeClass(vp)
                    }
                })
            }

            $('#' + cls).remove();
        }

        // Input Set
        if ($(this).attr('vf') != undefined) {
            vf = $(this).attr('vf');
            to = $(this).attr('to');
            val = $(this).attr('val');

            $('.' + vf + ' .' + to).val(val);
            $('.' + to).val(val);
        }

        // CSS Select
        if ($(this).attr('point') == "true") {
            vb = $(this).attr('vb'); // Back to Normal
            vp = $(this).attr('vp'); // Set to Active
            $('.' + vb).each(function () {
                if ($(this).attr('active') == 'on') {
                    $(this).removeAttr('active');
                    $(this).removeClass(vp)
                }
            })
            $('#' + IDForm).attr('active', 'on');
            $('#' + IDForm).addClass(vp);
        }

        var msgBox = $(this).attr('msg');
        var actURL = $(this).attr('action');
        var baseURL = $('.baseurl').attr('val');

        var cnt = 1;
        if ($(this).attr('confirm') != undefined) {
            if (confirm($(this).attr('confirm'))) {
                cnt = 1;
            } else {
                cnt = 0;
                return false;
            }
        }

        $('#boxmessage').fadeOut(200);
        var loading = ($(this).attr('loading') == 'off') ? 0 : 1;
        if (loading > 0 && cnt > 0) {
            $('.loading').show();
            box_popup();
        }

        var ci = '';
        var val = [{name: 'val', value: true}];
        $('#' + IDForm + ' .cinput').each(function (i) {
            var nm = $(this).attr('name')
            var vl = ($(this).attr('val') !== undefined) ? $(this).attr('val') : $(this).val();
            val[i] = {name: nm, value: vl};
            ci = i;
        });

        if ($('#' + IDForm).attr('fn') !== undefined) {
            val[ci + 1] = {name: 'fn', value: $('#' + IDForm).attr('fn')};
        }

        var formURL = baseURL + actURL;
        var postData = val;
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        if ($('#' + IDForm).attr('wait') !== undefined) {
            var wait = $(this).data('wait');
            if (wait) clearTimeout(wait);

            wait = setTimeout(function () {
                ajaxReqBasic(formURL, postData, msgRequest);
            }, 500);

            $(this).data('wait', wait);
            return false;
        } else {
            if (cnt > 0) ajaxReqBasic(formURL, postData, msgRequest);
        }
    });

    // Post on Keyup
    $(document).on("keyup", ".form_keyup", function (e) {
        e.preventDefault();

        var msgBox = $(this).attr('msg');
        var actURL = $(this).attr('action');
        var baseURL = $('.baseurl').attr('val');

        var nm = $(this).attr('name')
        var val = [{name: 'fn', value: $(this).attr('fn')}, {name: nm, value: $(this).val()}];

        if ($(this).attr('dest') !== undefined) {
            val.push({name: 'dest', value: $(this).attr('dest')});
        }

        if ($(this).attr('id') !== undefined) {
            var IDForm = $(this).attr('id');
            $('#' + IDForm + ' .cinput').each(function (i) {
                var nm = $(this).attr('name');
                var vl = ($(this).attr('val') !== undefined) ? $(this).attr('val') : $(this).val();
                val.push({name: nm, value: vl});
            });
        }

        var formURL = baseURL + actURL;
        var postData = val;
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') === undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        var loading = ($(this).attr('loading') === 'off') ? 0 : 1;
        var enter = $(this).attr('enter');
        var wait = $(this).data('wait');
        if (wait) clearTimeout(wait);

        wait = setTimeout(function () {
            var en = 1;
            if (enter !== undefined) {
                en = (e.keyCode === 13) ? 1 : 0;
            }

            if (en > 0) {
                $('#boxmessage').fadeOut(200);
                if (loading > 0) {
                    $('.loading').show();
                    box_popup();
                }

                ajaxReqBasic(formURL, postData, msgRequest);
            }
        }, 500);

        $(this).data('wait', wait);
        return false;
    });

    // Post on Changes
    $(document).on("change", ".form_change", function (e) {
        e.preventDefault();

        var msgBox = $(this).attr('msg');
        var actURL = $(this).attr('action');
        var baseURL = $('.baseurl').attr('val');

        var nm = $(this).attr('name')
        var val = [{name: 'fn', value: $(this).attr('fn')}, {name: nm, value: $(this).val()}];

        if ($(this).attr('dest') !== undefined) {
            val.push({name: 'dest', value: $(this).attr('dest')});
        }

        if ($(this).attr('id') !== undefined) {
            var IDForm = $(this).attr('id');
            $('#' + IDForm + ' .cinput').each(function (i) {
                var nm = $(this).attr('name');
                var vl = ($(this).attr('val') !== undefined) ? $(this).attr('val') : $(this).val();
                val.push({name: nm, value: vl});
            });
        }

        var formURL = baseURL + actURL;
        var postData = val;
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') === undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        var loading = ($(this).attr('loading') === 'off') ? 0 : 1;
        var wait = $(this).data('wait');
        if (wait) clearTimeout(wait);

        wait = setTimeout(function () {
            $('#boxmessage').fadeOut(200);
            if (loading > 0) {
                $('.loading').show();
                box_popup();
            }

            ajaxReqBasic(formURL, postData, msgRequest);
        }, 500);

        $(this).data('wait', wait);
        return false;
    });

    // Basic
    $(document).on("submit", ".form_basic", function (e) {
        e.preventDefault();

        var cnt = 1;
        if ($(this).attr('confirm') != undefined) {
            if (confirm($(this).attr('confirm'))) {
                cnt = 1;
            } else {
                cnt = 0;
                return false;
            }
        }

        $('#boxmessage').fadeOut(200);
        if (cnt > 0) {
            $('.loading').show();
            box_popup();
        }

        $(this).append('<input type="hidden" name="val" value="true">');

        var formURL = $(this).attr('action');
        var postData = $(this).serializeArray();

        var msgBox = $(this).attr('msg');
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        if (cnt > 0) ajaxReqBasic(formURL, postData, msgRequest);
    });

    // Multipart
    $(document).on("submit", ".form_multi", function (e) {
        e.preventDefault();

        var cnt = 1;
        if ($(this).attr('confirm') != undefined) {
            if (confirm($(this).attr('confirm'))) {
                cnt = 1;
            } else {
                cnt = 0;
                return false;
            }
        }

        $('#boxmessage').fadeOut(200);
        if (cnt > 0) {
            $('.loading').show();
            box_popup();
        }

        $(this).append('<input type="hidden" name="val" value="true">');

        var formURL = $(this).attr('action');
        var postData = new FormData(this);

        var msgBox = $(this).attr('msg');
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        if (cnt > 0) ajaxReqMulti(formURL, postData, msgRequest);
    });

});

function box_popup() {
    $('#mask').remove();

    //Fade in the Popup
    $('.box_popup').fadeIn(300);

    //Set the center alignment padding + border see css style
    var popMargTop = ($('.box_popup').height() + 24) / 2;
    var popMargLeft = ($('.box_popup').width() + 24) / 2;

    $('.box_popup').css({
        'margin-top': -popMargTop,
        'margin-left': -popMargLeft
    });

    // Add the mask to body
    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);
}

function ajaxOnLoad(ax) {
    var IDForm = $('.' + ax).attr('id');
    if ($('.' + ax).attr('id') == undefined) {
        var IDForm = $('.' + ax).attr('form');
    }

    // Clean Next Attribut
    if ($('.' + ax).attr('clean') != undefined) {
        vp = $('.' + ax).attr('vp');
        cls = $('.' + ax).attr('clean');
        splitID = cls.split(",");
        if (Object.prototype.toString.call(splitID) == '[object Array]') {
            splitID.map(function (v) {
                $('.' + v).each(function () {
                    if ($(this).attr('active') == 'on') {
                        $(this).removeAttr('active');
                        $(this).removeClass(vp)
                    }
                })
            })
        } else {
            $('.' + cls).each(function () {
                if ($(this).attr('active') == 'on') {
                    $(this).removeAttr('active');
                    $(this).removeClass(vp)
                }
            })
        }

        $('#' + cls).remove();
    }

    // Input Set
    if ($('.' + ax).attr('vf') != undefined) {
        vf = $('.' + ax).attr('vf');
        to = $('.' + ax).attr('to');
        val = $('.' + ax).attr('val');

        $('.' + vf + ' .' + to).val(val);
        $('.' + to).val(val);
    }

    // CSS Select
    if ($('.' + ax).attr('point') == "true") {
        vb = $('.' + ax).attr('vb'); // Back to Normal
        vp = $('.' + ax).attr('vp'); // Set to Active
        $('.' + vb).each(function () {
            if ($(this).attr('active') == 'on') {
                $(this).removeAttr('active');
                $(this).removeClass(vp)
            }
        })
        $('#' + IDForm).attr('active', 'on');
        $('#' + IDForm).addClass(vp);
    }

    var msgBox = $('.' + ax).attr('msg');
    var actURL = $('.' + ax).attr('action');
    var baseURL = $('.baseurl').attr('val');

    $('#boxmessage').fadeOut(200);
    var loading = ($('.' + ax).attr('loading') == 'off') ? 0 : 1;
    if (loading > 0) {
        $('.loading').show();
        box_popup();
    }

    var ci = '';
    var val = [{name: 'val', value: true}];
    $('#' + IDForm + ' .cinput').each(function (i) {
        var nm = $(this).attr('name')
        var vl = ($(this).attr('val') !== undefined) ? $(this).attr('val') : $(this).val();
        val[i] = {name: nm, value: vl};
        ci = i;
    });

    if ($('#' + IDForm).attr('fn') !== undefined) {
        val[ci + 1] = {name: 'fn', value: $('#' + IDForm).attr('fn')};
    }

    var formURL = baseURL + actURL;
    var postData = val;
    var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

    if ($('#' + IDForm).attr('wait') !== undefined) {
        var wait = $(this).data('wait');
        if (wait) clearTimeout(wait);

        wait = setTimeout(function () {
            ajaxReqBasic(formURL, postData, msgRequest);
        }, 500);

        $(this).data('wait', wait);
        return false;
    } else {
        ajaxReqBasic(formURL, postData, msgRequest);
    }
}

function ajaxReqGet(formURL, msgRequest) {
    var request;
    if (request) {
        request.abort();
    }
    request = $.get(formURL);

    var fn = window[msgRequest];
    fn(request);

    return false;
}

function ajaxReqBasic(formURL, postData, msgRequest) {
    var scn = $('.sctoken').attr('name');
    var sch = $('.sctoken').attr('value');
    var sct = {name: scn, value: sch};

    cnPost = postData.concat(sct);

    var request;
    if (request) {
        request.abort();
    }
    request = $.post(formURL, cnPost);

    var fn = window[msgRequest];
    fn(request);

    return false;
}

function ajaxReqMulti(formURL, postData, msgRequest) {
    var request;
    if (request) {
        request.abort();
    }
    request = $.ajax({
        type: "post",
        url: formURL,
        data: postData,
        mimeType: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false
    });

    var fn = window[msgRequest];
    fn(request);

    return false;
}

function ajaxMessage(request) {
    request.done(function (msg) {
        if (Object.prototype.toString.call(msg) == '[object String]') {
            msg = JSON.parse(msg);
        }

        if (msg.xClear == undefined && msg.xCss == 'boxsuccess') {
            $('.cinput').val('');
        }

        $('#mask, .box_popup, .loading').fadeOut(300, function () {
            $('#mask').remove();
        });

        if (msg.xAlert == undefined && msg.xMsg != undefined) {
            $('#boxmessage').fadeIn(500).html("<div class='" + msg.xCss + "'>" + msg.xMsg + "</div>");
            $('body').animate({
                scrollTop: eval($('#boxmessage').offset().top - 999)
            }, 1000);
        }

        responseData(msg);
    });

    return false;
}

function ajaxMsgForm(request) {
    request.done(function (msg) {
        if (Object.prototype.toString.call(msg) == '[object String]') {
            msg = JSON.parse(msg);
        }

        if (msg.xClear == undefined && msg.xCss == 'boxsuccess') {
            $('.cinput').val('');
        }

        $('#mask, .box_popup, .loading').fadeOut(300, function () {
            $('#mask').remove();
        });

        if (msg.xAlert == undefined && msg.xMsg != undefined) {
            $('#boxmsgform').fadeIn(500).html("<div class='" + msg.xCss + "'>" + msg.xMsg + "</div>");
        }

        responseData(msg);
    });

    return false;
}

function ajaxMsgAcc(request) {
    request.done(function (msg) {
        if (Object.prototype.toString.call(msg) == '[object String]') {
            msg = JSON.parse(msg);
        }

        if (msg.xClear == undefined && msg.xCss == 'boxsuccess') {
            $('.cinput').val('');
        }

        $('#mask, .box_popup, .loading').fadeOut(300, function () {
            $('#mask').remove();
        });

        if (msg.xAlert == undefined && msg.xMsg != undefined) {
            $('#boxmsgacc').fadeIn(500).html("<div class='" + msg.xCss + "'>" + msg.xMsg + "</div>");
            $('body').animate({
                scrollTop: eval($('#boxmsgacc').offset().top - 999)
            }, 1000);
        }

        responseData(msg);
    });

    return false;
}

function responseData(msg) {
    $('.err').fadeOut('fast').html('');

    if (msg.xMsg != undefined) {
        xurl = $('.baseurl').attr('val');
        $('.rcapthca').html('<img src="' + xurl + 'request/captcha">');
    }

    if (msg.xAlert == undefined && msg.xDirect != undefined) {
        window.location = msg.xDirect;
    }

    if (msg.xAlert != undefined) {
        var sTitle = (msg.xCss == 'boxsuccess') ? 'Success' : 'Error';
        var sType = (msg.xCss == 'boxsuccess') ? 'success' : 'error';
        swal({
                title: sTitle,
                text: msg.xMsg,
                type: sType,
                closeOnConfirm: true,
                html: true
            },
            function () {
                if (msg.xDirect != undefined) {
                    window.location = msg.xDirect;
                }
            });
    }

    if (msg.xHtml != undefined) {
        if (msg.xAppend != undefined) {
            $('#' + msg.xClass + ' .loadhide').remove();
            $('#' + msg.xClass).append(msg.xHtml);
        } else {
            $('#' + msg.xClass).hide().fadeIn('medium').html(msg.xHtml);
        }
    }

    if (msg.xSplit != undefined) {
        $.each(msg.xData, function (v, n) {
            if (Object.prototype.toString.call(n) == '[object Object]') {
                $.each(n, function (v1, n1) {
                    $('.' + v + ' .' + v1).fadeIn('medium').html(n1);
                })
            } else {
                $('.' + v).fadeIn('medium').html(n);
            }
        })
    }

    if (msg.xHidden != undefined) {
        $.each(msg.xGone, function (v, n) {
            if (n !== undefined && n === 'visible') {
                $('.' + v).css('visible', '1');
                ;
            } else {
                $('.' + v).fadeOut('fast');
            }
        })
    }

    if (msg.xUrlhash != undefined) {
        urlUpdate(urlSplit(msg.xUrlhash));
    }
}

function ajaxMsgPopup(request) {
    request.done(function (msg) {
        $('.show_popup').attr("show", "active");
        $('.show_popup').html(msg.vHtml).show();
        box_popup();

        $('.loading').hide();
        box_popup();
    });
}

function urlSplit(urlx) {
    var split = urlx.split("/");
    var urlNew = '';
    var ux = 0;
    split.map(function (uri) {
        if (ux > 0) {
            urlNew = urlNew + '/' + uri;
        } else {
            urlNew = uri;
        }
        ux++;
    })

    return urlNew;
}

var urlHistory = '';
function urlUpdate(urlPath) {
    urlHistory = (history.state != null) ? history.state.url : '';
    history.pushState({url: "" + urlPath + ""}, "", urlPath);
}

function actChain(urlx, valx, showx, cleanx) {
    var baseURL = $('.baseurl').attr('val');
    var postData;

    var dataID;
    var splitID = valx.split("/");
    if (Object.prototype.toString.call(splitID) == '[object Array]') {
        var valData = [];
        splitID.forEach(function (val, i) {
            valData[i] = {name: val, value: $('#' + val).val()};

            if (i == splitID.length - 1) {
                dataID = val;
            }
        });

        var show = {name: 'show', value: showx};
        postData = valData.concat(show);
    }

    if (cleanx != undefined) {
        var splitClean = cleanx.split("/");
        if (Object.prototype.toString.call(splitClean) == '[object Array]') {
            splitClean.forEach(function (val) {
                var cl = 0;
                switch ($('#' + val)[0].nodeName) {
                    case 'INPUT':
                    case 'SELECT':
                    case 'TEXTAREA':
                        cl = 1;
                        break;
                }

                if (cl > 0) {
                    if ($('#' + val).val() != "") {
                        $('#' + val).val("");
                        $('#' + val).change();
                    }
                } else {
                    $('#' + val).html("");
                }
            });
        }
    }

    $('#boxmessage').fadeOut(200);
    if (urlx == false) {
        return false;
    }

    var loading = ($('#' + dataID).attr('loading') == undefined) ? 0 : 1;
    if (loading > 0) {
        $('.loading').show();
        box_popup();
    }

    var request;
    if (request) {
        request.abort();
    }
    request = $.post(baseURL + urlx, postData);

    ajaxMessage(request);

    return false;
}

function rmdata(val) {
    var cl = 0;
    switch ($('#' + val)[0].nodeName) {
        case 'INPUT':
        case 'SELECT':
        case 'TEXTAREA':
            cl = 1;
            break;
    }

    if (cl > 0) {
        if ($('#' + val).val() != "") {
            $('#' + val).val("");
            if (val == 'namafile') {
                $('.' + val).removeAttr('style');
            }
        }
    } else {
        $('#' + val).html("");
    }
}

function tabmenu(id, tagClick, tagShow, beforeClick, afterClick) {
    $('#boxtab ' + tagClick).each(function () {
        if ($(this).attr('active') === 'true') {
            var idx = $(this).attr('id');

            $(tagClick + '#' + idx).removeAttr('active');
            $(tagClick + '#' + idx).removeAttr('class');

            if (afterClick !== undefined) $(tagClick + '#' + idx).addClass(beforeClick);
            $(tagShow + '#' + idx).fadeOut(0);
        }
    });

    afterClick = (afterClick !== undefined) ? afterClick : beforeClick;
    $(tagClick + '#' + id).attr('active', 'true');
    $(tagClick + '#' + id).addClass(afterClick);

    $(tagShow + '#' + id).fadeIn('fast');
}

function tabflag(id) {
    $('#boxbutton ul li a').each(function () {
        if ($(this).attr('class') == 'flag-active') {
            var idx = $(this).attr('id');

            $('#' + idx).removeAttr('style');
            $('#' + idx).removeAttr('class');
            $('div#' + idx).fadeOut(0);

            var fltab = idx;
        }
    });

    $('#' + id).css('background', '#40435e');
    $('#' + id).attr('class', 'flag-active');
    $('div#' + id).fadeIn('fast');
}

function readPic(input, val, def) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            if (val == undefined) {
                if (input.files[0].type == 'image/png') {
                    $('.ffiles .zbox').append("<a href='javascript:void(0)' class='pos-abs delete' onclick='rmPic()'><i class='fa fa-trash fa-fw'></i></a>");
                    $('.ffiles .namafile').css({'display': 'block', 'background-image': 'url(' + e.target.result + ')'});
                } else {
                    swal({
                        title: "Error",
                        text: "File yang diupload harus bertipe *png",
                        type: "error",
                        timer: 5000
                    })
                }
            } else {
                var i = 0;
                $('.img-ds').each(function () {
                    i++;
                })

                if (i < 5) {
                    if (def == undefined) {
                        var imgready = $('.img-pic-' + val).attr('ready');
                        var imgval = val + 1;
                        var imgdef = $('.img-pic-' + val).attr('default');

                        if (imgready == undefined) {
                            $('.img-pic-' + val).attr('ready', true);
                            $('.img-pic-' + val + ' .zbox').append("<a href='javascript:void(0)' class='pos-abs delete' onclick='rmPic(" + val + ")'><i class='fa fa-trash fa-fw'></i></a>");
                            $('.img-pic-' + val + ' .zbox').append("<a href='javascript:void(0)' div class='zbox default' onclick='dfPic(" + val + ")'>Set as Default</a>");
                        }
                        $('.img-pic-' + val + ' .namafile').css({'display': 'block', 'background-image': 'url(' + e.target.result + ')'});

                        if (imgready == undefined) {
                            $('.img .design').append("<label class='col-lg-2 col-md-3 col-sm-3 col-xs-3 cl-pad-lr img-ds img-pic-" + imgval + "' default='" + imgdef + "' for='img-sh-" + imgval + "'>"
                                + "<div class='mg-lr-4'>"
                                + "<div class='zbox pos-rel mg-b-10'>"
                                + "<label class='pos-abs add' for='img-sh-" + imgval + "'><i class='fa fa-plus fa-fw'></i></label>"
                                + "<div class='pad-all-10'>"
                                + "<span class='lazy desain namafile' style='background-image: url(" + imgdef + ")'></span>"
                                + "</div>"
                                + "<input type='file' name='fupload[]' id='img-sh-" + imgval + "' onchange='readPic(this, " + imgval + ")' style='display: none'>"
                                + "</div>"
                                + "</div>"
                                + "</label>")
                        }
                    } else {
                        var imgready = $('.ff-pic-' + val).attr('ready');
                        var imgval = val + 1;
                        var imgdef = $('.ff-pic-' + val).attr('default');

                        if (imgready == undefined) {
                            $('.ff-pic-' + val).attr('ready', true);
                            $('.ff-pic-' + val + ' .zbox').append("<a href='javascript:void(0)' class='pos-abs delete' onclick='rmPic(" + val + ", true)'><i class='fa fa-trash fa-fw'></i></a>");
                        }
                        $('.ff-pic-' + val + ' .namafile').css({'display': 'block', 'background-image': 'url(' + e.target.result + ')'});

                        if (imgready == undefined) {
                            $('.img .original').append("<label class='col-lg-2 col-md-3 col-sm-3 col-xs-3 cl-pad-lr ff-ds ff-pic-" + imgval + "' default='" + imgdef + "' for='ff-sh-" + imgval + "'>"
                                + "<div class='mg-lr-4'>"
                                + "<div class='zbox pos-rel mg-b-10'>"
                                + "<label class='pos-abs add' for='ff-sh-" + imgval + "'><i class='fa fa-plus fa-fw'></i></label>"
                                + "<div class='pad-all-10'>"
                                + "<span class='lazy desain namafile' style='background-image: url(" + imgdef + ")'></span>"
                                + "</div>"
                                + "<input type='file' name='ffiles[]' id='ff-sh-" + imgval + "' onchange='readPic(this, " + imgval + ", true)' style='display: none'>"
                                + "</div>"
                                + "</div>"
                                + "</label>")
                        }
                    }
                } else {
                    swal({
                        title: "Error",
                        text: "Maximum file yang diupload hanya boleh 4 gambar",
                        type: "error",
                        timer: 5000
                    })
                }
            }
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function dfPic(val) {
    $('.img-ds').each(function (i) {
        var ds = $(this).attr('for');
        ds = ds.split('-');

        if (ds[2] == val) {
            $('.img-pic-' + ds[2] + ' .default').attr('id', 'active');
            $('#is_default').val(i);
        } else {
            $('.img-pic-' + ds[2] + ' .default').removeAttr('id');
        }
    })
}

function rmPic(val, def) {
    if (val == undefined) {
        var imgdef = $('.ffiles').attr('default');
        $('.ffiles .delete').remove();
        $('.ffiles .namafile').css({'display': 'block', 'background-image': 'url(' + imgdef + ')'});
    } else {
        if (def == undefined) {
            $('.img-pic-' + val).remove();
        } else {
            $('.ff-pic-' + val).remove();
        }
    }
}

function isMobile() {
    var a = navigator.userAgent || navigator.vendor || window.opera;
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|ipt)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) {
        return true;
    }
    ;
    return false;
}

function videoAction(xtitle, xurl, ximage, xtag) {
    xtag = (xtag) ? xtag : 'video-player';
    var video_url = xurl,
        poster_url = ximage,
        not_found = 'images/no-video.jpg',
        title = '',
        max_retry = 7,
        counter = 0,
        autoplay = false,
        player_type = 'html5',
        mobile = isMobile() ? 1 : 0;

    var player = jwplayer(xtag),
        lastP = 0,
        options = {
            image: poster_url,
            file: video_url,
            primary: player_type,
            autostart: autoplay,
            //type: "mp4",
            width: "100%",
            height: "220px", //window.innerHeight,
            startparam: "start",
            //aspectratio: "16:9",
            title: title,
            maxretry: max_retry
        };

    player.setup(options);
    var adapter = new playerjs.JWPlayerAdapter(jwplayer());

    jwplayer().onReady(function () {
        adapter.ready();
    });
}