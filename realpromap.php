
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Geoffrey Asira">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Webmap 201</title>
        <link rel="stylesheet" href="src/leaflet.css">
        <link rel="stylesheet" href="src/css/bootstrap.css">
        <link rel="stylesheet" href="src/plugins/L.Control.MousePosition.css">
        <link rel="stylesheet" href="src/plugins/L.Control.Sidebar.css">
        <link rel="stylesheet" href="src/plugins/Leaflet.PolylineMeasure.css">
        <link rel="stylesheet" href="src/plugins/easy-button.css">
        <link rel="stylesheet" href="src/plugins/leaflet-styleeditor/css/Leaflet.StyleEditor.css">
        <link rel="stylesheet" href="src/css/font-awesome.min.css">
        <link rel="stylesheet" href="src/plugins/leaflet.awesome-markers.css">
        <link rel="stylesheet" href="src/plugins/leaflet-mapkey/MapkeyIcons.css">
        <link rel="stylesheet" href="src/plugins/leaflet-mapkey/L.Icon.Mapkey.css">
        <link rel="stylesheet" href="src/plugins/MarkerCluster.css">
        <link rel="stylesheet" href="src/plugins/MarkerCluster.Default.css">
        <link rel="stylesheet" href="src/plugins/leaflet-legend.css">
        <link rel="stylesheet" href="src/jquery-ui.min.css">
        <link rel="stylesheet" href="src/plugins/leaflet.reachability.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/trafforddatalab/leaflet.reachability@v2.0.1/leaflet.reachability.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link rel="stylesheet" href="src/Leaflet.BigImage.min.css">
        <link rel="stylesheet" href="src/plugins/leaflet.groupedlayercontrol.min.css">
        <script src="src/leaflet-src.js"></script>
        <script src="src/jquery-3.2.0.min.js"></script>
        <script src="src/plugins/L.Control.MousePosition.js"></script>
        <script src="src/plugins/L.Control.Sidebar.js"></script>
        <script src="src/plugins/Leaflet.PolylineMeasure.js"></script>
        <script src="src/plugins/easy-button.js"></script>
        <script src="src/plugins/leaflet-providers.js"></script>
        <script src="src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleEditor.js"></script>
        <script src="src/plugins/leaflet-styleeditor/javascript/Leaflet.StyleForms.js"></script>
        <script src="src/plugins/leaflet.ajax.min.js"></script>
        <script src="src/plugins/leaflet.sprite.js"></script>
        <script src="src/plugins/leaflet.awesome-markers.min.js"></script>
        <script src="src/plugins/leaflet-mapkey/L.Icon.Mapkey.js"></script>
        <script src="src/plugins/leaflet.markercluster.js"></script>
        <script src="src/plugins/leaflet.geometryutil.js"></script>
        <script src="src/plugins/leaflet-legend.js"></script>
        <script src="src/jquery-ui.min.js"></script>
        <script src="src/turf.min.js"></script>
        <script src="src/plugins/leaflet.reachability.js"></script>
        <script src="src/plugins/leaflet.facebook.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/trafforddatalab/leaflet.reachability@v2.0.1/leaflet.reachability.min.js"></script>
        <script src="src/Leaflet.BigImage.min.js"></script>
        <script src="src/leaflet.browser.print.min.js"></script>
        <script src="src/plugins/leaflet.groupedlayercontrol.min.js"></script>
        
<!--    ***************  Begin Leaflet.Draw-->
        
        <script src="src/plugins/leaflet-draw/Leaflet.draw.js"></script>
        <script src="src/plugins/leaflet-draw/Leaflet.Draw.Event.js"></script>
        <link rel="stylesheet" href="src/plugins/leaflet-draw/leaflet.draw.css"/>
        <script src="src/plugins/leaflet-draw/Toolbar.js"></script>
        <script src="src/plugins/leaflet-draw/Tooltip.js"></script>
        <script src="src/plugins/leaflet-draw/ext/GeometryUtil.js"></script>
        <script src="src/plugins/leaflet-draw/ext/LatLngUtil.js"></script>
        <script src="src/plugins/leaflet-draw/ext/LineUtil.Intersect.js"></script>
        <script src="src/plugins/leaflet-draw/ext/Polygon.Intersect.js"></script>
        <script src="src/plugins/leaflet-draw/ext/Polyline.Intersect.js"></script>
        <script src="src/plugins/leaflet-draw/ext/TouchEvents.js"></script>
        <script src="src/plugins/leaflet-draw/draw/DrawToolbar.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Feature.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.SimpleShape.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Polyline.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Circle.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Marker.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Polygon.js"></script>
        <script src="src/plugins/leaflet-draw/draw/handler/Draw.Rectangle.js"></script>
        <script src="src/plugins/leaflet-draw/edit/EditToolbar.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/EditToolbar.Edit.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/EditToolbar.Delete.js"></script>
        <script src="src/plugins/leaflet-draw/Control.Draw.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.Poly.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.SimpleShape.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.Circle.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.Rectangle.js"></script>
        <script src="src/plugins/leaflet-draw/edit/handler/Edit.Marker.js"></script>
        
         
        
<!--    **************  End of Lealet Draw-->

        <style>
            #mapdiv {
                height:82vh;
            }

            .col-xs-12, .col-xs-6, .col-xs-4 {
                padding:3px;
            }

            #divProject {
                background-color: beige;
            }
            
            #divBUOWL {
                background-color: #ffffb3;
            }
            
            #divEagle {
                background-color: #4D4D4D;
                color: azure;
            }
            
            #divRaptor {
                background-color: #e6ffff;
            }
            
            .errorMsg {
                padding:0;
                text-align:center;
                background-color:darksalmon;
            }
            .popup{
            background-color: whitesmoke;
            color: black;
            background-size: cover;
            
            }

            .legend {
            padding: 6px 8px;
            background-color: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;

            }
            .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
            }
            div.legend.leaflet-control br {
            clear: both;
            }
            #header{
             color:  red;
             background-color: #1A1A1A;

            }
            #footer
            {
           background-color:  #FFCBA4; 
            }
            #logo
            {
           float: left;
                
            }
            #side-bar
            {
                background: #1A1A1A;
            }
            #rent
            {
                color: aliceblue;
            }
             .reachability-control-settings-button
            {
                font-size: 22px;
            }
            #Image{
                width: 20px;
                height: 20px;
            }
        </style>
    </head>
    <body>
        <div id="header" class="col-md-12">
           <div id="logo" class="col-md-4" >
               <img src="img/logo.jpg" width="100%" height="20%" >
           </div>  
            <div id="logo" class="col-md-8">
      <h3 class="text-center" style="color: aliceblue">GEO-DATATALE  REALTORS AND PROPERTY<br> INVESTMENT LMT.</h3>
       <p>
       <span id="rent"><h4>&nbsp;<span style="text-decoration: underline">For Sale</span>&nbsp;&nbsp; <span style="text-decoration: underline">For Rent</span>&nbsp;&nbsp; <span style="text-decoration: underline">Rooms</span></h4></span>
       <form action="process.php" method="post" name="locate">
          <span><b>Location:</b>&nbsp;</span>
           <select id="pizz" name="locate">
              <option value="PizzaGarden" onclick="me" selected>kayole</option>
               <option value="button" > nyama</option>
               <option value="Kayole Rasta">Kayole Rasta</option>
               <option value="Kayole Maria">Kayole Maria</option>
               <option value="Komarock">Komarock phase III</option>
           </select>
           <b>&nbsp;&nbsp;Price:</b>
           <select>
               <option value="p1">Ksh.2,500-4,000</option>
               <option value="p1">Ksh.4,500-6,500</option>
               <option value="p1">Ksh.7,000-12,000</option>
               <option value="p1">Ksh.12,500-17,000</option>
               <option value="p1">Ksh.17,500-24,000</option>
               <option value="p1">Ksh.25,000-45,000</option>
           </select>
           <button id="zoomTovihiga">kayole</button>
            
       </form>
         <nav>
                <i><img src="https://img.icons8.com/fluency/48/000000/facebook.png"/></i>
                <i><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png"/></i>
                <i><img src="https://img.icons8.com/color/48/000000/linkedin.png"/></i>
            </nav>   
       
       </p>
             </div>

   </div>
        <div id="side-bar" class="col-md-3">
            <button id='btnLocate' class='btn btn-primary btn-block'>Locate</button>
            <button id="btnShowLegend" class='btn btn-primary btn-block'>Show Legend</button>
            <div id="legend">
            
                <h4 class="text-center">Houses <i id="btnEagle" class="fa fa-server"></i></h4>
                <div id="lgndEagleDetail">
                    <svg height="60">
                        <circle cx="25" cy="15" r="10" style="stroke-width: 4; stroke: deeppink; fill: chartreuse; fill-opacity:0.5;"/>
                        <text x="50" y="20" style="font-family: sans-serif; font-size: 16px;">Vacant</text>
                        <circle cx="25" cy="45" r="10" style="stroke-width: 4; stroke: chartreuse; fill: chartreuse; fill-opacity:0.5;"/>
                        <text x="50" y="50" style="font-family: sans-serif; font-size: 16px;">Vacant Not availale</text>
                    </svg>
                </div>
                <h4 class="text-center">Health Facility <i id="btnRaptor" class="fa fa-server"></i></h4>
                <div id="lgndRaptorDetail">
                    <svg height="90">
                        <circle cx="25" cy="15" r="10" style="stroke-width: 4; stroke: deeppink; fill: cyan; fill-opacity:0.5;"/>
                        <text x="50" y="20" style="font-family: sans-serif; font-size: 16px;">Private health facility</text>
                        <circle cx="25" cy="45" r="10" style="stroke-width: 4; stroke: deeppink; stroke-dasharray: 5, 5; fill: cyan; fill-opacity:0.5;"/>
                        <text x="50" y="50" style="font-family: sans-serif; font-size: 16px;">Other MIN Facility</text>
                        <circle cx="25" cy="75" r="10" style="stroke-width: 4; stroke: cyan; fill: cyan; fill-opacity:0.5;"/>
                        <text x="50" y="80" style="font-family: sans-serif; font-size: 16px;">MOH Health facility</text>
                    </svg>
                </div>
               
            </div>
         
            <div id="divEagle" class="col-xs-12">
                <div id="divEagleLabel" class="text-center col-xs-12">
                    <h4 id="lblEagle">My Next Home</h4>
                </div>
                <div id="divEagleError" class="errorMsg col-xs-12"></div>
                <div id="divFindEagle" class="form-group has-error">
                    <div class="col-xs-6">
                        <input type="text" id="txtFindEagle" class="form-control" placeholder="Next Home">
                    </div>
                    <div class="col-xs-6">
                        <button id="btnFindEagle" class="btn btn-primary btn-block" disabled>Find Home</button>
                    </div>
                </div>
                <div id="divFilterEagle" class="col-xs-12">
                    <div class="col-xs-4">
                        <input type='radio' name='fltEagle' value='ALL' checked>All
                    </div>
                    <div class="col-xs-4">
                        <input type='radio' name='fltEagle' value='Vacant'>Vacant
                    </div>
                    <div class="col-xs-4">
                        <input type='radio' name='fltEagle' value='Novacant'>Novacant
                    </div>
                </div>
                <div class="" id="divEagleData"></div>
            </div>
           <div id="divRaptor" class="col-xs-12">
                <div id="divRaptorLabel" class="text-center col-xs-12">
                    <h4 id="lblRaptor">Health facility</h4>
                </div>
                <div id="divRaptorError" class="errorMsg col-xs-12"></div>
                <div id="divFindRaptor" class="form-group has-error">
                    <div class="col-xs-6">
                        <input type="text" id="txtFindRaptor" class="form-control" placeholder="Raptor Nest ID">
                    </div>
                    <div class="col-xs-6">
                        <button id="btnFindRaptor" class="btn btn-primary btn-block" disabled>Find Health Facility</button>
                    </div>
                </div>
                <div id="divFilterRaptor" class="col-xs-12">
                    <div class="col-xs-3">
                        <input type='radio' name='fltRaptor' value='ALL' checked>All
                    </div>
                    <div class="col-xs-3">
                        <input type='radio' name='fltRaptor' value='ACTIVE NEST'>Private
                    </div>
                    <div class="col-xs-3">
                        <input type='radio' name='fltRaptor' value='INACTIVE NEST'>Public
                    </div>
                    <div class="col-xs-3">
                        <input type='radio' name='fltRaptor' value='FLEDGED NEST'>Others
                    </div>
                </div>
                <div class="" id="divRaptorData"></div>
            </div>
        </div>
        </div>
        <div id="mapdiv" class="col-md-12"></div>
        <script>
            var mymap;
            var lyrOSM;
            var lyrWatercolor;
            var lyrTopo;
            var lyrImagery;
            var lyrOutdoors;
            var lyrEagleNests;
            var lyrbustop;
            var lyrpolicestn;
            var lyrrailwaystn;
            var lyrPostOffice;
            var lyrAtm;
            var lyrBank;
            var lyrShopping;
            var lyrStationary
            var lyrRaptorNests;
            var lyrClientLines;
            var lyrClientLinesBuffer;
            var lyrBUOWL;
            var lyrBUOWLbuffer;
            var jsnBUOWLbuffer;
            var lyrGBH;
            var lyrSearch;
            var lyrMarkerCluster;
            var mrkCurrentLocation;
            var fgpDrawnItems;
            var ctlAttribute;
            var ctlScale;
            var ctlMouseposition;
            var ctlMeasure;
            var ctlEasybutton;
            var ctlSidebar;
            var ctlLayers;
            var ctlDraw;
            var ctlStyle;
            var ctlLegend;
            var ctlPrint;
            var ctlPrint2;
            var ctlGroupLayer;
            var objBasemaps;
            var reachabilityControl;
            var objOverlays;
            var arProjectIDs = [];
            var arHabitatIDs = [];
            var arEagleIDs = [];
            var arRaptorIDs = [];
            var facebookcontrol;
            var myIcon;
            var myIconplc;
            var myIconrail;
            var myIconpost;
            var myIconatm;
            var myIconshop;
            var myIconstationary;
            var myIconbank;
            var layergroup;
            var x;
            var y;
            
            $(document).ready(function(){
                
                //  ********* Map Initialization ****************
                
                mymap = L.map('mapdiv', {center:[-1.285,36.85], zoom:11, attributionControl:false});
                
                ctlSidebar = L.control.sidebar('side-bar').addTo(mymap);
                
                ctlEasybutton = L.easyButton('glyphicon-transfer', function(){
                   ctlSidebar.toggle(); 
                }).addTo(mymap);
                
                ctlAttribute = L.control.attribution().addTo(mymap);
                ctlAttribute.addAttribution('OSM');
                ctlAttribute.addAttribution('&copy; <a href="http://datatale.com">Geoffrey asira LLC</a>');
                
                ctlScale = L.control.scale({position:'bottomleft', metric:false, maxWidth:200}).addTo(mymap);
                reachabilityControl = L.control.reachability({
                apiKey: '5b3ce3597851110001cf6248c9f85cae50384963b985be5b9d179444',
                styleFn: styleIsolines,
                mouseOverFn: highlightIsolines,
                mouseOutFn: resetIsolines,
                clickFn: clickIsolines,
                markerFn: isolinesOrigin,
                expandButtonContent: '',
                expandButtonStyleClass: 'reachability-control-expand-button fa fa-bullseye',
                collapseButtonContent: '',
                collapseButtonStyleClass: 'reachability-control-collapse-button fa fa-caret-up',
                drawButtonContent: '',
                drawButtonStyleClass: 'fa fa-pencil',
                deleteButtonContent: '',
                deleteButtonStyleClass: 'fa fa-trash',
                distanceButtonContent: '',
                distanceButtonStyleClass: 'fa fa-road',
                timeButtonContent: '',
                timeButtonStyleClass: 'fa fa-clock-o',
                travelModeButton1Content: '',
                travelModeButton1StyleClass: 'fa fa-car',
                travelModeButton2Content: '',
                travelModeButton2StyleClass: 'fa fa-bicycle',
                travelModeButton3Content: '',
                travelModeButton3StyleClass: 'fa fa-male',
                travelModeButton4Content: '',
                travelModeButton4StyleClass: 'fa fa-wheelchair-alt'
                }).addTo(mymap);
                      // *********  reachability plug in function *****************
            function styleIsolines(feature) {
                // NOTE: You can do some conditional styling by reading the properties of the feature parameter passed to the function
                return {
                    color: '#FFFF00',
                    weight: 3,
                    opacity: 0.5,
                    fillOpacity: 0,
                    dashArray: '5,10'
                    
                };
            }

            // Example function to style the isoline polygons when the user hovers over them
            function highlightIsolines(e) {
                // NOTE: as shown in the examples on the Leaflet website, e.target = the layer the user is interacting with
                var layer = e.target;

                layer.setStyle({
                    fillColor: '#ffea00',
                    dashArray: '1,13',
                    weight: 6,
                    fillOpacity: '0.5',
                    opacity: '2'
                });
            }

            // Example function to reset the style of the isoline polygons when the user stops hovering over them
            function resetIsolines(e) {
                // NOTE: as shown in the examples on the Leaflet website, e.target = the layer the user is interacting with
                var layer = e.target;

                reachabilityControl.isolinesGroup.resetStyle(layer);
            }

            // Example function to display information about an isoline in a popup when the user clicks on it
            function clickIsolines(e) {
                // NOTE: as shown in the examples on the Leaflet website, e.target = the layer the user is interacting with
                var layer = e.target;
                var props = layer.feature.properties;
                var popupContent = 'Mode of travel: ' + props['Travel mode'] + '<br />Range: 0 - ' + props['Range'] + ' ' + props['Range units'] + '<br />Area: ' + props['Area'] + ' ' + props['Area units'] + '<br />Population: ' + props['Population'];
                if (props.hasOwnProperty('Reach factor')) popupContent += '<br />Reach factor: ' + props['Reach factor'];
                layer.bindPopup(popupContent).openPopup();
            }

            // Example function to create a custom marker at the origin of the isoline groups
            function isolinesOrigin(latLng, travelMode, rangeType) {
                return L.circleMarker(latLng, { radius: 4, weight: 2, color: '#0073d4', fillColor: '#fff', fillOpacity: 1 });
            }
              // Add the reachability plugin
           
            // Setup error handlers in case there is a problem when calling the API
            mymap.on('reachability:error', function () {
                alert('Unfortunately there has been an error calling the API.\nMore details are available in the console.');
            });

            mymap.on('reachability:no_data', function () {
                alert('Unfortunately no data was received from the API.\n');
            });
                ctlMouseposition = L.control.mousePosition().addTo(mymap);
                ctlMeasure = L.control.polylineMeasure().addTo(mymap);
             

                    
                //   *********** Layer Initialization **********
                
               
                var Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png'
                  );
                lyrOSM = L.tileLayer.provider('OpenStreetMap.Mapnik');
                lyrTopo = L.tileLayer.provider('Thunderforest.Outdoors');
                lyrImagery = L.tileLayer.provider('Esri.WorldImagery');
                lyrOutdoors = L.tileLayer.provider('Thunderforest.Outdoors');
                lyrWatercolor = L.tileLayer.provider('Stamen.Watercolor');
                mymap.addLayer(lyrOSM);
               
                fgpDrawnItems = new L.FeatureGroup();
                fgpDrawnItems.addTo(mymap);
                
                $.ajax({url:'load_health.php',
                      success: function(response){
                    x= JSON.parse(response);
                    y = L.geoJSON(x).addTo(mymap);
                },
                    error:function(xhr,status, error){
                        alert("ERROR: "+error)
                    }
                });
                      let breakss = [-Infinity,1,2,3,4,Infinity];
                let colorss = ['#edf8fb','#b3cde3','#8c96c6','#8856a7','#810f7c'];
                function hex_color(r) {
                for(let i = 0; i < breakss.length; i++) {
                if(r > breakss[i] && r <= breakss[i+1]) {
                return colorss[i];
                }
                }
                }
                                function hex_style(feature) {
                                    return {
                fillColor: hex_color(feature.properties.counts),
                weight: 1,
                opacity: 0.5,
                color: "white" ,
                fillOpacity: 1,
                };
                                }
                
                let breaks = [-Infinity,941,3971,12488,30348,71229,Infinity];
                let colors = ['#fed976','#feb24c','#fd8d3c','#fc4e2a','#bd0026','#800026'];
                function towns_color(d) {
                for(let i = 0; i < breaks.length; i++) {
                if(d > breaks[i] && d <= breaks[i+1]) {
                return colors[i];
                }
                }
                }
                                function towns_style(feature) {
                                    return {
                fillColor: towns_color(feature.properties.density),
                weight: 1,
                opacity: 0.5,
                color: "black",
                fillOpacity: 1,
                };
                                }

                var geojdsonMarkerOption= {
                    radius: 8,
                fillColor: "red",
                weight: 1,
                color: "black",
                fillOpacity: 0.8,
                }

                 var lyrken=new L.GeoJSON.AJAX('data/nairobi.geojson',{center:[-1.3,36.8], zoom:10,style: towns_style,onEachFeature: function(feature, layer) {  
                 layer.bindPopup(
                '<div class="popup">' +'<b style= color: "blue">'+
                feature.properties.ADM2_EN.toUpperCase()+ '</b>'+ '<br>' +
                '<b>' + 'Total population : ' +'</b>' +feature.properties.total +'<br>'+
                '<b>' + 'Male population  :' +'</b>' +feature.properties.male + '<br>'+
                '<b>' + 'Female population :' +'</b>' +feature.properties.female +'<br>'+
                '<b>' + 'Population desity :' +'</b>' +feature.properties.density +'<br>'+
                '</div>'
                );
                }}).addTo(mymap); 
                
                var lyrpop=new L.GeoJSON.AJAX('data/hexadec.geojson',{center:[-1.3,36.8], zoom:10,style: hex_style}).addTo(mymap);
                var popupContent = ('<table>\
                    <tr>\
                        <td colspan="2">'+'<b>' + 'DATASET : ' +'</b>'+ " Alpah verstion 2010 and 2015 estimates of numbers of people per hexagonal grid,with national totals adjusted to match 2019 KNBS census population division estimates" +'<br>'+'<br>'+'<b>' + 'MAPPING APPROACH : ' +'</b>' + '</td>\
                    </tr>\
                    \
                    \
                </table>');
                 lyrpop.bindPopup(popupContent,{background: '#000'} );
               lyrpop.on('click', function (e) {
                 this.openPopup();
               });
                lyrpop.on('mouseout', function (e) {
               this.closePopup();
               });
                
                let legend = L.control({position: "bottomleft"});
                legend.onAdd = function() {
                let div = L.DomUtil.create("div", "legend");
                div.innerHTML =
                '<b style="color: red;size: 10pt;">POPULATION DENSITY</b><br>per County<br>' +
                '<small></small><br>';
                for(let i = breaks.length-1; i > 0; i--) {
                div.innerHTML +=
                '<i style="background-color: ' + colors[i-1] + '"></i>' +
                breaks[i-1] + ' - ' + breaks[i] + '<br>';
                }
                return div;
                };
                legend.addTo(mymap);
                
                lyrEagleNests = L.geoJSON.ajax('data/house.geojson', {pointToLayer:returnEagleMarker, filter:filterEagle}).addTo(mymap);
                lyrEagleNests.on('data:loaded', function(){
                    arEagleIDs.sort(function(a,b){return a-b});
                    $("#txtFindEagle").autocomplete({
                        source:arEagleIDs
                    });
                });
                
                lyrMarkerCluster = L.markerClusterGroup();
                lyrRaptorNests = L.geoJSON.ajax('data/naihealth.geojson', {pointToLayer:returnRaptorMarker, filter:filterRaptor});
                lyrRaptorNests.on('data:loaded', function(){
                    arRaptorIDs.sort(function(a,b){return a-b});
                    $("#txtFindRaptor").autocomplete({
                        source:arRaptorIDs
                    });
                    lyrMarkerCluster.clearLayers();
                    lyrMarkerCluster.addLayer(lyrRaptorNests);
                    lyrMarkerCluster.addTo(mymap);
                });
                
                //******   amenities icons  ****
                
                myIcon = L.icon({
                iconUrl:'markers/bus-stop.png',
                iconSize: [12, 12],
                iconAnchor: [10, 12],
                popupAnchor: [0, -28]
                });
                lyrbustop = L.geoJSON.ajax('data/amenities/bus stop.geojson',{pointToLayer:returnbustopmarker}).addTo(mymap);
                
                myIconplc = L.icon({
                iconUrl:'markers/kpolice.png',
                iconSize: [12, 12],
                iconAnchor: [10, 12],
                popupAnchor: [0, -28]
                });
                 lyrpolicestn  = L.geoJSON.ajax('data/amenities/police station.geojson',{pointToLayer:returnpolicemarker}).addTo(mymap);
                
                myIconrail = L.icon({
                iconUrl:'markers/train.png',
                iconSize: [12, 12],
                iconAnchor: [10, 12],
                popupAnchor: [0, -28]
                });
                lyrrailwaystn = L.geoJSON.ajax('data/amenities/railways station.geojson',{pointToLayer:returnrailmarker}).addTo(mymap);
                
                 myIconatm = L.icon({
                iconUrl:'markers/atm.png',
                iconSize: [12, 12],
                iconAnchor: [10, 12],
                popupAnchor: [0, -28]
                });
                lyrAtm = L.geoJSON.ajax('data/amenities/atm.geojson',{pointToLayer:returnatmarker}).addTo(mymap);
                
                 myIconbank = L.icon({
                iconUrl:'markers/bank.png',
                iconSize: [12, 12],
                iconAnchor: [10, 12],
                popupAnchor: [0, -28]
                });
                lyrBank = L.geoJSON.ajax('data/amenities/bank.geojson',{pointToLayer:returnbankmarker}).addTo(mymap);
                
                myIconshop = L.icon({
                iconUrl:'markers/shopping.png',
                iconSize: [12, 12],
                iconAnchor: [10, 12],
                popupAnchor: [0, -28]
                });
                lyrShopping = L.geoJSON.ajax('data/amenities/post_office.geojson',{pointToLayer:returnshopmarker}).addTo(mymap);
                 //********  zoomend *******
           
              mymap.on('zoomend',function(){
                if (mymap.getZoom() < 11.5){
                    mymap.removeLayer(lyrbustop);
                }
                if (mymap.getZoom() < 12.5){
                    mymap.removeLayer(lyrpolicestn);
                }
                else{
                    mymap.addLayer(lyrbustop);
                     mymap.addLayer(lyrpolicestn);
                }
            });
               
                // ********* Setup Layer Control  ***************
                
                objBasemaps = {
                    "Open Street Maps": lyrOSM,
                    "Topo Map":lyrTopo,
                    "Imagery":lyrImagery,
                    "Outdoors":lyrOutdoors,
                    "Watercolor":lyrWatercolor
                };
            
                var  groupedOverlays = {
                    "Amenities":{
                    "Population Density":lyrken,
                    "Population":lyrpop,    
                    "Houses":lyrEagleNests,
                    "Health facilities":lyrMarkerCluster,
                    "<img id ='Image' src='markers/bus-stop.png'  /> <span class='layeritem'>Bus stop</span>":lyrbustop,
                    "<img id ='Image' src='markers/train.png'  /> <span class='layeritem'>Railway station</span>":lyrrailwaystn,
                    "<img id ='Image' src='markers/kpolice.png'  /> <span class='layeritem'>Police Station</span>":lyrpolicestn,
                    "<img id ='Image' src='markers/atm.png'  /> <span class='layeritem'>ATM</span>":lyrAtm,
                     "<img id ='Image' src='markers/bank.png' /> <span class='layeritem'>Bank</span>":lyrBank,
                     "<img id ='Image' src='markers/shopping.png' /> <span class='layeritem'>Bank</span>":lyrShopping,   
                    "Drawn Items":fgpDrawnItems
                    }
                };
                
                ctlGroupLayer = L.control.groupedLayers(objBasemaps, groupedOverlays,{position:'topright'}).addTo(mymap);
                 
                   
                //***** print control ***
                
                ctlPrint2 = L.control.browserPrint({position:'topright'}).addTo(mymap);
                
                ctlLegend = new L.Control.Legend({
                    position:'topright',
                    controlButton:{title:"Legend"}
                }).addTo(mymap);
                
                $(".legend-container").append($("#legend"));
                $(".legend-toggle").append($("<i class='legend-toggle-icon fa fa-server fa-2x' style='color:#000'></i>"));
                // **********  Setup Draw Control ****************
                
                ctlDraw = new L.Control.Draw({
                    draw:{
                        polygon:false,
                        circle:false,
                        rectangle:false,
                    },
                    edit:{
                        featureGroup:fgpDrawnItems,
                        remove:false
                    }
                });
                ctlDraw.addTo(mymap);
                
                mymap.on('draw:created', function(e){
                    switch (e.layerType) {
                        case 'marker':
                            var llRef = e.layer.getLatLng();
                            var strTable = "<table class='table table-hover'>";
                            strTable += "<tr><th>Constraint</th><th>ID</th><th>Type</th><th>Distance</th><th>Direction</th></tr>";
                            var nrBUOWL = returnClosestlayer(lyrBUOWL, llRef);
                            strTable += "<tr><td>BUOWL</td><td>"+nrBUOWL.att.habitat_id+"</td><td>"+nrBUOWL.att.recentstatus+"</td><td>"+nrBUOWL.distance.toFixed(0)+" m</td><td>"+nrBUOWL.bearing.toFixed(0)+"</td></tr>";
                            var nrEagle = returnClosestlayer(lyrEagleNests, llRef);
                            strTable += "<tr><td>Eagle Nest</td><td>"+nrEagle.att.nest_id+"</td><td>"+nrEagle.att.status+"</td><td>"+nrEagle.distance.toFixed(0)+" m</td><td>"+nrEagle.bearing.toFixed(0)+"</td></tr>";
                            var nrRaptor = returnClosestlayer(lyrRaptorNests, llRef);
                            strTable += "<tr><td>Raptor Nest</td><td>"+nrRaptor.att.Nest_ID+"</td><td>"+nrRaptor.att.recentspecies+"<br>"+nrRaptor.att.recentstatus+"</td><td>"+nrRaptor.distance.toFixed(0)+" m</td><td>"+nrRaptor.bearing.toFixed(0)+"</td></tr>";
                            var nrGBH = returnClosestlayer(lyrGBH, llRef);
                            strTable += "<tr><td>GBH Rookery</td><td>N/A</td><td>N/A</td><td>"+(nrGBH.distance+250).toFixed(0)+" m</td><td>"+nrGBH.bearing.toFixed(0)+"</td></tr>";
                            strTable += "</table>";
                            fgpDrawnItems.addLayer(e.layer.bindPopup(strTable, {maxWidth:400}));
                            break;
                        case 'polyline':
                            var line = e.layer.toGeoJSON();
                            var colEagle = summarizePointsByLine(line, 0.8, lyrEagleNests.toGeoJSON(), 'status');
                            var sumEagle = summarizeArray(colEagle.features[0].properties.statusVals);
                            var strPopup = "Eagles";
                            for (var i=0;i<sumEagle[0].length;i++) {
                                strPopup += "<br> "+sumEagle[0][i]+": "+sumEagle[1][i];
                            }
                            
                            var arRTH = returnLayersByAttribute(lyrRaptorNests, 'recentspecies', 'Red-tail Hawk');
                            var fcRTH = L.featureGroup(arRTH).toGeoJSON();
                            var colRTH = summarizePointsByLine(line, 0.533, fcRTH, 'recentstatus');
                            var sumRTH = summarizeArray(colRTH.features[0].properties.recentstatusVals);
                            strPopup += "<br>Hawks<br>&nbsp;&nbsp;Red-tail Hawk";
                            for (var i=0;i<sumRTH[0].length;i++) {
                                strPopup += "<br>&nbsp;&nbsp;&nbsp;&nbsp;"+sumRTH[0][i]+": "+sumRTH[1][i];
                            }
                            
                            var arSWH = returnLayersByAttribute(lyrRaptorNests, 'recentspecies', 'Swainsons Hawk');
                            var fcSWH = L.featureGroup(arSWH).toGeoJSON();
                            var colSWH = summarizePointsByLine(line, 0.533, fcSWH, 'recentstatus');
                            var sumSWH = summarizeArray(colSWH.features[0].properties.recentstatusVals);
                            strPopup += "<br>Hawks<br>&nbsp;&nbsp;Swainsons Hawk";
                            for (var i=0;i<sumSWH[0].length;i++) {
                                strPopup += "<br>&nbsp;&nbsp;&nbsp;&nbsp;"+sumSWH[0][i]+": "+sumSWH[1][i];
                            }
                            
                            var bufLine = turf.buffer(line, 0.05, 'kilometers');
                            var intBUOWL = intersectPolyByPolyFC(bufLine, lyrBUOWL.toGeoJSON());
                            var intBUOWLline = intersectLineByPolyFC(line, lyrBUOWLbuffer.toGeoJSON());
                            
                            L.geoJSON(intBUOWL, {style:{color:'red', weight:5}}).addTo(mymap);
                            L.geoJSON(intBUOWLline, {style:{color:'red', weight:5}}).addTo(mymap);
                            
                            var arBUOWLsummary = summarizePolyFC(intBUOWL, 'hist_occup');
                            strPopup += "<br>BUOWL<br>&nbsp;&nbsp;Direct Impacts";
                            for (var i=0;i<arBUOWLsummary[0].length;i++) {
                                strPopup += "<br>&nbsp;&nbsp;&nbsp;&nbsp;"+arBUOWLsummary[0][i]+": "+arBUOWLsummary[1][i]+" ("+(arBUOWLsummary[2][i]/4046.9).toFixed(1)+" acres)";
                            }
                            
                            var arBUOWLsummary = summarizeLineFC(intBUOWLline, 'hist_occup');
                            console.log(arBUOWLsummary);
                            strPopup += "<br>BUOWL<br>&nbsp;&nbsp;Indirect Impacts";
                            for (var i=0;i<arBUOWLsummary[0].length;i++) {
                                strPopup += "<br>&nbsp;&nbsp;&nbsp;&nbsp;"+arBUOWLsummary[0][i]+": "+arBUOWLsummary[1][i]+" ("+(arBUOWLsummary[2][i]).toFixed(3)+" km)";
                            }
                            
                            fgpDrawnItems.addLayer(e.layer.bindPopup(strPopup));
                            e.layer.openPopup();
                            break;
                    }
                });
                
                // ************ Location Events **************
                
                mymap.on('locationfound', function(e) {
                    console.log(e);
                    if (mrkCurrentLocation) {
                        mrkCurrentLocation.remove();
                    }
                    mrkCurrentLocation = L.circle(e.latlng, {radius:e.accuracy/2}).addTo(mymap);
                    mymap.setView(e.latlng, 14);
                });
                
                mymap.on('locationerror', function(e) {
                    console.log(e);
                    alert("Location was not found");
                })
                
            });
            
             // ********* bustop Functions *****************
            function returnbustopmarker(json, latlng){
                return L.marker(latlng, {icon: myIcon});
            }
            // ********* police stn Functions *****************
            function returnpolicemarker(json, latlng){
                return L.marker(latlng, {icon: myIconplc});
            }
            // ********* railway stn Functions *****************
            function returnrailmarker(json, latlng){
                return L.marker(latlng, {icon: myIconrail});
            }
             // ********* ATM Functions *****************
            function returnatmarker(json, latlng){
                return L.marker(latlng, {icon: myIconatm});
            }
            
            // ********* Bank Functions *****************
            function returnbankmarker(json, latlng){
                return L.marker(latlng, {icon: myIconbank});
                
             }
             // ********* Bank Functions *****************
            function returnshopmarker(json, latlng){
                return L.marker(latlng, {icon: myIconshop});
            }
            // *********  house Functions *****************
            
            $("#btnEagle").click(function(){
               $("#lgndEagleDetail").toggle(); 
            });
            
            function returnEagleMarker(json, latlng){
                var att = json.properties;
                if (att.room=='Vacant') {
                    var clrNest = 'deeppink';
                } else {
                    var clrNest = 'chartreuse';
                }
                arEagleIDs.push(att.fid_1.toString());
                return L.circle(latlng, {radius:30, color:clrNest,fillColor:'chartreuse', fillOpacity:0.5}).bindTooltip("<h4 class= 'centered'> "+att.label+"</h4>" +"<p>" +"<img src='img/" + att.foto+"'style='float:left;width:100px;height:50px;' >"+"<br>"+"<br>"+"<div id='plot'>"+"<br>"+"vacant: "+"<i>"+att.vacant+"</i>"+"<br>"+"Cost: "+"Ksh. "+"<i>"+att.amout+"</i>"+"<br>"+"Management: "+"<i>"+att.management+"</i>"+"</div>"+"</p",{maxWidth: 2000,minWidth: 1500});
            }
            
            function filterEagle(json) {
                var att=json.properties;
                var optFilter = $("input[name=fltEagle]:checked").val();
                if (optFilter=='ALL') {
                    return true;
                } else {
                    return (att.room==optFilter);
                }
            }
            
            $("#txtFindEagle").on('keyup paste', function(){
                var val = $("#txtFindEagle").val();
                testLayerAttribute(arEagleIDs, val, "Eagle Nest ID", "#divFindEagle", "#divEagleError", "#btnFindEagle");
            });
            
            $("#btnFindEagle").click(function(){
                var val = $("#txtFindEagle").val();
                var lyr = returnLayerByAttribute(lyrEagleNests,'fid_1',val);
                if (lyr) {
                    if (lyrSearch) {
                        lyrSearch.remove();
                    }
                    lyrSearch = L.circle(lyr.getLatLng(), {radius:30, color:'red', weight:10, opacity:0.5, fillOpacity:0}).addTo(mymap);
                    mymap.setView(lyr.getLatLng(), 14);
                    var att = lyr.feature.properties;
                    $("#divEagleData").html("<h4 class= 'centered'> "+att.label+"</h4>"  +"<img src='img/" + att.foto+"'style='float:left;width:128px;height:100px;' >"+"<div id='plot'>"+"vacant: "+"<i>"+att.vacant+"</i>"+"<br>"+"Cost: "+"Ksh. "+"<i>"+att.amout+"</i>"+"<br>"+"Management: "+"<i>"+att.management+"</i>"+"</div>"+"<b>"+"RULES AND REGULATIONS"+"<br>"+"</b>"+att.policy+"<video width='350' height='260' controls> <source src='data/houseb.mp4'></video>");
                    $("#divEagleError").html("");
                    
                    fgpDrawnItems.clearLayers();
                    fgpDrawnItems.addLayer(lyr);
                    
                 } else {
                    $("#divEagleError").html("**** Eagle Nest ID not found ****");
                }
            });
            
            $("#lblEagle").click(function(){
                $("#divEagleData").toggle(); 
            });
            
            $("input[name=fltEagle]").click(function(){
                arEagleIDs=[];
                lyrEagleNests.refresh();
            });
            
            //  *********** health facilities Functions
            
            
            
            function returnRaptorMarker(json, latlng){
                var att = json.properties;
                arRaptorIDs.push(att.FID_1.toString());
                switch (att.Agency) {
                    case 'PRIV':
                        var radRaptor = 50;
                        break;
                    case 'MOH':
                        var radRaptor = 50;
                        break;
                    default:
                        var radRaptor = 50;
                        break;
                }
                switch (att.Agency) {
                    case 'PRIV':
                        var optRaptor = {radius:radRaptor, color:'deeppink', fillColor:"cyan", fillOpacity:0.5};
                        break;
                    case 'MOH':
                        var optRaptor = {radius:radRaptor, color:'cyan', fillColor:'cyan', fillOpacity:0.5};
                        break;
                    case 'OTHER MIN':
                        var optRaptor = {radius:radRaptor, color:'deeppink', fillColor:"cyan", fillOpacity:0.5, dashArray:"2,8"};
                        break;
                }
                return L.circle(latlng, optRaptor).bindPopup("<h4>HEALTH_F NO.: "+att.FID_1+"</h4>LOCATION: "+att.LOCATION+"<br>AGENCY: "+att.Agency+"<br>HIMS: "+att.HMIS);
            }
                
            function filterRaptor(json) {
                var att=json.properties;
                var optFilter = $("input[name=fltRaptor]:checked").val();
                if (optFilter=='ALL') {
                    return true;
                } else {
                    return (att.Agency==optFilter);
                }
            }
            
            $("#txtFindRaptor").on('keyup paste', function(){
                var val = $("#txtFindRaptor").val();
                testLayerAttribute(arRaptorIDs, val, "Raptor Nest ID", "#divFindRaptor", "#divRaptorError", "#btnFindRaptor");
            });
            
            $("#btnFindRaptor").click(function(){
                var val = $("#txtFindRaptor").val();
                var lyr = returnLayerByAttribute(lyrRaptorNests,'FID_1',val);
                if (lyr) {
                    if (lyrSearch) {
                        lyrSearch.remove();
                    }
                    var att = lyr.feature.properties;
                    switch (att.Agency) {
                        case 'PRIV':
                            var radRaptor = 50;
                            break;
                        case 'MOH':
                            var radRaptor = 50;
                            break;
                        default:
                            var radRaptor = 50;
                            break;
                    }
                    lyrSearch = L.circle(lyr.getLatLng(), {radius:radRaptor, color:'red', weight:10, opacity:0.5, fillOpacity:0}).addTo(mymap);
                    mymap.setView(lyr.getLatLng(), 14);
                    $("#divRaptorData").html("<h4 class='text-center'>Attributes</h4><h5>Status: "+att.Agency+"</h5><h5>Species: "+att.HIMS+"</h5><h5>Last Survey: "+att.LOCATION+"</h5>");
                    $("#divRaptorError").html("");
                    
                    fgpDrawnItems.clearLayers();
                    fgpDrawnItems.addLayer(lyr);
                    
                 } else {
                    $("#divRaptorError").html("**** Raptor Nest ID not found ****");
                }
            });
            
            $("#lblRaptor").click(function(){
                $("#divRaptorData").toggle(); 
            });
            
            $("input[name=fltRaptor]").click(function(){
                arRaptorIDsIDs=[];
                lyrRaptorNests.refresh();
            });
           

            //  *********  jQuery Event Handlers  ************
            
            $("#btnGBH").click(function(){
               $("#lgndGBHDetail").toggle(); 
            });
            
            $("#btnLocate").click(function(){
                mymap.locate();
            });
            
            $("#btnShowLegend").click(function(){
                $("#legend").toggle();
            });
            
            //  ***********  General Functions *********
            
            function LatLngToArrayString(ll) {
                return "["+ll.lat.toFixed(5)+", "+ll.lng.toFixed(5)+"]";
            }
            
            function returnLayerByAttribute(lyr,att,val) {
                var arLayers = lyr.getLayers();
                for (i=0;i<arLayers.length-1;i++) {
                    var ftrVal = arLayers[i].feature.properties[att];
                    if (ftrVal==val) {
                        return arLayers[i];
                    }
                }
                return false;
            }
            
            function returnLayersByAttribute(lyr,att,val) {
                var arLayers = lyr.getLayers();
                var arMatches = [];
                for (i=0;i<arLayers.length-1;i++) {
                    var ftrVal = arLayers[i].feature.properties[att];
                    if (ftrVal==val) {
                        arMatches.push(arLayers[i]);
                    }
                }
                if (arMatches.length) {
                    return arMatches;
                } else {
                    return false;
                }
            }
            
            function testLayerAttribute(ar, val, att, fg, err, btn) {
                if (ar.indexOf(val)<0) {
                    $(fg).addClass("has-error");
                    $(err).html("**** "+att+" NOT FOUND ****");
                    $(btn).attr("disabled", true);
                } else {
                    $(fg).removeClass("has-error");
                    $(err).html("");
                    $(btn).attr("disabled", false);
                }
            }
            
            function returnLength(arLL) {
                var total=0;
                
                for (var i=1;i<arLL.length;i++) {
                    total = total + arLL[i-1].distanceTo(arLL[i]);
                }
                
                return total;
                
            }
            
            function returnMultiLength(arArLL) {
                var total=0;
                
                for (var i=0; i<arArLL.length;i++) {
                    total = total + returnLength(arArLL[i]);
                }
                
                return total;
            }
            
            function returnClosestlayer(lyrGroup, llRef) {
                var arLyrs = lyrGroup.getLayers();
                var nearest = L.GeometryUtil.closestLayer(mymap, arLyrs, llRef);
                nearest.distance = llRef.distanceTo(nearest.latlng);
                nearest.bearing = L.GeometryUtil.bearing(llRef, nearest.latlng);
                if (nearest.bearing<0){
                    nearest.bearing = nearest.bearing+360;
                }
                nearest.att = nearest.layer.feature.properties;
                return nearest;
            }
            
            function summarizePointsByLine(line, radius, fcPoint, prop) {
                var buf = turf.buffer(line, radius, 'kilometers');
                buf = turf.featureCollection([buf]);
                buf = turf.collect(buf, fcPoint, prop, prop+"Vals");
                return buf;
            }
            
            function intersectPolyByPolyFC(poly, fcPoly) {
                var fgp = [];
                var bbPoly = turf.bboxPolygon(turf.bbox(poly));
                for (var i=0;i<fcPoly.features.length;i++) {
                    var bb = turf.bboxPolygon(turf.bbox(fcPoly.features[i]));
                    if (turf.intersect(bbPoly, bb)) {
                        var int = turf.intersect(poly, fcPoly.features[i]);
                        if (int) {
                            int.properties = fcPoly.features[i].properties;
                            fgp.push(int);
                        }
                    }
                }
                return turf.featureCollection(fgp);
            }
            
            function intersectLineByPolyFC(line, fcPoly) {
                var fgp = [];
                var bbLine = turf.bboxPolygon(turf.bbox(line));
                for (var i=0;i<fcPoly.features.length;i++) {
                    var bb = turf.bboxPolygon(turf.bbox(fcPoly.features[i]));
                    if (turf.intersect(bbLine, bb)) {
                        var slc = turf.lineSplit(line, fcPoly.features[i]);
                        for (var j=0;j<slc.features.length;j++) {
                            var curSlc = slc.features[j];
                            var len = turf.lineDistance(curSlc, 'kilometers');
                            var ptMiddle = turf.along(curSlc, len/2, 'kilometers');
                            if (turf.inside(ptMiddle, fcPoly.features[i])) {
                                curSlc.properties = fcPoly.features[i].properties;
                                fgp.push(curSlc);
                            }
                        }
                    }
                }
                return turf.featureCollection(fgp);
            }
            
            function summarizeArray(ar) {
                var arUnique = [];
                var arCount = [];
                for (var i=0;i<ar.length;i++) {
                    var idx = arUnique.indexOf(ar[i]);
                    if (idx<0) {
                        arUnique.push(ar[i]);
                        arCount.push(1);
                    } else {
                        arCount[idx] = arCount[idx]+1
                    }
                }
                return [arUnique, arCount];
            }
            
            function summarizePolyFC(fcPoly, att) {
                var arUnique = [];
                var arCount = [];
                var arArea = [];
                for (var i=0;i<fcPoly.features.length;i++) {
                    var curAtt = fcPoly.features[i].properties[att];
                    var idx = arUnique.indexOf(curAtt);
                    if (idx<0) {
                        arUnique.push(curAtt);
                        arCount.push(1);
                        arArea.push(turf.area(fcPoly.features[i]));
                    } else {
                        arCount[idx] = arCount[idx]+1
                        arArea[idx] = arArea[idx]+turf.area(fcPoly.features[i])
                    }
                }
                return [arUnique, arCount, arArea];
            }
            
            function summarizeLineFC(fcLine, att) {
                console.log(fcLine);
                var arUnique = [];
                var arCount = [];
                var arLength = [];
                for (var i=0;i<fcLine.features.length;i++) {
                    var curAtt = fcLine.features[i].properties[att];
                    var idx = arUnique.indexOf(curAtt);
                    console.log(curAtt);
                    console.log(idx);
                    if (idx<0) {
                        arUnique.push(curAtt);
                        arCount.push(1);
                        arLength.push(turf.lineDistance(fcLine.features[i]));
                    } else {
                        arCount[idx] = arCount[idx]+1;
                        arLength[idx] = arLength[idx]+turf.lineDistance(fcLine.features[i]);
                    }
                }
                return [arUnique, arCount, arLength];
            }
             
               
           
            
        </script>
    
    </body>
</html>