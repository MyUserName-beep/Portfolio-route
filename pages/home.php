<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.hero {
  background: #2C907D;
  margin: -10px;
  box-shadow: 0 0 20px 30px rgba(0, 0, 0, 0.2);
}

.hero-content {
  width: 80%;
  margin: auto;
  min-height: 30vh;
  display: flex;
  justify-content: center;
  align-items: center;
  justify-content: space-between;
}

.wealcome-area  {
  font-family: 'Times New Roman', serif;
}
.wealcome-area h2 {
  font-size: 35px;
  color: #fff;
}

.wealcome-area p {
  color: #fff;
  font-size: 20px;
}

.wealcome-area h2 span {
  color: #29A737;
}

.home-image img {
  width: 250px;
  height: 250px;
  display: block;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.2) 0 50px 60px 7px;
  transition: 0.3s;
}

.home-image img:hover {
  box-shadow: none;
}

.write {
  position: relative;
  font-size: 3vw;
  color: #3BB265;
  -webkit-text-stroke: 0.3vw #6DA58E;
  letter-spacing: 5px;
  text-transform: uppercase;
  width: fit-content;
}

.write::before {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 100%;
  color: #3CBA29;
  -webkit-text-stroke: 0.3vw #16BD78;
  border-right: 2px solid #3CBA29;
  overflow: hidden;
  animation: animate 6s linear infinite;
}

@keyframes animate {
  0%,10%,100% {
    width: 0%;
  }
  70%,90% {
    width: 100%;
  }
}

.hero-service {
  background: #fff;
  margin-right: -10px;
  height: 200px;
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
}

.hero-body {
  width: 80%;
  height: 100%;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 45px;
}

.hero-body div {
  text-align: center;
  font-size: 25px;
}
.hero-body div > * {
  color: #888;
  line-height: 1.5;
}

.hero-body div > i {
  font-size: 60px;
}

</style>

<section class="hero">
  <div class="hero-content">
    <div class="wealcome-area">
      <h2>welcome <span>to</span> my port<span>f</span>olio</h2>
      <p>Hello it's me</p>
      <p>I am working last two years.And </p>
      <p>i am a </p>
      <h3 data-text="webdesigner" class="write">webdesigner.</h3> 
    </div>
    <div class="home-image">
      <img src="./home.jpg" alt="home.jpg">
    </div>
  </div>
</section>

 <div class="hero-service">
   <div class="hero-body">
    <div> |
      <h2>Good product</h2> 
      <i class="fa-brands fa-product-hunt"></i>
    </div>
   <div> |
      <h2>Service info</h2>
      <i class="fa-solid fa-circle-info"></i>
    </div>
    <div> |
      <h2>Content type</h2>
      <i class="fa-brands fa-connectdevelop"></i>
    </div>
    </div>
  </div>
