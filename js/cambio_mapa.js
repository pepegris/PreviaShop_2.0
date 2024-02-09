

const app = new Vue({


   el: '.flex',

   data: {



      contenido_mapa: '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8116339.866801352!2d-71.91021920672611!3d6.639896872978509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2853cb36cbd801%3A0xdca0f2587cd54dd3!2sVenezuela!5e0!3m2!1ses!2sve!4v1707486515957!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      //LOS MAPAS
      //REALES
      mapa_pufijo: '<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d266.29215825289873!2d-70.20760421648127!3d11.690454196649789!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDQxJzI1LjciTiA3MMKwMTInMjcuNCJX!5e0!3m2!1ses!2sve!4v1707486179314!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_higue: '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d367.384074140261!2d-66.09989995958558!3d10.485581933103031!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2b9b711ece2ceb%3A0x9dc3d44b647417f9!2sROCKY%20La%20Meca%20Del%20Calzado!5e0!3m2!1ses!2sve!4v1707486239832!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_ojena: '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.42567451467897!2d-71.31562004070877!3d10.196015510079278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e89d10beadb69bd%3A0xca0c28c915880c95!2s4019%20Av.%20Bolivar%2C%20Cd%20Ojeda%204019%2C%20Zulia!5e0!3m2!1ses!2sve!4v1707486304661!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_ac: '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.6088380839342!2d-69.2083157067459!3d9.55768778230585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e7dc176cc1932f1%3A0x30a7351b1df24d27!2sRocky%20La%20Meca%20Del%20Calzado!5e0!3m2!1ses!2sve!4v1707486374558!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_puecruz: '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245.40707875534625!2d-64.63658472376765!3d10.22012469028336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2d743babb1c1df%3A0x9139a37922e71f28!2sRocky!5e0!3m2!1ses!2sve!4v1707486411836!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_trina: '<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d388.02200954653284!2d-69.67434805337986!3d11.406325173796004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDI0JzIyLjYiTiA2OcKwNDAnMjcuOCJX!5e0!3m2!1ses!2sve!4v1707486434949!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_matur: '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245.76429463841976!2d-63.17988443130017!3d9.746684343807564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c3340b5f5cc7ba7%3A0x785a01cd93395262!2sZapateria%20Rocky!5e0!3m2!1ses!2sve!4v1707486474432!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_coro1:'<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3911.008661722353!2d-69.6738889!3d11.4069167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDI0JzI0LjkiTiA2OcKwNDAnMjYuMCJX!5e0!3m2!1ses!2sve!4v1707491662508!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_valena:'<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d981.7439684701973!2d-68.0013562!3d10.1826145!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTDCsDEwJzU3LjkiTiA2OMKwMDAnMDMuOCJX!5e0!3m2!1ses!2sve!4v1707491771784!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_apura:'<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3926.41626374208!2d-67.8720278!3d10.2279722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTDCsDEzJzQwLjciTiA2N8KwNTInMTkuMyJX!5e0!3m2!1ses!2sve!4v1707491694731!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_catica:'<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3928.1843975927786!2d-67.7826944!3d10.0839722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTDCsDA1JzAyLjMiTiA2N8KwNDYnNTcuNyJX!5e0!3m2!1ses!2sve!4v1707491839519!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_valle: '<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d984.5873154828112!2d-66.0051354!3d9.2130231!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOcKwMTInNDcuNyJOIDY2wrAwMCcxNy41Ilc!5e0!3m2!1ses!2sve!4v1707491911127!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_coro2:'<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3910.9850695707605!2d-69.677606!3d11.4086296!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDI0JzMxLjkiTiA2OcKwNDAnMzkuOSJX!5e0!3m2!1ses!2sve!4v1707493334845!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      mapa_nachari:'<iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d976.7603087271266!2d-70.208959!3d11.6914902!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDQxJzI5LjAiTiA3MMKwMTInMzEuMCJX!5e0!3m2!1ses!2sve!4v1707505632366!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
      
      //REALES  

      //FALTANTES
      mapa_sab: '<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.19354329809192!2d-66.87471060611895!3d10.493043535814797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5921d5f8bd0d%3A0x48ec3b547ae773bf!2sApolo%20Shoes%202!5e0!3m2!1ses!2sve!4v1593450656636!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
      mapa_sabana_grande:'',
      mapa_turme: '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62819.626277888616!2d-67.52639344996703!3d10.24329637720832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e802155c56a4ee5%3A0xb22e37eb965185f2!2sTurmero%2C%20Aragua!5e0!3m2!1ses!2sve!4v1593465480986!5m2!1ses!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
      
      mapa_cagua:'',


      mapa_venezuela: '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8116339.866801352!2d-71.91021920672611!3d6.639896872978509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2853cb36cbd801%3A0xdca0f2587cd54dd3!2sVenezuela!5e0!3m2!1ses!2sve!4v1707486515957!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',

   },

   methods: {

      home: function () {
         this.contenido_mapa = this.mapa_venezuela;

      },
      sabana: function () {
         this.contenido_mapa = this.mapa_sab;

      },

      sabana_grande: function (params) {
         this.contenido_mapa = this.mapa_sabana_grande;
      },

      //REALES

      pufijo: function () {
         this.contenido_mapa = this.mapa_pufijo;
      },


      higue: function (params) {
         this.contenido_mapa = this.mapa_higue;

      },
      ojena: function (params) {
         this.contenido_mapa = this.mapa_ojena;
      },
      acari: function () {

         this.contenido_mapa = this.mapa_ac;
      },

      puecruz: function (params) {
         this.contenido_mapa = this.mapa_puecruz;

      },

      matur: function (params) {
         this.contenido_mapa = this.mapa_matur;
      },
      trina: function (params) {
         this.contenido_mapa = this.mapa_trina;
      },
      //REALES

      //FALTANTES

      turme: function () {
         this.contenido_mapa = this.mapa_turme;

      },

      valle: function (params) {
         this.contenido_mapa = this.mapa_valle;
      },

      valena: function (params) {
         this.contenido_mapa = this.mapa_valena;

      },

      catica: function (params) {
         this.contenido_mapa = this.mapa_catica;

      },

      apura: function (params) {
         this.contenido_mapa = this.mapa_apura;

      },

      nachari: function (params) {
         this.contenido_mapa = this.mapa_nachari;

      },


      coro1: function (params) {
         this.contenido_mapa = this.mapa_coro1;

      },

      coro2: function (params) {
         this.contenido_mapa = this.mapa_coro2;

      },
      cagua: function (params) {
         this.contenido_mapa = this.mapa_cagua;

      },

      //FALTANTES

   },


})