@extends('./layouts/main')

<header>
<a href="/" class="logo">DS<span>hape</span></a>
<ul class="navigation">
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>
</ul>
</header>

<div class="banner">
    <video src="{{asset('assets/treino.mp4')}}"  autoplay muted loop type="mp4"></video>
    <div class="textBox">
        <h2>Construa um melhor físico</h2>
        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum </p>
       <a href="./register"> <button type="button" class="btn btn-warning">Comece agora!</button></a>
    </div>
    <div class="imageBox">
        <img src="{{asset('assets/bir.png')}}" />
    </div>
</div>


<style>

    *{
        margin: 0;
        padding:0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }

    /* Logo */
    header{
        position: absolute;
        top:0;
        left:0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 40px 100px;
        z-index: 1000;
        text-decoration: none;
    }

    header .logo {
        text-decoration: none;
        position: relative;
        font-size: 2em;
        color:#fec037;
        text-transform:  uppercase;
        font-weight: 700;
        letter-spacing: 2px;
    }

    header a:hover{
    color:#fec037;
    }
    
    header .logo span{
        color: #f2f2f2;
    }

    /* Navegação */
    header .navigation{
        position: relative;
        display:flex;
    }
    header .navigation li {
        list-style: none;
    }

    header .navigation li a {
        display: inline-block;
        color:#111;
        margin-right: 40px;
        text-decoration: none;
    }
    
    /* Banner */
    .banner{
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 0 100px;
        background:  #111;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .banner::before{
        content:'';
        position: absolute;
        right:0;
        top:0;
        width: 400px;
        height:100%;
        background: #fec037;
        transform-origin:top;
        transform: skewX(-25deg);
        z-index: 1;
    }

    .banner video{
        position: absolute;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.10;
        pointer-events: none;
    }

    .banner .textBox{
        max-width: 900px;
    }

    .banner .textBox h2 {
        color:#fff;
        font-size : 3em;
    }

    .banner .textBox p{
        color:#fff;
        font-size:  1.1em;
        margin: 5px 0 25px;
    }

    .banner .imageBox {
        position: relative;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        z-index: 2;
    }
    .banner .imageBox img{
        position: absolute;
        bottom: 0;
        height: 90%;
        z-index: 10000;
    }

    @media(max-width:911px){
        header{
       
       padding:20px 50px;
    }

    .banner{
        padding: 150px  50px 0;
        flex-direction:  column;
        overflow: hidden;
    }

    .banner .textBox{
        position: relative;
        max-width: 100%;
        z-index: 2;
    }

    .banner:before{
        width: 350px;
        transform: skewX(-25deg) translateX(50%);
        z-index: 1;
    }

    header .navigation li a {
      
        margin-right: 10px;
    }
    }



    </style>