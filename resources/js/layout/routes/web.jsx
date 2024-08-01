import React from 'react'
import { Routes, Route } from 'react-router-dom'

import Dashboard from './../dashboard'
import Index from './../components/index'
import Test from './../components/test'

export default function web() {
  return (
    <Routes>
        <Route path="/" element={<Dashboard />}>
            <Route path="/" element={<Index />}/>
            <Route path="test" element={<Test />}/>
        </Route>
    </Routes>
  )
}
