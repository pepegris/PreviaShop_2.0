


    var sabana=document.getElementById('sabana');
    var acari=document.getElementById('acari');

    //pantalla mapa
    var contenido_mapa=document.getElementById('contain_mapa');

    //LOS MAPAS
    var mapa_sab='<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.19354329809192!2d-66.87471060611895!3d10.493043535814797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5921d5f8bd0d%3A0x48ec3b547ae773bf!2sApolo%20Shoes%202!5e0!3m2!1ses!2sve!4v1593450656636!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
    mapa_sabana.innerHTML=mapa_sab;

    var mapa_ac='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62766.445361497346!2d-66.95042589821402!3d10.508318901391496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5855bdf90331%3A0x12e82a3cb3dbb29d!2sCentro%20Sambil%20Caracas!5e0!3m2!1ses!2sve!4v1593459478207!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
    mapa_acari.innerHTML=mapa_ac;

    //funciones cambio de mapa

    sabana.onclick=function(){
        contenido_mapa.innerHTML=mapa_sabana.innerHTML;
    }
    acari.onclick=function(){
        contenido_mapa.innerHTML=mapa_acari;
    }
























