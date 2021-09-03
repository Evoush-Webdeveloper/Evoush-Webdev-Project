// function TodoList(){
// 	const nomor = document.querySelector('input[type="hidden"]').value
// 	setValue(nomor)
// }


// function setTodo(number)
// {
// 	const judul = document.querySelector('input[name="judul"]').value
// 	const todolist = document.getElementById('todo-list')

//     var value = parseInt(number);
//     value = isNaN(value) ? 0 : value;
//     value++;
//     const no = document.querySelector('input[type="hidden"]').value = value;
//     // const TableRow = document.createElement('tr')
//     // TableRow.innerHTML = `
//     // 	<tr>
//     // 		<td>${no}</td>
//     // 		<td>${judul}</td>
//     // 	</tr>
//     // `
//     // todolist.appendChild(TableRow)

//     let todos = []
//     const todo = {
//         id: no,
//         judul: judul
//     }

//     todos.push(todo)

//     addToLocalStorage(todos)

// }

// function addToLocalStorage(todos){
//     localStorage.setItem('todos', JSON.stringify(todos))
// }


const todoForm = document.querySelector('#todo-form')
const todoInput = document.querySelector('#judul')
const todoList = document.querySelector('#todo-list')

let todos = []

todoForm.addEventListener('submit', function(e){
    e.preventDefault()
    addTodo(todoInput.value)
})

function addTodo(item){
    if(item !== ''){
        const date = Date.now()
        const todo = {
            id: new Date(date).toLocaleDateString(),
            name: item,
            completed: true
        }
        todos.push(todo)
        addLocalStorage(todos)
        todoInput.value=''
    }
}

function renderTodos(todos){
    console.log(todos)
    todoList.innerHTML = ''

    todos.map(item => {
        const checked = item.completed ? 'checked' : null

        const tr = document.createElement('tr')

        tr.setAttribute('class', 'item')
        tr.setAttribute('data-key', item.id)

        if(item.completed === true){
            tr.classList.add('checked')
        }

        tr.innerHTML = `
            <td>${item.id}</td>
            <td>${item.name}</td>
        `
        todoList.appendChild(tr)

    })
}

function addLocalStorage(todos){
    localStorage.setItem('todos', JSON.stringify(todos))
    renderTodos(todos)
}

function getFromLocalStorage(){
    const reference = localStorage.getItem('todos')

    if(reference){
        todos = JSON.parse(reference)
        renderTodos(todos)
    }
}