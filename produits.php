
<h1 class="project-title">  Smartphone e-commerce cards</h1>
<div class="container">
  <div class="grid">

    <div class="card-container">
      <h2 class="card-price"><span class="currency">$</span>1200</h2>
      <h1 class="card-title">iPhone Х</h1>
      <p class="details-btn">click to view</p>
      <div class="card-image-container">
         <img src="https://clipart-db.ru/file_content/rastr/smartphone_025.png" alt=""/>
      </div>
      <i class="fas fa-cart-plus cart-btn"></i>
    </div>

    <div class="card-container">
      <h2 class="card-price"><span class="currency">$</span>800</h2>
      <h1 class="card-title">Samsung r8</h1>
      <p class="details-btn">click to view</p>
      <div class="card-image-container">
         <img src="http://purepng.com/public/uploads/large/purepng.com-android-smartphonepersonal-computersmartphonemobile-operating-systemcellular-phoneandroid-1701528391092ypwe7.png" alt=""/>
      </div>
      <i class="fas fa-cart-plus cart-btn"></i>
    </div>

    <div class="card-container">
      <h2 class="card-price"><span class="currency">$</span>750</h2>
      <h1 class="card-title">HUAWAI 5</h1>
      <p class="details-btn">click to view</p>
      <div class="card-image-container">
         <img src="https://www.pngarts.com/files/3/Smartphone-PNG-High-Quality-Image.png" alt=""/>
      </div>
      <i class="fas fa-cart-plus cart-btn"></i>
    </div>

    <div class="card-container">
      <h2 class="card-price"><span class="currency">$</span>470</h2>
      <h1 class="card-title">Samsung A2</h1>
      <p class="details-btn">click to view</p>
      <div class="card-image-container">
         <img src="https://i.warosu.org/data/lit/img/0115/80/1533609351327.png" alt=""/>
      </div>
      <i class="fas fa-cart-plus cart-btn"></i>
    </div>
    
    <div class="card-container">
      <h2 class="card-price"><span class="currency">$</span>520</h2>
      <h1 class="card-title">iPhone 5s</h1>
      <p class="details-btn">click to view</p>
      <div class="card-image-container">
         <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/IPhone_5.png/1200px-IPhone_5.png" alt=""/>
      </div>
      <i class="fas fa-cart-plus cart-btn"></i>
    </div>
    
    <div class="card-container">
      <h2 class="card-price"><span class="currency">$</span>680</h2>
      <h1 class="card-title">Samsung S8+</h1>
      <p class="details-btn">click to view</p>
      <div class="card-image-container">
         <img src="https://avatars.mds.yandex.net/get-pdb/805781/76eb6370-4ebd-4bfb-9694-b210d0a9b190/orig" alt=""/>
      </div>
      <i class="fas fa-cart-plus cart-btn"></i>
    </div>

  </div>
</div>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:500,700|Roboto:700');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  background: #C3DAC3;
}

.container {
  max-width: 1000px;
  margin: 100px auto;
  padding: 0 40px;
}

.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 40px 40px;
}

.project-title {
  text-align: center;
  font-family: Montserrat, sans-serif;
  font-weight: 100;
  margin-top: 100px;
  font-size: 40px;
  opacity: .3;
  text-transform: uppercase;
}

.card-container {
  height: 400px;
  width: 300px;
  border-radius: 2px;
  position: relative;
  overflow: hidden;
  background: #fafafa;
  cursor: pointer;
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.25);
  transition: ease-in-out .3s;
}

.card-title {
  position: absolute;
  bottom: 65px;
  width: 100%;
  text-align: center;
  color: #2f3640;
  opacity: .9;
  font-family: Montserrat;
  font-size: 24px;
  font-weight: normal;
}

.details-btn {
  position: absolute;
  opacity: 0;
  width: 100%;
  bottom: 30px;
  text-transform: uppercase;
  text-align: center;
  padding-bottom; 5px;
  color: #2f3640;
  font-family: Montserrat;
  font-size: 14px;
  font-weight: 500;
  transition: ease-in-out .3s;
  animation: slide-out-right 1.4s;
}

.details-btn:after {
  content: '';
  position: absolute;
  width: 30px;
  top: 7px;
  right: 50px;
  height: 2px;
  opacity: .7;
  border-bottom: 1px solid #2f3640;
}

.details-btn:before {
  content: '';
  position: absolute;
  width: 30px;
  top: 7px;
  left: 50px;
  height: 2px;
  opacity: .7;
  border-bottom: 1px solid #2f3640;
}

.card-price {
  position: absolute;
  top: 20px;
  right: 20px;
  font-family: 'Roboto', sans-serif;
  font-size: 30px;
  font-weight: bold;
  color: #4F4F4F;
}

.card-price > .currency {
  position:absolute;
  font-size: 16px;
  top: 6px;
  left: -12px;
}

.card-container:hover {
  box-shadow: 0px 0px 35px rgba(0, 0, 0, 0.45);
}

.card-container:hover .details-btn {
  opacity: .7;
  animation: slide-in-left .6s;
}

.card-image-container {
  position: absolute;
  top: 0;
  width: 100%;
  height: 90%;
  margin: 0 auto;
}

.card-image-container > img {
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: 100%;
  object-fit: contain;
  transform: scale(0.5);
  transition: ease-in-out .6s;
  opacity: .9;
}

.card-container:hover img {
  transform: scale(0.55);
  opacity: 1;
}

.cart-btn {
  opacity: 0;
  position: absolute;
  top: 16px;
  padding: 10px;
  left: 20px;
  font-size: 22px;
  color: #BDBDBD;
  transition: ease-in-out .3s;
  animation: slide-out-left .62s;
}

.card-container:hover .cart-btn {
  opacity: 1;
  animation: slide-in-left .62s;
}

.cart-btn:hover {
  cursor: pointer;
  color: #27AE60;
}

@media(max-width: 1200px) {
  .container {
    max-width: 760px;
  }
  
  .project-title {
    font-size: 30px;
  }
  
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media(max-width: 780px) {
  .container {
    max-width: 380px;
  }

  .grid {
    grid-template-columns: repeat(1, 1fr);
  }
}

@keyframes slide-in-left {
  0% {
    transform: translate3d(-300px, 0, 0);
  }
  20% {
    transform: translate3d(-300px, 0, 0);
  }
  100% {
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slide-out-left {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(-300px, 0, 0);
  }
}

@keyframes slide-out-right {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(300px, 0, 0);
  }
}
    </style>
