import React from 'react'
import { Button, Modal } from 'react-bootstrap';
import { connect } from 'react-redux'

const Main = ({spaces, spaces_fetch}) => {
    const [show, setShow] = React.useState(false);
    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);
    
    const [iselect, setIselect] = React.useState({
        selectedView: 'Eventos'
    });    
    const selectViews = [
        {
          name: 'Eventos', 
          minor: ['Salon de Fiestas', 'Terraza', 'Jardin', 'Terreno', 'Bodega', 'Palapa']
        }, {
          name: 'Almacenamiento', 
          minor: ['Bodega', 'Cuarto', 'Cochera', 'Refrigeracion']
        }
    ]

    const getMajorMethod = () => {
        const view = selectViews.filter(({name}) => name === iselect.selectedView)[0]
        return (
          <div className="form-group">
            <select className="form-control">
              {view.minor.map((m,index) => <option key={index}>{m}</option>)}
            </select>
          </div>
        )
    }

    const renderSpaces = () =>{
        console.log(spaces_fetch)
        
    }

    return (
        <section className="ftco-section" id="what">
            <div className="container">
                <Button variant="success" onClick={handleShow}>
                    <i className="fas fa-plus-circle"></i> Añadir espacio
                </Button>

                <Modal size="lg" show={show} onHide={handleClose}>
                    <Modal.Header closeButton>
                    <Modal.Title>Nuevo espacio</Modal.Title>
                    </Modal.Header>
                    <Modal.Body>
                        <form>
                            <div className="form-group">
                                <h5>Titulo:</h5>
                                <small id="emailHelp" className="form-text text-muted">¿Como te gustaria que se mostrara tu espacio?</small>
                                <input type="email" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ej: Terraza arbolada para tu boda"></input>
                            </div>
                            <div className="form-group">
                                <h5>Precio:</h5>
                                <small id="emailHelp" className="form-text text-muted">¿Cuanto te gustaria cobrar?</small>
                                <input type="email" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ej: $3000"></input>
                            </div>
                            <div className="form-group">
                                <label >Tipo:</label>
                                <small id="emailHelp" className="form-text text-muted">¿Que tipo de espacio estas por publicar?</small>
                                <select className="form-control" onChange={(e) => setIselect({selectedView: e.target.value})}>
                                    {selectViews.map(({name},index) => <option value={name} key={index}>{name}</option>)}
                                </select>
                            </div>
                            {getMajorMethod()}
                            <div className="form-group">
                                <label >Domicilio:</label>
                                <small id="emailHelp" className="form-text text-muted">¿Donde se ubica el espacio?</small>
                                <textarea className="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ej: Miguel Hidalgo, Centro, 47400 Lagos de Moreno, Jal."></textarea>
                            </div>
                        </form>
                    </Modal.Body>
                    <Modal.Footer>
                    <Button variant="secondary" onClick={handleClose}>
                        Cancelar
                    </Button>
                    <Button variant="primary" onClick={handleClose}>
                        Guardar
                    </Button>
                    </Modal.Footer>
                </Modal>
                {renderSpaces()}
            </div>
            <p></p>
            <div className="container">
                    <div className="text-center">
                    {
                        spaces_fetch ? <img src="https://media.giphy.com/media/Pkck2unt0XQfc4gs3R/giphy.gif" class="img-fluid" alt="Responsive image"></img> : null
                    }
                    </div>
                    {
                        
                        spaces.map((item, i) => 
                            <div className="card" key={i}>
                                <div className="card-header">
                                    {item.type}
                                    
                                    {/*item.sub-type*/}
                                </div>
                                <div className="card-body">
                                    <h5 className="card-title">{item.title}</h5>
                                    <p className="card-text">$ {item.price}</p>
                                    <p className="card-text">{item.address}</p>
                                    <a href="#" className="btn btn-primary btn-sm">Añadir disponibilidad</a>
                                    <a href="#" className="btn btn-primary btn-sm"><i className="fas fa-pencil-alt"></i></a>
                                    <a href="#" className="btn btn-primary btn-sm"><i className="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                        )
                    }
            </div>
        </section>
    )
}


function mapStateToProps(state){
    return {
        spaces: state.spaces.arraySpaces,
        spaces_fetch: state.spaces.fetching
    }
}

export default connect(mapStateToProps)(Main)
