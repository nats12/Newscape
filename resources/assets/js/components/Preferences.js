import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router';


class Preferences extends Component {
  constructor() {
    super()

  }

  render() {

    return (
      <div>
          <h1>User Preferences</h1>
          <Link className="button" to={`/`}>Preferences</Link>
      </div>
    )

  }
}

export default Preferences