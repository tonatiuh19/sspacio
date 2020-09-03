import React from 'react'

const Bar = () => {
    return (
        <>
        <nav className="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div className="container">
            <a className="navbar-brand" href="index.html">Car<span>Book</span></a>
            <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span className="oi oi-menu"></span> Menu
            </button>

            <div className="collapse navbar-collapse" id="ftco-nav">
                <ul className="navbar-nav ml-auto">
                <li className="nav-item"><a href="index.html" className="nav-link">Home</a></li>
                <li className="nav-item"><a href="about.html" className="nav-link">About</a></li>
                <li className="nav-item"><a href="services.html" className="nav-link">Services</a></li>
                <li className="nav-item"><a href="pricing.html" className="nav-link">Pricing</a></li>
                <li className="nav-item"><a href="car.html" className="nav-link">Cars</a></li>
                <li className="nav-item active"><a href="blog.html" className="nav-link">Blog</a></li>
                <li className="nav-item"><a href="contact.html" className="nav-link">Contact</a></li>
                </ul>
            </div>
            </div>
        </nav>
        <section className="hero-wrap hero-wrap-2 js-fullheight" style={{backgroundImage: "url('images/bg_3.jpg')"}} data-stellar-background-ratio="0.5">
            <div className="overlay"></div>
            <div className="container">
              <div className="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div className="col-md-9 ftco-animate pb-5">
                    <p className="breadcrumbs"><span className="mr-2"><a href="index.html">Home <i className="ion-ios-arrow-forward"></i></a></span> <span>Blog <i className="ion-ios-arrow-forward"></i></span></p>
                  <h1 className="mb-3 bread">Our Blog</h1>
                </div>
              </div>
            </div>
        </section>
        </>
    )
}

export default Bar
