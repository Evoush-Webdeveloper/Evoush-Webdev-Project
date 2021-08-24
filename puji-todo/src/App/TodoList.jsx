import React from 'react'
import Todo from './Todo.jsx'

export default function TodoList({todos}){
	return (
		todos.map(d => (
			<Todo key={d} todo={d} />
		))
	)
}