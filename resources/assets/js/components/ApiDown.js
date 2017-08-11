import React, { Component } from 'react';

import TopBar from './TopBar';

class ApiDown extends Component {
  constructor() {
    super()
  }

  render() {
    return(
            <div>
                <TopBar/>
                <div className="error-page">
                    <div className="row">
                        <div className="large-12 text-center">
                            <h1>500 Error</h1>
                            <p>There seems to be an issue connecting to the <a href="https://newsapi.org/" target="_blank">News Api</a>. Please try again later. </p>  
                        </div>
                    </div>
                </div>
            </div>
      )
  }
}

export default ApiDown;