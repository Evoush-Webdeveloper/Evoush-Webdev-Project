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
            // id: new Date(date).toLocaleDateString(),
            id: date,
            name: item,
            completed: false
        }
        todos.push(todo)
        addLocalStorage(todos)
        todoInput.value=''
    }
}

function renderTodos(todos){
    todoList.innerHTML=''
    todos.forEach(function(item){
        const checked = item.completed ? 'checked' : null
        const li = document.createElement('li')

        li.setAttribute('class', 'item')
        li.setAttribute('data-key', item.id)

        if(item.completed === true){
            li.classList.add('checked')
        }
        li.innerHTML = `
            <input type="checkbox" class="checkbox" id="checkbox-${item.id}" ${checked}/>
            <label for="checkbox-${item.id}">${item.name}</label>
            <button class="delete-button">Delete</button>
        `
        todoList.append(li)
    })


}

function addLocalStorage(todos){
    console.log(todos)
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

function toggle(id){
    console.log(id)
    todos.forEach(function(item){
        if(item.id == id){
            item.completed = !item.completed
        }
    })

    addLocalStorage(todos)
}

function deleteTodo(id){
    todos = todos.filter(item => {return item.id != id})
    addLocalStorage(todos)
}

todoList.addEventListener('click', function(e){
    // console.log(e)
    if(e.target.type === "checkbox"){
        toggle(e.target.parentElement.getAttribute('data-key'))
    }

    if(e.target.classList.contains('delete-button')){
        deleteTodo(e.target.parentElement.getAttribute('data-key'))
    }
})
