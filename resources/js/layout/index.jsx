import React from 'react'
import { BrowserRouter as Router } from 'react-router-dom'
import Web from './routes/web'


export default function index() {
  return (
    <Router>
      <Web/>
    </Router>
    
  )
}
