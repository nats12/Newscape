import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Language from './Language';

class languages extends Component {
  constructor() {
    super()
  }

  renderLanguage = () => {

  }

  render() {

    const { languages, selectLanguage } = this.props;

    return(
        <div>
          <div className="languages">
            <div className="row">
            
              {
                languages.map((language, index) => { 
                  return <Language 
                  key={index} 
                  language={language} 
                  selectLanguage={selectLanguage}
                  />})
              }
            </div>
          </div>
          
        </div>
      )
  }
}

export default languages