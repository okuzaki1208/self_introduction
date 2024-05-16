/*拡縮するやつ*/
function resetSize(event) {
    event.stopPropagation(); // ボタンクリック時に親要素へのクリック伝播を止める
    const sukinakotoLarge = document.querySelector('.sukinakoto.large');
    const sukinakotoDummy = document.querySelector('.sukinakoto_dummy');

    if (sukinakotoLarge) {
        sukinakotoLarge.classList.remove('large');
        sukinakotoDummy.style.display = 'none';
        // 再表示する
        sukinakotoLarge.querySelector('.sukinakoto-image').style.display = 'block';
    }

	        // ページを上に500pxスクロールさせる
			window.scroll({
            top: window.scrollY - 800,
            behavior: 'smooth' // スムーズにスクロールする
        });
}

function randomValues() {
  anime({
    targets: '.sukinakoto:not(.large)', // .sukinakoto.large以外の要素にのみアニメーションを適用
    translateX: function() {
      const randomValue = anime.random(-15, 15);
      console.log('Random translateX:', randomValue);
      return randomValue;
    },
    translateY: function() {
      const randomValue = anime.random(-15, 15);
      console.log('Random translateY:', randomValue);
      return randomValue;
    },
    easing: 'easeInOutQuad',
    duration: 1000,
    complete: randomValues
  });
}

randomValues();

function toggleSize(element) {
    const sukinakotoImage = element.querySelector('.sukinakoto-image');
    const sukinakotoLarge = document.querySelector('.sukinakoto.large');
    const sukinakotoDummy = document.querySelector('.sukinakoto_dummy');

    if (element.classList.contains('large')) {
        // クリック時の処理を削除
        sukinakotoImage.style.display = 'block';
    } else {
        if (sukinakotoLarge) {
            sukinakotoLarge.classList.remove('large');
            sukinakotoDummy.style.display = 'none';
            sukinakotoLarge.querySelector('.sukinakoto-image').style.display = 'block';
        }
        element.classList.add('large');
        sukinakotoDummy.style.display = 'block';
        sukinakotoImage.style.display = 'none';
    }

    // ページを上に500pxスクロールさせる
    // window.scroll({
    //     top: window.scrollY - 500,
    //     behavior: 'smooth' // スムーズにスクロールする
    // });
}

document.querySelectorAll('.sukinakoto').forEach(function(element) {
    element.addEventListener('click', function(event) {
        if (!element.classList.contains('large')) {
            toggleSize(element);
        }
        event.stopPropagation(); // イベントの伝播を止める
    });
});

  // アニメーションを停止する
  anime.remove('.sukinakoto:not(.large)');

  // アニメーション再開
  randomValues();


function toggleAudio(audioId) {
            const audio = document.getElementById(audioId);
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }







// 背景ランダムで出すやつ
    function loadRandomImage() {
      fetch('https://source.unsplash.com/random')
        .then(response => {
          if (response.ok) {
            return response.url;
          } else {
            throw new Error('Network response was not ok.');
          }
        })
        .then(imageUrl => {
          document.body.style.backgroundImage = `url(${imageUrl})`;
          document.getElementById("openImageLink").href = imageUrl;
        })
        .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
        });
    }

    // Initial loading of random image
    loadRandomImage();

    // Reload button event listener
    document.getElementById("reloadButton").addEventListener("click", function() {
      loadRandomImage();
    });



    
/* ポケモンゲット機能のON・OFFボタン*/

    // ボタン要素を取得
    const toggleBoxesButton = document.getElementById('toggleBoxesButton');

    // ボタンがクリックされたときの処理
    toggleBoxesButton.addEventListener('click', function() {
        // 対象の要素を取得
        const boxes = document.querySelectorAll('.box');
        const mbImage = document.getElementById('block');
        const counter = document.getElementById('counter');

        // 各要素の表示を切り替える
        boxes.forEach(box => {
            // 現在の表示状態を取得
            const display = window.getComputedStyle(box).display;

            // 表示切り替え
            if (display === 'block') {
                box.style.display = 'none';
            } else {
                box.style.display = 'block';
            }
        });

        // mb.pngの表示を切り替える
        const mbDisplay = window.getComputedStyle(mbImage).display;
        if (mbDisplay === 'block') {
            mbImage.style.display = 'none';
        } else {
            mbImage.style.display = 'block';
        }

        // counterの表示を切り替える
        const counterDisplay = window.getComputedStyle(counter).display;
        if (counterDisplay === 'block') {
            counter.style.display = 'none';
            toggleBoxesButton.textContent = 'ポケモンゲット機能をON';
        } else {
            counter.style.display = 'block';
            toggleBoxesButton.textContent = 'ポケモンゲット機能をOFF';
        }
    });







/* 以下、wasdでモンボ動かすやつ */

    const block = document.getElementById('block');
    const boxes = document.querySelectorAll('.box');
    const counterElement = document.getElementById('counter');
    let posX = 0;
    let posY = 0;
    let velocityX = 0;
    let velocityY = 0;
    let rotationSpeed = 0;
    let rotationAcceleration = 0;
    const keysPressed = {};
    let mouseMoveEnabled = false;
    let destroyedCount = 0;
    let collisionDisabled = false;

	// posX = (window.innerWidth - 100) / 2;  // Assuming the block width is 100px
	posY = (window.innerHeight - 50) / 3; // Assuming the block height is 100px

    // Function to move and rotate the block
    const moveAndRotateBlock = () => {
		
        if (keysPressed['w']) {
            velocityY -= 0.3;
        }
        if (keysPressed['a']) {
            velocityX -= 0.3;
        }
        if (keysPressed['s']) {
            velocityY += 0.3;
        }
        if (keysPressed['d']) {
            velocityX += 0.3;
        }

        // Apply velocity
        posX += velocityX;
        posY += velocityY;

        // Apply rotation acceleration based on velocity
        rotationAcceleration = Math.sqrt(velocityX * velocityX + velocityY * velocityY) * 3; // Increased acceleration

        // Apply rotation speed with different directions for 'a' and 'd' keys
        if (keysPressed['a']) {
            rotationSpeed -= rotationAcceleration;
        } else if (keysPressed['d']) {
            rotationSpeed += rotationAcceleration;
        }

        // Apply boundaries and bounce
        if (posX < 0 || posX > window.innerWidth - 100) {
            velocityX *= -1 / 3; // Reverse direction with 1/3 of the force
            // Bring block back within bounds
            if (posX < 0) posX = 0;
            if (posX > window.innerWidth - 100) posX = window.innerWidth - 100;
        }
        if (posY < 0) posY = 0;
        if (posY > window.innerHeight - 100) posY = window.innerHeight - 100;

			// Get the audio element
			const collisionSound = document.getElementById('collisionSound');

			// Function to play collision sound
			const playCollisionSound = () => {
				collisionSound.play(); // Play the sound
			};

        // Check for collision with the boxes
        if (!collisionDisabled) {
            const blockRect = block.getBoundingClientRect(); // ブロックの位置情報を取得

            for (const box of boxes) {
                const boxRect = box.getBoundingClientRect(); // ボックスの位置情報を取得

                if (
                    blockRect.right > boxRect.left &&
                    blockRect.left < boxRect.right &&
                    blockRect.bottom > boxRect.top &&
                    blockRect.top < boxRect.bottom
                ) {
                    // Collision detected, fade out the box
                    box.style.opacity = 0;

                    setTimeout(() => {
                        // Randomly reposition the box
                        const newBoxX = Math.floor(Math.random() * (window.innerWidth - 100));
                        const newBoxY = Math.floor(Math.random() * (window.innerHeight + 1050)) + 100;
                        box.style.left = `${newBoxX}px`;
                        box.style.top = `${newBoxY}px`;
                        box.style.opacity = 1;
                        collisionDisabled = false; // 衝突を再度有効にする
                    }, 1000); // 3秒後に再表示

                    // Increment destroyed count
                    destroyedCount++;
                    // Update counter
                    counterElement.textContent = `捕まえたポケモンの数: ${destroyedCount}`;

		            // Play collision sound
					playCollisionSound();

                    // Disable collision detection for 3 seconds
                    collisionDisabled = true;
                }
            }
        }

        // Update the position and rotation of the block
        block.style.transform = `translate(${posX}px, ${posY}px) rotate(${rotationSpeed}deg)`;

        // Apply damping to rotation speed (weaken inertia)
        rotationSpeed *= 0.95;

        // Request next frame
        requestAnimationFrame(moveAndRotateBlock);
    };

    // Event listeners for key press and release
    document.addEventListener('keydown', (e) => {
        keysPressed[e.key] = true;
    });

    document.addEventListener('keyup', (e) => {
        keysPressed[e.key] = false;
    });

    // Function to handle mouse movement
    const handleMouseMove = (event) => {
        if (mouseMoveEnabled) {
            const mouseX = event.clientX;
            const mouseY = event.clientY;

            // Calculate velocity based on mouse position
            velocityX = (mouseX - posX - 50) * 0.05; // 50 is half of block width
            velocityY = (mouseY - posY - 50) * 0.05; // 50 is half of block height

            // Apply rotation acceleration based on velocity
            rotationAcceleration = Math.sqrt(velocityX * velocityX + velocityY * velocityY) * 3; // Increased acceleration

            // Apply rotation speed with different directions for mouse movement
            rotationSpeed = rotationAcceleration;
        }
    };

    // Event listener for mouse movement
    document.addEventListener('mousemove', handleMouseMove);

    // Event listener for click on the block to toggle mouseMoveEnabled
    block.addEventListener('click', () => {
        mouseMoveEnabled = !mouseMoveEnabled;
    });

    // Set initial positions for boxes
    boxes.forEach(box => {
        const initialX = Math.random() * (window.innerWidth - 100);
        const initialY = Math.random() * (window.innerHeight - 50) + 100;
        box.style.left = `${initialX}px`;
        box.style.top = `${initialY}px`;
    });	

    // Start moving and rotating the block
    requestAnimationFrame(moveAndRotateBlock);
