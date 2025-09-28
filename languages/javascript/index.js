
// add elements to page
// append (everything) vs appendChild (append elements)
const body = document.body
// body.append("Hello World", "Bye")

// const div = document.createElement('div')
const span = document.querySelector('div')
span.style.backgroundColor = 'green';
// const strong = document.createElement('strong')
// strong.innerText = "Hello World 2"
// div.innerText="Hello World"
// div.textContent = "<strong>Hey World</strong>"
// div.innerHTML = "<strong>Hey World</strong>"
// div.append(strong)
// body.append(div)

// const div = document.querySelector('div')   
// console.log(div.textContent)
// console.log(div.innerText)


const div = document.querySelector('div')
const spanHi = document.querySelector('#hi')
const spanBye = document.querySelector('#bye')

// spanBye.remove()
// div.append(spanBye)

// div.removeChild(spanHi)
// spanHi.remove()

// console.log(spanHi.getAttribute("id"))
// console.log(spanHi.getAttribute("title"))
// console.log(spanHi.id)
// console.log(spanHi.title)

// console.log(spanHi.setAttribute('id', 'setting attribute id...'))
// console.log(spanHi.setAttribute('title', 'setting attribute title'))
// console.log(spanHi.id = 'setting id attribute')
// console.log(spanHi.title = 'setting title attribute')

// spanHi.removeAttribute('id')
// console.log(spanHi.dataset)
// console.log(spanHi.dataset.test)
// console.log(spanHi.dataset.longerName)

// spanHi.dataset.newName = "new property newName"

// spanHi.classList.add("newClass")
// spanHi.classList.remove('hi1')
// spanHi.classList.toggle('hi2')
// spanHi.classList.toggle('hi3')
// spanHi.classList.toggle('hi3', false)
// spanHi.classList.toggle('hi3', true)

spanHi.style.color = "light grey"
spanHi.style.backgroundColor = 'red'