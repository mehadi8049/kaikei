import React from 'react'
import { Outlet,NavLink } from 'react-router-dom'
export default function dashboard() {
  return (
    <div>
      {/* This element will render either <DashboardMessages> when the URL is
          "/messages", <DashboardTasks> at "/tasks", or null if it is "/"
      */}
      <Outlet />
    </div>
  )
}
