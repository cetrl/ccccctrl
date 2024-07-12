<script type="module">

  import * as THREE from './css/assets/three.module.js';

  import { ParallaxBarrierEffect } from './css/assets/ParallaxBarrierEffect.js';

  let container, camera, scene, renderer, effect;

  const spheres = [];

  let mouseX = 0;
  let mouseY = 0;

  let windowHalfX = window.innerWidth / 2;
  let windowHalfY = window.innerHeight / 2;

  document.addEventListener('mousemove', onDocumentMouseMove, false);

  init();
  animate();

  function init() {

    container = document.createElement('div');
    document.body.appendChild(container);

    camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.01, 100);
    camera.position.z = 0;
    camera.focalLength = 3;

    const path = "css/assets/textures/";
    const format = '.png';
    const urls = [
      path + 'px' + format, path + 'nx' + format,
      path + 'py' + format, path + 'ny' + format,
      path + 'pz' + format, path + 'nz' + format
    ];

    const textureCube = new THREE.CubeTextureLoader().load(urls);

    scene = new THREE.Scene();
    scene.background = new THREE.TextureLoader().load({ color: 0x000000 });

    const geometry = new THREE.SphereBufferGeometry(.5, 5, 3);
    const material = new THREE.MeshBasicMaterial({ color: 0xff596f, envMap: textureCube });

    for (let i = 0; i < 20; i++) {

      const mesh = new THREE.Mesh(geometry, material);

      mesh.position.x = Math.random() * 10 - 5;
      mesh.position.y = Math.random() * 10 - 5;
      mesh.position.z = Math.random() * 15 - 5;

      mesh.scale.x = mesh.scale.y = mesh.scale.z = Math.random() * 3 + 1;

      scene.add(mesh);

      spheres.push(mesh);

    }

    //

    renderer = new THREE.WebGLRenderer();
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    const width = window.innerWidth || 2;
    const height = window.innerHeight || 2;

    effect = new ParallaxBarrierEffect(renderer);
    effect.setSize(width, height);

    //

    window.addEventListener('resize', onWindowResize, false);

  }

  function onWindowResize() {

    windowHalfX = window.innerWidth / 2;
    windowHalfY = window.innerHeight / 2;

    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    effect.setSize(window.innerWidth, window.innerHeight);

  }

  function onDocumentMouseMove(event) {

    mouseX = ( event.clientX ) / 200;
		mouseY = ( event.clientY - windowHalfY ) / 200;
  }

  function animate() {

    const timer = 0.0001 * Date.now();

    camera.position.x += - 0.1 + ( mouseX - camera.position.x ) * .02;
    camera.position.y += ( - mouseY - camera.position.y ) * .02;

    camera.lookAt( scene.position );

    for ( let i = 0, il = spheres.length; i < il; i ++ ) {

      const sphere = spheres[ i ];

      sphere.position.y = 5 * Math.cos( timer + i)* - mouseX/10;
      sphere.position.x = 5 * Math.sin( timer + i)* mouseY/10;

    }

    effect.render( scene, camera );

    requestAnimationFrame(animate);
  }

</script>