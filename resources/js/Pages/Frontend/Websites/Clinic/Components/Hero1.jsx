

import React from 'react'
import { SETTINGS } from '../utils'


export const HeroPage1 = () => {
  return (
        <div className="container-fluid header bg-primary p-0 mb-5">
        <div className="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div className="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 className="display-4 text-white mb-5">{SETTINGS?.hero_title}</h1>
            <div className="row g-4">
                <div className="col-sm-4">
                <div className="border-start border-light ps-4">
                    <h2 className="text-white mb-1" data-toggle="counter-up">{SETTINGS.expert_staff.total}</h2>
                    <p className="text-light mb-0">{SETTINGS.expert_staff.title}</p>
                </div>
                </div>
                <div className="col-sm-4">
                <div className="border-start border-light ps-4">
                    <h2 className="text-white mb-1" data-toggle="counter-up">{SETTINGS.medical_stuff.total}</h2>
                    <p className="text-light mb-0">{SETTINGS.medical_stuff.title}</p>
                </div>
                </div>
                <div className="col-sm-4">
                <div className="border-start border-light ps-4">
                    <h2 className="text-white mb-1" data-toggle="counter-up">{SETTINGS.total_patients.total}</h2>
                    <p className="text-light mb-0">{SETTINGS.total_patients.title}</p>
                </div>
                </div>
            </div>
            </div>
            <div className="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div className="owl-carousel header-carousel">
                <div className="owl-carousel-item position-relative">
                <img className="img-fluid" src="../../clinic/img/carousel-1.jpg" alt="" />
                <div className="owl-carousel-text">
                    <h1 className="display-1 text-white mb-0">Cardiology</h1>
                </div>
                </div>
                <div className="owl-carousel-item position-relative">
                <img className="img-fluid" src="../../clinic/img/carousel-2.jpg" alt="" />
                <div className="owl-carousel-text">
                    <h1 className="display-1 text-white mb-0">Neurology</h1>
                </div>
                </div>
                <div className="owl-carousel-item position-relative">
                <img className="img-fluid" src="../../clinic/img/carousel-3.jpg" alt="" />
                <div className="owl-carousel-text">
                    <h1 className="display-1 text-white mb-0">Pulmonary</h1>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
  )
}
