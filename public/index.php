<!doctype HTML>
<html>
<script src="https://aframe.io/releases/1.0.0/aframe.min.js"></script>
<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs="patternRatio: 0.8; debugUIEnabled: false">

      <a-asset>
        <a-asset-item id="teapot" src="Assets/teapot.obj"></a-asset-item>
      </a-asset>

      <a-marker-camera type="pattern" url="./Assets/AR_Concert/MarkersAndImages/pattern-bkbd.patt">
          <a-entity scale='0.2 0.2 0.2' obj-model="obj:#teapot"></a-entity>
      </a-marker-camera>

    </a-scene>
  </body>
</html>
