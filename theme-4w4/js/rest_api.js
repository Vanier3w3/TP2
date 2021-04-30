
(function(){
    let boutton = document.getElementById('bout_nouvelles')
    let nouvelles = document.querySelector('.nouvelles section')
    console.log(boutton.id)

    //boutton.addEventListener('mousedown', monAjax)
    window.addEventListener('load', monAjax)

    function monAjax()
    {
        let maRequete = new XMLHttpRequest();
        console.log(maRequete)
        maRequete.open('GET', 'https://e1734174.webdev.cmaisonneuve.qc.ca/4W4/wp-json/wp/v2/posts?categories=5');
        maRequete.onload = function () {
            if(maRequete.status >= 200 && maRequete.status < 400){
                let data = JSON.parse(maRequete.responseText);
                let chaine = ''
                for (const elm of data){
                    chaine += '<h2>' + elm.title.rendered + '</h2>';
                    chaine += elm.content.rendered
                }
                nouvelles.innerHTML = chaine;

            } 
                else{
                console.log('La connexion est faite mais il y a une erreur')
            }
        }
        maRequete.onerror = function () {
            console.log("erreur de connexion");
        }
        maRequete.send()
    }
}())