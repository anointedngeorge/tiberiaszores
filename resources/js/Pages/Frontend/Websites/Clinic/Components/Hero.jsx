

import React from 'react'
import { SETTINGS } from '../utils'


export const HeroPage = () => {
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
            <div className="col-lg-6  fadeIn" data-wow-delay="0.5s">
                <img src='./sys/bg2.jpeg' className='img-responsive'  style={{width:'100%', height:'650px'}} />
            </div>
        </div>
        </div>
  )
}
