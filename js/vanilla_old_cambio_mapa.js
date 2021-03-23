function mapa_dos(params) {
    //tiendas segunda linea
var valena=document.getElementById('valena');
var trina=document.getElementById('trina');
var sabanados=document.getElementById('sabandos');
var ojena=document.getElementById('ojena');
var catica=document.getElementById('catica');
var apure=document.getElementById('apure');
var corina=document.getElementById('corina');
var nachari=document.getElementById('nachari');

//pantalla mapa
var contenido_mapa=document.getElementById('contain_mapa');


// MAPAS SEGUNDIA LINEA
const mapa_valena='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62833.589499267175!2d-68.029243350087!3d10.172580039587393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e80678bce61928f%3A0x9f78e9eea8c34272!2sValencia%2C%20Carabobo!5e0!3m2!1ses!2sve!4v1593467573207!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
const mapa_trina='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7847.625500160655!2d-66.87397227334677!3d10.436428870211088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2af63b11d2aa59%3A0xfff855ca2ab91e1!2sLa%20Trinidad%2C%20Caracas%201080%2C%20Miranda!5e0!3m2!1ses!2sve!4v1593467860996!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
const mapa_sabdos='<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.19354329809192!2d-66.87471060611895!3d10.493043535814797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5921d5f8bd0d%3A0x48ec3b547ae773bf!2sApolo%20Shoes%202!5e0!3m2!1ses!2sve!4v1593450656636!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
const mapa_ojen    ='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31412.7482836308!2d-71.33098029248015!3d10.213625483107347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e89cfd18ee233f1%3A0x6e7bd941b5edce8e!2sCd%20Ojeda%2C%20Zulia!5e0!3m2!1ses!2sve!4v1593468207522!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
const mapa_cati    ='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1961.4047765980517!2d-66.94609144179242!3d10.51566139812469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5ef41d6113a5%3A0x1674c3ec3ee0cbde!2sCatia%2C%20Caracas%201030%2C%20Distrito%20Capital!5e0!3m2!1ses!2sve!4v1593468235828!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
const mapa_apur    ='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.913763111335!2d-66.8812804846139!3d10.507458392504342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5917c5d8393f%3A0xecf01b6412f5f9fa!2sApure%2C%20Caracas%201050%2C%20Distrito%20Capital!5e0!3m2!1ses!2sve!4v1593468264641!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';



 //FUNCIONES SEGUNDA LINEA
 sabanados.onclick=function (params) {
    contenido_mapa.innerHTML=mapa_sabdos;
}
valena.onclick=function (params) {
    contenido_mapa.innerHTML=mapa_valena;

}

ojena.onclick=function (params) {
    contenido_mapa.innerHTML=mapa_ojen;
}
catica.onclick=function (params) {
    contenido_mapa.innerHTML=mapa_cati;

}
trina.onclick=function (params) {
    contenido_mapa.innerHTML=mapa_trina;
}
apure.onclick=function (params) {
    contenido_mapa.innerHTML=mapa_apur;

}


}