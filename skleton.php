<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>/* page effet skleton*/

body{
  font-family: Arial, Helvetica, sans-serif;
  background: rgb(226, 221, 221);
}
.cards-grid{
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px,1fr));
  grid-gap: 20px;
  padding: 0 20px;
  max-width: 1300px;
  margin: 200px auto 0;
}
.cards{
  background:white;
  width: 100%;
  height: 200px;
}
.top-img{
  display: block;
  height: 100px;
  width: 100%;
  background:#4c4c4c;
  object-fit: cover;
}
.top-img ,.skeleton-anim{
  animation: skeleton 0.6s ease-in-out infinite alternate;
}
@keyframes skeleton{
  to{
      opacity:0.6;
  }
}
.content{
  padding: 15px;
}
.skeleton-title, .skeleton-text{
  background: #4c4c4c;
  animation: skeleton 0.8s ease-in-out infinite alternate;
}
.skeleton-title{
  margin-top: 100px;
  height: 20px; 
  width:60% ; 
}
.skeleton-text{
  margin-top: 5px;
  width: 60%;
  height: 10px;
}
.skeleton-text:first-of-type{
  width: 90%;
}</style>
    <title>Document</title>
</head>
<body>
<div class="cards-grid">
        <div class="cards">
            <div class="top-img skeleton-anim">
                <div class="content">
                    <h3 class="skeleton-title skeleton-anim"></h3>
                    <p class="skeleton-text skeleton-anim"></p>    
                    <p class="skeleton-text skeleton-anim"></p>
                </div>
            </div>
        </div>
        <div class="cards">
            <div class="top-img skeleton-anim">
                <div class="content">
                    <h3 class="skeleton-title skeleton-anim"></h3>
                    <p class="skeleton-text skeleton-anim"></p>    
                    <p class="skeleton-text skeleton-anim"></p>
                </div>
            </div>
        </div>
        <div class="cards">
            <div class="top-img skeleton-anim">
                <div class="content">
                    <h3 class="skeleton-title skeleton-anim"></h3>
                    <p class="skeleton-text skeleton-anim"></p>    
                    <p class="skeleton-text skeleton-anim"></p>
                </div>
            </div>
        </div>
        <div class="cards">
            <div class="top-img skeleton-anim">
                <div class="content">
                    <h3 class="skeleton-title skeleton-anim"></h3>
                    <p class="skeleton-text skeleton-anim"></p>    
                    <p class="skeleton-text skeleton-anim"></p>
                </div>
            </div>
        </div>
        <div class="cards">
            <div class="top-img skeleton-anim">
                <div class="content">
                    <h3 class="skeleton-title skeleton-anim"></h3>
                    <p class="skeleton-text skeleton-anim"></p>    
                    <p class="skeleton-text skeleton-anim"></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>