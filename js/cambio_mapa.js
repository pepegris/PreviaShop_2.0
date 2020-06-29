$(document).ready(function () {

    document.getElementById('acari').addEventListener('click',acari_mapa,false);

   

        function acari_mapa(){

            $('#mapa').replaceWith('<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.1286503443057!2d-66.85507502373623!3d10.490523269384678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12e82a3cb3dbb29d!2sCentro%20Sambil%20Caracas!5e0!3m2!1ses!2sve!4v1593452558771!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');

        }


        document.getElementById('sabana').addEventListener('click',sabana_mapa,false);

   

        function sabana_mapa(){

            $('#mapa').replaceWith('<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.19354329809192!2d-66.87471060611895!3d10.493043535814797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5921d5f8bd0d%3A0x48ec3b547ae773bf!2sApolo%20Shoes%202!5e0!3m2!1ses!2sve!4v1593450656636!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');

        }











document.getElementById('sabana').addEventListener('click',add_mapa,false);

   

        function add_mapa(){

            $('#mapa').replaceWith('');

        }










    
});