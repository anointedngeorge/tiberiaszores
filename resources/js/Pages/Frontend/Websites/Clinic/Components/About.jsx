import React from 'react'

export const About = () => {
  return (
   <div className="container-xxl py-5">
  <div className="container">
    <div className="row g-5">
      <div className="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
        <div className="d-flex flex-column">
          <img className="img-fluid rounded w-75 align-self-end" src="./sys/p4.jpeg" alt="" />
          <img className="img-fluid rounded w-50 bg-white pt-3 pe-3" src="./sys/p1.jpeg" alt="" style={{marginTop: '-25%'}} />
        </div>
      </div>
      <div className="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <p className="d-inline-block border rounded-pill py-1 px-4">About Us</p>
        <h1 className="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
        <p>
        At our maternity clinic, trust is the foundation of everything we do. We understand that pregnancy is a deeply personal and life-changing journey, 
        and we are honored to walk that path with you. Our team of dedicated doctors, midwives, and healthcare professionals brings years of experience, medical expertise, and heartfelt compassion to every patient we serve.
        </p>
        <p className="mb-4">
          {`From antenatal care to delivery and postnatal support, we focus on providing a safe, welcoming, and empowering environment 
          for mothers and families. We take the time to listen, to educate, and to support you at every stage, because your peace of mind and the well-being of your baby matter to us. Choosing us means choosing a partner who genuinely cares—and who’s committed to your health, comfort, and happiness.`}
        </p>
        {/* <p><i className="far fa-check-circle text-primary me-3" />Quality health care</p>
        <p><i className="far fa-check-circle text-primary me-3" />Only Qualified Doctors</p>
        <p><i className="far fa-check-circle text-primary me-3" />Medical Research Professionals</p> */}
        {/* <a className="btn btn-primary rounded-pill py-3 px-5 mt-3" hre="#">Read More</a> */}
      </div>
    </div>
  </div>
</div>

  )
}
