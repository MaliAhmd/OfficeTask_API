// document.querySelector('.arrow').addEventListener('click',function(){
//     document.querySelector('.leftmenu').classList.toggle('hidden');
    
// })
document.getElementById('arrow-left').addEventListener('click', function() {
    document.querySelector('.arrow').classList.toggle('rightalign')
    document.getElementById('arrow-right').style.display = 'inline';
    toggleMenu();
});

document.getElementById('arrow-right').addEventListener('click', function() {
    document.getElementById('arrow-right').style.display = 'none';
    document.querySelector('.arrow').classList.remove('rightalign')
    document.getElementById('arrow-left').style.display = 'inline';
    toggleMenu();
});

function toggleMenu() {
    let leftmenu = document.querySelector('.leftmenu');
    let inner = document.querySelector('.inner');

    leftmenu.classList.toggle('hide');
    inner.classList.toggle('full-width');
}

function section(sectionName){
    const home=document.querySelector('.home');
    const gamelist=document.querySelector('.gamelist');
    const bettinglist=document.querySelector('.bettinglist');
    const chargeexchange=document.querySelector('.chargeexchange');
    const exchangerequest=document.querySelector('.exchangerequest');

    if(sectionName==='home'){
        home.classList.remove('hidden');
        gamelist.classList.add('hidden');
        bettinglist.classList.add('hidden');
        chargeexchange.classList.add('hidden');
        exchangerequest.classList.add('hidden');
    }else if(sectionName==='gamelist'){ 
        home.classList.add('hidden');
        gamelist.classList.remove('hidden');
        bettinglist.classList.add('hidden');
        chargeexchange.classList.add('hidden');
        exchangerequest.classList.add('hidden');
    }else if(sectionName==='bettinglist'){
        home.classList.add('hidden');
        gamelist.classList.add('hidden');
        bettinglist.classList.remove('hidden');
        chargeexchange.classList.add('hidden');
        exchangerequest.classList.add('hidden');
    }
    else if(sectionName==='chargeexchange'){
        home.classList.add('hidden');
        gamelist.classList.add('hidden');
        bettinglist.classList.add('hidden');
        chargeexchange.classList.remove('hidden');
        exchangerequest.classList.add('hidden');
    }else if(sectionName==='exchangerequest'){
        home.classList.add('hidden');
        gamelist.classList.add('hidden');
        bettinglist.classList.add('hidden');
        chargeexchange.classList.add('hidden');
        exchangerequest.classList.remove('hidden');
    }
}

const navigationlink=document.querySelectorAll('.section li');
navigationlink.forEach(link=>{
    link.addEventListener('click',function(event){
        event.preventDefault();
        const sectionName=this.getAttribute('data-section');
        section(sectionName);
    })
})

// dropdown js
// Get all elements with class 'drop'
var dropElements = document.querySelectorAll('.drop');

// Loop through each 'drop' element and attach a click event listener
dropElements.forEach(function(dropElement) {
    dropElement.addEventListener('click', function() {
        var downElement = this.nextElementSibling;
        var isCurrentlyDisplayed = downElement.style.display === 'block';
        var allDownElements = document.querySelectorAll('.down');
        allDownElements.forEach(function(element) {
            element.style.display = 'none';
        });
        if (!isCurrentlyDisplayed) {
            downElement.style.display = 'block';
        }
    });
});
