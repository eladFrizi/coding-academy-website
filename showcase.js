// const studentsProjs = {
//     april17: [
//         {
//             name: 'Weddix',
//             creators: ['Anton Pavlenkov', 'Keren Dotan Cohen', 'Elad Frizi'],
//             gitHub: 'https://github.com/AntonPavlenkov/Weddix',
//             link: 'https://weddix.herokuapp.com/',
//             desc: 'Build your digital wedding invation',
//             thumbnail: 'http://via.placeholder.com/300x300'
//         },
//         {
//             name: 'Weddix',
//             creators: ['Anton Pavlenkov', 'Keren Dotan Cohen', 'Elad Frizi'],
//             gitHub: 'https://github.com/AntonPavlenkov/Weddix',
//             link: 'https://weddix.herokuapp.com/',
//             desc: 'Build your digital wedding invation',
//             thumbnail: 'http://via.placeholder.com/300x300'
//         },
//     ],
//     november16: [
//         {
//             name: 'Weddix',
//             creators: ['Anton Pavlenkov', 'Keren Dotan Cohen', 'Elad Frizi'],
//             gitHub: 'https://github.com/AntonPavlenkov/Weddix',
//             link: 'https://weddix.herokuapp.com/',
//             desc: 'Build your digital wedding invation',
//             thumbnail: 'http://via.placeholder.com/300x300'
//         },
//         {
//             name: 'Weddix',
//             creators: ['Anton Pavlenkov', 'Keren Dotan Cohen', 'Elad Frizi'],
//             gitHub: 'https://github.com/AntonPavlenkov/Weddix',
//             link: 'https://weddix.herokuapp.com/',
//             desc: 'Build your digital wedding invation',
//             thumbnail: 'http://via.placeholder.com/300x300'
//         },

//     ]

// }

function getStudentsProjs() {
    return {
        'April 17': [
            {
                name: 'Weddix',
                creators: ['Anton Pavlenkov', 'Keren Dotan Cohen', 'Elad Frizi'],
                gitHub: 'https://github.com/AntonPavlenkov/Weddix',
                link: 'https://weddix.herokuapp.com/',
                subtitle: 'Build your digital wedding invation',
                thumbnail: './images/projs/weddix.png',
                desc: `We faced a vary challanges in this projects. From the archticture of the app to the how we should mange our data. We decide to use vuex, implemntion of 
                Flux state mangement for vue.`
            },
            {
                name: 'kinderYA!',
                creators: ['Erez Vishna', 'Tamir Kiaty', 'Meir ???'],
                gitHub: 'https://github.com/erezvish/kindergarden-royal',
                link: 'https://the-kinderya.herokuapp.com/intro/',
                subtitle: 'The App To Mange Your kinderGraden',
                thumbnail: './images/projs/kinderya.png',
                desc: `Our main challange in the project was to bring a good cross-platfrom and cross-device UI and UX experince.`
            },
            {
                name: 'TodoBum',
                creators: ['Gal Aviv', 'Evyatar Karus', 'Guy Kedar'],
                gitHub: 'https://github.com/galzunited/tudo_bom',
                link: 'https://tudo-bom.herokuapp.com/#/todo-main/home',
                subtitle: 'Make Your City TodoBum Again',
                thumbnail: './images/projs/todoBum.png',

            },
            {
                name: 'Mingler',
                creators: ['Keren Oren', 'Assaf Margalit', 'Ilan Ben-Yosef'],
                gitHub: 'https://github.com/ilanbenyos/mingler',
                link: 'https://minglers.herokuapp.com/',
                subtitle: 'Meet a Partner For Tonghit',
                thumbnail: './images/projs/mingler.png'
            },

        ],
        'November 16': [
            {
                name: 'Weddix',
                creators: ['Anton Pavlenkov', 'Keren Dotan Cohen', 'Elad Frizi'],
                gitHub: 'https://github.com/AntonPavlenkov/Weddix',
                link: 'https://weddix.herokuapp.com/',
                subtitle: 'Build your digital wedding invation',
                thumbnail: 'http://via.placeholder.com/480x270'
            },
            {
                name: 'Weddix',
                creators: ['Anton Pavlenkov', 'Keren Dotan Cohen', 'Elad Frizi'],
                gitHub: 'https://github.com/AntonPavlenkov/Weddix',
                link: 'https://weddix.herokuapp.com/',
                subtitle: 'Build your digital wedding invation',
                thumbnail: 'http://via.placeholder.com/480x270'
            },

        ]

    }
}


function getProjHTML(proj) {
    return (`
        <div class="proj" style="text-align: center">
        <div class="proj-content">
        <img class="proj-thumbnail" src="${proj.thumbnail}" >
        <h4 class="proj-name">${proj.name}</h4>
        <p class="proj-subtitle">${proj.subtitle}</p>        
        <p class="proj-creators">${proj.creators.join(' , ')}</p>
        <p class="proj-desc"> ${proj.desc}</p>
        </div>
        <p class="proj-links">  
        <a href="${proj.link}">Live Demo</a>
        
        <a href="${proj.gitHub}">
         <i class="icon-github" ></i>
        </a>
        </p>
        </div>
        `
    )
}

function getHTML(studentsProjs) {
    var strHTML = '<div>'
    for (let cycle in studentsProjs) {
        var cycleShowcase = '<div class="cycle">'
        cycleShowcase += `<h3 class="cycle-head">${cycle}</h3>`

        studentsProjs[cycle].forEach((proj) => {
            cycleShowcase += getProjHTML(proj);
        });

        cycleShowcase += '</div>'
        strHTML += cycleShowcase
    }
    strHTML += '</div>'

    return strHTML
}



function pageLoaded() {
    document.querySelector('#showcase').innerHTML += getHTML(getStudentsProjs())
}



