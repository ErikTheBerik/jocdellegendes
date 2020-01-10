
<html>
  <head>
    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@3.0.3/dist/aframe-event-set-component.min.js"></script>
  	<script src="./vr.js"></script>
  </head>
  <body>
    <!-- <a-scene>
      <a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9"></a-box>
      <a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E"></a-sphere>
      <a-cylinder position="1 0.75 -3" radius="0.5" height="1.5" color="#FFC65D"></a-cylinder>
      <a-plane position="0 0 -4" rotation="-90 0 0" width="4" height="4" color="#7BC8A4"></a-plane>
      <a-sky color="#ECECEC"></a-sky>
    </a-scene> -->

    <a-scene>
    	<a-assets>
	    <!-- Images. -->
	    <img crossorigin="anonymous" id="girona" src="./assets/Girona_3.jpg">
	    <img crossorigin="anonymous" id="moscaHercules" src="./assets/moscaHERCULES2.png">
	  </a-assets>
	  <!-- 360-degree image. -->
		<a-sky id="image-360" radius="10" src="#girona"></a-sky>
		
		<a-image clickable mosca src="#moscaHercules" rotation="20 90 0" position="-4.5 6.5 0"></a-image>

		<!-- Camera + Cursor. -->
		<a-camera wasd-controls-enabled="false">
		  <a-cursor
		    id="cursor"
		    fuse="true"
		    raycaster="objects:.clickable;"
		    material="color: blue; shader: flat"
		    event-set__1="_event: mouseenter; color: springgreen"
		    event-set__2="_event: mouseleave; color: blue"
		    animation__click="property: scale; startEvents: click; easing: easeInCubic; dur: 150; from: 0.1 0.1 0.1; to: 1 1 1"
  			animation__fusing="property: scale; startEvents: fusing; easing: easeInCubic; dur: 1500; from: 1 1 1; to: 0.1 0.1 0.1"
  			animation__mouseleave="property: scale; startEvents: mouseleave; easing: easeInCubic; dur: 250; to: 1 1 1"
  			cursor="fuse: true;">

		    <a-animation begin="click" easing="ease-in" attribute="scale" dur="150" fill="forwards" from="0.1 0.1 0.1" to="1 1 1"></a-animation>
		    <a-animation begin="cursor-fusing" easing="ease-in" attribute="scale" dur="1500" fill="backwards" from="1 1 1" to="0.1 0.1 0.1"></a-animation>
		  </a-cursor>
		</a-camera>
<!-- 		<a-camera>
      		<a-cursor raycaster="far: 20; interval: 1000; showline: true;"></a-cursor>
    	</a-camera> -->
	</a-scene>

  </body>
</html>