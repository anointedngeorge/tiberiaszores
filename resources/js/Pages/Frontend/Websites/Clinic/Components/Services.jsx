import React from 'react'
import { SETTINGS } from '../utils'

export const Services = () => {
  return (
    <div className="container-xxl py-5">
        <div className="container">
            <div className="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style={{maxWidth: 600}}>
            <p className="d-inline-block border rounded-pill py-1 px-4">Services</p>
            <h1>Health Care Solutions</h1>
            </div>
            <div className="row g-4">
            
            {SETTINGS.services.map((item, index) => (
                <div key={`${index}_service_loop`} className="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div className="service-item bg-light rounded h-100 p-5">
                <div className="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style={{width: 65, height: 65}}>
                    <i className={`${item?.icon} text-primary fs-4`} />
                </div>
                <h4 className="mb-3">{item?.title}</h4>
                <p className="mb-4">{item?.content}</p>
                <a className="btn" href={`${item?.link}`} ><i className="fa fa-plus text-primary me-3" />Read More</a>
                </div>
            </div>
            ))}
            
         
            </div>
        </div>
    </div>
  )
}
