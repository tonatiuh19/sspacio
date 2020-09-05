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
                <li className="nav-item"><a href="index.html" className="nav-link">Explora</a></li>
                <li className="nav-item"><a href="about.html" className="nav-link">Publica un espacio</a></li>
                <li className="nav-item"><button data-toggle="collapse" data-target="#demo" className="nav-link btn btn-success btn-sm"><i className="fas fa-user-astronaut fa-1x"></i></button></li>
							<div id="demo" className="collapse">
								<div className="btn-group-vertical">
								<a href="dashboard/" className="btn btn-success btn-sm">Mis Espacios</a>
								<a href="profile/" className="btn btn-success btn-sm">Mi Perfil</a>
								<a href="admin/fin.php" className="btn btn-success btn-sm"><i className="fas fa-times-circle"></i> sesion</a>
								</div>
							</div>
                </ul>
            </div>
            </div>
        </nav>
        <section className="hero-wrap hero-wrap-2 js-fullheight" style={{backgroundImage: "url('images/bg_3.jpg')"}} data-stellar-background-ratio="0.5">
            <div className="overlay"></div>
            <div className="container">
              <div className="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div className="col-md-9 ftco-animate pb-5">
                    <p className="breadcrumbs"><li className="mr-2"><a href="index.html">Home <i className="ion-ios-arrow-forward"></i></a></li> <span>Blog <i className="ion-ios-arrow-forward"></i></span></p>
                  <h1 className="mb-3 bread">Our Blog</h1>
                </div>
              </div>
            </div>
        </section>
        </>
    )
}

export default Bar
