const link = document.getElementById('link')
const link2 = document.getElementById('link2')
const link3 = document.getElementById('link3')
const link4 = document.getElementById('link4')
const paragrafo1 = document.getElementById('paragrafo1')
const pt2 = document.getElementById('pt2')
const foot = document.getElementById('foot')
const pt3 = document.getElementById('pt3')

link.addEventListener('click', function(event){
    event.preventDefault()
    paragrafo1.scrollIntoView({behavior: "smooth"})
})

link2.addEventListener('click', function(event){
    event.preventDefault()
    pt2.scrollIntoView({behavior: "smooth"})
})
link4.addEventListener('click', function(event){
    event.preventDefault()
    foot.scrollIntoView({behavior: "smooth"})
})
link3.addEventListener('click', function(event){
    event.preventDefault()
    pt3.scrollIntoView({behavior: "smooth"})
})

// Menu

const button = document.querySelector("button")
const modal = document.querySelector("dialog")
const buttonClose = document.querySelector("dialog button") 

button.onclick = function(){
    modal.showModal()
}

buttonClose.onclick = function(){
    modal.close()
    modal.style.display = 'none'; 
}
  