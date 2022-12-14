! function(a, b) {
    "object" == typeof exports ? module.exports = b() : "function" == typeof define && define.amd && define("GMaps", [], b), a.GMaps = b()
}(this, function() {
    if ("object" != typeof window.google || !window.google.maps) throw "Google Maps API is required. Please register the following JavaScript library http://maps.google.com/maps/api/js?sensor=true.";
    var a = function(a, b) {
            var c;
            if (a === b) return a;
            for (c in b) a[c] = b[c];
            return a
        },
        c = function(a, b) {
            var f, c = Array.prototype.slice.call(arguments, 2),
                d = [],
                e = a.length;
            if (Array.prototype.map && a.map === Array.prototype.map) d = Array.prototype.map.call(a, function(a) {
                return callback_params = c, callback_params.splice(0, 0, a), b.apply(this, callback_params)
            });
            else
                for (f = 0; f < e; f++) callback_params = c, callback_params.splice(0, 0, a[f]), d.push(b.apply(this, callback_params));
            return d
        },
        d = function(a) {
            var c, b = [];
            for (c = 0; c < a.length; c++) b = b.concat(a[c]);
            return b
        },
        f = function(a, b) {
            var c = a[0],
                d = a[1];
            return b && (c = a[1], d = a[0]), new google.maps.LatLng(c, d)
        },
        g = function(a, b) {
            var c;
            for (c = 0; c < a.length; c++) a[c].length > 0 && "object" == typeof a[c][0] ? a[c] = g(a[c], b) : a[c] = f(a[c], b);
            return a
        },
        h = function(a, b) {
            var c, a = a.replace("#", "");
            return c = "jQuery" in this && b ? $("#" + a, b)[0] : document.getElementById(a)
        },
        i = function(a) {
            var b = 0,
                c = 0;
            if (a.offsetParent)
                do b += a.offsetLeft, c += a.offsetTop; while (a = a.offsetParent);
            return [b, c]
        },
        j = function(b) {
            "use strict";
            var c = document,
                d = function(b) {
                    if (!this) return new d(b);
                    b.zoom = b.zoom || 15, b.mapType = b.mapType || "roadmap";
                    var f, e = this,
                        g = ["bounds_changed", "center_changed", "click", "dblclick", "drag", "dragend", "dragstart", "idle", "maptypeid_changed", "projection_changed", "resize", "tilesloaded", "zoom_changed"],
                        j = ["mousemove", "mouseout", "mouseover"],
                        k = ["el", "lat", "lng", "mapType", "width", "height", "markerClusterer", "enableNewStyle"],
                        l = b.el || b.div,
                        m = b.markerClusterer,
                        n = google.maps.MapTypeId[b.mapType.toUpperCase()],
                        o = new google.maps.LatLng(b.lat, b.lng),
                        p = b.zoomControl || !0,
                        q = b.zoomControlOpt || {
                            style: "DEFAULT",
                            position: "TOP_LEFT"
                        },
                        r = q.style || "DEFAULT",
                        s = q.position || "TOP_LEFT",
                        t = b.panControl || !0,
                        u = b.mapTypeControl || !0,
                        v = b.scaleControl || !0,
                        w = b.streetViewControl || !0,
                        x = x || !0,
                        y = {},
                        z = {
                            zoom: this.zoom,
                            center: o,
                            mapTypeId: n
                        },
                        A = {
                            panControl: t,
                            zoomControl: p,
                            zoomControlOptions: {
                                style: google.maps.ZoomControlStyle[r],
                                position: google.maps.ControlPosition[s]
                            },
                            mapTypeControl: u,
                            scaleControl: v,
                            streetViewControl: w,
                            overviewMapControl: x
                        };
                    if ("string" == typeof b.el || "string" == typeof b.div ? this.el = h(l, b.context) : this.el = l, "undefined" == typeof this.el || null === this.el) throw "No element defined.";
                    for (window.context_menu = window.context_menu || {}, window.context_menu[e.el.id] = {}, this.controls = [], this.overlays = [], this.layers = [], this.singleLayers = {}, this.markers = [], this.polylines = [], this.routes = [], this.polygons = [], this.infoWindow = null, this.overlay_el = null, this.zoom = b.zoom, this.registered_events = {}, this.el.style.width = b.width || this.el.scrollWidth || this.el.offsetWidth, this.el.style.height = b.height || this.el.scrollHeight || this.el.offsetHeight, google.maps.visualRefresh = b.enableNewStyle, f = 0; f < k.length; f++) delete b[k[f]];
                    for (1 != b.disableDefaultUI && (z = a(z, A)), y = a(z, b), f = 0; f < g.length; f++) delete y[g[f]];
                    for (f = 0; f < j.length; f++) delete y[j[f]];
                    this.map = new google.maps.Map(this.el, y), m && (this.markerClusterer = m.apply(this, [this.map]));
                    var B = function(a, b) {
                        var c = "",
                            d = window.context_menu[e.el.id][a];
                        for (var f in d)
                            if (d.hasOwnProperty(f)) {
                                var g = d[f];
                                c += '<li><a id="' + a + "_" + f + '" href="#">' + g.title + "</a></li>"
                            }
                        if (h("gmaps_context_menu")) {
                            var j = h("gmaps_context_menu");
                            j.innerHTML = c;
                            var k = j.getElementsByTagName("a"),
                                l = k.length;
                            for (f = 0; f < l; f++) {
                                var m = k[f],
                                    n = function(c) {
                                        c.preventDefault(), d[this.id.replace(a + "_", "")].action.apply(e, [b]), e.hideContextMenu()
                                    };
                                google.maps.event.clearListeners(m, "click"), google.maps.event.addDomListenerOnce(m, "click", n, !1)
                            }
                            var o = i.apply(this, [e.el]),
                                p = o[0] + b.pixel.x - 15,
                                q = o[1] + b.pixel.y - 15;
                            j.style.left = p + "px", j.style.top = q + "px", j.style.display = "block"
                        }
                    };
                    this.buildContextMenu = function(a, b) {
                        if ("marker" === a) {
                            b.pixel = {};
                            var c = new google.maps.OverlayView;
                            c.setMap(e.map), c.draw = function() {
                                var d = c.getProjection(),
                                    e = b.marker.getPosition();
                                b.pixel = d.fromLatLngToContainerPixel(e), B(a, b)
                            }
                        } else B(a, b)
                    }, this.setContextMenu = function(a) {
                        window.context_menu[e.el.id][a.control] = {};
                        var b, d = c.createElement("ul");
                        for (b in a.options)
                            if (a.options.hasOwnProperty(b)) {
                                var f = a.options[b];
                                window.context_menu[e.el.id][a.control][f.name] = {
                                    title: f.title,
                                    action: f.action
                                }
                            }
                        d.id = "gmaps_context_menu", d.style.display = "none", d.style.position = "absolute", d.style.minWidth = "100px", d.style.background = "white", d.style.listStyle = "none", d.style.padding = "8px", d.style.boxShadow = "2px 2px 6px #ccc", c.body.appendChild(d);
                        var g = h("gmaps_context_menu");
                        google.maps.event.addDomListener(g, "mouseout", function(a) {
                            a.relatedTarget && this.contains(a.relatedTarget) || window.setTimeout(function() {
                                g.style.display = "none"
                            }, 400)
                        }, !1)
                    }, this.hideContextMenu = function() {
                        var a = h("gmaps_context_menu");
                        a && (a.style.display = "none")
                    };
                    for (var C = function(a, c) {
                            google.maps.event.addListener(a, c, function(a) {
                                void 0 == a && (a = this), b[c].apply(this, [a]), e.hideContextMenu()
                            })
                        }, D = 0; D < g.length; D++) {
                        var E = g[D];
                        E in b && C(this.map, E)
                    }
                    for (var D = 0; D < j.length; D++) {
                        var E = j[D];
                        E in b && C(this.map, E)
                    }
                    google.maps.event.addListener(this.map, "rightclick", function(a) {
                        b.rightclick && b.rightclick.apply(this, [a]), void 0 != window.context_menu[e.el.id].map && e.buildContextMenu("map", a)
                    }), this.refresh = function() {
                        google.maps.event.trigger(this.map, "resize")
                    }, this.fitZoom = function() {
                        var c, a = [],
                            b = this.markers.length;
                        for (c = 0; c < b; c++) "boolean" == typeof this.markers[c].visible && this.markers[c].visible && a.push(this.markers[c].getPosition());
                        this.fitLatLngBounds(a)
                    }, this.fitLatLngBounds = function(a) {
                        for (var b = a.length, c = new google.maps.LatLngBounds, d = 0; d < b; d++) c.extend(a[d]);
                        this.map.fitBounds(c)
                    }, this.setCenter = function(a, b, c) {
                        this.map.panTo(new google.maps.LatLng(a, b)), c && c()
                    }, this.getElement = function() {
                        return this.el
                    }, this.zoomIn = function(a) {
                        a = a || 1, this.zoom = this.map.getZoom() + a, this.map.setZoom(this.zoom)
                    }, this.zoomOut = function(a) {
                        a = a || 1, this.zoom = this.map.getZoom() - a, this.map.setZoom(this.zoom)
                    };
                    var G, F = [];
                    for (G in this.map) "function" != typeof this.map[G] || this[G] || F.push(G);
                    for (f = 0; f < F.length; f++) ! function(a, b, c) {
                        a[c] = function() {
                            return b[c].apply(b, arguments)
                        }
                    }(this, this.map, F[f])
                };
            return d
        }(this);
    j.prototype.createControl = function(a) {
        var b = document.createElement("div");
        b.style.cursor = "pointer", b.style.fontFamily = "Arial, sans-serif", b.style.fontSize = "13px", b.style.boxShadow = "rgba(0, 0, 0, 0.398438) 0px 2px 4px";
        for (var c in a.style) b.style[c] = a.style[c];
        a.id && (b.id = a.id), a.classes && (b.className = a.classes), a.content && (b.innerHTML = a.content);
        for (var d in a.events) ! function(b, c) {
            google.maps.event.addDomListener(b, c, function() {
                a.events[c].apply(this, [this])
            })
        }(b, d);
        return b.index = 1, b
    }, j.prototype.addControl = function(a) {
        var b = google.maps.ControlPosition[a.position.toUpperCase()];
        delete a.position;
        var c = this.createControl(a);
        return this.controls.push(c), this.map.controls[b].push(c), c
    }, j.prototype.createMarker = function(b) {
        if (void 0 == b.lat && void 0 == b.lng && void 0 == b.position) throw "No latitude or longitude defined.";
        var c = this,
            d = b.details,
            e = b.fences,
            f = b.outside,
            g = {
                position: new google.maps.LatLng(b.lat, b.lng),
                map: null
            };
        delete b.lat, delete b.lng, delete b.fences, delete b.outside;
        var h = a(g, b),
            i = new google.maps.Marker(h);
        if (i.fences = e, b.infoWindow) {
            i.infoWindow = new google.maps.InfoWindow(b.infoWindow);
            for (var j = ["closeclick", "content_changed", "domready", "position_changed", "zindex_changed"], k = 0; k < j.length; k++) ! function(a, c) {
                b.infoWindow[c] && google.maps.event.addListener(a, c, function(a) {
                    b.infoWindow[c].apply(this, [a])
                })
            }(i.infoWindow, j[k])
        }
        for (var l = ["animation_changed", "clickable_changed", "cursor_changed", "draggable_changed", "flat_changed", "icon_changed", "position_changed", "shadow_changed", "shape_changed", "title_changed", "visible_changed", "zindex_changed"], m = ["dblclick", "drag", "dragend", "dragstart", "mousedown", "mouseout", "mouseover", "mouseup"], k = 0; k < l.length; k++) ! function(a, c) {
            b[c] && google.maps.event.addListener(a, c, function() {
                b[c].apply(this, [this])
            })
        }(i, l[k]);
        for (var k = 0; k < m.length; k++) ! function(a, c, d) {
            b[d] && google.maps.event.addListener(c, d, function(c) {
                c.pixel || (c.pixel = a.getProjection().fromLatLngToPoint(c.latLng)), b[d].apply(this, [c])
            })
        }(this.map, i, m[k]);
        return google.maps.event.addListener(i, "click", function() {
            this.details = d, b.click && b.click.apply(this, [this]), i.infoWindow && (c.hideInfoWindows(), i.infoWindow.open(c.map, i))
        }), google.maps.event.addListener(i, "rightclick", function(a) {
            a.marker = this, b.rightclick && b.rightclick.apply(this, [a]), void 0 != window.context_menu[c.el.id].marker && c.buildContextMenu("marker", a)
        }), i.fences && google.maps.event.addListener(i, "dragend", function() {
            c.checkMarkerGeofence(i, function(a, b) {
                f(a, b)
            })
        }), i
    }, j.prototype.addMarker = function(a) {
        var b;
        if (a.hasOwnProperty("gm_accessors_")) b = a;
        else {
            if (!(a.hasOwnProperty("lat") && a.hasOwnProperty("lng") || a.position)) throw "No latitude or longitude defined.";
            b = this.createMarker(a)
        }
        return b.setMap(this.map), this.markerClusterer && this.markerClusterer.addMarker(b), this.markers.push(b), j.fire("marker_added", b, this), b
    }, j.prototype.addMarkers = function(a) {
        for (var c, b = 0; c = a[b]; b++) this.addMarker(c);
        return this.markers
    }, j.prototype.hideInfoWindows = function() {
        for (var b, a = 0; b = this.markers[a]; a++) b.infoWindow && b.infoWindow.close()
    }, j.prototype.removeMarker = function(a) {
        for (var b = 0; b < this.markers.length; b++)
            if (this.markers[b] === a) {
                this.markers[b].setMap(null), this.markers.splice(b, 1), this.markerClusterer && this.markerClusterer.removeMarker(a), j.fire("marker_removed", a, this);
                break
            }
        return a
    }, j.prototype.removeMarkers = function(a) {
        for (var a = a || this.markers, b = 0; b < this.markers.length; b++) this.markers[b] === a[b] && this.markers[b].setMap(null);
        for (var c = [], b = 0; b < this.markers.length; b++) null != this.markers[b].getMap() && c.push(this.markers[b]);
        this.markers = c
    }, j.prototype.drawOverlay = function(a) {
        var b = new google.maps.OverlayView,
            c = !0;
        return b.setMap(this.map), null != a.auto_show && (c = a.auto_show), b.onAdd = function() {
            var c = document.createElement("div");
            c.style.borderStyle = "none", c.style.borderWidth = "0px", c.style.position = "absolute", c.style.zIndex = 100, c.innerHTML = a.content, b.el = c, a.layer || (a.layer = "overlayLayer");
            var d = this.getPanes(),
                e = d[a.layer],
                f = ["contextmenu", "DOMMouseScroll", "dblclick", "mousedown"];
            e.appendChild(c);
            for (var g = 0; g < f.length; g++) ! function(a, b) {
                google.maps.event.addDomListener(a, b, function(a) {
                    navigator.userAgent.toLowerCase().indexOf("msie") != -1 && document.all ? (a.cancelBubble = !0, a.returnValue = !1) : a.stopPropagation()
                })
            }(c, f[g]);
            google.maps.event.trigger(this, "ready")
        }, b.draw = function() {
            var d = this.getProjection(),
                e = d.fromLatLngToDivPixel(new google.maps.LatLng(a.lat, a.lng));
            a.horizontalOffset = a.horizontalOffset || 0, a.verticalOffset = a.verticalOffset || 0;
            var f = b.el,
                g = f.children[0],
                h = g.clientHeight,
                i = g.clientWidth;
            switch (a.verticalAlign) {
                case "top":
                    f.style.top = e.y - h + a.verticalOffset + "px";
                    break;
                default:
                case "middle":
                    f.style.top = e.y - h / 2 + a.verticalOffset + "px";
                    break;
                case "bottom":
                    f.style.top = e.y + a.verticalOffset + "px"
            }
            switch (a.horizontalAlign) {
                case "left":
                    f.style.left = e.x - i + a.horizontalOffset + "px";
                    break;
                default:
                case "center":
                    f.style.left = e.x - i / 2 + a.horizontalOffset + "px";
                    break;
                case "right":
                    f.style.left = e.x + a.horizontalOffset + "px"
            }
            f.style.display = c ? "block" : "none", c || a.show.apply(this, [f])
        }, b.onRemove = function() {
            var c = b.el;
            a.remove ? a.remove.apply(this, [c]) : (b.el.parentNode.removeChild(b.el), b.el = null)
        }, this.overlays.push(b), b
    }, j.prototype.removeOverlay = function(a) {
        for (var b = 0; b < this.overlays.length; b++)
            if (this.overlays[b] === a) {
                this.overlays[b].setMap(null), this.overlays.splice(b, 1);
                break
            }
    }, j.prototype.removeOverlays = function() {
        for (var b, a = 0; b = this.overlays[a]; a++) b.setMap(null);
        this.overlays = []
    }, j.prototype.drawPolyline = function(a) {
        var b = [],
            c = a.path;
        if (c.length)
            if (void 0 === c[0][0]) b = c;
            else
                for (var e, d = 0; e = c[d]; d++) b.push(new google.maps.LatLng(e[0], e[1]));
        var f = {
            map: this.map,
            path: b,
            strokeColor: a.strokeColor,
            strokeOpacity: a.strokeOpacity,
            strokeWeight: a.strokeWeight,
            geodesic: a.geodesic,
            clickable: !0,
            editable: !1,
            visible: !0
        };
        a.hasOwnProperty("clickable") && (f.clickable = a.clickable), a.hasOwnProperty("editable") && (f.editable = a.editable), a.hasOwnProperty("icons") && (f.icons = a.icons), a.hasOwnProperty("zIndex") && (f.zIndex = a.zIndex);
        for (var g = new google.maps.Polyline(f), h = ["click", "dblclick", "mousedown", "mousemove", "mouseout", "mouseover", "mouseup", "rightclick"], i = 0; i < h.length; i++) ! function(b, c) {
            a[c] && google.maps.event.addListener(b, c, function(b) {
                a[c].apply(this, [b])
            })
        }(g, h[i]);
        return this.polylines.push(g), j.fire("polyline_added", g, this), g
    }, j.prototype.removePolyline = function(a) {
        for (var b = 0; b < this.polylines.length; b++)
            if (this.polylines[b] === a) {
                this.polylines[b].setMap(null), this.polylines.splice(b, 1), j.fire("polyline_removed", a, this);
                break
            }
    }, j.prototype.removePolylines = function() {
        for (var b, a = 0; b = this.polylines[a]; a++) b.setMap(null);
        this.polylines = []
    }, j.prototype.drawCircle = function(b) {
        b = a({
            map: this.map,
            center: new google.maps.LatLng(b.lat, b.lng)
        }, b), delete b.lat, delete b.lng;
        for (var c = new google.maps.Circle(b), d = ["click", "dblclick", "mousedown", "mousemove", "mouseout", "mouseover", "mouseup", "rightclick"], e = 0; e < d.length; e++) ! function(a, c) {
            b[c] && google.maps.event.addListener(a, c, function(a) {
                b[c].apply(this, [a])
            })
        }(c, d[e]);
        return this.polygons.push(c), c
    }, j.prototype.drawRectangle = function(b) {
        b = a({
            map: this.map
        }, b);
        var c = new google.maps.LatLngBounds(new google.maps.LatLng(b.bounds[0][0], b.bounds[0][1]), new google.maps.LatLng(b.bounds[1][0], b.bounds[1][1]));
        b.bounds = c;
        for (var d = new google.maps.Rectangle(b), e = ["click", "dblclick", "mousedown", "mousemove", "mouseout", "mouseover", "mouseup", "rightclick"], f = 0; f < e.length; f++) ! function(a, c) {
            b[c] && google.maps.event.addListener(a, c, function(a) {
                b[c].apply(this, [a])
            })
        }(d, e[f]);
        return this.polygons.push(d), d
    }, j.prototype.drawPolygon = function(b) {
        var e = !1;
        b.hasOwnProperty("useGeoJSON") && (e = b.useGeoJSON), delete b.useGeoJSON, b = a({
            map: this.map
        }, b), 0 == e && (b.paths = [b.paths.slice(0)]), b.paths.length > 0 && b.paths[0].length > 0 && (b.paths = d(c(b.paths, g, e)));
        for (var f = new google.maps.Polygon(b), h = ["click", "dblclick", "mousedown", "mousemove", "mouseout", "mouseover", "mouseup", "rightclick"], i = 0; i < h.length; i++) ! function(a, c) {
            b[c] && google.maps.event.addListener(a, c, function(a) {
                b[c].apply(this, [a])
            })
        }(f, h[i]);
        return this.polygons.push(f), j.fire("polygon_added", f, this), f
    }, j.prototype.removePolygon = function(a) {
        for (var b = 0; b < this.polygons.length; b++)
            if (this.polygons[b] === a) {
                this.polygons[b].setMap(null), this.polygons.splice(b, 1), j.fire("polygon_removed", a, this);
                break
            }
    }, j.prototype.removePolygons = function() {
        for (var b, a = 0; b = this.polygons[a]; a++) b.setMap(null);
        this.polygons = []
    }, j.prototype.getFromFusionTables = function(a) {
        var b = a.events;
        delete a.events;
        var c = a,
            d = new google.maps.FusionTablesLayer(c);
        for (var e in b) ! function(a, c) {
            google.maps.event.addListener(a, c, function(a) {
                b[c].apply(this, [a])
            })
        }(d, e);
        return this.layers.push(d), d
    }, j.prototype.loadFromFusionTables = function(a) {
        var b = this.getFromFusionTables(a);
        return b.setMap(this.map), b
    }, j.prototype.getFromKML = function(a) {
        var b = a.url,
            c = a.events;
        delete a.url, delete a.events;
        var d = a,
            e = new google.maps.KmlLayer(b, d);
        for (var f in c) ! function(a, b) {
            google.maps.event.addListener(a, b, function(a) {
                c[b].apply(this, [a])
            })
        }(e, f);
        return this.layers.push(e), e
    }, j.prototype.loadFromKML = function(a) {
        var b = this.getFromKML(a);
        return b.setMap(this.map), b
    }, j.prototype.addLayer = function(a, b) {
        b = b || {};
        var c;
        switch (a) {
            case "weather":
                this.singleLayers.weather = c = new google.maps.weather.WeatherLayer;
                break;
            case "clouds":
                this.singleLayers.clouds = c = new google.maps.weather.CloudLayer;
                break;
            case "traffic":
                this.singleLayers.traffic = c = new google.maps.TrafficLayer;
                break;
            case "transit":
                this.singleLayers.transit = c = new google.maps.TransitLayer;
                break;
            case "bicycling":
                this.singleLayers.bicycling = c = new google.maps.BicyclingLayer;
                break;
            case "panoramio":
                this.singleLayers.panoramio = c = new google.maps.panoramio.PanoramioLayer, c.setTag(b.filter), delete b.filter, b.click && google.maps.event.addListener(c, "click", function(a) {
                    b.click(a), delete b.click
                });
                break;
            case "places":
                if (this.singleLayers.places = c = new google.maps.places.PlacesService(this.map), b.search || b.nearbySearch) {
                    var d = {
                        bounds: b.bounds || null,
                        keyword: b.keyword || null,
                        location: b.location || null,
                        name: b.name || null,
                        radius: b.radius || null,
                        rankBy: b.rankBy || null,
                        types: b.types || null
                    };
                    b.search && c.search(d, b.search), b.nearbySearch && c.nearbySearch(d, b.nearbySearch)
                }
                if (b.textSearch) {
                    var e = {
                        bounds: b.bounds || null,
                        location: b.location || null,
                        query: b.query || null,
                        radius: b.radius || null
                    };
                    c.textSearch(e, b.textSearch)
                }
        }
        if (void 0 !== c) return "function" == typeof c.setOptions && c.setOptions(b), "function" == typeof c.setMap && c.setMap(this.map), c
    }, j.prototype.removeLayer = function(a) {
        if ("string" == typeof a && void 0 !== this.singleLayers[a]) this.singleLayers[a].setMap(null), delete this.singleLayers[a];
        else
            for (var b = 0; b < this.layers.length; b++)
                if (this.layers[b] === a) {
                    this.layers[b].setMap(null), this.layers.splice(b, 1);
                    break
                }
    };
    var k, l;
    return j.prototype.getRoutes = function(b) {
        switch (b.travelMode) {
            case "bicycling":
                k = google.maps.TravelMode.BICYCLING;
                break;
            case "transit":
                k = google.maps.TravelMode.TRANSIT;
                break;
            case "driving":
                k = google.maps.TravelMode.DRIVING;
                break;
            default:
                k = google.maps.TravelMode.WALKING
        }
        l = "imperial" === b.unitSystem ? google.maps.UnitSystem.IMPERIAL : google.maps.UnitSystem.METRIC;
        var c = {
                avoidHighways: !1,
                avoidTolls: !1,
                optimizeWaypoints: !1,
                waypoints: []
            },
            d = a(c, b);
        d.origin = /string/.test(typeof b.origin) ? b.origin : new google.maps.LatLng(b.origin[0], b.origin[1]), d.destination = /string/.test(typeof b.destination) ? b.destination : new google.maps.LatLng(b.destination[0], b.destination[1]), d.travelMode = k, d.unitSystem = l, delete d.callback, delete d.error;
        var e = this,
            f = new google.maps.DirectionsService;
        f.route(d, function(a, c) {
            if (c === google.maps.DirectionsStatus.OK) {
                for (var d in a.routes) a.routes.hasOwnProperty(d) && e.routes.push(a.routes[d]);
                b.callback && b.callback(e.routes)
            } else b.error && b.error(a, c)
        })
    }, j.prototype.removeRoutes = function() {
        this.routes = []
    }, j.prototype.getElevations = function(b) {
        b = a({
            locations: [],
            path: !1,
            samples: 256
        }, b), b.locations.length > 0 && b.locations[0].length > 0 && (b.locations = d(c([b.locations], g, !1)));
        var e = b.callback;
        delete b.callback;
        var f = new google.maps.ElevationService;
        if (b.path) {
            var h = {
                path: b.locations,
                samples: b.samples
            };
            f.getElevationAlongPath(h, function(a, b) {
                e && "function" == typeof e && e(a, b)
            })
        } else delete b.path, delete b.samples, f.getElevationForLocations(b, function(a, b) {
            e && "function" == typeof e && e(a, b)
        })
    }, j.prototype.cleanRoute = j.prototype.removePolylines, j.prototype.drawRoute = function(a) {
        var b = this;
        this.getRoutes({
            origin: a.origin,
            destination: a.destination,
            travelMode: a.travelMode,
            waypoints: a.waypoints,
            unitSystem: a.unitSystem,
            error: a.error,
            callback: function(c) {
                c.length > 0 && (b.drawPolyline({
                    path: c[c.length - 1].overview_path,
                    strokeColor: a.strokeColor,
                    strokeOpacity: a.strokeOpacity,
                    strokeWeight: a.strokeWeight
                }), a.callback && a.callback(c[c.length - 1]))
            }
        })
    }, j.prototype.travelRoute = function(a) {
        if (a.origin && a.destination) this.getRoutes({
            origin: a.origin,
            destination: a.destination,
            travelMode: a.travelMode,
            waypoints: a.waypoints,
            error: a.error,
            callback: function(b) {
                if (b.length > 0 && a.start && a.start(b[b.length - 1]), b.length > 0 && a.step) {
                    var c = b[b.length - 1];
                    if (c.legs.length > 0)
                        for (var f, d = c.legs[0].steps, e = 0; f = d[e]; e++) f.step_number = e, a.step(f, c.legs[0].steps.length - 1)
                }
                b.length > 0 && a.end && a.end(b[b.length - 1])
            }
        });
        else if (a.route && a.route.legs.length > 0)
            for (var d, b = a.route.legs[0].steps, c = 0; d = b[c]; c++) d.step_number = c, a.step(d)
    }, j.prototype.drawSteppedRoute = function(a) {
        var b = this;
        if (a.origin && a.destination) this.getRoutes({
            origin: a.origin,
            destination: a.destination,
            travelMode: a.travelMode,
            waypoints: a.waypoints,
            error: a.error,
            callback: function(c) {
                if (c.length > 0 && a.start && a.start(c[c.length - 1]), c.length > 0 && a.step) {
                    var d = c[c.length - 1];
                    if (d.legs.length > 0)
                        for (var g, e = d.legs[0].steps, f = 0; g = e[f]; f++) g.step_number = f, b.drawPolyline({
                            path: g.path,
                            strokeColor: a.strokeColor,
                            strokeOpacity: a.strokeOpacity,
                            strokeWeight: a.strokeWeight
                        }), a.step(g, d.legs[0].steps.length - 1)
                }
                c.length > 0 && a.end && a.end(c[c.length - 1])
            }
        });
        else if (a.route && a.route.legs.length > 0)
            for (var e, c = a.route.legs[0].steps, d = 0; e = c[d]; d++) e.step_number = d, b.drawPolyline({
                path: e.path,
                strokeColor: a.strokeColor,
                strokeOpacity: a.strokeOpacity,
                strokeWeight: a.strokeWeight
            }), a.step(e)
    }, j.Route = function(a) {
        this.origin = a.origin, this.destination = a.destination, this.waypoints = a.waypoints, this.map = a.map, this.route = a.route, this.step_count = 0, this.steps = this.route.legs[0].steps, this.steps_length = this.steps.length, this.polyline = this.map.drawPolyline({
            path: new google.maps.MVCArray,
            strokeColor: a.strokeColor,
            strokeOpacity: a.strokeOpacity,
            strokeWeight: a.strokeWeight
        }).getPath()
    }, j.Route.prototype.getRoute = function(a) {
        var b = this;
        this.map.getRoutes({
            origin: this.origin,
            destination: this.destination,
            travelMode: a.travelMode,
            waypoints: this.waypoints || [],
            error: a.error,
            callback: function() {
                b.route = e[0], a.callback && a.callback.call(b)
            }
        })
    }, j.Route.prototype.back = function() {
        if (this.step_count > 0) {
            this.step_count--;
            var a = this.route.legs[0].steps[this.step_count].path;
            for (var b in a) a.hasOwnProperty(b) && this.polyline.pop()
        }
    }, j.Route.prototype.forward = function() {
        if (this.step_count < this.steps_length) {
            var a = this.route.legs[0].steps[this.step_count].path;
            for (var b in a) a.hasOwnProperty(b) && this.polyline.push(a[b]);
            this.step_count++
        }
    }, j.prototype.checkGeofence = function(a, b, c) {
        return c.containsLatLng(new google.maps.LatLng(a, b))
    }, j.prototype.checkMarkerGeofence = function(a, b) {
        if (a.fences)
            for (var d, c = 0; d = a.fences[c]; c++) {
                var e = a.getPosition();
                this.checkGeofence(e.lat(), e.lng(), d) || b(a, d)
            }
    }, j.prototype.toImage = function(a) {
        var a = a || {},
            b = {};
        if (b.size = a.size || [this.el.clientWidth, this.el.clientHeight], b.lat = this.getCenter().lat(), b.lng = this.getCenter().lng(), this.markers.length > 0) {
            b.markers = [];
            for (var c = 0; c < this.markers.length; c++) b.markers.push({
                lat: this.markers[c].getPosition().lat(),
                lng: this.markers[c].getPosition().lng()
            })
        }
        if (this.polylines.length > 0) {
            var d = this.polylines[0];
            b.polyline = {}, b.polyline.path = google.maps.geometry.encoding.encodePath(d.getPath()), b.polyline.strokeColor = d.strokeColor, b.polyline.strokeOpacity = d.strokeOpacity, b.polyline.strokeWeight = d.strokeWeight
        }
        return j.staticMapURL(b)
    }, j.staticMapURL = function(a) {
        function t(a, b) {
            if ("#" === a[0] && (a = a.replace("#", "0x"), b)) {
                if (b = parseFloat(b), b = Math.min(1, Math.max(b, 0)), 0 === b) return "0x00000000";
                b = (255 * b).toString(16), 1 === b.length && (b += b), a = a.slice(0, 8) + b
            }
            return a
        }
        var c, b = [],
            d = "http://maps.googleapis.com/maps/api/staticmap";
        a.url && (d = a.url, delete a.url), d += "?";
        var e = a.markers;
        delete a.markers, !e && a.marker && (e = [a.marker], delete a.marker);
        var f = a.styles;
        delete a.styles;
        var g = a.polyline;
        if (delete a.polyline, a.center) b.push("center=" + a.center), delete a.center;
        else if (a.address) b.push("center=" + a.address), delete a.address;
        else if (a.lat) b.push(["center=", a.lat, ",", a.lng].join("")), delete a.lat, delete a.lng;
        else if (a.visible) {
            var h = encodeURI(a.visible.join("|"));
            b.push("visible=" + h)
        }
        var i = a.size;
        i ? (i.join && (i = i.join("x")), delete a.size) : i = "630x300", b.push("size=" + i), a.zoom || a.zoom === !1 || (a.zoom = 15);
        var j = !a.hasOwnProperty("sensor") || !!a.sensor;
        delete a.sensor, b.push("sensor=" + j);
        for (var k in a) a.hasOwnProperty(k) && b.push(k + "=" + a[k]);
        if (e)
            for (var l, m, n = 0; c = e[n]; n++) {
                l = [], c.size && "normal" !== c.size ? (l.push("size:" + c.size), delete c.size) : c.icon && (l.push("icon:" + encodeURI(c.icon)), delete c.icon), c.color && (l.push("color:" + c.color.replace("#", "0x")), delete c.color), c.label && (l.push("label:" + c.label[0].toUpperCase()), delete c.label), m = c.address ? c.address : c.lat + "," + c.lng, delete c.address, delete c.lat, delete c.lng;
                for (var k in c) c.hasOwnProperty(k) && l.push(k + ":" + c[k]);
                l.length || 0 === n ? (l.push(m), l = l.join("|"), b.push("markers=" + encodeURI(l))) : (l = b.pop() + encodeURI("|" + m), b.push(l))
            }
        if (f)
            for (var n = 0; n < f.length; n++) {
                var o = [];
                f[n].featureType && "all" != f[n].featureType && o.push("feature:" + f[n].featureType), f[n].elementType && "all" != f[n].elementType && o.push("element:" + f[n].elementType);
                for (var p = 0; p < f[n].stylers.length; p++)
                    for (var q in f[n].stylers[p]) {
                        var r = f[n].stylers[p][q];
                        "hue" != q && "color" != q || (r = "0x" + r.substring(1)), o.push(q + ":" + r)
                    }
                var s = o.join("|");
                "" != s && b.push("style=" + s)
            }
        if (g) {
            if (c = g, g = [], c.strokeWeight && g.push("weight:" + parseInt(c.strokeWeight, 10)), c.strokeColor) {
                var u = t(c.strokeColor, c.strokeOpacity);
                g.push("color:" + u)
            }
            if (c.fillColor) {
                var v = t(c.fillColor, c.fillOpacity);
                g.push("fillcolor:" + v)
            }
            var w = c.path;
            if (w.join)
                for (var x, p = 0; x = w[p]; p++) g.push(x.join(","));
            else g.push("enc:" + w);
            g = g.join("|"), b.push("path=" + encodeURI(g))
        }
        var y = window.devicePixelRatio || 1;
        return b.push("scale=" + y), b = b.join("&"), d + b
    }, j.prototype.addMapType = function(a, b) {
        if (!b.hasOwnProperty("getTileUrl") || "function" != typeof b.getTileUrl) throw "'getTileUrl' function required.";
        b.tileSize = b.tileSize || new google.maps.Size(256, 256);
        var c = new google.maps.ImageMapType(b);
        this.map.mapTypes.set(a, c)
    }, j.prototype.addOverlayMapType = function(a) {
        if (!a.hasOwnProperty("getTile") || "function" != typeof a.getTile) throw "'getTile' function required.";
        var b = a.index;
        delete a.index, this.map.overlayMapTypes.insertAt(b, a)
    }, j.prototype.removeOverlayMapType = function(a) {
        this.map.overlayMapTypes.removeAt(a)
    }, j.prototype.addStyle = function(a) {
        var b = new google.maps.StyledMapType(a.styles, {
            name: a.styledMapName
        });
        this.map.mapTypes.set(a.mapTypeId, b)
    }, j.prototype.setStyle = function(a) {
        this.map.setMapTypeId(a)
    }, j.prototype.createPanorama = function(a) {
        return a.hasOwnProperty("lat") && a.hasOwnProperty("lng") || (a.lat = this.getCenter().lat(), a.lng = this.getCenter().lng()), this.panorama = j.createPanorama(a), this.map.setStreetView(this.panorama), this.panorama
    }, j.createPanorama = function(b) {
        var c = h(b.el, b.context);
        b.position = new google.maps.LatLng(b.lat, b.lng), delete b.el, delete b.context, delete b.lat, delete b.lng;
        for (var d = ["closeclick", "links_changed", "pano_changed", "position_changed", "pov_changed", "resize", "visible_changed"], e = a({
                visible: !0
            }, b), f = 0; f < d.length; f++) delete e[d[f]];
        for (var g = new google.maps.StreetViewPanorama(c, e), f = 0; f < d.length; f++) ! function(a, c) {
            b[c] && google.maps.event.addListener(a, c, function() {
                b[c].apply(this)
            })
        }(g, d[f]);
        return g
    }, j.prototype.on = function(a, b) {
        return j.on(a, this, b)
    }, j.prototype.off = function(a) {
        j.off(a, this)
    }, j.custom_events = ["marker_added", "marker_removed", "polyline_added", "polyline_removed", "polygon_added", "polygon_removed", "geolocated", "geolocation_failed"], j.on = function(a, b, c) {
        if (j.custom_events.indexOf(a) == -1) return google.maps.event.addListener(b, a, c);
        var d = {
            handler: c,
            eventName: a
        };
        return b.registered_events[a] = b.registered_events[a] || [], b.registered_events[a].push(d), d
    }, j.off = function(a, b) {
        j.custom_events.indexOf(a) == -1 ? google.maps.event.clearListeners(b, a) : b.registered_events[a] = []
    }, j.fire = function(a, b, c) {
        if (j.custom_events.indexOf(a) == -1) google.maps.event.trigger(b, a, Array.prototype.slice.apply(arguments).slice(2));
        else if (a in c.registered_events)
            for (var d = c.registered_events[a], e = 0; e < d.length; e++) ! function(a, b, c) {
                a.apply(b, [c])
            }(d[e].handler, c, b)
    }, j.geolocate = function(a) {
        var b = a.always || a.complete;
        navigator.geolocation ? navigator.geolocation.getCurrentPosition(function(c) {
            a.success(c), b && b()
        }, function(c) {
            a.error(c), b && b()
        }, a.options) : (a.not_supported(), b && b())
    }, j.geocode = function(a) {
        this.geocoder = new google.maps.Geocoder;
        var b = a.callback;
        a.hasOwnProperty("lat") && a.hasOwnProperty("lng") && (a.latLng = new google.maps.LatLng(a.lat, a.lng)), delete a.lat, delete a.lng, delete a.callback, this.geocoder.geocode(a, function(a, c) {
            b(a, c)
        })
    }, google.maps.Polygon.prototype.getBounds || (google.maps.Polygon.prototype.getBounds = function(a) {
        for (var d, b = new google.maps.LatLngBounds, c = this.getPaths(), e = 0; e < c.getLength(); e++) {
            d = c.getAt(e);
            for (var f = 0; f < d.getLength(); f++) b.extend(d.getAt(f))
        }
        return b
    }), google.maps.Polygon.prototype.containsLatLng || (google.maps.Polygon.prototype.containsLatLng = function(a) {
        var b = this.getBounds();
        if (null !== b && !b.contains(a)) return !1;
        for (var c = !1, d = this.getPaths().getLength(), e = 0; e < d; e++)
            for (var f = this.getPaths().getAt(e), g = f.getLength(), h = g - 1, i = 0; i < g; i++) {
                var j = f.getAt(i),
                    k = f.getAt(h);
                (j.lng() < a.lng() && k.lng() >= a.lng() || k.lng() < a.lng() && j.lng() >= a.lng()) && j.lat() + (a.lng() - j.lng()) / (k.lng() - j.lng()) * (k.lat() - j.lat()) < a.lat() && (c = !c), h = i
            }
        return c
    }), google.maps.LatLngBounds.prototype.containsLatLng = function(a) {
        return this.contains(a)
    }, google.maps.Marker.prototype.setFences = function(a) {
        this.fences = a
    }, google.maps.Marker.prototype.addFence = function(a) {
        this.fences.push(a)
    }, google.maps.Marker.prototype.getId = function() {
        return this.__gm_id
    }, Array.prototype.indexOf || (Array.prototype.indexOf = function(a) {
        "use strict";
        if (null == this) throw new TypeError;
        var b = Object(this),
            c = b.length >>> 0;
        if (0 === c) return -1;
        var d = 0;
        if (arguments.length > 1 && (d = Number(arguments[1]), d != d ? d = 0 : 0 != d && d != 1 / 0 && d != -(1 / 0) && (d = (d > 0 || -1) * Math.floor(Math.abs(d)))), d >= c) return -1;
        for (var e = d >= 0 ? d : Math.max(c - Math.abs(d), 0); e < c; e++)
            if (e in b && b[e] === a) return e;
        return -1
    }), j
});