import React from 'react'
import { Button, Modal } from 'react-bootstrap';

const Main = () => {
    const [show, setShow] = React.useState(false);
    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);

    return (
        <section className="ftco-section" id="what">
            <div className="container">
                <Button variant="success" onClick={handleShow}>
                    <i class="fas fa-plus-circle"></i> Añadir espacio
                </Button>

                <Modal show={show} onHide={handleClose}>
                    <Modal.Header closeButton>
                    <Modal.Title>Modal heading</Modal.Title>
                    </Modal.Header>
                    <Modal.Body>Woohoo, you're reading this text in a modal!</Modal.Body>
                    <Modal.Footer>
                    <Button variant="secondary" onClick={handleClose}>
                        Close
                    </Button>
                    <Button variant="primary" onClick={handleClose}>
                        Save Changes
                    </Button>
                    </Modal.Footer>
                </Modal>
            </div>
        </section>
    )
}

export default Main
