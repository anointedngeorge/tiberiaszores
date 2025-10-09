

import '../../Clinic/css/app.css';
import React from 'react'
import { Logo } from './Logo';
import { SETTINGS } from '../utils';
import { IoLogoWhatsapp } from 'react-icons/io5';
import { Head } from '@inertiajs/react';


const Spinner = () =>  {
  return (
    <div id="spinner" className="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div className="spinner-grow text-primary" style={{width: '3rem', height: '3rem'}} role="status">
        <span className="sr-only"></span>
      </div>
    </div>
  )
}

const Navigation = () => {
  const sortedLinks = [...(SETTINGS?.links || [])].sort((a, b) => a.index - b.index);
    return (
      <div className="navbar-nav ms-auto p-4 p-lg-0">
              {sortedLinks.map((item, index) => (
                <>
                  <a href={`${item.link}`} key={`${index}_links`} className={"nav-item nav-link " + item?.classname}>{item?.title}</a>
                 
                  {item?.has_children? (
                      <> 
                        <div className="nav-item dropdown">
                        <a href="#" className="nav-link dropdown-toggle" data-bs-toggle="dropdown">{item.title}</a>
                        <div className="dropdown-menu rounded-0 rounded-bottom m-0">
                          {item?.children.map((link, index) => (
                            <a href={`${link.link}`} key={`${index}_sub_links`} className="dropdown-item">{link.title}</a>
                          ))}
                        </div>
                      </div>
                      </>
                  ) : ''}
                </>
              ) )}
            </div>
    );
}

export default function ClientFrontendLayout({children})  {

  return (
    <main>

      <Head>
          <title>Home</title>
          <meta content="width=device-width, initial-scale=1.0" name="viewport" />
          <meta content={SETTINGS.meta_keywords} name="keywords" />
          <meta content={SETTINGS.why_choose_us} name="description" />
      </Head>

        {/* <Spinner /> */}
      <div>
        {/* Topbar Start */}
        <div className="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
          <div className="row gx-0 d-none d-lg-flex">
            <div className="col-lg-7 px-5 text-start">
              <div className="h-100 d-inline-flex align-items-center py-3 me-4">
                <small className="fa fa-map-marker-alt text-primary me-2" />
                <small>{SETTINGS.address}</small>
              </div>
              <div className="h-100 d-inline-flex align-items-center py-3">
                <small className="far fa-clock text-primary me-2" />
                <small>{SETTINGS.time}</small>
              </div>
            </div>
            <div className="col-lg-5 px-5 text-end">
              <div className="h-100 d-inline-flex align-items-center py-3 me-4">
                <small className="fa fa-phone-alt text-primary me-2" />
                <small>{SETTINGS.phone1}</small>
              </div>
              <div className="h-100 d-inline-flex align-items-center">
                <a className="btn btn-sm-square rounded-circle bg-white text-primary me-1" href={SETTINGS.facebook}><i className="fab fa-facebook-f" /></a>
                <a className="btn btn-sm-square rounded-circle bg-white text-primary me-1" href={SETTINGS.twitter} ><i className="fab fa-twitter" /></a>
                <a className="btn btn-sm-square rounded-circle bg-white text-primary me-1" href={SETTINGS.linkedin} ><i className="fab fa-linkedin-in" /></a>
                <a className="btn btn-sm-square rounded-circle bg-white text-primary me-0" href={SETTINGS.instagram} ><i className="fab fa-instagram" /></a>
              </div>
            </div>
          </div>
        </div>
        {/* Topbar End */}
        {/* Navbar Start */}
        <nav className="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
          {/* <a href="index.html" className="navbar-brand d-flex align-items-center px-4 px-lg-5">
            
          </a> */}
          <Logo 
            width={70} 
            height={70} 
            title={"KamsiClinic"}
            classname="navbar-brand d-flex align-items-center px-4 px-lg-5"
          />
          {/*  */}
          <button type="button" className="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span className="navbar-toggler-icon" />
          </button>
          <div className="collapse navbar-collapse" id="navbarCollapse">
            <Navigation />
            <a href="#" className="btn btn-success rounded-0 py-4 px-lg-5 d-none d-lg-block">
                <span style={{margin:"0 5px 0 0"}}><IoLogoWhatsapp width={100} height={100} /></span>
                <span>Whatsapp</span> 
              {/* <i className="fa fa-arrow-right ms-3" /> */}
              </a>
          </div>
        </nav>
        {/* Navbar End */}
      </div>

        {children}

     <div>
      {/* Footer Start */}
      <div className="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div className="container py-5">
          <div className="row g-5">
            <div className="col-lg-3 col-md-6">
              <h5 className="text-light mb-4">Address</h5>
              <div className='text-cente mb-3'><Logo width={101} height={101} /></div>
              
              <p className="mb-2"><i className="fa fa-map-marker-alt me-3" />{SETTINGS.address}</p>
              <p className="mb-2"><i className="fa fa-phone-alt me-3" />{SETTINGS.phone1}</p>
              <p className="mb-2"><i className="fa fa-envelope me-3" />{SETTINGS.email}</p>
              <div className="d-flex pt-2">
                <a className="btn btn-outline-light btn-social rounded-circle" href={SETTINGS.twitter}><i className="fab fa-twitter" /></a>
                <a className="btn btn-outline-light btn-social rounded-circle" href={SETTINGS.facebook} ><i className="fab fa-facebook-f" /></a>
                <a className="btn btn-outline-light btn-social rounded-circle" href={SETTINGS.youtube} ><i className="fab fa-youtube" /></a>
                <a className="btn btn-outline-light btn-social rounded-circle" href={SETTINGS.linkedin} ><i className="fab fa-linkedin-in" /></a>
              </div>
            </div>
            <div className="col-lg-3 col-md-6">
              <h5 className="text-light mb-4">Services</h5>
              {SETTINGS?.services?.map((item, index) => (
                <a key={`${index}_service_bottom_link`} className="btn btn-link" href={`${item?.link}`} >{item.title}</a>
              ))}
            </div>
            <div className="col-lg-3 col-md-6">
              <h5 className="text-light mb-4">Quick Links</h5>
              {SETTINGS?.links?.map((item, index) => (
                <a key={`${index}_links_bottom_link`} className="btn btn-link" href={`${item?.link}`} >{item.title}</a>
              ))}
              
            </div>
            <div className="col-lg-3 col-md-6">
              <h5 className="text-light mb-4">Newsletter</h5>
              <p>{SETTINGS.newsletter}</p>
              <div className="position-relative mx-auto" style={{maxWidth: 400}}>
                <input className="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                <button type="button" className="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
              </div>
            </div>
          </div>
        </div>
        <div className="container">
          <div className="copyright">
            <div className="row">
              <div className="col-md-6 text-center text-md-start mb-3 mb-md-0">
                © <a className="border-bottom" href="#">kamsisochukwu</a>, All Right Reserved.
              </div>
              <div className="col-md-6 text-center text-md-end">
                {/*/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. *** /*/}
                Designed By <a className="border-bottom" href="https://htmlcodex.com">Team Codex</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* Footer End */}
      {/* Back to Top */}
      <a href="#" className="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i className="bi bi-arrow-up" /></a>
    </div>

    </main>
  )
}
