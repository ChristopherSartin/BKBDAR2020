<!doctype HTML>
<html>
<script src="https://aframe.io/releases/1.0.0/aframe.min.js"></script>
<script src="https://raw.githack.com/jeromeetienne/AR.js/2.1.8/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>

      <a-asset>
        <a-asset-item id="teapot" src="Assets/teapot.obj"></a-asset-item>
      </a-asset>

      <a-marker type='pattern' patternUrl='/C:/Users/chris/Documents/WebDev/BKBDAR2020/public/Assets/AR_Concert/MarkersAndImages/pattern-bkbd.patt'>
          <a-entity scale='0.2 0.2 0.2' obj-model="obj:#teapot"></a-entity>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>
