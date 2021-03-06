<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Danilo Gonçalves - Desenvolvedor Web">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Danilo Gonçalves - Desenvolvedor Web</title>

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        <!--cdn Bootstrap JS files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--CSS file-->
        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="css/button.min.css">

        <!--JS file-->
        <script src="js/scroll.js"></script>
        <script src="js/toTop.js"></script>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Icon-->
        <link rel="icon" href="img/icon/DG.ico" />
    </head>
    <style>
        /*
        * Código CSS para estilização da página
        * Definindo um Background para a tela
        */
        .cover-container{background:url(img/background/cover2.jpg) no-repeat center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body id="home" style="font-family: 'Arimo', sans-serif;" data-spy="scroll" data-target="#menu" data-offset="0">
        <!--Cover Container-->
        <div class="cover-container d-flex w-100 h-100 mx-0 flex-column">
            <div style="position: relative;width: 100%;height: 100%;" id="particles-js"></div>
            <!--Header-->
            <header id="header" style="" class="pt-1 pb-1 px-5 fixed-top">
                <div class="inner">
                    <!--Logo-->
                    <h2 style="cursor: pointer;" class="masthead-brand">
                        <a href="#home" class="scroll"><img src="img/logo/logo_branca.png" alt="Logo"></a>
                    </h2><!--/Logo-->
                    <nav id="menu" class="nav nav-masthead justify-content-center pt-3 pr-5 mr-5">
                        <a class="scroll nav-link active" href="#home">Home</a>
                        <a class="scroll nav-link" href="#servicos">Serviços</a>
                        <a class="scroll nav-link" href="#sobre">Sobre</a>
                        <a class="scroll nav-link" href="#portfolio">Portfólio</a>
                        <a class="scroll nav-link" href="#contato">Contato</a>
                        <a class="scroll nav-link" href="#">Blog</a>
                    </nav>
                </div>
            </header><!--/Header-->
            <!--Main-->
            <main style="margin-top: 18%;margin-bottom: 15%;position: absolute;margin-left: 30%;" role="main" class="cover">
                <div class="text-center" style="font-family: 'Russo One', sans-serif;">
                    <h1 class="mb-0" style="font-size: 60px;">Danilo Gonçalves</h1>
                    <p style="font-size: 30px;">Desenvolvedor Web</p>
                    <p class="text-body" style="font-family: 'Arimo', sans-serif;font-size: 20px;">
                       Desenvolvimento de Sites e Sistemas Web
                    </p>
                    <a id="button" class="mb-1 scroll" href="#contato" style="font-family: 'Russo One', sans-serif;color: black">
                        ENTRAR EM CONTATO
                    </a>
                    <button class="mb-1" id="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                        FAÇA UM ORÇAMENTO
                    </button>
                </div>
            </main><!--/Main-->
            <!--Nav-->
            <nav style="position: absolute;top: 100%;" class="nav nav-masthead justify-content-center navbar-dark bg-dark w-100">
                <span style="font-size: 25px;color: #fff;" class="navbar-text p-3">
                    Está precisando de um site?
                </span>
                <button style="font-size: 14px;border: none;margin: 0;" class="bg-danger text-white" id="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    FAÇA O ORÇAMENTO SEM NENHUM COMPROMISSO
                </button>
            </nav><!--/Nav-->
            <!--Modal de Orçamento-->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Faça o oraçamento do seu projeto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div><!--/Modal de Orçamento-->
            <!--Serviços-->
            <div style="padding-top: 105px;margin-bottom: 50%" id="servicos" class="container-fluid">
                <div class="container">
                    <h1>Serviços</h1>
                </div>
            </div><!--/Serviços-->
            <!--Sobre-->
            <div style="padding-top: 105px;margin-bottom: 50%" id="sobre" class="container-fluid">
                <div class="container">
                    <h1>Sobre</h1>
                </div>
            </div><!--/Sobre-->
            <!--Portfólio-->
            <div style="padding-top: 105px;margin-bottom: 50%" id="portfolio" class="container-fluid">
                <div class="container">
                    <h1>Portfólio</h1>
                </div>
            </div><!--/Portfólio-->
            <!--Contato-->
            <div style="padding-top: 105px;margin-bottom: 50%" id="contato" class="container-fluid">
                <div class="container">
                    <h1>Contato</h1>
                </div>
            </div><!--/Contato-->
            <!--Voltar para o topo-->
            <span data-toggle="tooltip" data-placement="top" title="Voltar para o Topo" class="btn toTop text-white" style="bottom: 10px;right: 20px;position: fixed;cursor: pointer;display: block;background-color: #244965;border-radius: 30%">
                <i style="font-size: 30px" class="fa fa-angle-double-up"></i>
            </span><!--Voltar para o topo-->
        </div><!--/Cover Container-->
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript">function launchParticlesJS(e,a){function i(){pJS.fn.canvasInit(),pJS.fn.canvasSize(),pJS.fn.canvasPaint(),pJS.fn.particlesCreate(),pJS.fn.particlesDraw()}function t(){pJS.fn.particlesDraw(),pJS.fn.requestAnimFrame=requestAnimFrame(t)}var n=document.querySelector("#"+e+" > canvas");if(pJS={canvas:{el:n,w:n.offsetWidth,h:n.offsetHeight},particles:{color:"#fff",shape:"circle",opacity:1,size:2.5,size_random:!0,nb:200,line_linked:{enable_auto:!0,distance:100,color:"#fff",opacity:1,width:1,condensed_mode:{enable:!0,rotateX:65e3,rotateY:65e3}},anim:{enable:!0,speed:1},array:[]},interactivity:{enable:!0,mouse:{distance:100},detect_on:"canvas",mode:"grab",line_linked:{opacity:1},events:{onclick:{enable:!0,mode:"push",nb:4}}},retina_detect:!1,fn:{vendors:{interactivity:{}}}},a){if(a.particles){var c=a.particles;if(c.color&&(pJS.particles.color=c.color),c.shape&&(pJS.particles.shape=c.shape),c.opacity&&(pJS.particles.opacity=c.opacity),c.size&&(pJS.particles.size=c.size),0==c.size_random&&(pJS.particles.size_random=c.size_random),c.nb&&(pJS.particles.nb=c.nb),c.line_linked){var s=c.line_linked;if(0==s.enable_auto&&(pJS.particles.line_linked.enable_auto=s.enable_auto),s.distance&&(pJS.particles.line_linked.distance=s.distance),s.color&&(pJS.particles.line_linked.color=s.color),s.opacity&&(pJS.particles.line_linked.opacity=s.opacity),s.width&&(pJS.particles.line_linked.width=s.width),s.condensed_mode){var r=s.condensed_mode;0==r.enable&&(pJS.particles.line_linked.condensed_mode.enable=r.enable),r.rotateX&&(pJS.particles.line_linked.condensed_mode.rotateX=r.rotateX),r.rotateY&&(pJS.particles.line_linked.condensed_mode.rotateY=r.rotateY)}}if(c.anim){var p=c.anim;0==p.enable&&(pJS.particles.anim.enable=p.enable),p.speed&&(pJS.particles.anim.speed=p.speed)}}if(a.interactivity){var o=a.interactivity;if(0==o.enable&&(pJS.interactivity.enable=o.enable),o.mouse&&o.mouse.distance&&(pJS.interactivity.mouse.distance=o.mouse.distance),o.detect_on&&(pJS.interactivity.detect_on=o.detect_on),o.mode&&(pJS.interactivity.mode=o.mode),o.line_linked&&o.line_linked.opacity&&(pJS.interactivity.line_linked.opacity=o.line_linked.opacity),o.events){var l=o.events;if(l.onclick){var S=l.onclick;0==S.enable&&(pJS.interactivity.events.onclick.enable=!1),"push"!=S.mode&&(pJS.interactivity.events.onclick.mode=S.mode),S.nb&&(pJS.interactivity.events.onclick.nb=S.nb)}}}pJS.retina_detect=a.retina_detect}pJS.particles.color_rgb=hexToRgb(pJS.particles.color),pJS.particles.line_linked.color_rgb_line=hexToRgb(pJS.particles.line_linked.color),pJS.retina_detect&&window.devicePixelRatio>1&&(pJS.retina=!0,pJS.canvas.pxratio=window.devicePixelRatio,pJS.canvas.w=pJS.canvas.el.offsetWidth*pJS.canvas.pxratio,pJS.canvas.h=pJS.canvas.el.offsetHeight*pJS.canvas.pxratio,pJS.particles.anim.speed=pJS.particles.anim.speed*pJS.canvas.pxratio,pJS.particles.line_linked.distance=pJS.particles.line_linked.distance*pJS.canvas.pxratio,pJS.particles.line_linked.width=pJS.particles.line_linked.width*pJS.canvas.pxratio,pJS.interactivity.mouse.distance=pJS.interactivity.mouse.distance*pJS.canvas.pxratio),pJS.fn.canvasInit=function(){pJS.canvas.ctx=pJS.canvas.el.getContext("2d")},pJS.fn.canvasSize=function(){pJS.canvas.el.width=pJS.canvas.w,pJS.canvas.el.height=pJS.canvas.h,window.onresize=function(){pJS&&(pJS.canvas.w=pJS.canvas.el.offsetWidth,pJS.canvas.h=pJS.canvas.el.offsetHeight,pJS.retina&&(pJS.canvas.w*=pJS.canvas.pxratio,pJS.canvas.h*=pJS.canvas.pxratio),pJS.canvas.el.width=pJS.canvas.w,pJS.canvas.el.height=pJS.canvas.h,pJS.fn.canvasPaint(),pJS.particles.anim.enable||(pJS.fn.particlesRemove(),pJS.fn.canvasRemove(),i()))}},pJS.fn.canvasPaint=function(){pJS.canvas.ctx.fillRect(0,0,pJS.canvas.w,pJS.canvas.h)},pJS.fn.canvasRemove=function(){pJS.canvas.ctx.clearRect(0,0,pJS.canvas.w,pJS.canvas.h)},pJS.fn.particle=function(e,a,i){this.x=i?i.x:Math.random()*pJS.canvas.w,this.y=i?i.y:Math.random()*pJS.canvas.h,this.radius=(pJS.particles.size_random?Math.random():1)*pJS.particles.size,pJS.retina&&(this.radius*=pJS.canvas.pxratio),this.color=e,this.opacity=a,this.vx=-.5+Math.random(),this.vy=-.5+Math.random(),this.draw=function(){switch(pJS.canvas.ctx.fillStyle="rgba("+this.color.r+","+this.color.g+","+this.color.b+","+this.opacity+")",pJS.canvas.ctx.beginPath(),pJS.particles.shape){case"circle":pJS.canvas.ctx.arc(this.x,this.y,this.radius,0,2*Math.PI,!1);break;case"edge":pJS.canvas.ctx.rect(this.x,this.y,2*this.radius,2*this.radius);break;case"triangle":pJS.canvas.ctx.moveTo(this.x,this.y-this.radius),pJS.canvas.ctx.lineTo(this.x+this.radius,this.y+this.radius),pJS.canvas.ctx.lineTo(this.x-this.radius,this.y+this.radius),pJS.canvas.ctx.closePath()}pJS.canvas.ctx.fill()}},pJS.fn.particlesCreate=function(){for(var e=0;e<pJS.particles.nb;e++)pJS.particles.array.push(new pJS.fn.particle(pJS.particles.color_rgb,pJS.particles.opacity))},pJS.fn.particlesAnimate=function(){for(var e=0;e<pJS.particles.array.length;e++){var a=pJS.particles.array[e];a.x+=a.vx*(pJS.particles.anim.speed/2),a.y+=a.vy*(pJS.particles.anim.speed/2),a.x-a.radius>pJS.canvas.w?a.x=a.radius:a.x+a.radius<0&&(a.x=pJS.canvas.w+a.radius),a.y-a.radius>pJS.canvas.h?a.y=a.radius:a.y+a.radius<0&&(a.y=pJS.canvas.h+a.radius);for(var i=e+1;i<pJS.particles.array.length;i++){var t=pJS.particles.array[i];if(pJS.particles.line_linked.enable_auto&&pJS.fn.vendors.distanceParticles(a,t),pJS.interactivity.enable)switch(pJS.interactivity.mode){case"grab":pJS.fn.vendors.interactivity.grabParticles(a,t)}}}},pJS.fn.particlesDraw=function(){pJS.canvas.ctx.clearRect(0,0,pJS.canvas.w,pJS.canvas.h),pJS.fn.particlesAnimate();for(var e=0;e<pJS.particles.array.length;e++){var a=pJS.particles.array[e];a.draw("rgba("+a.color.r+","+a.color.g+","+a.color.b+","+a.opacity+")")}},pJS.fn.particlesRemove=function(){pJS.particles.array=[]},pJS.fn.vendors.distanceParticles=function(e,a){var i=e.x-a.x,t=e.y-a.y,n=Math.sqrt(i*i+t*t);if(n<=pJS.particles.line_linked.distance){var c=pJS.particles.line_linked.color_rgb_line;if(pJS.canvas.ctx.beginPath(),pJS.canvas.ctx.strokeStyle="rgba("+c.r+","+c.g+","+c.b+","+(pJS.particles.line_linked.opacity-n/pJS.particles.line_linked.distance)+")",pJS.canvas.ctx.moveTo(e.x,e.y),pJS.canvas.ctx.lineTo(a.x,a.y),pJS.canvas.ctx.lineWidth=pJS.particles.line_linked.width,pJS.canvas.ctx.stroke(),pJS.canvas.ctx.closePath(),pJS.particles.line_linked.condensed_mode.enable){var i=e.x-a.x,t=e.y-a.y,s=i/(1e3*pJS.particles.line_linked.condensed_mode.rotateX),r=t/(1e3*pJS.particles.line_linked.condensed_mode.rotateY);a.vx+=s,a.vy+=r}}},pJS.fn.vendors.interactivity.listeners=function(){if("window"==pJS.interactivity.detect_on)var e=window;else var e=pJS.canvas.el;if(e.onmousemove=function(a){if(e==window)var i=a.clientX,t=a.clientY;else var i=a.offsetX||a.clientX,t=a.offsetY||a.clientY;pJS&&(pJS.interactivity.mouse.pos_x=i,pJS.interactivity.mouse.pos_y=t,pJS.retina&&(pJS.interactivity.mouse.pos_x*=pJS.canvas.pxratio,pJS.interactivity.mouse.pos_y*=pJS.canvas.pxratio),pJS.interactivity.status="mousemove")},e.onmouseleave=function(e){pJS&&(pJS.interactivity.mouse.pos_x=0,pJS.interactivity.mouse.pos_y=0,pJS.interactivity.status="mouseleave")},pJS.interactivity.events.onclick.enable)switch(pJS.interactivity.events.onclick.mode){case"push":e.onclick=function(e){if(pJS)for(var a=0;a<pJS.interactivity.events.onclick.nb;a++)pJS.particles.array.push(new pJS.fn.particle(pJS.particles.color_rgb,pJS.particles.opacity,{x:pJS.interactivity.mouse.pos_x,y:pJS.interactivity.mouse.pos_y}))};break;case"remove":e.onclick=function(e){pJS.particles.array.splice(0,pJS.interactivity.events.onclick.nb)}}},pJS.fn.vendors.interactivity.grabParticles=function(e,a){var i=e.x-a.x,t=e.y-a.y,n=Math.sqrt(i*i+t*t),c=e.x-pJS.interactivity.mouse.pos_x,s=e.y-pJS.interactivity.mouse.pos_y,r=Math.sqrt(c*c+s*s);if(n<=pJS.particles.line_linked.distance&&r<=pJS.interactivity.mouse.distance&&"mousemove"==pJS.interactivity.status){var p=pJS.particles.line_linked.color_rgb_line;pJS.canvas.ctx.beginPath(),pJS.canvas.ctx.strokeStyle="rgba("+p.r+","+p.g+","+p.b+","+(pJS.interactivity.line_linked.opacity-r/pJS.interactivity.mouse.distance)+")",pJS.canvas.ctx.moveTo(e.x,e.y),pJS.canvas.ctx.lineTo(pJS.interactivity.mouse.pos_x,pJS.interactivity.mouse.pos_y),pJS.canvas.ctx.lineWidth=pJS.particles.line_linked.width,pJS.canvas.ctx.stroke(),pJS.canvas.ctx.closePath()}},pJS.fn.vendors.destroy=function(){cancelAnimationFrame(pJS.fn.requestAnimFrame),n.remove(),delete pJS},i(),pJS.particles.anim.enable&&t(),pJS.interactivity.enable&&pJS.fn.vendors.interactivity.listeners()}function hexToRgb(e){var a=/^#?([a-f\d])([a-f\d])([a-f\d])$/i;e=e.replace(a,function(e,a,i,t){return a+a+i+i+t+t});var i=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e);return i?{r:parseInt(i[1],16),g:parseInt(i[2],16),b:parseInt(i[3],16)}:null}window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),window.cancelRequestAnimFrame=function(){return window.cancelAnimationFrame||window.webkitCancelRequestAnimationFrame||window.mozCancelRequestAnimationFrame||window.oCancelRequestAnimationFrame||window.msCancelRequestAnimationFrame||clearTimeout}(),window.particlesJS=function(e,a){"string"!=typeof e&&(a=e,e="particles-js"),e||(e="particles-js");var i=document.createElement("canvas");i.style.width="100%",i.style.height="100%";var t=document.getElementById(e).appendChild(i);null!=t&&launchParticlesJS(e,a)};</script>
        <script src="js/particulas.min.js"></script>
        <script src="js/header-animate.min.js"></script>
        <script>
            $('body').scrollspy({ target: '#menu' });
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>