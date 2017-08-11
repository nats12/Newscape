import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';


class Errors extends Component {
    constructor(props) {
        super()
    }

    render() {
        return (
            <div className="errors-modal">
                <div className="callout">
                <button className="close-button" aria-label="Close alert" type="button" onClick={() => this.props.toggleErrors()}>
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5>Oops...there seems to be a problem</h5>
                <ul>
                    {
                      this.props.errors.map((error, index) => <li key={index}>{error}</li>)
                    }
                  </ul>
                  <p>Please try again later</p>
                </div>
            </div>          
        )
    }
}

export default Errors