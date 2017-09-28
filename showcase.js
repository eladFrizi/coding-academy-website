

function getProjHTML(proj, date) {

    return (`
        <div class="proj-container">
        <div class="proj" style="text-align: center">
        <div class="proj-content">
        <img class="proj-thumbnail" src="${proj.thumbnail4x3}" >
        <div class="proj-text">
        <h4 class="proj-name">${proj.name}</h4>
        <p class="proj-subtitle">${proj.subtitle}</p>        
        <p class="proj-creators">${proj.creators.join(' , ')}</p>
        <p class="proj-desc"> ${proj.desc}</p>  
        </div>
        </div>
        <p class="proj-links">  
        <a href="${proj.link}">Live Demo</a>
        <a href="proj.php?name=${proj.name}&date=${date}">
        More Detials
        </a>
        </p>
        </div>
        </div>
        `   
    )
}

function getHTML(studentsProjs) {
    var strHTML = '<div class="cycle">'
    for (let cycle in studentsProjs) {
        // var cycleShowcase = '<div class="cycle">'
        // cycleShowcase += `<h3 class="cycle-head">${cycle}</h3>`

        studentsProjs[cycle].forEach((proj) => {
            strHTML += getProjHTML(proj, cycle);
        });

        // cycleShowcase += '</div>'
        // strHTML += cycleShowcase
    }
    strHTML += '</div>'
    return strHTML
}



function pageLoaded() {
    fetch('projs.json')
        .then(res => res.json())
        .then(res => {
            document.querySelector('#showcase').innerHTML += getHTML(res)
        })

}



