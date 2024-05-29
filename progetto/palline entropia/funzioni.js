
const app = new PIXI.Application({ width: 500, height: 300 });
    document.getElementById("particles-container").appendChild(app.view);

    const particleCount = 100;
    const particles = [];

    for (let i = 0; i < particleCount; i++) {
      const particle = new PIXI.Graphics();

      const color = Math.random() * 0xFFFFFF;
      particle.beginFill(color);

      particle.drawCircle(0, 0, 5);
      particle.endFill();
      particle.x = Math.random() * app.screen.width;
      particle.y = Math.random() * app.screen.height;
      particle.vx = 0;
      particle.vy = 0;
      app.stage.addChild(particle);
      particles.push(particle);
    }

    const speedSlider = document.getElementById("speedSlider");
    const speedLabel = document.getElementById("speedLabel");

    speedSlider.addEventListener("input", () => {
      const speed = (parseFloat(speedSlider.value))/40;
      speedLabel.textContent = `Temperatura: ${speedSlider.value} K`;
    
      for (const particle of particles) {
        particle.vx = (Math.random() * 2 - 1) * speed;
        particle.vy = (Math.random() * 2 - 1) * speed;
      }
    });

    app.ticker.add(() => {
      for (const particle of particles) {
        particle.x += particle.vx;
        particle.y += particle.vy;

        if (particle.x > app.screen.width) {
          particle.x = 0;
        }
        if (particle.x < 0) {
          particle.x = app.screen.width;
        }
        if (particle.y > app.screen.height) {
          particle.y = 0;
        }
        if (particle.y < 0) {
          particle.y = app.screen.height;
        }
      }
    });



      //secondo contenitore



      const app2 = new PIXI.Application({ width: 504, height: 304 });
      const container2 = document.getElementById("container2");
      container2.appendChild(app2.view);
      const rectangle = document.getElementById("rectangle");
      const probElement = document.getElementById("prob");
      let isDrawing = false;
      let startX, startY, endX, endY;

      container2.addEventListener("mousedown", (e) => {
          isDrawing = true;
          startX = e.clientX - container2.getBoundingClientRect().left;
          startY = e.clientY - container2.getBoundingClientRect().top;
      });

      container2.addEventListener("mousemove", (e) => {
          if (!isDrawing) return;
          endX = e.clientX - container2.getBoundingClientRect().left;
          endY = e.clientY - container2.getBoundingClientRect().top;

          rectangle.style.left = Math.min(startX, endX) + "px";
          rectangle.style.top = Math.min(startY, endY) + "px";
          rectangle.style.width = Math.abs(endX - startX) + "px";
          rectangle.style.height = Math.abs(endY - startY) + "px";
      });

      container2.addEventListener("mouseup", () => {
          isDrawing = false;
      });

      function calcolaProb() {
          const width = parseFloat(rectangle.style.width);
          const height = parseFloat(rectangle.style.height);
          const area = isNaN(width) || isNaN(height) ? 0 : width * height;

          var prob=Math.pow(area/150000, 10);
          if(prob>1){
            prob=1;
          }

          probElement.innerText = prob*100 + "%";
      }


      
    container2.appendChild(app2.view);
    container2.tint = 0x808080;
    const particleCount2 = 10;
    const particles2 = [];

    for (let i = 0; i < particleCount2; i++) {
      const particle2 = new PIXI.Graphics();

      const color2 = 0x808080;
      particle2.beginFill(color2);

      particle2.drawCircle(0, 0, 5);
      particle2.endFill();
      particle2.x = Math.random() * app2.screen.width;
      particle2.y = Math.random() * app2.screen.height;
      particle2.vx = Math.random() * 2 - 1;
      particle2.vy = Math.random() * 2 - 1; 
      app2.stage.addChild(particle2);
      particles2.push(particle2);
    }
        
    app2.ticker.add(() => {
      for (const particle2 of particles2) {
        particle2.x += particle2.vx;
        particle2.y += particle2.vy;

        if (particle2.x > app2.screen.width) {
          particle2.x = 0;
        }
        if (particle2.x < 0) {
          particle2.x = app2.screen.width;
        }
        if (particle2.y > app2.screen.height) {
          particle2.y = 0;
        }
        if (particle2.y < 0) {
          particle2.y = app2.screen.height;
        }
      }
    });
