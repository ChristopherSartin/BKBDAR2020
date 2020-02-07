<!doctype HTML>
<html>
<script src="https://aframe.io/releases/1.0.0/aframe.min.js"></script>
<script src="https://raw.githack.com/jeromeetienne/AR.js/2.1.8/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>

      <a-asset>
        <a-asset-item id="teapot" src="Assets/teapot.obj"></a-asset-item>
      </a-asset>

      <a-marker-camera type='pattern' url='https://raw.githubusercontent.com/ChristopherSartin/BKBDAR2020/master/public/Assets/AR_Concert/MarkersAndImages/pattern-bkbd.patt'>
          <a-entity scale='0.2 0.2 0.2' obj-model="obj:#teapot"></a-entity>
      </a-marker-camera>
    </a-scene>
  </body>
</html>
