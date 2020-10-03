

const app = new Vue({
    

    el:'.flex',

    data:{

       
                 

        contenido_mapa:'<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.19354329809192!2d-66.87471060611895!3d10.493043535814797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5921d5f8bd0d%3A0x48ec3b547ae773bf!2sApolo%20Shoes%202!5e0!3m2!1ses!2sve!4v1593450656636!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
        //LOS MAPAS
         mapa_ac:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2272.873048648565!2d-69.1836783649238!3d9.551279942556423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e7dc3c250dcbae7%3A0xb4bff8f960f4ca1e!2sIMPORTADORA%20HERNANDEZ!5e0!3m2!1ses!2sve!4v1593465418810!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
         mapa_sab:'<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.19354329809192!2d-66.87471060611895!3d10.493043535814797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5921d5f8bd0d%3A0x48ec3b547ae773bf!2sApolo%20Shoes%202!5e0!3m2!1ses!2sve!4v1593450656636!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
         mapa_turme:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62819.626277888616!2d-67.52639344996703!3d10.24329637720832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e802155c56a4ee5%3A0xb22e37eb965185f2!2sTurmero%2C%20Aragua!5e0!3m2!1ses!2sve!4v1593465480986!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
         mapa_pufijo:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31254.645939863738!2d-70.20214159180891!3d11.70639766844801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e85ed24b8524353%3A0x18abea72d12fd565!2sPunto%20Fijo%2C%20Falc%C3%B3n!5e0!3m2!1ses!2sve!4v1593465538648!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
         mapa_valle:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31506.753192936!2d-66.01935634287926!3d9.213481677148515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8dd48518263d5483%3A0x3ff11a8027efef97!2sValle%20de%20la%20Pascua%202350%2C%20Gu%C3%A1rico!5e0!3m2!1ses!2sve!4v1593465575684!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
         mapa_puecruz:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62827.5652244711!2d-64.66721975003523!3d10.203149284234774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2d740d55b939f1%3A0x6a6baaf6f31a1448!2sPuerto%20La%20Cruz%2C%20Anzo%C3%A1tegui!5e0!3m2!1ses!2sve!4v1593465602350!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
         mapa_higue:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62775.072523112394!2d-66.13894044958421!3d10.465777238337258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2b9c7829fd3a1d%3A0xcecbcd83ac988a5!2sHiguerote%2C%20Miranda!5e0!3m2!1ses!2sve!4v1593465656966!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
         mapa_matur:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62915.12730651573!2d-63.22583610078764!3d9.749505063881903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c3340ccdd67a481%3A0x498e5fe3065f3956!2sMatur%C3%ADn%206201%2C%20Monagas!5e0!3m2!1ses!2sve!4v1593465697257!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
        
            // MAPAS SEGUNDIA LINEA
             mapa_valena:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62833.589499267175!2d-68.029243350087!3d10.172580039587393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e80678bce61928f%3A0x9f78e9eea8c34272!2sValencia%2C%20Carabobo!5e0!3m2!1ses!2sve!4v1593467573207!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
             mapa_trina:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7847.625500160655!2d-66.87397227334677!3d10.436428870211088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2af63b11d2aa59%3A0xfff855ca2ab91e1!2sLa%20Trinidad%2C%20Caracas%201080%2C%20Miranda!5e0!3m2!1ses!2sve!4v1593467860996!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
/*               mapa_sabdos='<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.19354329809192!2d-66.87471060611895!3d10.493043535814797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5921d5f8bd0d%3A0x48ec3b547ae773bf!2sApolo%20Shoes%202!5e0!3m2!1ses!2sve!4v1593450656636!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
 */             mapa_ojen:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31412.7482836308!2d-71.33098029248015!3d10.213625483107347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e89cfd18ee233f1%3A0x6e7bd941b5edce8e!2sCd%20Ojeda%2C%20Zulia!5e0!3m2!1ses!2sve!4v1593468207522!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
             mapa_cati:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1961.4047765980517!2d-66.94609144179242!3d10.51566139812469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5ef41d6113a5%3A0x1674c3ec3ee0cbde!2sCatia%2C%20Caracas%201030%2C%20Distrito%20Capital!5e0!3m2!1ses!2sve!4v1593468235828!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
             mapa_apur:'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.913763111335!2d-66.8812804846139!3d10.507458392504342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5917c5d8393f%3A0xecf01b6412f5f9fa!2sApure%2C%20Caracas%201050%2C%20Distrito%20Capital!5e0!3m2!1ses!2sve!4v1593468264641!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
        
        
    


    },

     methods: {
        sabana:function () {
            this.contenido_mapa=this.mapa_sab;
             
         },
        
         acari:function () {
        
            this.contenido_mapa=this.mapa_ac;
         },
         turme:function () {
            this.contenido_mapa=this.mapa_turme;
             
         },
         pufijo:function () {
            this.contenido_mapa=this.mapa_pufijo;
         },
         valle:function (params) {
            this.contenido_mapa=this.mapa_valle;
         },
         puecruz:function (params) {
            this.contenido_mapa=this.mapa_puecruz;
        
         },
         higue:function (params) {
            this.contenido_mapa=this.mapa_higue;
        
         },
         matur:function (params) {
            this.contenido_mapa=this.mapa_matur;
         },
        
        
            //FUNCIONES SEGUNDA LINEA
            sabanados:function (params) {
                this.contenido_mapa=this.mapa_sabdos;
            },
            valena:function (params) {
                this.contenido_mapa=this.mapa_valena;
        
            },
        
            ojena:function (params) {
                this.contenido_mapa=this.mapa_ojen;
            },
            catica:function (params) {
                this.contenido_mapa=this.mapa_cati;
        
            },
            trina:function (params) {
                this.contenido_mapa=this.mapa_trina;
            },
            apure:function (params) {
                this.contenido_mapa=this.mapa_apur;
        
            },
        
    },
 
   
})