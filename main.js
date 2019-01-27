document.addEventListener('DOMContentLoaded',function(){
    var load = document.querySelector('#loadingWindow');
    var sections = document.querySelectorAll('section');

    [].forEach.call(sections,function(section){
        section.style.display = 'block';
    });
    
    load.style.display = 'none';
});


var startHeight = $('#welcome').height();

if(startHeight > 700) startHeight = startHeight - 700;
else if(startHeight <= 700) startHeight = 0;

$.each($('#welcome nav ul li:not(:nth-child(1))'),function(){
    var $dataScrollNumber = Number($(this).attr('data-scroll-position'));
    $(this).attr('data-scroll-position',`${$dataScrollNumber + startHeight}`);
})


const projectData = [
    {
        name: 'Drawing',
        imgUrl: 'portfolio/drawing.png',
        content: 'Stronka zrobiona pod portfolio',
        tech: ['HTML','SCSS / CSS','JavaScript']
    },
    {
        name: 'softhard',
        imgUrl: 'portfolio/wordpress.png',
        content: 'Stronka zrobiona pod portfolio :)',
        tech: ['HTML','SCSS / CSS','JavaScript','WordPress']
    }
];

const mainBoxImg = document.querySelector('#projects .project-container .main-box');
const leftBoxImg = document.querySelectorAll('#projects .project-container .left-box img');

function changeUrl(src){
    const boxSrc = mainBoxImg.querySelector('img');
    const boxName = mainBoxImg.querySelector('.project-info h4');
    const boxContent = mainBoxImg.querySelector('.project-info p');
    const boxTags = mainBoxImg.querySelector('.tags');

    const srcValue = src.split('/');
    const srcCurrentValue = `${srcValue[0]}/${srcValue[2]}`;

    for(const value of projectData){
        if(value.imgUrl == srcCurrentValue){
            if(value.imgUrl != boxSrc.getAttribute('src')){
                boxSrc.style.opacity = 0;

                setTimeout(() => {
                    boxSrc.setAttribute('src',`${value.imgUrl}`);
                    boxSrc.style.opacity = 1;

                    boxName.textContent = value.name;
                    boxContent.textContent = value.content;

                    if(boxTags.innerHTML != null) boxTags.innerHTML = '';

                    value.tech.forEach(function(tag){
                        boxTags.innerHTML += `
                            <span>${tag}</span>
                        `
                    })
                },400)
            }
        }
    }
}

for(const value of leftBoxImg){
    value.onclick = function(){
        const currentValue = this.getAttribute('src');
        changeUrl(currentValue);
    }
}

$('#welcome nav ul li').click(function(){
    $positionValue = $(this).attr('data-scroll-position');
    $('html').animate({
        scrollTop: $positionValue - 50
    },1000);
})

$('#welcome button').click(()=>{
    $('html').animate({
        scrollTop: ($(window).height() - 50) + 'px'
    },1000);
});

$(window).scroll(function(){
    if($(this).scrollTop() >= 400){
        $('#welcome nav').css({
            position: 'fixed',
            top: 0,
            width: '100%'
        });
    }
    else{
        $('#welcome nav').css({
            position: 'absolute',
            top: '400px',
            width: '800px'
        })
    }
});